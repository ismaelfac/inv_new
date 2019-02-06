<template>
    <!-- pro-details-short-info -->
    <div class="pro-details-short-info mt-30 mb-60">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="pro-details-condition">
                    <h5>Condiciones de la propiedad</h5>
                    <div class="pro-details-condition-inner bg-gray">
                        <ul class="condition-list">
                            <li class="col-md-6" v-if="conditions.area_total"><img src="/website/images/icons/4.png" alt="">Area Total {{ conditions.area_total }}</li>
                            <li class="col-md-6" v-if="conditions.built_area"><img src="/website/images/icons/4.png" alt="">Area Contruida {{ conditions.built_area }}</li>
                            <li class="col-md-6" v-if="conditions.bathroom"><img src="/website/images/icons/5.png" alt="">{{ conditions.bathroom }} Cuartos</li>
                            <li class="col-md-6" v-if="conditions.bedroom"><img src="/website/images/icons/6.png" alt="">{{ conditions.bedroom }} Baños</li>
                            <li class="col-md-6" v-if="conditions.garage"><img src="/website/images/icons/13.png" alt="">{{ conditions.garage }} Garajes</li>
                            <li class="col-md-6" v-if="conditions.kitchen"><img src="/website/images/icons/14.png" alt="">{{ conditions.kitchen }} Cocina</li>
                            <li class="col-md-6" v-if="conditions.floor"><img src="/website/images/icons/12.png" alt="">{{ conditions.floor }} Piso</li>
                            <li class="col-md-6" v-if="conditions.stratum"><img src="/website/images/icons/7.png" alt="">Estrato {{ conditions.stratum }}</li>
                            <li class="col-md-6" v-if="conditions.antiquity"><img src="/website/images/icons/8.png" alt="">Antiguedad {{ conditions.antiquity }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="pro-details-amenities">
                    <h5>Comodidades</h5>
                    <div class="pro-details-amenities-inner bg-gray">
                        <ul class="amenities-list">
                            <li class="col-md-6" v-if="amenities.air_condition">Aire Acondicionado</li>
                            <li class="col-md-6" v-if="amenities.balcony">Balcon</li>
                            <li class="col-md-6" v-if="amenities.cable">Cable TV</li>
                            <li class="col-md-6" v-if="amenities.internet">Internet</li>
                            <li class="col-md-6" v-if="amenities.parking">Parqueadero</li>
                            <li class="col-md-6" v-if="amenities.lift">Ascensor</li>
                            <li class="col-md-6" v-if="amenities.pool">Piscina</li>
                            <li class="col-md-6" v-if="amenities.dishwasher">Lavavajillas</li>
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
    props: ['conditions', 'amenities','current_user']
}
</script>