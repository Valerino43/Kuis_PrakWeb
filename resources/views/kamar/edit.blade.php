<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            Edit Data Kamar: <span class="text-indigo-600">{{ $kamar->nomor_kamar }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl p-8 border border-gray-100">
                
                <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
                    @csrf
                    @method('PUT') <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 uppercase mb-2">Nomor Kamar</label>
                            <input type="text" name="nomor_kamar" value="{{ $kamar->nomor_kamar }}" 
                                class="w-full rounded-xl border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-gray-700 uppercase mb-2">Harga Bulanan</label>
                            <input type="number" name="harga_bulanan" value="{{ $kamar->harga_bulanan }}" 
                                class="w-full rounded-xl border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm">
                        </div>

                        <div class="flex justify-end gap-3 pt-6">
                            <a href="{{ route('kamar.index') }}" class="px-6 py-2.5 text-sm font-bold text-gray-500 hover:text-gray-700 transition">
                                BATAL
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-900 text-black rounded-lg text-sm font-bold shadow-md transition duration-200">
                                SIMPAN PERUBAHAN
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>