@extends('layouts.navbar')
@section('container')
    <div class="2xl:container 2xl:mx-auto animate-fade lg:pt-[85px] pt-[74px]">
        <div class="py-6 lg:px-20 md:px-6 px-4">
            <div
                class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 lg:gap-y-12 lg:gap-x-8 sm:gap-y-10 sm:gap-x-6 gap-y-6 lg:mt-12 mt-10">
                @foreach ($category->menus as $menu)
                    <div>
                        <div class="relative group shadow-xl">
                            <div
                                class="flex justify-center items-center opacity-0 bg-gradient-to-t from-gray-800 via-gray-800 to-opacity-30 group-hover:opacity-50 absolute top-0 left-0 h-full w-full">
                            </div>
                            <p class="bg-orange-400 w-20 flex justify-center h-8 absolute text-slate-50">
                                ${{ $menu->price }}
                            </p>
                            <img class="w-full h-[400px] object-cover rounded-tl-full relative"
                                src="{{ Storage::url($menu->image) }}" alt="" />
                            <div class="absolute bottom-0 p-8 w-full opacity-0 group-hover:opacity-100">
                                <button
                                    class="bg-white font-medium text-base leading-4 border-2 border-white py-3 w-full mt-2 text-black">{{ $menu->name }}</button>
                                <button
                                    class="bg-transparent font-medium text-base leading-4 border-2 border-white py-3 w-full mt-2 text-white">
                                    <a href="/reservations/step-one">Book Now</a> </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <button
        class="dark:bg-white dark:hover:bg-gray-400 dark:hover:text-gray-100 dark:text-gray-800 sm:w-auto w-full lg:ml-11 mt-8 text-base justify-between focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 focus:outline-none hover:bg-orange-600 font-medium leading-none text-white py-4 px-8 bg-orange-500 flex items-center">
        <a href="/#category">Back</a>
        <div class="ml-2 mt-0.5">
            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1.svg" alt="arrow">
            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1dark.svg"
                alt="arrow">
        </div>
    </button>
@endsection
