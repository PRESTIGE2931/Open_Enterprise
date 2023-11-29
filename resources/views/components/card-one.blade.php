
<div class="flex items-center gap-5 mt-5 ">
<img src="{{ $path }}" alt="" {{ $attributes->merge(["class" =>"rounded-full"]) }}>
            <span>
                <h6 class="font-semibold font-[montserrat] text-[#303031] text-lg md:text-2xl">{{ $name }}</h6>
                <p class="uppercase text-[#66645E] text-sm">{{ $shares }}</p>
            </span>
</div>