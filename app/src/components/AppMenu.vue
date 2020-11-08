<template>
    <div class="container">
        <a class="navbar-brand" href="/">{{ title }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Grab" >Grab List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Published">Published List</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">[More action]</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">+ Source</a>
                        <a class="dropdown-item" href="#">- Source</a>
                        <a class="dropdown-item" href="#">View Sources</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">+ Channel</a>
                        <a class="dropdown-item" href="#">- Channel</a>
                        <a class="dropdown-item" href="#">View Channels</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Need help ?</a>
                    </div>
                </li>
            </ul>
            <div class="my-2 my-lg-0">
                <app-menu-login ></app-menu-login>
            </div>
        </div>
    </div>
</template>

<script>
import AppMenuLogin from './AppMenuLogin'
export default { 
    name: 'AppMenu',
    components:{
        AppMenuLogin
    },
    props: {
        title: {
            type: String
        }
    },
    data() {
        return {

        }
    }
}
</script>

<style>
    
</style>