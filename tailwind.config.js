/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './resources/views/**/*.blade.php',
      './resources/js/components/*.vue'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
