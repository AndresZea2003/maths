<!--<script setup>-->
<!--import {HomeIcon} from "@heroicons/vue/20/solid";-->
<!--import {ArrowDownIcon, CheckBadgeIcon, ChevronRightIcon} from "@heroicons/vue/24/solid"-->
<!--import Swal from 'sweetalert2'-->
<!--import {ref} from "vue";-->

<!--let content = null;-->
<!--let num1 = ref(null)-->
<!--let num2 = ref(null)-->
<!--let num3 = ref(null)-->
<!--let num4 = ref(null)-->
<!--let num5 = ref(null)-->
<!--let num6 = ref(null)-->
<!--let num7 = ref(null)-->
<!--let num8 = ref(null)-->
<!--let num9 = ref(null)-->
<!--let num10 = ref(null)-->
<!--let num11 = ref(null)-->
<!--let num12 = ref(null)-->
<!--let num13 = ref(null)-->
<!--let num14 = ref(null)-->
<!--let num15 = ref(null)-->
<!--let num16 = ref(null)-->
<!--let num17 = ref(null)-->
<!--let num18 = ref(null)-->

<!--const props = defineProps({-->
<!--    route_back: {type: String, required: true},-->
<!--    route_next: {type: String, required: true},-->
<!--    asset_images: {type: String, required: true},-->
<!--    asset_audio: {type: String, required: true}-->
<!--})-->

<!--let mati = ref(`${props.asset_images}/robot/mati_act1.gif`)-->

<!--const paint = (id) => {-->

<!--    let sound = new Audio();-->
<!--    sound.src = `${props.asset_audio}/paint.wav`;-->
<!--    sound.play()-->

<!--    document.getElementById(id).classList.remove('hover:bg-gray-400')-->
<!--    document.getElementById(id).classList.remove('bg-white')-->
<!--    document.getElementById(id).classList.remove('bg-blue-700')-->
<!--    document.getElementById(id).classList.remove('bg-fuchsia-300')-->
<!--    document.getElementById(id).classList.remove('bg-green-400')-->

<!--    document.getElementById(id).classList.add(`bg-${content}`);-->

<!--}-->

<!--const selectItem = (item) => {-->

<!--    content = item-->

<!--    document.getElementById('muestra').classList.remove('bg-blue-700')-->
<!--    document.getElementById('muestra').classList.remove('bg-white')-->
<!--    document.getElementById('muestra').classList.remove('bg-fuchsia-300')-->
<!--    document.getElementById('muestra').classList.remove('bg-green-400')-->

<!--    document.getElementById('muestra').classList.add(`bg-${content}`)-->

<!--    let sound = new Audio();-->
<!--    sound.src = `${props.asset_audio}/bubble.wav`;-->
<!--    sound.play()-->
<!--}-->

<!--</script>-->

<!--<template>-->
<!--    <div class="min-h-full bg-space">-->
<!--        <div class="md:container mx-auto">-->
<!--            <div class="font-bold text-xl bg-gray-900 mx-5 px-5 py-3 rounded-b-lg shadow-2xl text-white">Matematicas - -->
<!--                Nivel 10-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="container mx-auto mb-10 rounded-md px-5">-->
<!--            <div class="bg-blue-500 border-4 border-blue-600 flex-col pb-2 rounded-md shadow-2xl">-->
<!--                <div class="mx-5 py-2">-->
<!--                    <div>-->
<!--                        <span class="font-bold">Actividad 2 -</span>-->
<!--                        <span> Escribe todas las maneras diferentes de ordenar horizontalmente los colores Amarillo, fucsia y Azul</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="mx-5 grid md:grid-cols-4 gap-5">-->
<!--                    <div id="fondoMati"-->
<!--                         class="bg-red-300 border-4 border-red-600 rounded-md flex items-end justify-center">-->
<!--                        <div class="">-->
<!--                            <img :src="mati" width="250"-->
<!--                                 alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div-->
<!--                        class="bg-white border-4 border-stone-600 rounded-md p-5 md:col-span-3 grid md:grid-cols-4 gap-5">-->
<!--                        <div class="col-span-4 gap-x-10">-->
<!--                            <div class="flex justify-center">-->
<!--                                <div class="font-bold text-2xl">COMPLETAR</div>-->
<!--                            </div>-->
<!--                            <div class="border-black border-4 flex items-center justify-center p-5 grid grid-cols-3">-->
<!--                                <div class="grid grid-cols-2 gap-5 mx-10">-->
<!--                                    <button @click="selectItem('blue-700')" class="flex justify-center items-center ">-->
<!--                                        <div class="bg-blue-700 border-black border-4 p-9 rounded-lg">-->
<!--                                            <span class="font-MPlus text-5xl">{{ null }}</span>-->
<!--                                        </div>-->
<!--                                    </button>-->
<!--                                    <button @click="selectItem('green-400')" class="flex justify-center items-center ">-->
<!--                                        <div class="bg-green-400 border-black border-4 p-9 rounded-lg">-->
<!--                                            <span class="font-MPlus text-5xl">{{ null }}</span>-->
<!--                                        </div>-->
<!--                                    </button>-->
<!--                                    <button @click="selectItem('fuchsia-300')" class="flex justify-center items-center ">-->
<!--                                        <div class="bg-fuchsia-300 border-black border-4 p-9 rounded-lg">-->
<!--                                            <span class="font-MPlus text-5xl">{{ null }}</span>-->
<!--                                        </div>-->
<!--                                    </button>-->
<!--                                    <button @click="selectItem(null)" class="flex justify-center items-center ">-->
<!--                                        <div class="bg-white border-black border-4 p-9 rounded-lg">-->
<!--                                            <span class="font-MPlus text-5xl">{{ null }}</span>-->
<!--                                        </div>-->
<!--                                    </button>-->
<!--                                    <div class="p-10 col-span-2 border-black border-4" id="muestra">-->
<!--                                        {{ null }}-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-span-2 flex justify-center">-->
<!--                                    <div class="grid grid-cols-2 gap-10">-->
<!--                                        <div class="grid grid-cols-3">-->
<!--                                            <button @click="paint('num1')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num1">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num1 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num2')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num2">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num2 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num3')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num3">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num3 }}</span>-->
<!--                                            </button>-->
<!--                                        </div>-->

