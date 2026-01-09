<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Pembayaran;

class DashboardController extends Controller
{
    public function index()
{
    $total_kamar = \App\Models\Kamar::count();
    $tersedia = \App\Models\Kamar::where('status', 'tersedia')->count();
    $terisi = \App\Models\Kamar::where('status', 'terisi')->count();
    $pendapatan = \App\Models\Pembayaran::where('status', 'lunas')->sum('jumlah_bayar');

    return view('dashboard', compact('total_kamar', 'tersedia', 'terisi', 'pendapatan'));
    }
}