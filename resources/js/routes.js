import Content from './components/content.vue'
import About from './components/website/about.vue'
export const routes=[
    {
        path: '/',
        component: Content,
        props: true
    },
    {
        path: '/about',
        component: About,
        props: true
    }

]