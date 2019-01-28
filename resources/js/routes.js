import Home from './components/dashboard.vue';
import Login from './components/auth/Login.vue';
import Customers from './components/customers/Main.vue';
import CustomersList from './components/customers/List.vue';
import CustomersNew from './components/customers/New.vue';

export const routes = [
    {
        path: '/',
        component: Home,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/customers',
        component: Customers,
        meta: {
            requiresAuth: true
        },
        children:[
            {
                path: '/',
                component: CustomersList
            },
            {
                path: 'new',
                component: CustomersNew
            }
        ]
    }
];