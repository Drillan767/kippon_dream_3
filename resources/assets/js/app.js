
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('example', require('./components/Example.vue'));
Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('blog_index', require('./components/blog/index.vue'));
console.log(testvar);

const app = new Vue({
    el: '#app'
});
