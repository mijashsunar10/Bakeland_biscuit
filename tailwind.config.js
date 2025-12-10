import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
            'pastry-primary': '#8B4513',
            'pastry-secondary': '#D4A76A',
            'pastry-accent': '#FF6B6B',
            'pastry-cream': '#FFF8E1'
          },
          animation: {
            'spin-slow': 'spin 40s linear infinite',
            'float': 'float 6s ease-in-out infinite'
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-20px)' }
            }
          }
        },
    },

    plugins: [forms],
};
