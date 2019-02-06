<template>
	<div class="row">
        <div class="col-xs-6 col-md-6">
            <div class="top">
                <h2>Tareas</h2>
            </div>

            <ul class="list-group tasks-list">
            </ul>

            <p><a >Eliminar tareas completadas</a></p>            
        </div>
        <div class="col-xs-6 col-md-6">
            <router-view></router-view>
        </div>
	</div>
</template>

<script>

export default {
    props: ['comments'],
    
    methods: {
        
    }
}
</script>




