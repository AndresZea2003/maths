<script setup>
import {HomeIcon} from "@heroicons/vue/20/solid";
import {ArrowDownIcon, CheckBadgeIcon, ChevronRightIcon} from "@heroicons/vue/24/solid"
import Swal from 'sweetalert2'
import {ref, watch, computed} from "vue";

import {actions, saludo} from '../../use';

const props = defineProps({
    number_of_activities: {type: Number, required: true},
    activity_number: {type: Number, required: true},
    planet_1: {type: String, required: true},
    planet_2: {type: String, required: true},
    item_1: {type: String, required: true},
    item_2: {type: String, required: true},
    item_3: {type: String, required: true},
    color_1: {type: String},
    color_2: {type: String},
    color_3: {type: String},
    icon_1: {type: String},
    icon_2: {type: String},
    icon_3: {type: String},
    sound_item_1: {type: String, required: true},
    sound_item_2: {type: String, required: true},
    sound_item_3: {type: String, required: true},
    the_sound_item_1: {type: String},
    the_sound_item_2: {type: String},
    the_sound_item_3: {type: String},
    activity_description: {type: String, required: true},
    audio_win: {type: String, required: true},
    bg_color_activity: {type: String, required: true},
    border_color_activity: {type: String, required: true},
    palette_text: {type: String, required: true},
    route_back: {type: String, required: true},
    route_next: {type: String, required: true},
    asset_videos: {type: String, required: true},
    asset_images: {type: String, required: true},
    asset_audio: {type: String, required: true},
    sudoku_size: {type: Number, required: true},
    introduction: {type: Boolean},
    introduction_audio_1: {type: String, required: true},
    introduction_audio_2: {type: String, required: true},
    caja_1: {type: String},
    caja_2: {type: String},
    caja_3: {type: String},
    caja_4: {type: String},
    caja_5: {type: String},
    caja_6: {type: String},
    caja_7: {type: String},
    caja_8: {type: String},
    caja_9: {type: String},
    interactive_array: {type: Array},
    interactive_array_solution: {type: Array},
    ok_audio_1: {type: String},
    ok_audio_2: {type: String},
    ok_audio_3: {type: String},
    ok_audio_4: {type: String},
    error_audio_1: {type: String},
    error_audio_2: {type: String},
    error_audio_3: {type: String},
    error_audio_4: {type: String},
    selector_1: {type: Array},
    selector_2: {type: Array},
    selector_3: {type: Array},
    selector_4: {type: Array},
})

let dato1 = ref({
    type: null,
    value: null
})
let dato2 = ref({
    type: null,
    value: null
})
let dato3 = ref({
    type: null,
    value: null
})

if (props.item_1.length > 1) {
    dato1.value = {
        type: 'image',
        value: props.item_1
    }
} else {
    dato1.value = {
        type: 'item',
        value: props.item_1
    }
}

if (props.item_2.length > 1) {
    dato2.value = {
        type: 'image',
        value: props.item_2
    }
} else {
    dato2.value = {
        type: 'item',
        value: props.item_2
    }
}

if (props.item_3.length > 1) {
    dato3.value = {
        type: 'image',
        value: props.item_3
    }
} else {
    dato3.value = {
        type: 'item',
        value: props.item_3
    }
}

if (props.color_1) {
    dato1.value = {
        type: 'color',
        value: props.color_1
    }
}

if (props.color_2) {
    dato2.value = {
        type: 'color',
        value: props.color_2
    }
}

if (props.color_3) {
    dato3.value = {
        type: 'color',
        value: props.color_3
    }
}


console.log(dato1.value, dato2.value, dato3.value)

const soundItem1 = () => {
    let sound = new Audio();
    sound.src = `${props.sound_item_1}`;
    sound.play()
}

const soundItem2 = () => {
    let sound = new Audio();
    sound.src = `${props.sound_item_2}`;
    sound.play()
}

const soundItem3 = () => {
    let sound = new Audio();
    sound.src = `${props.sound_item_3}`;
    sound.play()
}

let content = ref(null);

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


let combinations = ['123', '132', '213', '231', '312', '321']

let sequenceNumber = ref('')

let grupo1 = ref('');
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


let filaFocus = ref(1)
const boxNumRange = [1, 18];

let focusId = ref('')

let canPaint = ref(true)

// const myTimeout = setTimeout(initialAudio, 2000);

// setTimeout(function () {
//     prepareSudoku()
//     setTimeout(function () {
//         interactive()
//     }, 500)
// }, 1000)


setTimeout(function () {
    Swal.fire({
        title: 'Tutorial',
        text: 'Llegamos a los Sudokus! Aqui veremos un poco de pensamiento combinatorio, filas y muchos colores!',
        icon: 'warning',
        confirmButtonText: 'Comenzar'
    }).then((result) => {
        // if (result.isConfirmed) {
        //     initialAudio();
        //     prepareSudoku()
        // }
        initialAudio();
        prepareSudoku()
    });
}, 500)

const classSelect = 'bg-yellow-500'

const selectFila1 = () => {

    document.getElementById('arrowFila1').classList.replace('opacity-0', 'opacity-80')

    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/fila1.m4a`;
    sound.play()

    document.getElementById('caja1').classList.add(classSelect)
    document.getElementById('caja2').classList.add(classSelect)
    document.getElementById('caja3').classList.add(classSelect)

    setTimeout(function () {
        document.getElementById('caja1').classList.remove(classSelect)
        document.getElementById('caja2').classList.remove(classSelect)
        document.getElementById('caja3').classList.remove(classSelect)
    }, 2000)
}

const selectFila2 = () => {

    document.getElementById('arrowFila1').classList.replace('opacity-80', 'hidden')
    document.getElementById('arrowFila2').classList.replace('opacity-0', 'opacity-80')

    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/fila2.m4a`;
    sound.play()

    document.getElementById('caja4').classList.add(classSelect)
    document.getElementById('caja5').classList.add(classSelect)
    document.getElementById('caja6').classList.add(classSelect)

    setTimeout(function () {
        document.getElementById('caja4').classList.remove(classSelect)
        document.getElementById('caja5').classList.remove(classSelect)
        document.getElementById('caja6').classList.remove(classSelect)
    }, 2000)
}

const selectFila3 = () => {

    document.getElementById('arrowFila2').classList.replace('opacity-80', 'hidden')
    document.getElementById('arrowFila3').classList.replace('opacity-0', 'opacity-80')

    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yfila3.m4a`;
    sound.play()

    document.getElementById('caja7').classList.add(classSelect)
    document.getElementById('caja8').classList.add(classSelect)
    document.getElementById('caja9').classList.add(classSelect)

    setTimeout(function () {
        document.getElementById('arrowFila3').classList.replace('opacity-80', 'hidden')
        document.getElementById('caja7').classList.remove(classSelect)
        document.getElementById('caja8').classList.remove(classSelect)
        document.getElementById('caja9').classList.remove(classSelect)
    }, 2000)
}

const selectCol1 = () => {

    document.getElementById('arrowCol1').classList.replace('opacity-0', 'opacity-80')

    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/col1.m4a`;
    sound.play()

    document.getElementById('caja1').classList.add(classSelect)
    document.getElementById('caja4').classList.add(classSelect)
    document.getElementById('caja7').classList.add(classSelect)

    setTimeout(function () {
        document.getElementById('caja1').classList.remove(classSelect)
        document.getElementById('caja4').classList.remove(classSelect)
        document.getElementById('caja7').classList.remove(classSelect)
    }, 2000)
}

const selectCol2 = () => {

    document.getElementById('arrowCol1').classList.replace('opacity-80', 'hidden')
    document.getElementById('arrowCol2').classList.replace('opacity-0', 'opacity-80')

    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/col2.m4a`;
    sound.play()

    document.getElementById('caja2').classList.add(classSelect)
    document.getElementById('caja5').classList.add(classSelect)
    document.getElementById('caja8').classList.add(classSelect)

    setTimeout(function () {
        document.getElementById('caja2').classList.remove(classSelect)
        document.getElementById('caja5').classList.remove(classSelect)
        document.getElementById('caja8').classList.remove(classSelect)
    }, 2000)
}

const selectCol3 = () => {

    document.getElementById('arrowCol2').classList.replace('opacity-80', 'hidden')
    document.getElementById('arrowCol3').classList.replace('opacity-0', 'opacity-80')

    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/ycol3.m4a`;
    sound.play()

    document.getElementById('caja3').classList.add(classSelect)
    document.getElementById('caja6').classList.add(classSelect)
    document.getElementById('caja9').classList.add(classSelect)

    setTimeout(function () {
        document.getElementById('arrowCol3').classList.replace('opacity-80', 'hidden')

        document.getElementById('caja3').classList.remove(classSelect)
        document.getElementById('caja6').classList.remove(classSelect)
        document.getElementById('caja9').classList.remove(classSelect)
    }, 2000)
}

