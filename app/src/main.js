import Vue from 'vue'
import VueRouter from 'vue-router'
import VueStore from '@websanova/vue-store'
import Bootstrap from './assets/css/bootstrap.min.css'
import Style from './assets/css/style.css'
import AppStore from './assets/js/AppStore.class'


import App from './App.vue'
import Home from './Home.vue'
import Login from './Login.vue'
import Register from './Register.vue'
import Grab from './Grab.vue'
import Published from './Published.vue'


Vue.use(VueRouter)
Vue.use(VueStore)

const router = new VueRouter({
  mode : "history",
  routes : [
    { path:"/Home/:page(\\d+)", component: Home},
    { path:"/Home", redirect:"/Home/0"},
    { path:"/",  redirect:"/Home/0"},

    { path:"/Login", component: Login},
    { path:"/Register", component: Register},

    { path:"/Grab/:page(\\d+)", component: Grab},
    { path:"/Grab", redirect:"/Grab/0"},

    { path:"/Published/:page(\\d+)", component: Published},
    { path:"/Published", redirect:"/Published/0"},

    { path:"*", redirect:"/"},
  ]  
})

let store = new AppStore();

new Vue({
  el: '#app',
  router,
  created() {
    this.$store.set("store", store);
  },
  render: h => h(App)
})
