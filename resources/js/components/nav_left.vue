<template>
    <div>
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <template v-if="!currentUser">
              <li class="nav-item">
                <a class="nav-link" href="/">
                  <i class="menu-icon mdi mdi-television"></i>
                  <span class="menu-title">Propiedades</span>
                </a>
              </li>
            </template>
            <template v-else>
              <li class="nav-item nav-profile">
                <div class="nav-link">
                  <div class="user-wrapper">
                    <div class="profile-image">
                      <img src="images/faces/face1.jpg" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                      <p class="profile-name">{{ currentUser.name }}</p>
                      <div>
                        <small class="designation text-muted">{{ currentUser.email}}</small>
                        <span class="status-indicator online"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <router-link to="/" class="nav-link">
                  <i class="menu-icon mdi mdi-television"></i>
                  <span class="menu-title">Panel de control</span>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/customers" class="nav-link">
                  <i class="menu-icon mdi mdi-television"></i>
                  <span class="menu-title">Clientes</span>
                </router-link>
              </li>
            </template>
          </ul>
      </nav>    
    </div>
</template>
<script>
export default {
    name: 'Left',
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
