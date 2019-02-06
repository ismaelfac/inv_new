<template>
    <div>
        <h2 class="subtitle">{{ title }}</h2>
        <form @submit.prevent="validateBeforeSubmit">
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" v-model="comment.description" name="description" id="description" placeholder="Ingrese su comentario" v-validate="'required'" style="color:#1f223e">
                <span class="input-group-btn">
                    <button class="btn btn-success" type="button">Comentar</button>
                </span>
            </div><!-- /input-group -->
                <div v-show="errors.has('description')" class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span>{{ errors.first('description') }}</span>
            </div>
        </form>
    </div>
</template>

<script>
	export default {
        inject: ['$validator'],
		props: ['title', 'action', 'comment'],
		data() {
			return {
				draft: clone(this.comment)
			}
		},
		methods: {
			validateBeforeSubmit() {
				this.$emit('validateBeforeSubmit', this.draft);
			}
		}
	}
</script>









