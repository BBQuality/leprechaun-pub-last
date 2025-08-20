import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
    host: true,
    },
    logLevel: 'info', // або 'debug' для детальніших логів
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/custom.css'],
            refresh: true,
        }),
    ],
});