import defaultTheme from 'tailwindcss/defaultTheme';
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        '.node_modules/flowbite/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', 'sans-serif'],
                comfortaa: ['Comfortaa', 'sans-serif'],
                rubik: ['Rubik', ...defaultTheme.fontFamily.sans],
            },
        },
        colors:{
            primaryDark: '#0f172a',
            secondaryDark: '#5ADBFF',
            secondsDark: '#85E4FF',
            primary: '#2157F2',
            whites:'#F3F4F6',
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
