<div class="w-full md:w-1/3 h-fit shadow-shaone font-[consolas] p-6 rounded-2xl bg-white flex flex-col gap-5">
        <h4 class="font-bold text-base md:text-xl text-[#303031]">
                {{ $title }}
        </h4>
        <p class="font-normal text-sm md:text-lg text-[#303031]">
                {{ $body }}
        </p>
        <div class="flex items-center justify-between w-full">
                <button class="py-1 px-3 rounded-full bg-[#71A894] text-white text-sm md:text-base"> {{ $button }} AUT </button>
                <span class="font-bold text-[#303031] text-sm md:text-base"> {{ $date }} </span>
        </div>
</div>