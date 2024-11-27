import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                'resources/assets/css/helper.css', 'resources/assets/css/plugins.css', 'resources/assets/css/style.css',
                'resources/assets/css/iconfont.css',

                'resources/assets/js/main.js', 'resources/assets/js/plugins.js',
                'resources/assets/js/vendor/jquery-3.6.0.min.js', 'resources/assets/js/vendor/jquery-migrate-3.3.2.min.js',
                'resources/assets/js/vendor/modernizr-3.6.0.min.js',
            ],
            refresh: true,
        }),
    ],
});
