require('./bootstrap');
import router from './routes.js'
import VueTableActions from './components/VueTableActions.vue'
Vue.component('VueTableActions', VueTableActions)

var vm = new Vue({
    el: '#app',
    router

});
