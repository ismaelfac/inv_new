import Vue from 'vue'
import Vuex from 'vuex'
import properties from './modules/properties'

Vue.use(Vuex);
export default new Vuex.Store({
    modules: {
        properties
    }
}) 
