<div class="w-[60%] md:w-[35%] md:mt-10">
        <div
                class="border-4 border-[#71A894] rounded-2xl mx-auto w-full px-5 md:px-10 pt-5 md:pt-10 pb-5 font-[consolas] flex flex-col gap-1">

                <img src="{{ asset('images/Cover.png') }}" alt="" class="mx-auto w-[70px] rounded-full">

                <h4 class="font-[900] text-center text-[1rem] md:text-[1.4rem]">Alex Rose</h4>

                <h6 class="font-light text-center text-sm md:text-base text-[#66645E]">UX Writer</h6>

                <span class="flex items-center justify-between w-full">

                    <p class="text-sm md:text-base">4 comimts</p>

                    <p class="uppercase flex items-center gap-1 font-semibold text-[#303031]text-sm md:text-lg"> 

                            <img src="{{ asset('images/Star.png') }}" alt="" class="w-[20px]">

                            {{ $rating }}

                    </p>

                </span>

                <button type="button" class="bg-[#303031] text-white text-sm md:text-base w-full py-2 md:py-3 mx-auto rounded-md md:rounded-2xl" >View profile</button>

        </div>
</div>