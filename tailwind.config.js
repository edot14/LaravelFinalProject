/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                "black": "#060606"
            },
            fontFamily: {
                "roboto": ["Roboto", "sans-serif"]
            },
            fontSize: {
                "2xs": ".625rem" //10px divded by the base font size which is 16 = 0.625rem.
            }
        },
    },
    plugins: [],
}
