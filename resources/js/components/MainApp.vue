<template>
    <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
        <Header/>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
        <Left/>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <router-view></router-view>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="#" target="_blank">StudioTecno</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Creciendo contigo
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</template>
<script>
import Header from './nav_top.vue';
import Left from './nav_left.vue'
export default {
    name: 'main-app',
    components:{ Header, Left}
}
</script>
