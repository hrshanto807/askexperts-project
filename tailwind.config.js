/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}"],
  theme: {
    screens: {
      'tab': {"max":'992px'},
      // => @media (min-width: 640px) { ... }

      'mob': {"max":'640px'},
      // => @media (min-width: 1024px) { ... }
      
    },
  },
  plugins: [],
}

