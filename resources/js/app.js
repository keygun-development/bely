import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler";
import Modal from "./components/Modal.vue";
import MobileMenu from "./components/MobileMenu.vue";
import '../css/app.scss';
import './font-awesome';

createApp({})
    .component('Modal', Modal)
    .mount('#app')

createApp({})
    .component('MobileMenu', MobileMenu)
    .mount('#navigation')
