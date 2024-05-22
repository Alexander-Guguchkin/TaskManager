<script>
export default {
    data(){
        return{
            login:null,
            password:null
        }
    }
}
</script>
<template>
    <div class="form">
        <div class="inputs">
            <input type="text" name="login" id="login" placeholder="login" v-model="login">
            <input type="text" name="password" id="password" placeholder="password" v-model="password">
        </div>
        <div class="form__buttons">
            <button class="login" @click="">Войти</button>
            <router-link :to="{name: 'register.index'}"> <button class="register">Регистрация</button></router-link>
        </div> 
    </div>
</template>
<style scoped>
    .form{
        width: 25%;
        margin: 0 auto;
        padding: 20px;
    }
    .inputs{
        display: grid;
        grid-template-rows: repeat(2,1fr);
        gap: 10px;
        width: 100%;
    }
    .form__buttons{
        padding: 10px 0;
        width: 100%;
    }
    input{
        padding: 10px;
        border-radius: 6px;
    }
    .login, .register{
        background: rgb(0, 255, 0);
        color:white;
        font-weight: bold;
        width: 100%;
    }
    .register{
        background: rgb(0, 255, 0);
        margin-top: 10px;
    }
</style>