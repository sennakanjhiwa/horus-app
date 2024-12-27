/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.css',
    ],
    darkMode: 'class',
    theme: {
        container: {
            center: true,
            padding: "18px",
        },
        extend: {
            colors: {
                primary: "#ffd700ff",
                secondary: "#cdac00",
                tertiary: "#826e00",
                dark: "#141822",
                darkblue: "#1e252f",
                darkgold: "#a98c1a",
            },
            screens: {
                "2xl": "1320px",
            },
            backgroundImage: {
                pattern: "url('../../public/img/pattern.svg')",
                "pattern-dark": "url('../../public/img/pattern-dark.svg')",
                "pattern-footer": "url('../../public/img/pattern-footer.svg')",
                "pattern-footer-dark": "url('../../public/img/pattern-footer-dark.svg')",
            },
            animation: {
                blob: "blob 7s infinite",
            },
            keyframes: {
                blob: {
                    "0%": {
                        transform: "translate(0px, 0px) scale(1)"
                    },
                    "33%": {
                        transform: "translate(30px, -50px) scale(1.1)"
                    },
                    "66%": {
                        transform: "translate(-20px, 20px) scale(0.9)"
                    },
                    "100%": {
                        transform: "translate(0px, 0px) scale(1)"
                    },
                }
            },
        },
    },
    plugins: [
        function ({ addComponents }) {
            addComponents({
                '.masking-certifications-dark': {
                    position: 'relative',
                    overflow: 'hidden',
                    '&::after': {
                        content: '""',
                        position: 'absolute',
                        bottom: '0',
                        left: '0',
                        width: '100%',
                        height: '21%', // Sesuaikan sesuai kebutuhan
                        background: 'linear-gradient(to top, #141822, transparent)',
                        zIndex: '1',
                    },
                    img: {
                        position: 'relative',
                        zIndex: '0',
                    },
                },
                '.masking-certifications': {
                    position: 'relative',
                    overflow: 'hidden',
                    '&::after': {
                        content: '""',
                        position: 'absolute',
                        bottom: '0',
                        left: '0',
                        width: '100%',
                        height: '21%', // Sesuaikan sesuai kebutuhan
                        background: 'linear-gradient(to top, white, transparent)',
                        zIndex: '1',
                    },
                    img: {
                        position: 'relative',
                        zIndex: '0',
                    },
                },
            });
        },
    ],
};
