<template>
    <form>
        <h2>Source</h2>

        <div v-if="isAdd">
            <h3>ADD</h3>
            <div class="form-group">
                <label for="sourceName">Name</label>
                <input type="text" name="sourceName" id="sourceName" class="form-control form-control-lg">
            </div>

            <div class="form-group">
                <label for="sourceUrl">Rss feed</label>
                <input type="text" name="sourceUrl" id="sourceUrl" class="form-control form-control-lg">
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary btn-lg btn-block">
            </div>
        </div>

        <div v-if="isRemove">
            <h3>REMOVE</h3>

            <div class="form-group">
                <select class="form-control form-control-lg">
                    <option v-for="(source, index) in 10" :key="index" value=""> source {{index}}</option>
                </select>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Delete" class="btn btn-primary btn-lg btn-block">
            </div>
        </div>

        <div v-if="isList">
            <h3>LIST</h3>

            <table class="table table-hover">
                <thead>
                    <tr class="table-primary">
                        <th class="col col-6">Name</th>
                        <th class="col col-lg-2">Grab Item</th>
                        <th class="col col-lg-2">Published Item</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-secondary" v-for="(source, index) in 5" :key="index">
                        <td>Column content</td>
                        <td>10</td>
                        <td>10</td>
                    </tr>
                </tbody>

            </table>

            <div class="form-group">
                <ul class="pagination pagination-lg">
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