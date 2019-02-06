import Login from "./components/auth/login.vue";
import Content from './components/content.vue'
import About from './components/website/about.vue'
import DetailsProperty from './components/properties_client/Details.vue'
//
import TaskList from './components/comments/List.vue'
import TaskEdit from './components/comments/Edit.vue'
import TaskCreate from './components/comments/Create.vue'
import TaskDetails from './components/comments/Details.vue'
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
    },
    {
        path: '/tasks',
        component: TaskList,
        children: [
            {
                path: '',
                name: 'tasks',
                component: {
                    template: '<h2>Por favor selecciona una tarea</h2>'
                }
            },
            {
                path: 'create',
                name: 'tasks.create',
                component: TaskCreate
            },
            {
                path: ':id',
                name: 'tasks.details',
                component: TaskDetails,
                props: true
            },
            {
                path: ':id/edit',
                name: 'tasks.edit',
                component: TaskEdit,
                props: true
            }
        ]
    }
]