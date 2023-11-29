/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: { 
        ruslan : 'Ruslan Display, sans-serif',
        consolas: 'Consolas Inconsolata, monospace',
        montserrat: 'Montserra, sans-serif',
        quicksand: 'Quicksand, sans-serif',
      },
      boxShadow: {
        shaone : '0px 2px 8px 0px rgba(0, 0, 0, 0.10)',
        shatwo : '15px 15px 0px 0px #71A894',
        shathree : '0px 15px 0px 0px #71A894',
      }
    },
  },
  plugins: [],
}