<template>
    <section id="page-content" class="page-wrapper">
        <div class="contact-area pt-115">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">
                            <div class="get-in-toch">
                                <div class="section-title mb-30">
                                    <h3>INVERSIONES</h3>
                                    <h2>& PROYECTOS</h2>
                                </div>
                                <div class="contact-desc mb-50">
                                    <p class="justify"><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Importante</span> INVERSIONES & PROYECTOS con domicilio en la ciudad de Barranquilla-Colombia; como RESPONSABLE DEL TRATAMIENTO DE SUS DATOS PERSONALES, en cumplimiento de la ley le invita a conocer nuestra politica de <b>HABEAS DATA.</b></p>
                                </div>
                                <ul class="contact-address">
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="images/icons/location-2.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span>Inquietudes </span>
                                            <span><button class="btn btn-primary">Quejas y reclamos</button></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <div class="contact-messge">
                                <!-- blog-details-reply -->
                                <div class="leave-review">
                                    <h3>INGRESO AL SISTEMA</h3>
                                <form @submit.prevent="authenticate" id="login-form">
                                    <input type="email" name="email" placeholder="Correo Electronico" v-model="form.email" required autofocus>
                                    <input type="password" name="password" placeholder="Contraseña" v-model="form.password" required>
                                    <button type="submit" class="submit-btn-1">Ingresar</button>
                                </form>
                                <p class="form-messege mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</template>
<script>
import { login } from "../../helpers/auth";
export default {
    name: 'Login',
    data() {
        return {
            form:{
                email: '',
                password: ''
            },
            error: null
        }
    },
    methods:{
        authenticate(){
            this.$store.dispatch('login');
            login(this.$data.form).then((res) => {
                this.$store.commit("loginSuccess", res);
                this.$router.push({path: '/'});
            }).catch((error) => {
                this.$store.commit("loginFailed", {error});
            });
        }
    },
    computed: {
            authError(){
                return this.$store.getters.auth_error;
            }
        }
}
</script>
<style scoped>

</style>
