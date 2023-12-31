    <x-admin-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="m-2 p-2 rounded">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('Admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name
                            </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name"
                                    class="block w-full  appearance-none bg-white border rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5 @error('name') border-red-500 @enderror" />
                            </div>
                            @error('name')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-4">
                            <label for="image" class="block text-sm font-medium text-gray-700"> image </label>
                            <div class="mt-1">
                                <input type="file" id="image" name="image"
                                    class="block w-full  appearance-none bg-white border rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5 @error('image') border-red-500 @enderror" />
                            </div>
                            @error('image')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">description</label>
                            <div class="mt-1">
                                <textarea id="description" rows="3" name="description"
                                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal  focus:border-indigo-500 block w-full sm:text-sm  rounded-md @error('image') border-red-500 @enderror"></textarea>
                            </div>
                            @error('description')
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
