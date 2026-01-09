<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                Daftar Penyewa Kost
            </h2>
           <a href="{{ route('penyewa.create') }}" 
   class="inline-flex items-center px-4 py-2 bg-gray-900 text-black rounded-lg text-sm font-bold shadow-md transition duration-200">
    + Tambah Penyewa
</a>
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-gray-100">
                <div class="p-6">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50 text-gray-600 text-xs font-black uppercase tracking-wider">
                                <th class="px-6 py-4">Nama Lengkap</th>
                                <th class="px-6 py-4 text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 uppercase text-sm">
                            @forelse($penyewas as $p)
                                <tr class="hover:bg-indigo-50/50 transition duration-150">
                                    <td class="px-6 py-4 font-bold text-gray-700">{{ $p->nama_lengkap }}</td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{ route('penyewa.edit', $p->id) }}" class="text-indigo-600 hover:text-indigo-900 font-black transition">
                                            EDIT
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="px-6 py-12 text-center">
                                        <div class="flex flex-col items-center">
                                            <span class="text-4xl mb-2">📄</span>
                                            <p class="text-gray-400 font-medium italic">Belum ada data penyewa. Silakan klik tombol di pojok kanan atas.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>