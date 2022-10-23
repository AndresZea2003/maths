<script setup>
import {HomeIcon} from "@heroicons/vue/20/solid";
import {ArrowDownIcon, CheckBadgeIcon, ChevronRightIcon} from "@heroicons/vue/24/solid"
import Swal from 'sweetalert2'
import {ref} from "vue";

let color = 'white1';
let figura1 = 0;

const props = defineProps({
    route_back: {type: String, required: true},
    route_next: {type: String, required: true},
    asset_images: {type: String, required: true},
    asset_audio: {type: String, required: true}
})

let mati = ref(`${props.asset_images}/robot/mati_act1.gif`)

const paint = (id) => {

    if (color === 'white1') {
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
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.remove('bg-red-600')
    document.getElementById(id).classList.remove('bg-pink-500')
    document.getElementById(id).classList.remove('bg-yellow-400')
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.add(`bg-${color}`);

    // Figura 1
    if (document.getElementById('caja1').classList.contains('bg-white') &&
        document.getElementById('caja2').classList.contains('bg-white') &&
        document.getElementById('caja3').classList.contains('bg-white') &&
        document.getElementById('caja4').classList.contains('bg-white') &&
        document.getElementById('caja5').classList.contains('bg-white') &&
        document.getElementById('caja6').classList.contains('bg-white') &&
        document.getElementById('caja7').classList.contains('bg-white') &&
        document.getElementById('caja8').classList.contains('bg-white') &&
        document.getElementById('caja9').classList.contains('bg-white') &&
        document.getElementById('caja10').classList.contains('bg-white') &&
        document.getElementById('caja11').classList.contains('bg-white') &&
        document.getElementById('caja12').classList.contains('bg-white') &&
        document.getElementById('caja13').classList.contains('bg-white') &&
        document.getElementById('caja14').classList.contains('bg-white') &&
        document.getElementById('caja15').classList.contains('bg-white') &&
        document.getElementById('caja16').classList.contains('bg-white') &&
        document.getElementById('caja17').classList.contains('bg-white') &&
        document.getElementById('caja18').classList.contains('bg-white') &&
        document.getElementById('caja19').classList.contains('bg-white') &&
        document.getElementById('caja20').classList.contains('bg-pink-500') &&
        document.getElementById('caja21').classList.contains('bg-white') &&
        document.getElementById('caja22').classList.contains('bg-white') &&
        document.getElementById('caja23').classList.contains('bg-white') &&
        document.getElementById('caja24').classList.contains('bg-pink-500') &&
        document.getElementById('caja25').classList.contains('bg-pink-500') &&
        document.getElementById('caja26').classList.contains('bg-white') &&
        document.getElementById('caja27').classList.contains('bg-white') &&
        document.getElementById('caja28').classList.contains('bg-pink-500') &&
        document.getElementById('caja29').classList.contains('bg-pink-500') &&
        document.getElementById('caja30').classList.contains('bg-pink-500') &&
        document.getElementById('caja31').classList.contains('bg-white') &&
        document.getElementById('caja32').classList.contains('bg-pink-500') &&
        document.getElementById('caja33').classList.contains('bg-pink-500') &&
        document.getElementById('caja34').classList.contains('bg-pink-500') &&
        document.getElementById('caja35').classList.contains('bg-pink-500') &&
        document.getElementById('caja36').classList.contains('bg-pink-500') &&
        document.getElementById('caja37').classList.contains('bg-pink-500') &&
        document.getElementById('caja38').classList.contains('bg-pink-500') &&
        document.getElementById('caja39').classList.contains('bg-pink-500') &&
        document.getElementById('caja40').classList.contains('bg-pink-500')
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
            document.getElementById('fondoMati').classList.remove('bg-red-300')
            document.getElementById('fondoMati').classList.add('bg-green-300')
        }
    } else {
        document.getElementById('fig1').classList.remove('text-pink-500')
        document.getElementById('fig1').classList.add('text-gray-300')
    }
}

