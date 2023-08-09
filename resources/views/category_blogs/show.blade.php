@extends('layouts.navbar')
@section('container')
    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <p class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl">
                Blog
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">

        </div>
    </nav>


    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            @foreach ($categoryBlog->blogs as $blog)
                <article class="flex flex-col shadow my-4">
                    <!-- Article Image -->
                    <p class="hover:opacity-75">
                        <img src="{{ Storage::url($blog->image) }}">
                    </p>
                    <div class="bg-white flex flex-col justify-start p-6">
                        <div class="grid grid-cols-2">
                            <div>
                                <p class="text-3xl font-bold  hover:text-gray-700 pb-1">{{ $blog->title }}</p>
                            </div>
                            <div class="flex justify-end">
                                <p class="text-base  hover:text-gray-700 pb-1">Realease :
                                    {{ $blog->created_at }}</p>
                            </div>
                        </div>

                        <p class="text-base pb-4">{{ $categoryBlog->title }}
                        </p>
                        <p class="text-sm pb-8">
                            By <a href="#" class="font-semibold hover:text-gray-800">{{ $blog->tag }}</a>
                        </p>

                        <p class="pb-3">{{ $categoryBlog->slug }}</p>
                        <p class="pb-3">{{ $blog->description }}</p>
                        <p class="pb-3">{{ $blog->second }}</p>
                        <p class="pb-3">{{ $blog->last }}</p>
                    </div>
                </article>
            @endforeach

            <div class="w-full flex pt-6">
                <a href="{{ route('category_blogs.index') }}" class="w-40 bg-white shadow hover:shadow-md text-left p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i>
                        Previous</p>
                </a>
            </div>

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Instagram</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                </div>
                <a href="https://www.instagram.com/alianalfiin/"
                    class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    <i class="fab fa-instagram mr-2"></i> Follow @alianalfiin
                </a>
            </div>

        </aside>

    </div>
@endsection
