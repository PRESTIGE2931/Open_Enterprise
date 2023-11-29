<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        {{-- Font Styles --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;500&family=Montserrat:wght@300;400;500;600;700&family=Quicksand:wght@300;400;500;600;700&family=Ruslan+Display&display=swap" rel="stylesheet">

        {{-- Taiwind Style --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Document Styles --}}
        <style>
                .blob {
                        background: url('images/blob-shape 1.png');
                        background-repeat: no-repeat;
                        background-size: 80%;
                        background-position: top right;
                }
                .jonis {
                        background: url('images/Jassir Jonis 1.png');
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: top center;
                }
                .dot{
                      background: url('images/Grid (1).png');
                }
        </style>

        <title>Open Enterprise</title>
</head>

<body class="bg-[#F9F9F9] relative">

        <nav class="w-[92%] h-[120px] mx-auto flex items-center justify-between">

                <x-logo class="w-[65%] md:w-[20%]" />

                <x-navigation  />
        </nav>

        {{-- HERO SECTION --}}
        <section class="flex flex-wrap items-center gap-y-10 px-2 md:px-20">

                <div class="w-full md:w-[45%]">
                        <h1 class="w-full md:w-[115%] font-ruslan text-[2.3rem] md:text-[3.8rem] font-bold">
                                A new model for open collaboration
                        </h1>

                        <p class="w-full md:w-[115%] font-[quicksand] text-base md:text-2xl">
                                Run an organization where members get rewarded for their contributions with
                                fractional ownership.
                        </p>

                        <button type="button"
                                class="bg-[#71A894] text-white font-semibold font-[quicksand] py-4 px-4 rounded-md mt-8">
                                Reuest early access
                        </button>
                </div>

                <div class="w-full h-[50vh] md:w-[53%] md:h-[82vh] relative blob">
                        <img src="{{ asset('images/main-Illustration.png') }}" alt=""
                                class="w-full h-full absolute top-0 right-0 md:left-0">
                </div>

        </section>

        {{-- PRODUCT SECTION --}}
        <section class="mt-10 md:mt-40">

                <h1 class="font-ruslan text-[2.2rem] md:text-[2.5rem] w-full text-center">
                        Reimagining what it means to work
                </h1>

                <p class="font-[quicksand] font-[500] text-center text-[#303031] mx-auto w-[95%] md:w-[65%]">
                        Teams and communities using Open Enterprise fundamentally unlock a reality of work that
                        reimagines how people engage in economic opportunity, meeting the demands and expectations of a
                        modern organization.
                </p>

                <div class="flex flex-wrap md:flex-nowrap items-center justify-evenly gap-y-2 py-10 px-2 mx-auto md:px-0 md:mx-0">

                        <x-product-card :path="asset('images/Icon.png')">
                                <h4 class="font-bold text-[1.3rem] font-[montserrat] text-center">
                                        Modern workforce
                                </h4>
                                <p class="w-[90%] font-[quicksand] font-[500] text-center text-[#303031] mx-auto">
                                        Multistakeholder governance aligns employees with the organization’s wider
                                        community.
                                </p>
                        </x-product-card>

                        <x-product-card :path="asset('images/Icon (2).png')">
                                <h4 class="font-bold text-[1.3rem] font-[montserrat] text-center">
                                        Modern workforce
                                </h4>
                                <p class="w-[90%] font-[quicksand] font-[500] text-center text-[#303031] mx-auto">
                                        Multistakeholder governance aligns employees with the organization’s wider
                                        community.
                                </p>
                        </x-product-card>

                        <x-product-card :path="asset('images/Icon (3).png')">
                                <h4 class="font-bold text-[1.3rem] font-[montserrat] text-center">
                                        Modern workforce
                                </h4>
                                <p class="w-[90%] font-[quicksand] font-[500] text-center text-[#303031] mx-auto">
                                        Multistakeholder governance aligns employees with the organization’s wider
                                        community.
                                </p>
                        </x-product-card>

                </div>

        </section>

        {{-- APP SHOW SECTION --}}
        <section class="flex flex-wrap items-center justify-between gap-y-10 md:gap-y-20 mt-10 md:mt-40 px-2 md:px-0">

                <div class="w-full md:w-1/2 md:pl-16">

                        <img src="{{ asset('images/Icon (4).png') }}" alt="" class="w-[11%]">
                        <h3 class="font-ruslan text-[#303031] text-[2.2rem] md:text-[2.6em]">
                                Kickstart an organization with your co-founders
                        </h3>
                        <p class="font-[quicksand] text-base text-[#303031] w-full md:w-[90%]">
                                It’s the early days, you just had a long conversation with two friends about a
                                meaningful challenge that you’re all passionate about and have a potential solution for.
                                You’re ready to embark the startup journey.
                        </p>
                </div>

                <div class="w-full md:w-1/2">
                        <div
                                class="border-4 border-[#303031] rounded-2xl mx-auto w-full md:w-[60%] px-5 md:px-10 pt-5 md:pt-10 pb-5 shadow-shatwo">
                                <h5 class="font-bold text-3xl font-[montserrat] pb-5">Members</h5>

                                <x-card-one :path="asset('images/Dillon Kydd 1.png')" :name="'Dillion Kydd'" :shares="'100 shares'" />

                                <x-card-one :path="asset('images/Anna Olsen 1.png')" :name="'Dillion Kydd'" :shares="'100 shares'" />

                                <x-card-one :path="asset('images/Kas Moss 1.png')" :name="'Dillion Kydd'" :shares="'100 shares'" />
                        </div>
                </div>

               <x-card-two />

                <div class="w-full md:w-1/2 pl-0 md:pl-16">

                        <img src="{{ asset('images/Icon (5).png') }}" alt="" class="w-[11%]">
                        <h3 class="font-ruslan text-[#303031] text-[2.2rem] md:text-[2.6em]">
                                Onboard user, investors and advisors as you grow
                        </h3>
                        <p class="font-[quicksand] text-base text-[#303031] w-full md:w-[90%]">
                                You’ve bootstrapped and delivered an MVP, and some investors and advisors are interested
                                in having a chat with you. As an Open Enterprise, you can onboard them seamlessly into
                                your digital organization and align them with your success.
                        </p>
                </div>

                <div class="w-full md:w-1/2 pl-0 md:pl-16">

                        <img src="{{ asset('images/Icon (6).png') }}" alt="" class="w-[11%]">
                        <h3 class="font-ruslan text-[#303031] text-[2.2rem] md:text-[2.6em]">
                                Engage highly committed contributors
                        </h3>
                        <p class="font-[quicksand] text-base text-[#303031] w-full md:w-[90%]">
                                You need talented people on-demand across various tasks that your full-time workforce
                                can’t prioritize at the moment. As an Open Enterprise, you can easily fund tasks and
                                have people apply to work on them in return for funds or shares.
                        </p>
                </div>

                <div class="w-full md:w-1/2 flex items-center justify-center flex-wrap gap-y-8 gap-x-4">

                        <x-card-three />

                        <div class="w-[80%] md:w-[52%]">
                                <div
                                        class="bg-[#F3F0EA] border-4 border-[#303031] rounded-2xl mx-auto w-full px-3 md:px-10 pt-3 md:pt-10 pb-6">
                                        <h5 class="font-bold text-lg md:text-2xl font-[montserrat] pb-3">3 appicants</h5>

                                        <x-card-four :path="asset('images/Dillon Kydd 1.png')" :name="'Jason Kwon'" :rating="'4.8'" />

                                        <x-card-four :path="asset('images/Anna Olsen 1.png')" :name="'Alex Rose'" :rating="'4.5'" />

                                        <x-card-four :path="asset('images/Kas Moss 1.png')" :name="'Lizzie Ulrich'" :rating="'4.2'" />
                                </div>
                        </div>

                        <x-card-five :rating="'4.5'"/>

                </div>

        </section>

        {{-- ABOUT / COMMUNITY AND MORE  SECTION --}}
        <section class="mt-10 md:mt-40">

            <h1 class="font-ruslan text-[2.2rem] md:text-[3rem] w-full text-center px-2 md:px-0">
                Help us improve Open Enterprise
            </h1>

            <p class="font-[quicksand] font-[500] text-center text-[#303031] mx-auto w-full md:w-[65%] text-base md:text-[1.1rem]">
                As an Open Enterprise ourselves, we are actively looking for new talent to join our mission of improving and delivering the Open Enterprise model to the world. Apply for open tasks and earn a stake in our success.
            </p>

            <div class="flex flex-wrap md:flex-nowrap items-center md:items-top gap-7 px-2 md:px-16 py-8 md:py-16">

                <x-card-community 
                     :title="'Ideate a list of features based on the Sociocracy model'"
                     :body="'We’re looking for someone interested in business theory and research that’ll help us bridge the gap between our s...'"
                     :button="'5'"
                     :date="'Apply by May 15'"
                />

                <x-card-community 
                     :title="'Update documentation with FAQs'"
                     :body="'Review our community chat for the most frequently asked questions and document answers for our product docs.'"
                     :button="'10'"
                     :date="'Apply by May 18'"
                />

                <x-card-community 
                     :title="'Tutorial video series'"
                     :body="'Create a series of video tutorials that cover everything from start to finish on using Open Enterprise.'"
                     :button="'40'"
                     :date="'Apply by May 20'"
                />
            </div>

            <div class="w-fit mx-auto">
                    <button type="button" class=" w-fit ml-auto bg-[#303031] text-white rounded-lg px-3 md:px-6 py-2 md:py-5 font-semibold text-sm md:text-lg">View more</button>
            </div>

        </section>

        {{-- SIGN UP EARLY ACCESS --}}
        <section class="py-12 px-2 md:px-0">
                <div class="w-full py-12 md:py-10 dot"></div>

                <div class="flex items-center justify-between px-2 md:px-20 relative">

                        <div class="w-full md:w-1/2">
                                <h3 class="font-ruslan text-[#303031] text-[2.2rem] md:text-[2.6em]">
                                        Start an Open Enterprise
                                </h3>
                                <p class="font-[quicksand] font-[500] text-base text-[#303031] w-[90%]">
                                        If you can’t wait to run a new or existing organization on Open Enterprise and are willing to explore and navigate the beta, we’d love to get you started.
                                </p>
                                <button type="button" class="bg-[#71A894] text-white font-semibold font-[quicksand] py-4 px-4 rounded-md mt-8">
                                Reuest early access
                                </button>
                        </div>

                        <div class="w-[60%] md:w-1/2 absolute top-6 right-0 md:static">
                                <img src="{{ asset('images/pablo-sign-in.png') }}" alt="" class="w-full h-full">
                        </div>

                </div>
        </section>

        {{-- FOOTER --}}
        <section class="flex flex-wrap items-center justify-between">
                <footer class="w-[92%] h-[120px] mx-auto flex flex-wrap items-center justify-between">

                        <img src="{{ asset('images/Logo.png') }}" alt="" class="w-2/3 md:w-[10%] order-2 md:order-1" />
        
                        <x-footer-link class="order-1 md:order-2"/>
        
                </footer>
        </section>

</body>
</html>
