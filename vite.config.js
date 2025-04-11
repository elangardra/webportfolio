import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            buildDirectory: 'public'
        }),
    ],
    build: {
        outDir: 'public',
        emptyOutDir: false,
        manifest: true,
        rollupOptions: {
            input: ['resources/css/app.css', 'resources/js/app.js']
        }
    }
});
