<template>
  <div id="register">
    <div class="container">
        <form class="form-signin mg-top-20 w-50 mg-center">
          <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
          <div class="d-flex">
            <label for="FirstName" class="sr-only">Firstname</label>
            <input type="text" id="FirstName" class="form-control" placeholder="Firstname" required autofocus>
            <label for="LastName" class="sr-only">Lastname</label>
            <input type="text" id="LastName" class="form-control" placeholder="Lastname" required autofocus>
          </div>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <label for="inputRePassword" class="sr-only">RePassword</label>
          <input type="password" id="inputRePassword" class="form-control" placeholder="RePassword" required>
          <div class="checkbox mb-3">

          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2020 dieunelson.fr</p>
        </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'register',
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
