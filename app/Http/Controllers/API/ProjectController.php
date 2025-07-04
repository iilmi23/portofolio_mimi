<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Project;
use App\Models\Biodata;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return response()->json([
            'success' => true,
            'data' => $projects
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_projek' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'screenshot' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $project = new Project();
        $project->nama_projek = $request->nama_projek;
        $project->deskripsi = $request->deskripsi;

        if ($request->hasFile('screenshot')) {
            $file = $request->file('screenshot');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $project->screenshot = 'uploads/' . $filename;
        }

        $project->save();

        return response()->json([
            'success' => true,
            'message' => 'Project berhasil ditambahkan!',
            'data' => $project
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json([
                'success' => false,
                'message' => 'Project tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json([
                'success' => false,
                'message' => 'Project tidak ditemukan'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'nama_projek' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'screenshot' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $project->nama_projek = $request->nama_projek;
        $project->deskripsi = $request->deskripsi;

        if ($request->hasFile('screenshot')) {
            if ($project->screenshot && file_exists(public_path($project->screenshot))) {
                @unlink(public_path($project->screenshot));
            }

            $file = $request->file('screenshot');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $project->screenshot = 'uploads/' . $filename;
        }

        $project->save();

        return response()->json([
            'success' => true,
            'message' => 'Project berhasil diperbarui!',
            'data' => $project
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json([
                'success' => false,
                'message' => 'Project tidak ditemukan'
            ], 404);
        }

        if ($project->screenshot && file_exists(public_path($project->screenshot))) {
            @unlink(public_path($project->screenshot));
        }

        $project->delete();

        return response()->json([
            'success' => true,
            'message' => 'Project berhasil dihapus!'
        ]);
    }
}