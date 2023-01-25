/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['./*.{html,js}'],
    theme: {
        extend: {
            screens: {
                "sm": "480px"
            },
            fontFamily: {
                Ubuntu: ['Ubuntu', 'sans-serif']
            },
            colors: {
                'purple': '#4A6CF7',
                'black': '#000000'
            }
        },
    },
    plugins: [],
}