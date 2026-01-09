<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="font-bold text-indigo-600">
        📊 Dashboard
    </x-nav-link>
    <x-nav-link :href="route('kamar.index')" :active="request()->routeIs('kamar.*')" class="font-bold text-indigo-600">
        🏨 Manajemen Kamar
    </x-nav-link>
    <x-nav-link :href="route('penyewa.index')" :active="request()->routeIs('penyewa.*')" class="font-bold text-indigo-600">
        👥 Daftar Penyewa
    </x-nav-link>
</div>