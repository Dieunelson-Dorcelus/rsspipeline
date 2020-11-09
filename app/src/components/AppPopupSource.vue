<template>
    <form>
        <h2>Source</h2>

        <div v-if="isAdd">
            <h3>ADD</h3>
        </div>

        <div v-if="isRemove">
            <h3>REMOVE</h3>
        </div>

        <div v-if="isList">
            <h3>LIST</h3>
        </div>
    </form>
</template>

<script>
export default {
    props:{
        actionType:{
            type:String,
            default : "list"
        }
    },

    computed: {
        isAdd(){ return this.actionType==="add" },
        isRemove(){ return this.actionType==="remove" },
        isList(){ return this.actionType==="list" },
    },
}
</script>


<style>
    
</style>