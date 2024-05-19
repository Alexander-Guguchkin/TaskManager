<script>
import EditExecutors from './EditExecutors.vue';

export default{
    components:{
        EditExecutors
    },
    data(){
        return{
            executors:{},
            changeID:null
        }
    },
    methods:{
        getExecutors(){
            axios.get('/api/executor').then(res=>{
                this.executors = res.data;
            });
        },
        changeExecutor(id){
            this.changeID = id;
        },
        isEdit(id){
            return this.changeID === id
        },
        deleteExecutor(id){
            axios.delete(`/api/executor/${id}`);
            this.getExecutors();
        }
    },
    mounted(){
        this.getExecutors()
    }
}
</script>

<template>
    <div class="table">
        <div class="table__header">
            <div class="table__row">id</div>
            <div class="table__row">name</div>
            <div class="table__row">job</div>
            <div class="table__row">Edit</div>
            <div class="table__row">Delete</div>
        </div>
        <div class="table__body">
            <template v-for="elem in executors">
                    <div class="output">
                        <div class="table__row">{{ elem.id }}</div>
                        <div class="table__row">{{ elem.name }}</div>
                        <div class="table__row">{{ elem.job }}</div>
                        <div class="table__row"><button class="edit" @click="changeExecutor(elem.id)">Edit</button></div>
                        <div class="table__row"><button class="delete" @click="deleteExecutor(elem.id)">Delete</button></div>
                    </div>

                    <div :class="isEdit(elem.id)?'view':'none'">
                        <EditExecutors
                            :id = "elem.id"  
                            :name = "elem.name "
                            :job = "elem.job"
                        />
                    </div>
                    
            </template>
    
        </div>
    </div>
</template>

<style scoped>
    .table{
        display: flex;
        flex-direction: column;
        background: #A1F493;
        margin: 20px;
    }
    .table__header{
        font-weight: bold;
        border-bottom: 1px solid mediumseagreen;
    }
    .table__header,  .output, .view{
        display: grid;
        gap:10px;
        grid-template-columns: repeat(5, 1fr);
        place-items: center;
    }
    .delete{
        background: red;
    }
    .edit{
        background: mediumseagreen;
    }
    .none{
        display: none;
    }


</style>    