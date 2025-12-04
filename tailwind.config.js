/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: "1rem",
      screens: {
        sm: "400px",
        md: "500px",
        lg: "600px",
        xl: "700px",
        "2xl": "800px",
      },
    },
  },
  plugins: [],
}
