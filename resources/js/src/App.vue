<template>
    <div>
        <header>
            <nav>
                <router-link :to="{name: 'task.index'}">Tasks</router-link>
                <router-link :to="{name: 'executor.index'}">Executors</router-link>
            </nav>
            <div class="auth">
                <router-link :to="{name: 'auth.index'}">Login</router-link>
            </div>
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
        border-bottom: 2px solid white;
        color: white;
        display: flex;
        justify-content: space-between;
    }
    nav{
        width: 200px;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
</style>