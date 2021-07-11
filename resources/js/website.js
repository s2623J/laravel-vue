import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';

require('./bootstrap');

window.Vue = require('vue');

Vue.component('contact-us-form', require('./components/ContactForm.vue').default);

// Add Vue reference
const app = new Vue({
    el: '#app'
});