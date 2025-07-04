<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodata = Biodata::all();
        return response()->json([
            'success' => true,
            'data' => $biodata
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'no_telepon' => 'required|string',
            'usia' => 'required|integer',
            'email' => 'required|email',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $biodata = new Biodata($request->except('foto'));

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $biodata->foto = 'uploads/' . $filename;
        }

        $biodata->save();

        return response()->json([
            'success' => true,
            'message' => 'Biodata berhasil ditambahkan',
            'data' => $biodata
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $biodata = Biodata::find($id);

        if (!$biodata) {
            return response()->json([
                'success' => false,
                'message' => 'Biodata tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $biodata
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $biodata = Biodata::find($id);
        if (!$biodata) {
            return response()->json([
                'success' => false,
                'message' => 'Biodata tidak ditemukan'
            ], 404);
        }

        $biodata->fill($request->except('foto'));

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $biodata->foto = 'uploads/' . $filename;
        }

        $biodata->save();

        return response()->json([
            'success' => true,
            'message' => 'Biodata berhasil diperbarui',
            'data' => $biodata
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        if (!$biodata) {
            return response()->json([
                'success' => false,
                'message' => 'Biodata tidak ditemukan'
            ], 404);
        }

        $biodata->delete();

        return response()->json([
            'success' => true,
            'message' => 'Biodata berhasil dihapus'
        ]);
    }
}
