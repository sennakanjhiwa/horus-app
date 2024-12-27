<x-layout>
    <div class="flex justify-center items-center h-screen">
        <form id="registerForm" onsubmit="register(event)"
            class="bg-white dark:bg-slate-800 text-gray-600 dark:text-gray-400 mx-6 sm:mx-0 w-full sm:w-1/2 lg:w-2/5 xl:w-1/3 max-w-lg p-6 rounded-lg shadow-md transition duration-500 border-t-2 border-tertiary">
            <h2 class="text-xl text-center font-bold mb-4">Register</h2>
            <div class="mb-3">
                <label for="name" class="block">Name:</label>
                <input type="text" id="name" name="name" autocomplete="name" required
                    class="border border-tertiary outline-none text-gray-600 rounded-lg p-2 w-full bg-yellow-50 dark:bg-darkblue dark:text-slate-400 transition duration-500">
            </div>
            <div class="mb-3">
                <label for="username" class="block">Username:</label>
                <input type="text" id="username" name="username" autocomplete="username" required
                    class="border border-tertiary outline-none text-gray-600 rounded-lg p-2 w-full bg-yellow-50 dark:bg-darkblue dark:text-slate-400 transition duration-500">
            </div>
            <div class="mb-3">
                <label for="email" class="block">Email:</label>
                <input type="email" id="email" name="email" autocomplete="email" required
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
                    Register
                </button>
                <div class="text-gray-600 dark:text-gray-400 transition duration-500">
                    <span>Sudah punya akun?
                        <a href="{{ route('login') }}" class="hover:text-tertiary dark:hover:text-primary underline">
                            Login
                        </a>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <script>
        async function register(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const name = document.getElementById('name').value;
            const password = document.getElementById('password').value;

            try {
                const response = await axios.post('/api/register', {
                    username, email, name, password
                });
                alert('Registrasi berhasil!');
                window.location.href = '/login';
            } catch (error) {
                if (error.response && error.response.data.errors) {
                    const errors = error.response.data.errors;
                    const messages = Object.keys(errors)
                        .map((key) => errors[key].join('\n'))
                        .join('\n');
                    alert('Registrasi gagal:\n' + messages);
                } else {
                    alert('Terjadi kesalahan: ' + (error.response?.data?.message || error.message));
                }
            }
        }
    </script>
</x-layout>
