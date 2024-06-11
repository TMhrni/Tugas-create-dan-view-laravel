<?php

namespace App\Http\Controllers;

use App\Models\mahasiswaModel;
use App\Models\prodiModel;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = mahasiswaModel::orderBy('nim', 'asc')->get();
        return view('mahasiswa', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_mahasiswa');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama,
            'alamat' => $request->alamat,
            'ttl_lahir' => $request->ttl,
            'jk' => $request->jk
        ];
        $simpan = mahasiswaModel::create($data);
        if ($simpan) {
            echo "Berhasil";
            return redirect()->to('/mahasiswa');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
