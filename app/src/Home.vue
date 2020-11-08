<template>
  <div id="home">
    <div class="header">
      <div class="jumbotron">
          <h1 class="display-3">{{title}}</h1>
          <p class="lead">Welcome in {{ appTitle }} an application that manages your RSS feeds before their publication</p>
          <hr class="my-4">
          <p>It's just a website in order to learn VueJS !<br>
              For the dark theme you can see, I used a bootswatch css file.</p>
          <p class="lead">
              <a class="btn btn-primary btn-lg" v-bind:href="learn_more" target="_blank" role="button">Made with &hearts; by dieunelson.fr</a>
          </p>
      </div>
    </div>
  
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
          <form class="form-inline my-2 my-lg-0 w-80">
              <input class="form-control mr-sm-2 w-100" type="text" placeholder="Search"  v-model="rssItemFilter">                
          </form>

          <div class="w-20 d-flex">
              <button type="button" class="btn btn-primary mg-right-5 w-45">Grab</button>
              <button type="button" class="btn btn-secondary mg-right-5 w-45">Drop</button>
          </div>

      </nav>

      <div class="list-group notif mg-top-20">
          <app-rss-item v-for="(item, index) in rssItemShowLimit" :key="index" class="mg-top-5"></app-rss-item>
      </div>

      <ul class="pagination pagination-lg mg-center mg-top-20 mg-bottom-20">
          <li class="page-item mg-center disabled">
            <a class="page-link" href="#">&laquo;</a>
          </li>
          <li class="page-item mg-center active">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item mg-center">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item mg-center">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item mg-center">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item mg-center">
            <a class="page-link" href="#">5</a>
          </li>
          <li class="page-item mg-center">
            <a class="page-link" href="#">&raquo;</a>
          </li>
        </ul>
    </div>
</template>

<script>
import AppRssItem from './components/AppRssItem'

export default {
  name: 'home',
  components:{
    AppRssItem
  },
  data () {
    return {
        title: 'Hello, world!',
        appTitle: 'RSSPipeline',
        learn_more: 'https://dieunelson.fr',
        presentation: 'It just a website in order to learn VueJS !\
                        For the dark theme you can see, I used a bootswatch css file.',
        me: 'I\'m Dieunelson Dorcelus a Full Stack developper, you can find more informations about me in my website (dieunelson.fr). Just clik on the link bellow !',
        rssItem : [],
        rssItemFilter : 'source:all',
        rssItemShowLimit: 10
    }
  },
}
</script>

<style>
</style>
