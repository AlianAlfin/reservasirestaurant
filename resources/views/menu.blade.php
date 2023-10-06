@extends('layouts.navbar')
@section('container')
    <div class="dark:bg-gray-900 lg:pt-[85px] pt-[74px]">
        <div
            class="flex flex-col lg:flex-row items-stretch justify-between lg:px-0 px-6 lg:py-20 py-8 2xl:mx-auto 2xl:container">
            <div class="z-30 relative lg:w-1/2">
                <div
                    class="hidden dark:bg-gray-800 bg-gray-100 w-full lg:w-10/12 lg:h-full lg:flex justify-end items-center">
                    <div class="w-full lg:w-auto lg:-mr-32">
                        <img src="{{ asset('asset/img/chef.jpg') }}" alt="image with decent chairs"
                            class="w-full relative z-30 lg:pl-20 px-6 py-14" />
                    </div>
                </div>
                <div class="absolute top-0 dark:bg-gray-800 bg-gray-100 md:h-96 w-full hidden md:block lg:hidden"></div>
                <div class="w-full h-full lg:hidden">
                    <img src="{{ asset('asset/img/chef.jpg') }}" alt="image with decent chairs"
                        class="w-full relative z-30 lg:pl-20 md:px-6 py-5 md:py-14" />
                </div>
            </div>
            <div class="bg-gray-100 dark:bg-gray-800 lg:w-1/2 lg:ml-12 lg:p-14 p-8 flex items-center ">
                <div>
                    <h1
                        class="font-h1 dark:text-white md:w-8/12 lg:w-10/12 xl:8/12 2xl:w-8/12 w-full xl:text-5xl sm:text-5xl text-4xl font-semibold text-gray-800 capitalize">
                        Indonesian Tradisional Food</h1>
                    <p
                        class="text-justify font-p dark:text-gray-300 md:w-9/12 lg:w-11/12 xl:w-10/12 2xl:9/12 text-base leading-normal text-gray-600 mt-5">
                        Indonesian cuisine is one of the richest culinary traditions in the world, and is loaded with
                        intense flavours. The richness of its cuisine is a reflection of the diversity of cultures and
                        traditions of the archipelago which consists of around 6,000 inhabited islands, and occupies an
                        important role in Indonesia's national culture in general.</p>
                    <button
                        class="font-h1 dark:bg-white dark:hover:bg-gray-400 dark:hover:text-gray-100 dark:text-gray-800 sm:w-auto w-full mt-8 text-base justify-between focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 focus:outline-none hover:bg-orange-600 font-medium leading-none text-white py-4 px-8 bg-orange-500 flex items-center">
                        <a href="{{ route('reservations.step.one') }}"> Reservasi</a>
                        <div class="ml-2 mt-0.5">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1.svg"
                                alt="arrow">
                            <img class="dark:block hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1dark.svg" alt="arrow">
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 dark:bg-gray-900 text-center lg:py-10 md:py-8 py-6  ">
        <h1 class="font-extrabold font-h1 w-10/12 mx-auto md:w-full lg:text-4xl text-3xl lg:leading-9 md:leading-7 dark:text-white leading-9 text-center text-gray-800"
            id="menu-baru">
            Our <span class="text-orange-500"> Menu</span>
        </h1>
    </div>

    {{-- <p
        class="font-h1 mt-16 lg:p-0 p-4 w-10/12 mx-auto md:w-full lg:ml-14 lg:mt-20 font-extrabold lg:text-3xl text-3xl lg:leading-9 md:leading-7 dark:text-white leading-9 text-gray-800">
        Pizza
    </p> --}}
    <div class="grid lg:grid-cols-3 lg:py-11 lg:px-11 gap-5 font-sans">
        <div class="bg-slate-100 lg:p-0 p-4 text-justify ">
            <h1 class="text-bold font-extrabold lg:m-5 text-xl text-slate-600 flex justify-center font-h1">Nasi Goreng</h1>
            <p class="m-5 font-p text-base">Nasi Goreng is a fragrant and flavorful Indonesian fried rice dish. Cooked rice
                is stir-fried with a medley of ingredients such as diced vegetables (like carrots, peas, and bell peppers),
                bits of meat (chicken, shrimp, or beef), and sometimes small pieces of omelette. The dish is seasoned with
                kecap manis (sweet soy sauce), garlic, shallots, and often accompanied by a side of sliced cucumber,
                tomatoes, and a fried egg on top.</p>
        </div>
        <div class="bg-slate-100 lg:p-0 p-4 text-justify ">
            <h1 class="text-bold font-extrabold lg:m-5 text-xl text-slate-600 flex justify-center font-h1">Rendang</h1>
            <p class="m-5 font-p text-base">Rendang is a slow-cooked, aromatic beef dish originating from West Sumatra. The
                beef is simmered in a rich and spicy coconut milk-based sauce until it becomes incredibly tender and the
                flavors have melded together. The sauce is a harmonious blend of lemongrass, galangal, garlic, ginger,
                turmeric, chilies, and other spices, creating a complex and deeply savory flavor profile.</p>
        </div>
        <div class="bg-slate-100 lg:p-0 p-4 text-justify ">
            <h1 class="text-bold font-extrabold lg:m-5 text-xl text-slate-600 flex justify-center font-h1">Sate</h1>
            <p class="m-5 font-p text-base">Sate, also known as satay, consists of skewered and grilled pieces of meat,
                which are typically served with a dipping sauce. The meat is marinated with a mixture of spices, often
                including turmeric, coriander, and cumin, before being grilled over an open flame. The most common sate
                types are chicken, beef, and lamb. They are served with a flavorful peanut sauce, sometimes accompanied by
                rice cakes or lontong (compressed rice cakes).</p>
        </div>
        <div class="bg-slate-100 lg:p-0 p-4 text-justify ">
            <h1 class="text-bold font-extrabold lg:m-5 text-xl text-slate-600 flex justify-center font-h1">Gado-Gado</h1>
            <p class="m-5 font-p text-base">Gado-Gado is a colorful and hearty Indonesian salad that features a variety of
                blanched or steamed vegetables such as bean sprouts, spinach, potatoes, and cabbage, along with sliced tofu
                and tempeh. The dish is brought together by a luscious peanut sauce that's a harmonious blend of sweet,
                spicy, and savory flavors. A hard-boiled egg and prawn crackers often complete the dish.</p>
        </div>
        <div class="bg-slate-100 lg:p-0 p-4 text-justify ">
            <h1 class="text-bold font-extrabold lg:m-5 text-xl text-slate-600 flex justify-center font-h1">Soto</h1>
            <p class="m-5 font-p text-base">Soto is a comforting Indonesian soup that varies by region. It typically
                includes a clear broth infused with aromatic spices like lemongrass, turmeric, and ginger. The broth is then
                combined with pieces of cooked chicken, beef, or other meats. Accompaniments like vermicelli noodles,
                hard-boiled eggs, and crispy fried shallots are added to complete this warming and flavorful dish.</p>
        </div>
        <div class="bg-slate-100 lg:p-0 p-4 text-justify ">
            <h1 class="text-bold font-extrabold lg:m-5 text-xl text-slate-600 flex justify-center font-h1">Nasi Padang</h1>
            <p class="m-5 font-p text-base">Nasi Padang is a feast of flavors from West Sumatra, where a variety of
                pre-cooked dishes are served with steamed rice. These dishes can range from spicy curries to rendang, fried
                fish, cassava leaves cooked in coconut milk (called gulai daun singkong), and various other specialties. The
                array of dishes on the table is a hallmark of this cuisine.</p>
        </div>
    </div>

    <div class="2xl:container 2xl:mx-auto">
        <div class="py-6 lg:px-20 md:px-6 px-4">
            <div
                class="grid lg:grid-cols-2 sm:grid-cols-2 grid-cols-1 lg:gap-y-12 lg:gap-x-8 sm:gap-y-10 sm:gap-x-6 gap-y-6 lg:mt-12 mt-10">

                <div>
                    <div class="relative group">
                        <div
                            class="flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full">
                        </div>
                        <img class="w-full h-[400px] object-cover" src="{{ asset('asset/img/eat.jpg') }}" alt="" />
                        <div class="absolute bottom-0 p-8 w-full opacity-0 group-hover:opacity-100">
                            <button
                                class="bg-white font-medium text-base leading-4 border-2 border-white py-3 w-full mt-2 text-black">Eat
                                Menu</button>
                            <button
                                class="bg-transparent font-medium text-base leading-4 border-2 border-white py-3 w-full mt-2 text-white">Quick
                                <a href="eat.pdf" target="_blank">View Pdf</a> </button>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="relative group">
                        <div
                            class="flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full">
                        </div>
                        <img class="w-full h-[400px] object-cover" src="{{ asset('asset/img/drink.jpg') }}"
                            alt="" />
                        <div class="absolute bottom-0 p-8 w-full opacity-0 group-hover:opacity-100">
                            <button
                                class="bg-white font-medium text-base leading-4 border-2 border-white py-3 w-full mt-2 text-black">Drink
                                Menu</button>
                            <button
                                class="bg-transparent font-medium text-base leading-4 border-2 border-white py-3 w-full mt-2 text-white">Quick
                                <a href="drink.pdf" target="_blank">View Pdf</a> </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
