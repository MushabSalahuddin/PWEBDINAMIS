require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import {
    Form,
    HasError,
    AlertError
} from 'vform';

import Swal from 'sweetalert2'
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.Toast = Toast;

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

// Progress Bar
import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '7px'
})

let Fire = new Vue();
window.Fire = Fire;

let routes = [
    { path: '/halaman-login', component: require('./components/Blog/HalamanLogin.vue').default},
    { path: '/tambah-blog', component: require('./components/Blog/TambahBlog.vue').default},
    { path: '/data-blog', component: require('./components/Blog/DataBlog.vue').default},
    { path: '/kategori', component: require('./components/Blog/Kategori.vue').default},
    { path: '/pengguna', component: require('./components/Blog/Pengguna.vue').default}
]

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router
});
