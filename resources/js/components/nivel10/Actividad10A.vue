<script setup>
import {HomeIcon} from "@heroicons/vue/20/solid";
import {ArrowDownIcon, CheckBadgeIcon, ChevronRightIcon} from "@heroicons/vue/24/solid"
import Swal from 'sweetalert2'
import {ref} from "vue";

let content = null;
let num1 = ref(null)
let num2 = ref(null)
let num3 = ref(null)
let num4 = ref(null)
let num5 = ref(null)
let num6 = ref(null)
let num7 = ref(null)
let num8 = ref(null)
let num9 = ref(null)
let num10 = ref(null)
let num11 = ref(null)
let num12 = ref(null)
let num13 = ref(null)
let num14 = ref(null)
let num15 = ref(null)
let num16 = ref(null)
let num17 = ref(null)
let num18 = ref(null)

const props = defineProps({
    route_back: {type: String, required: true},
    route_next: {type: String, required: true},
    asset_images: {type: String, required: true},
    asset_audio: {type: String, required: true}
})

let mati = ref(`${props.asset_images}/robot/mati_act1.gif`)

const paint = (id) => {

    let sound = new Audio();
    sound.src = `${props.asset_audio}/paint.wav`;
    sound.play()

    document.getElementById(id).classList.remove('hover:bg-gray-400')
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.remove('bg-blue-900')
    document.getElementById(id).classList.remove('bg-fuchsia-300')
    document.getElementById(id).classList.remove('bg-yellow-400')

    document.getElementById(id).classList.add(`bg-${content}`);

}

const selectItem = (item) => {

    content = item

    document.getElementById('muestra').classList.remove('bg-blue-900')
    document.getElementById('muestra').classList.remove('bg-white')
    document.getElementById('muestra').classList.remove('bg-fuchsia-300')
    document.getElementById('muestra').classList.remove('bg-yellow-400')

    document.getElementById('muestra').classList.add(`bg-${content}`)

    let sound = new Audio();
    sound.src = `${props.asset_audio}/bubble.wav`;
    sound.play()
}

</script>

