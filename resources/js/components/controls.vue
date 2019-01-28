<template>
  <div>
    <div class="btn-group" role="group" aria-label="Basic example" v-for="(control, index) in controls" :key="index">
      <button v-if="control === 'index'" type="button" class="btn btn-inverse-success" @click.stop.prevent="new_">
        <span class="oi oi-plus"></span> Crear
      </button>
      <button v-if="control === 'edit'" type="button" class="btn btn-inverse-warning" @click.stop.prevent="edit_">
        <span class="oi oi-plus"></span> Editar
      </button>
      <button v-if="control === 'destroy'" type="button" class="btn btn-inverse-danger" @click.stop.prevent="destroy_">
        <span class="oi oi-plus"></span> Eliminar
      </button>
      <button v-if="control === 'print'" type="button" class="btn btn-inverse-danger pull-rigth" @click.stop.prevent="destroy_">
        <span class="oi oi-plus"></span> Imprimir
      </button>
      <button v-if="control === 'export'" type="button" class="btn btn-inverse-danger pull-rigth" @click.stop.prevent="destroy_">
        <span class="oi oi-plus"></span> Exportar
      </button>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
    };
  },
  props: {
    controls:{ type: Array, required: true, default: null },
    row:{ type: Array, required: false,  default: null }
  },
  methods: {
    new_(){
      alert('nuevo');
    },
    edit_(){
      alert('editar')
    },
    destroy_(){
      alert('eliminar')
    },
    print_(){
      alert('imprimir')
    },
    export_(){
      alert('exportar')
    }
  }
};
</script>