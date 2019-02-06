import shop from '../../api/task'

const state = {
    all: []
}
const getters = {

}
const mutations = {
        setTasks(state, tasks){
            state.all = tasks
        },
    
}
const actions = {
    getAllTasks({commit}){
        shop.getTasks(tasks => {
            commit('setTasks', tasks)
        });
    }
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}




