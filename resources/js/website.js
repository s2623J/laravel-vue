import Vue from 'vue'

require('./bootstrap');

window.Vue = require('vue');

Vue.component('contact-us-form', require('./components/ContactForm.vue').default);

// Add Vue reference
const app = new Vue({
    el: '#app'
});