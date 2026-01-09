<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index()
    {
        // Tampilkan semua penyewa (Poin B.1)
        $penyewas = Penyewa::all();
        return view('penyewa.index', compact('penyewas'));
    }

    public function create()
    {
        return view('penyewa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'nomor_telepon' => 'required|max:15',
            'nomor_ktp' => 'required|unique:penyewa,nomor_ktp',
            'alamat_asal' => 'required',
            'pekerjaan' => 'required',
        ]);

        Penyewa::create($request->all());

        return redirect()->route('penyewa.index')->with('success', 'Data penyewa berhasil ditambahkan!');
    }
}