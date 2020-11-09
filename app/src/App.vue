<template>
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="app-menu">
        <app-menu :title="appTitle"  @moreAction="moreAction" ></app-menu>
    </nav>

    <div class="container">
        <router-view></router-view>
    </div>

    <app-popup v-if="showPopup" :itemName="popup" :itemAction="popupAction"></app-popup>
  </div>
</template>

<script>
import AppMenu from './components/AppMenu'
import AppPopup from './components/AppPopup'

export default {
  name: 'app',
  components:{
    AppMenu,
    AppPopup
  },
  data () {
    return {
        appTitle: 'RSSPipeline',
        popup:"nil",
        popupAction:"nil"
    }
  },

  computed: {
    showPopup(){
      
      console.log("OK 3 : " +this.popup)
      return this.popup!="nil"
    }
  },

  methods: {
    moreAction(name, action){
      console.log("OK 2 : " + name + action)
      this.popup = name
      this.popupAction = action
    }
  },
}
</script>

<style>
</style>
