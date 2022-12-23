<div class="c-header">
    <ul class="flex w-full justify-center">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-nav-link>
        <x-nav-link :href="route('wedstrijden')" :active="request()->routeIs('wedstrijden')">
            {{ __('Wedstrijden') }}
        </x-nav-link>
        <x-nav-link :href="route('leden')" :active="request()->routeIs('leden')">
            {{ __('Leden') }}
        </x-nav-link>
        <x-nav-link :href="route('competitie')" :active="request()->routeIs('competitie')">
            {{ __('Competitie') }}
        </x-nav-link>
        <form method="POST">
            <input type="submit" value="Uitloggen" class="cursor-pointer" />
        </form>
    </ul>
    <div class="flex justify-center mt-12 mb-4">
        <h2 class="tracking-[10px] text-2xl font-bold text-white uppercase">
            Tik 'm aan ouwe!
        </h2>
    </div>
</div>
