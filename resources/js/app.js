
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('exampleTable', require('./components/ExampleTable.vue').default);
Vue.component('exampleForm', require('./components/ExampleForm.vue').default);
Vue.component('deposit', require('./components/Deposit.vue').default);
Vue.component('expenses', require('./components/Expenses.vue').default);
Vue.component('withdraw', require('./components/Withdraw.vue').default);
Vue.component('rentReceipt', require('./components/RentReceipt.vue').default);
Vue.component('booking', require('./components/Booking.vue').default);
Vue.component('rentalAgreement', require('./components/RentalAgreement.vue').default);
Vue.component('dashboard', require('./components/Dashboard.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data() {
        return{
            counter: 0
        }
    },
methods:{
    onClickTest(){
        console.log('test click');
    }
}
});
