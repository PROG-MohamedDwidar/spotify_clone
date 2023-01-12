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
        <div class="inline-block flex flex-row bg-white" style="height:83%;">
            <div class="inline-block w-full overflow-scroll flex justify-center items-start">
                <table class="mt-4" >
                    <tr>
                        <th class="border-2 border-gray-800 px-8">donor name</th>
                        <th class="border-2 border-gray-800 px-8">donor email</th>
                        <th class="border-2 border-gray-800 px-8">donation amount</th>
                    </tr>
                    @foreach($donations as $don)
                        <tr>
                            <th class="border-2 border-gray-800 px-8">{{($don->donor)->name}}</th>
                            <th class="border-2 border-gray-800 px-8">{{$don->donor->email}}</th>
                            <th class="border-2 border-gray-800 px-8">{{$don->amount.'$'}}</th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
            
            
        <x-player.player>
                
        </x-player.player>
           
        
    </div>
</x-app-layout>
