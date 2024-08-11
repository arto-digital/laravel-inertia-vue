import vue from '@vitejs/plugin-vue'
import laravel from 'laravel-vite-plugin'
import { defineConfig } from 'vite'
import laravelTranslations from 'vite-plugin-laravel-translations'

/**
 * @param {string|false} pluginConfiguration
 */
const translations = (pluginConfiguration = { namespace: false, includeJson: false }) => {
  if (typeof laravelTranslations === 'object') {
    return laravelTranslations.default(pluginConfiguration)
  }

  return laravelTranslations(pluginConfiguration)
}

export default defineConfig({
  plugins: [
    laravel({
      input: 'resources/js/app.js',
      refresh: true
    }),
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false
        }
      }
    }),
    translations()
  ]
})
