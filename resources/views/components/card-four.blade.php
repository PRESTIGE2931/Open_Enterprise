<div class="flex items-center gap-2 md:gap-5 mt-5 font-[consolas]">
        <img src="{{ $path }}" alt="" {{ $attributes->merge(["class" =>"rounded-full w-[40px]"]) }}>
                    <span class="flex items-center justify-between w-full">
                        <h6 class="font-semibold text-[#303031] text-sm md:text-lg">{{ $name }}</h6>
                        <p class="uppercase flex items-center gap-1 font-semibold text-[#303031] text-sm md:text-lg"> 
                                <img src="{{ asset('images/Star.png') }}" alt="" class="w-[20px]">
                                {{ $rating }}
                        </p>
                    </span>
        </div>