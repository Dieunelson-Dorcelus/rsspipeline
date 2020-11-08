<template>
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" :class="isActive" @click.prevent="handleClick">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1 w-90">{{ title }}</h5>
            <small class="w-10">{{ date }}</small>
        </div>
        <div class="d-flex w-100">
            <p class="mb-1 w-90">{{ content }}</p><a class="btn btn-primary w-10" href="#" target="_blank" @click.self.stop="read">Read</a>
        </div>
        <small>{{ source }}</small>
    </a>
</template>

<script>
export default {
    props : {
        title : {
            type : String,
            default : "Unknow Item"
        },
        date : {
            type : String,
            default : "Unknow date"
        },
        content : {
            type : String,
            default : "Unknow content"
        },
        source : {
            type : String,
            default : "Unknow source"
        }
    },

    data() {
        return {
            active : false
        }
    },

    methods: {
        handleClick(){
            this.active = !this.active;
        },
        read(e){
            var win = window.open(e.target.href, '_blank');
            win.focus();
        }
    },
    computed : {
        isActive(){
            return this.active === false ? "" : "active";
        }
    }
}
</script>

<style>
    
</style>