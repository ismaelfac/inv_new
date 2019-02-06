<template>
    <!-- PROPERTIES DETAILS AREA START -->
        <div class="properties-details-area pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- pro-details-image -->
                        <div class="pro-details-image mb-60">
                            <div class="pro-details-big-image">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="pro-1">
                                        <a href="/website/images/single-property/big/1.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 1">
                                            <img src="/website/images/single-property/big/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="pro-2">
                                        <a href="/website/images/single-property/big/2.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 2">
                                            <img src="/website/images/single-property/big/2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="pro-3">
                                        <a href="/website/images/single-property/big/3.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 3">
                                            <img src="/website/images/single-property/big/3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="pro-4">
                                        <a href="/website/images/single-property/big/1.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 4">
                                            <img src="/website/images/single-property/big/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="pro-5">
                                        <a href="/website/images/single-property/big/2.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 5">
                                            <img src="/website/images/single-property/big/2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-carousel">
                                <div class="pro-details-item">
                                    <a href="#pro-1" data-toggle="tab"><img src="/website/images/single-property/small/1.jpg" alt=""></a>
                                </div>
                                <div class="pro-details-item">
                                    <a href="#pro-2" data-toggle="tab">
                                        <img src="/website/images/single-property/small/2.jpg" alt="">                
                                    </a>
                                </div>
                                <div class="pro-details-item">
                                    <a href="#pro-3" data-toggle="tab">
                                        <img src="/website/images/single-property/small/3.jpg" alt="">                
                                    </a>
                                </div>
                                <div class="pro-details-item">
                                    <a href="#pro-4" data-toggle="tab">
                                        <img src="/website/images/single-property/small/4.jpg" alt="">                
                                    </a>
                                </div>
                                <div class="pro-details-item">
                                    <a href="#pro-5" data-toggle="tab">
                                        <img src="/website/images/single-property/small/1.jpg" alt="">                
                                    </a>
                                </div>
                            </div>                           
                        </div>
                         <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#characteristics" aria-controls="characteristics" role="tab" data-toggle="tab">Caracteristicas</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Comentarios</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="characteristics">
                                <div class="container">
                                    <characteristics :conditions="conditions" :amenities="amenities"></characteristics>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="container">
                                    <comments></comments>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">3</div>
                            <div role="tabpanel" class="tab-pane" id="settings">4</div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <!-- widget-search-property -->
                        <aside class="widget widget-search-property">
                            <h5>Detalles de la Propiedad {{ id }}</h5>
                            <div class="row">
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item custom-select">                  
                                        <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true">
                                            <optgroup disabled="disabled" label="disabled">
                                                <option>Hidden</option>
                                            </optgroup>
                                            <optgroup label="Australia">
                                                <option>Sydney</option>
                                                <option>Melbourne</option>
                                                <option>Cairns</option>
                                            </optgroup>
                                            <optgroup label="USA">
                                                <option>South Carolina</option>
                                                <option>Florida</option>
                                                <option>Rhode Island</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item custom-select">                  
                                        <select class="selectpicker" title="Sub - Location" data-hide-disabled="true" data-live-search="true">
                                            <optgroup disabled="disabled" label="disabled">
                                                <option>Hidden</option>
                                            </optgroup>
                                            <optgroup label="Australia">
                                                <option>southeastern coast</option>
                                                <option>southeastern tip</option>
                                                <option>northwest corner</option>
                                            </optgroup>
                                            <optgroup label="USA">
                                                <option>Charleston</option>
                                                <option>St. Petersburg</option>
                                                <option>Newport</option>
                                            </optgroup>
                                        </select>
                                    </div> 
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item">
                                        <input type="text" name="min-area" placeholder="Min area (sqft)">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item">
                                        <input type="text" name="max-area" placeholder="Max area (sqft)">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item  custom-select">                  
                                        <select class="selectpicker" title="No. of Beadrooms" data-hide-disabled="true">
                                            <optgroup  label="1">
                                                <option label="1">1 Beadrooms</option>
                                                <option>2 Beadrooms</option>
                                                <option>3 Beadrooms</option>
                                                <option>4 Beadrooms</option>
                                                <option>5 Beadrooms</option>
                                            </optgroup>
                                        </select>
                                    </div> 
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item custom-select">                  
                                        <select class="selectpicker" title="No. of Bathrooms" data-hide-disabled="true">
                                            <optgroup label="2">
                                                <option>1 Bathrooms</option>
                                                <option>2 Bathrooms</option>
                                                <option>3 Bathrooms</option>
                                                <option>4 Bathrooms</option>
                                                <option>5 Bathrooms</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-7 col-xs-12">
                                            <div class="find-home-item">
                                                <!-- shop-filter -->
                                                <div class="shop-filter">
                                                    <div class="price_filter">
                                                        <div class="price_slider_amount">
                                                            <input type="submit"  value="You range :"/> 
                                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
                                                        </div>
                                                        <div id="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-5 col-xs-12">
                                            <div class="find-home-item">
                                                <a class="button-1 btn-block btn-hover-1" href="#">SEARCH</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- widget-featured-property -->
                        <aside class="widget widget-featured-property">
                            <h5>Featured Property</h5>
                            <div class="row">
                                <!-- flat-item -->
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <div class="flat-item">
                                        <div class="flat-item-image">
                                            <span class="for-sale">For Sale</span>
                                            <a href="#"><img src="/website/images/flat/1.jpg" alt=""></a>
                                            <div class="flat-link">
                                                <a href="#">More Details</a>
                                            </div>
                                            <ul class="flat-desc">
                                                <li>
                                                    <img src="/website/images/icons/4.png" alt="">
                                                    <span>450 sqft</span>
                                                </li>
                                                <li>
                                                    <img src="/website/images/icons/5.png" alt="">
                                                    <span>5</span>
                                                </li>
                                                <li>
                                                    <img src="/website/images/icons/6.png" alt="">
                                                    <span>3</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flat-item-info">
                                            <div class="flat-title-price">
                                                <h5><a href="#">Masons de Villa </a></h5>
                                                <span class="price">$52,350</span>
                                            </div>
                                            <p><img src="/website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- flat-item -->
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <div class="flat-item">
                                        <div class="flat-item-image">
                                            <span class="for-sale">For Sale</span>
                                            <a href="#"><img src="/website/images/flat/2.jpg" alt=""></a>
                                            <div class="flat-link">
                                                <a href="#">More Details</a>
                                            </div>
                                            <ul class="flat-desc">
                                                <li>
                                                    <img src="/website/images/icons/4.png" alt="">
                                                    <span>450 sqft</span>
                                                </li>
                                                <li>
                                                    <img src="/website/images/icons/5.png" alt="">
                                                    <span>5</span>
                                                </li>
                                                <li>
                                                    <img src="/website/images/icons/6.png" alt="">
                                                    <span>3</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flat-item-info">
                                            <div class="flat-title-price">
                                                <h5><a href="#">Masons de Villa </a></h5>
                                                <span class="price">$52,350</span>
                                            </div>
                                            <p><img src="/website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- flat-item -->
                                <div class="col-md-12 hidden-sm col-xs-12">
                                    <div class="flat-item">
                                        <div class="flat-item-image">
                                            <span class="for-sale">For Sale</span>
                                            <a href="#"><img src="/website/images/flat/3.jpg" alt=""></a>
                                            <div class="flat-link">
                                                <a href="#">More Details</a>
                                            </div>
                                            <ul class="flat-desc">
                                                <li>
                                                    <img src="/website/images/icons/4.png" alt="">
                                                    <span>450 sqft</span>
                                                </li>
                                                <li>
                                                    <img src="/website/images/icons/5.png" alt="">
                                                    <span>5</span>
                                                </li>
                                                <li>
                                                    <img src="/website/images/icons/6.png" alt="">
                                                    <span>3</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="flat-item-info">
                                            <div class="flat-title-price">
                                                <h5><a href="#">Masons de Villa </a></h5>
                                                <span class="price">$52,350</span>
                                            </div>
                                            <p><img src="/website/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- widget-video -->
                        <aside class="widget widget-video">
                            <h5>Take A Look</h5>
                            <div class="properties-video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <!-- <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/40934652"></iframe> -->
                                    <iframe src="https://player.vimeo.com/video/117765418?title=0&byline=0&portrait=0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    <!-- PROPERTIES DETAILS AREA END -->
</template>
<script>
import comments from '../comments/comments.vue'
import characteristics from '../characteristics/characteristics.vue'
export default {
    name: 'details_property',
    props: ['id'],
    components:{
        comments,
        characteristics
    },
    computed:{
        
    },
    data() {
        return {
            conditions:[{'area_total': '470'}, {'built_area': '470'}, {'bathroom': '470'}, {'bedroom': '4'}, {'garage': '1'}, {'kitchen': '1'}, {'floor': '4'}, {'stratum': '3'}],
            amenities:[{'air_conditioning': '1'}, {'balcony': '1'}, {'cable': '1'}, {'lift': '1'}, {'parking': '1'}, {'dishwasher': '1'}, {'pool': '1'},  {'internet': '1'}]
        }
    },
}
</script>
