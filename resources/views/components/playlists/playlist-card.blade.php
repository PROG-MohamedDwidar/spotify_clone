@php
        
        $out = strlen($in) > 16 ? substr($in,0,13)."..." : $in;   
@endphp

<div class="flex flex-col inline-block h-min bg-gray-700 max-w-sm rounded-lg px-1 py-1.5 mx-1.5 hover:bg-gray-500 transition ease-out duration-200">
    <div class="max-w-sm rounded-2xl overflow-hidden shadow-2xl bg-gray-900 my-1 mx-2">
        <img class="w-32 h-32" src="{{asset("storage/covers/zahma.jpg")}}">
    </div>

    <div class="text-xl font-bold text-zinc-300">{{$out}}</div>
</div>






{{-- <div class="inline-block w-full flex content-center justify-middle"> --}}
{{-- </div> --}}
    
    {{--  --}}

