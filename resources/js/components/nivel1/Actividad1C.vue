<!--<script setup>-->
<!--import {HomeIcon} from "@heroicons/vue/20/solid";-->
<!--import {ArrowDownIcon, CheckBadgeIcon, ChevronRightIcon} from "@heroicons/vue/24/solid"-->
<!--import Swal from 'sweetalert2'-->
<!--import {ref} from "vue";-->

<!--let color = 'white';-->
<!--let figura1 = 0;-->

<!--const props = defineProps({-->
<!--    route_back: {type: String, required: true},-->
<!--    route_next: {type: String, required: true},-->
<!--    asset_images: {type: String, required: true},-->
<!--    asset_audio: {type: String, required: true}-->
<!--})-->

<!--let mati = ref(`${props.asset_images}/robot/mati_act1.gif`)-->

<!--const paint = (id) => {-->

<!--    if (color === 'white') {-->
<!--        Swal.fire({-->
<!--            icon: 'warning',-->
<!--            title: 'Falta color!',-->
<!--            text: 'Selecciona un color primero',-->
<!--            showConfirmButton: true,-->
<!--        })-->
<!--    }-->

<!--    let sound = new Audio();-->
<!--    sound.src = `${props.asset_audio}/paint.wav`;-->
<!--    sound.play()-->

<!--    document.getElementById(id).classList.remove('hover:bg-gray-400')-->
<!--    document.getElementById(id).classList.remove('bg-red-600')-->
<!--    document.getElementById(id).classList.remove('bg-gray-700')-->
<!--    document.getElementById(id).classList.remove('bg-yellow-400')-->
<!--    document.getElementById(id).classList.remove('bg-white')-->
<!--    document.getElementById(id).classList.add(`bg-${color}`);-->

<!--    // Figura 1-->
<!--    if (document.getElementById('caja1').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja2').classList.contains('bg-yellow-400') &&-->
<!--        document.getElementById('caja3').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja4').classList.contains('bg-yellow-400') &&-->

<!--        document.getElementById('caja5').classList.contains('bg-yellow-400') &&-->
<!--        document.getElementById('caja6').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja7').classList.contains('bg-yellow-400') &&-->
<!--        document.getElementById('caja8').classList.contains('bg-red-600') &&-->

<!--        document.getElementById('caja9').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja10').classList.contains('bg-yellow-400') &&-->
<!--        document.getElementById('caja11').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja12').classList.contains('bg-yellow-400') &&-->

<!--        document.getElementById('caja13').classList.contains('bg-yellow-400') &&-->
<!--        document.getElementById('caja14').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja15').classList.contains('bg-yellow-400') &&-->
<!--        document.getElementById('caja16').classList.contains('bg-red-600')-->
<!--    ) {-->

<!--        document.getElementById('fig1').classList.remove('text-gray-300')-->
<!--        document.getElementById('fig1').classList.add('text-green-600')-->

<!--        if (figura1 === 0) {-->
<!--            let sound = new Audio();-->
<!--            sound.src = `${props.asset_audio}/coin.wav`;-->
<!--            sound.play()-->
<!--            figura1++-->
<!--            Swal.fire({-->
<!--                icon: 'success',-->
<!--                title: 'Completado!',-->
<!--                text: 'Felicidades! Has completado la actividad',-->
<!--                showConfirmButton: true,-->
<!--            })-->

<!--            mati.value = `${props.asset_images}/robot/mati.gif`-->
<!--            document.getElementById('fondoMati').classList.remove('bg-red-400')-->
<!--            document.getElementById('fondoMati').classList.add('bg-green-300')-->
<!--        }-->
<!--    } else {-->
<!--        document.getElementById('fig1').classList.remove('text-green-600')-->
<!--        document.getElementById('fig1').classList.add('text-gray-300')-->
<!--    }-->
<!--}-->

<!--const selectColor = (bg) => {-->
<!--    color = bg-->

<!--    document.getElementById('muestra').classList.remove('bg-blue-600')-->
<!--    document.getElementById('muestra').classList.remove('bg-red-600')-->
<!--    document.getElementById('muestra').classList.remove('bg-green-600')-->
<!--    document.getElementById('muestra').classList.remove('bg-green-600')-->
<!--    document.getElementById('muestra').classList.remove('bg-white')-->

<!--    document.getElementById('muestra').classList.add(`bg-${color}`)-->

<!--    let sound = new Audio();-->
<!--    sound.src = `${props.asset_audio}/bubble.wav`;-->
<!--    sound.play()-->
<!--}-->

<!--</script>-->

