<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="m-2 p-2 rounded">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('Admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Title
                        </label>
                        <div class="mt-1">
                            <input type="text" id="title" name="title" value="{{ $blog->title }}"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="image" class="block text-sm font-medium text-gray-700"> image </label>
                        <div>
                            <img src="{{ Storage::url($blog->image) }}" alt="" class="w-32 h-32">
                        </div>
                        <div class="mt-1">
                            <input type="file" id="image" name="image"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea id="description" rows="3" name="description" value="{{ $blog->description }}"
                                class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal  focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $blog->description }}</textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="second" class="block text-sm font-medium text-gray-700">Second
                            Paragraph</label>
                        <div class="mt-1">
                            <textarea id="second" rows="3" name="second" value="{{ $blog->second }}"
                                class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal  focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $blog->description }}</textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="last" class="block text-sm font-medium text-gray-700">Last Paragraph</label>
                        <div class="mt-1">
                            <textarea id="last" rows="3" name="last" value="{{ $blog->last }}"
                                class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal  focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">{{ $blog->description }}</textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label for="tag" class="block text-sm font-medium text-gray-700"> Tag
                        </label>
                        <div class="mt-1">
                            <input type="text" id="tag" name="tag" value="{{ $blog->tag }}"
                                class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal  sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-6 pt-4">
                        <label for="category_blogs" class="block text-sm font-medium text-gray-700">Category
                            Blog</label>
                        <div class="mt-1">
                            <select id="category_blogs" name="category_blogs[]"
                                class="form-multiselect mt-1 shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal  focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                multiple>
                                @foreach ($category_blogs as $categoryBlog)
                                    <option value="{{ $categoryBlog->id }}" @selected($blog->category_blogs->contains($categoryBlog))>
                                        {{ $categoryBlog->title }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class=" mt-6 p-4">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                        {{-- <a href="{{ route('Admin.categories.index') }}"
                            class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg text-white">Back</a> --}}
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-admin-layout>
