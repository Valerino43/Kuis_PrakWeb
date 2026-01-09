<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard Utama</h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <p class="text-sm font-medium text-gray-400 uppercase">Total Kamar</p>
                    <p class="text-3xl font-bold text-gray-800">{{ $total_kamar }}</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <p class="text-sm font-medium text-gray-400 uppercase text-green-500">Tersedia</p>
                    <p class="text-3xl font-bold text-green-600">{{ $tersedia }}</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <p class="text-sm font-medium text-gray-400 uppercase text-red-500">Terisi</p>
                    <p class="text-3xl font-bold text-red-600">{{ $terisi }}</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <p class="text-sm font-medium text-gray-400 uppercase text-indigo-500">Total Pendapatan</p>
                    <p class="text-xl font-bold text-indigo-600 uppercase">Rp {{ number_format($pendapatan, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>