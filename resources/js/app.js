import './bootstrap';


import { createRouter } from 'vue-router';
import { createWebHistory } from 'vue-router';
import { createApp } from 'vue';
import App from './src/App.vue';

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
        path: '/tasks', component: () => import('./src/components/Tasks.vue'),
        name: 'task.index'
    },
    {
        path: '/executors', component: () => import('./src/components/Executor.vue'),
        name: 'executor.index'
    },
    {
      path: '/auth', component: () => import('./src/components/Auth/Auth.vue'),
      name: 'auth.index'
    },
    {
      path: '/register', component: () => import('./src/components/Auth/Register.vue'),
      name: 'register.index'
    }
    
  ],
});

const app = createApp(App);
app.use(router);
app.mount('#app');
