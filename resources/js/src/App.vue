<script setup>
    import Tasks from "./components/Tasks.vue";
    import Executor from "./components/Executor.vue";
</script>

<template>
    <div>
        <Executor/>
        <Tasks />        
    </div>
</template>

<style>
    body{
        background-color: mediumseagreen;
        
    }
    button{
        padding: 10px;
        border-radius: 6px;
        color: white;
    }
</style>