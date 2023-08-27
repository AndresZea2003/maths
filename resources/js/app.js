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
import Actividad1E from "./components/nivel1/Actividad1E.vue"
import Actividad1F from "./components/nivel1/Actividad1F.vue"
import Actividad1G from "./components/nivel1/Actividad1G.vue"

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

import Actividad6A from "./components/nivel6/Actividad6A.vue"
import Actividad6B from "./components/nivel6/Actividad6B.vue"
import Actividad6C from "./components/nivel6/Actividad6C.vue"

import Actividad7A from "./components/nivel7/Actividad7A.vue"
import Actividad7B from "./components/nivel7/Actividad7B.vue"
import Actividad7C from "./components/nivel7/Actividad7C.vue"
import Actividad7D from "./components/nivel7/Actividad7D.vue"
import Actividad7E from "./components/nivel7/Actividad7E.vue"
import Actividad7F from "./components/nivel7/Actividad7F.vue"

import Actividad8A from "./components/nivel8/Actividad8A.vue"
import Actividad8B from "./components/nivel8/Actividad8B.vue"
import Actividad8C from "./components/nivel8/Actividad8C.vue"

import Actividad9A from "./components/nivel9/Actividad9A.vue"
import Actividad9B from "./components/nivel9/Actividad9B.vue"
import Actividad9C from "./components/nivel9/Actividad9C.vue"
import Actividad9D from "./components/nivel9/Actividad9D.vue"
import Actividad9E from "./components/nivel9/Actividad9E.vue"
import Actividad9F from "./components/nivel9/Actividad9F.vue"
import Actividad9G from "./components/nivel9/Actividad9G.vue"

import Actividad10A from "./components/nivel10/Actividad10A.vue"
import Actividad10B from "./components/nivel10/Actividad10B.vue"
import Actividad10C from "./components/nivel10/Actividad10C.vue"
import Actividad10D from "./components/nivel10/Actividad10D.vue"
import Actividad10E from "./components/nivel10/Actividad10E.vue"

import Actividad11A from "./components/nivel11/Actividad11A.vue"
import Actividad11B from "./components/nivel11/Actividad11B.vue"
import Actividad11C from "./components/nivel11/Actividad11C.vue"
import Actividad11D from "./components/nivel11/Actividad11D.vue"
import Actividad11E from "./components/nivel11/Actividad11E.vue"
import Actividad11F from "./components/nivel11/Actividad11F.vue"
import Actividad11G from "./components/nivel11/Actividad11G.vue"

import Actividad12A from "./components/nivel12/Actividad12A.vue"
import Actividad12B from "./components/nivel12/Actividad12B.vue"
import Actividad12C from "./components/nivel12/Actividad12C.vue"
import Actividad12D from "./components/nivel12/Actividad12D.vue"
import Actividad12E from "./components/nivel12/Actividad12E.vue"

import Actividad13A from "./components/nivel13/Actividad13A.vue"
import Actividad13B from "./components/nivel13/Actividad13B.vue"
import Actividad13C from "./components/nivel13/Actividad13C.vue"

import Actividad14A from "./components/nivel14/Actividad14A.vue"
import Actividad14B from "./components/nivel14/Actividad14B.vue"

import Actividad15A from "./components/nivel15/Actividad15A.vue"
import Actividad15B from "./components/nivel15/Actividad15B.vue"
import Actividad15C from "./components/nivel15/Actividad15C.vue"
import Actividad15D from "./components/nivel15/Actividad15D.vue"
import Actividad15E from "./components/nivel15/Actividad15E.vue"
import Actividad15F from "./components/nivel15/Actividad15F.vue"

import Actividad16A from "./components/nivel16/Actividad16A.vue"
import Actividad16B from "./components/nivel16/Actividad16B.vue"
import Actividad16C from "./components/nivel16/Actividad16C.vue"
import Actividad16D from "./components/nivel16/Actividad16D.vue"
import Actividad16E from "./components/nivel16/Actividad16E.vue"
import Actividad16F from "./components/nivel16/Actividad16F.vue"

import Actividad17A from "./components/nivel17/Actividad17A.vue"
import Actividad17B from "./components/nivel17/Actividad17B.vue"
import Actividad17C from "./components/nivel17/Actividad17C.vue"
import Actividad17D from "./components/nivel17/Actividad17D.vue"
import Actividad17E from "./components/nivel17/Actividad17E.vue"
import Actividad17F from "./components/nivel17/Actividad17F.vue"

import Actividad18A from "./components/nivel18/Actividad18A.vue"
import Actividad18B from "./components/nivel18/Actividad18B.vue"
import Actividad18C from "./components/nivel18/Actividad18C.vue"
import Actividad18D from "./components/nivel18/Actividad18D.vue"
import Actividad18E from "./components/nivel18/Actividad18E.vue"
import Actividad18F from "./components/nivel18/Actividad18F.vue"
import Actividad18G from "./components/nivel18/Actividad18G.vue"
import Actividad18H from "./components/nivel18/Actividad18H.vue"
import Actividad18I from "./components/nivel18/Actividad18I.vue"
import Actividad18J from "./components/nivel18/Actividad18J.vue"

