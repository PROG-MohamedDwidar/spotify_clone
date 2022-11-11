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
            
        </div>
        <div class="inline-block w-full bg-red-200 " style="height:17.0%;">    
            
            <x-player.player>
                
            </x-player.player>
           
        </div>
    </div>
</x-app-layout>
