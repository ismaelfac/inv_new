import { getLocalUser } from '../../helpers/auth';

const user = getLocalUser();
const state = {
    customers: []
}

const getters = {
    customers(state){
        return state.customers;
    },
}

const actions = {
    getCustomers(context){
        axios.get('/api/customers', {
            headers:{
                "Authorization": `Bearer ${context.state.currentUser.token}`
            }
        }).then((response) => {
            context.commit('updateCustomer', response.data.customers.data);
        })
    }
}

const mutations = {
    updateCustomer(state, payload){
        state.customers = payload;

    },
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}