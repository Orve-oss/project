import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import Example from './components/Example.vue';
import listClient from './pages/listClient.vue';

const app = createApp();
app.component('Example',    Example);
app.component('listClient', listClient);
app.mount('#app');
