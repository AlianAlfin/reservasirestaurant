<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class=" mt-16 p-4 mr-20 flex justify-center">
        <a href="{{ route('Admin.categories.index') }}"
            class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg text-white ">Back</a>
    </div>
    <div class="w-1/2   bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <img class="rounded-t-lg h-64 w-full" src="{{ Storage::url($categories->image) }}" alt="" />
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $categories->name }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{ $categories->description }}</p>
        </div>
    </div>

</x-admin-layout>
