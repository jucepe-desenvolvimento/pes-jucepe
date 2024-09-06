import { createApp } from 'vue';
import App from './components/App.vue';
import axios from 'axios';

const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;

const app = createApp(App);
app.config.globalProperties.$axios = axios;

app.mount('#app');

import '../css/app.css';
