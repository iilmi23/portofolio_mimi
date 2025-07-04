<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Controllers\Controller;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
        // Jika kamu pakai 'portofolio.show' ubah jadi: return view('portofolio.show', ...)
    }

    /**
     * Menampilkan form tambah project.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Simpan project baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_projek' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'screenshot' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

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

        return redirect()->route('admin.project.index')->with('success', 'Project berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit project.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update data project.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'nama_projek' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'screenshot' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $project->nama_projek = $request->nama_projek;
        $project->deskripsi = $request->deskripsi;

        if ($request->hasFile('screenshot')) {
            // Hapus screenshot lama jika ada
            if ($project->screenshot && file_exists(public_path($project->screenshot))) {
                @unlink(public_path($project->screenshot));
            }

            $file = $request->file('screenshot');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $project->screenshot = 'uploads/' . $filename;
        }

        $project->save();

        return redirect()->route('admin.project.index')->with('success', 'Project berhasil diperbarui!');
    }

    /**
     * Hapus data project.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);

        if ($project->screenshot && file_exists(public_path($project->screenshot))) {
            @unlink(public_path($project->screenshot));
        }

        $project->delete();

        return redirect()->back()->with('success', 'Project berhasil dihapus!');
    }

    public function detail($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.detail', compact('project'));
    }
}
