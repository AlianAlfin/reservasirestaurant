<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('Admin.category_blogs.create') }}"
                    class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg text-white">New Category Blog</a>
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400 text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                slug
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category_blogs as $key => $categoryBlog)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $key + 1 }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $categoryBlog->title }}
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ Storage::url($categoryBlog->image) }}" class="w-16 h-16 rounded">
                                </td>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ Str::limit($categoryBlog->slug, 15) }}
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('Admin.category_blogs.show', $categoryBlog->id) }}"
                                            class="btn btn-sm btn-primary bg-slate-900 border-amber-100"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
                                            </svg>

                                        </a>
                                        <a href="{{ route('Admin.category_blogs.edit', $categoryBlog->id) }}"
                                            class="btn btn-sm btn-warning bg-slate-400 border-amber-100"><i
                                                class="bi bi-gear"></i></a>
                                        <form method="POST"
                                            action="{{ route('Admin.category_blogs.destroy', $categoryBlog->id) }}"
                                            onsubmit="return confirm('Yakin Delete')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-sm btn-danger  bg-slate-900 border-amber-100"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
