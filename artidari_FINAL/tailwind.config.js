/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'artidari-alabaster': '#F5EBE0',
        'artidari-space-cadet': '#1E2952',
        'artidari-celestial-blue': '#4997D0',
        'artidari-light-silver': '#D9D9D9'
      }
    },
  },
  plugins: [],
}