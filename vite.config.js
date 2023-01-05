import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/scss/ragistration.scss',
                'resources/scss/login.scss',
                'resources/scss/admin/admin_app.scss',
                'resources/js/jquery-3.6.1.min.js',
                'resources/js/app.js',
                'resources/js/regstration.js',
                'resources/js/login.js',
                'resources/js/admin/admin_home.js',
            ],
            refresh: true,
        }),
    ],
});
