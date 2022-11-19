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
        <div class="inline-block flex flex-row flex-wrap overflow-y-scroll" style="height:83%;">
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            <x-playlists.playlist-card>
                <x-slot name="in">
                    best of ado
                </x-slot>
            </x-playlists.playlist-card>
            
        </div>
        {{-- <div class="inline-block w-full bg-red-200 " style="height:17.0%;">     --}}
            
            <x-player.player>
                
            </x-player.player>
           
        {{-- </div> --}}
    </div>
</x-app-layout>
