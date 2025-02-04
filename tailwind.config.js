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
            colors: {
                primary: '#4CAF50', // Green
                primaryHover: '#45a049', // Darker Green for hover
                secondary: '#2196F3', // Blue
                secondaryHover: '#1976D2', // Darker Blue for hover
                background: '#F5F5F5', // Light Grey
                cardBackground: '#FFFFFF', // White for cards
                textPrimary: '#333333', // Dark Grey text
                textSecondary: '#757575', // Medium Grey text
                link: '#2196F3', // Blue for links
                border: '#E0E0E0', // Light Grey for borders
                error: '#F44336', // Red for errors
            },
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
