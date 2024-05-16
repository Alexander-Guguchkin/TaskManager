<script>
export default{
    props:[
        'id',
        'name',
        'description', 
        'executor'
    ],
    data(){
        return {
            id: this.id,
            name: this.name,
            description: this.description,
            executor: this.executor
        }   
    },
    methods:{
        editTask(id){
            axios.patch();
        }
    },
}
</script>
<template>
        <div class="table__row">{{this.id}}</div>
        <div class="table__row"><input type="text" v-model="this.name"></div>
        <div class="table__row"><input type="text" v-model="this.description"></div>
        <div class="table__row"><input type="text" v-model="this.executor"></div>
        <div class="table__row"><button class="edit">Update</button></div>
        <!-- <div class="table__row"><button class="delete">Delete</button></div> -->
</template>
<style lang="scss" scoped>

</style>