const selectColor = (bg) => {
    color = bg

    document.getElementById('muestra').classList.remove('bg-red-600')
    document.getElementById('muestra').classList.remove('bg-white')
    document.getElementById('muestra').classList.remove('bg-pink-500')
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
                Nivel 5
            </div>
        </div>
        <div class="container mx-auto mb-10 rounded-md px-5">
            <div class="bg-red-400 border-4 border-red-600 flex-col pb-2 rounded-md shadow-2xl">
                <div class="mx-5 py-2">
                    <div>
                        <span class="font-bold">Actividad 6 -</span>
                        <span> Replica los colores como se muestra en la imagen izquierda</span>
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
                        class="bg-white border-4 border-red-600 rounded-md p-5 md:col-span-3 grid md:grid-cols-4 gap-5">
                        <div class="col-span-3 grid md:grid-cols-2 gap-x-10">
                            <div class="flex justify-center">
                                <div class="font-bold text-2xl">MUESTRA</div>
                            </div>
                            <div class="flex justify-center">
                                <div class="font-bold text-2xl">COMPLETAR</div>
                            </div>
                            <div class="border-black border-4 flex items-center justify-center px-5">
                                <div class="flex justify-center">
                                    <div class="grid md:grid-cols-5 gap-x-5">
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>

                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>

                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>

                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>

                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>

                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 bg-pink-500 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>

                                        <div class="p-6 border-black border-2">{{ null }}</div>
                                        <div class="p-6 bg-pink-500 border-black border-2">{{ null }}</div>
                                        <div class="p-6 bg-pink-500 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>

                                        <div class="p-6 bg-pink-500 border-black border-2">{{ null }}</div>
                                        <div class="p-6 bg-pink-500 border-black border-2">{{ null }}</div>
                                        <div class="p-6 bg-pink-500 border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>
                                        <div class="p-6 border-dashed border-black border-2">{{ null }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-black border-4 flex items-center justify-center px-5">
                                <div class="flex justify-center">
                                    <div class="grid md:grid-cols-5 gap-x-5">
                                        <div @click="paint('caja1')" id="caja1"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja2')" id="caja2"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja3')" id="caja3"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja4')" id="caja4"
                                             class="border-dashed p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja5')" id="caja5"
                                             class="border-dashed p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>

                                        <div @click="paint('caja6')" id="caja6"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja7')" id="caja7"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja8')" id="caja8"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja9')" id="caja9"
                                             class="border-dashed p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja10')" id="caja10"
                                             class="border-dashed p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>

                                        <div @click="paint('caja11')" id="caja11"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja12')" id="caja12"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja13')" id="caja13"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja14')" id="caja14"
                                             class="border-dashed p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja15')" id="caja15"
                                             class="border-dashed p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>

                                        <div @click="paint('caja16')" id="caja16"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja17')" id="caja17"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja18')" id="caja18"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja19')" id="caja19"
                                             class="p-6 bg-white border-dashed border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja20')" id="caja20"
                                             class="p-6 border-dashed border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>

                                        <div @click="paint('caja21')" id="caja21"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja22')" id="caja22"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja23')" id="caja23"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja24')" id="caja24"
                                             class="p-6 border-dashed border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja25')" id="caja25"
                                             class="p-6 border-dashed border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>

                                        <div @click="paint('caja26')" id="caja26"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja27')" id="caja27"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja28')" id="caja28"
                                             class="p-6 bg-pink-500 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja29')" id="caja29"
                                             class="p-6 border-dashed border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja30')" id="caja30"
                                             class="p-6 border-dashed border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>

                                        <div @click="paint('caja31')" id="caja31"
                                             class="p-6 bg-white border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja32')" id="caja32"
                                             class="p-6 bg-pink-500 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja33')" id="caja33"
                                             class="p-6 bg-pink-500 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja34')" id="caja34"
                                             class="p-6 border-dashed border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja35')" id="caja35"
                                             class="p-6 border-dashed border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>

                                        <div @click="paint('caja36')" id="caja36"
                                             class="p-6 bg-pink-500 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja37')" id="caja37"
                                             class="p-6 bg-pink-500 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja38')" id="caja38"
                                             class="p-6 bg-pink-500 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja39')" id="caja39"
                                             class="p-6 border-dashed border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                        <div @click="paint('caja40')" id="caja40"
                                             class="p-6 border-dashed border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                null
                                            }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-red-300 border-black border-4">
                            <div class="grid grid-cols-2 gap-5 flex">
                                <div class="bg-gray-900 col-span-2 border-4 border-red-400 flex justify-center py-12">
                                    <div class="text-red-600 font-bold text-2xl">
                                        Planeta Rojo
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
                                    <button @click="selectColor('pink-500')"
                                            class="border-2 border-black bg-pink-500 hover:bg-pink-600 rounded-full p-5">
                                        {{ null }}
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('white')"
                                            class="border-2 border-black bg-white hover:bg-gray-200 rounded-full p-5">
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
