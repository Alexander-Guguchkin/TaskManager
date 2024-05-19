<script>
export default{
    props:[
        'id',
        'name',
        'job', 
    ],
    data(){
        return {
            executorkName: this.name,
            executorJob: this.job,
        }   
    },
    methods:{
        editExecutor(id){
            axios.patch(`/api/executor/${id}`, {
                name: this.executorkName,
                job: this.executorJob,
            });
            this.$parent.getExecutors();
        }
    },
}
</script>
<template>
        <div class="table__row">{{this.id}}</div>
        <div class="table__row"><input type="text" v-model="executorkName"></div>
        <div class="table__row"><input type="text" v-model="executorJob"></div>
        <div class="table__row"><button class="edit" @click="editExecutor(this.id)">Update</button></div>
</template>
