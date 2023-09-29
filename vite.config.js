import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/css/app.css',
                "resources/js/app.jsx",
            ],
            // refresh: true,
            refresh: ["resources/views/**", "resources/js/**"],
        }),
        react(),
    ],
    resolve: {
        alias: {
            "@": "/resources/js",
        },
    },
    server: {
        hmr: {
            host: "localhost",
        },
    },
});
