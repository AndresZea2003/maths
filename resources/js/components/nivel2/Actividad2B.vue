<script setup>
import {HomeIcon} from "@heroicons/vue/20/solid";
import {ArrowDownIcon, CheckBadgeIcon, ChevronRightIcon} from "@heroicons/vue/24/solid"
import Swal from 'sweetalert2'
import {ref} from "vue";

let color = 'white';
let figura1 = 0;
let figura2 = 0;
let figura3 = 0;

const props = defineProps({
    route_back: {type: String, required: true},
    route_next: {type: String, required: true},
    asset_images: {type: String, required: true},
    asset_audio: {type: String, required: true}
})

let mati = ref(`${props.asset_images}/robot/mati_act1.gif`)

const paint = (id) => {

    if (color === 'white') {
        Swal.fire({
            icon: 'warning',
            title: 'Falta color!',
            text: 'Selecciona un color primero',
            showConfirmButton: true,
        })
    }

    let sound = new Audio();
    sound.src = `${props.asset_audio}/paint.wav`;
    sound.play()

    document.getElementById(id).classList.remove('hover:bg-gray-400')
    document.getElementById(id).classList.remove('bg-pink-500')
    document.getElementById(id).classList.remove('bg-blue-300')
    document.getElementById(id).classList.remove('bg-blue-900')
    document.getElementById(id).classList.remove('bg-yellow-400')
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.add(`bg-${color}`);

    // Figura 1
    if (document.getElementById('caja1').classList.contains('bg-pink-500') &&
        document.getElementById('caja2').classList.contains('bg-blue-900') &&
        document.getElementById('caja3').classList.contains('bg-pink-500') &&
        document.getElementById('caja4').classList.contains('bg-blue-900') &&
        document.getElementById('caja5').classList.contains('bg-pink-500') &&
        document.getElementById('caja6').classList.contains('bg-blue-900') &&
        document.getElementById('caja7').classList.contains('bg-pink-500') &&
        document.getElementById('caja8').classList.contains('bg-blue-900') &&
        document.getElementById('caja9').classList.contains('bg-pink-500') &&
        document.getElementById('caja10').classList.contains('bg-blue-900') &&
        document.getElementById('caja11').classList.contains('bg-pink-500') &&
        document.getElementById('caja12').classList.contains('bg-blue-900')
    ) {

        if (figura1 === 0) {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/coin.wav`;
            sound.play()
            figura1++
            Swal.fire({
                icon: 'success',
                title: 'Completado!',
                text: 'Felicidades! Has completado la actividad',
                showConfirmButton: true,
            })

            mati.value = `${props.asset_images}/robot/mati.gif`
            document.getElementById('fondoMati').classList.remove('bg-red-400')
            document.getElementById('fondoMati').classList.add('bg-green-300')
        }
    }
}

const selectColor = (bg) => {
    color = bg

    document.getElementById('muestra').classList.remove('bg-blue-300')
    document.getElementById('muestra').classList.remove('bg-pink-500')
    document.getElementById('muestra').classList.remove('bg-blue-900')
    document.getElementById('muestra').classList.remove('bg-yellow-400')
    document.getElementById('muestra').classList.remove('bg-white')

    document.getElementById('muestra').classList.add(`bg-${color}`)

    let sound = new Audio();
    sound.src = `${props.asset_audio}/bubble.wav`;
    sound.play()
}

</script>

<template>
    <div class="min-h-full bg-space">
        <div class="md:container mx-auto">
            <div class="font-bold text-xl bg-gray-900 mx-5 px-5 py-3 rounded-b-lg shadow-2xl text-white">Matematicas -
                Nivel 2
            </div>
        </div>
        <div class="container mx-auto mb-10 rounded-md px-5">
            <div class="bg-orange-300 border-4 border-orange-400 flex-col pb-2 rounded-md shadow-2xl">
                <div class="mx-5 py-2">
                    <div>
                        <span class="font-bold">Actividad 2 -</span>
                        <span> Replica los colores como se muestra en la imagen izquierda</span>
                    </div>
                </div>
                <div class="mx-5 grid md:grid-cols-4 gap-5">
                    <div id="fondoMati"
                         class="bg-red-400 border-4 border-orange-600 rounded-md flex items-end justify-center">
                        <div class="">
                            <img :src="mati" width="250"
                                 alt="">
                        </div>
                    </div>
                    <div
                        class="bg-white border-4 border-orange-600 rounded-md p-5 md:col-span-3 grid md:grid-cols-4 gap-5">
                        <div class="md:col-span-3 grid gap-5">
                            <div class="bg-orange-200 border-4 border-orange-400 flex justify-center pt-5">
                                <div class="flex-col">
                                    <div class="flex justify-center">
                                        <div class="font-bold text-2xl">MUESTRA</div>
                                    </div>
                                    <div class="flex justify-center mt-5">
                                        <div class="grid md:grid-cols-12">
                                            <div class="p-6 border-black border-2 bg-pink-500">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-blue-900">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-pink-500">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-blue-900">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-pink-500">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-blue-900">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-pink-500">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-blue-900">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-pink-500">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-blue-900">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-pink-500">{{ null }}</div>
                                            <div class="p-6 border-black border-2 bg-blue-900">{{ null }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-orange-200 border-4 border-orange-400 flex justify-center pt-5">
                                <div class="flex-col">
                                    <div class="flex justify-center">
                                        <div class="font-bold text-2xl">COLOREA</div>
                                    </div>
                                    <div class="flex justify-center mt-5">
                                        <div class="grid md:grid-cols-12">
                                            <div @click="paint('caja1')" id="caja1" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja2')" id="caja2" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja3')" id="caja3" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja4')" id="caja4" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja5')" id="caja5" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja6')" id="caja6" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja7')" id="caja7" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja8')" id="caja8" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja9')" id="caja9" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja10')" id="caja10" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja11')" id="caja11" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                            <div @click="paint('caja12')" id="caja12" class="p-6 border-black border-2 bg-white cursor-cell">{{ null }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-orange-300 border-black border-4">
                            <div class="grid md:grid-cols-2 gap-5 flex">
                                <div
                                    class="bg-gray-900 col-span-2 border-4 border-orange-400 flex justify-center py-12">
                                    <div class="text-orange-600 font-bold text-2xl px-5">
                                        Planeta Naranja
                                    </div>
                                </div>
                                <div class="col-span-2 mx-1 flex justify-center">
                                    <div class="bg-pink-200 rounded-md px-2 flex">
                                        <ArrowDownIcon class="w-5"/>
                                        <div class="font-bold">PALETA DE COLORES</div>
                                        <ArrowDownIcon class="w-5"/>
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('blue-900')"
                                            class="border-2 border-black bg-blue-900 hover:bg-gray-600 rounded-full p-5">
                                        {{ null }}
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('pink-500')"
                                            class="border-2 border-black bg-pink-500 hover:bg-pink-600 rounded-full p-5">
                                        {{ null }}
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('blue-300')"
                                            class="border-2 border-black bg-blue-300 hover:bg-blue-400 rounded-full p-5">
                                        {{ null }}
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('yellow-400')"
                                            class="border-2 border-black bg-yellow-400 hover:bg-yellow-500 rounded-full p-5">
                                        {{ null }}
                                    </button>
                                </div>
                                <div id="muestra" class="border-2 border-black p-10 m-2 bg-white col-span-2"></div>
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
