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

const add = (num) => {

    if (num === 'num1') {
        num1.value = content
        if (content === null) {
            document.getElementById('num1').classList.add('p-7')
            document.getElementById('num1').classList.remove('py-3')
            document.getElementById('num1').classList.remove('px-5')
        } else {
            document.getElementById('num1').classList.remove('p-7')
            document.getElementById('num1').classList.add('py-3')
            document.getElementById('num1').classList.add('px-5')
        }
    } else if (num === 'num2') {
        num2.value = content
        if (content === null) {
            document.getElementById('num2').classList.add('p-7')
            document.getElementById('num2').classList.remove('py-3')
            document.getElementById('num2').classList.remove('px-5')
        } else {
            document.getElementById('num2').classList.remove('p-7')
            document.getElementById('num2').classList.add('py-3')
            document.getElementById('num2').classList.add('px-5')
        }
    } else if (num === 'num3') {
        num3.value = content
        if (content === null) {
            document.getElementById('num3').classList.add('p-7')
            document.getElementById('num3').classList.remove('py-3')
            document.getElementById('num3').classList.remove('px-5')
        } else {
            document.getElementById('num3').classList.remove('p-7')
            document.getElementById('num3').classList.add('py-3')
            document.getElementById('num3').classList.add('px-5')
        }
    } else if (num === 'num4') {
        num4.value = content
        if (content === null) {
            document.getElementById('num4').classList.add('p-7')
            document.getElementById('num4').classList.remove('py-3')
            document.getElementById('num4').classList.remove('px-5')
        } else {
            document.getElementById('num4').classList.remove('p-7')
            document.getElementById('num4').classList.add('py-3')
            document.getElementById('num4').classList.add('px-5')
        }
    } else if (num === 'num5') {
        num5.value = content
        if (content === null) {
            document.getElementById('num5').classList.add('p-7')
            document.getElementById('num5').classList.remove('py-3')
            document.getElementById('num5').classList.remove('px-5')
        } else {
            document.getElementById('num5').classList.remove('p-7')
            document.getElementById('num5').classList.add('py-3')
            document.getElementById('num5').classList.add('px-5')
        }
    } else if (num === 'num6') {
        num6.value = content
        if (content === null) {
            document.getElementById('num6').classList.add('p-7')
            document.getElementById('num6').classList.remove('py-3')
            document.getElementById('num6').classList.remove('px-5')
        } else {
            document.getElementById('num6').classList.remove('p-7')
            document.getElementById('num6').classList.add('py-3')
            document.getElementById('num6').classList.add('px-5')
        }
    } else if (num === 'num7') {
        num7.value = content
        if (content === null) {
            document.getElementById('num7').classList.add('p-7')
            document.getElementById('num7').classList.remove('py-3')
            document.getElementById('num7').classList.remove('px-5')
        } else {
            document.getElementById('num7').classList.remove('p-7')
            document.getElementById('num7').classList.add('py-3')
            document.getElementById('num7').classList.add('px-5')
        }
    } else if (num === 'num8') {
        num8.value = content
        if (content === null) {
            document.getElementById('num8').classList.add('p-7')
            document.getElementById('num8').classList.remove('py-3')
            document.getElementById('num8').classList.remove('px-5')
        } else {
            document.getElementById('num8').classList.remove('p-7')
            document.getElementById('num8').classList.add('py-3')
            document.getElementById('num8').classList.add('px-5')
        }
    } else if (num === 'num9') {
        num9.value = content
        if (content === null) {
            document.getElementById('num9').classList.add('p-7')
            document.getElementById('num9').classList.remove('py-3')
            document.getElementById('num9').classList.remove('px-5')
        } else {
            document.getElementById('num9').classList.remove('p-7')
            document.getElementById('num9').classList.add('py-3')
            document.getElementById('num9').classList.add('px-5')
        }
    } else if (num === 'num10') {
        num10.value = content
        if (content === null) {
            document.getElementById('num10').classList.add('p-7')
            document.getElementById('num10').classList.remove('py-3')
            document.getElementById('num10').classList.remove('px-5')
        } else {
            document.getElementById('num10').classList.remove('p-7')
            document.getElementById('num10').classList.add('py-3')
            document.getElementById('num10').classList.add('px-5')
        }
    } else if (num === 'num11') {
        num11.value = content
        if (content === null) {
            document.getElementById('num11').classList.add('p-7')
            document.getElementById('num11').classList.remove('py-3')
            document.getElementById('num11').classList.remove('px-5')
        } else {
            document.getElementById('num11').classList.remove('p-7')
            document.getElementById('num11').classList.add('py-3')
            document.getElementById('num11').classList.add('px-5')
        }
    } else if (num === 'num12') {
        num12.value = content
        if (content === null) {
            document.getElementById('num12').classList.add('p-7')
            document.getElementById('num12').classList.remove('py-3')
            document.getElementById('num12').classList.remove('px-5')
        } else {
            document.getElementById('num12').classList.remove('p-7')
            document.getElementById('num12').classList.add('py-3')
            document.getElementById('num12').classList.add('px-5')
        }
    } else if (num === 'num13') {
        num13.value = content
        if (content === null) {
            document.getElementById('num13').classList.add('p-7')
            document.getElementById('num13').classList.remove('py-3')
            document.getElementById('num13').classList.remove('px-5')
        } else {
            document.getElementById('num13').classList.remove('p-7')
            document.getElementById('num13').classList.add('py-3')
            document.getElementById('num13').classList.add('px-5')
        }
    } else if (num === 'num14') {
        num14.value = content
        if (content === null) {
            document.getElementById('num14').classList.add('p-7')
            document.getElementById('num14').classList.remove('py-3')
            document.getElementById('num14').classList.remove('px-5')
        } else {
            document.getElementById('num14').classList.remove('p-7')
            document.getElementById('num14').classList.add('py-3')
            document.getElementById('num14').classList.add('px-5')
        }
    } else if (num === 'num15') {
        num15.value = content
        if (content === null) {
            document.getElementById('num15').classList.add('p-7')
            document.getElementById('num15').classList.remove('py-3')
            document.getElementById('num15').classList.remove('px-5')
        } else {
            document.getElementById('num15').classList.remove('p-7')
            document.getElementById('num15').classList.add('py-3')
            document.getElementById('num15').classList.add('px-5')
        }
    } else if (num === 'num16') {
        num16.value = content
        if (content === null) {
            document.getElementById('num16').classList.add('p-7')
            document.getElementById('num16').classList.remove('py-3')
            document.getElementById('num16').classList.remove('px-5')
        } else {
            document.getElementById('num16').classList.remove('p-7')
            document.getElementById('num16').classList.add('py-3')
            document.getElementById('num16').classList.add('px-5')
        }
    } else if (num === 'num17') {
        num17.value = content
        if (content === null) {
            document.getElementById('num17').classList.add('p-7')
            document.getElementById('num17').classList.remove('py-3')
            document.getElementById('num17').classList.remove('px-5')
        } else {
            document.getElementById('num17').classList.remove('p-7')
            document.getElementById('num17').classList.add('py-3')
            document.getElementById('num17').classList.add('px-5')
        }
    } else if (num === 'num18') {
        num18.value = content
        if (content === null) {
            document.getElementById('num18').classList.add('p-7')
            document.getElementById('num18').classList.remove('py-3')
            document.getElementById('num18').classList.remove('px-5')
        } else {
            document.getElementById('num18').classList.remove('p-7')
            document.getElementById('num18').classList.add('py-3')
            document.getElementById('num18').classList.add('px-5')
        }
    }
}


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
    document.getElementById(id).classList.remove('bg-yellow-400')
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
        document.getElementById('caja20').classList.contains('bg-yellow-400') &&
        document.getElementById('caja21').classList.contains('bg-white') &&
        document.getElementById('caja22').classList.contains('bg-white') &&
        document.getElementById('caja23').classList.contains('bg-white') &&
        document.getElementById('caja24').classList.contains('bg-yellow-400') &&
        document.getElementById('caja25').classList.contains('bg-yellow-400') &&
        document.getElementById('caja26').classList.contains('bg-white') &&
        document.getElementById('caja27').classList.contains('bg-white') &&
        document.getElementById('caja28').classList.contains('bg-yellow-400') &&
        document.getElementById('caja29').classList.contains('bg-yellow-400') &&
        document.getElementById('caja30').classList.contains('bg-yellow-400') &&
        document.getElementById('caja31').classList.contains('bg-white') &&
        document.getElementById('caja32').classList.contains('bg-yellow-400') &&
        document.getElementById('caja33').classList.contains('bg-yellow-400') &&
        document.getElementById('caja34').classList.contains('bg-yellow-400') &&
        document.getElementById('caja35').classList.contains('bg-yellow-400') &&
        document.getElementById('caja36').classList.contains('bg-yellow-400') &&
        document.getElementById('caja37').classList.contains('bg-yellow-400') &&
        document.getElementById('caja38').classList.contains('bg-yellow-400') &&
        document.getElementById('caja39').classList.contains('bg-yellow-400') &&
        document.getElementById('caja40').classList.contains('bg-yellow-400')
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
        document.getElementById('fig1').classList.remove('text-red-500')
        document.getElementById('fig1').classList.add('text-gray-300')
    }
}

