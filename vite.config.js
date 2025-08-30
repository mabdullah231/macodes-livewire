import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["public/resources/css/app.css", "public/resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
