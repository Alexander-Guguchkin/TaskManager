<script>
import EditTasks from './EditTasks.vue';

export default{
    components:{
        EditTasks
    },
    data(){
        return{
            tasks:{},
            changeID:null
        }
    },
    methods:{
        getTasks(){
            axios.get('/api/task').then(res=>{
                this.tasks = res.data;
            });
        },
        changeTask(id){
            this.changeID = id;
        },
        isEdit(id){
            return this.changeID === id
        }
    },
    mounted(){
        this.getTasks()
    }
}
</script>

<template>
    <div class="table">
        <div class="table__header">
            <div class="table__row">id</div>
            <div class="table__row">name</div>
            <div class="table__row">description</div>
            <div class="table__row">executor</div>
            <div class="table__row">Edit</div>
            <div class="table__row">Delete</div>
        </div>
        <div class="table__body">
            <template v-for="elem in tasks">
                    <div class="output">
                        <div class="table__row">{{ elem.id }}</div>
                        <div class="table__row">{{ elem.name }}</div>
                        <div class="table__row">{{ elem.description }}</div>
                        <div class="table__row">{{ elem.executor }}</div>
                        <div class="table__row"><button class="edit" @click="changeTask(elem.id)">Edit</button></div>
                        <div class="table__row"><button class="delete">Delete</button></div>
                    </div>

                    <div :class="isEdit(elem.id)?'view':'none'">
                        <EditTasks
                            :id = "elem.id"  
                            :name = "elem.name "
                            :description = "elem.description"
                            :executor = "elem.executor"
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
        grid-template-columns: repeat(6, 1fr);
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