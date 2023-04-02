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
<form method="POST" action="/uitloggen">
    @csrf
    <input type="submit" value="Uitloggen" class="cursor-pointer"/>
</form>
