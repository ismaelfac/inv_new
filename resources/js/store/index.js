import Vue from 'vue'
import Vuex from 'vuex'
import tasks from './tasks.js'
Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        tasks,
        properties
    },
    getters: {
        findTask(state) {
            return function (id){
         		let task = state.tasks.find(task => task.id == id)
                not_found_unless(task);
                return task;    
            }
        },
        findProperty(state) {
            return function (id){
         		let property = state.properties.find(property => property.id == id)
                not_found_unless(property);
                return property;    
            }
        },
    },
    mutations: {
        createTask(state, newTask){
            state.tasks.push(newTask)
        },
        createProperty(state, newProperty){
            state.properties.push(newProperty)
        },
        toggleTask(state, task) {
            task.pending = !task.pending;
        },
        toggleProperty(state, property) {
            property.pending = !property.pending;
        },
        updateTask(state, {id, draft}){
            let index = state.tasks.findIndex(task => task.id == id);
            state.tasks.splice(index, 1, draft)
        },
        updateProperty(state, {id, draft_property}){
            let index = state.properties.findIndex(property => property.id == id);
            state.properties.splice(index, 1, draft_property)
        },
        deleteTask(state, id) {
            let index = state.tasks.findIndex(task => task.id == id);  
            state.tasks.splice(index, 1);
        },
        deleteProperty(state, id) {
            let index = state.properties.findIndex(property => property.id == id);  
            state.properties.splice(index, 1);
        },
        deleteCompletedTasks(state) {
            state.tasks = state.tasks.filter(task => task.pending);
        },
        deleteCompletedProperties(state) {
            state.properties = state.properties.filter(property => property.pending);
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
        }
    }
})



