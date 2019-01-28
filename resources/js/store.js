import { getLocalUser } from './helpers/auth';

const user = getLocalUser();
export default {
    state: {
        loading: false,
        currentUser: user,
        isLoggedIn: !!user,
        auth_error: null,
        customers: [],
        countries: []
    },
    getters: {
        isLoading(state){
            return state.loading;
        },
        isLoggedIn(state){
            return state.isLoggedIn;
        },
        currentUser(state){
            return state.currentUser;
        },
        auth_error(state){
            return state.auth_error;
        },
        customers(state){
            return state.customers;
        },
        countries(state){
            return state.countries;
        },
    },
    mutations: {
        login(state){
            state.loading = true;
            state.auth_error = null;
        },
        loginSuccess(state, payload){
            state.auth_error = null;
            state.isLoggedIn = true;
            state.loading = false;
            state.currentUser = Object.assign({}, payload.user, {token: payload.access_token});
            localStorage.setItem("user", JSON.stringify(state.currentUser));
        },
        loginFailed(state, payload){
            state.loading = false;
            state.auth_error = payload.error;
        },
        logout(state){
            localStorage.removeItem("user");
            state.isLoading = false;
            state.currentUser = null;
        },
        updateCustomers(state, payload){
            state.customers = payload;

        },
        updateCountries(state, payload){
            state.countries = payload;

        }
    },
    actions:{
        login(context){
            context.commit("login");
        },
        getCustomers(context){
            axios.get('/api/customers', {
                headers:{
                    "Authorization": `Bearer ${context.state.currentUser.token}`
                }
            }).then((response) => {
                context.commit('updateCustomers', response.data.customers.data);
            })
        },
        getCountries(context){
            axios.get('/api/getCountries', {
                headers:{
                    "Authorization": `Bearer ${context.state.currentUser.token}`
                }
            }).then((response) => {
                context.commit('updateCountries', response.data.countries.data);
            })
        }
    }
};