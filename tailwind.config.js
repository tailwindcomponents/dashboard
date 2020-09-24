module.exports = {
  purge: ['./source/**/*.blade.php'],
  theme: {
    extend: {
      fontFamily: {
        roboto: ['Roboto'],
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms'),
  ],
}
