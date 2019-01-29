<template>
    <div>
        <!-- HEADER AREA START -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="#">
                                    <img src="website/images/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 hidden-sm hidden-xs">
                            <div class="company-info clearfix">
                                <div class="company-info-item">
                                    <div class="header-icon">
                                        <img src="website/images/icons/phone.png" alt="">
                                    </div>
                                    <div class="header-info">
                                        <h6>+57 311 6676767</h6>
                                        <p>Abiertos de 8 am - 6pm - Hora Colombia</p>
                                    </div>
                                </div>
                                <div class="company-info-item">
                                    <div class="header-icon">
                                        <img src="website/images/icons/mail-open.png" alt="">
                                    </div>
                                    <div class="header-info">
                                        <h6><a href="mailto:info@inversionesyproyectos.com">info@inversionesyproyectos.com</a></h6>
                                        <p>Envianos un Email</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="header-search clearfix">
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- Authentication Links -->
                                    <template v-if="current_user">
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Registrarme</a></li>
                                    </template>
                                    <template v-else>
                                       <nav id="primary-menu">
                                        <ul class="main-menu text-center">
                                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>{{ current_user.name}}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="drop-menu">
                                                <li><a href="#" target="_blank">
                                                    Panel Administrador <span class="caret"></span>
                                                    </a>
                                                </li>
                                                <li> <a href="#">Salir</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                    </template>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area  transparent-header hidden-xs">
                <div class="container">
                    <div class="full-width-mega-drop-menu">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sticky-logo">
                                    <a href="#">
                                        <img src="website/images/logo/logo.png" alt="">
                                    </a>
                                </div>
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <router-link tag="li" to="/" class="mega-parent"><a>Inicio</a></router-link>
                                        <router-link tag="li" to="/about" class="mega-parent"><a>Sobre Nosotros</a></router-link>
                                        <li><a href="#">Marca</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <router-link tag="li" to="/properties" class="mega-parent"><a>Portafolio</a></router-link>
                                        <li><a href="#">Contacto</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER AREA END -->

        <!-- MOBILE MENU AREA START -->
        <div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Sobre Nosotros</a></li>
                                    <li><a href="#">Marca</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Portafolio</a></li>
                                    <li><a href="#">Contacto</a></li>                  
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE MENU AREA END -->
    </div>
</template>
<script>
export default {
    name:'Header',
    data() {
        return {
            current_user: true
        }
    }
}
</script>