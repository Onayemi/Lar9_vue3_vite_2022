import './bootstrap';

import { createApp } from 'vue'
// import VueAxios from 'vue-axios';
// import axios from 'axios';

import App from './app.vue'
import router from './router'

createApp(App).use(router).mount("#app");
// const app = createApp(App).use(router);

// app.config.globalProperties.$axios = axios
// window.axios = axios

// app.mount("#app")

