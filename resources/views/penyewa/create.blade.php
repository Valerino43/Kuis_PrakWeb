<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-indigo-800 leading-tight">
            {{ __('Registrasi Penyewa Baru') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-2xl rounded-3xl p-10 border border-gray-100">
                <form action="{{ route('penyewa.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="md:col-span-2">
                            <label class="block text-sm font-black text-gray-700 uppercase mb-2">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="w-full rounded-xl border-gray-200 focus:ring-indigo-500" placeholder="Masukkan nama sesuai KTP">
                            @error('nama_lengkap') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-black text-gray-700 uppercase mb-2">Nomor KTP</label>
                            <input type="text" name="nomor_ktp" class="w-full rounded-xl border-gray-200 focus:ring-indigo-500" placeholder="16 Digit No. KTP">
                        </div>

                        <div>
                            <label class="block text-sm font-black text-gray-700 uppercase mb-2">No. WhatsApp</label>
                            <input type="text" name="nomor_telepon" class="w-full rounded-xl border-gray-200 focus:ring-indigo-500" placeholder="0812...">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-black text-gray-700 uppercase mb-2">Alamat Asal</label>
                            <textarea name="alamat_asal" rows="2" class="w-full rounded-xl border-gray-200 focus:ring-indigo-500"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-black text-gray-700 uppercase mb-2">Pekerjaan</label>
                            <select name="pekerjaan" class="w-full rounded-xl border-gray-200 font-bold text-sm">
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-10 pt-6 border-t border-gray-100 flex justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-900 text-black rounded-lg text-sm font-bold shadow-md transition duration-200">
                            Daftarkan Penyewa
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

