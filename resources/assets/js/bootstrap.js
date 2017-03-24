window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

import Vue from 'vue';
import moment from 'moment';
import VueRouter from 'vue-router';
import axios from 'axios';


window.Vue = Vue;
window.moment = moment;
Vue.use(VueRouter);
window.axios = axios;

//datatable
Vue.component('datatable', require('vuejs-datatable'));
//datatable

window.domain = window.domain;

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

