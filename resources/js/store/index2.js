import Vue from 'vue'
import Vuex from 'vuex'
import tasks from './modules/task.js'

Vue.use(Vuex)

export default new Vuex.Store({
    modules:{
        tasks
    },
    strict: true
});