<!--<template>-->
<!--    <div class="min-h-full bg-space">-->
<!--        <div class="md:container mx-auto">-->
<!--            <div class="font-bold text-xl bg-gray-900 mx-5 px-5 py-3 rounded-b-lg shadow-2xl text-white">Matematicas - -->
<!--                Nivel 1-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="container mx-auto mb-10 rounded-md px-5">-->
<!--            <div class="bg-blue-400 border-4 border-blue-600 flex-col pb-2 rounded-md shadow-2xl">-->
<!--                <div class="mx-5 py-2">-->
<!--                    <div>-->
<!--                        <span class="font-bold">Actividad 3 -</span>-->
<!--                        <span> Replica los colores como se muestra en la imagen izquierda</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="mx-5 grid md:grid-cols-4 gap-5">-->
<!--                    <div id="fondoMati"-->
<!--                         class="bg-red-400 border-4 border-blue-600 rounded-md flex items-end justify-center">-->
<!--                        <div class="">-->
<!--                            <img :src="mati" width="250"-->
<!--                                 alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div-->
<!--                        class="bg-white border-4 border-blue-600 rounded-md p-5 md:col-span-3 grid md:grid-cols-4">-->
<!--                        <div class="flex items-center justify-center my-10 ml-10">-->
<!--                            <div class="grid grid-cols-4 rotate-45">-->
<!--                                <div class="p-5 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-yellow-400">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-yellow-400">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-yellow-400">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-yellow-400">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-yellow-400">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-yellow-400">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-yellow-400">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-yellow-400">{{ null }}</div>-->
<!--                                <div class="p-5 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="flex justify-center items-center">-->
<!--                            <div>-->
<!--                                <div class="flex justify-center">-->
<!--                                    <div class="font-bold text-2xl">Figura 1</div>-->
<!--                                </div>-->
<!--                                <div id="fig1" class="flex justify-center text-gray-300">-->
<!--                                    <CheckBadgeIcon class="w-20"/>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="flex items-center justify-center sm:col-span-1 col-span-3 my-10 mr-10">-->
<!--                            <div class="grid grid-cols-4 rotate-45">-->
<!--                                <div @click="paint('caja1')" id="caja1"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja2')" id="caja2"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja3')" id="caja3"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja4')" id="caja4"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja5')" id="caja5"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja6')" id="caja6"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja7')" id="caja7"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja8')" id="caja8"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja9')" id="caja9"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja10')" id="caja10"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja11')" id="caja11"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja12')" id="caja12"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja13')" id="caja13"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja14')" id="caja14"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja15')" id="caja15"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                                <div @click="paint('caja16')" id="caja16"-->
<!--                                     class="p-5 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="bg-blue-300 border-black border-4">-->
<!--                            <div class="grid grid-cols-2 gap-5 flex">-->
<!--                                <div class="bg-gray-900 col-span-2 border-4 border-blue-400 flex justify-center p-12">-->
<!--                                    <div class="text-blue-600 font-bold text-2xl">-->
<!--                                        Planeta Azul-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class=" col-span-2 mx-1 flex justify-center">-->
<!--                                    <div class="bg-pink-200 rounded-md px-2 flex">-->
<!--                                        <ArrowDownIcon class="w-5"/>-->
<!--                                        <div class="font-bold">PALETA DE COLORES</div>-->
<!--                                        <ArrowDownIcon class="w-5"/>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="flex justify-center">-->
<!--                                    <button @click="selectColor('red-600')"-->
<!--                                            class="border-2 border-black bg-red-600 hover:bg-red-500 rounded-full p-5">-->
<!--                                        {{ null }}-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                <div class="flex justify-center">-->
<!--                                    <button @click="selectColor('yellow-400')"-->
<!--                                            class="border-2 border-black bg-yellow-400 hover:bg-green-500 rounded-full p-5">-->
<!--                                        {{ null }}-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                <div id="muestra" class="border-2 border-black p-10 m-2 bg-white col-span-2"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="grid grid-cols-2">-->
<!--                    <div class="px-5 pt-2 flex">-->
<!--                        <div>-->
<!--                            <a :href="props.route_back">-->
<!--                                <button-->
<!--                                    class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">-->
<!--                                    <HomeIcon class="h-7 w-7"></HomeIcon>-->
<!--                                    <span class="font-bold">&nbspVolver</span>-->
<!--                                </button>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="px-5 pt-2 flex justify-end">-->
<!--                        <div>-->
<!--                            <a :href="props.route_next">-->
<!--                                <button-->
<!--                                    class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">-->
<!--                                    <span class="font-bold">&nbspSiguiente</span>-->
<!--                                    <ChevronRightIcon class="h-7 w-7"></ChevronRightIcon>-->
<!--                                </button>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->

<!--<script setup>-->
<!--import {HomeIcon} from "@heroicons/vue/20/solid";-->
<!--import {ArrowDownIcon, CheckBadgeIcon, ChevronRightIcon} from "@heroicons/vue/24/solid"-->
<!--import Swal from 'sweetalert2'-->
<!--import {ref} from "vue";-->

<!--let color = 'white';-->
<!--let figura1 = 0;-->
<!--let figura2 = 0;-->
<!--let figura3 = 0;-->

<!--const props = defineProps({-->
<!--    route_back: {type: String, required: true},-->
<!--    route_next: {type: String, required: true},-->
<!--    asset_images: {type: String, required: true},-->
<!--    asset_audio: {type: String, required: true}-->
<!--})-->

<!--let mati = ref(`${props.asset_images}/robot/mati_act1.gif`)-->

