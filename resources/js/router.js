import Vue from 'vue'
import VueRouter from "vue-router"
import IndexComponent from "./components/Admin/User/IndexComponent";

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/admin/user/',
            component: IndexComponent,
        }
    ]
});
