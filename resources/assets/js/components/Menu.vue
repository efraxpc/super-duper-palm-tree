<template>
    <section class="sidebar">
        <div id="menu" role="navigation">
            <div class="nav_profile">
                <div class="media profile-left">
                    <a class="pull-left profile-thumb" href="#">
                        <img :src="avatar" class="img-circle" alt="User Image"></a>
                    <div class="content-profile">
                        <h4 class="media-heading">Juan</h4>
                        <ul class="icon-list">
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw ti-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw ti-lock"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw ti-settings"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw ti-shift-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="navigation">
                <li class="active" id="active">
                    <a v-bind:href="url_timeline" v-on:click="clickMenuDropdown">
                        <i class="menu-icon ti-desktop"></i>
                        <span class="mm-text" v-on:click="clickMenuDropdown"> Timeline</span>
                    </a>
                </li>
                <li>
                    <a v-bind:href="url_publicar_contenido" v-on:click="clickMenuDropdown">
                        <i class="menu-icon ti-layout-list-large-image" ></i>
                        <span class="mm-text" v-on:click="clickMenuDropdown">Publicar contenido</span>
                    </a>
                </li>
                <li class="menu-dropdown">
                    <a href="#" v-on:click="clickMenuDropdown">
                        <i class="menu-icon ti-desktop" ></i>
                        <span v-on:click="clickMenuDropdown">
                                    UI Features
                                </span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu collapse" aria-expanded="false" style="height: 0px;">
                        <li >
                            <a href="#" v-on:click="clickMenuDropdown">
                                <i class="fa fa-fw ti-plug"></i> General Components
                            </a>
                        </li>
                        <li>
                            <a href="#" v-on:click="clickMenuDropdown">
                                <i class="fa fa-fw ti-layout-placeholder"></i> Buttons
                            </a>
                        </li>
                        <li >
                            <a href="#" v-on:click="clickMenuDropdown">
                                <i class="fa fa-fw ti-layers"></i> Tabs &amp; Accordions
                            </a>
                        </li>
                        <li >
                            <a href="#" v-on:click="clickMenuDropdown">
                                <i class="fa fa-fw ti-ink-pen"></i> Font Icons
                            </a>
                        </li>
                        <li>
                            <a href="#" v-on:click="clickMenuDropdown">
                                <i class="fa fa-fw ti-brush-alt"></i> Advanced Modals
                            </a>
                        </li>
                        <li>
                            <a href="#" v-on:click="clickMenuDropdown">
                                <i class="fa fa-fw ti-time"></i> Timeline
                            </a>
                        </li>
                        <li>
                            <a href="#" v-on:click="clickMenuDropdown">
                                <i class="fa fa-fw ti-flag-alt"></i> Notifications
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- / .navigation -->
        </div>
        <!-- menu -->
    </section>
</template>
<script>
    export default {
        props:['url_publicar_contenido','url_timeline','avatar'],
        methods: {
            clickMenuDropdown: function (event) {
                let elements = document.getElementsByClassName('active')
                for(var i=0;i<= elements.length;i++) {
                    elements[i].classList.remove("active")
                }
                if (event.target.tagName === 'A') {
                    event.target.parentElement.classList.toggle('active')
                }else {
                    event.target.parentElement.parentElement.classList.toggle('active')
                }
            }
        }
    }
</script>

<style media="screen">

</style>
