<script>
export default {
    data(){
        return{
            name:null,
            job:null
        }
    },
    methods:{
        createExecutor(){
            axios.post('/api/executor', {
                name:this.name,
                job:this.job
            }).then(res=>{
                this.name = null;
                this.job = null
                this.$parent.$refs.table.getExecutors()
            })
        }
    },
}

</script>
<template>
    <div class="form">
        <div class="form__wrapper">
            <input type="text" name="name" id="name" placeholder="name" v-model="name">
            <input type="text" name="job" id="job" placeholder="job" v-model="job">
        </div>
        <div class="form__buttons">
            <button class="create" @click="createExecutor">Создать</button>
        </div> 
    </div>
</template>

<style scoped>
    .form{
        padding: 20px;
    }
    .form__wrapper{
        display: grid;
        grid-template-rows: repeat(2,1fr);
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