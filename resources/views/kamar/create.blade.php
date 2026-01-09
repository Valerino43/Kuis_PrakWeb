<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-indigo-800 leading-tight">
            {{ __('Tambah Kamar Baru') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-2xl rounded-3xl p-8 border border-gray-100">
                <form action="{{ route('kamar.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label class="block text-sm font-black text-gray-700 uppercase mb-2">Nomor Kamar</label>
                            <input type="text" name="nomor_kamar" value="{{ old('nomor_kamar') }}" 
                                class="w-full rounded-xl border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 transition" placeholder="Contoh: A1">
                            @error('nomor_kamar') <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-black text-gray-700 uppercase mb-2">Tipe Kamar</label>
                                <select name="tipe" class="w-full rounded-xl border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 uppercase font-bold text-sm">
                                    <option value="standard">Standard</option>
                                    <option value="deluxe">Deluxe</option>
                                    <option value="vip">VIP</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-black text-gray-700 uppercase mb-2">Harga Bulanan (Rp)</label>
                                <input type="number" name="harga_bulanan" value="{{ old('harga_bulanan') }}" 
                                    class="w-full rounded-xl border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="0">
                                @error('harga_bulanan') <p class="text-red-500 text-xs mt-1 font-bold">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-black text-gray-700 uppercase mb-2">Fasilitas</label>
                            <textarea name="fasilitas" rows="3" class="w-full rounded-xl border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="AC, Kamar Mandi Dalam, WiFi..."></textarea>
                        </div>

                        <div class="flex justify-end gap-4 mt-4">
                            <a href="{{ route('kamar.index') }}" class="px-6 py-3 text-sm font-bold text-gray-500 hover:text-gray-700 transition">Batal</a>
                            <button type="submit" class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-black rounded-xl shadow-lg shadow-indigo-200 transition transform hover:-translate-y-1">
                                Simpan Kamar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>