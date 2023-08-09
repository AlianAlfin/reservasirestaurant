<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="m-2 p-2 rounded">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('Admin.reservations.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="sm:col-span-6 pt-4">
                        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name
                        </label>
                        <div class="mt-1">
                            <input type="text" id="first_name" name="first_name"
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
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                        @error('telp')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="reservation_date" class="block text-sm font-medium text-gray-700">Reservation Date
                        </label>
                        <div class="mt-1">
                            <input type="date" id="reservation_date" name="reservation_date"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                        @error('reservation_date')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="reservation_time" class="block text-sm font-medium text-gray-700">Reservation Time
                        </label>
                        <div class="mt-1">
                            <input type="time" id="reservation_time" name="reservation_time"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                        @error('reservation_time')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6 pt-4 pt-4">
                        <label for="guestNumber" class="block text-sm font-medium text-gray-700"> Guest Number </label>
                        <div class="mt-1">
                            <input type="number" id="guestNumber" name="guestNumber"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                        @error('guestNumber')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-6 pt-4 pt-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Table</label>
                        <div class="mt-1">
                            <select id="table_id" name="table_id"
                                class="form-multiselect block w-full mt-1  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5">
                                @foreach ($tables as $table)
                                    <option value="{{ $table->id }}">
                                        {{ $table->name }} {{ $table->location }} ( {{ $table->guestNumber }}
                                        Guest
                                        )
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class=" mt-6 p-4">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg text-white">Save</button>
                        {{-- <a href="{{ route('Admin.categories.index') }}"
                            class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg text-white">Back</a> --}}
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-admin-layout>
