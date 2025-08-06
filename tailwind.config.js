module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['IRANYekanX', 'sans-serif'],
      },
      colors: {
        royal: {
          100: '#e0e7ff',
          500: '#6366f1',
          900: '#312e81',
        }
      },
    },
  },
  darkMode: 'class',
  plugins: [],
}