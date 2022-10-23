import './bootstrap';

import {createApp} from "vue/dist/vue.esm-bundler.js";
import {Bars3Icon} from "@heroicons/vue/24/solid";
import { HomeIcon } from "@heroicons/vue/20/solid";
import CButton from "./components/CButton.vue"
import MatiSaludo from "./components/mati/MatiSaludo.vue"
import Mati1 from "./components/mati/Mati1.vue"
import Mati2 from "./components/mati/Mati2.vue"
import Motas1 from "./components/motas/Motas1.vue"
import Actividad1A from "./components/nivel1/Actividad1A.vue"
import Actividad1B from "./components/nivel1/Actividad1B.vue"
import Actividad1C from "./components/nivel1/Actividad1C.vue"
import Actividad1D from "./components/nivel1/Actividad1D.vue"

import Actividad2A from "./components/nivel2/Actividad2A.vue"
import Actividad2B from "./components/nivel2/Actividad2B.vue"
import Actividad2C from "./components/nivel2/Actividad2C.vue"
import Actividad2D from "./components/nivel2/Actividad2D.vue"
import Actividad2E from "./components/nivel2/Actividad2E.vue"
import Actividad2F from "./components/nivel2/Actividad2F.vue"
import Actividad2G from "./components/nivel2/Actividad2G.vue"
import Actividad2H from "./components/nivel2/Actividad2H.vue"
import Actividad2I from "./components/nivel2/Actividad2I.vue"
import Actividad2J from "./components/nivel2/Actividad2J.vue"
import Actividad2K from "./components/nivel2/Actividad2K.vue"
import Actividad2L from "./components/nivel2/Actividad2L.vue"

import Actividad3A from "./components/nivel3/Actividad3A.vue"
import Actividad3B from "./components/nivel3/Actividad3B.vue"
import Actividad3C from "./components/nivel3/Actividad3C.vue"
import Actividad3D from "./components/nivel3/Actividad3D.vue"
import Actividad3E from "./components/nivel3/Actividad3E.vue"
import Actividad3F from "./components/nivel3/Actividad3F.vue"
import Actividad3G from "./components/nivel3/Actividad3G.vue"

import Actividad4A from "./components/nivel4/Actividad4A.vue"
import Actividad4B from "./components/nivel4/Actividad4B.vue"
import Actividad4C from "./components/nivel4/Actividad4C.vue"
import Actividad4D from "./components/nivel4/Actividad4D.vue"
import Actividad4E from "./components/nivel4/Actividad4E.vue"
import Actividad4F from "./components/nivel4/Actividad4F.vue"
import Actividad4G from "./components/nivel4/Actividad4G.vue"
import Actividad4H from "./components/nivel4/Actividad4H.vue"
import Actividad4I from "./components/nivel4/Actividad4I.vue"
import Actividad4J from "./components/nivel4/Actividad4J.vue"

import Actividad5A from "./components/nivel5/Actividad5A.vue"
import Actividad5B from "./components/nivel5/Actividad5B.vue"
import Actividad5C from "./components/nivel5/Actividad5C.vue"
import Actividad5D from "./components/nivel5/Actividad5D.vue"
import Actividad5E from "./components/nivel5/Actividad5E.vue"
import Actividad5F from "./components/nivel5/Actividad5F.vue"

createApp({
    components: {
        'mati-saludo': MatiSaludo,
        'c-button': CButton,
        'bars-3-icon': Bars3Icon,
        'home-icon': HomeIcon,
        'mati-1': Mati1,
        'mati-2': Mati2,
        'motas-1': Motas1,
        'actividad-1a': Actividad1A,
        'actividad-1b': Actividad1B,
        'actividad-1c': Actividad1C,
        'actividad-1d': Actividad1D,

        'actividad-2a': Actividad2A,
        'actividad-2b': Actividad2B,
        'actividad-2c': Actividad2C,
        'actividad-2d': Actividad2D,
        'actividad-2e': Actividad2E,
        'actividad-2f': Actividad2F,
        'actividad-2g': Actividad2G,
        'actividad-2h': Actividad2H,
        'actividad-2i': Actividad2I,
        'actividad-2j': Actividad2J,
        'actividad-2k': Actividad2K,
        'actividad-2l': Actividad2L,

        'actividad-3a': Actividad3A,
        'actividad-3b': Actividad3B,
        'actividad-3c': Actividad3C,
        'actividad-3d': Actividad3D,
        'actividad-3e': Actividad3E,
        'actividad-3f': Actividad3F,
        'actividad-3g': Actividad3G,

        'actividad-4a': Actividad4A,
        'actividad-4b': Actividad4B,
        'actividad-4c': Actividad4C,
        'actividad-4d': Actividad4D,
        'actividad-4e': Actividad4E,
        'actividad-4f': Actividad4F,
        'actividad-4g': Actividad4G,
        'actividad-4h': Actividad4H,
        'actividad-4i': Actividad4I,
        'actividad-4j': Actividad4J,

        'actividad-5a': Actividad5A,
        'actividad-5b': Actividad5B,
        'actividad-5c': Actividad5C,
        'actividad-5d': Actividad5D,
        'actividad-5e': Actividad5E,
        'actividad-5f': Actividad5F,
    }
}).mount("#app");
