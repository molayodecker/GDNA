/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,php,js}"],
  theme: {
    screens: {
      xs: "475px",
      sm: "500px",
      md: [
        // Sidebar appears at 768px, so revert to `sm:` styles between 768px
        // and 868px, after which the main content area is wide enough again to
        // apply the `md:` styles.
        { min: "668px", max: "767px" },
        { min: "868px" },
      ],
      lg: "1100px",
      xl: { min: "1100px", max: "7680px" },
    },
    extend: {
      fontFamily: {
        sans: ["Inter", "sans-serif"],
        serif: ["Tinos", "Times New Roman"],
      },
      colors: {
        strongCyan: "hsl(171, 68%, 44%)",
        lightBlue: "hsl(233, 100%, 69%)",
        darkGrayishBlue: "hsl(210, 10%, 33%)",
        grayishBlue: "hsl(201, 11%, 66%)",
        softRed: "hsl(0, 94%, 66%)",
        boldBlue: "hsl(210, 78%, 22%)",
        veryDarkBlue: "hsl(229, 31%, 21%)",
      },
    },
  },
  plugins: [],
};
