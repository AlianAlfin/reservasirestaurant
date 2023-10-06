@extends('layouts.navbar')

@section('container')
    {{-- header --}}
    <header class=" items-center justify-center h-auto mb-12 overflow-hidden lg:pt-[85px] pt-[74px]">
        {{-- <div class="relative z-30 p-5 text-2xl text-white bg-transparent bg-opacity-50 rounded-xl font-bold font-serif">
            Welcome to my site!
        </div> --}}
        <video autoplay loop muted class=" z-10 w-auto lg:mt-3">
            <source src="{{ asset('asset/video/pixel.mp4') }}" type="video/mp4" />
        </video>
    </header>
    {{-- end header --}}

    {{-- about us --}}
    <div class="lg:mt-11">
        <div
            class="shadow-lg bg-gradient-to-tr from-orange-600 via-orange-400 to bg-orange-200 text-white grid lg:grid-cols-2 grid-cols-1">
            <div class="lg:mt-20">
                <h1 class="mt-5 px-7 lg:px-16 lg:pt-16 text-3xl lg:text-4xl font-semibold font-h1 text-white lg:text-white">
                    Teppanyaki & Omakase Restaurant
                </h1>
                <p class="mt-11 px-7 lg:px-16 lg:pb-44 font-normal font-p text-justify lg:text-slate-50">Opened its doors in
                    the
                    mid of August
                    2019, Kojin
                    Teppanyaki Restaurant has been serving delectable Japanese cuisine for the ultimate dining experience in
                    Ubud. For authentic taste, we only use well-chosen and high quality ingredients, cooked in a classy
                    teppanyaki style to deliver the best of its creations in a dynamic and entertaining atmosphere. By
                    providing our guests with a unique culinary experience that goes beyond delicious cuisine, we are eager
                    to bring people together for fun and authentic Japanese cuisine with our own modern twist.</p>
            </div>
            <div class="lg:mt-16">
                <p class="px-0 py-12 lg:px-3 lg:py-36 "><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/yVHhdhJTOf0" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen class="lg:w-[90%] w-[100%] lg:p-0 p-5"></iframe></p>
            </div>

        </div>
        {{-- <img src="img/shapes1.png" alt="" class="h-[600px] w-full"> --}}
    </div>
    {{-- end about us --}}

    {{-- testimoni --}}
    {{-- <img src="img/shapes1.png" alt="" class="h-[600px] w-full"> --}}
    <div class="mt-28 font-serif ">
        <div class="lg:px-20 md:px-6 px-4 py-12 lg:h-[1000px]">
            <div class="flex flex-col items-center justify-center">
                <h1 class="lg:text-4xl text-3xl font-bold text-center text-gray-800 dark:text-white font-h1">Hear From Our
                    Clients
                </h1>
                <p class="text-base leading-6 mt-4 text-center text-gray-600 dark:text-white  2xl:w-2/5 font-p">Here is why
                    you
                    should trust us with your work achievements</p>
            </div>
            <div class="w-full lg:flex items-center gap-6 mt-10">
                <div class="lg:w-1/2">
                    <div
                        class="bg-white dark:bg-gray-800  border rounded-md border-gray-200 dark:border-gray-700  relative sm:p-10 p-6">
                        <div>
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonials-4-svg1.svg"
                                alt="commas" />
                        </div>

                        <p class="text-base leading-6 text-gray-600 dark:text-white font-p mt-4">When our designs need an
                            expert
                            opinion or approval, I know I can rely on your agency Thank you for all your help-I will be
                            recommending you to everyone</p>
                        <div class="absolute bottom-0 -mb-4 ml-10">
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonials-4-svg2.svg"
                                alt="sharp" />
                        </div>
                    </div>
                    <div class="flex items-center mt-7">
                        <div class="w-12 h-12 border border-orange-500 rounded-full flex items-center justify-center">
                            <img src="https://i.ibb.co/R6WQhYj/Mask-Group.png" class="w-10 h-10 rounded-full"
                                alt="profile" />
                        </div>
                        <div class="flex flex-col items-start ml-4">
                            <p class="text-base font-semibold leading-4 text-gray-800 dark:text-white ">Alisha Cooper</p>
                            <p class="text-base leading-4 mt-2 text-center text-gray-600 dark:text-white ">Mahasiswi</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 lg:mt-0 mt-16">
                    <div
                        class="bg-white  dark:bg-gray-800  border rounded-md border-gray-200 dark:border-gray-700  relative sm:p-10 p-6">
                        <div>
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonials-4-svg1.svg"
                                alt="commas" />
                        </div>
                        <p class="text-base leading-6 text-gray-600 dark:text-white font-p mt-4">When our designs need an
                            expert
                            opinion or approval, I know I can rely on your agency Thank you for all your help-I will be
                            recommending you to everyone</p>
                        <div class="absolute bottom-0 -mb-4 ml-10">
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonials-4-svg2.svg"
                                alt="sharp" />
                        </div>
                    </div>
                    <div class="flex items-center mt-7">
                        <div class="w-12 h-12 border border-orange-500 rounded-full flex items-center justify-center">
                            <img src="https://i.ibb.co/C6bwf12/Mask-Group.png" class="w-10 h-10 rounded-full"
                                alt="profile" />
                        </div>
                        <div class="flex flex-col items-start ml-4">
                            <p class="text-base font-semibold leading-4 text-gray-800 dark:text-white ">Henry Jack</p>
                            <p class="text-base leading-4 mt-2 text-center text-gray-600 dark:text-white ">Pelajar
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end testimoni --}}


    <div class="w-full  lg:-mt-96 " id="category">
        {{-- categories --}}
        <h1 class="uppercase font-extrabold lg:text-4xl text-2xl lg:mt-0 mt-20 flex justify-center lg:pt-11 font-h1"> <span
                class="text-slate-800">
                International Food</span></h1>
        <div
            class=" 2xl:container flex justify-center items-center w-full 2xl:mx-auto lg:px-20 md:py-12 md:px-6 py-9 px-4 lg:mt-11">
            <div class=" w-80 md:w-auto grid lg:grid-cols-2 grid-cols-1 lg:gap-8 gap-6">
                @foreach ($categories as $category)
                    <div class="relative group  hover:border-none">
                        <img class="lg:block hidden w-full object-cover h-[450px]"
                            src="{{ Storage::url($category->image) }}" />
                        <img class="lg:hidden md:block hidden w-full object-cover h-[450px]"
                            src="{{ Storage::url($category->image) }}" />
                        <img class="w-full object-cover md:hidden h-[450px]" src="{{ Storage::url($category->image) }}" />

                        <div
                            class="opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full">
                        </div>
                        <div
                            class="absolute top-0 left-0 w-full h-full flex justify-start items-end opacity-0 hover:opacity-100 p-8">
                            <p class="font-semibold text-2xl leading-6 text-white font-h1">{{ $category->name }}</p>
                        </div>
                    </div>

                    <div
                        class=" lg:px-6 lg:py-0 md:py-16 md:px-24 py-16 px-6 flex flex-col justify-center items-center text-center bg-gray-100 dark:bg-gray-800">
                        <h2
                            class="font-h1 dark:text-white font-semibold lg:text-4xl text-3xl lg:leading-10 leading-9 text-gray-800 lg:w-full md:w-7/12 w-full">
                            {{ $category->name }}</h2>
                        <p
                            class="font-p dark:text-gray-300 font-medium text-base leading-6 text-gray-600 mt-4 lg:w-full md:w-7/12 w-full">
                            {{ $category->description }}</p>
                        <a href="{{ route('categories.show', $category->id) }}"
                            class="font-h1 dark:bg-white dark:text-gray-800 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-orange-600 text-white text-base leading-4 bg-orange-500 lg:px-10 py-4 lg:w-auto w-72 mt-16">Discover
                            More</a>
                    </div>

                    {{-- <div class="relative group">
                        <img class="lg:block hidden w-full object-cover h-[400px] rounded-lg"
                            src="{{ Storage::url($category->image) }}" />
                        <img class="lg:hidden md:block hidden w-full object-cover rounded-lg"
                            src="{{ Storage::url($category->image) }}" />
                        <img class="w-full md:hidden rounded-lg" src="{{ Storage::url($category->image) }}" />

                        <div
                            class="opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full">
                        </div>
                        <div
                            class="absolute top-0 left-0 w-full h-full flex justify-start items-end opacity-0 hover:opacity-100 p-8">
                            <p class="font-semibold text-2xl leading-6 text-white">{{ $category->name }}</p>
                        </div>
                    </div> --}}
                @endforeach
            </div>
        </div>
        {{-- end categories --}}

        {{-- display menu --}}
        {{-- <div class="m-20">
            <h1 class="uppercase font-extrabold text-xl font-h1">more like this</h1>

            <div id="indicators-carousel" class="relative w-full mt-11" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative lg:h-[420px] overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{ asset('asset/img/fix-menu1.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/img/fix-menu2.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/img/fix-menu3.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/img/fix-menu4.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('asset/img/fix-menu1.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div> --}}
        {{-- end display menu --}}

    </div>
@endsection
