module.exports = {
  purge: [
    './source/*.blade.php'
  ],
  theme: {
    extend: {
      spacing: {
        '96': '24rem',
      },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms'),
  ],
}
