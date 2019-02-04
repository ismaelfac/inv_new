
import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import {routes} from './routes'
import Main from './components/Main.vue'

Vue.use(VueRouter);
Vue.use(Vuex);

const router = new VueRouter({
    routes,
    mode: 'history'
});

new Vue({
    el: '#app',
    router,
    components: {
        'main-app': Main
    }
});

