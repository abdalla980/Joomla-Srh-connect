import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

export default defineConfig({
  plugins: [react()],
  server: {
    port: 5174,
    proxy: {
      // Avoid CORS during local demo: /joomla-api → Laragon Joomla
      '/joomla-api': {
        target: 'http://127.0.0.1',
        changeOrigin: true,
        rewrite: (path) => path.replace(/^\/joomla-api/, '/joomla'),
      },
    },
  },
})
