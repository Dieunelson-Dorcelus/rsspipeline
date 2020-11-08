<template>
    <div class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle btn btn-primary" data-toggle="dropdown" href="#"
            role="button" aria-haspopup="true" aria-expanded="false">Account</a>
        <div class="dropdown-menu" v-if="guest">
            <a class="dropdown-item" href="/Login">Login</a>
            <a class="dropdown-item" href="/Register">Register</a>
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
</template>


<script>

export default {

    data: () => {
        return {
            client : {
                
            },
            guest : true
        }
    },
    
    mounted() {
        this.guest = this.$store.get("store").state.client.guest
    },

    methods: {
        login(){
            this.client = this.$store.get("store").connect(this.client)
            this.guest = this.$store.get("store").state.client.guest
        },
        logout(){            
            this.$store.get("store").disconnect()
            this.client = {}
            this.guest = this.$store.get("store").state.client.guest
        }
    },
}
</script>

<style>
    
</style>