<!--                                        <div class="grid grid-cols-3">-->
<!--                                            <button @click="paint('num4')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num4">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num4 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num5')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num5">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num5 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num6')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num6">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num6 }}</span>-->
<!--                                            </button>-->
<!--                                        </div>-->

<!--                                        <div class="grid grid-cols-3">-->
<!--                                            <button @click="paint('num7')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num7">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num7 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num8')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num8">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num8 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num9')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num9">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num9 }}</span>-->
<!--                                            </button>-->
<!--                                        </div>-->

<!--                                        <div class="grid grid-cols-3">-->
<!--                                            <button @click="paint('num10')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num10">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num10 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num11')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num11">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num11 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num12')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num12">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num12 }}</span>-->
<!--                                            </button>-->
<!--                                        </div>-->

<!--                                        <div class="grid grid-cols-3">-->
<!--                                            <button @click="paint('num13')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num13">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num13 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num14')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num14">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num14 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num15')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num15">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num15 }}</span>-->
<!--                                            </button>-->
<!--                                        </div>-->

<!--                                        <div class="grid grid-cols-3">-->
<!--                                            <button @click="paint('num16')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num16">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num16 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num17')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num17">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num17 }}</span>-->
<!--                                            </button>-->
<!--                                            <button @click="paint('num18')" class="hover:bg-gray-400 border-black border-4 p-7"-->
<!--                                                    id="num18">-->
<!--                                                <span class="font-MPlus text-3xl">{{ num18 }}</span>-->
<!--                                            </button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
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
import {ref, watch, computed} from "vue";

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

let winLevel = ref(false);

let eye = ref(`${props.asset_images}/dog/eyes.png`)
let eraser = ref(`${props.asset_images}/herramientas/eraser.png`)
let mati = ref(`${props.asset_images}/robot/mati.png`)
let widthMati = ref(150);

let selectFig1 = ref('');
let selectFig2 = ref('');
let selectFig3 = ref('');

let indexSquare = ref('');

let indexSquareFig = ref('');

// const myTimeout = setTimeout(initialAudio, 2000);

let color1Error = ref(false);
let color2Error = ref(false);
let color3Error = ref(false);
let color4Error = ref(false);
let color5Error = ref(false);
let color6Error = ref(false);
let color7Error = ref(false);
let color8Error = ref(false);
let color9Error = ref(false);
let color10Error = ref(false);
let color11Error = ref(false);
let color12Error = ref(false);
let color13Error = ref(false);
let color14Error = ref(false);
let color15Error = ref(false);
let color16Error = ref(false);
let color17Error = ref(false);
let color18Error = ref(false);
let color19Error = ref(false);
let color20Error = ref(false);

let colorPainted1 = ref(false);
let colorPainted2 = ref(false);
let colorPainted3 = ref(false);
let colorPainted4 = ref(false);
let colorPainted5 = ref(false);
let colorPainted6 = ref(false);
let colorPainted7 = ref(false);
let colorPainted8 = ref(false);
let colorPainted9 = ref(false);
let colorPainted10 = ref(false);
let colorPainted11 = ref(false);
let colorPainted12 = ref(false);
let colorPainted13 = ref(false);
let colorPainted14 = ref(false);
let colorPainted15 = ref(false);
let colorPainted16 = ref(false);
let colorPainted17 = ref(false);
let colorPainted18 = ref(false);
let colorPainted19 = ref(false);
let colorPainted20 = ref(false);

let color1 = ref('');
let color2 = ref('');
let color3 = ref('');
let color4 = ref('');
let color5 = ref('');
let color6 = ref('');
let color7 = ref('');
let color8 = ref('');
let color9 = ref('');
let color10 = ref('');
let color11 = ref('');
let color12 = ref('');
let color13 = ref('');
let color14 = ref('');
let color15 = ref('');
let color16 = ref('');
let color17 = ref('');
let color18 = ref('');


let grupo1 = ref(color1.value + ' ' + color2.value + ' ' + color3.value);
let grupo2 = ref('');
let grupo3 = ref('');
let grupo4 = ref('');
let grupo5 = ref('');
let grupo6 = ref('');

let grupo1check = ref(false);
let grupo2check = ref(false);
let grupo3check = ref(false);
let grupo4check = ref(false);
let grupo5check = ref(false);
let grupo6check = ref(false);

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
            sound.src = `${props.asset_audio}/voz1/Pinta-de-forma-identica-el-cuadrado-derecha.m4a`;
            sound.play()
        }, 10000)
        widthMati.value = 160;
        setTimeout(resetMati, 15000);
        setTimeout(function () {
            helpAudio()
        }, 15000)
    }
}

