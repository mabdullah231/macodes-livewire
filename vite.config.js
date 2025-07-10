import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["macodes/public/resources/css/app.css", "macodes/public/resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
