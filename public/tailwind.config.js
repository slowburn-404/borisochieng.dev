/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        '../public/index.html',
        '../**/*.{html,js}',
        '../**/*.js'
    ],
    theme: {
        extend: {
            screens: {
                "sm": "480px"
            },
            fontFamily: {
                Ubuntu: ['Ubuntu', 'sans-serif']
            },
            colors: {
                'black': '#000000'
            }
        },
    },
    plugins: [],
}