function showIndexSquare() {
    indexSquareFig.value = 'colors';
    setTimeout(function () {
        indexSquare.value = 'border-black border-2 p-12 bg-blue-600';
    }, 4000);
    setTimeout(function () {
        indexSquare.value = 'border-black border-2 p-12 bg-red-600';
    }, 5500);
    setTimeout(function () {
        indexSquare.value = 'border-black border-2 p-12 bg-yellow-400';
    }, 7000);
    setTimeout(function () {
        indexSquare.value = 'border-black border-2 p-12 bg-red-600';
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
    selectFig1.value = 'rounded-md animate-pulse';
    eye.value = `${props.asset_images}/dog/ojos.gif`
    document.getElementById('eye').classList.remove('scale-50');
    document.getElementById('observa').classList.remove('text-xl');
    document.getElementById('observa').classList.add('text-3xl');
    document.getElementById('vista').classList.add('scale-125');
    document.getElementById('vista').classList.add('mt-10');

    setTimeout(function () {
        document.getElementById('eye').classList.add('scale-50');
        document.getElementById('observa').classList.add('text-xl');
        document.getElementById('observa').classList.remove('text-3xl');
        document.getElementById('vista').classList.remove('scale-125');
        document.getElementById('vista').classList.remove('mt-10');
        eye.value = `${props.asset_images}/dog/eyes.png`;
        selectFig1.value = '';
    }, 2000);
    setTimeout(function () {
        selectFig2.value = 'animate-pulse arrow';
        document.getElementById('arrow').setAttribute('fill', '#22c55e')
    }, 2000);
    setTimeout(function () {
        selectFig3.value = 'rounded-md animate-pulse scale-125';
    }, 2000);
}

const resetMati = () => {
    talk.value = false;
    selectFig1.value = '';
    selectFig2.value = '';
    selectFig3.value = '';
    indexSquare.value = '';
    document.getElementById('arrow').setAttribute('fill', '#9ca3af')
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
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.remove('bg-blue-600')
    document.getElementById(id).classList.remove('bg-yellow-400')
    document.getElementById(id).classList.remove('bg-fuchsia-400')
    document.getElementById(id).classList.remove('bg-green-600')
    document.getElementById(id).classList.add(`bg-${color}`);

    // Borrador
    const colorErrors = [color1Error, color2Error, color3Error, color4Error, color5Error, color6Error, color7Error,
        color8Error, color9Error, color10Error, color11Error, color12Error, color13Error, color14Error,
        color15Error, color16Error, color17Error, color18Error, color19Error, color20Error];

    watch(colorErrors, (colors) => {
        ShowEraser.value = colors.some(color => color);
    });

    // function verifyBox(boxNum, classToFind, classToAdd, classToRemove, classToRemove2, colorPainted, colorError) {
    //     const box = document.getElementById(`caja${boxNum}`);
    //
    //     if (box.classList.contains('bg-white')) {
    //         colorError.value = false;
    //         colorPainted.value = false;
    //         box.classList.remove(classToRemove, classToRemove2);
    //         box.classList.add(classToAdd);
    //         let sound = new Audio();
    //         sound.src = `${props.asset_audio}/eraser.mp3`;
    //         sound.play()
    //     } else {
    //         if (box.classList.contains(classToFind)) {
    //             box.classList.remove(classToRemove, classToRemove2);
    //             box.classList.add(classToAdd);
    //             colorError.value = false;
    //             box.classList.remove('animate-pulse')
    //             if (!colorPainted.value) {
    //                 animateBrush(`${props.asset_audio}/soapBubble.wav`, 1000, 'brush', '#16a34a');
    //             }
    //             colorPainted.value = true;
    //         } else if (!box.classList.contains(classToFind)) {
    //             box.classList.remove(classToAdd);
    //             box.classList.add(classToRemove, classToRemove2);
    //             colorPainted.value = false;
    //             box.classList.add('animate-pulse')
    //             if (!colorError.value) {
    //                 animateBrush(`${props.asset_audio}/wood.wav`, 900, 'brush-fail', 'red');
    //             } else {
    //                 let sound = new Audio();
    //                 sound.src = `${props.asset_audio}/paint.wav`;
    //                 sound.play()
    //             }
    //             colorError.value = true;
    //         }
    //     }
    // }

    if (document.getElementById('caja1').classList.contains('bg-white')) {
        color1.value = 'blanco'
        colorPainted1.value = false
        let sound = new Audio();
        sound.src = `${props.asset_audio}/eraser.mp3`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }

    if (document.getElementById('caja2').classList.contains('bg-white')) {
        color2.value = 'blanco'
        colorPainted2.value = false
        let sound = new Audio();
        sound.src = `${props.asset_audio}/eraser.mp3`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }

    if (document.getElementById('caja3').classList.contains('bg-white')) {
        color3.value = 'blanco'
        colorPainted3.value = false
        let sound = new Audio();
        sound.src = `${props.asset_audio}/eraser.mp3`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }


    if (document.getElementById('caja1').classList.contains('bg-blue-600') && colorPainted1.value === false) {
        color1.value = 'azul'
        colorPainted1.value = true
        let sound = new Audio();
        sound.src = `${props.asset_audio}/paint.wav`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }


    if (document.getElementById('caja2').classList.contains('bg-blue-600') && colorPainted2.value === false) {
        color2.value = 'azul'
        colorPainted2.value = true
        let sound = new Audio();
        sound.src = `${props.asset_audio}/paint.wav`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }

    if (document.getElementById('caja3').classList.contains('bg-blue-600') && colorPainted3.value === false) {
        color3.value = 'azul'
        colorPainted3.value = true
        let sound = new Audio();
        sound.src = `${props.asset_audio}/paint.wav`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }

    if (document.getElementById('caja1').classList.contains('bg-yellow-400') && colorPainted1.value === false) {
        color1.value = 'amarillo'
        colorPainted1.value = true
        let sound = new Audio();
        sound.src = `${props.asset_audio}/paint.wav`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }


    if (document.getElementById('caja2').classList.contains('bg-yellow-400') && colorPainted2.value === false) {
        color2.value = 'amarillo'
        colorPainted2.value = true
        let sound = new Audio();
        sound.src = `${props.asset_audio}/paint.wav`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }

    if (document.getElementById('caja3').classList.contains('bg-yellow-400') && colorPainted3.value === false) {
        color3.value = 'amarillo'
        colorPainted3.value = true
        let sound = new Audio();
        sound.src = `${props.asset_audio}/paint.wav`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }

    if (document.getElementById('caja1').classList.contains('bg-fuchsia-400') && colorPainted1.value === false) {
        color1.value = 'fuchsia'
        colorPainted1.value = true
        let sound = new Audio();
        sound.src = `${props.asset_audio}/paint.wav`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }


    if (document.getElementById('caja2').classList.contains('bg-fuchsia-400') && colorPainted2.value === false) {
        color2.value = 'fuchsia'
        colorPainted2.value = true
        let sound = new Audio();
        sound.src = `${props.asset_audio}/paint.wav`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
    }

    if (document.getElementById('caja3').classList.contains('bg-fuchsia-400') && colorPainted3.value === false) {
        color3.value = 'fuchsia'
        colorPainted3.value = true
        let sound = new Audio();
        sound.src = `${props.asset_audio}/paint.wav`;
        sound.play()
        grupo1.value = color1.value + ' ' + color2.value + ' ' + color3.value;
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
        'grupo1': {
            num: 3,
            classToFind: 'bg-white',
            // classToAdd: 'p-12',
            // classToRemove: 'py-8',
            // classToRemove2: 'px-5',
            colorPainted: colorPainted1,
            colorError: color1Error
        },
        'grupo2': {
            num: 13,
            classToFind: 'bg-white',
            // classToAdd: 'p-12',
            // classToRemove: 'py-8',
            // classToRemove2: 'px-5',
            colorPainted: colorPainted2,
            colorError: color2Error
        },
        'grupo23': {
            num: 23,
            classToFind: 'bg-white',
            // classToAdd: 'p-12',
            // classToRemove: 'py-8',
            // classToRemove2: 'px-5',
            colorPainted: colorPainted3,
            colorError: color3Error
        },
        'grupo33': {
            num: 33,
            classToFind: 'bg-white',
            // classToAdd: 'p-12',
            // classToRemove: 'py-8',
            // classToRemove2: 'px-5',
            colorPainted: colorPainted4,
            colorError: color4Error
        },
        'grupo43': {
            num: 43,
            classToFind: 'bg-white',
            // classToAdd: 'p-12',
            // classToRemove: 'py-8',
            // classToRemove2: 'px-5',
            colorPainted: colorPainted5,
            colorError: color5Error
        },
        'grupo53': {
            num: 53,
            classToFind: 'bg-white',
            // classToAdd: 'p-12',
            // classToRemove: 'py-8',
            // classToRemove2: 'px-5',
            colorPainted: colorPainted6,
            colorError: color6Error
        }
    };

    if (id in boxes) {
        const {num, classToFind, classToAdd, classToRemove, classToRemove2, colorPainted, colorError} = boxes[id];
        verifyBox(num, classToFind, classToAdd, classToRemove, classToRemove2, colorPainted, colorError);
    }
    //

    // grupo1.value = document.getElementById('caja1').contains('bg-blue-600'), document.getElementById('caja1').contains('bg-blue-600'), document.getElementById('caja1').contains('bg-blue-600')
    // if (document.getElementById('caja1'))


    // Completar figura
    if (document.getElementById('caja1').classList.contains('bg-blue-600') &&
        document.getElementById('caja2').classList.contains('bg-red-600') &&
        document.getElementById('caja3').classList.contains('bg-yellow-400') &&
        document.getElementById('caja4').classList.contains('bg-red-600')
    ) {
        win()
        let sound = new Audio();
        sound.src = `${props.asset_audio}/correctVictory.wav`;
        sound.play()
        // Swal.fire({
        //     icon: 'success',
        //     title: 'Completado!',
        //     text: 'Felicidades! Has completado la actividad',
        //     showConfirmButton: true,
        // })
    }
}

const selectColor = (bg) => {
    color = bg
    colorSelected.value++
    document.getElementById('muestra').classList.remove('bg-blue-600', 'bg-fuchsia-400', 'bg-yellow-400', 'bg-white');
    document.getElementById('muestra').classList.add(`bg-${bg}`);
    const colors = {
        'blue-600': '#2563eb',
        'red-600': '#dc2626',
        'fuchsia-400': '#e879f9',
        'yellow-400': '#facc15',
        'green-600': '#16a34a',
        'white': '#78716c'
    };

    const brush = document.getElementById('brush');
    brush.style.fill = colors[bg] || colors['white'];

    let sound = new Audio();
    sound.src = `${props.asset_audio}/bubble.wav`;
    sound.play();
}

const error = (id) => {

    let sound = new Audio();
    sound.src = `${props.asset_audio}/wood.wav`;
    sound.play()
    document.getElementById(id).classList.remove('hover:bg-gray-400');
    document.getElementById(id).classList.remove('bg-white');
    document.getElementById(id).classList.add('bg-red-800');
    document.getElementById(id).classList.add('brush-fail');
    setTimeout(() => {
        document.getElementById(id).classList.remove('bg-red-800');
        document.getElementById(id).classList.remove('brush-fail');
        document.getElementById(id).classList.add('hover:bg-gray-400');
    }, 500);
}

const win = () => {
    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/win/felicidades1.m4a`;
    sound.play();

    // document.getElementById('loader').classList.remove('hidden');
    // setTimeout(() => {
    //         document.getElementById('loader').classList.add('hidden');
    //         document.getElementById('loader').classList.remove('opacity-100');
    //         document.getElementById('loader').classList.add('opacity-0');
    // }, 2000);

    const loader = document.getElementById('loader');
    loader.classList.remove('hidden');

    setTimeout(() => {
        loader.classList.remove('opacity-0');
    }, 1)

    setTimeout(() => {
        loader.classList.add('opacity-0');
        setTimeout(() => {
            loader.classList.add('hidden');
            loader.classList.remove('opacity-0');
        }, 1500);
    }, 2500);


    setTimeout(() => {
        document.getElementById('nave').classList.add('avanzar');
        document.getElementById('b-1').classList.remove('bg-yellow-200');
        document.getElementById('fondoMati').classList.remove('bg-orange-200');
        document.getElementById('fondoMati').classList.add('bg-red-200');
        document.getElementById('b-1').classList.add('bg-red-400');

        document.getElementById('board').classList.remove('bg-white')
        document.getElementById('board').classList.add('from-yellow-50')
        document.getElementById('board').classList.add('to-yellow-500')
        document.getElementById('board').classList.add('to-red-200')
        document.getElementById('board').classList.add('bg-gradient-to-b')

        mati.value = `${props.asset_images}/dog/logrado.gif`
        widthMati.value = 200;
        talk.value = true;
        winLevel.value = true;
    }, 2500);
}

const boxClicked = (boxNumber) => {
    if (
        boxNumber === 3 || boxNumber === 13 || boxNumber === 23 ||
        boxNumber === 33 || boxNumber === 43 || boxNumber === 53 ||
        boxNumber === 63 || boxNumber === 73 || boxNumber === 83 ||
        boxNumber === 93 || boxNumber === 10 || boxNumber === 20 ||
        boxNumber === 30 || boxNumber === 40 || boxNumber === 50 ||
        boxNumber === 60 || boxNumber === 70 || boxNumber === 80 ||
        boxNumber === 90 || boxNumber === 100
    ) {
        paint(`caja${boxNumber}`)
    } else {
        error(`caja${boxNumber}`)
    }


}

</script>

<template>
    <div id="loader"
         class="hidden fixed top-0 left-0 w-full h-full bg-black opacity-0 transition-opacity duration-500 z-50">
        <div class="flex items-center justify-center h-full">

            <div class="box-of-star1">
                <div class="star star-position1"></div>
                <div class="star star-position2"></div>
                <div class="star star-position3"></div>
                <div class="star star-position4"></div>
                <div class="star star-position5"></div>
                <div class="star star-position6"></div>
                <div class="star star-position7"></div>
            </div>
            <div class="box-of-star2">
                <div class="star star-position1"></div>
                <div class="star star-position2"></div>
                <div class="star star-position3"></div>
                <div class="star star-position4"></div>
                <div class="star star-position5"></div>
                <div class="star star-position6"></div>
                <div class="star star-position7"></div>
            </div>
            <div class="box-of-star3">
                <div class="star star-position1"></div>
                <div class="star star-position2"></div>
                <div class="star star-position3"></div>
                <div class="star star-position4"></div>
                <div class="star star-position5"></div>
                <div class="star star-position6"></div>
                <div class="star star-position7"></div>
            </div>
            <div class="box-of-star4">
                <div class="star star-position1"></div>
                <div class="star star-position2"></div>
                <div class="star star-position3"></div>
                <div class="star star-position4"></div>
                <div class="star star-position5"></div>
                <div class="star star-position6"></div>
                <div class="star star-position7"></div>
            </div>
            <div class="astronaut" data-js="astro">
                <div class="head"></div>
                <div class="arm arm-left"></div>
                <div class="arm arm-right"></div>
                <div class="body">
                    <div class="panel"></div>
                </div>
                <div class="leg leg-left"></div>
                <div class="leg leg-right"></div>
                <div class="schoolbag"></div>
            </div>
        </div>
    </div>


    <div class="min-h-full bg-space">
        <nav class="bg-dominos px-4 py-3">
            <div class="max-w-7xl mx-auto">
                <div class="flex items-center justify-between">
                    <a href="#" class="text-white font-bold text-xl">Experiencias logico matematico -</a>
                    <div class="flex items-center mr-auto">
                        <span class="text-white mx-3 font-bold text-yellow-500">Actividad 1</span>
                    </div>
                    <a :href="props.route_back"
                       class="flex items-center gap-2 text-white hover:text-gray-200 mx-3 bg-gray-800 py-1 px-2 rounded-md hover:bg-gray-600">
                        Regresar al Lobby
                        <HomeIcon class="h-7 w-7"></HomeIcon>
                    </a>
                </div>
            </div>
        </nav>
        <div class="container mx-auto mb-10 rounded-md px-5 mt-5">
            <div class="bg-blue-400 border-4 border-blue-600 flex-col pb-2 rounded-md shadow-2xl">
                <div class="mx-5 py-2 flex justify-between">
                    <div>
                        <span class="font-bold">Actividad 1 -</span>
                        <span> Replica los colores como se muestra en la imagen izquierda</span>
                    </div>
                </div>
                <div class="mx-5 grid md:grid-cols-12 gap-5">
                    <div id="fondoMati"
                         class="bg-orange-200 border-4 border-blue-600 rounded-md flex items-end justify-center col-span-2">
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

                    <div id="board"
                         class="bg-white border-4 border-blue-600 rounded-md pr-5 md:col-span-10 grid md:grid-cols-11 flex items-center">


                        <div class="col-span-11">
                            <div class="flex justify-center mt-1 mx-5 gap-5">
                                <div>
                                    <img :src="`${props.asset_images}/planetas/tierra.svg`" width="50" alt="">
                                </div>
                                <div id="barras" class="grid grid-cols-7 gap-x-1 bg-gray-600 h-5 rounded-full mt-3">
                                    <div id="b-1" class="bg-gray-400 rounded-l-full h-5"></div>
                                    <div id="b-2" class="bg-gray-400 w-20 h-5"></div>
                                    <div class="bg-gray-400 w-20 h-5"></div>
                                    <div class="bg-gray-400 w-20 h-5"></div>
                                    <div class="bg-gray-400 w-20 h-5"></div>
                                    <div class="bg-gray-400 w-20 h-5"></div>
                                    <div class="bg-gray-400 w-20 rounded-r-full h-5"></div>
                                    <div class="flex justify-start">
                                        <img id="nave" class="" :src="`${props.asset_images}/espacio/nave.svg`"
                                             width="50" alt="">
                                    </div>
                                </div>
                                <div>
                                    <img :src="`${props.asset_images}/planetas/rojo.svg`" width="50" alt="">
                                </div>
                            </div>

                        </div>
                        <div :class="`${selectFig1} ml-5 col-span-5`">
                            <div class="flex-col justify-center items-center">
                                <div class="flex justify-center">
                                    <img class="scale-50 transition-500 duration-300" id="eye" :src="eye"
                                         width="100"
                                         alt="">
                                    <!--                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="100" height="100"-->
                                    <!--                                     s    viewBox="0 0 24 24">-->
                                    <!--                                        <path-->
                                    <!--                                            d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/>-->
                                    <!--                                    </svg>-->
                                </div>
                            </div>

                            <div class="flex justify-center items-center">
                                <span id="observa" class="font-MPlus text-xl duration-300">OBSERVA</span>
                            </div>

                            <div id="vista" class="border-gray-400 border-4 flex items-center justify-center p-2">
                                <div class="flex justify-center">
                                    <div class="grid md:grid-cols-2 gap-x-10">
                                        <div class="grid grid-cols-3 gap-y-5 gap-x-1">
                                            <div v-for="i in 9" :key="i + 100" :id="`caja${i + 100}`"
                                                 :class="['p-6', 'border-black', 'border-2', 'cursor-cell', 'grid', 'hover:bg-gray-400',
                                             { 'bg-red-600' : i + 100 === 102 || i + 100 === 106 || i + 100 === 107},
                                             { 'bg-blue-600': i + 100 === 103 || i + 100 === 104 || i + 100 === 109},
                                             { 'bg-green-500': i + 100 === 101 || i + 100 === 105 || i + 100 === 108}
                                             ]">
                                                {{ null }}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-y-5 gap-x-1">
                                            <div v-for="i in 9" :key="i + 109" :id="`caja${i + 109}`"
                                                 :class="['p-6', 'border-black', 'border-2', 'cursor-cell', 'grid', 'hover:bg-gray-400',
                                             { 'bg-red-600' : i + 109 === 112 || i + 109 === 114 || i + 109 === 116},
                                             { 'bg-blue-600': i + 109 === 111 || i + 109 === 113 || i + 109 === 117},
                                             { 'bg-green-500': i + 109 === 110 || i + 109 === 115 || i + 109 === 118}
                                             ]">
                                                {{ null }}
                                            </div>
                                        </div>
                                        <div class="mt-5 flex justify-center gap-5 col-span-2 opacity-50">
                                            <div class="flex justify-center">
                                                <button
                                                    class="rounded-md p-2 shadow-md bg-gray-300">
                                                    <svg class="icon-red" xmlns="http://www.w3.org/2000/svg" width="50"
                                                         height="50"
                                                         viewBox="0 0 24 24">
                                                        <path
                                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="flex justify-center">
                                                <button
                                                    class="rounded-md p-2 shadow-md bg-gray-300">
                                                    <svg class="icon-blue" xmlns="http://www.w3.org/2000/svg"
                                                         width="50"
                                                         height="50" viewBox="0 0 24 24">
                                                        <path
                                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="flex justify-center">
                                                <button
                                                    class="rounded-md p-2 shadow-md bg-gray-300">
                                                    <svg class="icon-green" xmlns="http://www.w3.org/2000/svg"
                                                         width="50"
                                                         height="50" viewBox="0 0 24 24">
                                                        <path
                                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                                    </svg>
                                                </button>
                                            </div>

                                            <button
                                                class="relative rounded-md p-2 shadow-md bg-gray-300  flex justify-center select-none">
                                                <div class="relative">
                                                    <img :src="eraser" alt="borrador" width="50">
                                                </div>
                                            </button>
                                        </div>
                                        <div id="muestraExample"
                                             class="opacity-50 border-2 border-black py-5 mx-10 mt-5 bg-white col-span-2 shadow-2xl shadow-blue-900"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center h-full pt-16">

                            <div v-if="winLevel === true" class="">

                                <span
                                    class="font-MPlus text-2xl bg-red-400 p-2 rounded-lg border-4 border-red-500 animate-pulse">Felicidades!</span>

                                <div class="flex justify-center pt-16">
                                    <svg fill="#9ca3af" id="arrow"
                                         :class="`${selectFig2} flex justify-center h-full pt-16`"
                                         clip-rule="evenodd" fill-rule="evenodd" width="120" stroke-linejoin="round"
                                         stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m13.022 14.999v3.251c0 .412.335.75.752.75.188 0 .375-.071.518-.206 1.775-1.685 4.945-4.692 6.396-6.069.2-.189.312-.452.312-.725 0-.274-.112-.536-.312-.725-1.451-1.377-4.621-4.385-6.396-6.068-.143-.136-.33-.207-.518-.207-.417 0-.752.337-.752.75v3.251h-9.02c-.531 0-1.002.47-1.002 1v3.998c0 .53.471 1 1.002 1z"
                                            fill-rule="nonzero"/>
                                    </svg>
                                </div>
                            </div>

                            <svg v-else fill="#9ca3af" id="arrow"
                                 :class="`${selectFig2} flex justify-center h-full pt-16`"
                                 clip-rule="evenodd" fill-rule="evenodd" width="80"
                                 stroke-linejoin="round"
                                 stroke-miterlimit="2" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m13.022 14.999v3.251c0 .412.335.75.752.75.188 0 .375-.071.518-.206 1.775-1.685 4.945-4.692 6.396-6.069.2-.189.312-.452.312-.725 0-.274-.112-.536-.312-.725-1.451-1.377-4.621-4.385-6.396-6.068-.143-.136-.33-.207-.518-.207-.417 0-.752.337-.752.75v3.251h-9.02c-.531 0-1.002.47-1.002 1v3.998c0 .53.471 1 1.002 1z"
                                    fill-rule="nonzero"/>
                            </svg>
                        </div>
                        <div id="fig3" :class="`${selectFig3} mr-5 pb-5 duration-300 col-span-5`">

                            <div class="flex justify-center mt-5 pb-2">
                                <svg id="brush" class="duration-300" xmlns="http://www.w3.org/2000/svg" width="30"
                                     fill="#78716c"
                                     viewBox="0 0 24 24">
                                    <path
                                        d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                </svg>
                            </div>


                            <div class="flex justify-center items-center mt-2">
                                <span id="colorea" class="font-MPlus text-xl">COLOREA</span>
                            </div>

                            <div id="actividad" class="border-gray-400 border-4 flex items-center justify-center p-2 ">
                                <div class="flex justify-center">
                                    <div class="grid md:grid-cols-2 gap-x-10">
                                        <div class="grid grid-cols-3 gap-y-5 gap-x-1">
                                            <div v-for="i in 9" :key="i" :id="`caja${i}`"
                                                 @click="paint(`caja${i}`)"
                                                 :class="['p-6', 'border-black', 'border-2', 'cursor-cell', 'grid', 'hover:bg-gray-400'
                                             ]">
                                                {{ null }}
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-3 gap-y-5 gap-x-1">
                                            <div v-for="i in 9" :key="i + 9" :id="`caja${i + 9}`"
                                                 @click="paint(`caja${i + 9}`)"
                                                 :class="['p-6', 'border-black', 'border-2', 'cursor-cell', 'grid', 'hover:bg-gray-400'
                                             ]">
                                                {{ null }}
                                            </div>
                                        </div>
                                        <div class="mt-5 flex justify-center gap-5 col-span-2">
                                            <div class="flex justify-center">
                                                <button @click="selectColor('fuchsia-400')"
                                                        class="rounded-md p-2 shadow-md bg-gray-300">
                                                    <svg class="icon-fuchsia" xmlns="http://www.w3.org/2000/svg"
                                                         width="50"
                                                         height="50"
                                                         viewBox="0 0 24 24">
                                                        <path
                                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="flex justify-center">
                                                <button @click="selectColor('green-600')"
                                                        class="rounded-md p-2 shadow-md bg-gray-300">
                                                    <svg class="icon-green" xmlns="http://www.w3.org/2000/svg"
                                                         width="50"
                                                         height="50" viewBox="0 0 24 24">
                                                        <path
                                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                                    </svg>
                                                </button>
                                            </div>

                                            <div class="flex justify-center">
                                                <button @click="selectColor('blue-600')"
                                                        class="rounded-md p-2 shadow-md bg-gray-300">
                                                    <svg class="icon-blue" xmlns="http://www.w3.org/2000/svg"
                                                         width="50"
                                                         height="50" viewBox="0 0 24 24">
                                                        <path
                                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                                    </svg>
                                                </button>
                                            </div>

                                            <button @click="selectColor('white')"
                                                    class="relative rounded-md p-2 shadow-md bg-gray-300  flex justify-center select-none">
                                                <div class="relative">
                                                    <img :src="eraser" alt="borrador" width="50">
                                                </div>
                                            </button>
                                        </div>
                                        <div id="muestra"
                                             class="border-2 border-black py-5 mx-10 mt-5 bg-white col-span-2 shadow-2xl shadow-blue-900"></div>
                                    </div>
                                </div>
                            </div>
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

.icon-fuchsia {
    fill: #e879f9
}

.icon-fuchsia:hover {
    fill: #a855f7
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

.icon-red {
    fill: #16a34a;
}

.icon-red:hover {
    fill: #15803d;
}

.icon-pink {
    fill: #ec4899;
}

.icon-pink:hover {
    fill: #db2777;
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

.avanzar {
    transform: translateX(100px);
    transition: transform 0.5s ease-in-out;
}


/*Astronauta*/
@keyframes snow {
    0% {
        opacity: 0;
        transform: translateY(0px);
    }

    20% {
        opacity: 1;
    }

    100% {
        opacity: 1;
        transform: translateY(650px);
    }
}

@keyframes astronaut {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

.box-of-star1,
.box-of-star2,
.box-of-star3,
.box-of-star4 {
    width: 100%;
    position: absolute;
    z-index: 10;
    left: 0;
    transform: translateY(650px);
    height: 700px;
}

.box-of-star1 {
    animation: snow 5s linear infinite;
}

.box-of-star2 {
    animation: snow 5s -1.64s linear infinite;
}

.box-of-star3 {
    animation: snow 5s -2.30s linear infinite;
}

.box-of-star4 {
    animation: snow 5s -3.30s linear infinite;
}

.star {
    width: 3px;
    height: 3px;
    border-radius: 50%;
    background-color: #FFF;
    position: absolute;
    z-index: 10;
    opacity: 0.7;
}

.star:before {
    content: "";
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background-color: #FFF;
    position: absolute;
    z-index: 10;
    top: 80px;
    left: 70px;
    opacity: .7;
}

.star:after {
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #FFF;
    position: absolute;
    z-index: 10;
    top: 8px;
    left: 170px;
    opacity: .9;
}

.star-position1 {
    top: 30px;
    left: 20px;
}

.star-position2 {
    top: 110px;
    left: 250px;
}

.star-position3 {
    top: 60px;
    left: 570px;
}

.star-position4 {
    top: 120px;
    left: 900px;
}

.star-position5 {
    top: 20px;
    left: 1120px;
}

.star-position6 {
    top: 90px;
    left: 1280px;
}

.star-position7 {
    top: 30px;
    left: 1480px;
}

.astronaut {
    width: 250px;
    height: 300px;
    position: absolute;
    z-index: 11;
    top: calc(50% - 150px);
    left: calc(50% - 125px);
    animation: astronaut 5s linear infinite;
}

.schoolbag {
    width: 100px;
    height: 150px;
    position: absolute;
    z-index: 1;
    top: calc(50% - 75px);
    left: calc(50% - 50px);
    background-color: #94b7ca;
    border-radius: 50px 50px 0 0 / 30px 30px 0 0;
}

.head {
    width: 97px;
    height: 80px;
    position: absolute;
    z-index: 3;
    background: -webkit-linear-gradient(left, #e3e8eb 0%, #e3e8eb 50%, #fbfdfa 50%, #fbfdfa 100%);
    border-radius: 50%;
    top: 34px;
    left: calc(50% - 47.5px);
}

.head:after {
    content: "";
    width: 60px;
    height: 50px;
    position: absolute;
    top: calc(50% - 25px);
    left: calc(50% - 30px);
    background: -webkit-linear-gradient(top, #15aece 0%, #15aece 50%, #0391bf 50%, #0391bf 100%);
    border-radius: 15px;
}

.head:before {
    content: "";
    width: 12px;
    height: 25px;
    position: absolute;
    top: calc(50% - 12.5px);
    left: -4px;
    background-color: #618095;
    border-radius: 5px;
    box-shadow: 92px 0px 0px #618095;
}

.body {
    width: 85px;
    height: 100px;
    position: absolute;
    z-index: 2;
    background-color: #fffbff;
    border-radius: 40px / 20px;
    top: 105px;
    left: calc(50% - 41px);
    background: -webkit-linear-gradient(left, #e3e8eb 0%, #e3e8eb 50%, #fbfdfa 50%, #fbfdfa 100%);
}

.panel {
    width: 60px;
    height: 40px;
    position: absolute;
    top: 20px;
    left: calc(50% - 30px);
    background-color: #b7cceb;
}

.panel:before {
    content: "";
    width: 30px;
    height: 5px;
    position: absolute;
    top: 9px;
    left: 7px;
    background-color: #fbfdfa;
    box-shadow: 0px 9px 0px #fbfdfa, 0px 18px 0px #fbfdfa;
}

.panel:after {
    content: "";
    width: 8px;
    height: 8px;
    position: absolute;
    top: 9px;
    right: 7px;
    background-color: #fbfdfa;
    border-radius: 50%;
    box-shadow: 0px 14px 0px 2px #fbfdfa;
}

.arm {
    width: 80px;
    height: 30px;
    position: absolute;
    top: 121px;
    z-index: 2;
}

.arm-left {
    left: 30px;
    background-color: #e3e8eb;
    border-radius: 0 0 0 39px;
}

.arm-right {
    right: 30px;
    background-color: #fbfdfa;
    border-radius: 0 0 39px 0;
}

.arm-left:before,
.arm-right:before {
    content: "";
    width: 30px;
    height: 70px;
    position: absolute;
    top: -40px;
}

.arm-left:before {
    border-radius: 50px 50px 0px 120px / 50px 50px 0 110px;
    left: 0;
    background-color: #e3e8eb;
}

.arm-right:before {
    border-radius: 50px 50px 120px 0 / 50px 50px 110px 0;
    right: 0;
    background-color: #fbfdfa;
}

.arm-left:after,
.arm-right:after {
    content: "";
    width: 30px;
    height: 10px;
    position: absolute;
    top: -24px;
}

.arm-left:after {
    background-color: #6e91a4;
    left: 0;
}

.arm-right:after {
    right: 0;
    background-color: #b6d2e0;
}

.leg {
    width: 30px;
    height: 40px;
    position: absolute;
    z-index: 2;
    bottom: 70px;
}

.leg-left {
    left: 76px;
    background-color: #e3e8eb;
    transform: rotate(20deg);
}

.leg-right {
    right: 73px;
    background-color: #fbfdfa;
    transform: rotate(-20deg);
}

.leg-left:before,
.leg-right:before {
    content: "";
    width: 50px;
    height: 25px;
    position: absolute;
    bottom: -26px;
}

.leg-left:before {
    left: -20px;
    background-color: #e3e8eb;
    border-radius: 30px 0 0 0;
    border-bottom: 10px solid #6d96ac;
}

.leg-right:before {
    right: -20px;
    background-color: #fbfdfa;
    border-radius: 0 30px 0 0;
    border-bottom: 10px solid #b0cfe4;
}
</style>
