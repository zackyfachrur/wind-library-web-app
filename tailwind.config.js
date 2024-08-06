/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      backgroundImage: {
        'bg-home': "url('./src/img/bg-home.png')",
      }
    },
  },
  plugins: [],
}

