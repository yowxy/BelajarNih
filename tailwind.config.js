import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
            },
            borderRadius: {
                '36':'36px'
            },
            colors: {
              customYellow: '#E7E51D',
                customBlack: '#000000',
            },
            backgroundImage: {
                'gradient-custom': 'linear-gradient(to bottom right, #000000 30%, #E7E51D 83%)',
            },
            backgroundColor: {
                'gradient-home': 'linear-gradient(to bottm right, #000000 91%, #E7E51D 16% )',
            },
        },
    },
    plugins: [],
};
