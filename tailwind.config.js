/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {},
        container: {
            center: true,
        }
    },
    plugins: [
        laravel({
                input: ['resources/css/app.css','resources/css/custom.css'],
            }),
        ],
}