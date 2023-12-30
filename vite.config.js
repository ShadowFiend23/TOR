import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/landingpage.css',
                'resources/css/simplebar.css',
                'resources/css/fontawesome_icons.css'
            ],
            refresh: true,
        }),
    ],
});
