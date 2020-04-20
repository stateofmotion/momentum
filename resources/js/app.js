import './bootstrap';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import Vue from 'vue';
import App from './App.vue';

const app = new Vue({
    el: '#app',
    render: h => h(App),
});
