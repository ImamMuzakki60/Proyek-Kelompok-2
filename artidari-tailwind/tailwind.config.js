/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}", "./!(build|dist|.*)/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        darkslateblue: {
          "100": "#1e2952",
          "200": "rgba(30, 41, 82, 0.65)",
        },
        white: "#fff",
        black: "#000",
        linen: "#f5ebe0",
        dimgray: "#737373",
        steelblue: {
          "100": "#4997d0",
          "200": "#307db8",
          "300": "#525c85",
          "400": "rgba(82, 92, 133, 0.65)",
        },
        gray: {
          "100": "rgba(0, 0, 0, 0.8)",
          "200": "rgba(0, 0, 0, 0.7)",
        },
        whitesmoke: "#f8f9fa",
        gainsboro: "#d9d9d9",
      },
      spacing: {},
      fontFamily: {
        raleway: "Raleway",
        inconsolata: "Inconsolata",
        poppins: "Poppins",
        radley: "Radley",
        montserrat: "Montserrat",
      },
      borderRadius: {
        "8xs": "5px",
        "31xl": "50px",
        "6xs": "7px",
      },
    },
    fontSize: {
      base: "16px",
      "51xl": "70px",
      "23xl": "42px",
      "37xl": "56px",
      xs: "12px",
      "17xl": "36px",
      "3xl": "22px",
      "10xl": "29px",
      "11xl": "30px",
      sm: "14px",
      "5xl": "24px",
      lgi: "19px",
      lg: "18px",
      inherit: "inherit",
    },
    screens: {
      lg: {
        max: "1200px",
      },
      mq1050: {
        raw: "screen and (max-width: 1050px)",
      },
      mq925: {
        raw: "screen and (max-width: 925px)",
      },
      mq900: {
        raw: "screen and (max-width: 900px)",
      },
      mq850: {
        raw: "screen and (max-width: 850px)",
      },
      mq750: {
        raw: "screen and (max-width: 750px)",
      },
      mq700: {
        raw: "screen and (max-width: 700px)",
      },
      mq450: {
        raw: "screen and (max-width: 450px)",
      },
    },
  },
  corePlugins: {
    preflight: false,
  },
};
