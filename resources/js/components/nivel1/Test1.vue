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
    document.getElementById(id).classList.remove('bg-red-600')
    document.getElementById(id).classList.remove('bg-blue-600')
    document.getElementById(id).classList.remove('bg-green-600')
    document.getElementById(id).classList.remove('bg-yellow-400')
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.add(`bg-${color}`);

    // Figura 1
    if (document.getElementById('caja1').classList.contains('bg-blue-600') &&
        document.getElementById('caja2').classList.contains('bg-green-600') &&
        document.getElementById('caja3').classList.contains('bg-yellow-400') &&
        document.getElementById('caja4').classList.contains('bg-red-600')
    ) {

        document.getElementById('fig1').classList.remove('text-gray-300')
        document.getElementById('fig1').classList.add('text-green-600')

        if (figura1 === 0) {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/coin.wav`;
            sound.play()
            figura1++
            Swal.fire({
                icon: 'success',
                title: 'Figura 1 Completada',
                showConfirmButton: false,
                timer: 1200
            })
        }

        if (figura1 === 1 && figura2 === 1 && figura3 === 1) {
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
    } else {
        document.getElementById('fig1').classList.remove('text-green-600')
        document.getElementById('fig1').classList.add('text-gray-300')
    }

    // Figura 2

    if (document.getElementById('caja5').classList.contains('bg-green-600') &&
        document.getElementById('caja6').classList.contains('bg-red-600') &&
        document.getElementById('caja7').classList.contains('bg-blue-600') &&
        document.getElementById('caja8').classList.contains('bg-yellow-400')
    ) {

        document.getElementById('fig2').classList.remove('text-gray-300')
        document.getElementById('fig2').classList.add('text-green-600')

        if (figura2 === 0) {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/coin.wav`;
            sound.play()
            figura2++
            Swal.fire({
                icon: 'success',
                title: 'Figura 2 Completada',
                showConfirmButton: false,
                timer: 1200
            })
        }

        if (figura1 === 1 && figura2 === 1 && figura3 === 1) {
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
    } else {
        document.getElementById('fig2').classList.remove('text-green-600')
        document.getElementById('fig2').classList.add('text-gray-300')
    }

    // Figura 3
    if (document.getElementById('caja9').classList.contains('bg-yellow-400') &&
        document.getElementById('caja10').classList.contains('bg-blue-600') &&
        document.getElementById('caja11').classList.contains('bg-red-600') &&
        document.getElementById('caja12').classList.contains('bg-green-600')
    ) {

        document.getElementById('fig3').classList.remove('text-gray-300')
        document.getElementById('fig3').classList.add('text-green-600')

        if (figura3 === 0) {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/coin.wav`;
            sound.play()
            figura3++
            Swal.fire({
                icon: 'success',
                title: 'Figura 3 Completada',
                showConfirmButton: false,
                timer: 1200
            })
        }

        if (figura1 === 1 && figura2 === 1 && figura3 === 1) {
            Swal.fire({
                icon: 'success',
                title: 'Completado!',
                text: 'Felicidades! Has completado la actividad',
                showConfirmButton: true,
            })
            let sound = new Audio();
            sound.src = "http://maths.test/audio/voz1/win1.mp3";
            sound.play()

            mati.value = `${props.asset_images}/robot/mati.gif`
            document.getElementById('fondoMati').classList.remove('bg-red-400')
            document.getElementById('fondoMati').classList.add('bg-green-300')
        }
    } else {
        document.getElementById('fig3').classList.remove('text-green-600')
        document.getElementById('fig3').classList.add('text-gray-300')
    }
}

const selectColor = (bg) => {
    color = bg
    document.getElementById('muestra').classList.remove('bg-blue-600', 'bg-red-600', 'bg-green-600', 'bg-yellow-400', 'bg-white');
    document.getElementById('muestra').classList.add(`bg-${bg}`);
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
                        <span class="font-bold">Actividad 1 (TEST) -</span>
                        <span> Replica los colores como se muestra en la imagen izquierda</span>
                    </div>

                    <div>
                        <a href="/normal/level-1/tutorial">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24">
                                <path
                                    d="M14.601 21.5c0 1.38-1.116 2.5-2.499 2.5-1.378 0-2.499-1.12-2.499-2.5s1.121-2.5 2.499-2.5c1.383 0 2.499 1.119 2.499 2.5zm-2.42-21.5c-4.029 0-7.06 2.693-7.06 8h3.955c0-2.304.906-4.189 3.024-4.189 1.247 0 2.57.828 2.684 2.411.123 1.666-.767 2.511-1.892 3.582-2.924 2.78-2.816 4.049-2.816 7.196h3.943c0-1.452-.157-2.508 1.838-4.659 1.331-1.436 2.986-3.222 3.021-5.943.047-3.963-2.751-6.398-6.697-6.398z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mx-5 grid md:grid-cols-4 gap-5">
                    <div id="fondoMati"
                         class="bg-red-400 border-4 border-blue-600 rounded-md flex items-end justify-center">
                        <div class="">
                            <img :src="mati" width="250"
                                 alt="">
                        </div>
                    </div>
                    <div
                        class="bg-white border-4 border-blue-600 rounded-md py-5 pr-5 md:col-span-3 grid md:grid-cols-4 flex items-center">
                        <div>
                            <div class="flex-col justify-center items-center">
                                <div class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-center mt-5">
                                <div class="flex-col grid gap-5">
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

                            <svg clip-rule="evenodd" fill-rule="evenodd" width="120" stroke-linejoin="round"
                                 stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m13.022 14.999v3.251c0 .412.335.75.752.75.188 0 .375-.071.518-.206 1.775-1.685 4.945-4.692 6.396-6.069.2-.189.312-.452.312-.725 0-.274-.112-.536-.312-.725-1.451-1.377-4.621-4.385-6.396-6.068-.143-.136-.33-.207-.518-.207-.417 0-.752.337-.752.75v3.251h-9.02c-.531 0-1.002.47-1.002 1v3.998c0 .53.471 1 1.002 1z"
                                    fill-rule="nonzero"/>
                            </svg>
                        </div>
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
                        <!--                        </div>-->
                        <div>
                            <div class="flex-col justify-center items-center">
                                <div class="flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path d="M18.58 0c-1.234 0-2.377.616-3.056 1.649-.897 1.37-.854 3.261-1.368 4.444-.741 1.708-3.873.343-5.532-.524-2.909 5.647-5.025 8.211-6.845 10.448 6.579 4.318 1.823 1.193 12.19 7.983 2.075-3.991 4.334-7.367 6.825-10.46-1.539-1.241-4.019-3.546-2.614-4.945 1-1 2.545-1.578 3.442-2.95 1.589-2.426-.174-5.645-3.042-5.645zm-5.348 21.138l-1.201-.763c0-.656.157-1.298.422-1.874-.609.202-1.074.482-1.618 1.043l-3.355-2.231c.531-.703.934-1.55.859-2.688-.482.824-1.521 1.621-2.331 1.745l-1.302-.815c1.136-1.467 2.241-3.086 3.257-4.728l8.299 5.462c-1.099 1.614-2.197 3.363-3.03 4.849zm6.724-16.584c-.457.7-2.445 1.894-3.184 2.632-.681.68-1.014 1.561-.961 2.548.071 1.354.852 2.781 2.218 4.085-.201.265-.408.543-.618.833l-8.428-5.548.504-.883c1.065.445 2.1.678 3.032.678 1.646 0 2.908-.733 3.464-2.012.459-1.058.751-3.448 1.206-4.145 1.206-1.833 3.964-.017 2.767 1.812zm-.644-.424c-.265.41-.813.523-1.22.257-.409-.267-.522-.814-.255-1.223.267-.409.813-.524 1.222-.257.408.266.521.817.253 1.223z"/></svg>
                                </div>
                            </div>
                            <div class="flex justify-center mt-5">
                                <div class="flex-col">
                                    <div>
                                        <div class="grid grid-cols-2">
                                            <div @click="paint('caja1')" id="caja1"
                                                 class="p-12 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                    null
                                                }}
                                            </div>
                                            <div @click="paint('caja2')" id="caja2"
                                                 class="p-12 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                    null
                                                }}
                                            </div>
                                            <div @click="paint('caja3')" id="caja3"
                                                 class="p-12 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                    null
                                                }}
                                            </div>
                                            <div @click="paint('caja4')" id="caja4"
                                                 class="p-12 border-black border-2 cursor-cell hover:bg-gray-400">{{
                                                    null
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-blue-300 border-black border-4">
                            <div class="grid grid-cols-2 gap-5 flex">
                                <div class="bg-gray-900 col-span-2 border-4 border-blue-400 flex justify-center py-5 px-12">
                                    <div class="text-blue-600 font-bold text-2xl">
                                        Planeta Azul
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
                                    <button @click="selectColor('blue-600')" class="rounded-md p-2 shadow-md bg-gray-300">
                                        <svg class="icon-blue" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/></svg>
                                    </button>
                                </div>

                                <div class="flex justify-center">
                                    <button @click="selectColor('red-600')" class="rounded-md p-2 shadow-md bg-gray-300">
                                        <svg class="icon-red" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/></svg>
                                    </button>
                                </div>

                                <div class="flex justify-center">
                                    <button @click="selectColor('yellow-400')" class="rounded-md p-2 shadow-md bg-gray-300">
                                        <svg class="icon-yellow" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/></svg>
                                    </button>
                                </div>

                                <div class="flex justify-center">
                                    <button @click="selectColor('green-600')" class="rounded-md p-2 shadow-md bg-gray-300">
                                        <svg class="icon-green" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"><path d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/></svg>
                                    </button>
                                </div>

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
</style>
