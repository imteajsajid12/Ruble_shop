
require('./bootstrap');


window.Vue = require('vue').default;
import VueSweetalert2 from 'vue-sweetalert2';

// If you don't need the styles, do not connect
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueSweetalert2);
//notifacation
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css'
import CxltToastr from 'cxlt-vue2-toastr'
var toastrConfigs = {
    position: 'top right',
    showDuration: 1000,
     timeOut:2000,
    showMethod:'fadeIn',

}
Vue.use(CxltToastr, toastrConfigs)

//end


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('Stock', require('./components/stock/Stock.vue').default);
Vue.component('Stock_user', require('./components/stock/Stock_user.vue').default);
Vue.component('Sell', require('./components/Sell.vue').default);

const app = new Vue({
    el: '#app',
  mounted() {
            const audio = new Audio('/assets/media/iphone.mp3');
            audio.play();    
  }
});
