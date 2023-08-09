<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div role="article" tabindex="0" class="focus:outline-none container mx-auto py-8 px-4">
        <div class="pt-14 xl:px-0 px-4">
            <div class="w-full lg:flex">
                <div class="lg:w-1/2">
                    <img tabindex="0" role="img" aria-label=" " src="{{ Storage::url($category_blogs->image) }}"
                        class="focus:outline-none w-full" alt="" />
                    <div class="mt-8 lg:mb-0 mb-8">
                        <h2 tabindex="0"
                            class="focus:outline-none dark:text-white f-m-m text-2xl font-semibold leading-7">
                            {{ $category_blogs->title }}</h1>
                            <p tabindex="0"
                                class="focus:outline-none dark:text-white text-base f-m-m leading-loose mt-2">The emerge
                                of internet of Things has brought in, rather urgently, a need for low-cost security
                                technology. While passwords and other such forms of encription are software base, there
                                is also a need for security level.</p>
                            <div class="mt-6">
                                <div>
                                    <a class="hover:text-indigo-900 dark:hover:text-indigo-500 text-indigo-700 dark:text-indigo-400 underline text-base font-semibold f-m-m"
                                        role="link" href="javascript:void(0)">Read More</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
