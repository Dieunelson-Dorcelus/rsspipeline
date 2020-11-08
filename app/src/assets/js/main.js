
let store = new AppStore();

let appMenuLogin = {

    data: () => {
        return {
            client : {
                
            },
            guest : store.state.client.guest
        }
    },

    methods: {
        login(){
            this.client = store.connect(this.client)
            this.guest = store.state.client.guest
        },
        logout(){
            store.disconnect()
            this.client = {}
            this.guest = store.state.client.guest
        }
    },

    template: `
    <div class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle btn btn-primary" data-toggle="dropdown" href="#"
            role="button" aria-haspopup="true" aria-expanded="false">Account</a>
        <div class="dropdown-menu" v-if="guest">
            <a class="dropdown-item" href="#" @click.self.prevent="login">Login</a>
            <a class="dropdown-item" href="#">Register</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Need help ?</a>
        </div>

        <div class="dropdown-menu" v-else>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#" style="color:darkred" @click.self.prevent="logout">Logout</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Need help ?</a>
        </div>
    </div>
    `

}

let appMenu ={

    props: {
        title: {
            type: String
        }
    },

    components:{appMenuLogin},

    template: `
    <div class="container">
        <a class="navbar-brand" href="#">{{ title }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Grab List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Published List</a>
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
                <app-menu-login></app-menu-login>
            </div>
        </div>
    </div>
    `

}


new Vue({
    el : "app-menu",
    components : {appMenu, appMenuLogin},
    data : {
        
    }    
})
