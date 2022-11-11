<div class="inline-block w-full flex flex-col flex-nowrap  h-full text-center">
    {{-- bg-zinc-200 --}}
    <div style="display:inline-block;height:5%;"></div>
    <div class="inline-block w-full" style="height: 80%;">
    <div class="inline-block w-5/6 flex rounded overflow-hidden shadow-lg text-center mx-auto h-full min-w-max">
        <audio id="audio" src=""></audio>
        <div class="inline-block basis-1/4 bg-orange-200 flex">
            <img class="w-2/6 h-full inline-block" src="{{asset('storage/covers/avicii.jpg')}}">
            <div class="inline-block w-5/6 flex flex-col justify-center" >
                <p class="text-xl text-left ml-2 font-bold">the nights</p>
                <p class="text-left ml-2">avicii</p>
            </div>
        </div>
        <div class="inline-block basis-1/2 bg-green-200 flex flex-col">
            <div class="inline-block w-full h-1/2 text-center">
                <div class="m-auto">
                    <button class="mt-4 mx-8"><i class="fas fa-random fa-lg"></i></button>
                    <button class="mt-4 mx-8"><i class="fas fa-backward fa-lg"></i></button>
                    <button class="mt-4 mx-8"><i class="fas fa-play fa-lg"></i></button>
                    <button class="mt-4 mx-8"><i class="fas fa-forward fa-lg"></i></button>       
                    <button class="mt-4 mx-8"><i class="fas fa-repeat fa-lg"></i></button>
                </div>
            </div>
            <div class="inline-block flex flex-row content-center w-full h-1/2">
                <div class="inline w-1/6">2:45</div>
                <input class="h-1 w-4/6 mb-6 translate-y-3 top-1/2 " type="range" min="0" max="100">
                <div class="inline w-1/6">3:45</div>
            </div>
            
        </div>
        <div class="inline-block basis-1/4 flex flex-row content-center bg-yellow-200 text-center">
            <button class="mx-2"><i class="fas fa-microphone "></i></button>
            <button class="mx-2"><i class="fas fa-volume-mute "></i></button>
            <input class="h-1 w-20 my-auto" type="range" min="0" max="100">
        </div>
    </div>
    </div>
    <div style="display:inline-block;height:5%;"></div>
</div>