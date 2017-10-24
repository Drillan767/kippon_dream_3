import VueRouter from 'vue-router';

let routes = [
    {
        path: '/blog',
        component: require('./components/blog/index.vue'),
        name: 'blog-index'
    },
    {
        path: '/blog/new',
        component: require('./components/blog/new.vue'),
        name: 'blog-new'
    },

];

export default new VueRouter({
    routes,
    mode: 'history',
});