/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",],
  theme: {
    extend: {
      fontFamily: {
        'urbanist': ['Urbanist', 'sans-serif'],
        'dancing': ['Dancing Script', 'cursive']
      },
      colors: {
        'primary': '#00457D',
        'secondary': '#595959',
        'txtclr': '#121111',
        'bgcolor': '#EEF7FF',
        'highlight': '#EAE2B7',
        'accent': '#FF4A52',
        'stroke': '#D1D1D1'
      },
      rotate: {
        '4': '4deg',
        '8': '8deg',
        '-4': '-4deg',
        '-8': '-8deg',
      }
    },
  },
  plugins: [],
}
