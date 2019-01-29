<template>
    <div>	
        <!-- HEADER AREA START -->
        <Header/>
        <!-- SLIDER SECTION END -->

        <!-- Start page content -->
        <router-view></router-view>
        
        <!-- End page content -->

        <!-- Start footer area -->
       <Footer/>
        <!-- End footer area -->
    </div>
    <!-- Body main wrapper end -->
    
</template>
<script>
import Header from './header'
import Footer from './footer'
export default {
    name: 'main-app',
    components:{
        Header, Footer
    }
}
</script>
