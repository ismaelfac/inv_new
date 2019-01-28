<template>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-sample" @submit.prevent="add">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Información Basica
                                </button>
                            </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tipo DNI</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" v-model="customer.type_dni">
                                            <option disabled value="">Seleccione el Tipo DNI</option>
                                            <option v-for="option in customer.options_dni" v-bind:value="option.value">
                                                {{ option.text }}
                                            </option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">DNI </label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" v-model="customer.dni" />
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <template v-if="customer.type_dni === '1'">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Apellidos</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" v-model="customer.last_name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nombres </label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" v-model="customer.first_name"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <template v-else>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Razón social</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" v-model="customer.business_name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Pagina Web </label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" v-model="customer.web" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <template v-if="customer.type_dni === '1'">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Genero</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" v-model="customer.gender">
                                            <option disabled value="">Seleccione su genero</option>
                                            <option v-for="option in customer.options_gene" v-bind:value="option.value">
                                                {{ option.text }}
                                            </option>
                                        </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Fecha de Nacimiento</label>
                                        <div class="col-sm-9">
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" v-model="customer.birthdate" />
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </template>
                            </div>
                        </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Información Demografica
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" v-model="customer.email"/>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Telefono Movil</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" v-model="customer.phone" />
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Domicilio</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" v-model="customer.adrress" />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pais</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" v-model="customer.country_id" v-on:click="getCountries">
                                            <option disabled value="">Seleccione su Pais</option>
                                            <option v-for="option in customer.options_country" v-bind:value="option.value">
                                                {{ option.text }}
                                            </option>
                                        </select>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">City</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Country</label>
                                        <div class="col-sm-9">
                                        <select class="form-control">
                                            <option>America</option>
                                            <option>Italy</option>
                                            <option>Russia</option>
                                            <option>Britain</option>
                                        </select>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><button type="submit" class="btn btn-inverse-success mr-2" >Guardar</button></div>
                        <div class="col-md-6"><router-link to="/customers" class="btn btn-inverse-light">Cancelar</router-link></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="errors" v-if="errors">
                                <ul class="list-group">
                                    <li class="list-item" v-for="(fieldsError, fieldName) in errors" :key="fieldName">
                                        <strong>{{ fieldName }}</strong> {{ fieldsError.join('\n') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import validate from 'validate.js';
export default {
    name:'New',
    data() {
        return {
            customer: {
                options_dni:[
                    {text: "CEDULA DE CIUDADANIA", value: "1" },
                    {text: "NIT", value: "2" }
                ],
                options_gene:[
                    {text: "MASCULINO", value: "1" },
                    {text: "FEMENINO", value: "2" }
                ],
                options_state_customer:[
                    {text: "ACTIVO", value: "Activo" },
                    {text: "INACTIVO", value: "Inactivo" },
                    {text: "SUSPENDIDO", value: "Suspendido" }
                ],
                options_country:[],
                type_dni: '',
                dni: '',
                business_name: '',
                web: '',
                last_name: '',
                first_name: '',
                email: '',
                phone: '',
                address: '',
                country_id: '',
                departament_id: '',
                municipality_id: '',
                location_id: '',
                neighborhood_id: '',
                gender: '',
                state_customer: ''
            },
            errors: null
        };
    },
    computed: {
        currentUser() {
            return this.$store.getters.currentUser;
        }
    },
    methods:{
        add() {
            this.errors = null;
            const constraints = this.getConstraints();
            const errors = validate(this.$data.customer, constraints);
            if(errors){
                this.errors = errors;
                return;
            }
            axios.post('/api/customers', this.$data.customer, {
                headers:{
                    "Authorization": `Bearer ${this.currentUser.token}`
                }
            }).then((response) => {
                    this.$router.push('/customers');
                });
        },
        getConstraints(){
            return {
                last_name: {
                    presence: true,
                    length: {
                        minimum: 3,
                        message: 'Este campo de contener minimo 3 caracteres'
                    }
                },
                first_name: {
                    presence: true,
                    length: {
                        minimum: 3,
                        message: 'Este campo de contener minimo 3 caracteres'
                    }
                },
                email: {
                    presence: true,
                    email: true
                },
                phone: {
                    presence: true,
                    numericality: true,
                    length: {
                        minimum: 7,
                        message: 'Este campo de contener minimo 7 caracteres, y deben ser solo números'
                    }
                },
            };
        },
        getCountries(){
            return this.$store.dispatch('getCountries');
        }
    }
}
</script>
<style>
.errors {
    background: lightcoral;
    border-radius:5px;
    padding: 21px 0 2px 0;
}
</style>