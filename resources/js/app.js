require('./bootstrap');
window.Vue = require('vue').default;
window.router = require('router').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#users',

    router
});