import Test1 from "./components/nivel1/Test1.vue"
import Tutorial1 from "./components/nivel1/tutorial1.vue"
import HomeView from "./components/HomeView.vue"

import LayoutActivity10 from "./components/nivel10/LayoutActivity10.vue"
import LayoutInteractiveActivity10 from "./components/nivel10/LayoutInteractiveActivity10.vue"
import LayoutSubInteractivity10 from "./components/nivel10/LayoutSubInteractivity10.vue"

import PerfectVue from "./components/test/PerfectVue.vue"

import ItemsLayoutPermutaciones from "./components/permutaciones/ItemsLayoutPermutaciones.vue"
import ImgLayoutPermutaciones from "./components/permutaciones/ImgLayoutPermutaciones.vue"

import LayoutSelectActivity from "./components/layouts/LayoutSelectActivity.vue"

import InteractiveItemsLayoutPermutaciones from "./components/permutaciones/InteractiveItemsLayoutPermutaciones.vue"

import LayoutSudoku from "./components/sudokus/LayoutSudoku.vue"

createApp({
    components: {
        'layout-sudoku': LayoutSudoku,

        'layout-select-activity': LayoutSelectActivity,

        'interactive-items-layout-permutaciones': InteractiveItemsLayoutPermutaciones,
        'items-layout-permutaciones': ItemsLayoutPermutaciones,
        'img-layout-permutaciones': ImgLayoutPermutaciones,

        'perfect-vue': PerfectVue,

        'home-view': HomeView,
        'mati-saludo': MatiSaludo,
        'c-button': CButton,
        'bars-3-icon': Bars3Icon,
        'home-icon': HomeIcon,
        'mati-1': Mati1,
        'mati-2': Mati2,
        'motas-1': Motas1,

        'test-1': Test1,

        'layout-activity-10': LayoutActivity10,
        'layout-interactive-activity-10': LayoutInteractiveActivity10,
        'layout-sub-interactive-activity-10': LayoutSubInteractivity10,

        'tutorial-1': Tutorial1,
        'actividad-1a': Actividad1A,
        'actividad-1b': Actividad1B,
        'actividad-1c': Actividad1C,
        'actividad-1d': Actividad1D,
        'actividad-1e': Actividad1E,
        'actividad-1f': Actividad1F,
        'actividad-1g': Actividad1G,

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

        'actividad-6a': Actividad6A,
        'actividad-6b': Actividad6B,
        'actividad-6c': Actividad6C,

        'actividad-7a': Actividad7A,
        'actividad-7b': Actividad7B,
        'actividad-7c': Actividad7C,
        'actividad-7d': Actividad7D,
        'actividad-7e': Actividad7E,
        'actividad-7f': Actividad7F,

        'actividad-8a': Actividad8A,
        'actividad-8b': Actividad8B,
        'actividad-8c': Actividad8C,

        'actividad-9a': Actividad9A,
        'actividad-9b': Actividad9B,
        'actividad-9c': Actividad9C,
        'actividad-9d': Actividad9D,
        'actividad-9e': Actividad9E,
        'actividad-9f': Actividad9F,
        'actividad-9g': Actividad9G,

        'actividad-10a': Actividad10A,
        'actividad-10b': Actividad10B,
        'actividad-10c': Actividad10C,
        'actividad-10d': Actividad10D,
        'actividad-10e': Actividad10E,

        'actividad-11a': Actividad11A,
        'actividad-11b': Actividad11B,
        'actividad-11c': Actividad11C,
        'actividad-11d': Actividad11D,
        'actividad-11e': Actividad11E,
        'actividad-11f': Actividad11F,
        'actividad-11g': Actividad11G,

        'actividad-12a': Actividad12A,
        'actividad-12b': Actividad12B,
        'actividad-12c': Actividad12C,
        'actividad-12d': Actividad12D,
        'actividad-12e': Actividad12E,

        'actividad-13a': Actividad13A,
        'actividad-13b': Actividad13B,
        'actividad-13c': Actividad13C,

        'actividad-14a': Actividad14A,
        'actividad-14b': Actividad14B,

        'actividad-15a': Actividad15A,
        'actividad-15b': Actividad15B,
        'actividad-15c': Actividad15C,
        'actividad-15d': Actividad15D,
        'actividad-15e': Actividad15E,
        'actividad-15f': Actividad15F,

        'actividad-16a': Actividad16A,
        'actividad-16b': Actividad16B,
        'actividad-16c': Actividad16C,
        'actividad-16d': Actividad16D,
        'actividad-16e': Actividad16E,
        'actividad-16f': Actividad16F,

        'actividad-17a': Actividad17A,
        'actividad-17b': Actividad17B,
        'actividad-17c': Actividad17C,
        'actividad-17d': Actividad17D,
        'actividad-17e': Actividad17E,
        'actividad-17f': Actividad17F,

        'actividad-18a': Actividad18A,
        'actividad-18b': Actividad18B,
        'actividad-18c': Actividad18C,
        'actividad-18d': Actividad18D,
        'actividad-18e': Actividad18E,
        'actividad-18f': Actividad18F,
        'actividad-18g': Actividad18G,
        'actividad-18h': Actividad18H,
        'actividad-18i': Actividad18I,
        'actividad-18j': Actividad18J,
    }
}).mount("#app");
