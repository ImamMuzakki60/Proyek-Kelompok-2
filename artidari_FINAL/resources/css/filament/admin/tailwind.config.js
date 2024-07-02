import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
          colors: {
            'artidari-alabaster': '#F5EBE0',
            'artidari-space-cadet': '#1E2952',
            'artidari-celestial-blue': '#4997D0',
            'artidari-light-silver': '#D9D9D9'
          }
        },
      },
}
