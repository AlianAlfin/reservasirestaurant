@extends('layouts.navbar')
@section('container')
    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                Blog
            </a>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
        </div>
    </nav>
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            @foreach ($category_blogs as $categoryBlog)
                <article class="flex flex-col shadow my-4">
                    <!-- Article Image -->
                    <a href="{{ route('category_blogs.show', $categoryBlog->id) }}" class="hover:opacity-75">
                        <img src="{{ Storage::url($categoryBlog->image) }}" class="object-cover">
                    </a>
                    <div class="bg-white flex flex-col justify-start p-6">
                        {{-- <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a> --}}
                        <a href="{{ route('category_blogs.show', $categoryBlog->id) }}"
                            class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $categoryBlog->title }}</a>
                        <p href="{{ route('category_blogs.show', $categoryBlog->id) }}" class="text-sm pb-3">
                            By <a href="#" class="font-semibold hover:text-gray-800">Admin</a>
                        </p>
                        <a href="{{ route('category_blogs.show', $categoryBlog->id) }}"
                            class="pb-6">{{ $categoryBlog->slug }}</a>
                        <a href="{{ route('category_blogs.show', $categoryBlog->id) }}" class="pb-6">Realese :
                            {{ $categoryBlog->created_at }}</a>
                        <a href="{{ route('category_blogs.show', $categoryBlog->id) }}"
                            class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            @endforeach

            <!-- Pagination -->
            <div class="flex items-center py-8">
                {{ $category_blogs->links() }}
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
