<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Riwayat Pembayaran</h2>
            <a href="{{ route('pembayaran.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-bold">
                + Catat Bayar
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full text-left">
                    <thead class="bg-gray-100 border-b">
                        <tr>
                            <th class="p-4 font-bold">Penyewa / Kamar</th>
                            <th class="p-4 font-bold">Periode</th>
                            <th class="p-4 font-bold">Jumlah</th>
                            <th class="p-4 font-bold">Status</th>
                            <th class="p-4 font-bold">Bukti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pembayarans as $p)
                        <tr class="border-b">
                            <td class="p-4">
                                <div class="font-bold">{{ $p->kontrakSewa->penyewa->nama_lengkap }}</div>
                                <div class="text-xs text-gray-500">Kamar: {{ $p->kontrakSewa->kamar->nomor_kamar }}</div>
                            </td>
                            <td class="p-4">{{ date('F', mktime(0, 0, 0, $p->bulan, 10)) }} {{ $p->tahun }}</td>
                            <td class="p-4 font-semibold text-green-600">Rp {{ number_format($p->jumlah_bayar, 0, ',', '.') }}</td>
                            <td class="p-4">
                                <span class="px-2 py-1 {{ $p->status == 'lunas' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }} rounded text-xs font-bold uppercase">
                                    {{ $p->status }}
                                </span>
                            </td>
                            <td class="p-4">
                                @if($p->bukti_transfer)
                                    <a href="{{ asset('storage/' . $p->bukti_transfer) }}" target="_blank" class="text-blue-500 text-xs underline">Lihat Foto</a>
                                @else
                                    <span class="text-gray-400 text-xs italic">Tidak ada</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>