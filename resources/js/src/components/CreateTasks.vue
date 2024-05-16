<script>
export default {
    data(){
        return{
            name:null,
            description:null,
            executor:null
        }
    },
    methods:{
        createTasks(){
            axios.post('/api/task', {
                name:this.name,
                description:this.description,
                executor:this.executor
            }).then(res=>{
                this.name = null;
                this.description = null;
                this.executor = null;
                this.$parent.$refs.table.getTasks()
            })
        }
    },
}

</script>
<template>
    <div class="form">
        <div class="form__wrapper">
            <input type="text" name="name" id="name" placeholder="name" v-model="name">
            <input type="text" name="description" id="description" placeholder="description" v-model="description">
            <input type="text" name="executor" id="executor" placeholder="executor" v-model="executor">
        </div>
        <div class="form__buttons">
            <button class="create" @click="createTasks">Создать</button>
        </div> 
    </div>
</template>

<style scoped>
    .form{
        padding: 20px;
    }
    .form__wrapper{
        display: grid;
        grid-template-rows: repeat(3,1fr);
        width: 460px;
        gap: 10px;
    }
    .form__buttons{
        padding: 10px 0;
    }
    input{
        padding: 10px;
        border-radius: 6px;
    }
    .create{
        background: rgb(0, 255, 0);
        color:white;
        font-weight: bold;
    }
</style>