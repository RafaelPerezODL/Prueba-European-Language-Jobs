import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
    routes: [
        {path: '/', component: require('./components/insertar.vue')},
        {path: '/lista', component: require('./components/lista.vue')},
    ]
})

export default router