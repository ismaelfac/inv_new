<template>
    <div>
        <template>
           <list-properties :properties="properties"></list-properties>
        </template>
    </div>
</template>
<script>
import List_properties from './List.vue'
export default {
    name: 'properties',
    components: {
        'list-properties': List_properties
    },
    data() {
        return {
            properties: [
            {
                "id_property": 906433,
                "id_company": 2426798,
                "id_user": "24392",
                "for_sale": true,
                "for_rent": false,
                "for_transfer": false,
                "id_property_type": "1",
                "id_country": "1",
                "country_label": "Colombia",
                "id_region": "4",
                "region_label": "Atlántico",
                "id_city": "82",
                "city_label": "Barranquilla",
                "id_location": 0,
                "location_label": "",
                "id_zone": "96589",
                "zone_label": "Prado",
                "id_currency": "1",
                "iso_currency": "COP",
                "name_currency": "Pesos Colombianos",
                "title": "CASA COMERCIAL ESQUINA",
                "address": "Carrera 55 #74-02, barrio El Prado",
                "area": "487",
                "id_unit_area": "1",
                "unit_area_label": "M2",
                "built_area": "270",
                "id_unit_built_area": "1",
                "unit_built_area_label": "M2",
                "private_area": "270",
                "id_unit_private_area": "1",
                "unit_private_area_label": "M2",
                "maintenance_fee": "0",
                "sale_price": "0",
                "sale_price_label": "$0",
                "rent_price": "8000000",
                "rent_price_label": "$8.000.000",
                "bedrooms": "5",
                "bathrooms": "5",
                "garages": "1",
                "floor": "",
                "stratum": "5",
                "observations": "<p>Excelente casa comercial de esquina, ubicada en el sector corporativo y financiero de mayor proyecci&oacute;n en la ciudad de Baranquilla.&nbsp; La casa tiene uso comercial autorizado&nbsp; actividades de comercializacion de bienes y servicios, cuenta con 9 parqueaderos propios para visitantes.&nbsp; La negociaci&oacute;n es directa con el propietario.</p>\n",
                "video": "",
                "id_property_condition": "2",
                "property_condition_label": "Used",
                "id_status_on_page": "1",
                "status_on_page_label": "Active",
                "map": "11.000807166615152,-74.80189561843873",
                "latitude": "11.000807166615152",
                "longitude": "-74.80189561843873",
                "building_date": "",
                "network_share": true,
                "visits": "6",
                "created_at": "2018-10-29 12:34:58",
                "updated_at": "2018-11-13 16:42:42",
                "reference": "",
                "comment": "",
                "id_rents_type": "4",
                "rents_type_label": "Monthly",
                "zip_code": "",
                "id_availability": "1",
                "availability_label": "Available",
                "id_publish_on_map": "3",
                "publish_on_map_label": "Post exact point",
                "label": "",
                "label_color": "",
                "owner": "own",
                "main_image": {
                    "id_gallery": "730529",
                    "id_image": 29558978,
                    "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                    "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                    "description": "",
                    "position": "1"
                },
                "galleries": [
                    {
                        "0": {
                            "id": 29558978,
                            "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                            "description": "",
                            "position": "1"
                        },
                        "1": {
                            "id": 29558979,
                            "url": "https://images.wasi.co/inmuebles/b15905220181029122955.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905220181029122955.jpg",
                            "description": "",
                            "position": "2"
                        },
                        "2": {
                            "id": 29558980,
                            "url": "https://images.wasi.co/inmuebles/b15905320181029122958.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905320181029122958.jpg",
                            "description": "",
                            "position": "3"
                        },
                        "3": {
                            "id": 29558981,
                            "url": "https://images.wasi.co/inmuebles/b15905420181029123000.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905420181029123000.jpg",
                            "description": "",
                            "position": "4"
                        },
                        "4": {
                            "id": 29558982,
                            "url": "https://images.wasi.co/inmuebles/b15905520181029123003.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905520181029123003.jpg",
                            "description": "",
                            "position": "5"
                        },
                        "5": {
                            "id": 29558983,
                            "url": "https://images.wasi.co/inmuebles/b15905620181029123005.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905620181029123005.jpg",
                            "description": "",
                            "position": "6"
                        },
                        "6": {
                            "id": 29558984,
                            "url": "https://images.wasi.co/inmuebles/b15905720181029123007.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905720181029123007.jpg",
                            "description": "",
                            "position": "7"
                        },
                        "7": {
                            "id": 29558985,
                            "url": "https://images.wasi.co/inmuebles/b15905820181029123010.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905820181029123010.jpg",
                            "description": "",
                            "position": "8"
                        },
                        "8": {
                            "id": 29558986,
                            "url": "https://images.wasi.co/inmuebles/b15905920181029123013.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905920181029123013.jpg",
                            "description": "",
                            "position": "9"
                        },
                        "id": 730529
                    }
                ],
                "features": {
                    "internal": [],
                    "external": [
                        {
                            "id": 40,
                            "nombre": "Terraza",
                            "name": ""
                        },
                        {
                            "id": 67,
                            "nombre": "Zona comercial",
                            "name": ""
                        }
                    ]
                }
            },
            {
                "id_property": 906433,
                "id_company": 2426798,
                "id_user": "24392",
                "for_sale": false,
                "for_rent": true,
                "for_transfer": false,
                "id_property_type": "1",
                "id_country": "1",
                "country_label": "Colombia",
                "id_region": "4",
                "region_label": "Atlántico",
                "id_city": "82",
                "city_label": "Barranquilla",
                "id_location": 0,
                "location_label": "",
                "id_zone": "96589",
                "zone_label": "Prado",
                "id_currency": "1",
                "iso_currency": "COP",
                "name_currency": "Pesos Colombianos",
                "title": "CASA COMERCIAL ESQUINA",
                "address": "Carrera 55 #74-02, barrio El Prado",
                "area": "487",
                "id_unit_area": "1",
                "unit_area_label": "M2",
                "built_area": "270",
                "id_unit_built_area": "1",
                "unit_built_area_label": "M2",
                "private_area": "270",
                "id_unit_private_area": "1",
                "unit_private_area_label": "M2",
                "maintenance_fee": "0",
                "sale_price": "0",
                "sale_price_label": "$0",
                "rent_price": "8000000",
                "rent_price_label": "$8.000.000",
                "bedrooms": "5",
                "bathrooms": "5",
                "garages": "1",
                "floor": "",
                "stratum": "5",
                "observations": "<p>Excelente casa comercial de esquina, ubicada en el sector corporativo y financiero de mayor proyecci&oacute;n en la ciudad de Baranquilla.&nbsp; La casa tiene uso comercial autorizado&nbsp; actividades de comercializacion de bienes y servicios, cuenta con 9 parqueaderos propios para visitantes.&nbsp; La negociaci&oacute;n es directa con el propietario.</p>\n",
                "video": "",
                "id_property_condition": "2",
                "property_condition_label": "Used",
                "id_status_on_page": "1",
                "status_on_page_label": "Active",
                "map": "11.000807166615152,-74.80189561843873",
                "latitude": "11.000807166615152",
                "longitude": "-74.80189561843873",
                "building_date": "",
                "network_share": true,
                "visits": "6",
                "created_at": "2018-10-29 12:34:58",
                "updated_at": "2018-11-13 16:42:42",
                "reference": "",
                "comment": "",
                "id_rents_type": "4",
                "rents_type_label": "Monthly",
                "zip_code": "",
                "id_availability": "1",
                "availability_label": "Available",
                "id_publish_on_map": "3",
                "publish_on_map_label": "Post exact point",
                "label": "",
                "label_color": "",
                "owner": "own",
                "main_image": {
                    "id_gallery": "730529",
                    "id_image": 29558978,
                    "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                    "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                    "description": "",
                    "position": "1"
                },
                "galleries": [
                    {
                        "0": {
                            "id": 29558978,
                            "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                            "description": "",
                            "position": "1"
                        },
                        "1": {
                            "id": 29558979,
                            "url": "https://images.wasi.co/inmuebles/b15905220181029122955.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905220181029122955.jpg",
                            "description": "",
                            "position": "2"
                        },
                        "2": {
                            "id": 29558980,
                            "url": "https://images.wasi.co/inmuebles/b15905320181029122958.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905320181029122958.jpg",
                            "description": "",
                            "position": "3"
                        },
                        "3": {
                            "id": 29558981,
                            "url": "https://images.wasi.co/inmuebles/b15905420181029123000.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905420181029123000.jpg",
                            "description": "",
                            "position": "4"
                        },
                        "4": {
                            "id": 29558982,
                            "url": "https://images.wasi.co/inmuebles/b15905520181029123003.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905520181029123003.jpg",
                            "description": "",
                            "position": "5"
                        },
                        "5": {
                            "id": 29558983,
                            "url": "https://images.wasi.co/inmuebles/b15905620181029123005.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905620181029123005.jpg",
                            "description": "",
                            "position": "6"
                        },
                        "6": {
                            "id": 29558984,
                            "url": "https://images.wasi.co/inmuebles/b15905720181029123007.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905720181029123007.jpg",
                            "description": "",
                            "position": "7"
                        },
                        "7": {
                            "id": 29558985,
                            "url": "https://images.wasi.co/inmuebles/b15905820181029123010.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905820181029123010.jpg",
                            "description": "",
                            "position": "8"
                        },
                        "8": {
                            "id": 29558986,
                            "url": "https://images.wasi.co/inmuebles/b15905920181029123013.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905920181029123013.jpg",
                            "description": "",
                            "position": "9"
                        },
                        "id": 730529
                    }
                ],
                "features": {
                    "internal": [],
                    "external": [
                        {
                            "id": 40,
                            "nombre": "Terraza",
                            "name": ""
                        },
                        {
                            "id": 67,
                            "nombre": "Zona comercial",
                            "name": ""
                        }
                    ]
                }
            },
             {
                "id_property": 906433,
                "id_company": 2426798,
                "id_user": "24392",
                "for_sale": false,
                "for_rent": true,
                "for_transfer": false,
                "id_property_type": "1",
                "id_country": "1",
                "country_label": "Colombia",
                "id_region": "4",
                "region_label": "Atlántico",
                "id_city": "82",
                "city_label": "Barranquilla",
                "id_location": 0,
                "location_label": "",
                "id_zone": "96589",
                "zone_label": "Prado",
                "id_currency": "1",
                "iso_currency": "COP",
                "name_currency": "Pesos Colombianos",
                "title": "CASA COMERCIAL ESQUINA",
                "address": "Carrera 55 #74-02, barrio El Prado",
                "area": "487",
                "id_unit_area": "1",
                "unit_area_label": "M2",
                "built_area": "270",
                "id_unit_built_area": "1",
                "unit_built_area_label": "M2",
                "private_area": "270",
                "id_unit_private_area": "1",
                "unit_private_area_label": "M2",
                "maintenance_fee": "0",
                "sale_price": "0",
                "sale_price_label": "$0",
                "rent_price": "8000000",
                "rent_price_label": "$8.000.000",
                "bedrooms": "5",
                "bathrooms": "5",
                "garages": "1",
                "floor": "",
                "stratum": "5",
                "observations": "<p>Excelente casa comercial de esquina, ubicada en el sector corporativo y financiero de mayor proyecci&oacute;n en la ciudad de Baranquilla.&nbsp; La casa tiene uso comercial autorizado&nbsp; actividades de comercializacion de bienes y servicios, cuenta con 9 parqueaderos propios para visitantes.&nbsp; La negociaci&oacute;n es directa con el propietario.</p>\n",
                "video": "",
                "id_property_condition": "2",
                "property_condition_label": "Used",
                "id_status_on_page": "1",
                "status_on_page_label": "Active",
                "map": "11.000807166615152,-74.80189561843873",
                "latitude": "11.000807166615152",
                "longitude": "-74.80189561843873",
                "building_date": "",
                "network_share": true,
                "visits": "6",
                "created_at": "2018-10-29 12:34:58",
                "updated_at": "2018-11-13 16:42:42",
                "reference": "",
                "comment": "",
                "id_rents_type": "4",
                "rents_type_label": "Monthly",
                "zip_code": "",
                "id_availability": "1",
                "availability_label": "Available",
                "id_publish_on_map": "3",
                "publish_on_map_label": "Post exact point",
                "label": "",
                "label_color": "",
                "owner": "own",
                "main_image": {
                    "id_gallery": "730529",
                    "id_image": 29558978,
                    "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                    "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                    "description": "",
                    "position": "1"
                },
                "galleries": [
                    {
                        "0": {
                            "id": 29558978,
                            "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                            "description": "",
                            "position": "1"
                        },
                        "1": {
                            "id": 29558979,
                            "url": "https://images.wasi.co/inmuebles/b15905220181029122955.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905220181029122955.jpg",
                            "description": "",
                            "position": "2"
                        },
                        "2": {
                            "id": 29558980,
                            "url": "https://images.wasi.co/inmuebles/b15905320181029122958.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905320181029122958.jpg",
                            "description": "",
                            "position": "3"
                        },
                        "3": {
                            "id": 29558981,
                            "url": "https://images.wasi.co/inmuebles/b15905420181029123000.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905420181029123000.jpg",
                            "description": "",
                            "position": "4"
                        },
                        "4": {
                            "id": 29558982,
                            "url": "https://images.wasi.co/inmuebles/b15905520181029123003.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905520181029123003.jpg",
                            "description": "",
                            "position": "5"
                        },
                        "5": {
                            "id": 29558983,
                            "url": "https://images.wasi.co/inmuebles/b15905620181029123005.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905620181029123005.jpg",
                            "description": "",
                            "position": "6"
                        },
                        "6": {
                            "id": 29558984,
                            "url": "https://images.wasi.co/inmuebles/b15905720181029123007.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905720181029123007.jpg",
                            "description": "",
                            "position": "7"
                        },
                        "7": {
                            "id": 29558985,
                            "url": "https://images.wasi.co/inmuebles/b15905820181029123010.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905820181029123010.jpg",
                            "description": "",
                            "position": "8"
                        },
                        "8": {
                            "id": 29558986,
                            "url": "https://images.wasi.co/inmuebles/b15905920181029123013.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905920181029123013.jpg",
                            "description": "",
                            "position": "9"
                        },
                        "id": 730529
                    }
                ],
                "features": {
                    "internal": [],
                    "external": [
                        {
                            "id": 40,
                            "nombre": "Terraza",
                            "name": ""
                        },
                        {
                            "id": 67,
                            "nombre": "Zona comercial",
                            "name": ""
                        }
                    ]
                }
            },
             {
                "id_property": 906433,
                "id_company": 2426798,
                "id_user": "24392",
                "for_sale": false,
                "for_rent": true,
                "for_transfer": false,
                "id_property_type": "1",
                "id_country": "1",
                "country_label": "Colombia",
                "id_region": "4",
                "region_label": "Atlántico",
                "id_city": "82",
                "city_label": "Barranquilla",
                "id_location": 0,
                "location_label": "",
                "id_zone": "96589",
                "zone_label": "Prado",
                "id_currency": "1",
                "iso_currency": "COP",
                "name_currency": "Pesos Colombianos",
                "title": "CASA COMERCIAL ESQUINA",
                "address": "Carrera 55 #74-02, barrio El Prado",
                "area": "487",
                "id_unit_area": "1",
                "unit_area_label": "M2",
                "built_area": "270",
                "id_unit_built_area": "1",
                "unit_built_area_label": "M2",
                "private_area": "270",
                "id_unit_private_area": "1",
                "unit_private_area_label": "M2",
                "maintenance_fee": "0",
                "sale_price": "0",
                "sale_price_label": "$0",
                "rent_price": "8000000",
                "rent_price_label": "$8.000.000",
                "bedrooms": "5",
                "bathrooms": "5",
                "garages": "1",
                "floor": "",
                "stratum": "5",
                "observations": "<p>Excelente casa comercial de esquina, ubicada en el sector corporativo y financiero de mayor proyecci&oacute;n en la ciudad de Baranquilla.&nbsp; La casa tiene uso comercial autorizado&nbsp; actividades de comercializacion de bienes y servicios, cuenta con 9 parqueaderos propios para visitantes.&nbsp; La negociaci&oacute;n es directa con el propietario.</p>\n",
                "video": "",
                "id_property_condition": "2",
                "property_condition_label": "Used",
                "id_status_on_page": "1",
                "status_on_page_label": "Active",
                "map": "11.000807166615152,-74.80189561843873",
                "latitude": "11.000807166615152",
                "longitude": "-74.80189561843873",
                "building_date": "",
                "network_share": true,
                "visits": "6",
                "created_at": "2018-10-29 12:34:58",
                "updated_at": "2018-11-13 16:42:42",
                "reference": "",
                "comment": "",
                "id_rents_type": "4",
                "rents_type_label": "Monthly",
                "zip_code": "",
                "id_availability": "1",
                "availability_label": "Available",
                "id_publish_on_map": "3",
                "publish_on_map_label": "Post exact point",
                "label": "",
                "label_color": "",
                "owner": "own",
                "main_image": {
                    "id_gallery": "730529",
                    "id_image": 29558978,
                    "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                    "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                    "description": "",
                    "position": "1"
                },
                "galleries": [
                    {
                        "0": {
                            "id": 29558978,
                            "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                            "description": "",
                            "position": "1"
                        },
                        "1": {
                            "id": 29558979,
                            "url": "https://images.wasi.co/inmuebles/b15905220181029122955.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905220181029122955.jpg",
                            "description": "",
                            "position": "2"
                        },
                        "2": {
                            "id": 29558980,
                            "url": "https://images.wasi.co/inmuebles/b15905320181029122958.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905320181029122958.jpg",
                            "description": "",
                            "position": "3"
                        },
                        "3": {
                            "id": 29558981,
                            "url": "https://images.wasi.co/inmuebles/b15905420181029123000.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905420181029123000.jpg",
                            "description": "",
                            "position": "4"
                        },
                        "4": {
                            "id": 29558982,
                            "url": "https://images.wasi.co/inmuebles/b15905520181029123003.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905520181029123003.jpg",
                            "description": "",
                            "position": "5"
                        },
                        "5": {
                            "id": 29558983,
                            "url": "https://images.wasi.co/inmuebles/b15905620181029123005.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905620181029123005.jpg",
                            "description": "",
                            "position": "6"
                        },
                        "6": {
                            "id": 29558984,
                            "url": "https://images.wasi.co/inmuebles/b15905720181029123007.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905720181029123007.jpg",
                            "description": "",
                            "position": "7"
                        },
                        "7": {
                            "id": 29558985,
                            "url": "https://images.wasi.co/inmuebles/b15905820181029123010.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905820181029123010.jpg",
                            "description": "",
                            "position": "8"
                        },
                        "8": {
                            "id": 29558986,
                            "url": "https://images.wasi.co/inmuebles/b15905920181029123013.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905920181029123013.jpg",
                            "description": "",
                            "position": "9"
                        },
                        "id": 730529
                    }
                ],
                "features": {
                    "internal": [],
                    "external": [
                        {
                            "id": 40,
                            "nombre": "Terraza",
                            "name": ""
                        },
                        {
                            "id": 67,
                            "nombre": "Zona comercial",
                            "name": ""
                        }
                    ]
                }
            },
             {
                "id_property": 906433,
                "id_company": 2426798,
                "id_user": "24392",
                "for_sale": true,
                "for_rent": true,
                "for_transfer": false,
                "id_property_type": "1",
                "id_country": "1",
                "country_label": "Colombia",
                "id_region": "4",
                "region_label": "Atlántico",
                "id_city": "82",
                "city_label": "Barranquilla",
                "id_location": 0,
                "location_label": "",
                "id_zone": "96589",
                "zone_label": "Prado",
                "id_currency": "1",
                "iso_currency": "COP",
                "name_currency": "Pesos Colombianos",
                "title": "CASA COMERCIAL ESQUINA",
                "address": "Carrera 55 #74-02, barrio El Prado",
                "area": "487",
                "id_unit_area": "1",
                "unit_area_label": "M2",
                "built_area": "270",
                "id_unit_built_area": "1",
                "unit_built_area_label": "M2",
                "private_area": "270",
                "id_unit_private_area": "1",
                "unit_private_area_label": "M2",
                "maintenance_fee": "0",
                "sale_price": "0",
                "sale_price_label": "$0",
                "rent_price": "8000000",
                "rent_price_label": "$8.000.000",
                "bedrooms": "5",
                "bathrooms": "5",
                "garages": "1",
                "floor": "",
                "stratum": "5",
                "observations": "<p>Excelente casa comercial de esquina, ubicada en el sector corporativo y financiero de mayor proyecci&oacute;n en la ciudad de Baranquilla.&nbsp; La casa tiene uso comercial autorizado&nbsp; actividades de comercializacion de bienes y servicios, cuenta con 9 parqueaderos propios para visitantes.&nbsp; La negociaci&oacute;n es directa con el propietario.</p>\n",
                "video": "",
                "id_property_condition": "2",
                "property_condition_label": "Used",
                "id_status_on_page": "1",
                "status_on_page_label": "Active",
                "map": "11.000807166615152,-74.80189561843873",
                "latitude": "11.000807166615152",
                "longitude": "-74.80189561843873",
                "building_date": "",
                "network_share": true,
                "visits": "6",
                "created_at": "2018-10-29 12:34:58",
                "updated_at": "2018-11-13 16:42:42",
                "reference": "",
                "comment": "",
                "id_rents_type": "4",
                "rents_type_label": "Monthly",
                "zip_code": "",
                "id_availability": "1",
                "availability_label": "Available",
                "id_publish_on_map": "3",
                "publish_on_map_label": "Post exact point",
                "label": "",
                "label_color": "",
                "owner": "own",
                "main_image": {
                    "id_gallery": "730529",
                    "id_image": 29558978,
                    "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                    "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                    "description": "",
                    "position": "1"
                },
                "galleries": [
                    {
                        "0": {
                            "id": 29558978,
                            "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                            "description": "",
                            "position": "1"
                        },
                        "1": {
                            "id": 29558979,
                            "url": "https://images.wasi.co/inmuebles/b15905220181029122955.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905220181029122955.jpg",
                            "description": "",
                            "position": "2"
                        },
                        "2": {
                            "id": 29558980,
                            "url": "https://images.wasi.co/inmuebles/b15905320181029122958.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905320181029122958.jpg",
                            "description": "",
                            "position": "3"
                        },
                        "3": {
                            "id": 29558981,
                            "url": "https://images.wasi.co/inmuebles/b15905420181029123000.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905420181029123000.jpg",
                            "description": "",
                            "position": "4"
                        },
                        "4": {
                            "id": 29558982,
                            "url": "https://images.wasi.co/inmuebles/b15905520181029123003.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905520181029123003.jpg",
                            "description": "",
                            "position": "5"
                        },
                        "5": {
                            "id": 29558983,
                            "url": "https://images.wasi.co/inmuebles/b15905620181029123005.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905620181029123005.jpg",
                            "description": "",
                            "position": "6"
                        },
                        "6": {
                            "id": 29558984,
                            "url": "https://images.wasi.co/inmuebles/b15905720181029123007.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905720181029123007.jpg",
                            "description": "",
                            "position": "7"
                        },
                        "7": {
                            "id": 29558985,
                            "url": "https://images.wasi.co/inmuebles/b15905820181029123010.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905820181029123010.jpg",
                            "description": "",
                            "position": "8"
                        },
                        "8": {
                            "id": 29558986,
                            "url": "https://images.wasi.co/inmuebles/b15905920181029123013.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905920181029123013.jpg",
                            "description": "",
                            "position": "9"
                        },
                        "id": 730529
                    }
                ],
                "features": {
                    "internal": [],
                    "external": [
                        {
                            "id": 40,
                            "nombre": "Terraza",
                            "name": ""
                        },
                        {
                            "id": 67,
                            "nombre": "Zona comercial",
                            "name": ""
                        }
                    ]
                }
            },
             {
                "id_property": 906433,
                "id_company": 2426798,
                "id_user": "24392",
                "for_sale": false,
                "for_rent": false,
                "for_transfer": true,
                "id_property_type": "1",
                "id_country": "1",
                "country_label": "Colombia",
                "id_region": "4",
                "region_label": "Atlántico",
                "id_city": "82",
                "city_label": "Barranquilla",
                "id_location": 0,
                "location_label": "",
                "id_zone": "96589",
                "zone_label": "Prado",
                "id_currency": "1",
                "iso_currency": "COP",
                "name_currency": "Pesos Colombianos",
                "title": "CASA COMERCIAL ESQUINA",
                "address": "Carrera 55 #74-02, barrio El Prado",
                "area": "487",
                "id_unit_area": "1",
                "unit_area_label": "M2",
                "built_area": "270",
                "id_unit_built_area": "1",
                "unit_built_area_label": "M2",
                "private_area": "270",
                "id_unit_private_area": "1",
                "unit_private_area_label": "M2",
                "maintenance_fee": "0",
                "sale_price": "0",
                "sale_price_label": "$0",
                "rent_price": "8000000",
                "rent_price_label": "$8.000.000",
                "bedrooms": "5",
                "bathrooms": "5",
                "garages": "1",
                "floor": "",
                "stratum": "5",
                "observations": "<p>Excelente casa comercial de esquina, ubicada en el sector corporativo y financiero de mayor proyecci&oacute;n en la ciudad de Baranquilla.&nbsp; La casa tiene uso comercial autorizado&nbsp; actividades de comercializacion de bienes y servicios, cuenta con 9 parqueaderos propios para visitantes.&nbsp; La negociaci&oacute;n es directa con el propietario.</p>\n",
                "video": "",
                "id_property_condition": "2",
                "property_condition_label": "Used",
                "id_status_on_page": "1",
                "status_on_page_label": "Active",
                "map": "11.000807166615152,-74.80189561843873",
                "latitude": "11.000807166615152",
                "longitude": "-74.80189561843873",
                "building_date": "",
                "network_share": true,
                "visits": "6",
                "created_at": "2018-10-29 12:34:58",
                "updated_at": "2018-11-13 16:42:42",
                "reference": "",
                "comment": "",
                "id_rents_type": "4",
                "rents_type_label": "Monthly",
                "zip_code": "",
                "id_availability": "1",
                "availability_label": "Available",
                "id_publish_on_map": "3",
                "publish_on_map_label": "Post exact point",
                "label": "",
                "label_color": "",
                "owner": "own",
                "main_image": {
                    "id_gallery": "730529",
                    "id_image": 29558978,
                    "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                    "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                    "description": "",
                    "position": "1"
                },
                "galleries": [
                    {
                        "0": {
                            "id": 29558978,
                            "url": "https://images.wasi.co/inmuebles/b15905120181029122950.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905120181029122950.jpg",
                            "description": "",
                            "position": "1"
                        },
                        "1": {
                            "id": 29558979,
                            "url": "https://images.wasi.co/inmuebles/b15905220181029122955.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905220181029122955.jpg",
                            "description": "",
                            "position": "2"
                        },
                        "2": {
                            "id": 29558980,
                            "url": "https://images.wasi.co/inmuebles/b15905320181029122958.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905320181029122958.jpg",
                            "description": "",
                            "position": "3"
                        },
                        "3": {
                            "id": 29558981,
                            "url": "https://images.wasi.co/inmuebles/b15905420181029123000.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905420181029123000.jpg",
                            "description": "",
                            "position": "4"
                        },
                        "4": {
                            "id": 29558982,
                            "url": "https://images.wasi.co/inmuebles/b15905520181029123003.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905520181029123003.jpg",
                            "description": "",
                            "position": "5"
                        },
                        "5": {
                            "id": 29558983,
                            "url": "https://images.wasi.co/inmuebles/b15905620181029123005.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905620181029123005.jpg",
                            "description": "",
                            "position": "6"
                        },
                        "6": {
                            "id": 29558984,
                            "url": "https://images.wasi.co/inmuebles/b15905720181029123007.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905720181029123007.jpg",
                            "description": "",
                            "position": "7"
                        },
                        "7": {
                            "id": 29558985,
                            "url": "https://images.wasi.co/inmuebles/b15905820181029123010.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905820181029123010.jpg",
                            "description": "",
                            "position": "8"
                        },
                        "8": {
                            "id": 29558986,
                            "url": "https://images.wasi.co/inmuebles/b15905920181029123013.jpg",
                            "url_big": "https://images.wasi.co/inmuebles/g15905920181029123013.jpg",
                            "description": "",
                            "position": "9"
                        },
                        "id": 730529
                    }
                ],
                "features": {
                    "internal": [],
                    "external": [
                        {
                            "id": 40,
                            "nombre": "Terraza",
                            "name": ""
                        },
                        {
                            "id": 67,
                            "nombre": "Zona comercial",
                            "name": ""
                        }
                    ]
                }
            }
            ]
        }
    },
    
}
</script>
