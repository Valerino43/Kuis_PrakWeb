<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrakSewaController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'penyewa_id' => 'required|exists:penyewa,id',
        'kamar_id' => 'required|exists:kamar,id',
        'tanggal_mulai' => 'required|date',
        'tanggal_selesai' => 'required|date|after:tanggal_mulai',
        'harga_bulanan' => 'required|numeric|min:0',
    ]);

    \DB::transaction(function () use ($request) {
        // 1. Simpan Kontrak
        $kontrak = \App\Models\KontrakSewa::create($request->all());

        // 2. Update Status Kamar (Logic Bisnis C.5)
        \App\Models\Kamar::where('id', $request->kamar_id)->update(['status' => 'terisi']);
    });

    return redirect()->route('kontrak.index')->with('success', 'Kontrak berhasil dibuat!');
    }
}