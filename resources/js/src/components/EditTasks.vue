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
            taskName: this.name,
            taskDescription: this.description,
            taskExecutor: this.executor
        }   
    },
    methods:{
        editTask(id){
            axios.patch(`/api/task/${id}`, {
                name: this.taskName,
                description: this.taskDescription,
                executor: this.taskExecutor
            }).then(res =>{
                console.log(this.id,this.taskName, this.taskDescription, this.taskExecutor);
                console.log(res.data);
                this.$parent.getTasks()
            });
        }
    },
}
</script>
<template>
        <div class="table__row">{{this.id}}</div>
        <div class="table__row"><input type="text" v-model="taskName"></div>
        <div class="table__row"><input type="text" v-model="taskDescription"></div>
        <div class="table__row"><input type="text" v-model="taskExecutor"></div>
        <div class="table__row"><button class="edit" @click="editTask(this.id)">Update</button></div>
        <!-- <div class="table__row"><button class="delete">Delete</button></div> -->
</template>
<style lang="scss" scoped>

</style>
