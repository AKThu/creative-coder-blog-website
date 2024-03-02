/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'selector',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'white': '#fafafa',
        'black': '#121212',
        'black2': '#424242',
        'blue1': '#374785',
        'lightblue1': '#a8d0e6',
        'primary-background': '#071122', //082032
        'secondary-background': '#081133',
        'tertiary-background': '#092233',
      },
      fontFamily: {
        roboto: ["Roboto", "sans-serif"]
      },
      screens: {
        'xs': '480px',
        '3xl': '2000px'
      }
    },
  },
  plugins: [],
}