<!--const paint = (id) => {-->

<!--    if (color === 'white') {-->
<!--        Swal.fire({-->
<!--            icon: 'warning',-->
<!--            title: 'Falta color!',-->
<!--            text: 'Selecciona un color primero',-->
<!--            showConfirmButton: true,-->
<!--        })-->
<!--    }-->

<!--    let sound = new Audio();-->
<!--    sound.src = `${props.asset_audio}/paint.wav`;-->
<!--    sound.play()-->

<!--    document.getElementById(id).classList.remove('hover:bg-gray-400')-->
<!--    document.getElementById(id).classList.remove('bg-red-600')-->
<!--    document.getElementById(id).classList.remove('bg-gray-700')-->
<!--    document.getElementById(id).classList.remove('bg-green-600')-->
<!--    document.getElementById(id).classList.remove('bg-green-600')-->
<!--    document.getElementById(id).classList.remove('bg-white')-->
<!--    document.getElementById(id).classList.add(`bg-${color}`);-->

<!--    // Figura 1-->
<!--    if (document.getElementById('caja1').classList.contains('bg-green-600') &&-->
<!--        document.getElementById('caja2').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja3').classList.contains('bg-gray-700') &&-->

<!--        document.getElementById('caja4').classList.contains('bg-gray-700') &&-->
<!--        document.getElementById('caja5').classList.contains('bg-green-600') &&-->
<!--        document.getElementById('caja6').classList.contains('bg-red-600') &&-->

<!--        document.getElementById('caja7').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja8').classList.contains('bg-gray-700') &&-->
<!--        document.getElementById('caja9').classList.contains('bg-green-600')-->
<!--    ) {-->

<!--        document.getElementById('fig1').classList.remove('text-gray-300')-->
<!--        document.getElementById('fig1').classList.add('text-green-600')-->

<!--        if (figura1 === 0) {-->
<!--            let sound = new Audio();-->
<!--            sound.src = `${props.asset_audio}/coin.wav`;-->
<!--            sound.play()-->
<!--            figura1++-->
<!--            Swal.fire({-->
<!--                icon: 'success',-->
<!--                title: 'Figura 1 Completada',-->
<!--                showConfirmButton: false,-->
<!--                timer: 1200-->
<!--            })-->
<!--        }-->

<!--        if (figura1 === 1 && figura2 === 1 && figura3 === 1) {-->
<!--            Swal.fire({-->
<!--                icon: 'success',-->
<!--                title: 'Completado!',-->
<!--                text: 'Felicidades! Has completado la actividad',-->
<!--                showConfirmButton: true,-->
<!--            })-->

<!--            mati.value = `${props.asset_images}/robot/mati.gif`-->
<!--            document.getElementById('fondoMati').classList.remove('bg-red-400')-->
<!--            document.getElementById('fondoMati').classList.add('bg-green-300')-->
<!--        }-->
<!--    } else {-->
<!--        document.getElementById('fig1').classList.remove('text-green-600')-->
<!--        document.getElementById('fig1').classList.add('text-gray-300')-->
<!--    }-->

<!--    // Figura 2-->

<!--    if (document.getElementById('caja10').classList.contains('bg-green-600') &&-->
<!--        document.getElementById('caja11').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja12').classList.contains('bg-gray-700') &&-->

<!--        document.getElementById('caja13').classList.contains('bg-gray-700') &&-->
<!--        document.getElementById('caja14').classList.contains('bg-green-600') &&-->
<!--        document.getElementById('caja15').classList.contains('bg-red-600') &&-->

<!--        document.getElementById('caja16').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja17').classList.contains('bg-gray-700') &&-->
<!--        document.getElementById('caja18').classList.contains('bg-green-600')-->
<!--    ) {-->

<!--        document.getElementById('fig2').classList.remove('text-gray-300')-->
<!--        document.getElementById('fig2').classList.add('text-green-600')-->

<!--        if (figura2 === 0) {-->
<!--            let sound = new Audio();-->
<!--            sound.src = `${props.asset_audio}/coin.wav`;-->
<!--            sound.play()-->
<!--            figura2++-->
<!--            Swal.fire({-->
<!--                icon: 'success',-->
<!--                title: 'Figura 2 Completada',-->
<!--                showConfirmButton: false,-->
<!--                timer: 1200-->
<!--            })-->
<!--        }-->

<!--        if (figura1 === 1 && figura2 === 1 && figura3 === 1) {-->
<!--            Swal.fire({-->
<!--                icon: 'success',-->
<!--                title: 'Completado!',-->
<!--                text: 'Felicidades! Has completado la actividad',-->
<!--                showConfirmButton: true,-->
<!--            })-->

<!--            mati.value = `${props.asset_images}/robot/mati.gif`-->
<!--            document.getElementById('fondoMati').classList.remove('bg-red-400')-->
<!--            document.getElementById('fondoMati').classList.add('bg-green-300')-->
<!--        }-->
<!--    } else {-->
<!--        document.getElementById('fig2').classList.remove('text-green-600')-->
<!--        document.getElementById('fig2').classList.add('text-gray-300')-->
<!--    }-->

<!--    // Figura 3-->
<!--    if (document.getElementById('caja19').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja20').classList.contains('bg-gray-700') &&-->
<!--        document.getElementById('caja21').classList.contains('bg-green-600') &&-->

<!--        document.getElementById('caja22').classList.contains('bg-gray-700') &&-->
<!--        document.getElementById('caja23').classList.contains('bg-green-600') &&-->
<!--        document.getElementById('caja24').classList.contains('bg-red-600') &&-->

<!--        document.getElementById('caja25').classList.contains('bg-green-600') &&-->
<!--        document.getElementById('caja26').classList.contains('bg-red-600') &&-->
<!--        document.getElementById('caja27').classList.contains('bg-gray-700')-->
<!--    ) {-->

<!--        document.getElementById('fig3').classList.remove('text-gray-300')-->
<!--        document.getElementById('fig3').classList.add('text-green-600')-->

<!--        if (figura3 === 0) {-->
<!--            let sound = new Audio();-->
<!--            sound.src = `${props.asset_audio}/coin.wav`;-->
<!--            sound.play()-->
<!--            figura3++-->
<!--            Swal.fire({-->
<!--                icon: 'success',-->
<!--                title: 'Figura 3 Completada',-->
<!--                showConfirmButton: false,-->
<!--                timer: 1200-->
<!--            })-->
<!--        }-->

<!--        if (figura1 === 1 && figura2 === 1 && figura3 === 1) {-->
<!--            Swal.fire({-->
<!--                icon: 'success',-->
<!--                title: 'Completado!',-->
<!--                text: 'Felicidades! Has completado la actividad',-->
<!--                showConfirmButton: true,-->
<!--            })-->
<!--            let sound = new Audio();-->
<!--            sound.src = "http://maths.test/audio/voz1/win1.mp3";-->
<!--            sound.play()-->

<!--            mati.value = `${props.asset_images}/robot/mati.gif`-->
<!--            document.getElementById('fondoMati').classList.remove('bg-red-400')-->
<!--            document.getElementById('fondoMati').classList.add('bg-green-300')-->
<!--        }-->
<!--    } else {-->
<!--        document.getElementById('fig3').classList.remove('text-green-600')-->
<!--        document.getElementById('fig3').classList.add('text-gray-300')-->
<!--    }-->
<!--}-->

<!--const selectColor = (bg) => {-->
<!--    color = bg-->

<!--    document.getElementById('muestra').classList.remove('bg-blue-600')-->
<!--    document.getElementById('muestra').classList.remove('bg-red-600')-->
<!--    document.getElementById('muestra').classList.remove('bg-green-600')-->
<!--    document.getElementById('muestra').classList.remove('bg-green-600')-->
<!--    document.getElementById('muestra').classList.remove('bg-white')-->

<!--    document.getElementById('muestra').classList.add(`bg-${color}`)-->

<!--    let sound = new Audio();-->
<!--    sound.src = `${props.asset_audio}/bubble.wav`;-->
<!--    sound.play()-->
<!--}-->

