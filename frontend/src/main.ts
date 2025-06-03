import { DsfrBreadcrumb, DsfrButton, DsfrCard, DsfrHeader, VIcon } from '@gouvminint/vue-dsfr'
import { createPinia } from 'pinia'
import { createApp } from 'vue'
import App from './App.vue'

import router from './router/index'
import '@gouvfr/dsfr/dist/core/core.main.min.css'

import '@gouvfr/dsfr/dist/component/component.main.min.css'

import '@gouvfr/dsfr/dist/utility/utility.main.min.css'
import '@gouvminint/vue-dsfr/styles'

import '@gouvfr/dsfr/dist/scheme/scheme.min.css'
import '@gouvfr/dsfr/dist/utility/icons/icons.min.css'

import './main.css'

createApp(App)
  .component('DsfrHeader', DsfrHeader)
  // .component('DsfrButton', DsfrButton)
  .component('DsfrBreadcrumb', DsfrBreadcrumb)
  .component('DsfrCard', DsfrCard)
  .component('VIcon', VIcon)
  .use(createPinia())
  .use(router)
  .mount('#app')
