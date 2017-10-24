/**
 * Liste des variables définies par Javascript :
 * - testvar
 */

import './bootstrap'
import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './router';

Vue.use(VueRouter);
Vue.component('example', require('./components/Example.vue'));
Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('blog_index', require('./components/blog/index.vue'));

const app = new Vue({
    el: '#app',
    router
});
