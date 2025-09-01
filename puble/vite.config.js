import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/filament.css',
        'resources/css/app.css',
        'resources/css/custom.css', // 👈 окремий вхід
        'resources/js/app.js',
      ],
      refresh: true,
    }),
  ],
})