const selectItem = (item) => {


    content = item

    // document.getElementById('muestra').classList.remove('bg-red-600')
    // document.getElementById('muestra').classList.remove('bg-white')
    // document.getElementById('muestra').classList.remove('bg-yellow-400')
    // document.getElementById('muestra').classList.remove('bg-yellow-400')
    // document.getElementById('muestra').classList.remove('bg-white')
    //
    // document.getElementById('muestra').classList.add(`bg-${color}`)

    let sound = new Audio();
    sound.src = `${props.asset_audio}/bubble.wav`;
    sound.play()
}

</script>

<template>
    <div class="min-h-full bg-space">
        <div class="md:container mx-auto">
            <div class="font-bold text-xl bg-gray-900 mx-5 px-5 py-3 rounded-b-lg shadow-2xl text-white">Matematicas -
                Nivel 13
            </div>
        </div>
        <div class="container mx-auto mb-10 rounded-md px-5">
            <div class="bg-green-100 border-4 border-stone-600 flex-col pb-2 rounded-md shadow-2xl">
                <div class="mx-5 py-2">
                    <div>
                        <span class="font-bold">Actividad 3 -</span>
                        <span> Escribe todas las maneras diferentes de ordenar horizontalmente las letras M, N y O</span>
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
                                    <button @click="selectItem('M')" class="flex justify-center items-center ">
                                        <div class="bg-green-400 border-black border-4 py-3 px-5 rounded-lg">
                                            <span class="font-MPlus text-5xl">M</span>
                                        </div>
                                    </button>
                                    <button @click="selectItem('N')" class="flex justify-center items-center ">
                                        <div class="bg-green-400 border-black border-4 py-3 px-5 rounded-lg">
                                            <span class="font-MPlus text-5xl">N</span>
                                        </div>
                                    </button>
                                    <button @click="selectItem('O')" class="flex justify-center items-center ">
                                        <div class="bg-green-400 border-black border-4 py-3 px-5 rounded-lg">
                                            <span class="font-MPlus text-5xl">O</span>
                                        </div>
                                    </button>
                                    <button @click="selectItem(null)" class="flex justify-center items-center ">
                                        <div class="bg-green-400 border-black border-4 p-9 rounded-lg">
                                            <span class="font-MPlus text-5xl"></span>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <div class="grid grid-cols-2 gap-10">
                                        <div class="grid grid-cols-3">
                                            <button @click="add('num1')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num1">
                                                <span class="font-MPlus text-3xl">{{ num1 }}</span>
                                            </button>
                                            <button @click="add('num2')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num2">
                                                <span class="font-MPlus text-3xl">{{ num2 }}</span>
                                            </button>
                                            <button @click="add('num3')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num3">
                                                <span class="font-MPlus text-3xl">{{ num3 }}</span>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-3">
                                            <button @click="add('num4')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num4">
                                                <span class="font-MPlus text-3xl">{{ num4 }}</span>
                                            </button>
                                            <button @click="add('num5')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num5">
                                                <span class="font-MPlus text-3xl">{{ num5 }}</span>
                                            </button>
                                            <button @click="add('num6')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num6">
                                                <span class="font-MPlus text-3xl">{{ num6 }}</span>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-3">
                                            <button @click="add('num7')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num7">
                                                <span class="font-MPlus text-3xl">{{ num7 }}</span>
                                            </button>
                                            <button @click="add('num8')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num8">
                                                <span class="font-MPlus text-3xl">{{ num8 }}</span>
                                            </button>
                                            <button @click="add('num9')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num9">
                                                <span class="font-MPlus text-3xl">{{ num9 }}</span>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-3">
                                            <button @click="add('num10')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num10">
                                                <span class="font-MPlus text-3xl">{{ num10 }}</span>
                                            </button>
                                            <button @click="add('num11')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num11">
                                                <span class="font-MPlus text-3xl">{{ num11 }}</span>
                                            </button>
                                            <button @click="add('num12')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num12">
                                                <span class="font-MPlus text-3xl">{{ num12 }}</span>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-3">
                                            <button @click="add('num13')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num13">
                                                <span class="font-MPlus text-3xl">{{ num13 }}</span>
                                            </button>
                                            <button @click="add('num14')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num14">
                                                <span class="font-MPlus text-3xl">{{ num14 }}</span>
                                            </button>
                                            <button @click="add('num15')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num15">
                                                <span class="font-MPlus text-3xl">{{ num15 }}</span>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-3">
                                            <button @click="add('num16')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num16">
                                                <span class="font-MPlus text-3xl">{{ num16 }}</span>
                                            </button>
                                            <button @click="add('num17')" class="bg-red-400 border-black border-4 p-7"
                                                    id="num17">
                                                <span class="font-MPlus text-3xl">{{ num17 }}</span>
                                            </button>
                                            <button @click="add('num18')" class="bg-red-400 border-black border-4 p-7"
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
