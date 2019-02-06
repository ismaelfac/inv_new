<template>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="flat-item">
            <div class="flat-item-image">
                <span v-if="property.for_sale" class="for-sale">Venta</span>
                <span v-if="property.for_rent" class="for-sale">Arriendo</span>
                <span v-if="property.for_transfer" class="for-sale">Arriendo/Venta</span>
                <a href="#!" @click.prevent="details_property"><img src="images/flat/1.jpg" alt=""></a>
                <div class="flat-link">
                    <a href="#!" @click.prevent="details_property">Ver Detalles</a>
                </div>
                <ul class="flat-desc">
                    <li>
                        <img src="images/icons/4.png" alt="">
                        <span>{{ property.area }}</span>
                    </li>
                    <li>
                        <img src="images/icons/5.png" alt="">
                        <span>{{ property.bedrooms }}</span>
                    </li>
                    <li>
                        <img src="images/icons/6.png" alt="">
                        <span>{{ property.bathrooms }}</span>
                    </li>
                    <li>
                        <img src="images/icons/13.png" alt="">
                        <span>{{ property.stratum }}</span>
                    </li>
                </ul>
            </div>
            <div class="flat-item-info">
                <div class="flat-title-price">
                    <h5><a href="#!" @click.prevent="details_property">{{ property.title }} </a></h5>
                    <span v-if="property.for_sale" class="price">{{ property.sale_price_label}}</span>
                    <span v-if="property.for_rent" class="price">{{ property.rent_price_label}}</span>
                    <span v-if="property.for_transfer" class="price">{{ property.rent_price_label}} / {{ property.sale_price_label}}</span>
                </div>
                <p><img src="images/icons/location.png" alt="">{{ property.address }}</p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name:'Item-property',
    props:['property'],
    methods:{
        details_property(){
            this.$router.push('/properties/'+this.property.id_property);
        }
    }
}
</script>