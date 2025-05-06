// tailwind.config.js
const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary:   "#0F66AF",
        secondary: "#E5002A",
        dark:      "#111827",
        medium:    "#6B7280",
        light:     "#F3F4F6",
      },
      fontFamily: {
        heading: ["Montserrat", "sans-serif"],
        body:    ["Inter",      "sans-serif"],
      },
      backgroundImage: {
        'card-gradient': 'linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(243,244,246,1) 100%)',
      },
    },
  },
  plugins: [],
}
