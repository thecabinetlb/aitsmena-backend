/** @type {import('tailwindcss').Config} */
import colors from 'tailwindcss/colors';

export default {
  content: [
    './vendor/filament/**/*.blade.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        body: ['Aktifo'],
      },
      colors: {
        bg: 'black',
        bg2: '#32527B', //blue
        accent1: 'white',
        accent2: '#F2F2F2',//greyish white
        danger: colors.rose,
        primary: colors.blue,
        success: colors.green,
        warning: colors.yellow,      
      },
      backgroundOpacity: {
        '10': '0.1',
      },
      backgroundImage: {
        'noise':'url(/@public/images/noise/noise_v2.svg)',
        'footer-noise':'url(/@public/images/noise/footer-noise.svg)',
        'extended-noise':'url(/@public/images/noise/extended-noise_v2.svg)',
        'colors':'url(/@public/images/insidepages/elements/allelements.webp)',
        'mobilecolors':'url(/@public/images/insidepages/elements/allelementsmobile_v1.webp)',
      },
      aspectRatio: {
        '1.59/1': '1.59 / 1',
        '0.88/1': '0.88 / 1',
        '1.72/1': '1.72 / 1'
      },
      dropShadow: {
        'lg': '0 10px 8px rgba(255,255,255)'
      },
      letterSpacing: {
        tightest: '-.075em',
        tighter: '-.05em',
        tight: '-.025em',
        normal: '0',
        wide: '.025em',
        wider: '.05em',
        widest: '.1em',
        widest: '.25em',
      }
  }
},
  plugins: [],
}

