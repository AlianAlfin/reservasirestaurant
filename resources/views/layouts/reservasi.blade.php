<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iNi Vie Hospitality | Restaurant</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>

<body>
    @include('sweetalert::alert')
    <!-- Implement the overlay menu -->

    <nav class="fixed w-full z-50 bg-white bg-opacity-50 lg:pb-11 pb-8">
        <div id="menu"
            class="fixed z-50 w-0 h-0 flex justify-center items-center bg-orange-500 opacity-0 duration-700 font-h1">
            <a href="javascript:void(0)"
                class="fixed top-6 right-8 text-white hover:text-amber-500 text-7xl font-semibold duration-300"
                onclick="closeMenu()">&times;</a>
            <div class="flex flex-col text-white text-center text-xl font-light space-y-3">
                <a class="hover:text-amber-500 duration-300 font-bold" href="/">Home</a>
                <a class="hover:text-amber-500 duration-300 font-bold" href="/#category">Category</a>
                <a class="hover:text-amber-500 duration-300 font-bold" href="/menu">Menu</a>
                <a class="hover:text-amber-500 duration-300 font-bold" href="{{ route('tables.index') }}">Table</a>
                <a class="hover:text-amber-500 duration-300 font-bold"
                    href="{{ route('category_blogs.index') }}">Blog</a>
                {{-- <a class="hover:text-amber-500 duration-300 font-bold" href="#contact">Contact</a> --}}
                <a class="hover:text-amber-500 duration-300 font-bold" href="{{ route('reservations.step.one') }}">Book
                    Now</a>
            </div>
        </div>


        {{-- alert --}}
        <div>
            @if (session()->has('danger'))
                <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ session()->get('danger') }} !!</span>
                    </div>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ session()->get('success') }} !!</span>
                    </div>
                </div>
            @endif
            @if (session()->has('warning'))
                <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">{{ session()->get('warning') }} !!</span>
                    </div>
            @endif
        </div>
        {{-- end alert --}}

        <!-- Other elements -->
        <nav class="pt-3">
            <div class="">
                {{-- <h1 class="font-extrabold text-2xl font-sans ml-11  items-center text-slate-700">iNi Vie <span
                    class="text-orange-500">
                    Hospitality </span></h1> --}}
                <img src="{{ asset('asset/logo/1.png') }}" class="lg:h-[100px] lg:w-[100px] lg:ml-11 h-[70px]"
                    alt="">
            </div>
            <div class="container lg:-mt-[70px] -mt-[52px] flex justify-end items-center">
                <p><a href="javascript:void(0)" onclick="openMenu()"
                        class="lg:px-4 px-2 py-2 bg-orange-500 hover:bg-orange-600 text-xl text-white duration-300">
                        <span class="text-2xl ">&#9776;</span>
                    </a></p>
            </div>
        </nav>

        <div class=" py-5">
            @yield('container')
        </div>


        {{-- footer --}}
        <footer
            class="bg-gradient-to-b from-orange-600 to bg-orange-400 rounded-lg shadow-lg dark:bg-gray-900 ml-4 mb-4 mr-4 mt-24">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="/" class="flex items-center mb-4 sm:mb-0 w-[100px] h-[100px]">
                        <img src="{{ asset('asset/logo/1.png') }}" alt="">
                    </a>
                    <ul
                        class="flex flex-wrap items-center mb-6 text-sm font-medium text-white sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="/aboutme" class="mr-4 hover:underline md:mr-6 ">About</a>
                        </li>
                        <li>
                            <a href="/privacy" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                        </li>
                        {{-- <li>
                        <a href="#contact" class="hover:underline">Contact</a>
                    </li> --}}
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a href="/aboutme"
                        class="hover:underline">AlianAlfin</a>. All Rights Reserved.</span>
            </div>
        </footer>
        {{-- end footer --}}



        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
        {{-- <script>
        let defaultTransform = 0;

        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        };
        next.addEventListener("click", goNext);

        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
    </script> --}}
        <script>
            // Burger menus
            document.addEventListener('DOMContentLoaded', function() {
                // open
                const burger = document.querySelectorAll('.navbar-burger');
                const menu = document.querySelectorAll('.navbar-menu');

                if (burger.length && menu.length) {
                    for (var i = 0; i < burger.length; i++) {
                        burger[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }

                // close
                const close = document.querySelectorAll('.navbar-close');
                const backdrop = document.querySelectorAll('.navbar-backdrop');

                if (close.length) {
                    for (var i = 0; i < close.length; i++) {
                        close[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }

                if (backdrop.length) {
                    for (var i = 0; i < backdrop.length; i++) {
                        backdrop[i].addEventListener('click', function() {
                            for (var j = 0; j < menu.length; j++) {
                                menu[j].classList.toggle('hidden');
                            }
                        });
                    }
                }
            });
        </script>
        {{-- <script>
        let form = document.getElementById("contact");
        form.addEventListener(
            "submit",
            function(event) {
                event.preventDefault();
                let elements = form.elements;
                let payload = {};
                for (let i = 0; i < elements.length; i++) {
                    let item = elements.item(i);
                    switch (item.type) {
                        case "checkbox":
                            payload[item.name] = item.checked;
                            break;
                        case "submit":
                            break;
                        default:
                            payload[item.name] = item.value;
                            break;
                    }
                }
                // Place your API call here to submit your payload.
                // console.log("payload", payload);
            },
            true
        );
    </script> --}}

        <!-- Javascript code -->
        <script>
            var menu = document.getElementById("menu");

            // this function is used to open the menu
            function openMenu() {
                menu.classList.remove("w-0", "h-0", "opacity-0");
                menu.classList.add("w-screen", "h-screen", "opacity-95");
            }

            // this function is used to close the menu
            function closeMenu() {
                menu.classList.remove("w-screen", "h-screen", "opacity-95");
                menu.classList.add("w-0", "h-0", "opacity-0");
            }
        </script>
</body>

</html>
