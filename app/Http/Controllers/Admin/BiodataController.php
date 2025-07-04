<?php

namespace App\Http\Controllers\Admin;

use App\Models\Biodata;
use App\Http\Requests\StoreBiodataRequest;
use App\Http\Requests\UpdateBiodataRequest;
use App\Http\Controllers\Controller;


class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $biodata = Biodata::first(); // ambil 1 data pertama
        return view('home', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBiodataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Biodata $biodata)
    {
        //
        $biodata = Biodata::first();
        return view('admin.biodata.index', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biodata $biodata)
    {
        //
        $biodata = Biodata::first();
        // Jika tidak ada data, buat dummy agar form tetap bisa submit (untuk kasus single row)
        if (!$biodata) {
            $biodata = new Biodata();
            $biodata->id = 1; // id dummy agar form action tidak error
        }
        return view('admin.biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBiodataRequest $request, Biodata $biodata, $id)
    {
        //
        $biodata = Biodata::find($id);
        if (!$biodata) {
            $biodata = new Biodata();
        }

        $biodata->nama = $request->nama;
        $biodata->no_telepon = $request->no_telepon;
        $biodata->usia = $request->usia;
        $biodata->email = $request->email;
        $biodata->tanggal_lahir = $request->tanggal_lahir;
        $biodata->alamat = $request->alamat;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $biodata->foto = 'uploads/' . $filename;
        }

        $biodata->save();

        return redirect()->route('admin.biodata.show')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biodata $biodata)
    {
        //
    }
}
