import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/js/App.jsx'],
      refresh: true,
    }),
    react(),
  ],
  server: {
    host: '127.0.0.1', // Forzar IPv4
    port: 5173,        // Puerto de Vite
  },
});
