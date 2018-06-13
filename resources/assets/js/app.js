
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
import Datepicker from 'vuejs-datepicker';
import {ru} from "vuejs-datepicker/src/locale";
import moment from 'moment';
import destinations from './destinations';
import Cookies from 'js-cookie';

Vue.use(VueTheMask)
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    components: {
        Datepicker
    },
    created() {
        this.destinations = Cookies.get('destinations')
        if (this.destinations === undefined) {
            var shuffled = destinations.sort(() => .5 - Math.random())
            this.destinations = shuffled.slice(0, 3)
            Cookies.set('destinations', JSON.stringify(this.destinations), { expires: 1 })
        } else {
            this.destinations = JSON.parse(this.destinations)
        }
        this.destinations = this.destinations.map((d) => {
            return [d[0].split(''), d[1].split('')];
        })
    },
    data() {
        return {
            avia_page: 'low',
            request: {top: false},
            request_sent: false,
            request_top: {top: true},
            request_top_sent: false,
            ru: ru,
        }
    },
    methods: {
        makeRequest: function () {
            if (!this.request.phone) {
                handleErrorAnimation('request-phone')
                return
            }
            this.request_sent = true
            axios.post('/api/request', this.request).then(function() {
            }.bind(this))
        },
        makeRequestTop: function () {
            if (!this.request_top.phone) {
                handleErrorAnimation('request-top-phone')
                return
            }
            this.request_top_sent = true
            axios.post('/api/request', this.request_top).then(function() {
            }.bind(this))
        },
        getDate: (minus_days = 1) => {
            return moment().subtract(minus_days, 'days').format('DD/MM').split('')
        }
    },
});
