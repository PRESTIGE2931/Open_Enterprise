<div {{ $attributes->merge([
        "class" => "w-full h-[220px] md:w-[420px] md:h-[320px] bg-white rounded-[8px] shadow-shaone grid place-content-center gap-3"
]) }}>

    <img src="{{ $path }}" alt="" class="w-[20%] md:w-[25%] mx-auto">

    {{ $slot }}

</div>