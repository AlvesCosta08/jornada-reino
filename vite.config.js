import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [react()],
  build: {
    outDir: 'dist',
    emptyOutDir: true,
    sourcemap: false,
    minify: 'esbuild',
    rollupOptions: {
      // Remova ou comente esta seção se estiver causando problemas
      // external: [],
      onwarn: (warning, warn) => {
        // Filtra avisos específicos que podem ser ignorados
        if (warning.code === 'UNUSED_EXTERNAL_IMPORT') {
          return // Ignora este aviso específico
        }
        if (warning.code === 'CIRCULAR_DEPENDENCY') {
          console.warn(`Dependência circular detectada: ${warning.importer} -> ${warning.source}`)
          return
        }
        // Para outros avisos, continue normalmente
        warn(warning)
      }
    }
  },
  server: {
    host: true,
    port: 3000,
  }
})
