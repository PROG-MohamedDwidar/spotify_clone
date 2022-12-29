{{-- @php
    $player="player";
@endphp --}}

<x-app-layout>
    <x-slot name="title">
        mixer
    </x-slot>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    <div class="h-full overflow-hidden flex flex-col">
        <div class="inline-block flex flex-row" style="height:83%;">
            <div class="inline-block w-1/3  h-full">
                
                <x-playlists.carousel :playlists='$playlists'>

                </x-playlists.carousel>
            </div>
            <div class="inline-block w-2/3 h-full overflow-y-scroll">
                <x-playlists.playlist-container>
                    <x-slot name="playlistTitle">
                        New
                    </x-slot>
                </x-playlists.playlist-container>
                <x-playlists.playlist-container>
                    <x-slot name="playlistTitle">
                        calm
                    </x-slot>
                </x-playlists.playlist-container>
                <x-playlists.playlist-container>
                    <x-slot name="playlistTitle">
                        study time
                    </x-slot>
                </x-playlists.playlist-container>
                <x-playlists.playlist-container>
                    <x-slot name="playlistTitle">
                        sleep time
                    </x-slot>
                </x-playlists.playlist-container>
            </div>
        </div>
            
            
            <x-player.player>
                
            </x-player.player>
           
        
    </div>
</x-app-layout>
