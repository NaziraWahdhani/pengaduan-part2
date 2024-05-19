/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./home.html"],
    theme: {
      extend: {},
    },
    plugins: [],
  
      theme: {
        extend: {
          fontFamily: {
            'sans': ['Poppins', 'sans-serif'],
            colors: {
                'greens': '#39A07B',
                'semi black': '#313131',
                'green': '#4ACAA4',
                'grey' : '#7F7777',
                'black' : '#292C44',
                'greay' : '#E9E9E9',
              }
          },
        }
      }
    }
    