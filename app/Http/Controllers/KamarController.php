<?php

namespace App\Http\Controllers;

use App\Models\Kamar; // Tambahkan baris ini
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamar.index', compact('kamars'));
    }

    // Tambahkan di dalam class KamarController

public function edit($id)
{
    // Mengambil data kamar berdasarkan ID
    $kamar = Kamar::findOrFail($id);
    
    // Mengarahkan ke view edit (pastikan file view-nya ada)
    return view('kamar.edit', compact('kamar'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nomor_kamar' => 'required',
        'status' => 'required|in:tersedia,terisi', // Pastikan validasi status masuk
        'harga_bulanan' => 'required|numeric',
    ]);

    $kamar = Kamar::findOrFail($id);
    $kamar->update($request->all());

    return redirect()->route('kamar.index')->with('success', 'Status kamar berhasil diperbarui!');
    }
}



