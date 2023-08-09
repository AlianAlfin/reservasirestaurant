<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="m-2 p-2 rounded">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('Admin.tables.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Name
                        </label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="guestNumber" class="block text-sm font-medium text-gray-700"> Guest Number </label>
                        <div class="mt-1">
                            <input type="number" id="guestNumber" name="guestNumber"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <div class="mt-1">
                            <select id="status" name="status"
                                class="form-multiselect block w-full mt-1  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5">
                                @foreach (App\Enums\TableStatus::cases() as $status)
                                    <option value="{{ $status->value }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                        <div class="mt-1">
                            <select id="location" name="location"
                                class="form-multiselect block w-full mt-1  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5">
                                @foreach (App\Enums\TableLocation::cases() as $location)
                                    <option value="{{ $location->value }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="image" class="block text-sm font-medium text-gray-700"> image </label>
                        <div class="mt-1">
                            <input type="file" id="image" name="image"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5 @error('image') border-red-500 @enderror" />
                        </div>
                        @error('image')
                            <div class="text-sm text-red-500">{{ $message }}</div>
                        @enderror
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
