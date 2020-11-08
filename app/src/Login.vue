<template>
  <div id="login">
    <div class="container">
        <form class="form-signin mg-top-20 w-50 mg-center">
          <h1 class="h3 mb-3 font-weight-normal">Please login</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3">

          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2020 dieunelson.fr</p>
        </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'login',
  components:{
  },
  data () {
    return {
        
    }
  }
}
</script>

<style>
</style>
