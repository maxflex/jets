
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.$ = window.jQuery = require('jquery')

window.axios = require('axios')

require('./engine');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueTheMask from 'vue-the-mask'

Vue.use(VueTheMask)
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: () => {
        return {
            avia_page: 'low',
            request: {},
            request_sent: false
        }
    },
    methods: {
        makeRequest: function () {
            this.request_sent = true
            axios.post('/api/request', this.request).then(function() {
            }.bind(this))
        }
    },
});
