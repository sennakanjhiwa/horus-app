<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@isset($pageTitle){{ $pageTitle." - " }}@endisset{{ config('app.name') }}</title>
    <meta name="description" content="Hello, I'm Senna Bhany Majid, a Web Developer & Armwrestler. I find learning web programming and armwrestling fascinating, as both challenge me to sharpen my critical thinking skills and build physical strength.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="dark:bg-dark transition duration-500 ease-in-out">
    {{-- Header Start --}}
    <header
        class="fixed top-0 left-0 w-full z-40 transition duration-500 ease-in-out">
        <div class="relative z-20">
            <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-4">
                <div class="flex items-center justify-between">
                    <div class="relative z-50">
                        <div class="absolute top-0 left-0 w-4 h-4 bg-gradient-to-r from-yellow-200 via-yellow-300 to-orange-300 dark:from-yellow-300 dark:via-yellow-400 dark:to-orange-400 rounded-full opacity-30 dark:opacity-10 animate-blob transition duration-500 -z-10"></div>
                        <div class="absolute top-0 right-0 w-5 h-5 bg-gradient-to-r from-yellow-200 via-yellow-300 to-orange-300 dark:from-yellow-300 dark:via-yellow-400 dark:to-orange-400 rounded-full opacity-30 dark:opacity-10 animate-blob transition duration-500 animation-accelerate -z-10"></div>
                        <a href="{{ url('/') }}">
                            <span
                                class="text-tertiary dark:text-secondary dark:hover:text-primary transition duration-500 text-2xl font-bold">{{ config('app.name') }}</span>
                        </a>
                    </div>

                    <div class="flex items-center justify-end">
                        {{-- Toggle Darkmode Start --}}
                        <div class="flex lg:hidden items-center">
                            <input type="checkbox" class="hidden" id="dark-toggle-mobile">
                            <label for="dark-toggle-mobile">
                                <div
                                    class="flex h-7 w-12 cursor-pointer shadow items-center rounded-full bg-white dark:bg-slate-600 shadow-toggle transition duration-500 ease-in-out p-1">
                                    <!-- Ikon Matahari (Sun) dan Bulan (Moon) selalu muncul -->
                                    <i data-feather="sun"
                                        class="p-1 text-white dark:text-primary z-10 transition duration-500 ease-in-out"></i>
                                    <div class="toggle-circle h-5 w-5 rounded-full bg-secondary dark:bg-dark"></div>
                                    <i data-feather="moon"
                                        class="p-1 text-gray-700 dark:text-gray-300 z-10 transition duration-500 ease-in-out"></i>
                                </div>
                            </label>
                        </div>
                        {{-- Toggle Darkmode End --}}

                        <input type="checkbox" name="hamburger" id="hamburger" class="peer hidden">
                        <label for="hamburger"
                            class="peer-checked:hamburger block relative z-20 p-6 -mr-6 cursor-pointer lg:hidden">
                            <div aria-hidden="true"
                                class="m-auto h-0.5 w-6 rounded bg-gray-900 dark:bg-gray-200 transition duration-300">
                            </div>
                            <div aria-hidden="true"
                                class="m-auto mt-1 h-0.5 scale-50 w-6 rounded bg-gray-900 dark:bg-gray-200 transition duration-300">
                            </div>
                            <div aria-hidden="true"
                                class="m-auto mt-1 h-0.5 w-6 rounded bg-gray-900 dark:bg-gray-200 transition duration-300">
                            </div>
                        </label>

                        <div id="hamburger"
                            class="peer-checked:translate-x-0 fixed inset-0 w-[calc(100%-4.4rem)] md:w-[calc(100%-5.5rem)] translate-x-[-100%] shadow-xl transition duration-300 lg:w-auto lg:static lg:shadow-none lg:translate-x-0 z-30">
                            @include('components.navigation')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- Header End --}}

    {{ $slot }}

    {{-- Footer Start --}}
    <footer class="pt-20 bg-pattern-footer dark:bg-pattern-footer-dark bg-cover transition duration-500 ease-in-out">
        <div class="container">
            <div class="flex flex-wrap lg:px-12 mb-10">
                <div
                    class="w-full px-4 mb-8 text-white dark:text-gray-300 md:w-1/3 transition duration-500 ease-in-out">
                    <h3 class="font-bold text-2xl mb-2">About Me</h3>
                    <h4 class="font-semibold text-xl mb-2">Senna Bhany Majid</h4>
                    <p class="text-base font-medium mb-3">I am a web developer and arm wrestler with a desire to grow,
                        be useful, and bring a positive impact to others.</p>
                    <div class="flex items-center">
                        {{-- YouTube --}}
                        <a href="https://www.youtube.com/channel/UCjP6YYFanbqDZp8H64qYUiQ" target="_blank"
                            class="w-8 h-8 mr-3 md:mr-1 lg:mr-3 rounded-full flex justify-center items-center bg-white dark:bg-dark text-tertiary dark:text-secondary hover:bg-tertiary dark:hover:bg-secondary hover:border-2 dark:border-secondary dark:border-2 hover:text-white dark:hover:text-dark transition duration-200 ease-linear" aria-label="Kunjungi YouTube Senna Kanjhiwa">
                            <i data-feather="youtube" class="p-1"></i>
                        </a>
                        {{-- Facebook --}}
                        <a href="https://www.facebook.com/share/cBMmqTkdeueszfDx" target="_blank"
                            class="w-8 h-8 mr-3 md:mr-1 lg:mr-3 rounded-full flex justify-center items-center bg-white dark:bg-dark text-tertiary dark:text-secondary hover:bg-tertiary dark:hover:bg-secondary hover:border-2 dark:border-secondary dark:border-2 hover:text-white dark:hover:text-dark transition duration-200 ease-linear" aria-label="Kunjungi Facebook Senna Kanjhiwa">
                            <i data-feather="facebook" class="p-1"></i>
                        </a>
                        {{-- Instagram --}}
                        <a href="https://www.instagram.com/sennakanjhiwa" target="_blank"
                            class="w-8 h-8 mr-3 md:mr-1 lg:mr-3 rounded-full flex justify-center items-center bg-white dark:bg-dark text-tertiary dark:text-secondary hover:bg-tertiary dark:hover:bg-secondary hover:border-2 dark:border-secondary dark:border-2 hover:text-white dark:hover:text-dark transition duration-200 ease-linear" aria-label="Kunjungi Instagram Senna Kanjhiwa">
                            <i data-feather="instagram" class="p-1"></i>
                        </a>
                        {{-- Phone --}}
                        <a href="tel:+628812040845" target="_blank"
                            class="w-8 h-8 mr-3 md:mr-1 lg:mr-3 rounded-full flex justify-center items-center bg-white dark:bg-dark text-tertiary dark:text-secondary hover:bg-tertiary dark:hover:bg-secondary hover:border-2 dark:border-secondary dark:border-2 hover:text-white dark:hover:text-dark transition duration-200 ease-linear" aria-label="Telepon Senna Kanjhiwa">
                            <i data-feather="phone" class="p-1"></i>
                        </a>
                        {{-- GitHub --}}
                        <a href="https://github.com/sennakanjhiwa" target="_blank"
                            class="w-8 h-8 mr-3 md:mr-1 lg:mr-3 rounded-full flex justify-center items-center bg-white dark:bg-dark text-tertiary dark:text-secondary hover:bg-tertiary dark:hover:bg-secondary hover:border-2 dark:border-secondary dark:border-2 hover:text-white dark:hover:text-dark transition duration-200 ease-linear" aria-label="Kunjungi GitHub Senna Kanjhiwa">
                            <i data-feather="github" class="p-1"></i>
                        </a>
                        {{-- LinkedIn --}}
                        <a href="https://www.linkedin.com/in/senna-bhany-majid" target="_blank"
                            class="w-8 h-8 rounded-full flex justify-center items-center bg-white dark:bg-dark text-tertiary dark:text-secondary hover:bg-tertiary dark:hover:bg-secondary hover:border-2 dark:border-secondary dark:border-2 hover:text-white dark:hover:text-dark transition duration-200 ease-linear" aria-label="Kunjungi LinkedIn Senna Kanjhiwa">
                            <i data-feather="linkedin" class="p-1"></i>
                        </a>
                    </div>
                </div>
                <div
                    class="w-full px-4 mb-8 text-white dark:text-gray-300 md:w-1/3 lg:px-20 transition duration-500 ease-in-out">
                    <h3 class="font-bold text-2xl mb-2">Quick Links</h3>
                    <ul>
                        <li>
                            <a href="#portfolio"
                                class="text-base font-medium inline-block hover:text-gray-300 dark:hover:text-gray-100 transition duration-300 ease-in-out mb-2">My
                                Portfolio</a>
                        </li>
                        <li>
                            <a href="#skills"
                                class="text-base font-medium inline-block hover:text-gray-300 dark:hover:text-gray-100 transition duration-300 ease-in-out mb-2">Skills
                                & Knowledge</a>
                        </li>
                        <li>
                            <a href="#certifications"
                                class="text-base font-medium inline-block hover:text-gray-300 dark:hover:text-gray-100 transition duration-300 ease-in-out mb-2">Certifications</a>
                        </li>
                        <li>
                            <a href="#contact"
                                class="text-base font-medium inline-block hover:text-gray-300 dark:hover:text-gray-100 transition duration-300 ease-in-out mb-2">Contact
                                Me</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 text-white dark:text-gray-300 md:w-1/3 transition duration-500 ease-in-out">
                    <h3 class="font-bold text-2xl mb-2">Contact Information</h3>
                    <ul>
                        <li>
                            <p class="text-base font-semibold">Address</p>
                            <div class="text-base font-medium inline-block mb-2">Purbalingga, Jawa Tengah, Indonesia
                            </div>
                        </li>
                        <li>
                            <p class="text-base font-semibold">Email</p>
                            <a href="mailto:sennakanjhiwa@gmail.com"
                                class="text-base font-medium inline-block hover:text-gray-300 dark:hover:text-gray-100 transition duration-300 ease-in-out mb-2">sennakanjhiwa@gmail.com</a>
                        </li>
                        <li>
                            <p class="text-base font-semibold">Phone / WhatsApp</p>
                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="text-base font-medium inline-block hover:text-gray-300 dark:hover:text-gray-100 transition duration-300 ease-in-out mb-2">+62
                                812-3456-7890</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full py-11 bg-black dark:bg-dark opacity-65 masking transition duration-500 ease-in-out">
            <p class="font-semibold font-sans text-base text-white text-center">Copyright &copy; 2024 Senna Kanjhiwa
            </p>
        </div>
    </footer>
    {{-- Footer End --}}

    {{-- Back To Top Start --}}
    <a href="#top" id="to-top"
        class="flex scale-0 fixed bottom-4 right-4 z-20 h-12 w-12 items-center justify-center rounded-full bg-tertiary dark:bg-darkblue border-2 border-white dark:border-secondary hover:-translate-y-1 hover:shadow-lg transition duration-500 ease-in-out">
        <span class="text-white dark:text-secondary text-3xl pb-1"><i data-feather="arrow-up" class="inline w-6"></i></span>
    </a>
    {{-- Back To Top End --}}

    <script>
    // Navbar Fixed
    window.onscroll = function () {
        const header = document.querySelector('header');
        const headerHeight = header.offsetHeight; // Dapatkan tinggi header
        const toTop = document.querySelector('#to-top');

        if (window.scrollY > headerHeight) {
            header.classList.add('bg-white', 'dark:bg-dark', 'lg:bg-opacity-75', 'dark:lg:bg-opacity-75', 'lg:backdrop-blur', 'dark:lg:backdrop-blur', 'shadow-sm');
            toTop.classList.remove('scale-0');
            toTop.classList.add('scale-100');
        } else {
            header.classList.remove('bg-white', 'dark:bg-dark', 'lg:bg-opacity-75', 'dark:lg:bg-opacity-75', 'lg:backdrop-blur', 'dark:lg:backdrop-blur', 'shadow-sm');
            toTop.classList.remove('scale-100');
            toTop.classList.add('scale-0');
        }
    };

    // Click Out Hamburger
    document.addEventListener('click', function (e) {
        const checkbox = document.getElementById('hamburger');
        const header = document.querySelector('header');

        // Jika elemen yang diklik bukan bagian dari header dan checkbox sedang tercentang, maka checkbox di-reset (menu tertutup)
        if (!header.contains(e.target) && checkbox.checked) {
            checkbox.checked = false;
            document.body.classList.remove('overflow-hidden'); // Mengaktifkan scroll kembali
        }
    });

    // Mengatur scroll saat menu terbuka atau tertutup
    const checkbox = document.getElementById('hamburger');
    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            document.body.classList.add('overflow-hidden'); // Menonaktifkan scroll saat menu terbuka
        } else {
            document.body.classList.remove('overflow-hidden'); // Mengaktifkan scroll saat menu tertutup
        }
    });

    // Toggle Darkmode
    document.addEventListener('DOMContentLoaded', () => {
        const darkToggleMobile = document.querySelector('#dark-toggle-mobile');
        const darkToggleDesktop = document.querySelector('#dark-toggle-desktop');
        const html = document.querySelector('html');

        // Fungsi untuk mengubah mode
        function toggleDarkMode(checked) {
            if (checked) {
                html.classList.add('dark');
                localStorage.theme = 'dark';
            } else {
                html.classList.remove('dark');
                localStorage.theme = 'light';
            }
        }

        // Event listener untuk mobile toggle
        darkToggleMobile.addEventListener('change', function () {
            darkToggleDesktop.checked = darkToggleMobile.checked;
            toggleDarkMode(darkToggleMobile.checked);
        });

        // Event listener untuk desktop toggle
        darkToggleDesktop.addEventListener('change', function () {
            darkToggleMobile.checked = darkToggleDesktop.checked;
            toggleDarkMode(darkToggleDesktop.checked);
        });

        // Sesuaikan toggle berdasarkan preferensi tema yang tersimpan
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            darkToggleMobile.checked = true;
            darkToggleDesktop.checked = true;
            html.classList.add('dark');
        } else {
            darkToggleMobile.checked = false;
            darkToggleDesktop.checked = false;
            html.classList.remove('dark');
        }
    });
    </script>
</body>

</html>