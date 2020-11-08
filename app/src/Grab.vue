<template>
  <div id="grab">
    <div class="header mg-center">
        <h1>Grab List</h1>
    </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light mg-top-20">
  
          <form class="form-inline my-2 my-lg-0 w-60">
              <input class="form-control mr-sm-2 w-100" type="text" placeholder="Search"  v-model="rssItemFilter">                
          </form>

          <div class="w-40 d-flex">
                <div class="w-60 mg-right-5">
                    <select class="custom-select">
                    <option selected="">Publish on</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary mg-right-5 w-20">Publish</button>
                <button type="button" class="btn btn-secondary mg-right-5 w-20">Drop</button>
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
  name: 'grab',
  components:{
    AppRssItem
  },
  data () {
    return {
        rssItem : [],
        rssItemFilter : 'source:all',
        rssItemShowLimit: 10
    }
  },
}
</script>

<style>
</style>