<template>
    <div class="min-h-full bg-space">
        <div class="md:container mx-auto">
            <div class="font-bold text-xl bg-gray-900 mx-5 px-5 py-3 rounded-b-lg shadow-2xl text-white">Matematicas -
                Nivel 10
            </div>
        </div>
        <div class="container mx-auto mb-10 rounded-md px-5">
            <div class="bg-blue-500 border-4 border-blue-600 flex-col pb-2 rounded-md shadow-2xl">
                <div class="mx-5 py-2">
                    <div>
                        <span class="font-bold">Actividad 1 -</span>
                        <span> Escribe todas las maneras diferentes de ordenar horizontalmente los colores Amarillo, fucsia y Azul</span>
                    </div>
                </div>
                <div class="mx-5 grid md:grid-cols-4 gap-5">
                    <div id="fondoMati"
                         class="bg-red-300 border-4 border-red-600 rounded-md flex items-end justify-center">
                        <div class="">
                            <img :src="mati" width="250"
                                 alt="">
                        </div>
                    </div>
                    <div
                        class="bg-white border-4 border-stone-600 rounded-md p-5 md:col-span-3 grid md:grid-cols-4 gap-5">
                        <div class="col-span-4 gap-x-10">
                            <div class="flex justify-center">
                                <div class="font-bold text-2xl">COMPLETAR</div>
                            </div>
                            <div class="border-black border-4 flex items-center justify-center p-5 grid grid-cols-3">
                                <div class="grid grid-cols-2 gap-5 mx-10">
                                    <button @click="selectItem('yellow-400')" class="flex justify-center items-center ">
                                        <div class="bg-yellow-400 border-black border-4 p-9 rounded-lg">
                                            <span class="font-MPlus text-5xl">{{ null }}</span>
                                        </div>
                                    </button>
                                    <button @click="selectItem('blue-900')" class="flex justify-center items-center ">
                                        <div class="bg-blue-900 border-black border-4 p-9 rounded-lg">
                                            <span class="font-MPlus text-5xl">{{ null }}</span>
                                        </div>
                                    </button>
                                    <button @click="selectItem('fuchsia-300')" class="flex justify-center items-center ">
                                        <div class="bg-fuchsia-300 border-black border-4 p-9 rounded-lg">
                                            <span class="font-MPlus text-5xl">{{ null }}</span>
                                        </div>
                                    </button>
                                    <button @click="selectItem(null)" class="flex justify-center items-center ">
                                        <div class="bg-white border-black border-4 p-9 rounded-lg">
                                            <span class="font-MPlus text-5xl">{{ null }}</span>
                                        </div>
                                    </button>
                                    <div class="p-10 col-span-2 border-black border-4" id="muestra">
                                        {{ null }}
                                    </div>
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <div class="grid grid-cols-2 gap-10">
                                        <div class="grid grid-cols-3">
                                            <button @click="paint('num1')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num1">
                                                <span class="font-MPlus text-3xl">{{ num1 }}</span>
                                            </button>
                                            <button @click="paint('num2')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num2">
                                                <span class="font-MPlus text-3xl">{{ num2 }}</span>
                                            </button>
                                            <button @click="paint('num3')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num3">
                                                <span class="font-MPlus text-3xl">{{ num3 }}</span>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-3">
                                            <button @click="paint('num4')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num4">
                                                <span class="font-MPlus text-3xl">{{ num4 }}</span>
                                            </button>
                                            <button @click="paint('num5')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num5">
                                                <span class="font-MPlus text-3xl">{{ num5 }}</span>
                                            </button>
                                            <button @click="paint('num6')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num6">
                                                <span class="font-MPlus text-3xl">{{ num6 }}</span>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-3">
                                            <button @click="paint('num7')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num7">
                                                <span class="font-MPlus text-3xl">{{ num7 }}</span>
                                            </button>
                                            <button @click="paint('num8')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num8">
                                                <span class="font-MPlus text-3xl">{{ num8 }}</span>
                                            </button>
                                            <button @click="paint('num9')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num9">
                                                <span class="font-MPlus text-3xl">{{ num9 }}</span>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-3">
                                            <button @click="paint('num10')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num10">
                                                <span class="font-MPlus text-3xl">{{ num10 }}</span>
                                            </button>
                                            <button @click="paint('num11')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num11">
                                                <span class="font-MPlus text-3xl">{{ num11 }}</span>
                                            </button>
                                            <button @click="paint('num12')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num12">
                                                <span class="font-MPlus text-3xl">{{ num12 }}</span>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-3">
                                            <button @click="paint('num13')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num13">
                                                <span class="font-MPlus text-3xl">{{ num13 }}</span>
                                            </button>
                                            <button @click="paint('num14')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num14">
                                                <span class="font-MPlus text-3xl">{{ num14 }}</span>
                                            </button>
                                            <button @click="paint('num15')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num15">
                                                <span class="font-MPlus text-3xl">{{ num15 }}</span>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-3">
                                            <button @click="paint('num16')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num16">
                                                <span class="font-MPlus text-3xl">{{ num16 }}</span>
                                            </button>
                                            <button @click="paint('num17')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num17">
                                                <span class="font-MPlus text-3xl">{{ num17 }}</span>
                                            </button>
                                            <button @click="paint('num18')" class="hover:bg-gray-400 border-black border-4 p-7"
                                                    id="num18">
                                                <span class="font-MPlus text-3xl">{{ num18 }}</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-5 pt-2 flex">
                        <div>
                            <a :href="props.route_back">
                                <button
                                    class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">
                                    <HomeIcon class="h-7 w-7"></HomeIcon>
                                    <span class="font-bold">&nbspVolver</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="px-5 pt-2 flex justify-end">
                        <div>
                            <a :href="props.route_next">
                                <button
                                    class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">
                                    <span class="font-bold">&nbspSiguiente</span>
                                    <ChevronRightIcon class="h-7 w-7"></ChevronRightIcon>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
