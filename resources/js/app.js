import './bootstrap'
import '../css/app.css'
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { createI18n } from 'vue-i18n'
import { ZiggyVue } from '../../vendor/tightenco/ziggy'

const appName = import.meta.env.VITE_APP_NAME || 'Laravel'

const i18n = (locale, fallbackLocale) =>
  createI18n({
    legacy: false,
    locale: locale,
    fallbackLocale: fallbackLocale,
    messages: LARAVEL_TRANSLATIONS
  })

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) =>
       resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
     const appConfig = props.initialPage.props?.app
 console.log(appConfig)
    return createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .use(i18n(appConfig.locale, appConfig.fallbackLocale))
      .mount(el)
  },
})
