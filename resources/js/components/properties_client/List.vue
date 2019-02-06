<template>
    <div>
        <item-property v-for="(property, index) in properties" :key="property.id"
                :properties="properties" :property="property" :index="index">
        </item-property>
    </div>
</template>
<script>
import Item from './Item.vue'
export default {
    name: 'list_properties',
    components: {
        'item-property': Item
    },
    props: ['properties']
}
</script>
