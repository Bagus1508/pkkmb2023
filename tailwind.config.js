/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        space: {
          unguhero: '#4A289C',
          dongkerhero: '#00092B',
          ungu: '#422B94',
          back: '#050B33',
          buttonungu: '#170D66',
          textungu: '#D73AFF',
          buttonbiru: '#2563EA',
        },
      },
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}