function initialAudio() {
    if (talk.value === false) {
        talk.value = true;

        let sound = new Audio(props.introduction_audio_1);

        function onSoundEnded() {
            sound.removeEventListener('ended', onSoundEnded);

            if (props.introduction === true) {

                document.getElementById('arrowFila1').classList.remove('hidden')
                document.getElementById('arrowFila2').classList.remove('hidden')
                document.getElementById('arrowFila3').classList.remove('hidden')
                document.getElementById('arrowCol1').classList.remove('hidden')
                document.getElementById('arrowCol2').classList.remove('hidden')
                document.getElementById('arrowCol3').classList.remove('hidden')

                selectFila1()

                setTimeout(function () {
                    selectFila2()
                    setTimeout(function () {
                        selectFila3()
                    }, 2000)
                }, 2000)


                setTimeout(function () {
                    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/colmismacantidad.m4a`;

                    function onSoundEnded() {
                        sound.removeEventListener('ended', onSoundEnded);

                        selectCol1()

                        setTimeout(function () {
                            selectCol2()
                            setTimeout(function () {
                                selectCol3()
                            }, 2000)
                        }, 2000)

                        setTimeout(function () {
                            sound.src = `${props.asset_audio}/voz1/sudokus/inicios/deberascompletar.m4a`;

                            setTimeout(function () {
                                document.getElementById(`caja${props.interactive_array[0]}`).classList.add('bg-red-400')
                                document.getElementById(`caja${props.interactive_array[1]}`).classList.add('bg-red-400')
                                document.getElementById(`caja${props.interactive_array[2]}`).classList.add('bg-red-400')
                            }, 500)

                            setTimeout(function () {
                                document.getElementById(`caja${props.interactive_array[0]}`).classList.remove('bg-red-400')
                                document.getElementById(`caja${props.interactive_array[1]}`).classList.remove('bg-red-400')
                                document.getElementById(`caja${props.interactive_array[2]}`).classList.remove('bg-red-400')
                            }, 3500)

                            function onSoundEnded() {
                                sound.removeEventListener('ended', onSoundEnded);

                                showIndexSquare()
                            }

                            sound.addEventListener('ended', onSoundEnded)
                            sound.play()
                        }, 6000)

                    }

                    sound.addEventListener('ended', onSoundEnded)
                    sound.play()
                }, 6000)
            } else {
                showIndexSquare()
            }
        }

        sound.addEventListener('ended', onSoundEnded)
        sound.play();

        widthMati.value = 160;
        // setTimeout(resetMati, 24000);
        // setTimeout(function () {
        //     helpAudio()
        // }, 15000)
    }
}

const audioColor1 = () => {
    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/colors/Verde.m4a`;
    sound.play()
}

const audioColor2 = () => {
    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/colors/Azul.m4a`;
    sound.play()
}

const audioColor3 = () => {
    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/colors/Rojo.m4a`;
    sound.play()
}

let contentIndexSquare = ref('')
let imageIndexSquare = ref(false)

console.log('PAAAAAAAA', dato1.value, dato2.value, dato3.value)

function showIndexSquare() {
    indexSquareFig.value = 'colors';
    soundItem1()
    if (dato1.value.type === 'color') {
        imageIndexSquare.value = false
        indexSquare.value = `border-black border-2 h-24 w-24 bg-${dato1.value.value} flex justify-center items-center`;
        contentIndexSquare.value = null
    }
    if (dato1.value.type === 'item') {
        imageIndexSquare.value = false
        indexSquare.value = `border-black border-2 h-24 w-24 bg-gray-300 flex justify-center items-center`;
        contentIndexSquare.value = dato1.value.value
    }
    if (dato1.value.type === 'image') {
        imageIndexSquare.value = true
        indexSquare.value = `border-black border-2 h-24 w-24 bg-gray-300 flex justify-center items-center`;
        contentIndexSquare.value = dato1.value.value
    }
    setTimeout(function () {
        soundItem2()
        if (dato2.value.type === 'color') {
            indexSquare.value = `border-black border-2 h-24 w-24 bg-${dato2.value.value} flex justify-center items-center`;
            contentIndexSquare.value = null
        }
        if (dato2.value.type === 'item') {
            indexSquare.value = `border-black border-2 h-24 w-24 bg-gray-300 flex justify-center items-center`;
            contentIndexSquare.value = dato2.value.value
        }
        if (dato2.value.type === 'image') {
            imageIndexSquare.value = true
            indexSquare.value = `border-black border-2 h-24 w-24 bg-gray-300 flex justify-center items-center`;
            contentIndexSquare.value = dato2.value.value

        }
    }, 1500);
    setTimeout(function () {

        let sound = new Audio(`${props.asset_audio}/voz1/y .m4a`);
        sound.play();

        setTimeout(function () {
            soundItem3()
        }, 280)

        if (dato3.value.type === 'color') {
            imageIndexSquare.value = false
            indexSquare.value = `border-black border-2 h-24 w-24 bg-${dato3.value.value} flex justify-center items-center`;
            contentIndexSquare.value = null
        }
        if (dato3.value.type === 'item') {
            imageIndexSquare.value = false
            indexSquare.value = `border-black border-2 h-24 w-24 bg-gray-300 flex justify-center items-center`;
            contentIndexSquare.value = dato3.value.value
        }
        if (dato3.value.type === 'image') {
            imageIndexSquare.value = true
            indexSquare.value = `border-black border-2 h-24 w-24 bg-gray-300 flex justify-center items-center`;
            contentIndexSquare.value = dato3.value.value
            setTimeout(function () {
                imageIndexSquare.value = false
            }, 1500)
        }
    }, 3000);
    setTimeout(function () {
        indexSquare.value = '';
        contentIndexSquare.value = '';

        let sound = new Audio(props.introduction_audio_2);

        function onSoundEnded() {
            sound.removeEventListener('ended', onSoundEnded);
            interactive()
        }

        sound.addEventListener('ended', onSoundEnded)

        sound.play();

    }, 4500);
}

let interactiveMode = ref(false)

let selectBox = ref('')

let nextSelectBox = ref(0)

function interactive() {
    if (props.interactive_array.length > 0) {
        interactiveMode.value = true
        selectBox.value = (`caja${props.interactive_array[nextSelectBox.value]}`)
        console.log(selectBox.value)
        document.getElementById(selectBox.value).classList.add('bg-green-infinite')
        console.log('Comienza la interactividad!')
    } else {
        console.log('No hay interactividad')
    }

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
    document.getElementById('subVista').classList.add('scale-125');
    document.getElementById('subVista').classList.add('mt-5');

    setTimeout(function () {
        document.getElementById('eye').classList.add('scale-50');
        document.getElementById('observa').classList.add('text-xl');
        document.getElementById('observa').classList.remove('text-3xl');
        document.getElementById('subVista').classList.remove('scale-125');
        document.getElementById('subVista').classList.remove('mt-5');
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

const successSound = () => {
    let sound = new Audio();
    sound.src = `${props.asset_audio}/success.wav`;
    sound.play()
}

const errorSound = () => {
    let sound = new Audio();
    sound.src = `${props.asset_audio}/wood.wav`;
    sound.play()
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

    successSound()
    sound.src = `${props.audio_win}`;
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
        document.getElementById('naveDiv').classList.add('translate-x-[100%]');
        for (let i = 1; i <= props.activity_number; i++) {
            const elementId = `bar${i}`;
            document.getElementById(elementId).classList.replace('bg-gray-400', 'bg-green-400');
        }

        mati.value = `${props.asset_images}/dog/logrado.gif`
        widthMati.value = 200;
        talk.value = true;
        winLevel.value = true;
    }, 2500);
}

const firstClick = ref(false)

let colorSelected = ref('bg-white');

let contentType = ref('color')

const selectItem = (itemType, itemValue) => {
    if (itemType === 'item') {
        contentType.value = itemType
        content.value = itemValue

        firstClick.value = true

        let sound = new Audio();
        sound.src = `${props.asset_audio}/bubble.wav`;
        sound.play()
    } else if (itemType === 'color') {
        contentType.value = itemType
        colorSelected.value = `bg-${itemValue}`
        content.value = null

        firstClick.value = true

        let sound = new Audio();
        sound.src = `${props.asset_audio}/bubble.wav`;
        sound.play()
    } else if (itemType === 'image') {
        console.log(itemValue)
        contentType.value = itemType
        colorSelected.value = 'bg-white'
        content.value = itemValue

        let sound = new Audio();
        sound.src = `${props.asset_audio}/bubble.wav`;
        sound.play()
    } else if (itemType === null) {
        contentType.value = 'color'
        colorSelected.value = 'bg-white'
        content.value = null

        let sound = new Audio();
        sound.src = `${props.asset_audio}/bubble.wav`;
        sound.play()
    }
}

const item1 = ref(null);
const item2 = ref(null);
const item3 = ref(null)
const item4 = ref(null)
const item5 = ref(null)
const item6 = ref(null)
const item7 = ref(null)
const item8 = ref(null)
const item9 = ref(null)
const item10 = ref(null)
const item11 = ref(null)
const item12 = ref(null)
const item13 = ref(null)
const item14 = ref(null)
const item15 = ref(null)
const item16 = ref(null)
const item17 = ref(null)
const item18 = ref(null)

const ShowImg1 = ref(false);
const ShowImg2 = ref(false);
const ShowImg3 = ref(false)
const ShowImg4 = ref(false)
const ShowImg5 = ref(false)
const ShowImg6 = ref(false)
const ShowImg7 = ref(false)
const ShowImg8 = ref(false)
const ShowImg9 = ref(false)
const ShowImg10 = ref(false)
const ShowImg11 = ref(false)
const ShowImg12 = ref(false)
const ShowImg13 = ref(false)
const ShowImg14 = ref(false)
const ShowImg15 = ref(false)
const ShowImg16 = ref(false)
const ShowImg17 = ref(false)
const ShowImg18 = ref(false)

const items = [item1, item2, item3, item4, item5, item6, item7, item8, item9, item10, item11, item12, item13, item14, item15, item16, item17, item18];

const showImages = [ShowImg1, ShowImg2, ShowImg3, ShowImg4, ShowImg5, ShowImg6, ShowImg7, ShowImg8, ShowImg9, ShowImg10, ShowImg11, ShowImg12, ShowImg13, ShowImg14, ShowImg15, ShowImg16, ShowImg17, ShowImg18];

let sudokuArray = ref(["0", "0", "0", "0", "0", "0", "0", "0", "0"])

let filas = ref([])

let columnas = ref([])

let validateSudoku = {
    valido: true
}

let filaError1 = ref(false)
let filaError2 = ref(false)
let filaError3 = ref(false)

let filaCol1 = ref(false)
let filaCol2 = ref(false)
let filaCol3 = ref(false)

let textValidate = ref(null)

const waterBubbleSound = () => {
    let sound = new Audio();
    sound.src = `${props.asset_audio}/waterBubble.wav`;
    sound.play()
}

const paintString = (id, numIndex) => {


    if (content.value === null && firstClick.value === false) {
        let sound = new Audio();
        sound.src = `${props.asset_audio}/wood.wav`;
        sound.play()

        Swal.fire({
            icon: 'warning',
            title: 'Es necesario un item!',
            text: 'Selecciona un item para continuar',
            showConfirmButton: true,
        })
        return
    }

    if (interactiveMode.value === true) {
        if (id !== selectBox.value) {
            error(id)
            return;
        }
    }


    let showImg = false
    let paintType = ''

    document.getElementById(id).classList.remove('hover:bg-gray-400')
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.remove(`bg-${props.color_1}`)
    document.getElementById(id).classList.remove(`bg-${props.color_2}`)
    document.getElementById(id).classList.remove(`bg-${props.color_3}`)

    if (content.value === null) {
        items[numIndex].value = null;
        showImages[numIndex].value = false;
        document.getElementById(id).classList.add(`${colorSelected.value}`);
        paintType = 'color'
    } else {
        if (content.value.length === 1) {
            showImages[numIndex].value = false;
            items[numIndex].value = content.value;
            paintType = 'item'
        }

        if (content.value.length > 1) {
            showImages[numIndex].value = true;
            items[numIndex].value = content.value;
            paintType = 'image'
        }
    }

    if (paintType === 'color') {
        if (colorSelected.value === `bg-${props.color_1}`) {
            // console.log('1')
            sequenceNumber.value = '1'
        } else if (colorSelected.value === `bg-${props.color_2}`) {
            // console.log('2')
            sequenceNumber.value = '2'
        } else if (colorSelected.value === `bg-${props.color_3}`) {
            // console.log('3')
            sequenceNumber.value = '3'
        } else if (colorSelected.value === `bg-white`) {
            // console.log('4')
            sequenceNumber.value = '0'
        }
    } else {
        if (content.value === dato1.value.value) {
            sequenceNumber.value = '1'
        } else if (content.value === dato2.value.value) {
            sequenceNumber.value = '2'
        } else if (content.value === dato3.value.value) {
            sequenceNumber.value = '3'
        } else if (content.value === null) {
            sequenceNumber.value = '0'
        }
    }

    const select_fila = (filaNum, color, error) => {
        if (filaNum === 0) {
            return
        }
        let y = 0
        let x = 0
        if (filaNum === 1) {
            y = 1
            x = 1
        }
        if (filaNum === 2) {
            y = props.sudoku_size + 1
            x = props.sudoku_size + 1
        }
        if (filaNum === 3) {
            y = props.sudoku_size + props.sudoku_size + 1
            x = props.sudoku_size + props.sudoku_size + 1
        }

        let classToAdd = ''
        let time = 0

        if (error) {
            classToAdd = 'brush-fail'
            time = 800
        } else {
            classToAdd = 'scale-90'
            time = 2000
        }

        for (let i = 0; i < props.sudoku_size; i++) {

            document.getElementById(`caja${y}`).classList.add(color, classToAdd);

            y++
        }

        setTimeout(function () {
            for (let i = 0; i < props.sudoku_size; i++) {

                document.getElementById(`caja${x}`).classList.remove(classToAdd, color);

                x++
            }
        }, time)
    }


    const select_col = (colNum, color, error) => {
        if (colNum === 0) {
            return
        }
        let y = 0
        let x = 0
        if (colNum === 1) {
            y = 1
            x = 1
        }
        if (colNum === 2) {
            y = 2
            x = 2
        }
        if (colNum === 3) {
            y = 3
            x = 3
        }

        let classToAdd = ''
        let time = 0

        if (error) {
            classToAdd = 'brush-fail'
            time = 800
        } else {
            classToAdd = 'scale-90'
            time = 2000
        }

        for (let i = 0; i < props.sudoku_size; i++) {

            document.getElementById(`caja${y}`).classList.add(color, classToAdd);

            y = y + props.sudoku_size
        }

        setTimeout(function () {
            for (let i = 0; i < props.sudoku_size; i++) {

                document.getElementById(`caja${x}`).classList.remove(classToAdd, color);

                x = x + props.sudoku_size
            }
        }, time)
    }

    if (interactiveMode.value === true) {
        document.getElementById(selectBox.value).classList.remove('bg-green-infinite')
        console.log(nextSelectBox.value, props.interactive_array.length, 'banana')
        if (props.interactive_array_solution[nextSelectBox.value] == sequenceNumber.value) {
            waterBubbleSound()

            if (nextSelectBox.value === 0 && props.ok_audio_1) {

                let sound = new Audio();
                sound.src = `${props.asset_audio}/voz1/nice/muybien.m4a`;

                function onSoundEnded() {
                    sound.removeEventListener('ended', onSoundEnded);

                    if (props.interactive_array_solution[0] == 1) {
                        sound.src = `${props.sound_item_1}`;
                    } else if (props.interactive_array_solution[0] == 2) {
                        sound.src = `${props.sound_item_2}`;
                    } else if (props.interactive_array_solution[0] == 3) {
                        sound.src = `${props.sound_item_3}`;
                    }


                    function onSoundEnded1() {
                        sound.removeEventListener('ended', onSoundEnded1);

                        sound.src = `${props.ok_audio_1}`;

                        function onSoundEnded2() {
                            sound.removeEventListener('ended', onSoundEnded2);

                            // if (props.selector_1[0] !== 0 && props.selector_1[1] !== 0){
                            //    Cuando son fila y col
                            // }

                            if (props.selector_1[0] === 1) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/primerafila.m4a`;
                            } else if (props.selector_1[0] === 2) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/segundafila.m4a`;
                            }

                            for (let i = 0; i < props.sudoku_size; i++) {
                                if (props.selector_1[0] === 0) {
                                    select_col(props.selector_1[1], 'bg-yellow-500', false)
                                    setTimeout(function () {
                                        select_fila(props.selector_1[0], 'bg-yellow-500', false)
                                    }, 3000)
                                } else {
                                    select_fila(props.selector_1[0], 'bg-yellow-500', false)
                                    setTimeout(function () {
                                        select_col(props.selector_1[1], 'bg-yellow-500', false)
                                    }, 3000)
                                }
                            }

                            function onSoundEnded3() {
                                sound.removeEventListener('ended', onSoundEnded3);
                                sound.src = `${props.asset_audio}/voz1/sudokus/${props.palette_text}/sigamossiguienteposicion.m4a`;

                                function onSoundEnded4() {
                                    sound.removeEventListener('ended', onSoundEnded4);
                                    document.getElementById(selectBox.value).classList.add('bg-green-infinite')
                                }

                                sound.addEventListener('ended', onSoundEnded4)
                                sound.play()
                            }

                            sound.addEventListener('ended', onSoundEnded3)
                            sound.play()

                        }

                        sound.addEventListener('ended', onSoundEnded2)
                        sound.play()
                    }

                    sound.addEventListener('ended', onSoundEnded1)
                    sound.play()

                }

                sound.addEventListener('ended', onSoundEnded)
                sound.play()

            }

            if (nextSelectBox.value === 1 && props.ok_audio_2) {

                let sound = new Audio();
                sound.src = `${props.asset_audio}/voz1/nice/correcto.m4a`;

                function onSoundEnded() {
                    sound.removeEventListener('ended', onSoundEnded);

                    if (props.interactive_array_solution[1] == 1) {
                        sound.src = `${props.sound_item_1}`;
                    } else if (props.interactive_array_solution[1] == 2) {
                        sound.src = `${props.sound_item_2}`;
                    } else if (props.interactive_array_solution[1] == 3) {
                        sound.src = `${props.sound_item_3}`;
                    }


                    function onSoundEnded1() {
                        sound.removeEventListener('ended', onSoundEnded1);

                        sound.src = `${props.ok_audio_2}`;

                        function onSoundEnded2() {
                            sound.removeEventListener('ended', onSoundEnded2);

                            if (props.selector_2[0] === 1) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/primerafila.m4a`;
                            } else if (props.selector_2[0] === 2) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/segundafila.m4a`;
                            } else if (props.selector_2[0] === 3) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/tercerafila.m4a`;
                            }

                            for (let i = 0; i < props.sudoku_size; i++) {
                                if (props.selector_2[0] === 0) {
                                    select_col(props.selector_2[1], 'bg-yellow-500', false)
                                    setTimeout(function () {
                                        select_fila(props.selector_2[0], 'bg-yellow-500', false)
                                    }, 2000)
                                } else {
                                    select_fila(props.selector_2[0], 'bg-yellow-500', false)
                                    setTimeout(function () {
                                        select_col(props.selector_2[1], 'bg-yellow-500', false)
                                    }, 2000)
                                }
                            }

                            function onSoundEnded3() {
                                sound.removeEventListener('ended', onSoundEnded3);

                                if (props.selector_2[1] === 1) {
                                    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yprimeracolumna.m4a`;
                                } else if (props.selector_2[1] === 3) {
                                    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yterceracolumna.m4a`;
                                }

                                function onSoundEnded4() {
                                    sound.removeEventListener('ended', onSoundEnded4);
                                    sound.src = `${props.asset_audio}/voz1/sudokus/${props.palette_text}/sigamossiguienteposicion.m4a`;

                                    function onSoundEnded5() {
                                        sound.removeEventListener('ended', onSoundEnded5);
                                        document.getElementById(selectBox.value).classList.add('bg-green-infinite')
                                    }

                                    sound.addEventListener('ended', onSoundEnded5)
                                    sound.play()
                                }

                                sound.addEventListener('ended', onSoundEnded4)
                                sound.play()
                            }

                            sound.addEventListener('ended', onSoundEnded3)
                            sound.play()
                        }

                        sound.addEventListener('ended', onSoundEnded2)
                        sound.play()
                    }

                    sound.addEventListener('ended', onSoundEnded1)
                    sound.play()

                }

                sound.addEventListener('ended', onSoundEnded)
                sound.play()

                // let sound = new Audio();
                // sound.src = `${props.ok_audio_2}`;
                //
                // function onSoundEnded() {
                //
                //     select_fila()
                //
                //     sound.removeEventListener('ended', onSoundEnded);
                //
                //     showIndexSquare()
                // }
                //
                // sound.addEventListener('ended', onSoundEnded)
                // sound.play()
                //
                //
                // for (let i = 0; i < props.sudoku_size; i++) {
                //     if (props.selector_2[0] === 0) {
                //         select_col(props.selector_2[1], 'bg-yellow-500', false)
                //         setTimeout(function () {
                //             select_fila(props.selector_2[0], 'bg-yellow-500', false)
                //         }, 3000)
                //     } else {
                //         select_fila(props.selector_2[0], 'bg-yellow-500', false)
                //         setTimeout(function () {
                //             select_col(props.selector_2[1], 'bg-yellow-500', false)
                //         }, 3000)
                //     }
                // }
            }

            if (nextSelectBox.value === 2) {
                // let sound = new Audio();
                // sound.src = `${props.ok_audio_3}`;
                // sound.play()
                //
                // for (let i = 0; i < props.sudoku_size; i++) {
                //     if (props.selector_3[0] === 0) {
                //         select_col(props.selector_3[1], 'bg-yellow-500', false)
                //         setTimeout(function () {
                //             select_fila(props.selector_3[0], 'bg-yellow-500', false)
                //         }, 3000)
                //     } else {
                //         select_fila(props.selector_3[0], 'bg-yellow-500', false)
                //         setTimeout(function () {
                //             select_col(props.selector_3[1], 'bg-yellow-500', false)
                //         }, 3000)
                //     }
                // }

                let sound = new Audio();
                sound.src = `${props.asset_audio}/voz1/nice/muybien.m4a`;

                function onSoundEnded() {
                    sound.removeEventListener('ended', onSoundEnded);

                    if (props.interactive_array_solution[2] == 1) {
                        sound.src = `${props.sound_item_1}`;
                    } else if (props.interactive_array_solution[2] == 2) {
                        sound.src = `${props.sound_item_2}`;
                    } else if (props.interactive_array_solution[2] == 3) {
                        sound.src = `${props.sound_item_3}`;
                    }


                    function onSoundEnded1() {
                        sound.removeEventListener('ended', onSoundEnded1);

                        sound.src = `${props.ok_audio_3}`;

                        function onSoundEnded2() {
                            sound.removeEventListener('ended', onSoundEnded2);

                            if (props.selector_3[1] === 2) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/segundacol.m4a`;
                            } else {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/segundafila.m4a`;
                            }

                            for (let i = 0; i < props.sudoku_size; i++) {
                                if (props.selector_3[0] === 0) {
                                    select_col(props.selector_3[1], 'bg-yellow-500', false)
                                    setTimeout(function () {
                                        select_fila(props.selector_3[0], 'bg-yellow-500', false)
                                    }, 2000)
                                } else {
                                    select_fila(props.selector_3[0], 'bg-yellow-500', false)
                                    setTimeout(function () {
                                        select_col(props.selector_3[1], 'bg-yellow-500', false)
                                    }, 2000)
                                }
                            }

                            function onSoundEnded3() {
                                sound.removeEventListener('ended', onSoundEnded3);

                                function onSoundEnded4() {
                                    if (nextSelectBox.value >= props.interactive_array.length) {
                                        setTimeout(function () {
                                            win()
                                            return;
                                        }, 800)
                                    } else {

                                        sound.src = `${props.asset_audio}/voz1/sudokus/${props.palette_text}/sigamossiguienteposicion.m4a`;

                                        sound.removeEventListener('ended', onSoundEnded5);

                                        function onSoundEnded5() {
                                            sound.removeEventListener('ended', onSoundEnded5);
                                            document.getElementById(selectBox.value).classList.add('bg-green-infinite')
                                        }

                                        sound.addEventListener('ended', onSoundEnded5)
                                        sound.play()
                                    }
                                }

                                if (props.selector_3[0] !== 0) {
                                    if (props.selector_3[1] === 1) {
                                        sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yprimeracolumna.m4a`;
                                    } else if (props.selector_3[1] === 3) {
                                        sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yterceracolumna.m4a`;
                                    }
                                    sound.addEventListener('ended', onSoundEnded4)
                                    sound.play()
                                } else {
                                    onSoundEnded4()
                                }
                            }

                            sound.addEventListener('ended', onSoundEnded3)
                            sound.play()
                        }

                        sound.addEventListener('ended', onSoundEnded2)
                        sound.play()
                    }

                    sound.addEventListener('ended', onSoundEnded1)
                    sound.play()

                }

                sound.addEventListener('ended', onSoundEnded)
                sound.play()
            }

            if (nextSelectBox.value === 3 && props.ok_audio_4) {
                let sound = new Audio();
                sound.src = `${props.asset_audio}/voz1/nice/correcto.m4a`;

                function onSoundEnded() {
                    sound.removeEventListener('ended', onSoundEnded);

                    if (props.interactive_array_solution[3] == 1) {
                        sound.src = `${props.sound_item_1}`;
                    } else if (props.interactive_array_solution[3] == 2) {
                        sound.src = `${props.sound_item_2}`;
                    } else if (props.interactive_array_solution[3] == 3) {
                        sound.src = `${props.sound_item_3}`;
                    }


                    function onSoundEnded1() {
                        sound.removeEventListener('ended', onSoundEnded1);

                        sound.src = `${props.ok_audio_4}`;

                        function onSoundEnded2() {
                            sound.removeEventListener('ended', onSoundEnded2);

                            if (props.selector_4[0] === 1) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/primerafila.m4a`;
                            } else if (props.selector_4[0] === 2) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/segundafila.m4a`;
                            } else if (props.selector_4[0] === 3) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/tercerafila.m4a`;
                            }

                            for (let i = 0; i < props.sudoku_size; i++) {
                                if (props.selector_4[0] === 0) {
                                    select_col(props.selector_4[1], 'bg-yellow-500', false)
                                    setTimeout(function () {
                                        select_fila(props.selector_4[0], 'bg-yellow-500', false)
                                    }, 2000)
                                } else {
                                    select_fila(props.selector_4[0], 'bg-yellow-500', false)
                                    setTimeout(function () {
                                        select_col(props.selector_4[1], 'bg-yellow-500', false)
                                    }, 2000)
                                }
                            }

                            function onSoundEnded3() {
                                sound.removeEventListener('ended', onSoundEnded3);

                                if (props.selector_4[1] === 1) {
                                    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yprimeracolumna.m4a`;
                                } else if (props.selector_4[1] === 3) {
                                    sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yterceracolumna.m4a`;
                                }

                                function onSoundEnded4() {

                                    if (nextSelectBox.value >= props.interactive_array.length) {
                                        setTimeout(function () {
                                            win()
                                            return;
                                        }, 800)
                                    } else {
                                        document.getElementById(selectBox.value).classList.add('bg-green-infinite')
                                    }
                                }

                                sound.addEventListener('ended', onSoundEnded4)
                                sound.play()
                            }

                            sound.addEventListener('ended', onSoundEnded3)
                            sound.play()
                        }

                        sound.addEventListener('ended', onSoundEnded2)
                        sound.play()
                    }

                    sound.addEventListener('ended', onSoundEnded1)
                    sound.play()

                }

                sound.addEventListener('ended', onSoundEnded)
                sound.play()
            }

            document.getElementById(id).classList.replace('border-yellow-400', 'border-black')
            document.getElementById(id).classList.remove('brush-fail')

            // successSound()
            console.log(nextSelectBox.value)
            document.getElementById(selectBox.value).classList.remove('bg-green-infinite')
            nextSelectBox.value++

            // if (nextSelectBox.value >= props.interactive_array.length) {
            //     win()
            //     return;
            // }

            console.log(nextSelectBox.value)
            selectBox.value = (`caja${props.interactive_array[nextSelectBox.value]}`)
            console.log(selectBox.value)
            // document.getElementById(selectBox.value).classList.add('bg-green-infinite')
        } else {

            document.getElementById(id).classList.replace('border-black', 'border-yellow-400')
            // document.getElementById(id).classList.add('brush-fail')

            // setTimeout(function () {
            //     document.getElementById(id).classList.remove('brush-fail')
            // }, 500)


            if (nextSelectBox.value === 0 && props.error_audio_1) {

                let sound = new Audio();

                if (sequenceNumber.value === '1') {
                    sound.src = `${props.sound_item_1}`;
                } else if (sequenceNumber.value === '2') {
                    sound.src = `${props.sound_item_2}`;
                } else if (sequenceNumber.value === '3') {
                    sound.src = `${props.sound_item_3}`;
                }

                function onSoundEnded() {
                    sound.removeEventListener('ended', onSoundEnded);
                    sound.src = `${props.error_audio_1}`;

                    function onSoundEnded1() {
                        sound.removeEventListener('ended', onSoundEnded1);

                        if (props.selector_1[0] === 1) {
                            sound.src = `${props.asset_audio}/voz1/sudokus/fyc/primerafila.m4a`;
                        } else if (props.selector_1[0] === 2) {
                            sound.src = `${props.asset_audio}/voz1/sudokus/fyc/segundafila.m4a`;
                        }


                        for (let i = 0; i < props.sudoku_size; i++) {
                            if (props.selector_1[0] === 0) {
                                select_col(props.selector_1[1], 'bg-red-400', true)
                                setTimeout(function () {
                                    select_fila(props.selector_1[0], 'bg-red-400', true)
                                }, 2000)
                            } else {
                                select_fila(props.selector_1[0], 'bg-red-400', true)
                                setTimeout(function () {
                                    select_col(props.selector_1[1], 'bg-red-400', true)
                                }, 2000)
                            }
                        }

                        sound.play()

                    }

                    sound.addEventListener('ended', onSoundEnded1)
                    sound.play()
                }

                sound.addEventListener('ended', onSoundEnded)
                sound.play();
            }

            if (nextSelectBox.value === 1 && props.error_audio_2) {

                let sound = new Audio();

                if (sequenceNumber.value === '1') {
                    sound.src = `${props.sound_item_1}`;
                } else if (sequenceNumber.value === '2') {
                    sound.src = `${props.sound_item_2}`;
                } else if (sequenceNumber.value === '3') {
                    sound.src = `${props.sound_item_3}`;
                }

                function onSoundEnded() {
                    sound.removeEventListener('ended', onSoundEnded);
                    sound.src = `${props.error_audio_2}`;

                    function onSoundEnded1() {
                        sound.removeEventListener('ended', onSoundEnded1);

                        if (props.selector_2[0] === 1) {
                            sound.src = `${props.asset_audio}/voz1/sudokus/fyc/primerafila.m4a`;
                        } else if (props.selector_2[0] === 2) {
                            sound.src = `${props.asset_audio}/voz1/sudokus/fyc/segundafila.m4a`;
                        } else if (props.selector_2[0] === 3) {
                            sound.src = `${props.asset_audio}/voz1/sudokus/fyc/tercerafila.m4a`;
                        }

                        for (let i = 0; i < props.sudoku_size; i++) {
                            if (props.selector_2[0] === 0) {
                                select_col(props.selector_2[1], 'bg-red-400', true)
                                setTimeout(function () {
                                    select_fila(props.selector_2[0], 'bg-red-400', true)
                                }, 2000)
                            } else {
                                select_fila(props.selector_2[0], 'bg-red-400', true)
                                setTimeout(function () {
                                    select_col(props.selector_2[1], 'bg-red-400', true)
                                }, 2000)
                            }
                        }

                        function onSoundEnded2() {
                            sound.removeEventListener('ended', onSoundEnded2);

                            if (props.selector_2[1] === 1) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yprimeracolumna.m4a`;
                            } else if (props.selector_2[1] === 3) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yterceracolumna.m4a`;
                            }


                            sound.play()
                        }

                        sound.addEventListener('ended', onSoundEnded2)
                        sound.play()

                    }

                    sound.addEventListener('ended', onSoundEnded1)
                    sound.play()
                }

                sound.addEventListener('ended', onSoundEnded)
                sound.play();
            }

            if (nextSelectBox.value === 2 && props.error_audio_3) {

                let sound = new Audio();

                if (sequenceNumber.value === '1') {
                    sound.src = `${props.sound_item_1}`;
                } else if (sequenceNumber.value === '2') {
                    sound.src = `${props.sound_item_2}`;
                } else if (sequenceNumber.value === '3') {
                    sound.src = `${props.sound_item_3}`;
                }

                function onSoundEnded() {
                    sound.removeEventListener('ended', onSoundEnded);
                    sound.src = `${props.error_audio_3}`;

                    function onSoundEnded1() {
                        sound.removeEventListener('ended', onSoundEnded1);

                        if (props.selector_3[1] === 2) {
                            sound.src = `${props.asset_audio}/voz1/sudokus/fyc/segundacol.m4a`;
                        } else {
                            sound.src = `${props.asset_audio}/voz1/sudokus/fyc/segundafila.m4a`;
                        }

                        for (let i = 0; i < props.sudoku_size; i++) {
                            if (props.selector_3[0] === 0) {
                                select_col(props.selector_3[1], 'bg-red-400', true)
                                setTimeout(function () {
                                    select_fila(props.selector_3[0], 'bg-red-400', true)
                                }, 2000)
                            } else {
                                select_fila(props.selector_3[0], 'bg-red-400', true)
                                setTimeout(function () {
                                    select_col(props.selector_3[1], 'bg-red-400', true)
                                }, 2000)
                            }
                        }


                        function onSoundEnded2() {
                            if (props.selector_3[1] === 2) {
                                return
                            }

                            sound.removeEventListener('ended', onSoundEnded2);

                            if (props.selector_3[1] === 1) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yprimeracolumna.m4a`;
                            } else if (props.selector_3[1] === 3) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yterceracolumna.m4a`;
                            }

                            sound.play()
                        }

                        sound.addEventListener('ended', onSoundEnded2)
                        sound.play()

                    }

                    sound.addEventListener('ended', onSoundEnded1)
                    sound.play()
                }

                sound.addEventListener('ended', onSoundEnded)
                sound.play();

                // if (props.selector_3[0] === 0) {
                //     select_col(props.selector_3[1], 'bg-red-400', true)
                //     setTimeout(function () {
                //         select_fila(props.selector_3[0], 'bg-red-400', true)
                //     }, 3000)
                // } else {
                //     select_fila(props.selector_3[0], 'bg-red-400', true)
                //     setTimeout(function () {
                //         select_col(props.selector_3[1], 'bg-red-400', true)
                //     }, 3000)
                // }
                //
                // if (sequenceNumber.value === '1') {
                //     let sound = new Audio();
                //     sound.src = `${props.sound_item_1}`;
                //     sound.play()
                //
                //     function onSoundEnded() {
                //         sound.removeEventListener('ended', onSoundEnded);
                //         sound.src = `${props.error_audio_3}`;
                //         sound.play()
                //     }
                //
                //     sound.addEventListener('ended', onSoundEnded)
                //     sound.play();
                //
                // } else if (sequenceNumber.value === '2') {
                //     let sound = new Audio();
                //     sound.src = `${props.sound_item_2}`;
                //     sound.play()
                //
                //     function onSoundEnded() {
                //         sound.removeEventListener('ended', onSoundEnded);
                //         sound.src = `${props.error_audio_3}`;
                //         sound.play()
                //     }
                //
                //     sound.addEventListener('ended', onSoundEnded)
                //     sound.play();
                //
                // } else if (sequenceNumber.value === '3') {
                //     let sound = new Audio();
                //     sound.src = `${props.sound_item_3}`;
                //     sound.play()
                //
                //     function onSoundEnded() {
                //         sound.removeEventListener('ended', onSoundEnded);
                //         sound.src = `${props.error_audio_3}`;
                //         sound.play()
                //     }
                //
                //     sound.addEventListener('ended', onSoundEnded)
                //     sound.play();
                // }
            }

            if (nextSelectBox.value === 3 && props.error_audio_4) {
                let sound = new Audio();

                if (sequenceNumber.value === '1') {
                    sound.src = `${props.sound_item_1}`;
                } else if (sequenceNumber.value === '2') {
                    sound.src = `${props.sound_item_2}`;
                } else if (sequenceNumber.value === '3') {
                    sound.src = `${props.sound_item_3}`;
                }

                function onSoundEnded() {
                    sound.removeEventListener('ended', onSoundEnded);
                    sound.src = `${props.error_audio_4}`;

                    function onSoundEnded1() {
                        sound.removeEventListener('ended', onSoundEnded1);

                        if (props.selector_4[0] === 1) {
                            sound.src = `${props.asset_audio}/voz1/sudokus/fyc/primerafila.m4a`;
                        } else if (props.selector_4[0] === 2) {
                            sound.src = `${props.asset_audio}/voz1/sudokus/fyc/segundafila.m4a`;
                        } else if (props.selector_4[0] === 3) {
                            sound.src = `${props.asset_audio}/voz1/sudokus/fyc/tercerafila.m4a`;
                        }

                        for (let i = 0; i < props.sudoku_size; i++) {
                            if (props.selector_4[0] === 0) {
                                select_col(props.selector_4[1], 'bg-red-400', true)
                                setTimeout(function () {
                                    select_fila(props.selector_4[0], 'bg-red-400', true)
                                }, 2000)
                            } else {
                                select_fila(props.selector_4[0], 'bg-red-400', true)
                                setTimeout(function () {
                                    select_col(props.selector_4[1], 'bg-red-400', true)
                                }, 2000)
                            }
                        }


                        function onSoundEnded2() {

                            sound.removeEventListener('ended', onSoundEnded2);

                            if (props.selector_4[1] === 1) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yprimeracolumna.m4a`;
                            } else if (props.selector_4[1] === 3) {
                                sound.src = `${props.asset_audio}/voz1/sudokus/fyc/yterceracolumna.m4a`;
                            }

                            sound.play()
                        }

                        sound.addEventListener('ended', onSoundEnded2)
                        sound.play()

                    }

                    sound.addEventListener('ended', onSoundEnded1)
                    sound.play()
                }

                sound.addEventListener('ended', onSoundEnded)
                sound.play();
            }

            // let sound = new Audio();
            // sound.src = `${props.error_audio_1}`;
            // sound.play()

            // alert('nop')
            // error(id)
        }
    }

    if (id === 'caja1') {
        sudokuArray.value[0] = sequenceNumber.value
    } else if (id === 'caja2') {
        sudokuArray.value[1] = sequenceNumber.value
    } else if (id === 'caja3') {
        sudokuArray.value[2] = sequenceNumber.value
    } else if (id === 'caja4') {
        sudokuArray.value[3] = sequenceNumber.value
    } else if (id === 'caja5') {
        sudokuArray.value[4] = sequenceNumber.value
    } else if (id === 'caja6') {
        sudokuArray.value[5] = sequenceNumber.value
    } else if (id === 'caja7') {
        sudokuArray.value[6] = sequenceNumber.value
    } else if (id === 'caja8') {
        sudokuArray.value[7] = sequenceNumber.value
    } else if (id === 'caja9') {
        sudokuArray.value[8] = sequenceNumber.value
    }


    const boxes = {
        'caja1': {
            num: 1,
            groupNum: 1,
            group: grupo1,
            groupCheck: grupo1check,
            classToAdd: 'scale-75',
            sec1: 'caja1',
            sec2: 'caja2',
            sec3: 'caja3',
            color: color1
        },
        'caja2': {
            num: 2,
            groupNum: 1,
            group: grupo1,
            groupCheck: grupo1check,
            classToAdd: 'scale-75',
            sec1: 'caja1',
            sec2: 'caja2',
            sec3: 'caja3',
            color: color2
        },
        'caja3': {
            num: 3,
            groupNum: 1,
            group: grupo1,
            groupCheck: grupo1check,
            classToAdd: 'scale-75',
            sec1: 'caja1',
            sec2: 'caja2',
            sec3: 'caja3',
            color: color3
        },
        'caja4': {
            num: 4,
            groupNum: 2,
            group: grupo2,
            groupCheck: grupo2check,
            classToAdd: 'scale-75',
            sec1: 'caja4',
            sec2: 'caja5',
            sec3: 'caja6',
            color: color4
        },
        'caja5': {
            num: 5,
            groupNum: 2,
            group: grupo2,
            groupCheck: grupo2check,
            classToAdd: 'scale-75',
            sec1: 'caja4',
            sec2: 'caja5',
            sec3: 'caja6',
            color: color5
        },
        'caja6': {
            num: 6,
            groupNum: 2,
            group: grupo2,
            groupCheck: grupo2check,
            classToAdd: 'scale-75',
            sec1: 'caja4',
            sec2: 'caja5',
            sec3: 'caja6',
            color: color6
        },
        'caja7': {
            num: 7,
            groupNum: 3,
            group: grupo3,
            groupCheck: grupo3check,
            classToAdd: 'scale-75',
            sec1: 'caja7',
            sec2: 'caja8',
            sec3: 'caja9',
            color: color7
        },
        'caja8': {
            num: 8,
            groupNum: 3,
            group: grupo3,
            groupCheck: grupo3check,
            classToAdd: 'scale-75',
            sec1: 'caja7',
            sec2: 'caja8',
            sec3: 'caja9',
            color: color8
        },
        'caja9': {
            num: 9,
            groupNum: 3,
            group: grupo3,
            groupCheck: grupo3check,
            classToAdd: 'scale-75',
            sec1: 'caja7',
            sec2: 'caja8',
            sec3: 'caja9',
            color: color9
        },
        'caja10': {
            num: 10,
            groupNum: 4,
            group: grupo4,
            groupCheck: grupo4check,
            classToAdd: 'scale-75',
            sec1: 'caja10',
            sec2: 'caja11',
            sec3: 'caja12',
            color: color10
        },
        'caja11': {
            num: 11,
            groupNum: 4,
            group: grupo4,
            groupCheck: grupo4check,
            classToAdd: 'scale-75',
            sec1: 'caja10',
            sec2: 'caja11',
            sec3: 'caja12',
            color: color11
        },
        'caja12': {
            num: 12,
            groupNum: 4,
            group: grupo4,
            groupCheck: grupo4check,
            classToAdd: 'scale-75',
            sec1: 'caja10',
            sec2: 'caja11',
            sec3: 'caja12',
            color: color12
        },
        'caja13': {
            num: 13,
            groupNum: 5,
            group: grupo5,
            groupCheck: grupo5check,
            classToAdd: 'scale-75',
            sec1: 'caja13',
            sec2: 'caja14',
            sec3: 'caja15',
            color: color13
        },
        'caja14': {
            num: 14,
            groupNum: 5,
            group: grupo5,
            groupCheck: grupo5check,
            classToAdd: 'scale-75',
            sec1: 'caja13',
            sec2: 'caja14',
            sec3: 'caja15',
            color: color14
        },
        'caja15': {
            num: 15,
            groupNum: 5,
            group: grupo5,
            groupCheck: grupo5check,
            classToAdd: 'scale-75',
            sec1: 'caja13',
            sec2: 'caja14',
            sec3: 'caja15',
            color: color15
        },
        'caja16': {
            num: 16,
            groupNum: 6,
            group: grupo6,
            groupCheck: grupo6check,
            classToAdd: 'scale-75',
            sec1: 'caja16',
            sec2: 'caja17',
            sec3: 'caja18',
            color: color16
        },
        'caja17': {
            num: 17,
            groupNum: 6,
            group: grupo6,
            groupCheck: grupo6check,
            classToAdd: 'scale-75',
            sec1: 'caja16',
            sec2: 'caja17',
            sec3: 'caja18',
            color: color17
        },
        'caja18': {
            num: 18,
            groupNum: 6,
            group: grupo6,
            groupCheck: grupo6check,
            classToAdd: 'scale-75',
            sec1: 'caja16',
            sec2: 'caja17',
            sec3: 'caja18',
            color: color18
        },
    };

    const playJumpSound = () => {
        const sound = new Audio();
        sound.src = `${props.asset_audio}/jumpCoin.wav`;
        sound.play();
    };

    filas.value = dividirFilas(sudokuArray.value, 3)

    columnas.value = dividirColumnas(sudokuArray.value, 3)

    let response = validarSubgrupos(filas.value)
    validateSudoku.valido = response.valido
    validateSudoku.conflictos = response.conflictos

    for (let i = 0; i < props.sudoku_size; i++) {
        let y = i + 1
        document.getElementById(`caja${y}`).classList.remove('animate-pulse')
    }
    if (validateSudoku.valido === false) {
        let FyC = 0
        let type = ''
        for (let i = 0; i < validateSudoku.conflictos.length; i++) {

            if (validateSudoku.conflictos[i].tipo === 'fila') {
                FyC++
                type = 'fila'

                if (validateSudoku.conflictos[i].posicion === 0) {
                    let y = 1
                    for (let i = 0; i < props.sudoku_size; i++) {
                        console.log(`caja${y}`)
                        const elementId = `caja${y}`;
                        y += 1
                        document.getElementById(elementId).classList.add('bg-red-500', 'brush-fail');
                        setTimeout(function () {
                            document.getElementById(elementId).classList.remove('bg-red-500', 'brush-fail');
                        }, 500)
                    }
                } else if (validateSudoku.conflictos[i].posicion === 1) {
                    let y = 4
                    for (let i = 0; i < props.sudoku_size; i++) {
                        console.log(`caja${y}`)
                        const elementId = `caja${y}`;
                        y += 1
                        document.getElementById(elementId).classList.add('bg-red-500', 'brush-fail');
                        setTimeout(function () {
                            document.getElementById(elementId).classList.remove('bg-red-500', 'brush-fail');
                        }, 500)
                    }
                } else if (validateSudoku.conflictos[i].posicion === 2) {
                    let y = 7
                    for (let i = 0; i < props.sudoku_size; i++) {
                        console.log(`caja${y}`)
                        const elementId = `caja${y}`;
                        y += 1
                        document.getElementById(elementId).classList.add('bg-red-500', 'brush-fail');
                        setTimeout(function () {
                            document.getElementById(elementId).classList.remove('bg-red-500', 'brush-fail');
                        }, 500)
                    }
                }
            }

            if (validateSudoku.conflictos[i].tipo === 'columna') {
                FyC++
                type = 'columna'
                if (validateSudoku.conflictos[i].posicion === 0) {
                    let y = 1
                    for (let i = 0; i < props.sudoku_size; i++) {
                        console.log(`caja${y}`)
                        const elementId = `caja${y}`;
                        y += 3
                        document.getElementById(elementId).classList.add('bg-red-500', 'brush-fail');
                        setTimeout(function () {
                            document.getElementById(elementId).classList.remove('bg-red-500', 'brush-fail');
                        }, 500)
                    }
                } else if (validateSudoku.conflictos[i].posicion === 1) {
                    let y = 2
                    for (let i = 0; i < props.sudoku_size; i++) {
                        console.log(`caja${y}`)
                        const elementId = `caja${y}`;
                        y += 3
                        document.getElementById(elementId).classList.add('bg-red-500', 'brush-fail');
                        setTimeout(function () {
                            document.getElementById(elementId).classList.remove('bg-red-500', 'brush-fail');
                        }, 500)
                    }
                } else if (validateSudoku.conflictos[i].posicion === 2) {
                    let y = 3
                    for (let i = 0; i < props.sudoku_size; i++) {
                        console.log(`caja${y}`)
                        const elementId = `caja${y}`;
                        y += 3
                        document.getElementById(elementId).classList.add('bg-red-500', 'brush-fail');
                        setTimeout(function () {
                            document.getElementById(elementId).classList.remove('bg-red-500', 'brush-fail');
                        }, 500)
                    }
                }
            }
        }

        // alert(FyC)
        for (let i = 0; i < props.sudoku_size; i++) {
            let y = i + 1
            document.getElementById(`caja${y}`).classList.remove('animate-pulse')
        }

        if (FyC === 1) {

            console.log('filas :', filas.value)
            console.log('columnas :', columnas.value)

            if (type === 'fila') {

                console.log('yessssssssss', filas.value[validateSudoku.conflictos[0].posicion][0]);


                let miArray = [];

                for (let i = 0; i < filas.value.length; i++) {
                    miArray.push(filas.value[validateSudoku.conflictos[0].posicion][i])
                }

                let posiciones = [];

                for (let i = 0; i < miArray.length; i++) {
                    if (miArray[i] == validateSudoku.conflictos[0].numerosRepetidos[0]) {
                        posiciones.push(i);
                    }
                }

                if (posiciones.length > 0) {

                    // if (validateSudoku.conflictos[0].posicion] === 0) {
                    //     alert('banana')
                    // }

                    for (let i = 0; i < posiciones.length; i++) {
                        document.getElementById(`caja${posiciones[i] + 1}`).classList.add('animate-pulse')
                    }

                    console.log(`El número ${validateSudoku.conflictos[0].numerosRepetidos[0]} se encuentra en las siguientes posiciones: ` + posiciones.join(", "));
                } else {
                    console.log(`El número ${validateSudoku.conflictos[0].numerosRepetidos[0]} no se encuentra en el array.`);
                }

                console.log('aqui', filas.value[validateSudoku.conflictos[0].posicion])

                if (validateSudoku.conflictos[0].numerosRepetidos[0] == 1) {
                    const sound = new Audio();
                    sound.src = `${props.the_sound_item_1}`;
                    sound.play();
                }

                if (validateSudoku.conflictos[0].numerosRepetidos[0] == 2) {
                    const sound = new Audio();
                    sound.src = `${props.the_sound_item_2}`;
                    sound.play();
                }

                if (validateSudoku.conflictos[0].numerosRepetidos[0] == 3) {
                    const sound = new Audio();
                    sound.src = `${props.the_sound_item_3}`;
                    sound.play();
                }

                setTimeout(function () {
                    const sound = new Audio();
                    sound.src = `${props.asset_audio}/voz1/sudokus/yaenestafila.m4a`;
                    sound.play();
                }, 1000)
            }

            if (type === 'columna') {

                if (validateSudoku.conflictos[0].numerosRepetidos[0] == 1) {
                    const sound = new Audio();
                    sound.src = `${props.the_sound_item_1}`;
                    sound.play();
                }

                if (validateSudoku.conflictos[0].numerosRepetidos[0] == 2) {
                    const sound = new Audio();
                    sound.src = `${props.the_sound_item_2}`;
                    sound.play();
                }

                if (validateSudoku.conflictos[0].numerosRepetidos[0] == 3) {
                    const sound = new Audio();
                    sound.src = `${props.the_sound_item_3}`;
                    sound.play();
                }

                setTimeout(function () {
                    const sound = new Audio();
                    sound.src = `${props.asset_audio}/voz1/sudokus/yaenestacol.m4a`;
                    sound.play();
                }, 1000)

            }

            // console.log(sudokuArray.value[0])
            // console.log('Hola ', validateSudoku.conflictos[0].numerosRepetidos[0], items[0].value)
            // textValidate.value = `Uy!, Parece que el dato ${validateSudoku.conflictos[0].numerosRepetidos[0]} se esta repitiendo en la ${type} ${validateSudoku.conflictos[0].posicion}`


            const sound = new Audio();
            sound.src = `${props.asset_audio}/wood.wav`;
            sound.play();

        }
        if (FyC === 2) {
            // textValidate.value = `Uy!, Parece que el dato ${validateSudoku.conflictos[0].numerosRepetidos[0]} se esta repitiendo en la fila ${validateSudoku.conflictos[0].posicion + 1} y en la columna ${validateSudoku.conflictos[1].posicion + 1}`

            if (validateSudoku.conflictos[0].numerosRepetidos[0] == 1) {
                const sound = new Audio();
                sound.src = `${props.the_sound_item_1}`;
                sound.play();
            }

            if (validateSudoku.conflictos[0].numerosRepetidos[0] == 2) {
                const sound = new Audio();
                sound.src = `${props.the_sound_item_2}`;
                sound.play();
            }

            if (validateSudoku.conflictos[0].numerosRepetidos[0] == 3) {
                const sound = new Audio();
                sound.src = `${props.the_sound_item_3}`;
                sound.play();
            }

            setTimeout(function () {
                const sound = new Audio();
                sound.src = `${props.asset_audio}/voz1/sudokus/yaenestafilaycol.m4a`;
                sound.play();
            }, 1000)

            const sound = new Audio();
            sound.src = `${props.asset_audio}/wood.wav`;
            sound.play();
        }

    }


    const sound = new Audio();
    sound.src = `${props.asset_audio}/tap.wav`;
    sound.play();

}


let yep1 = ref(null)
let yep2 = ref(null)
let yep3 = ref(null)
let yep4 = ref(null)
let yep5 = ref(null)
let yep6 = ref(null)
let yep7 = ref(null)
let yep8 = ref(null)
let yep9 = ref(null)

let yeps = ref([])


let banana = ref(null)

const verify = () => {

    yep1.value = document.getElementById('caja1').value
    yep2.value = document.getElementById('caja2').value
    yep3.value = document.getElementById('caja3').value
    yep4.value = document.getElementById('caja4').value
    yep5.value = document.getElementById('caja5').value
    yep6.value = document.getElementById('caja6').value
    yep7.value = document.getElementById('caja7').value
    yep8.value = document.getElementById('caja8').value
    yep9.value = document.getElementById('caja9').value

    yeps.value = [yep1.value, yep2.value, yep3.value, yep4.value, yep5.value, yep6.value, yep7.value, yep8.value, yep9.value]

    filas.value = dividirFilas(yeps.value, 3)

    banana.value = validarSubgrupos(filas.value)

    columnas.value = dividirColumnas(yeps.value, 3)
}

function dividirFilas(arr, numPartes) {
    if (numPartes <= 0) {
        throw new Error("El número de partes debe ser mayor que cero.");
    }

    const tamañoParte = Math.ceil(arr.length / numPartes);
    const partes = [];

    for (let i = 0; i < numPartes; i++) {
        partes.push(arr.slice(i * tamañoParte, (i + 1) * tamañoParte));
    }

    return partes;
}

function dividirColumnas(arr, numPartes) {
    if (numPartes <= 0) {
        throw new Error("El número de partes debe ser mayor que cero.");
    }

    const tamañoParte = Math.ceil(arr.length / numPartes);
    const partes = [];

    for (let i = 0; i < tamañoParte; i++) {
        const columna = [];
        for (let j = 0; j < numPartes; j++) {
            const indice = j * tamañoParte + i;
            if (indice < arr.length) {
                columna.push(arr[indice]);
            }
        }
        partes.push(columna);
    }

    return partes;
}


function validarSubgrupos(subgrupos) {
    const conflictos = [];

    // Validar filas

    for (let filaIndex = 0; filaIndex < subgrupos.length; filaIndex++) {
        const fila = subgrupos[filaIndex];

        if (fila.includes('0')) {
            continue; // Omitir validación de esta fila
        }

        const numerosUnicos = new Set(fila);
        if (numerosUnicos.size !== 3) {
            const numerosRepetidos = [];
            for (let i = 0; i < fila.length; i++) {
                const numero = fila[i];
                if (fila.lastIndexOf(numero) !== i) {
                    numerosRepetidos.push(numero);
                }
            }
            conflictos.push({
                tipo: "fila",
                posicion: filaIndex,
                numerosRepetidos: numerosRepetidos,
            });
        }
    }

    // Validar columnas
    for (let columnaIndex = 0; columnaIndex < subgrupos[0].length; columnaIndex++) {
        const columna = subgrupos.map((fila) => fila[columnaIndex]);

        if (columna.includes('0')) {
            continue; // Omitir validación de esta columna
        }

        const numerosUnicos = new Set(columna);
        if (numerosUnicos.size !== 3) {
            const numerosRepetidos = [];
            for (let i = 0; i < columna.length; i++) {
                const numero = columna[i];
                if (columna.lastIndexOf(numero) !== i) {
                    numerosRepetidos.push(numero);
                }
            }
            conflictos.push({
                tipo: "columna",
                posicion: columnaIndex,
                numerosRepetidos: numerosRepetidos,
            });
        }
    }

    if (conflictos.length === 0) {
        return {valido: true};
    } else {
        return {valido: false, conflictos: conflictos};
    }
}


const jopa = () => {
    const sound = new Audio();
    sound.src = `${props.the_sound_item_2}`;

    function onSoundEnded() {
        sound.removeEventListener('ended', onSoundEnded);

        const sound2 = new Audio();
        sound2.src = `${props.the_sound_item_1}`;
        sound2.play()
    }

    sound.addEventListener('ended', onSoundEnded)

    sound.play();
}

const prepareSudoku = () => {
    const sound = new Audio(`${props.asset_audio}/tap.wav`);
    sound.play();

    const colorUpdate = (caja, dato) => {
        document.getElementById(`caja${caja}`).classList.add(`bg-${dato.value.value}`)
        // playSound()
    }

    const imageUpdate = (caja, dato) => {
        items[caja - 1].value = dato.value.value
        showImages[caja - 1].value = true
    }

    const itemUpdate = (caja, dato) => {
        items[caja - 1].value = dato.value.value
        showImages[caja - 1].value = false
    }

    for (let caja = 1; caja <= 9; caja++) {

        if (props[`caja_${caja}`] == 1) {

            if (dato1.value.type == 'image') {
                imageUpdate(caja, dato1)
            }

            if (dato1.value.type === 'color') {
                colorUpdate(caja, dato1)
            }

            if (dato1.value.type == 'item') {
                itemUpdate(caja, dato1)
            }
        }

        if (props[`caja_${caja}`] == 2) {

            if (dato2.value.type == 'image') {
                imageUpdate(caja, dato2)
            }

            if (dato2.value.type === 'color') {
                colorUpdate(caja, dato2)
            }

            if (dato2.value.type == 'item') {
                itemUpdate(caja, dato2)
            }
        }


        if (props[`caja_${caja}`] == 3) {

            if (dato3.value.type == 'image') {
                imageUpdate(caja, dato3)
            }

            if (dato3.value.type === 'color') {
                colorUpdate(caja, dato3)
            }

            if (dato3.value.type == 'item') {
                itemUpdate(caja, dato3)
            }

        }
    }
};

// console.log('here', dato1.value.value)

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
                            <span class="text-white mx-3 font-bold text-yellow-500">Actividad {{
                                    props.activity_number
                                }}</span>
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
            <div
                :class="`${props.bg_color_activity} border-4 ${props.border_color_activity} flex-col pb-2 rounded-md shadow-2xl`">
                <div class="mx-5 py-2 flex justify-between">
                    <div :class="`bg-orange-200 px-2 rounded-md shadow-2xl border-4 ${props.border_color_activity}`">
                        <span class="font-bold">Actividad {{ props.activity_number }} - </span>
                        <span class="font-semibold "> {{ props.activity_description }}</span>
                    </div>
                </div>
                <div class="mx-5 grid md:grid-cols-12 gap-5">
                    <div id="fondoMati"
                         :class="`bg-orange-200 border-4 ${props.border_color_activity} rounded-md flex items-end justify-center col-span-2`">
                        <div class="">

                            <div v-if="indexSquareFig === 'colors'" class="flex justify-center items-center mb-16">
                                <div :class="`${indexSquare}`">
                                    <div v-if="imageIndexSquare">
                                        <img width="60" :src="contentIndexSquare" alt="">
                                    </div>
                                    <span v-else class="font-bold text-6xl">{{ contentIndexSquare }}</span>
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
                         :class="`bg-white border-4 ${props.border_color_activity} rounded-md md:col-span-10 grid md:grid-cols-11 flex items-center`">

                        <div :class="`${selectFig1} col-span-9`">
                            <!--                            {{ sudokuArray }} {{ filas }} {{ validateSudoku }}-->
                            <!--                            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa {{ columnas }}-->
                            <div>
                                <div class="grid grid-cols-1">
                                    <div class="flex justify-center items-center mt-1 gap-5">
                                        <div>
                                            <img :src="`${props.planet_1}`" width="50" alt="">
                                        </div>
                                        <div class="flex w-[80%] justify-center bg-gray-400 rounded-full">
                                            <div v-for="i in props.number_of_activities" :key="i" :id="`bar${i}`"
                                                 :class="['w-full h-5', 'bg-gray-400',
                                                 { 'bg-green-400' : i < props.activity_number},
                                                 { 'border-l-4 border-black' : i !== 1 },
                                                 { 'rounded-l-full' : i === 1},
                                                 { 'rounded-r-full' : i === props.number_of_activities},
                                                 ]">
                                                {{ null }}
                                            </div>
                                        </div>
                                        <div>
                                            <img :src="`${props.planet_2}`" width="50" alt="">
                                        </div>
                                    </div>

                                    <div class="flex justify-center items-center mt-1 gap-5">
                                        <div class="flex w-[80%] grid"
                                             :style="`grid-template-columns: repeat(${props.number_of_activities}, minmax(0, 1fr));`">
                                            <div id="naveDiv" :style="`grid-column: ${props.activity_number};`"
                                                 class="flex justify-center duration-300">
                                                <img id="nave" class="" :src="`${props.asset_images}/espacio/nave.svg`"
                                                     width="50" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{ textValidate }}
                            <!--                            <span v-if="validateSudoku.valido === false">-->
                            <!--                                <span>Uy!, Parece que el dato {{ validateSudoku.conflictos[0].numerosRepetidos[0] }} ya se encuentra en la {{-->
                            <!--                                        validateSudoku.conflictos[0].tipo-->
                            <!--                                    }}  {{ validateSudoku.conflictos[0].posicion + 1 }}</span>-->
                            <!--                            </span>-->
                            <div id="vista" class="items-center justify-center p-2 mt-5 duration-300">
                                <div class="flex justify-center">
                                    <div :class="`grid gap-1 grid-cols-${props.sudoku_size}`">
                                        <div v-for="i in props.sudoku_size * props.sudoku_size" :key="i"
                                             :id="`caja${i}`"
                                             @click="paintString(`caja${i}`, i - 1)"
                                             :class="['h-32 w-32', 'font-bold text-6xl' , 'border-black', 'border-2', 'cursor-cell', 'flex justify-center items-center', 'hover:bg-gray-400', 'duration-300',
                                                 ]">
                                            <!--                                            <div>-->
                                            <!--                                                {{ items[i - 1].value }}-->
                                            <!--                                            </div>-->
                                            <div v-if="showImages[i - 1].value === false">
                                                {{ items[i - 1].value }}
                                            </div>
                                            <div v-else>
                                                <img :src="items[i - 1].value" alt="" width="100">
                                            </div>
                                        </div>

                                        <div id="arrowFila1"
                                             class="fixed scale-125 w-[230px] hidden opacity-0 translate-x-20 -translate-y-12 duration-300">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M5.65681 7.75728C5.26629 7.36675 4.63312 7.36675 4.2426 7.75728L1.41426 10.5857C0.633215 11.3667 0.633121 12.6331 1.41417 13.4141L4.24269 16.2425C4.63321 16.633 5.26638 16.633 5.6569 16.2425C6.04743 15.852 6.04743 15.2188 5.6569 14.8283L3.82849 12.9999L17.9998 12.9999L18.0015 12.9999H20.1714L18.3429 14.8283C17.9524 15.2188 17.9524 15.852 18.3429 16.2425C18.7335 16.633 19.3666 16.633 19.7572 16.2425L22.5856 13.4141C23.3666 12.633 23.3668 11.3667 22.5857 10.5857L19.7573 7.75725C19.3668 7.36672 18.7336 7.36672 18.3431 7.75725C17.9526 8.14777 17.9526 8.78094 18.3431 9.17146L20.1715 10.9999L3.82842 10.9999L5.65681 9.17149C6.04734 8.78097 6.04734 8.1478 5.65681 7.75728Z"
                                                        fill="#0F0F0F"></path>
                                                </g>
                                            </svg>
                                        </div>

                                        <div id="arrowFila2"
                                             class="fixed scale-125 w-[230px] hidden opacity-0 translate-x-20 translate-y-20 duration-300">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M5.65681 7.75728C5.26629 7.36675 4.63312 7.36675 4.2426 7.75728L1.41426 10.5857C0.633215 11.3667 0.633121 12.6331 1.41417 13.4141L4.24269 16.2425C4.63321 16.633 5.26638 16.633 5.6569 16.2425C6.04743 15.852 6.04743 15.2188 5.6569 14.8283L3.82849 12.9999L17.9998 12.9999L18.0015 12.9999H20.1714L18.3429 14.8283C17.9524 15.2188 17.9524 15.852 18.3429 16.2425C18.7335 16.633 19.3666 16.633 19.7572 16.2425L22.5856 13.4141C23.3666 12.633 23.3668 11.3667 22.5857 10.5857L19.7573 7.75725C19.3668 7.36672 18.7336 7.36672 18.3431 7.75725C17.9526 8.14777 17.9526 8.78094 18.3431 9.17146L20.1715 10.9999L3.82842 10.9999L5.65681 9.17149C6.04734 8.78097 6.04734 8.1478 5.65681 7.75728Z"
                                                        fill="#0F0F0F"></path>
                                                </g>
                                            </svg>
                                        </div>

                                        <div id="arrowFila3"
                                             class="fixed scale-125 w-[230px] hidden opacity-0 translate-x-20 translate-y-52 duration-300">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M5.65681 7.75728C5.26629 7.36675 4.63312 7.36675 4.2426 7.75728L1.41426 10.5857C0.633215 11.3667 0.633121 12.6331 1.41417 13.4141L4.24269 16.2425C4.63321 16.633 5.26638 16.633 5.6569 16.2425C6.04743 15.852 6.04743 15.2188 5.6569 14.8283L3.82849 12.9999L17.9998 12.9999L18.0015 12.9999H20.1714L18.3429 14.8283C17.9524 15.2188 17.9524 15.852 18.3429 16.2425C18.7335 16.633 19.3666 16.633 19.7572 16.2425L22.5856 13.4141C23.3666 12.633 23.3668 11.3667 22.5857 10.5857L19.7573 7.75725C19.3668 7.36672 18.7336 7.36672 18.3431 7.75725C17.9526 8.14777 17.9526 8.78094 18.3431 9.17146L20.1715 10.9999L3.82842 10.9999L5.65681 9.17149C6.04734 8.78097 6.04734 8.1478 5.65681 7.75728Z"
                                                        fill="#0F0F0F"></path>
                                                </g>
                                            </svg>
                                        </div>

                                        <div id="arrowCol1"
                                             class="fixed scale-125 w-[230px] hidden opacity-0 -translate-x-12 translate-y-20 duration-300">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M16.2426 5.65675C16.6331 5.26623 16.6331 4.63306 16.2426 4.24254L13.4142 1.4142C12.6332 0.633154 11.3668 0.63306 10.5857 1.41411L7.75737 4.24263C7.36685 4.63315 7.36685 5.26632 7.75737 5.65684C8.1479 6.04737 8.78106 6.04737 9.17159 5.65684L11 3.82843V17.9997L11 18.0014V20.1713L9.17158 18.3429C8.78106 17.9524 8.14789 17.9524 7.75737 18.3429C7.36685 18.7334 7.36685 19.3666 7.75737 19.7571L10.5858 22.5855C11.3668 23.3666 12.6332 23.3667 13.4142 22.5857L16.2426 19.7572C16.6332 19.3667 16.6332 18.7336 16.2426 18.343C15.8521 17.9525 15.2189 17.9525 14.8284 18.343L13 20.1714V18.0007V3.82836L14.8284 5.65675C15.2189 6.04727 15.8521 6.04727 16.2426 5.65675Z"
                                                        fill="#0F0F0F"></path>
                                                </g>
                                            </svg>
                                        </div>

                                        <div id="arrowCol2"
                                             class="fixed scale-125 w-[230px] translate-x-20 translate-y-20 hidden opacity-0 duration-300">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M16.2426 5.65675C16.6331 5.26623 16.6331 4.63306 16.2426 4.24254L13.4142 1.4142C12.6332 0.633154 11.3668 0.63306 10.5857 1.41411L7.75737 4.24263C7.36685 4.63315 7.36685 5.26632 7.75737 5.65684C8.1479 6.04737 8.78106 6.04737 9.17159 5.65684L11 3.82843V17.9997L11 18.0014V20.1713L9.17158 18.3429C8.78106 17.9524 8.14789 17.9524 7.75737 18.3429C7.36685 18.7334 7.36685 19.3666 7.75737 19.7571L10.5858 22.5855C11.3668 23.3666 12.6332 23.3667 13.4142 22.5857L16.2426 19.7572C16.6332 19.3667 16.6332 18.7336 16.2426 18.343C15.8521 17.9525 15.2189 17.9525 14.8284 18.343L13 20.1714V18.0007V3.82836L14.8284 5.65675C15.2189 6.04727 15.8521 6.04727 16.2426 5.65675Z"
                                                        fill="#0F0F0F"></path>
                                                </g>
                                            </svg>
                                        </div>

                                        <div id="arrowCol3"
                                             class="fixed scale-125 w-[230px] translate-x-[215px] translate-y-20 hidden opacity-0 duration-300">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                   stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M16.2426 5.65675C16.6331 5.26623 16.6331 4.63306 16.2426 4.24254L13.4142 1.4142C12.6332 0.633154 11.3668 0.63306 10.5857 1.41411L7.75737 4.24263C7.36685 4.63315 7.36685 5.26632 7.75737 5.65684C8.1479 6.04737 8.78106 6.04737 9.17159 5.65684L11 3.82843V17.9997L11 18.0014V20.1713L9.17158 18.3429C8.78106 17.9524 8.14789 17.9524 7.75737 18.3429C7.36685 18.7334 7.36685 19.3666 7.75737 19.7571L10.5858 22.5855C11.3668 23.3666 12.6332 23.3667 13.4142 22.5857L16.2426 19.7572C16.6332 19.3667 16.6332 18.7336 16.2426 18.343C15.8521 17.9525 15.2189 17.9525 14.8284 18.343L13 20.1714V18.0007V3.82836L14.8284 5.65675C15.2189 6.04727 15.8521 6.04727 16.2426 5.65675Z"
                                                        fill="#0F0F0F"></path>
                                                </g>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="flex justify-center items-center col-span-2 bg-gray-100 border-l-4 border-gray-200 h-full">
                            <div>

                                <div class="flex justify-center mt-5 pb-2">
                                    <svg id="brush" class="duration-300"
                                         xmlns="http://www.w3.org/2000/svg" width="30"
                                         fill="#78716c"
                                         viewBox="0 0 24 24">
                                        <path
                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                    </svg>
                                </div>

                                <div class="flex justify-center items-center">
                                                    <span id="observa"
                                                          class="font-MPlus text-SM duration-300">{{
                                                            props.palette_text
                                                        }}</span>
                                </div>


                                <div class="flex justify-center col-span-2">
                                    <div>
                                        <div class="grid grid-cols-2 gap-5 mt-5">
                                            <div class="flex justify-center">
                                                <!--                                                <button @click="selectItem(props.item_1)"-->
                                                <!--                                                        class="rounded-md py-3 px-5 shadow-md bg-gray-300">-->
                                                <!--                                                    <span class="font-bold text-4xl">{{ props.item_1 }}</span>-->
                                                <!--                                                </button>-->
                                                <button v-if="dato1.type === 'image'"
                                                        @click="selectItem(dato1.type, dato1.value)"
                                                        class="flex justify-center items-center ">
                                                    <div class="bg-gray-300 p-4 shadow-md rounded-lg">
                                                        <img :src="dato1.value" width="40" alt="">
                                                    </div>
                                                </button>

                                                <button v-if="dato1.type === 'color'"
                                                        @click="selectItem(dato1.type, dato1.value)"
                                                        class="rounded-md p-2 shadow-md bg-gray-300">
                                                    <svg :class="props.icon_1" xmlns="http://www.w3.org/2000/svg"
                                                         width="50"
                                                         height="50" viewBox="0 0 24 24">
                                                        <path
                                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                                    </svg>
                                                </button>

                                                <button v-if="dato1.type === 'item'"
                                                        @click="selectItem(dato1.type, dato1.value)"
                                                        class="rounded-md py-3 px-5 shadow-md bg-gray-300">
                                                    <span class="font-bold text-4xl">{{ dato1.value }}</span>
                                                </button>
                                            </div>

                                            <div class="flex justify-center">
                                                <button v-if="dato2.type === 'image'"
                                                        @click="selectItem(dato2.type, dato2.value)"
                                                        class="flex justify-center items-center ">
                                                    <div class="bg-gray-300 p-4 shadow-md rounded-lg">
                                                        <img class="icon-blue" :src="dato2.value" width="40" alt="">
                                                    </div>
                                                </button>

                                                <button v-if="dato2.type === 'color'"
                                                        @click="selectItem(dato2.type, dato2.value)"
                                                        class="rounded-md p-2 shadow-md bg-gray-300">
                                                    <svg :class="props.icon_2" xmlns="http://www.w3.org/2000/svg"
                                                         width="50"
                                                         height="50" viewBox="0 0 24 24">
                                                        <path
                                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                                    </svg>
                                                </button>

                                                <button v-if="dato2.type === 'item'"
                                                        @click="selectItem(dato2.type, dato2.value)"
                                                        class="rounded-md py-3 px-5 shadow-md bg-gray-300">
                                                    <span class="font-bold text-4xl">{{ dato2.value }}</span>
                                                </button>

                                            </div>

                                            <div class="flex justify-center">
                                                <button v-if="dato3.type === 'image'"
                                                        @click="selectItem(dato3.type, dato3.value)"
                                                        class="flex justify-center items-center ">
                                                    <div class="bg-gray-300 p-4 shadow-md rounded-lg">
                                                        <img :src="dato3.value" width="40" alt="">
                                                    </div>
                                                </button>

                                                <button v-if="dato3.type === 'color'"
                                                        @click="selectItem(dato3.type, dato3.value)"
                                                        class="rounded-md p-2 shadow-md bg-gray-300">
                                                    <svg :class="props.icon_3" xmlns="http://www.w3.org/2000/svg"
                                                         width="50"
                                                         height="50" viewBox="0 0 24 24">
                                                        <path
                                                            d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                                    </svg>
                                                </button>

                                                <button v-if="dato3.type === 'item'"
                                                        @click="selectItem(dato3.type, dato3.value)"
                                                        class="rounded-md py-3 px-5 shadow-md bg-gray-300">
                                                    <span class="font-bold text-4xl">{{ dato3.value }}</span>
                                                </button>
                                            </div>

                                            <button @click="selectItem(null, null)"
                                                    class="relative rounded-md p-2 shadow-md bg-gray-300  flex justify-center select-none">
                                                <div class="relative">
                                                    <img :src="eraser" alt="borrador" width="50">
                                                </div>
                                            </button>

                                            <div v-if="contentType === 'color'" id="muestra"
                                                 :class="`${colorSelected} border-2 border-black h-14 mt-5 col-span-2 shadow-2xl shadow-blue-900 flex justify-center font-bold text-5xl`">
                                                {{ content }}
                                            </div>
                                            <div v-if="contentType === 'item'" id="muestra2"
                                                 class="border-2 border-black h-14 mt-5 bg-white col-span-2 shadow-2xl shadow-blue-900 flex justify-center font-bold text-5xl">
                                                {{ content }}
                                            </div>
                                            <div v-if="contentType === 'image'" id="muestra3"
                                                 class="border-2 border-black p-1 h-14 mt-5 bg-white col-span-2 shadow-2xl shadow-blue-900 flex justify-center font-bold text-5xl">
                                                <img :src="content" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-span-2 flex justify-center mt-5">
                                    <a :href="props.route_next">
                                        <button v-if="winLevel"
                                                class="bg-yellow-300 p-2 font-MPlus flex items-center arrow border-2 border-yellow-100 animate-pulse shadow-2xl shadow-amber-300">
                                            Siguiente
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 24 24">
                                                <path
                                                    d="M7.33 24l-2.83-2.829 9.339-9.175-9.339-9.167 2.83-2.829 12.17 11.996z"/>
                                            </svg>
                                        </button>
                                    </a>
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

.bg-gray-infinite {
    animation: gray-infinite 2s infinite;
}

@keyframes gray-infinite {
    0% {
        background-color: white;
    }

    50% {
        background-color: gray;
    }

    100% {
        background-color: white;
    }
}

.bg-green-infinite {
    animation: green-infinite 2s infinite;
}

@keyframes green-infinite {
    0% {
        background-color: white;
    }

    50% {
        background-color: #86efac;
    }

    100% {
        background-color: white;
    }
}
</style>
