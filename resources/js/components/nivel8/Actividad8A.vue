<script setup>
import {HomeIcon} from "@heroicons/vue/20/solid";
import {ArrowDownIcon, CheckBadgeIcon, ChevronRightIcon} from "@heroicons/vue/24/solid"
import Swal from 'sweetalert2'
import {ref} from "vue";

let color = 'white';
let figura1 = 0;
let mati = ref(`${props.asset_images}/robot/mati_act1.gif`)
let pulso = ref(false)

const props = defineProps({
    route_back: {type: String, required: true},
    route_next: {type: String, required: true},
    asset_images: {type: String, required: true},
    asset_audio: {type: String, required: true}
})

const paint = (id) => {

    // if (color === 'white') {
    //         Swal.fire({
    //             icon: 'warning',
    //             title: 'Falta color!',
    //             text: 'Selecciona un color primero',
    //             showConfirmButton: true,
    //         })
    //     }

    if (pulso.value === true) {

        // let sound = new Audio();
        // sound.src = `${props.asset_audio}/paint.wav`;
        // sound.play()

        document.getElementById(id).classList.remove('hover:bg-gray-400')
        document.getElementById(id).classList.remove('bg-blue-600')
        document.getElementById(id).classList.remove('bg-stone-700')
        document.getElementById(id).classList.remove('bg-yellow-400')
        document.getElementById(id).classList.remove('bg-green-600')
        document.getElementById(id).classList.remove('white')
        document.getElementById(id).classList.add(`bg-${color}`);

        // Figura 1
        if (document.getElementById('caja1').classList.contains('bg-red-600') &&
            document.getElementById('caja2').classList.contains('bg-yellow-400') &&
            document.getElementById('caja3').classList.contains('bg-red-600') &&
            document.getElementById('caja4').classList.contains('bg-yellow-400') &&

            document.getElementById('caja5').classList.contains('bg-yellow-400') &&
            document.getElementById('caja6').classList.contains('bg-red-600') &&
            document.getElementById('caja7').classList.contains('bg-yellow-400') &&
            document.getElementById('caja8').classList.contains('bg-red-600') &&

            document.getElementById('caja9').classList.contains('bg-red-600') &&
            document.getElementById('caja10').classList.contains('bg-yellow-400') &&
            document.getElementById('caja11').classList.contains('bg-red-600') &&
            document.getElementById('caja12').classList.contains('bg-yellow-400') &&

            document.getElementById('caja13').classList.contains('bg-yellow-400') &&
            document.getElementById('caja14').classList.contains('bg-red-600') &&
            document.getElementById('caja15').classList.contains('bg-yellow-400') &&
            document.getElementById('caja16').classList.contains('bg-red-600')
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
    }

}

const clickPaint = () => {
    pulso.value = !pulso.value;
    console.log(pulso.value)
}

const selectColor = (bg) => {
    color = bg

    document.getElementById('muestra').classList.remove('bg-blue-600')
    document.getElementById('muestra').classList.remove('bg-yellow-400')
    document.getElementById('muestra').classList.remove('bg-green-600')
    document.getElementById('muestra').classList.remove('bg-stone-700')
    document.getElementById('muestra').classList.remove('bg-white')

    document.getElementById('muestra').classList.add(`bg-${color}`)

    let sound = new Audio();
    sound.src = `${props.asset_audio}/bubble.wav`;
    sound.play()
}

</script>

<template>
    <div class="min-h-full bg-space" @mousedown="clickPaint()" @mouseup="clickPaint()">
        <div class="md:container mx-auto">
            <div class="font-bold text-xl bg-gray-900 mx-5 px-5 py-3 rounded-b-lg shadow-2xl text-white">Matematicas -
                Nivel 8
            </div>
        </div>
        <div class="container mx-auto mb-10 rounded-md px-5">
            <div class="bg-green-400 border-4 border-green-600 flex-col pb-2 rounded-md shadow-2xl">
                <div class="mx-5 py-2">
                    <div>
                        <span class="font-bold">Actividad 1 -</span>
                        <span> Replica los colores como se muestra en la imagen izquierda</span>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 mx-5">
                    <div
                        class="bg-white rounded-md md:col-span-3 grid md:grid-cols-2">
                        <div class="flex justify-center border-black border-4">
                            <div class="grid grid-cols-11">
<!--                                linea1-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea2-->
                                <div class="grid grid-cols-3 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-t-4 border-l-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-t-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-t-4 border-r-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea3-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-x-4 border-t-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-l-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-r-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea4-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-l-4 border-b-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-y-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-r-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea5-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-l-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-r-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-x-4 border-t-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea6-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-l-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-y-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-r-4 border-b-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea7-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-l-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-r-4 bg-green-600">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea8-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-y-4 border-l-4 bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-t-4 bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-t-4 bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-t-4 bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-y-4 border-r-4 bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea9-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-l-4 bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-r-4 bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea10-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-l-4 border-b-4 bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-b-4 bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-r-4 border-b-4 bg-stone-700">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center border-black border-4">
                            <div class="grid grid-cols-11">
<!--                                linea1-->
                                <div class="grid grid-cols-3 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea2-->
                                <div class="grid grid-cols-3 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-t-4 border-l-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-t-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-t-4 border-r-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea3-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-x-4 border-t-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-l-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-r-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea4-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-l-4 border-b-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-y-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-r-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea5-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-l-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-r-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-x-4 border-t-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea6-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-l-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-y-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-r-4 border-b-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea7-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-l-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-r-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea8-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-y-4 border-l-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-t-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-t-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-t-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-y-4 border-r-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea9-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-l-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black border-r-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class=" grid grid-cols-3 border-black  ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <!--                            linea10-->
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-l-4 border-b-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-b-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3 border-black border-r-4 border-b-4 ">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-3">
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                    <div class="select-none p-2 hover:bg-blue-700">{{ null }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ml-5 bg-red-400 border-4 border-red-600 rounded-md flex justify-center items-center ">
                        <div class=" bg-gray-200 rounded p-2 border-gray-600 border-4">
                            <div id="muestra" class="border-2 border-black p-10 m-2 bg-white col-span-2"></div>
                            <div class="grid grid-cols-2 gap-5 flex">
                                <div class=" col-span-2 mx-1 flex justify-center">
                                    <div class="bg-pink-200 rounded-md px-2 flex">
                                        <ArrowDownIcon class="w-5"/>
                                        <div class="font-bold">PALETA DE COLORES</div>
                                        <ArrowDownIcon class="w-5"/>
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('blue-600')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                             viewBox="0 0 24 24"
                                             fill="#2563eb">
                                            <path
                                                d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('yellow-400')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                             viewBox="0 0 24 24"
                                             fill="#facc15">
                                            <path
                                                d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('stone-700')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                             viewBox="0 0 24 24"
                                             fill="#064e3b">
                                            <path
                                                d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('green-600')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                             viewBox="0 0 24 24"
                                             fill="#16a34a">
                                            <path
                                                d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="col-span-2 flex justify-center">
                                    <button @click="selectColor()">
                                        <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24"
                                             fill-rule="evenodd"
                                             clip-rule="evenodd">
                                            <path
                                                d="M5.662 23l-5.369-5.365c-.195-.195-.293-.45-.293-.707 0-.256.098-.512.293-.707l14.929-14.928c.195-.194.451-.293.707-.293.255 0 .512.099.707.293l7.071 7.073c.196.195.293.451.293.708 0 .256-.097.511-.293.707l-11.216 11.219h5.514v2h-12.343zm3.657-2l-5.486-5.486-1.419 1.414 4.076 4.072h2.829zm.456-11.429l-4.528 4.528 5.658 5.659 4.527-4.53-5.657-5.657z"/>
                                        </svg>
                                    </button>
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
