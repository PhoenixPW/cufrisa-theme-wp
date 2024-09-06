/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}","./template-parts/*.{php,html,js}"],
  theme: {
    extend: {
      screen: {
       sm: '640px',
       md: '840px',
       lg: '1040px',
       xl: '1240px',

      }
    },
  },
  plugins: [],
}

