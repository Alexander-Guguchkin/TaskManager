<template>
    <div>
        <header>
        <router-link :to="{name: 'task.index'}">Tasks</router-link>
        <router-link :to="{name: 'executor.index'}">Executors</router-link>
    </header>
    <div class="main">
        <router-view></router-view>      
    </div>
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
    header{
        padding: 20px;
    }
</style>