import './bootstrap';

import {createApp} from "vue/dist/vue.esm-bundler.js";
import {Bars3Icon} from "@heroicons/vue/24/solid";
import { HomeIcon } from "@heroicons/vue/20/solid";
import CButton from "./components/CButton.vue"
import MatiSaludo from "./components/mati/MatiSaludo.vue"
import Mati1 from "./components/mati/Mati1.vue"
import Actividad1A from "./components/nivel1/Actividad1A.vue"

createApp({
    components: {
        'mati-saludo': MatiSaludo,
        'c-button': CButton,
        'bars-3-icon': Bars3Icon,
        'home-icon': HomeIcon,
        'mati-1': Mati1,
        'actividad-1a': Actividad1A,
    }
}).mount("#app");
