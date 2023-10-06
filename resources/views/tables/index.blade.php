@extends('layouts.navbar')
@section('container')
    <div class="lg:pt-[85px] pt-[74px]">
        @foreach ($tables as $table)
            <div
                class="max-w-full mt-9 lg:mt-20 lg:ml-64 lg:mr-64 p-8 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="hover:brightness-50">
                        <img class="rounded-md lg:rounded-tl-3xl h-72 lg:h-96 w-full object-cover"
                            src="{{ Storage::url($table->image) }}" alt="" />
                    </div>
                    <div class="lg:p-11 lg:ml-11">
                        <h1 class=" font-h1 mb-2 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                            {{ $table->name }}</h1>
                        <h5 class="font-p mb-2 text-lg lg:mt-12 tracking-tight text-gray-700 dark:text-white">
                            maximum capacity : {{ $table->guestNumber }} person</h5>
                        <p class="font-p  mb-3 text-lg font-xl text-gray-700 dark:text-gray-400">
                            location : {{ $table->location }}</p>
                        <p class="font-p  mb-3 text-lg font-xl text-gray-700 dark:text-gray-400">
                            status : {{ $table->status }}</p>
                        <button
                            class="font-h1 dark:bg-white dark:hover:bg-gray-400 dark:hover:text-gray-100 dark:text-gray-800 sm:w-auto w-full mt-8 text-base justify-between focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 focus:outline-none hover:bg-orange-600 font-medium leading-none text-white py-4 px-8 bg-orange-500 flex items-center">
                            <a href="{{ route('reservations.step.one') }}"> Book Now</a>
                            <div class="ml-2 mt-0.5">
                                <img class="dark:hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1.svg" alt="arrow">
                                <img class="dark:block hidden"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-VIII-svg1dark.svg"
                                    alt="arrow">
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
