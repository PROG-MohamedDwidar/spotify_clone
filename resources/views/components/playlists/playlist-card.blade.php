<div class="max-w-sm rounded-md overflow-hidden shadow-xl bg-gray-800 hover:bg-zinc-700 mx-2">
    <div class="inline-block w-full flex content-center justify-middle">
        <img class="w-40 h-40" src="https://i.scdn.co/image/ab67616d00001e0289e3b38cb86ef8cfb0cd8def">
    </div>
    @php
        // $in="ma'ak fe el zahma";
        $out = strlen($in) > 16 ? substr($in,0,13)."..." : $in;   
    @endphp
    <div class="text-xl font-bold text-white">{{$out}}</div>

</div>