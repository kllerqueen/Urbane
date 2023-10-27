/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",],
  theme: {
    extend: {
      fontFamily: {
        'urbanist': ['Urbanist', 'sans-serif']
      },
      colors: {
        'primary': '#00457D',
        'secondary': '#707070',
        'txtclr': '#121111',
        'bgcolor': '#FFFFFF',
        'highlight': '#EAE2B7',
        'accent': '#FF4A52'
      }
    },
  },
  plugins: [],
}
