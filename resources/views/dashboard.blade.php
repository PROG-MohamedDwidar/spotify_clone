<x-app-layout>
    <x-slot name="title">
        mixer
    </x-slot>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="inline-block flex h-5/6 bg-red-200">
        playlists
    </div>
    <div class="inline-block h-1/6 w-full">
        <x-player.player>
            
        </x-player.player>
    </div>
</x-app-layout>
