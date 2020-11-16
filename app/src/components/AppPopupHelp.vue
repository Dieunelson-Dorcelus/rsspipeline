<template>
    <form>
        <h2>Need help</h2>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control form-control-lg">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
        </div>

        <div class="form-group mg-top-20">
            <input type="submit" value="Submit" class="btn btn-primary btn-lg btn-block">
        </div>
    </form>
</template>

<script>
export default {
    props:{
        actionType:{
            type:String,
            default : "nil"
        }
    },
    computed: {
    },
}
</script>

<style>
    
</style>