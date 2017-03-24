import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component : require('./views/home.vue')
    },
    {
        path: '/frog/create',
        component : require('./views/create.vue')
    }
];


export default new VueRouter({
    routes,
    linkActiveClass: 'active'
});