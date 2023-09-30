import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

let files = [
    'resources/css/admin/app.css',
    'resources/js/admin/app.js',
    'resources/css/site/landpage.css',
    'resources/js/site/app.js',
];

export default defineConfig({
    plugins: [
        laravel({
            input: files,
            refresh: true,
        }),
    ],
    resolve: {
        alias: [
            {
                // this is required for the SCSS modules
                find: /^~(.*)$/,
                replacement: '$1',
            },
        ],
    },
});
