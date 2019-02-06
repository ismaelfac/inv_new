<template>
    <!-- pro-details-short-info -->
    <div class="pro-details-short-info mb-60">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="pro-details-condition">
                    <h5>Condiciones</h5>
                    <div class="pro-details-condition-inner bg-gray">
                        <ul class="condition-list" v-for="(condition) in conditions" :key="condition.id">
                            <li class="col-md-6" v-if="condition.area_total"><img src="/website/images/icons/5.png" alt="">Area Total {{ condition.area_total }}</li>
                            <li class="col-md-6" v-if="condition.built_area"><img src="/website/images/icons/5.png" alt="">Area Contruida {{ condition.built_area }}</li>
                            <li class="col-md-6" v-if="condition.bathroom"><img src="/website/images/icons/5.png" alt="">{{ condition.bathroom }} Cuartos</li>
                            <li class="col-md-6" v-if="condition.bedroom"><img src="/website/images/icons/6.png" alt="">{{ condition.bedroom }} Baños</li>
                            <li class="col-md-6" v-if="condition.garage"><img src="/website/images/icons/13.png" alt="">{{ condition.garage }} Garajes</li>
                            <li class="col-md-6" v-if="condition.kitchen"><img src="/website/images/icons/14.png" alt="">{{ condition.kitchen }} Cocina</li>
                            <li class="col-md-6" v-if="condition.floor"><img src="/website/images/icons/14.png" alt="">{{ condition.floor }} Piso</li>
                            <li class="col-md-6" v-if="condition.stratum"><img src="/website/images/icons/14.png" alt="">{{ condition.stratum }} Estrato</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="pro-details-amenities">
                    <h5>Comodidades</h5>
                    <div class="pro-details-amenities-inner bg-gray">
                        <ul class="amenities-list" v-for="(amenitie) in amenities" :key="amenitie.id">
                            <li class="col-md-6" v-if="amenitie.air_condition">Aire Acondicionado {{ amenitie.air_condition}}</li>
                            <li class="col-md-6" v-if="amenitie.balcony">Balcon</li>
                            <li class="col-md-6" v-if="amenitie.cable">Cable TV</li>
                            <li class="col-md-6" v-if="amenitie.internet">Internet</li>
                            <li class="col-md-6" v-if="amenitie.parking">Parqueadero</li>
                            <li class="col-md-6" v-if="amenitie.lift">Ascensor</li>
                            <li class="col-md-6" v-if="amenitie.pool">Piscina</li>
                            <li class="col-md-6" v-if="amenitie.dishwasher">Lavavajillas</li>
                            <li class="col-md-6" v-if="amenitie.air_condition">Toaster</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name:'characteristics',
    props: ['conditions', 'amenities'],
}
</script>