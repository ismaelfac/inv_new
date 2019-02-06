import Login from "./components/auth/login.vue";
import Content from './components/content.vue'
import About from './components/website/about.vue'
import DetailsProperty from './components/properties_client/Details.vue'
export const routes=[
    {
        path: '/',
        component: Content,
        props: true
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/about',
        component: About,
        props: true
    },
    {
        path: '/properties/:id',
        component: DetailsProperty,
        props: true
    }
]