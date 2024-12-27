<x-layout>
    <div class="flex justify-center items-center h-screen">
        <form id="loginForm" onsubmit="login(event)"
            class="bg-white dark:bg-slate-800 text-gray-600 dark:text-gray-400 mx-6 sm:mx-0 w-full sm:w-1/2 lg:w-2/5 xl:w-1/3 max-w-lg p-6 rounded-lg shadow-md transition duration-500 border-t-2 border-tertiary">
            <h2 class="text-xl text-center font-bold mb-4">Login</h2>
            <div class="mb-3">
                <label for="username" class="block">Username:</label>
                <input type="text" id="username" name="username" autocomplete="username" required
                    class="border border-tertiary outline-none text-gray-600 rounded-lg p-2 w-full bg-yellow-50 dark:bg-darkblue dark:text-slate-400 transition duration-500">
            </div>
            <div class="mb-5">
                <label for="password" class="block">Password:</label>
                <input type="password" id="password" name="password" autocomplete="current-password" required
                    class="border border-tertiary outline-none text-gray-600 rounded-lg p-2 w-full bg-yellow-50 dark:bg-darkblue dark:text-slate-400 transition duration-500">
            </div>
            <div class="flex justify-between items-center mb-1">
                <button type="submit"
                    class="px-6 py-3 rounded-full font-semibold bg-tertiary dark:bg-secondary text-center text-white dark:text-darkblue hover:opacity-85 dark:hover:bg-primary transition duration-300">
                    Login
                </button>
                <div class="text-gray-600 dark:text-gray-400 transition duration-500">
                    <span>Belum punya akun?
                        <a href="{{ route('register') }}" class="hover:text-tertiary dark:hover:text-primary underline">
                            Register
                        </a>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <script>
        async function login(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            try {
                const response = await axios.post('/api/login', { username, password });
                localStorage.setItem('token', response.data.token);
                window.location.href = '/dashboard';
            } catch (error) {
                alert('Login gagal, periksa username dan password.');
            }
        }
    </script>
</x-layout>