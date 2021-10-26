const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'woodsmoke': {
                    '50': '#f3f3f3', 
                    '100': '#e7e7e7', 
                    '200': '#c4c4c4', 
                    '300': '#a0a0a0', 
                    '400': '#595959', 
                    '500': '#121212', 
                    '600': '#101010', 
                    '700': '#0e0e0e', 
                    '800': '#0b0b0b', 
                    '900': '#090909'
                }
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
