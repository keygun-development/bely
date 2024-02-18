import './bootstrap';
import {createApp} from "vue/dist/vue.esm-bundler";
import Modal from "./components/Modal.vue";
import MobileMenu from "./components/MobileMenu.vue";
import Tiles from "./components/Tiles.vue";
import './font-awesome';

createApp({})
    .component('Modal', Modal)
    .component('Tiles', Tiles)
    .mount('#app')

createApp({})
    .component('MobileMenu', MobileMenu)
    .mount('#navigation')