<!--</script>-->

<!--<template>-->
<!--    <div class="min-h-full bg-space">-->
<!--        <div class="md:container mx-auto">-->
<!--            <div class="font-bold text-xl bg-gray-900 mx-5 px-5 py-3 rounded-b-lg shadow-2xl text-white">Matematicas - -->
<!--                Nivel 1-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="container mx-auto mb-10 rounded-md px-5">-->
<!--            <div class="bg-blue-400 border-4 border-blue-600 flex-col pb-2 rounded-md shadow-2xl">-->
<!--                <div class="mx-5 py-2">-->
<!--                    <div>-->
<!--                        <span class="font-bold">Actividad 2 -</span>-->
<!--                        <span> Replica los colores como se muestra en la imagen izquierda</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="mx-5 grid md:grid-cols-4 gap-5">-->
<!--                    <div id="fondoMati"-->
<!--                         class="bg-red-400 border-4 border-blue-600 rounded-md flex items-end justify-center">-->
<!--                        <div class="">-->
<!--                            <img :src="mati" width="250"-->
<!--                                 alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div-->
<!--                        class="bg-white border-4 border-blue-600 rounded-md p-5 md:col-span-3 grid md:grid-cols-4">-->
<!--                        <div>-->
<!--                            <div class="flex justify-center">-->
<!--                                <div class="flex-col grid gap-5">-->
<!--                                    <div class="grid grid-cols-3">-->
<!--                                        <div class="p-4 border-black border-2 bg-green-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-gray-700">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-gray-700">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-green-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-gray-700">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-green-600">{{ null }}</div>-->
<!--                                    </div>-->
<!--                                    <div class="grid grid-cols-3 rotate-45 my-5">-->
<!--                                        <div class="p-4 border-black border-2 bg-green-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-gray-700">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-gray-700">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-green-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-gray-700">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-green-600">{{ null }}</div>-->
<!--                                    </div>-->
<!--                                    <div class="grid grid-cols-3 rotate-45 my-5">-->
<!--                                        <div class="p-4 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-gray-700">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-green-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-gray-700">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-green-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-green-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-red-600">{{ null }}</div>-->
<!--                                        <div class="p-4 border-black border-2 bg-gray-700">{{ null }}</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="grid grid-cols-1">-->
<!--                            <div class="flex justify-center">-->
<!--                                <div>-->
<!--                                    <div class="flex justify-center">-->
<!--                                        <div class="font-bold text-2xl">Figura 1</div>-->
<!--                                    </div>-->
<!--                                    <div id="fig1" class="flex justify-center text-gray-300">-->
<!--                                        <CheckBadgeIcon class="w-20"/>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="flex justify-center">-->
<!--                                <div>-->
<!--                                    <div class="flex justify-center">-->
<!--                                        <div class="font-bold text-2xl">Figura 2</div>-->
<!--                                    </div>-->
<!--                                    <div id="fig2" class="flex justify-center text-gray-300">-->
<!--                                        <CheckBadgeIcon class="w-20"/>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="flex justify-center">-->
<!--                                <div>-->
<!--                                    <div class="flex justify-center">-->
<!--                                        <div class="font-bold text-2xl">Figura 3</div>-->
<!--                                    </div>-->
<!--                                    <div id="fig3" class="flex justify-center text-gray-300">-->
<!--                                        <CheckBadgeIcon class="w-20"/>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="flex justify-center ">-->
<!--                            <div class="flex-col grid gap-5">-->
<!--                                <div>-->
<!--                                    <div class="grid grid-cols-3">-->
<!--                                        <div @click="paint('caja1')" id="caja1"-->
<!--                                             class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                        </div>-->
<!--                                        <div @click="paint('caja2')" id="caja2"-->
<!--                                             class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                        </div>-->
<!--                                        <div @click="paint('caja3')" id="caja3"-->
<!--                                             class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                        </div>-->
<!--                                        <div @click="paint('caja4')" id="caja4"-->
<!--                                             class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                        </div>-->
<!--                                        <div @click="paint('caja5')" id="caja5"-->
<!--                                             class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                        </div>-->
<!--                                        <div @click="paint('caja6')" id="caja6"-->
<!--                                             class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                        </div>-->
<!--                                        <div @click="paint('caja7')" id="caja7"-->
<!--                                             class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                        </div>-->
<!--                                        <div @click="paint('caja8')" id="caja8"-->
<!--                                             class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                        </div>-->
<!--                                        <div @click="paint('caja9')" id="caja9"-->
<!--                                             class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <div class="grid grid-cols-3 rotate-45 my-5">-->
<!--                                        <div @click="paint('caja10')" id="caja10" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja11')" id="caja11" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja12')" id="caja12" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja13')" id="caja13" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja14')" id="caja14" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja15')" id="caja15" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja16')" id="caja16" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja17')" id="caja17" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja18')" id="caja18" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div>-->
<!--                                    <div class="grid grid-cols-3 rotate-45 my-5">-->
<!--                                        <div @click="paint('caja19')" id="caja19" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja20')" id="caja20" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja21')" id="caja21" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja22')" id="caja22" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja23')" id="caja23" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja24')" id="caja24" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja25')" id="caja25" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja26')" id="caja26" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                        <div @click="paint('caja27')" id="caja27" class="p-4 border-black border-2 cursor-cell hover:bg-gray-400">{{ null }}</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="bg-blue-300 border-black border-4">-->
<!--                            <div class="grid grid-cols-3 gap-5 flex">-->
<!--                                <div class="bg-gray-900 col-span-3 border-4 border-blue-400 flex justify-center p-12">-->
<!--                                    <div class="text-blue-600 font-bold text-2xl">-->
<!--                                        Planeta Azul-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class=" col-span-3 mx-1 flex justify-center">-->
<!--                                    <div class="bg-pink-200 rounded-md px-2 flex">-->
<!--                                        <ArrowDownIcon class="w-5"/>-->
<!--                                        <div class="font-bold">PALETA DE COLORES</div>-->
<!--                                        <ArrowDownIcon class="w-5"/>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="flex justify-center">-->
<!--                                    <button @click="selectColor('gray-700')"-->
<!--                                            class="border-2 border-black bg-gray-700 hover:bg-gray-600 rounded-full p-5">-->
<!--                                        {{ null }}-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                <div class="flex justify-center">-->
<!--                                    <button @click="selectColor('red-600')"-->
<!--                                            class="border-2 border-black bg-red-600 hover:bg-red-500 rounded-full p-5">-->
<!--                                        {{ null }}-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                <div class="flex justify-center">-->
<!--                                    <button @click="selectColor('green-600')"-->
<!--                                            class="border-2 border-black bg-green-600 hover:bg-green-500 rounded-full p-5">-->
<!--                                        {{ null }}-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                <div id="muestra" class="border-2 border-black p-10 m-2 bg-white col-span-3"></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="grid grid-cols-2">-->
<!--                    <div class="px-5 pt-2 flex">-->
<!--                        <div>-->
<!--                            <a :href="props.route_back">-->
<!--                                <button-->
<!--                                    class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">-->
<!--                                    <HomeIcon class="h-7 w-7"></HomeIcon>-->
<!--                                    <span class="font-bold">&nbspVolver</span>-->
<!--                                </button>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="px-5 pt-2 flex justify-end">-->
<!--                        <div>-->
<!--                            <a :href="props.route_next">-->
<!--                                <button-->
<!--                                    class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">-->
<!--                                    <span class="font-bold">&nbspSiguiente</span>-->
<!--                                    <ChevronRightIcon class="h-7 w-7"></ChevronRightIcon>-->
<!--                                </button>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</template>-->


