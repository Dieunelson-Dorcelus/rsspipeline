<template>
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="app-menu">
        <app-menu :title="appTitle" :guest="true"></app-menu>
    </nav>

    <div class="container">
        <router-view></router-view>
    </div>
  </div>
</template>

<script>
import AppMenu from './components/AppMenu'

export default {
  name: 'app',
  components:{
    AppMenu
  },
  data () {
    return {
        appTitle: 'RSSPipeline',
    }
  }
}
</script>

<style>
</style>
