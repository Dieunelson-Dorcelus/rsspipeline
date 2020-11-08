
const router = new VueRouter({
    mode:'hash',
    routes:[
        { path:'/', component:Home },
        { path:'/Login', component:Login },
    ]
})
Vue.use(router)