<script setup>
import {HomeIcon} from "@heroicons/vue/20/solid";
import {ArrowDownIcon, CheckBadgeIcon, ChevronRightIcon} from "@heroicons/vue/24/solid"
import Swal from 'sweetalert2'
import {ref, watch} from "vue";

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

let colorSelected = ref(0);

let talk = ref(false);

let ShowEraser = ref(false);

let eraser = ref(`${props.asset_images}/herramientas/eraser.png`)
let mati = ref(`${props.asset_images}/robot/mati.png`)
let widthMati = ref(150);

let selectFig1 = ref('');
let selectFig2 = ref('');
let selectFig3 = ref('');

let indexSquare = ref('');

let indexSquareFig = ref('');

const myTimeout = setTimeout(initialAudio, 2000);

let color1Error = ref(false);
let color2Error = ref(false);
let color3Error = ref(false);
let color4Error = ref(false);

let colorPainted1 = ref(false);
let colorPainted2 = ref(false);
let colorPainted3 = ref(false);
let colorPainted4 = ref(false);

function initialAudio() {
    if (talk.value === false) {
        talk.value = true;
        showIndexSquare();
        mati.value = `${props.asset_images}/robot/matiQuieto.gif`;
        let sound = new Audio();
        sound.src = `${props.asset_audio}/voz1/Observa-que-el-cuadrado-de-la-izquierda.m4a`;
        sound.play()
        setTimeout(function () {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Azul.m4a`;
            sound.play()
        }, 4000)
        setTimeout(function () {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Verde.m4a`;
            sound.play()
        }, 5500)
        setTimeout(function () {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Amarillo.m4a`;
            sound.play()
        }, 7000)
        setTimeout(function () {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/y-rojo.m4a`;
            sound.play()
        }, 8500)
        setTimeout(function () {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/Pinta-de-forma-idéntica-el-cuadrado-derecha.m4a`;
            sound.play()
        }, 10000)
        widthMati.value = 160;
        setTimeout(resetMati, 15000);
    }
}

function showIndexSquare() {
    indexSquareFig.value = 'colors';
    setTimeout(function () {
        indexSquare.value = 'border-black border-2 p-12 bg-blue-600 shadow-2xl shadow-blue-500';
    }, 4000);
    setTimeout(function () {
        indexSquare.value = 'border-black border-2 p-12 bg-green-600 shadow-2xl shadow-green-500';
    }, 5500);
    setTimeout(function () {
        indexSquare.value = 'border-black border-2 p-12 bg-yellow-400 shadow-2xl shadow-yellow-500';
    }, 7000);
    setTimeout(function () {
        indexSquare.value = 'border-black border-2 p-12 bg-red-600 shadow-2xl shadow-red-500';
    }, 8500);
    setTimeout(function () {
        indexSquare.value = '';
    }, 10000);
}

function helpAudio() {
    if (talk.value === false) {
        helpFigures()
        talk.value = true;
        mati.value = `${props.asset_images}/robot/matiQuieto.gif`;
        let sound = new Audio();
        sound.src = `${props.asset_audio}/voz1/ayuda-nivel1.m4a`;
        sound.play()
        widthMati.value = 160;
        setTimeout(resetMati, 4000);
    }
}

function helpFigures() {
    selectFig1.value = 'bg-rose-300 py-5 rounded-md animate-pulse';
    setTimeout(function () {
        selectFig1.value = '';
    }, 2000);
    setTimeout(function () {
        selectFig2.value = 'animate-pulse arrow';
        document.getElementById('arrow').setAttribute('fill', 'green')
    });
    setTimeout(function () {
        selectFig3.value = 'bg-rose-300 py-5 rounded-md animate-pulse';
    }, 2000);
}

const resetMati = () => {
    talk.value = false;
    selectFig1.value = '';
    selectFig2.value = '';
    selectFig3.value = '';
    indexSquare.value = '';
    document.getElementById('arrow').setAttribute('fill', 'black')
    mati.value = `${props.asset_images}/robot/mati.png`;
    widthMati.value = 150;
}

const paint = (id) => {

    if (color === 'white' && colorSelected.value < 1) {
        let sound = new Audio();
        sound.src = `${props.asset_audio}/wood.wav`;
        sound.play()
        Swal.fire({
            icon: 'warning',
            title: 'Falta color!',
            text: 'Selecciona un color primero',
            showConfirmButton: true,
        })
        return
    }

    document.getElementById(id).classList.remove('hover:bg-gray-400')
    document.getElementById(id).classList.remove('bg-red-600')
    document.getElementById(id).classList.remove('bg-blue-600')
    document.getElementById(id).classList.remove('bg-green-600')
    document.getElementById(id).classList.remove('bg-yellow-400')
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.add(`bg-${color}`);

    // Borrador

    watch([color1Error, color2Error, color3Error, color4Error], ([c1, c2, c3, c4]) => {
        ShowEraser.value = c1 || c2 || c3 || c4
    })

    function verifyBox(boxNum, classToFind, classToAdd, classToRemove, classToRemove2, colorPainted, colorError) {
        const box = document.getElementById(`caja${boxNum}`);

        if (box.classList.contains('bg-white')) {
            colorError.value = false;
            colorPainted.value = false;
            box.classList.remove(classToRemove, classToRemove2);
            box.classList.add(classToAdd);
            let sound = new Audio();
            sound.src = `${props.asset_audio}/eraser.mp3`;
            sound.play()
        } else {
            if (box.classList.contains(classToFind)) {
                box.classList.remove(classToRemove, classToRemove2);
                box.classList.add(classToAdd);
                colorError.value = false;
                if (!colorPainted.value) {
                    animateBrush(`${props.asset_audio}/soapBubble.wav`, 1000, 'brush', '#16a34a');
                }
                colorPainted.value = true;
            } else if (!box.classList.contains(classToFind)) {
                box.classList.remove(classToAdd);
                box.classList.add(classToRemove, classToRemove2);
                colorPainted.value = false;
                if (!colorError.value) {
                    animateBrush(`${props.asset_audio}/wood.wav`, 900, 'brush-fail', 'red');
                } else {
                    let sound = new Audio();
                    sound.src = `${props.asset_audio}/paint.wav`;
                    sound.play()
                }
                colorError.value = true;
            }
        }
    }

    function animateBrush(soundSrc, time, animateClass, BrushColor) {
        document.getElementById('brush').classList.add(animateClass);
        document.getElementById('brush').style.fill = BrushColor;
        setTimeout(() => {
            document.getElementById('brush').classList.remove(animateClass);
            document.getElementById('brush').style.fill = '#78716c';
        }, time);
        const sound = new Audio();
        sound.src = soundSrc;
        sound.play();
    }

    const boxes = {
        'caja1': {
            num: 1,
            classToFind: 'bg-blue-600',
            classToAdd: 'p-12',
            classToRemove: 'py-8',
            classToRemove2: 'px-5',
            colorPainted: colorPainted1,
            colorError: color1Error
        },
        'caja2': {
            num: 2,
            classToFind: 'bg-green-600',
            classToAdd: 'p-12',
            classToRemove: 'py-8',
            classToRemove2: 'px-5',
            colorPainted: colorPainted2,
            colorError: color2Error
        },
        'caja3': {
            num: 3,
            classToFind: 'bg-yellow-400',
            classToAdd: 'p-12',
            classToRemove: 'py-8',
            classToRemove2: 'px-5',
            colorPainted: colorPainted3,
            colorError: color3Error
        },
        'caja4': {
            num: 4,
            classToFind: 'bg-red-600',
            classToAdd: 'p-12',
            classToRemove: 'py-8',
            classToRemove2: 'px-5',
            colorPainted: colorPainted4,
            colorError: color4Error
        }
    };

    if (id in boxes) {
        const {num, classToFind, classToAdd, classToRemove, classToRemove2, colorPainted, colorError} = boxes[id];
        verifyBox(num, classToFind, classToAdd, classToRemove, classToRemove2, colorPainted, colorError);
    }

    // Completar figura
    if (document.getElementById('caja1').classList.contains('bg-blue-600') &&
        document.getElementById('caja2').classList.contains('bg-green-600') &&
        document.getElementById('caja3').classList.contains('bg-yellow-400') &&
        document.getElementById('caja4').classList.contains('bg-red-600')
    ) {
        let sound = new Audio();
        sound.src = `${props.asset_audio}/instantWin.wav`;
        sound.play()
        Swal.fire({
            icon: 'success',
            title: 'Completado!',
            text: 'Felicidades! Has completado la actividad',
            showConfirmButton: true,
        })
    }
}

const selectColor = (bg) => {
    color = bg
    colorSelected.value++
    document.getElementById('muestra').classList.remove('bg-blue-600', 'bg-red-600', 'bg-green-600', 'bg-yellow-400', 'bg-white');
    document.getElementById('muestra').classList.add(`bg-${bg}`);
    const colors = {
        'blue-600': '#2563eb',
        'red-600': '#dc2626',
        'green-600': '#16a34a',
        'yellow-400': '#facc15',
        'white': '#78716c'
    };

    const brush = document.getElementById('brush');
    brush.style.fill = colors[bg] || colors['white'];

    let sound = new Audio();
    sound.src = `${props.asset_audio}/bubble.wav`;
    sound.play();
}
</script>

<template>
    <div class="min-h-full bg-space">
        <div class="md:container mx-auto">
            <div class="font-bold text-xl bg-dominos mx-5 px-5 py-3 rounded-b-lg shadow-2xl text-white">Matematicas -
                Nivel 1
            </div>
        </div>
        <div class="container mx-auto mb-10 rounded-md px-5 mt-5">
            <div class="bg-circles-blue border-4 border-blue-600 flex-col pb-2 rounded-md shadow-2xl">
                <div class="mx-5 py-2 flex justify-between">
                    <div>
                        <span class="font-bold">Actividad 3 -</span>
                        <span> Replica los colores como se muestra en la imagen izquierda</span>
                    </div>
                </div>
                <div class="mx-5 grid md:grid-cols-5 gap-5">
                    <div id="fondoMati"
                         class="bg-red-400 border-4 border-blue-600 rounded-md flex items-end justify-center">
                        <div class="">

                            <div v-if="indexSquareFig === 'colors'" class="flex justify-center items-center mb-16">
                                <div :class="`${indexSquare}`">
                                    {{ null }}
                                </div>
                            </div>

                            <div v-if="indexSquareFig === 'eye'" class="flex justify-center items-center mb-16">
                                <div class="border-black border-2 p-2 bg-gray-200">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="90" height="90"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/>
                                    </svg>
                                </div>
                            </div>

                            <div v-if="indexSquareFig === 'paint'" class="flex justify-center items-center mb-16">
                                <div class="border-black border-2 p-2 bg-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M18.58 0c-1.234 0-2.377.616-3.056 1.649-.897 1.37-.854 3.261-1.368 4.444-.741 1.708-3.873.343-5.532-.524-2.909 5.647-5.025 8.211-6.845 10.448 6.579 4.318 1.823 1.193 12.19 7.983 2.075-3.991 4.334-7.367 6.825-10.46-1.539-1.241-4.019-3.546-2.614-4.945 1-1 2.545-1.578 3.442-2.95 1.589-2.426-.174-5.645-3.042-5.645zm-5.348 21.138l-1.201-.763c0-.656.157-1.298.422-1.874-.609.202-1.074.482-1.618 1.043l-3.355-2.231c.531-.703.934-1.55.859-2.688-.482.824-1.521 1.621-2.331 1.745l-1.302-.815c1.136-1.467 2.241-3.086 3.257-4.728l8.299 5.462c-1.099 1.614-2.197 3.363-3.03 4.849zm6.724-16.584c-.457.7-2.445 1.894-3.184 2.632-.681.68-1.014 1.561-.961 2.548.071 1.354.852 2.781 2.218 4.085-.201.265-.408.543-.618.833l-8.428-5.548.504-.883c1.065.445 2.1.678 3.032.678 1.646 0 2.908-.733 3.464-2.012.459-1.058.751-3.448 1.206-4.145 1.206-1.833 3.964-.017 2.767 1.812zm-.644-.424c-.265.41-.813.523-1.22.257-.409-.267-.522-.814-.255-1.223.267-.409.813-.524 1.222-.257.408.266.521.817.253 1.223z"/>
                                    </svg>
                                </div>
                            </div>

                            <img @click="helpAudio" :src="mati" :width="widthMati" class="select-none"
                                 alt="">
                        </div>
                    </div>
                    <div
                        class="bg-white border-4 border-blue-600 rounded-md py-5 pr-5 md:col-span-4 grid md:grid-cols-4 flex items-center">
                        <div :class="`${selectFig1} ml-5`">
                            <div class="flex-col justify-center items-center">
                                <div class="flex justify-center">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-center my-5 mb-14">
                                <span class="font-MPlus text-3xl">OBSERVA</span>
                            </div>

                            <div class="flex justify-center mt-5 -rotate-45">
                                <div class="flex-col grid gap-5 rotate-180">
                                    <div class="grid grid-cols-2">
                                        <div class="p-12 border-black border-2 bg-blue-600">{{ null }}</div>
                                        <div class="p-12 border-black border-2 bg-green-600">{{ null }}</div>
                                        <div class="p-12 border-black border-2 bg-yellow-400">{{ null }}</div>
                                        <div class="p-12 border-black border-2 bg-red-600">{{ null }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center h-full pt-16">

                            <svg id="arrow" :class="`${selectFig2} flex justify-center h-full pt-16`"
                                 clip-rule="evenodd" fill-rule="evenodd" width="120" stroke-linejoin="round"
                                 stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m13.022 14.999v3.251c0 .412.335.75.752.75.188 0 .375-.071.518-.206 1.775-1.685 4.945-4.692 6.396-6.069.2-.189.312-.452.312-.725 0-.274-.112-.536-.312-.725-1.451-1.377-4.621-4.385-6.396-6.068-.143-.136-.33-.207-.518-.207-.417 0-.752.337-.752.75v3.251h-9.02c-.531 0-1.002.47-1.002 1v3.998c0 .53.471 1 1.002 1z"
                                    fill-rule="nonzero"/>
                            </svg>
                        </div>
                        <div :class="`${selectFig3} mr-5`">
                            <div class="flex-col justify-center items-center">
                                <div class="flex justify-center">
                                    <svg id="brush" class="" xmlns="http://www.w3.org/2000/svg" width="100"
                                         fill="#78716c"
                                         height="100"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                    </svg>
                                </div>
                            </div>


                            <div class="flex justify-center my-5 mb-14">
                                <span class="font-MPlus text-3xl">COLOREA</span>
                            </div>

                            <div class="flex justify-center mt-5 -rotate-45">
                                <div class="flex-col rotate-180">
                                    <div>
                                        <div class="grid grid-cols-2">
                                            <div @click="paint('caja1')" id="caja1"
                                                 class="p-12 border-black border-2 cursor-cell hover:bg-gray-400">
                                                {{ null }}
                                                <div v-if="color1Error === true" class="flex justify-center rotate-45">
                                                    <span
                                                        class="text-2xl font-bold animate-pulse text-center select-none rotate-180">Error</span>
                                                </div>
                                            </div>
                                            <div @click="paint('caja2')" id="caja2"
                                                 class="p-12 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                    null
                                                }}
                                                <div v-if="color2Error === true" class="flex justify-center rotate-45">
                                                    <span
                                                        class="text-2xl font-bold animate-pulse text-center select-none rotate-180">Error</span>
                                                </div>
                                            </div>
                                            <div @click="paint('caja3')" id="caja3"
                                                 class="p-12 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                    null
                                                }}
                                                <div v-if="color3Error === true" class="flex justify-center rotate-45">
                                                    <span
                                                        class="text-2xl font-bold animate-pulse text-center select-none rotate-180">Error</span>
                                                </div>
                                            </div>
                                            <div @click="paint('caja4')" id="caja4"
                                                 class="p-12 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                    null
                                                }}
                                                <div v-if="color4Error === true" class="flex justify-center rotate-45">
                                                    <span
                                                        class="text-2xl font-bold animate-pulse text-center select-none rotate-180">Error</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-blue-300 border-black border-4">
                            <div class="grid grid-cols-2 gap-5 flex">
                                <!--                                <div-->
                                <!--                                    class="bg-gray-900 col-span-2 border-4 border-blue-400 flex justify-center py-5 px-12">-->
                                <!--                                    <div class="text-blue-600 font-bold text-2xl">-->
                                <!--                                        Planeta Azul-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <div class="col-span-2 mx-1 flex justify-center mt-5">
                                    <div class="bg-pink-200 rounded-md px-2 flex">
                                        <ArrowDownIcon class="w-5"/>
                                        <div class="font-bold">PALETA DE COLORES</div>
                                        <ArrowDownIcon class="w-5"/>
                                    </div>
                                </div>

                                <div class="flex justify-center">
                                    <button @click="selectColor('blue-600')"
                                            class="rounded-md p-2 shadow-md bg-gray-300">
                                        <svg class="icon-blue" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                             viewBox="0 0 24 24">
                                            <path
                                                d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                        </svg>
                                    </button>
                                </div>

                                <div class="flex justify-center">
                                    <button @click="selectColor('red-600')"
                                            class="rounded-md p-2 shadow-md bg-gray-300">
                                        <svg class="icon-red" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                             viewBox="0 0 24 24">
                                            <path
                                                d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                        </svg>
                                    </button>
                                </div>

                                <div class="flex justify-center">
                                    <button @click="selectColor('yellow-400')"
                                            class="rounded-md p-2 shadow-md bg-gray-300">
                                        <svg class="icon-yellow" xmlns="http://www.w3.org/2000/svg" width="60"
                                             height="60" viewBox="0 0 24 24">
                                            <path
                                                d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                        </svg>
                                    </button>
                                </div>

                                <div class="flex justify-center">
                                    <button @click="selectColor('green-600')"
                                            class="rounded-md p-2 shadow-md bg-gray-300">
                                        <svg class="icon-green" xmlns="http://www.w3.org/2000/svg" width="60"
                                             height="60" viewBox="0 0 24 24">
                                            <path
                                                d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                        </svg>
                                    </button>
                                </div>

                                <div class="col-span-2 mx-1 flex justify-center">
                                    <div class="bg-pink-200 rounded-md px-2 flex">
                                        <ArrowDownIcon class="w-5"/>
                                        <div class="font-bold">BORRADOR</div>
                                        <ArrowDownIcon class="w-5"/>
                                    </div>
                                </div>

                                <div v-if="ShowEraser === true" @click="selectColor('white')"
                                     class="relative col-span-2 rounded-md p-2 shadow-md bg-gray-300  flex justify-center mx-7 select-none cursor-pointer">
                                    <div
                                        class="w-3 h-3 bg-red-500 rounded-full absolute top-0 right-0 -mt-1 -mr-1"></div>
                                    <div
                                        class="w-3 h-3 bg-red-500 rounded-full absolute top-0 right-0 -mt-1 -mr-1 animate-ping"></div>
                                    <button class="eraser">
                                        <div class="relative">
                                            <img :src="eraser" alt="borrador" width="65">
                                        </div>
                                    </button>
                                </div>

                                <button v-else @click="selectColor('white')"
                                        class="relative col-span-2 rounded-md p-2 shadow-md bg-gray-300  flex justify-center mx-7 select-none">
                                    <div class="relative">
                                        <img :src="eraser" alt="borrador" width="65">
                                    </div>
                                </button>


                                <!--                                <div class="flex justify-center">-->
                                <!--                                    <button @click="selectColor('blue-600')"-->
                                <!--                                            class="border-2 border-black bg-blue-600 hover:bg-blue-700 rounded-full p-5">-->
                                <!--                                        {{ null }}-->
                                <!--                                    </button>-->
                                <!--                                </div>-->
                                <!--                                <div class="flex justify-center">-->
                                <!--                                    <button @click="selectColor('red-600')"-->
                                <!--                                            class="border-2 border-black bg-red-600 hover:bg-red-700 rounded-full p-5">-->
                                <!--                                        {{ null }}-->
                                <!--                                    </button>-->
                                <!--                                </div>-->
                                <!--                                <div class="flex justify-center">-->
                                <!--                                    <button @click="selectColor('yellow-400')"-->
                                <!--                                            class="border-2 border-black bg-yellow-400 hover:bg-yellow-500 rounded-full p-5">-->
                                <!--                                        {{ null }}-->
                                <!--                                    </button>-->
                                <!--                                </div>-->
                                <!--                                <div class="flex justify-center">-->
                                <!--                                    <button @click="selectColor('green-600')"-->
                                <!--                                            class="border-2 border-black bg-green-600 hover:bg-green-700 rounded-full p-5">-->
                                <!--                                        {{ null }}-->
                                <!--                                    </button>-->
                                <!--                                </div>-->
                                <div id="muestra"
                                     class="border-2 border-black px-10 py-5 m-2 bg-white col-span-2 shadow-2xl shadow-blue-900"></div>
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

<style>
.icon {
    fill: black;
}

.icon:hover {
    fill: white;
}

.icon-blue {
    fill: #2563eb;
}

.icon-blue:hover {
    fill: #1d4ed8;
}

.icon-red {
    fill: #dc2626;
}

.icon-red:hover {
    fill: #b91c1c;
}

.icon-yellow {
    fill: #eab308;
}

.icon-yellow:hover {
    fill: #ca8a04;
}

.icon-green {
    fill: #16a34a;
}

.icon-green:hover {
    fill: #15803d;
}

.arrow {
    animation: move-right 800ms linear infinite;
}

@keyframes move-right {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(30px);
    }
    100% {
        transform: translateX(0);
    }
}

.brush {
    animation: move-right 300ms linear infinite;
    fill: #22c55e;
}

@keyframes move-right {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(10px);
    }
    100% {
        transform: translateX(0);
    }
}

.brush-fail {
    animation: move-right 100ms linear infinite;
    fill: red;
}

@keyframes move-right {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(10px);
    }
    100% {
        transform: translateX(0);
    }
}

.eraser {
    animation: move-right 900ms linear infinite;
}

@keyframes move-right {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(5px);
    }
    100% {
        transform: translateX(0);
    }
}

</style>
