<template>
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
            <li class="nav-item">
              <a href="#!" @click.prevent="logout" class="nav-link">Cerrar Session</a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <template v-if="!currentUser">
              <li class="nav-item">
                <router-link to="/login" class="nav-link">Login</router-link>
              </li>
            </template>
            <template v-else>
              <li class="nav-item dropdown d-none d-xl-inline-block">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <span class="profile-text">{{ currentUser.name }}</span>
                    <img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <a class="dropdown-item mt-2">
                        {{ currentUser.email }}
                    </a>
                    <a class="dropdown-item" href="#!" @click.prevent="logout" >
                        Cerrar Session
                    </a>                      
                </div>              
              </li>
            </template>
          </ul>
        </div>
      </nav>
</template>
<script>
export default {
    name: 'Header',
    methods:{
      logout(){
        this.$store.commit('logout');
        this.$router.push('/login');
      }
    },
    computed:{
      currentUser(){
        return this.$store.getters.currentUser;
      }
    }
}
</script>