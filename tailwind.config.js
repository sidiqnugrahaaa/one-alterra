/** @type {import('tailwindcss').Config} */
export default {
  darkTheme: false,
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'one-primary':'#F37524',
        'one-secondary':'#19345F',
      },
      
    },
  },
  plugins: [],
}

