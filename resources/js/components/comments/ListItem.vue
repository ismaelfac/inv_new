<template>
    <li @click="select" class="list-group-item task-list-item"
        :class="{active: isActive, completed: !task.pending}">
        <a @click.stop="toggleStatus">
            <app-icon :img="task.pending ? 'unchecked' : 'check'"></app-icon>
        </a>

        <span class="description">{{ task.title }}</span>
    </li>
</template>

<script>
import store from '../../store';

export default {
    data() {
        return {
            draft: ''
        };
    },
    props: ['task'],
    computed: {
        isActive() {
            return this.task.id == this.$route.params.id;
        }
    },
    methods: {
        select() {
            let route = this.isActive
                ? {name: 'tasks'}
                : {name: 'tasks.details', params: {id: this.task.id}};

            this.$router.push(route);
        },
        toggleStatus() {
            store.dispatch('toggleTask',this.task);
        }
    }
}
</script>








