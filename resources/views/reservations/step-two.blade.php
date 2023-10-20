@extends('layouts.reservasi')
@section('container')
    <div class="flex items-center min-h-screen">
        <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img class="object-cover w-full h-full" src="{{ asset('asset/img/reservasi.jpg') }}" alt="img" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h3 class="mb-4 text-xl font-bold text-orange-600">Make Reservasi</h3>

                        <div class="w-full bg-gray-200 rounded-full">
                            <div
                                class=" w-100 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-orange-600 rounded-full ">
                                Step 2
                            </div>
                        </div>

                        <form method="POST" action="{{ route('reservations.store.step.two') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="sm:col-span-6 pt-4">
                                <label for="status" class="block text-sm font-medium text-gray-700">Table</label>
                                <div class="mt-1">
                                    <select id="table_id" name="table_id"
                                        class="form-multiselect block w-full mt-1  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5">
                                        @foreach ($tables->sortBy('location') as $table)
                                            <option value="{{ $table->id }}">
                                                {{ $table->name }} {{ $table->location }} ( {{ $table->guestNumber }}
                                                Guest
                                                )
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class=" mt-6 p-4 flex justify-end">
                                <a href="{{ route('reservations.step.one') }}"
                                    class="px-4 py-2 mr-2 bg-orange-600 hover:bg-orange-700 rounded-lg text-white">Back</a>
                                <button type="submit"
                                    class="px-4 py-2 bg-orange-600 hover:bg-orange-700 rounded-lg text-white">Make
                                    Reservasi</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
