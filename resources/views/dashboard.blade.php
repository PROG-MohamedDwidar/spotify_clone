<x-app-layout>
    <x-slot name="title">
        mixer
    </x-slot>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="h-4/5 flex bg-grey-200">
        playlists
    </div>
    <div class="h-1/5 bg-red-200">
        player
    </div>
</x-app-layout>
