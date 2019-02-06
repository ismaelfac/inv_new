import '@babel/polyfill'
import Vue from 'vue'
import VeeValidate from 'vee-validate';
import VueRouter from 'vue-router'
import {routes} from './routes'
import Main from './components/Main.vue'

Vue.use(VeeValidate, {
	validity: true
});
window.not_found = function () {
	console.log('Not found:' + router.currentRoute.fullPath);

	router.replace('/404');
};

window.not_found_unless = function (condition) {
	if (! condition) {
		not_found();
	}
}
Vue.use(VueRouter);
<<<<<<< HEAD

Vue.use(VeeValidate, {
	validity: true
});

window.not_found = function () {
	console.log('Not found:' + router.currentRoute.fullPath);

	router.replace('/404');
};

window.not_found_unless = function (condition) {
	if (! condition) {
		not_found();
	}
}

window.clone = function (obj) {
	return JSON.parse(JSON.stringify(obj));
}

Vue.component('app-icon', require('./components/Icon.vue'));
=======
>>>>>>> 2606621664cb76ab783da1dddc55bd575ef271ea

window.clone = function (obj) {
	return JSON.parse(JSON.stringify(obj));
}
Vue.component('app-icon', require('./components/Icon.vue'));
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

