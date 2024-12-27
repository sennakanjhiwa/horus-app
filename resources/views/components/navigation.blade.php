<nav class="flex flex-col max-lg:bg-white dark:max-lg:bg-darkblue transition duration-500 ease-in-out h-full justify-between lg:items-center lg:flex-row">
    <ul
        class="px-9 pt-32 text-gray-700 dark:text-gray-400 space-y-8 lg:space-y-0 lg:flex lg:space-x-6 xl:space-x-9 lg:pt-0">
        <li>
            <a href="{{ url('/') }}"
                class="group relative before:absolute before:inset-x-0 before:-bottom-1 before:h-1 before:origin-right before:scale-x-0 before:bg-tertiary dark:before:bg-secondary before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                <span
                    class="relative group-hover:text-gray-700 dark:group-hover:text-gray-300">Home</span>
            </a>
        </li>
        <li>
            <a href="#"
                class="group relative before:absolute before:inset-x-0 before:-bottom-1 before:h-1 before:origin-right before:scale-x-0 before:bg-tertiary dark:before:bg-secondary before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                <span
                    class="relative group-hover:text-gray-700 dark:group-hover:text-gray-300">About</span>
            </a>
        </li>
        <li>
            <a href="#"
                class="group relative before:absolute before:inset-x-0 before:-bottom-1 before:h-1 before:origin-right before:scale-x-0 before:bg-tertiary dark:before:bg-secondary before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                <span
                    class="relative group-hover:text-gray-700 dark:group-hover:text-gray-300">Contact</span>
            </a>
        </li>
        <li>
            <a href="#"
                class="group relative before:absolute before:inset-x-0 before:-bottom-1 before:h-1 before:origin-right before:scale-x-0 before:bg-tertiary dark:before:bg-secondary before:transition before:duration-200 hover:before:origin-left hover:before:scale-x-100">
                <span
                    class="relative group-hover:text-gray-700 dark:group-hover:text-gray-300">Privacy</span>
            </a>
        </li>
    </ul>

    {{-- Toggle Darkmode Start --}}
    <div class="hidden lg:flex items-center">
        <input type="checkbox" class="hidden" id="dark-toggle-desktop">
        <label for="dark-toggle-desktop">
            <div
                class="flex h-7 w-12 cursor-pointer shadow items-center rounded-full bg-white dark:bg-slate-600 shadow-toggle transition duration-500 ease-in-out p-1">
                <!-- Ikon Matahari (Sun) dan Bulan (Moon) selalu muncul -->
                <i data-feather="sun"
                    class="p-1 text-white dark:text-primary z-10 transition duration-500 ease-in-out"></i>
                <div class="toggle-circle h-5 w-5 rounded-full bg-secondary dark:bg-dark">
                </div>
                <i data-feather="moon"
                    class="p-1 text-gray-700 dark:text-gray-300 z-10 transition duration-500 ease-in-out"></i>
            </div>
        </label>
    </div>
    {{-- Toggle Darkmode End --}}

    <div class="py-8 px-6 md:px-16 md:py-16 lg:py-0 lg:pr-0 lg:pl-6">
        <a href="https://wa.me/628812040845" target="_blank"
            class="block px-6 py-3 rounded-full bg-tertiary dark:bg-secondary text-center text-white dark:text-darkblue hover:opacity-85 dark:hover:bg-primary transition duration-300">
            <span class="flex justify-center"><i data-feather="message-circle"
                    class="w-5 mr-1"></i>Chat with Me</span>
        </a>
    </div>
</nav>