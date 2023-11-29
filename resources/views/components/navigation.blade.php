<ul {{  $attributes->merge([
        "class" => "hidden md:flex items-center justify-between gap-10"
]) }}>

        <x-nav-link class="text-[#303031] font-[quicksand] font-[500]" :href="'/home'">
                Why Open Enterprise
        </x-nav-link>

        <x-nav-link class="text-[#303031] font-[quicksand] font-[500]" :href="'/home'">
                Features
        </x-nav-link>

        <x-nav-link class="text-[#303031] font-[quicksand] font-[500]" :href="'/home'">
                Contribute
        </x-nav-link>

        <x-nav-link class="text-[#71A894] font-[quicksand] font-[700]" :href="'/home'">
                Request early access
        </x-nav-link>

</ul>




<div class="md:hidden">
        <button type="menu" class="py-3 px-5 rounded-full md:hidden bg-white peer" style="box-shadow: inset 10px 10px 10px 0px rgba(0, 0, 0, 0.215)">
                ::
        </button>
        <ul {{  $attributes->merge([
                "class" => "w-3/4 bg-white fixed top-[80px] right-0 h-fit hidden md:hidden z-10 rounded-l-xl peer-focus:block py-10 pl-10 shadow-shaone"
                ]) }}>

                        <x-nav-link class="text-[#303031] font-[quicksand] font-[500] py-2 text-base list-item list-disc" :href="'/home'">
                                Why Open Enterprise
                        </x-nav-link>

                        <x-nav-link class="text-[#303031] font-[quicksand] font-[500] py-2 text-base list-item list-disc" :href="'/home'">
                                Features
                        </x-nav-link>

                        <x-nav-link class="text-[#303031] font-[quicksand] font-[500] py-2 text-base list-item list-disc" :href="'/home'">
                                Contribute
                        </x-nav-link>

                        <x-nav-link class="text-[#71A894] font-[quicksand] font-[700] py-2 text-base list-item list-disc" :href="'/home'">
                                Request early access
                        </x-nav-link>

        </ul>
</div>