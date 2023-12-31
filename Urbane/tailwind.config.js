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
        'dancing': ['Dancing Script', 'cursive'],
        'vina': ['Vina Sans', 'sans-serif'],
        'alfa': ['Alfa Slab One', 'serif']
      },
      colors: {
        'primary': '#00457D',
        'lightblue': '#56ACD8',
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
      },
      gridTemplateColumns: {
        '7Admin': '60px, repeat(6, minmax(100px, 220px))',
        '3Admin': 'repeat(3, minmax(100px, 400px))',
      },
      gridTemplateRows: {
        '7grid': 'repeat(7, minmax(100px, 220px))',
        '1grid': 'repeat(1, minmax(100px, 400px))',
        '2grid': 'repeat(2, minmax(100px, 300px))',
      }
    },

  },
  plugins: [
    require('tailwind-scrollbar-hide')
  ]
}
