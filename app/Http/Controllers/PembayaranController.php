<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'kontrak_sewa_id' => 'required',
        'bulan' => 'required|integer|between:1,12',
        'tahun' => 'required|integer|digits:4',
        'jumlah_bayar' => 'required|numeric',
        'bukti_transfer' => 'nullable|image|mimes:jpg,jpeg,png|max:2048' // Bonus 1
    ]);

    $data = $request->all();

    if ($request->hasFile('bukti_transfer')) {
        $file = $request->file('bukti_transfer');
        $path = $file->store('bukti_transfer', 'public');
        $data['bukti_transfer'] = $path;
    }

    \App\Models\Pembayaran::create($data);

    return redirect()->route('pembayaran.index');
}
   
}
