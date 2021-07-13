import { createApp } from 'vue'
import App from './App.vue'
import VueScrollTo from 'vue-scrollto'

createApp(App)
    .use(VueScrollTo, {
        offset: -60
    })
    .mount('#app')