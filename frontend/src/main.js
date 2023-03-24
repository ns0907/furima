import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
// import store from './store'
import { createPinia } from 'pinia';
import { createPersistedState } from 'pinia-plugin-persistedstate';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

createApp(App).use(createPinia().use(createPersistedState())).use(router).mount('#app');
