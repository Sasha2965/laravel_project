import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#0f172a",
                secondary: "#38bdf8",
                accent: "#facc15",
                textmain: "#e5e7eb",
            },
        },
    },
    plugins: [],
}

