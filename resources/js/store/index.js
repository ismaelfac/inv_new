import Vue from 'vue'
import Vuex from 'vuex'
import tasks from './tasks.js'
Vue.use(Vuex)

export default new Vuex.Store({
    state: {
<<<<<<< HEAD
        tasks,
        properties
=======
        tasks
>>>>>>> 2606621664cb76ab783da1dddc55bd575ef271ea
    },
    getters: {
        findTask(state) {
            return function (id){
         		let task = state.tasks.find(task => task.id == id)
                not_found_unless(task);
                return task;    
            }
<<<<<<< HEAD
        },
        findProperty(state) {
            return function (id){
         		let property = state.properties.find(property => property.id == id)
                not_found_unless(property);
                return property;    
            }
        },
=======
        }
>>>>>>> 2606621664cb76ab783da1dddc55bd575ef271ea
    },
    mutations: {
        createTask(state, newTask){
            state.tasks.push(newTask)
        },
<<<<<<< HEAD
        createProperty(state, newProperty){
            state.properties.push(newProperty)
        },
        toggleTask(state, task) {
            task.pending = !task.pending;
        },
        toggleProperty(state, property) {
            property.pending = !property.pending;
        },
=======
        toggleTask(state, task) {
            task.pending = !task.pending;
        },
>>>>>>> 2606621664cb76ab783da1dddc55bd575ef271ea
        updateTask(state, {id, draft}){
            let index = state.tasks.findIndex(task => task.id == id);
            state.tasks.splice(index, 1, draft)
        },
<<<<<<< HEAD
        updateProperty(state, {id, draft_property}){
            let index = state.properties.findIndex(property => property.id == id);
            state.properties.splice(index, 1, draft_property)
        },
=======
>>>>>>> 2606621664cb76ab783da1dddc55bd575ef271ea
        deleteTask(state, id) {
            let index = state.tasks.findIndex(task => task.id == id);  
            state.tasks.splice(index, 1);
        },
<<<<<<< HEAD
        deleteProperty(state, id) {
            let index = state.properties.findIndex(property => property.id == id);  
            state.properties.splice(index, 1);
        },
        deleteCompletedTasks(state) {
            state.tasks = state.tasks.filter(task => task.pending);
        },
        deleteCompletedProperties(state) {
            state.properties = state.properties.filter(property => property.pending);
=======
        deleteCompletedTasks(state) {
            state.tasks = state.tasks.filter(task => task.pending);
>>>>>>> 2606621664cb76ab783da1dddc55bd575ef271ea
        }
    },
    actions: {
        createTask(context,{ title, description }) {
            return new Promise((resolve, reject) => {
                let newTask = {
                    id: context.state.tasks.length + 1,
                    title,
                    description,
                    pending: true
                }    
                context.commit('createTask', newTask)
                resolve(newTask)
            })            
        },
<<<<<<< HEAD
        createProperty(context,{ title, description }) {
            return new Promise((resolve, reject) => {
                let newProperty = {
                    id: context.state.properties.length + 1,
                    title,
                    description,
                    pending: true
                }    
                context.commit('createProperty', newProperty)
                resolve(newProperty)
            })            
        },
        updateTask(context, payload) {
            context.commit('updateTask', payload)
        },
        updateProperty(context, payload) {
            context.commit('updateProperty', payload)
        },
        toggleTask(context, task){
            context.commit('toggleTask', task)
        },
        toggleProperty(context, property){
            context.commit('toggleProperty', property)
        },
        deleteTask(context, id){
            context.commit('deleteTask', id)
        },
        deleteProperty(context, id){
            context.commit('deleteProperty', id)
        },
        deleteCompletedTasks(context){
            context.commit('deleteCompletedTasks')
        },
        deleteCompletedProperties(context){
            context.commit('deleteCompletedProperties')
=======
        updateTask(context, payload) {
            context.commit('updateTask', payload)
        },
        toggleTask(context, task){
            context.commit('toggleTask', task)
        },
        deleteTask(context, id){
            context.commit('deleteTask', id)
        },
        deleteCompletedTasks(context){
            context.commit('deleteCompletedTasks')
>>>>>>> 2606621664cb76ab783da1dddc55bd575ef271ea
        }
    }
})



