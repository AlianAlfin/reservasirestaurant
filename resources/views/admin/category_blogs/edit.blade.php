<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="m-2 p-2 rounded w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('Admin.category_blogs.update', $categoryBlog->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Title
                        </label>
                        <div class="mt-1">
                            <input type="text" id="title" name="title" value="{{ $categoryBlog->title }}"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label for="tag" class="block text-sm font-medium text-gray-700"> Tag
                        </label>
                        <div class="mt-1">
                            <input type="text" id="tag" name="tag" value="{{ $categoryBlog->tag }}"
                                class="block w-full  appearance-none bg-white border rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5 @error('name') border-red-500 @enderror" />
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="image" class="block text-sm font-medium text-gray-700"> image </label>
                        <div>
                            <img src="{{ Storage::url($categoryBlog->image) }}" alt="" class="w-32 h-32">
                        </div>
                        <div class="mt-1">
                            <input type="file" id="image" name="image"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="preview" class="block text-sm font-medium text-gray-700">Preview</label>
                        <div class="mt-1">
                            <textarea id="preview" rows="3" name="preview"
                                class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal  focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    {{ $categoryBlog->preview }}
                                    </textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="desc" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="desc" rows="3" name="desc"
                            class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal  focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    {{ $categoryBlog->desc }}
                                    </textarea>
                    </div>
                    <div class=" mt-6 p-4">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                        <a href="{{ route('Admin.category_blogs.index') }}"
                            class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg text-white">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
</x-admin-layout>
