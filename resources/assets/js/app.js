
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
var axios = require('axios');
import VueSocketio from 'vue-socket.io';
import socketio from 'socket.io-client';
require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueSocketio, socketio(':8890'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('message', require('./components/MessageComponent.vue'));
Vue.component('topo', require('./components/Topo.vue'));
Vue.component('timeline', require('./components/Timeline.vue'));
Vue.component('menu_principal', require('./components/Menu.vue'));
Vue.component('publicar_contenido', require('./components/PublicarContenido.vue'));
Vue.component('painel', require('./components/Painel.vue'));
Vue.component('caixa', require('./components/Caixa.vue'));
Vue.component('pagina', require('./components/Pagina.vue'));

const app = new Vue({
    el: '#app'
});
const body_app = new Vue({
    el: '#app_body'
});