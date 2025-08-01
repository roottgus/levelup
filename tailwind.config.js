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
        primary:   "#2291FF",   // azul brillante LevelUp+
        secondary: "#163969",   // azul oscuro LevelUp+
        accent:    "#E5002A",   // rojo acento
        dark:      "#1A222F",   // gris-azul muy oscuro
        medium:    "#6B7280",   // gris medio (opcional)
        light:     "#F6FAFD",   // blanco azulado para fondos
        // Puedes agregar más si los necesitas
      },
      fontFamily: {
        heading: ["Montserrat", "sans-serif"],
        body:    ["Inter",      "sans-serif"],
      },
      backgroundImage: {
        'card-gradient': 'linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(246,250,253,1) 100%)',
      },
    },
  },
  plugins: [],
}
