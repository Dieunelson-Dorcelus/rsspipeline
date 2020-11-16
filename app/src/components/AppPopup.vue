<template>
    <div id="popup" class="bg-dark" :class="show">
        <app-popup-channel v-if="isChannel" :actionType="itemAction"></app-popup-channel>
        <app-popup-source v-if="isSource" :actionType="itemAction"></app-popup-source>
        
        <div>
            <button @click.prevent.stop="close" class="btn btn-secondary">Close</button>  
        </div>      
    </div>
</template>

<script>
import AppPopupSource from './AppPopupSource'
import AppPopupChannel from './AppPopupChannel'
export default {

    props:{
        itemName:{
            type:String,
            default: "null"
        },
        itemAction:{
            type:String,
            default: "list"
        }
        
    },

    data() {
        return {
            
        }
    },

    components:{
        AppPopupChannel,
        AppPopupSource
    },

    computed: {
      isSource(){  return this.itemName==="source" },
      isChannel(){ return this.itemName==="channel" },
      show(){  return this.itemName==="nil"? "app-hide" : "app-show"}
    },

    methods: {
        close(){
            this.itemName = "nil"
        }
    },
    
}
</script>


<style>
    #popup{
        position: fixed;
        display: static;
        left:0;top:0;
        width: 100%;
        height:100%;
        z-index:1000;
    }
    #popup>form{
        margin : auto;
        margin-top : 100px;
        color: black;
        text-align:center;
        background-color : white;
        border-radius: 30px;
        width: 600px;
        height: 600px;
        opacity:1;
        padding:10px;
    }

    #popup>form>div{
        width: 80%;
        margin: auto;
    }

    #popup>div{
        margin : auto;
        margin-top : 10px;
        text-align:center;
        width: 100%;
        padding:10px;
    }
    #popup>form>h2{
        border-bottom: 2px solid black;
        width: 500px;
        margin: auto;
        padding-bottom:10px;
    }

    h3{
        margin-bottom: 20px;
    }

    #popup>div>button{
        margin : auto;
        text-align:center;
        left:auto;
        right:auto;
        width: 600px;
    }

    .app-show{
        display:block;
    }

    .app-hide{
        display:none;
    }
</style>