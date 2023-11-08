/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/views/**/*.blade.php',
        './resources/views/admin/**/*.blade.php',
    ],
    theme: {
        extend: {},
        colors: {
           'darkTheme': '#000000',
           'lightTheme': '#FCF5ED',
           'whiteColor': '#ffffff',

           // 'darkText': '#900C3F',
           'lightText': '#F94C10',
           'darkText': '#990000',


        },
    },
    plugins: [],
}
