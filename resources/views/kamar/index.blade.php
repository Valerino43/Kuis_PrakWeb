<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-indigo-800 uppercase tracking-tight">
                🏨 Manajemen Kamar Kost
            </h2>
            <a href="{{ route('kamar.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-xl shadow-lg transition duration-200 transform hover:-translate-y-1 font-bold">
                + Kamar Baru
            </a>
        </div>
    </x-slot>

    

    <div class="py-10 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-2xl rounded-3xl overflow-hidden border border-gray-100">
                <table class="w-full text-left">
                    <thead class="bg-indigo-50 border-b border-indigo-100">
                        <tr>
                            <th class="px-6 py-4 text-indigo-900 font-black uppercase text-xs">No. Kamar</th>
                            <th class="px-6 py-4 text-indigo-900 font-black uppercase text-xs">Tipe</th>
                            <th class="px-6 py-4 text-indigo-900 font-black uppercase text-xs">Harga/Bulan</th>
                            <th class="px-6 py-4 text-indigo-900 font-black uppercase text-xs text-center">Status</th>
                            <th class="px-6 py-4 text-indigo-900 font-black uppercase text-xs text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($kamars as $kamar)
                        <tr class="hover:bg-indigo-50/30 transition duration-150">
                            <td class="px-6 py-4 font-bold text-gray-800 text-lg">{{ $kamar->nomor_kamar }}</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-xs font-bold uppercase">{{ $kamar->tipe }}</span>
                            </td>
                            <td class="px-6 py-4 font-semibold text-indigo-600">Rp {{ number_format($kamar->harga_bulanan, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-center">
                                @if($kamar->status == 'tersedia')
                                    <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-black bg-green-100 text-green-700 uppercase border border-green-200">
                                        ● Tersedia
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-black bg-red-100 text-red-700 uppercase border border-red-200">
                                        ● Terisi
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="inline-flex gap-3">
                                    <a href="{{ route('kamar.edit', $kamar->id) }}" class="text-blue-600 hover:text-blue-800 font-bold text-sm">Edit</a>
                                    <button class="text-red-500 hover:text-red-700 font-bold text-sm">Hapus</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>