<template>
    <div>
        <div class="btn-wrapper">
            <router-link to="/customers/new" class="btn btn-primary btn-sm">Nuevo</router-link>
        </div>
       <table class="table">
           <thead>
               <th>Nombres</th>
               <th>Email</th>
               <th>Telefono</th>
               <th>Acciones</th>
           </thead>
           <tbody>
               <template v-if="!customers.length">
                   <tr><td colspan="4" class="text-center">No hay clientes</td></tr>
               </template>
               <template v-else>
                   <tr v-for="customer in customers" :key="customer.id">
                       <td>{{ customer.last_name }} {{ customer.first_name }}</td>
                       <td>{{ customer.email }}</td>
                       <td>{{ customer.phone }}</td>
                       <td>
                           <router-link :to="`/customer/${customer.id}`" class="btn btn-outline-primary">Ver</router-link>
                       </td>
                   </tr>
               </template>
           </tbody>
       </table>
    </div>
</template>
<script>
export default {
    name: 'list',
    mounted() {
        if (this.customers.length) {
            return;
        }
        
        this.$store.dispatch('getCustomers');
    },
    computed:{
        customers(){
            return this.$store.getters.customers;
        }
    }
}
</script>
<style scoped>
.btn-wrapper {
    text-align: right;
    margin-bottom: 20px;
}
</style>