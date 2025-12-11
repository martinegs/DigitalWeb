/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#1e3a8a', // blue-900
          dark: '#1e293b',
        },
        secondary: {
          DEFAULT: '#ea580c', // orange-600
          light: '#fb923c',
        },
      },
    },
  },
  plugins: [],
}
