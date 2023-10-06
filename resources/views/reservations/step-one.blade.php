@extends('layouts.reservasi')
@section('container')
    <div class="flex items-center min-h-screen lg:mt-20">
        <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img class="object-cover lg:w-full lg:mt-0 mt-6 lg:h-full" src="{{ asset('asset/img/reservasi.jpg') }}"
                        alt="img" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 lg:mt-0 mt-44 md:w-1/2">
                    <div class="w-full">
                        <h3 class="mb-11 flex justify-center text-3xl font-bold text-orange-600 font-h1">Make Reservasi</h3>

                        <div class="w-full bg-gray-200 rounded-full">
                            <div
                                class=" w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-orange-600 rounded-full ">
                                Step 1
                            </div>
                        </div>

                        <form method="POST" action="{{ route('reservations.store.step.one') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="sm:col-span-6 pt-4">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="first_name" name="first_name"
                                        value="{{ $reservation->first_name ?? '' }}"
                                        class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                                </div>
                                @error('first_name')
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-4">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="last_name" name="last_name"
                                        value="{{ $reservation->last_name ?? '' }}"
                                        class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                                </div>
                                @error('last_name')
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email
                                </label>
                                <div class="mt-1">
                                    <input type="email" id="email" name="email"
                                        value="{{ $reservation->email ?? '' }}"
                                        class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                                </div>
                                @error('email')
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-4">
                                <label for="telp" class="block text-sm font-medium text-gray-700">Telp
                                </label>
                                <div class="mt-1">
                                    <input type="text" id="telp" name="telp"
                                        value="{{ $reservation->telp ?? '' }}"
                                        class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                                </div>
                                @error('telp')
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-4">
                                <label for="reservation_date" class="block text-sm font-medium text-gray-700">Reservation
                                    Date
                                </label>
                                <div class="mt-1">
                                    <input type="date" id="reservation_date" name="reservation_date"
                                        min="{{ $min_date->format('Y-m-d') }}" max="{{ $max_date->format('Y-m-d') }}"
                                        value="{{ $reservation->reservation_date ?? '' }}"
                                        class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                                </div>
                                @error('reservation_date')
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-4">
                                <label for="reservation_time" class="block text-sm font-medium text-gray-700">Reservation
                                    Time
                                </label>
                                <div class="mt-1">
                                    <input type="time" id="reservation_time" name="reservation_time"
                                        min="{{ $earliestTime->format('TH:i:s') }}"
                                        max="{{ $lastTime->format('TH:i:s') }}"
                                        value="{{ $reservation->reservation_time ?? '' }}"
                                        class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                                </div>
                                @error('reservation_time')
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-4">
                                <label for="guestNumber" class="block text-sm font-medium text-gray-700"> Guest Number
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="guestNumber" name="guestNumber"
                                        value="{{ $reservation->guestNumber ?? '' }}"
                                        class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                                </div>
                                @error('guestNumber')
                                    <div class="text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class=" mt-6 p-4 flex justify-end">
                                <button type="submit"
                                    class="px-4 py-2 bg-orange-600 hover:bg-orange-700 rounded-lg text-white">Next</button>
                                {{-- <a href="{{ route('Admin.categories.index') }}"
                                    class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg text-white">Back</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
