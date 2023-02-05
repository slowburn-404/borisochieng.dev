/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        '../public/index.html',
        '../**/*.{html,js}',
        '../**/*.js'
    ],
    theme: {
        extend: {
            fontFamily: {
                Ubuntu: ['Ubuntu', 'sans-serif']
            },
            colors: {
                'black': '#000000',
                'bg-gray-900': '#000000'
            }
        },
    },
    plugins: [],
}