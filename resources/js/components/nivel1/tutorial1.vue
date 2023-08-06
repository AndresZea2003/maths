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

let content = ref(null);

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

// azul 1
// rojo 2
// verde 3

let combinations = ['123', '132', '213', '231', '312', '321']

let sequenceNumber = ref('')

let grupo1 = ref(color1.value + color2.value + color3.value);
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

let select1 = ref(false)
let select2 = ref(false)
let select3 = ref(false)
let select4 = ref(false)
let select5 = ref(false)
let select6 = ref(false)
let select7 = ref(false)
let select8 = ref(false)
let select9 = ref(false)


let filaFocus = ref(1)
const boxNumRange = [1, 18];

let focusId = ref('')

let canPaint = ref(true)

// const myTimeout = setTimeout(initialAudio, 2000);

function initialAudio() {
    if (talk.value === false) {
        talk.value = true;

        let sound = new Audio();
        sound.src = `${props.asset_audio}/voz1/permutaciones/vamoscolores.m4a`;
        sound.play()

        showIndexSquare('bg-green-600', 'bg-blue-600', 'bg-red-600')

        setTimeout(function () {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/permutaciones/filascolores.m4a`;
            sound.play()
        }, 8000)

        setTimeout(function () {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/permutaciones/prestacolor.m4a`;
            sound.play()
        }, 12000)

        setTimeout(function () {
            interactiveActivity()
        }, 24000)

        widthMati.value = 160;
        setTimeout(resetMati, 24000);
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

const audioErrorFila = () => {
    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/permutaciones/errorcolorfila.m4a`;
    sound.play();
}

const audioErrorBack = () => {
    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/permutaciones/errorcolorback.m4a`;
    sound.play();
}

const audio2filas = () => {

    setTimeout(function () {
        document.getElementById('num1').classList.add('bg-yellow-400')
        document.getElementById('num2').classList.add('bg-yellow-400')
        document.getElementById('num3').classList.add('bg-yellow-400')
        setTimeout(function () {
            document.getElementById('num4').classList.add('bg-yellow-400')
            document.getElementById('num5').classList.add('bg-yellow-400')
            document.getElementById('num6').classList.add('bg-yellow-400')
        }, 500)
    }, 1000)

    setTimeout(function () {
        document.getElementById('num1').classList.remove('bg-yellow-400')
        document.getElementById('num2').classList.remove('bg-yellow-400')
        document.getElementById('num3').classList.remove('bg-yellow-400')
        document.getElementById('num4').classList.remove('bg-yellow-400')
        document.getElementById('num5').classList.remove('bg-yellow-400')
        document.getElementById('num6').classList.remove('bg-yellow-400')
    }, 2000)

    setTimeout(function () {
        document.getElementById('num1').classList.add('opacity-50')
        document.getElementById('num2').classList.add('opacity-50')
        document.getElementById('num3').classList.add('opacity-50')
        document.getElementById('num4').classList.add('opacity-50')
        document.getElementById('num5').classList.add('opacity-50')
        document.getElementById('num6').classList.add('opacity-50')
        setTimeout(function () {
            document.getElementById('num1').classList.replace('opacity-50', 'opacity-100')
            setTimeout(function () {
                document.getElementById('num2').classList.replace('opacity-50', 'opacity-100')
                setTimeout(function () {
                    document.getElementById('num3').classList.replace('opacity-50', 'opacity-100')
                }, 1000)
            }, 500)
        }, 1000)
    }, 5000)

    setTimeout(function () {
        document.getElementById('num4').classList.replace('opacity-50', 'opacity-100')
        setTimeout(function () {
            document.getElementById('num5').classList.replace('opacity-50', 'opacity-100')
            setTimeout(function () {
                document.getElementById('num6').classList.replace('opacity-50', 'opacity-100')
            }, 1000)
        }, 1000)
    }, 10000)

    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/permutaciones/completado2filascolores.m4a`;
    sound.play();
}


const audio4filas = () => {

    setTimeout(function () {
        document.getElementById('num1').classList.add('bg-yellow-400')
        document.getElementById('num2').classList.add('bg-yellow-400')
        document.getElementById('num3').classList.add('bg-yellow-400')
        document.getElementById('num4').classList.add('bg-yellow-400')
        document.getElementById('num5').classList.add('bg-yellow-400')
        document.getElementById('num6').classList.add('bg-yellow-400')
        document.getElementById('num7').classList.add('bg-yellow-400')
        document.getElementById('num8').classList.add('bg-yellow-400')
        document.getElementById('num9').classList.add('bg-yellow-400')
        document.getElementById('num10').classList.add('bg-yellow-400')
        document.getElementById('num11').classList.add('bg-yellow-400')
        document.getElementById('num12').classList.add('bg-yellow-400')
    }, 2000)

    setTimeout(function () {
        document.getElementById('num1').classList.remove('bg-yellow-400')
        document.getElementById('num2').classList.remove('bg-yellow-400')
        document.getElementById('num3').classList.remove('bg-yellow-400')
        document.getElementById('num4').classList.remove('bg-yellow-400')
        document.getElementById('num5').classList.remove('bg-yellow-400')
        document.getElementById('num6').classList.remove('bg-yellow-400')
        document.getElementById('num7').classList.remove('bg-yellow-400')
        document.getElementById('num8').classList.remove('bg-yellow-400')
        document.getElementById('num9').classList.remove('bg-yellow-400')
        document.getElementById('num10').classList.remove('bg-yellow-400')
        document.getElementById('num11').classList.remove('bg-yellow-400')
        document.getElementById('num12').classList.remove('bg-yellow-400')
    }, 3000)

    let sound = new Audio();
    sound.src = `${props.asset_audio}/voz1/permutaciones/completado4filascolores.m4a`;
    sound.play();
}

function showIndexSquare(color1, color2, color3) {
    indexSquareFig.value = 'colors';
    setTimeout(function () {
        audioColor1()
        indexSquare.value = `border-black border-2 p-12 ${color1}`;
    }, 3000);
    setTimeout(function () {
        audioColor2()
        indexSquare.value = `border-black border-2 p-12 ${color2}`;
    }, 4500);
    setTimeout(function () {
        audioColor3()
        indexSquare.value = `border-black border-2 p-12 ${color3}`;
    }, 6000);
    setTimeout(function () {
        indexSquare.value = '';
    }, 7500);
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


const paint = (id) => {

    if (canPaint.value === false) {
        return
    }

    if (document.getElementById(id).classList.contains('bg-gray-infinite')) {
        document.getElementById(id).classList.remove('bg-gray-infinite')
    }

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

    if (id !== focusId.value) {
        error(id)
        return;
    }

    if (id === 'num1' || id === 'num2' || id === 'num3') {
        if (grupo1check.value) {
            return;
        }
    } else if (id === 'num4' || id === 'num5' || id === 'num6') {
        if (grupo2check.value) {
            return;
        }
    } else if (id === 'num7' || id === 'num8' || id === 'num9') {
        if (grupo3check.value) {
            return;
        }
    } else if (id === 'num10' || id === 'num11' || id === 'num12') {
        if (grupo4check.value) {
            return;
        }
    } else if (id === 'num13' || id === 'num14' || id === 'num15') {
        if (grupo5check.value) {
            return;
        }
    } else if (id === 'num16' || id === 'num17' || id === 'num18') {
        if (grupo6check.value) {
            return;
        }
    }

    document.getElementById(id).classList.remove('hover:bg-gray-400')
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.remove('bg-blue-600')
    document.getElementById(id).classList.remove('bg-green-600')
    document.getElementById(id).classList.remove('bg-yellow-400')
    document.getElementById(id).classList.remove('bg-fuchsia-400')
    document.getElementById(id).classList.add(`bg-${color}`);


    if (color === 'yellow-400') {
        sequenceNumber = '1'
    } else if (color === 'blue-600') {
        sequenceNumber = '2'
    } else if (color === 'fuchsia-400') {
        sequenceNumber = '3'
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

    if (boxes.hasOwnProperty(id)) {
        boxes[id].color.value = sequenceNumber.value;
    }

    const verifyCombinations = (boxNum, group, groupNum, groupCheck, classToAdd, sec1, sec2, sec3) => {

        grupo1.value = color1.value + color2.value + color3.value;
        grupo2.value = color4.value + color5.value + color6.value;
        grupo3.value = color7.value + color8.value + color9.value;
        grupo4.value = color10.value + color11.value + color12.value;
        grupo5.value = color13.value + color14.value + color15.value;
        grupo6.value = color16.value + color17.value + color18.value;

        const box = document.getElementById(`caja${boxNum}`);

        if (box.classList.contains('bg-white')) {
            document.getElementById(`error${groupNum}`).classList.replace('opacity-100', 'opacity-0')
            let sound = new Audio();
            sound.src = `${props.asset_audio}/eraser.mp3`;
            sound.play()
        } else {

        }

        if (combinations.includes(group.value)) {
            groupCheck.value = true
            document.getElementById(`error${groupNum}`).classList.replace('opacity-100', 'opacity-0')
            let index = combinations.indexOf(group.value)
            combinations.splice(index, 1)
            playJumpSound()

            document.getElementById(sec1).classList.add(classToAdd)
            document.getElementById(sec2).classList.add(classToAdd)
            document.getElementById(sec3).classList.add(classToAdd)

        } else {
            function validarString(str) {

                const uniqueDigits = new Set(str);
                return uniqueDigits.size === 3;
            }

            const miString = group.value; // Reemplaza esto con tu string
            const esValido = validarString(miString);

            let sound = new Audio();

            if (group.value.length === 3) {
                document.getElementById(`error${groupNum}`).classList.replace('opacity-0', 'opacity-100')
                sound.src = `${props.asset_audio}/wood.wav`;
                document.getElementById(sec1).classList.add('bg-red-800', 'brush-fail')
                document.getElementById(sec2).classList.add('bg-red-800', 'brush-fail')
                document.getElementById(sec3).classList.add('bg-red-800', 'brush-fail')
                setTimeout(function () {
                    document.getElementById(sec1).classList.remove('bg-red-800', 'brush-fail')
                    document.getElementById(sec2).classList.remove('bg-red-800', 'brush-fail')
                    document.getElementById(sec3).classList.remove('bg-red-800', 'brush-fail')
                }, 500)
            } else {
                sound.src = `${props.asset_audio}/paint.wav`;
            }

            sound.play();
        }

        if (combinations.length === 0) {
            win()
        }
    }

    if (id in boxes) {
        const {num, group, groupNum, groupCheck, classToAdd, sec1, sec2, sec3} = boxes[id];
        verifyCombinations(num, group, groupNum, groupCheck, classToAdd, sec1, sec2, sec3);
    }

    // Borrador
    const colorErrors = [color1Error, color2Error, color3Error, color4Error, color5Error, color6Error, color7Error,
        color8Error, color9Error, color10Error, color11Error, color12Error, color13Error, color14Error,
        color15Error, color16Error, color17Error, color18Error, color19Error, color20Error];


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


    // Completar figura
    // if (document.getElementById('caja1').classList.contains('bg-blue-600') &&
    //     document.getElementById('caja2').classList.contains('bg-red-600') &&
    //     document.getElementById('caja3').classList.contains('bg-yellow-400') &&
    //     document.getElementById('caja4').classList.contains('bg-red-600')
    // ) {
    //     win()
    //     let sound = new Audio();
    //     sound.src = `${props.asset_audio}/correctVictory.wav`;
    //     sound.play()
    //     // Swal.fire({
    //     //     icon: 'success',
    //     //     title: 'Completado!',
    //     //     text: 'Felicidades! Has completado la actividad',
    //     //     showConfirmButton: true,
    //     // })
    // }

    // Interactivo sin refactorizar down

    if (filaFocus.value === 1) {

        let box1 = 'num1'
        let box2 = 'num2'
        let box3 = 'num3'

        let nextBox1 = 'num4'
        let nextBox2 = 'num5'
        let nextBox3 = 'num6'

        let boxNum1 = 1
        let boxNum3 = 3

        if (document.getElementById(box3).classList.contains('bg-green-600')) { // Si completa la primera fila

            filaFocus.value = 2

            successSound()
            document.getElementById(nextBox1).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')
            document.getElementById(nextBox2).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')

            // Audio bien

            setTimeout(function () {
                document.getElementById(nextBox1).classList.add('bg-blue-600')
                audioColor2()
                setTimeout(function () {
                    bottonLigth(nextBox2)
                    focusId.value = nextBox2
                }, 1000)
            }, 1000)

            return;

        } else if (document.getElementById(box3).classList.contains('bg-blue-600')) {
            canPaint.value = false
            errorSound()
            audioErrorFila()
            let selectSquare = box3

            let yellowSquare = box1

            for (let i = 1; i <= 3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-blue-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        } else if (document.getElementById(box3).classList.contains('bg-red-600')) {
            canPaint.value = false
            errorSound()
            audioErrorFila()
            let selectSquare = box3

            let yellowSquare = box2


            for (let i = 1; i <= 3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-red-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        }
    }

    if (filaFocus.value === 2) {

        let box1 = 'num4'
        let box2 = 'num5'
        let box3 = 'num6'

        let oldBoxNum1 = 1
        let oldBoxNum3 = 3

        let boxNum1 = 4
        let boxNum3 = 6


        if (document.getElementById(box2).classList.contains('bg-green-600')) { // Si completa la primera fila
            filaFocus.value = 3

            successSound()
            focusId.value = box3
            document.getElementById('num6').classList.remove('scale-75', 'bg-gray-400', 'opacity-10')
            document.getElementById('num6').classList.add('bg-gray-infinite')

        } else if (document.getElementById(box2).classList.contains('bg-blue-600')) {
            canPaint.value = false
            errorSound()
            audioErrorFila()
            let selectSquare = box2
            let yellowSquare = box1


            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-blue-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        } else if (document.getElementById(box2).classList.contains('bg-red-600')) {
            canPaint.value = false
            errorSound()
            audioErrorBack()
            let selectSquare = box2

            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    for (let i = oldBoxNum1; i <= oldBoxNum3; i++) {
                        const elementId2 = `caja${i}`;
                        document.getElementById(elementId2).classList.add('opacity-50')
                    }
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        for (let i = oldBoxNum1; i <= oldBoxNum3; i++) {
                            const elementId2 = `caja${i}`;
                            document.getElementById(elementId2).classList.remove('opacity-50')
                        }
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-red-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        }
    }

    if (filaFocus.value === 3) {
        let box1 = 'num4'
        let box2 = 'num5'
        let box3 = 'num6'

        let oldBoxNum1 = 1
        let oldBoxNum3 = 3

        let nextBox1 = 'num7'
        let nextBox2 = 'num8'
        let nextBox3 = 'num9'

        let boxNum1 = 4
        let boxNum3 = 6

        if (document.getElementById(box3).classList.contains('bg-red-600')) { // Si completa la primera fila
            filaFocus.value = 4

            successSound()

            audio2filas()

            setTimeout(function () {
                document.getElementById(nextBox1).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')
                document.getElementById(nextBox2).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')
                document.getElementById(nextBox3).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')

                // Audio bien

                setTimeout(function () {
                    document.getElementById(nextBox1).classList.add('bg-red-600')
                    audioColor3()
                    setTimeout(function () {
                        document.getElementById(nextBox2).classList.add('bg-green-600')
                        audioColor1()
                        setTimeout(function () {
                            bottonLigth(nextBox3)
                            let sound = new Audio();
                            sound.src = `${props.asset_audio}/voz1/permutaciones/quecolor.m4a`;
                            sound.play()
                            focusId.value = nextBox3
                        }, 1000)
                    }, 1000)
                }, 1000)
            }, 20000)

        } else if (document.getElementById(box3).classList.contains('bg-blue-600')) {
            canPaint.value = false
            errorSound()
            let selectSquare = box3
            let yellowSquare = box1
            audioErrorFila()


            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-blue-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        } else if (document.getElementById(box3).classList.contains('bg-green-600')) {
            canPaint.value = false
            errorSound()
            audioErrorFila()
            let selectSquare = box3

            let yellowSquare = box2


            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-red-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        }


    }

    if (filaFocus.value === 4) {

        let box1 = 'num7'
        let box2 = 'num8'
        let box3 = 'num9'

        let nextBox1 = 'num10'
        let nextBox2 = 'num11'
        let nextBox3 = 'num12'

        let boxNum1 = 7
        let boxNum3 = 9

        if (document.getElementById(box3).classList.contains('bg-blue-600')) { // Si completa la primera fila

            filaFocus.value = 5

            successSound()
            document.getElementById(nextBox1).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')
            document.getElementById(nextBox2).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')

            // Audio bien

            setTimeout(function () {
                document.getElementById(nextBox1).classList.add('bg-red-600')
                audioColor3()
                setTimeout(function () {
                    bottonLigth(nextBox2)
                    focusId.value = nextBox2
                }, 1000)
            }, 1000)

            return;

        } else if (document.getElementById(box3).classList.contains('bg-red-600') || document.getElementById(box3).classList.contains('bg-green-600')) {
            canPaint.value = false
            errorSound()
            audioErrorFila()
            let selectSquare = box3
            let yellowSquare = null

            if (document.getElementById(box3).classList.contains('bg-red-600')) {
                yellowSquare = box1
            } else if (document.getElementById(box3).classList.contains('bg-green-600')) {
                yellowSquare = box2
            }


            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-green-600', 'bg-red-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        }
    }

    if (filaFocus.value === 5) {

        let box1 = 'num10'
        let box2 = 'num11'
        let box3 = 'num12'

        let oldBoxNum1 = 7
        let oldBoxNum3 = 9

        let boxNum1 = 10
        let boxNum3 = 12


        if (document.getElementById(box2).classList.contains('bg-blue-600')) { // Si completa la primera fila
            filaFocus.value = 6

            successSound()
            focusId.value = box3
            document.getElementById(box3).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')
            document.getElementById(box3).classList.add('bg-gray-infinite')

        } else if (document.getElementById(box2).classList.contains('bg-red-600')) {
            canPaint.value = false
            errorSound()
            let selectSquare = box2
            let yellowSquare = box1
            audioErrorFila()


            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-red-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        } else if (document.getElementById(box2).classList.contains('bg-green-600')) {
            canPaint.value = false
            errorSound()
            audioErrorBack()
            let selectSquare = box2

            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    for (let i = oldBoxNum1; i <= oldBoxNum3; i++) {
                        const elementId2 = `caja${i}`;
                        document.getElementById(elementId2).classList.add('opacity-50')
                    }
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        for (let i = oldBoxNum1; i <= oldBoxNum3; i++) {
                            const elementId2 = `caja${i}`;
                            document.getElementById(elementId2).classList.remove('opacity-50')
                        }
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-red-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        }
    }

    if (filaFocus.value === 6) {

        let box1 = 'num10'
        let box2 = 'num11'
        let box3 = 'num12'

        let oldBoxNum1 = 7
        let oldBoxNum3 = 9

        let boxNum1 = 10
        let boxNum3 = 12

        let nextBox1 = 'num13'
        let nextBox2 = 'num14'
        let nextBox3 = 'num15'


        if (document.getElementById(box3).classList.contains('bg-green-600')) { // Si completa la primera fila

            filaFocus.value = 7

            successSound()

            audio4filas()

            setTimeout(function () {
                document.getElementById(nextBox1).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')
                document.getElementById(nextBox2).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')
                document.getElementById(nextBox3).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')

                // Audio bien

                setTimeout(function () {
                    document.getElementById(nextBox1).classList.add('bg-green-600')
                    audioColor1()
                    setTimeout(function () {
                        document.getElementById(nextBox2).classList.add('bg-blue-600')
                        audioColor2()
                        setTimeout(function () {
                            bottonLigth(nextBox3)
                            focusId.value = nextBox3
                        }, 1000)
                    }, 1000)
                }, 1000)

                return;
            }, 7000)

        } else if (document.getElementById(box3).classList.contains('bg-red-600') || document.getElementById(box3).classList.contains('bg-blue-600')) {
            canPaint.value = false
            errorSound()
            audioErrorFila()
            let selectSquare = box3
            let yellowSquare = null

            if (document.getElementById(box3).classList.contains('bg-red-600')) {
                yellowSquare = box1
            } else if (document.getElementById(box3).classList.contains('bg-blue-600')) {
                yellowSquare = box2
            }


            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-blue-600', 'bg-red-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        }
    }

    if (filaFocus.value === 7) {

        let box1 = 'num13'
        let box2 = 'num14'
        let box3 = 'num15'

        let oldBoxNum1 = 10
        let oldBoxNum3 = 12

        let boxNum1 = 13
        let boxNum3 = 15

        let nextBox1 = 'num16'
        let nextBox2 = 'num17'
        let nextBox3 = 'num18'


        if (document.getElementById(box3).classList.contains('bg-red-600')) { // Si completa la primera fila
            filaFocus.value = 8

            successSound()

            document.getElementById(nextBox1).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')
            document.getElementById(nextBox2).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')

            setTimeout(function () {
                document.getElementById(nextBox1).classList.add('bg-green-600')
                audioColor1()
                bottonLigth(nextBox2)
                focusId.value = nextBox2
            }, 1000)

        } else if (document.getElementById(box3).classList.contains('bg-green-600') || document.getElementById(box3).classList.contains('bg-blue-600')) {
            canPaint.value = false
            errorSound()
            audioErrorFila()
            let selectSquare = box3
            let yellowSquare = null

            if (document.getElementById(box3).classList.contains('bg-green-600')) {
                yellowSquare = box1
            } else if (document.getElementById(box3).classList.contains('bg-blue-600')) {
                yellowSquare = box2
            }


            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-blue-600', 'bg-green-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        }
    }

    if (filaFocus.value === 8) {

        let box1 = 'num16'
        let box2 = 'num17'
        let box3 = 'num18'

        let oldBoxNum1 = 13
        let oldBoxNum3 = 15

        let boxNum1 = 16
        let boxNum3 = 18


        if (document.getElementById(box2).classList.contains('bg-red-600')) { // Si completa la primera fila
            filaFocus.value = 9

            successSound()
            focusId.value = box3
            document.getElementById(box3).classList.remove('scale-75', 'bg-gray-400', 'opacity-10')
            document.getElementById(box3).classList.add('bg-gray-infinite')

        } else if (document.getElementById(box2).classList.contains('bg-green-600')) {
            canPaint.value = false
            errorSound()
            let selectSquare = box2
            let yellowSquare = box1
            audioErrorFila()


            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-red-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        } else if (document.getElementById(box2).classList.contains('bg-blue-600')) {
            canPaint.value = false
            errorSound()
            audioErrorBack()
            let selectSquare = box2

            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    for (let i = oldBoxNum1; i <= oldBoxNum3; i++) {
                        const elementId2 = `caja${i}`;
                        document.getElementById(elementId2).classList.add('opacity-50')
                    }
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        for (let i = oldBoxNum1; i <= oldBoxNum3; i++) {
                            const elementId2 = `caja${i}`;
                            document.getElementById(elementId2).classList.remove('opacity-50')
                        }
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-red-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        }
    }

    if (filaFocus.value === 9) {

        let box1 = 'num16'
        let box2 = 'num17'
        let box3 = 'num18'

        let oldBoxNum1 = 13
        let oldBoxNum3 = 15

        let boxNum1 = 16
        let boxNum3 = 18

        let nextBox1 = 'num16'
        let nextBox2 = 'num17'
        let nextBox3 = 'num18'


        if (document.getElementById(box3).classList.contains('bg-blue-600')) { // Si completa la primera fila
            filaFocus.value = 10

            let sound = new Audio();
            sound.src = `${props.asset_audio}/coin.wav`;
            sound.play();

            focusId.value = ''

            for (let i = 1; i <= 18; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-green-400');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-green-400');
                }, 1000)
            }

            setTimeout(function () {
                win()
            }, 800)


        } else if (document.getElementById(box3).classList.contains('bg-green-600') || document.getElementById(box3).classList.contains('bg-red-600')) {
            canPaint.value = false
            errorSound()
            audioErrorFila()
            let selectSquare = box3
            let yellowSquare = null

            if (document.getElementById(box3).classList.contains('bg-green-600')) {
                yellowSquare = box1
            } else if (document.getElementById(box3).classList.contains('bg-red-600')) {
                yellowSquare = box2
            }


            for (let i = boxNum1; i <= boxNum3; i++) {
                const elementId = `caja${i}`;
                document.getElementById(elementId).classList.add('brush-fail', 'bg-red-800');
                setTimeout(function () {
                    document.getElementById(elementId).classList.remove('brush-fail', 'bg-red-800');
                }, 1000)
                setTimeout(function () {
                    // El color { color } ya se encuentra en esta fila
                    document.getElementById(yellowSquare).classList.add('bg-yellow-400');
                    document.getElementById(selectSquare).classList.add('bg-yellow-400');
                    setTimeout(function () {
                        document.getElementById(yellowSquare).classList.remove('bg-yellow-400');
                        document.getElementById(selectSquare).classList.remove('bg-yellow-400');
                    }, 1000)
                }, 2000)
                setTimeout(function () {
                    document.getElementById(selectSquare).classList.remove('bg-yellow-400', 'bg-red-600', 'bg-green-600');
                    setTimeout(function () {
                        document.getElementById(selectSquare).classList.add('bg-gray-infinite')
                        canPaint.value = true
                    }, 800)
                }, 3500)
            }
        }
    }

    // Interactivo sin refactorizar up
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

const selectColor = (bg, id) => {
    color = bg
    colorSelected.value++
    if (id === 1) {
        document.getElementById('muestra1').classList.remove('bg-blue-600', 'bg-red-600', 'bg-green-600', 'bg-white');
        document.getElementById('muestra1').classList.add(`bg-${bg}`);
    } else if (id === 2) {
        document.getElementById('muestra').classList.remove('bg-blue-600', 'bg-fuchsia-400', 'bg-yellow-400', 'bg-white');
        document.getElementById('muestra').classList.add(`bg-${bg}`);
    }
    const colors = {
        'blue-600': '#2563eb',
        'red-600': '#dc2626',
        'fuchsia-400': '#e879f9',
        'yellow-400': '#facc15',
        'red-500': '#22c55e',
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
    sound.src = `${props.asset_audio}/voz1/win/fantastico1.m4a`;
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
        document.getElementById('fondoMati').classList.add('bg-green-200');
        document.getElementById('b-1').classList.add('bg-red-400');

        document.getElementById('board').classList.remove('bg-white')
        document.getElementById('board').classList.add('bg-green-200')

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

const bottonLigth = (id) => {
    document.getElementById(id).classList.add('bg-gray-infinite')
}

const interactiveActivity = () => {
    for (let i = 1; i <= 3; i++) {
        const elementId = `caja${i}`;
        document.getElementById(elementId).classList.add('scale-10', 'bg-red-500');
        setTimeout(function () {
            document.getElementById(elementId).classList.remove('scale-10', 'bg-red-500');
        }, 500)
    }

    for (let i = 4; i <= 18; i++) {
        const elementId = `caja${i}`;
        document.getElementById(elementId).classList.add('scale-75', 'bg-gray-400', 'opacity-10');
    }

    let myInterval = ''
    setTimeout(function () {
        document.getElementById('num1').classList.add('bg-blue-600');
        audioColor2()
        setTimeout(function () {
            document.getElementById('num2').classList.add('bg-red-600');
            audioColor3()
        }, 1000)
        setTimeout(function () {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/permutaciones/ahoracolor.m4a`;
            sound.play();
            bottonLigth('num3')
            focusId.value = 'num3'
        }, 2000)
    }, 1000)

}

const add = (num) => {

    if (num === 'num1') {
        num1.value = content.value
        if (content.value === null) {
            document.getElementById('num1').classList.add('p-7')
            document.getElementById('num1').classList.remove('py-3')
            document.getElementById('num1').classList.remove('px-5')
        } else {
            document.getElementById('num1').classList.remove('p-7')
            document.getElementById('num1').classList.add('py-3')
            document.getElementById('num1').classList.add('px-5')
        }
    } else if (num === 'num2') {
        num2.value = content.value
        if (content.value === null) {
            document.getElementById('num2').classList.add('p-7')
            document.getElementById('num2').classList.remove('py-3')
            document.getElementById('num2').classList.remove('px-5')
        } else {
            document.getElementById('num2').classList.remove('p-7')
            document.getElementById('num2').classList.add('py-3')
            document.getElementById('num2').classList.add('px-5')
        }
    } else if (num === 'num3') {
        num3.value = content.value
        if (content.value === null) {
            document.getElementById('num3').classList.add('p-7')
            document.getElementById('num3').classList.remove('py-3')
            document.getElementById('num3').classList.remove('px-5')
        } else {
            document.getElementById('num3').classList.remove('p-7')
            document.getElementById('num3').classList.add('py-3')
            document.getElementById('num3').classList.add('px-5')
        }
    } else if (num === 'num4') {
        num4.value = content.value
        if (content.value === null) {
            document.getElementById('num4').classList.add('p-7')
            document.getElementById('num4').classList.remove('py-3')
            document.getElementById('num4').classList.remove('px-5')
        } else {
            document.getElementById('num4').classList.remove('p-7')
            document.getElementById('num4').classList.add('py-3')
            document.getElementById('num4').classList.add('px-5')
        }
    } else if (num === 'num5') {
        num5.value = content.value
        if (content.value === null) {
            document.getElementById('num5').classList.add('p-7')
            document.getElementById('num5').classList.remove('py-3')
            document.getElementById('num5').classList.remove('px-5')
        } else {
            document.getElementById('num5').classList.remove('p-7')
            document.getElementById('num5').classList.add('py-3')
            document.getElementById('num5').classList.add('px-5')
        }
    } else if (num === 'num6') {
        num6.value = content.value
        if (content.value === null) {
            document.getElementById('num6').classList.add('p-7')
            document.getElementById('num6').classList.remove('py-3')
            document.getElementById('num6').classList.remove('px-5')
        } else {
            document.getElementById('num6').classList.remove('p-7')
            document.getElementById('num6').classList.add('py-3')
            document.getElementById('num6').classList.add('px-5')
        }
    } else if (num === 'num7') {
        num7.value = content.value
        if (content.value === null) {
            document.getElementById('num7').classList.add('p-7')
            document.getElementById('num7').classList.remove('py-3')
            document.getElementById('num7').classList.remove('px-5')
        } else {
            document.getElementById('num7').classList.remove('p-7')
            document.getElementById('num7').classList.add('py-3')
            document.getElementById('num7').classList.add('px-5')
        }
    } else if (num === 'num8') {
        num8.value = content.value
        if (content.value === null) {
            document.getElementById('num8').classList.add('p-7')
            document.getElementById('num8').classList.remove('py-3')
            document.getElementById('num8').classList.remove('px-5')
        } else {
            document.getElementById('num8').classList.remove('p-7')
            document.getElementById('num8').classList.add('py-3')
            document.getElementById('num8').classList.add('px-5')
        }
    } else if (num === 'num9') {
        num9.value = content.value
        if (content.value === null) {
            document.getElementById('num9').classList.add('p-7')
            document.getElementById('num9').classList.remove('py-3')
            document.getElementById('num9').classList.remove('px-5')
        } else {
            document.getElementById('num9').classList.remove('p-7')
            document.getElementById('num9').classList.add('py-3')
            document.getElementById('num9').classList.add('px-5')
        }
    } else if (num === 'num10') {
        num10.value = content.value
        if (content.value === null) {
            document.getElementById('num10').classList.add('p-7')
            document.getElementById('num10').classList.remove('py-3')
            document.getElementById('num10').classList.remove('px-5')
        } else {
            document.getElementById('num10').classList.remove('p-7')
            document.getElementById('num10').classList.add('py-3')
            document.getElementById('num10').classList.add('px-5')
        }
    } else if (num === 'num11') {
        num11.value = content.value
        if (content.value === null) {
            document.getElementById('num11').classList.add('p-7')
            document.getElementById('num11').classList.remove('py-3')
            document.getElementById('num11').classList.remove('px-5')
        } else {
            document.getElementById('num11').classList.remove('p-7')
            document.getElementById('num11').classList.add('py-3')
            document.getElementById('num11').classList.add('px-5')
        }
    } else if (num === 'num12') {
        num12.value = content.value
        if (content.value === null) {
            document.getElementById('num12').classList.add('p-7')
            document.getElementById('num12').classList.remove('py-3')
            document.getElementById('num12').classList.remove('px-5')
        } else {
            document.getElementById('num12').classList.remove('p-7')
            document.getElementById('num12').classList.add('py-3')
            document.getElementById('num12').classList.add('px-5')
        }
    } else if (num === 'num13') {
        num13.value = content.value
        if (content.value === null) {
            document.getElementById('num13').classList.add('p-7')
            document.getElementById('num13').classList.remove('py-3')
            document.getElementById('num13').classList.remove('px-5')
        } else {
            document.getElementById('num13').classList.remove('p-7')
            document.getElementById('num13').classList.add('py-3')
            document.getElementById('num13').classList.add('px-5')
        }
    } else if (num === 'num14') {
        num14.value = content.value
        if (content.value === null) {
            document.getElementById('num14').classList.add('p-7')
            document.getElementById('num14').classList.remove('py-3')
            document.getElementById('num14').classList.remove('px-5')
        } else {
            document.getElementById('num14').classList.remove('p-7')
            document.getElementById('num14').classList.add('py-3')
            document.getElementById('num14').classList.add('px-5')
        }
    } else if (num === 'num15') {
        num15.value = content.value
        if (content.value === null) {
            document.getElementById('num15').classList.add('p-7')
            document.getElementById('num15').classList.remove('py-3')
            document.getElementById('num15').classList.remove('px-5')
        } else {
            document.getElementById('num15').classList.remove('p-7')
            document.getElementById('num15').classList.add('py-3')
            document.getElementById('num15').classList.add('px-5')
        }
    } else if (num === 'num16') {
        num16.value = content.value
        if (content.value === null) {
            document.getElementById('num16').classList.add('p-7')
            document.getElementById('num16').classList.remove('py-3')
            document.getElementById('num16').classList.remove('px-5')
        } else {
            document.getElementById('num16').classList.remove('p-7')
            document.getElementById('num16').classList.add('py-3')
            document.getElementById('num16').classList.add('px-5')
        }
    } else if (num === 'num17') {
        num17.value = content.value
        if (content.value === null) {
            document.getElementById('num17').classList.add('p-7')
            document.getElementById('num17').classList.remove('py-3')
            document.getElementById('num17').classList.remove('px-5')
        } else {
            document.getElementById('num17').classList.remove('p-7')
            document.getElementById('num17').classList.add('py-3')
            document.getElementById('num17').classList.add('px-5')
        }
    } else if (num === 'num18') {
        num18.value = content.value
        if (content.value === null) {
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

const selectItem = (item) => {
    content.value = item

    let sound = new Audio();
    sound.src = `${props.asset_audio}/bubble.wav`;
    sound.play()
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
                         class="bg-white border-4 border-blue-600 rounded-md md:col-span-10 grid md:grid-cols-11 flex items-center">

                        <div :class="`${selectFig1} col-span-9`">
                            <div>
                                <div class="flex justify-center mt-1 mx-5 gap-5">
                                    <div>
                                        <img :src="`${props.asset_images}/planetas/tierra.svg`" width="50" alt="">
                                    </div>
                                    <div id="barras" class="grid grid-cols-5 gap-x-1 bg-gray-600 h-5 rounded-full mt-3">
                                        <div id="b-1" class="bg-gray-400 rounded-l-full h-5"></div>
                                        <div id="b-2" class="bg-gray-400 w-20 h-5"></div>
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

                            <div id="vista" class="items-center justify-center p-2 mt-5 duration-300">
                                <div>
                                    <div class="">
                                        <div class="flex justify-center">
                                            <div class="grid grid-cols-1 gap-y-5 gap-x-1">

                                                <!--                                                <div v-for="i in 18" :key="i + 100" :id="`caja${i + 100}`"-->
                                                <!--                                                     :class="['p-6', 'border-black', 'border-2', 'cursor-cell', 'grid', 'hover:bg-gray-400', 'duration-300',-->
                                                <!--                                             { 'bg-red-600' : i + 100 ===  || i + 100 === 6 || i + 100 === 7 || i + 100 === 10 || i + 100 === 15 || i + 100 === 17},-->
                                                <!--                                             { 'bg-blue-600': i + 100 === 1 || i + 100 === 4 || i + 100 === 9 || i + 100 ===  || i + 100 ===  || i + 100 === 18},-->
                                                <!--                                             { 'bg-green-500': i + 100 === 3 || i + 100 ===  || i + 100 ===  || i + 100 === 12 || i + 100 === 13 || i + 100 === 16}-->
                                                <!--                                             ]">-->
                                                <!--                                                    {{ null }}-->
                                                <!--                                                </div>-->
                                                <div class="grid grid-cols-3">
                                                    <button @click="add('num1')" class=" border-black border-2 p-7"
                                                            id="num1">
                                                        <span class="font-MPlus text-3xl">{{ num1 }}</span>
                                                    </button>
                                                    <button @click="add('num2')" class=" border-black border-2 p-7"
                                                            id="num2">
                                                        <span class="font-MPlus text-3xl">{{ num2 }}</span>
                                                    </button>
                                                    <button @click="add('num3')" class=" border-black border-2 p-7"
                                                            id="num3">
                                                        <span class="font-MPlus text-3xl">{{ num3 }}</span>
                                                    </button>
                                                </div>

                                                <div class="grid grid-cols-3">
                                                    <button @click="add('num4')" class=" border-black border-2 p-7"
                                                            id="num4">
                                                        <span class="font-MPlus text-3xl">{{ num4 }}</span>
                                                    </button>
                                                    <button @click="add('num5')" class=" border-black border-2 p-7"
                                                            id="num5">
                                                        <span class="font-MPlus text-3xl">{{ num5 }}</span>
                                                    </button>
                                                    <button @click="add('num6')" class=" border-black border-2 p-7"
                                                            id="num6">
                                                        <span class="font-MPlus text-3xl">{{ num6 }}</span>
                                                    </button>
                                                </div>

                                                <div class="grid grid-cols-3">
                                                    <button @click="add('num7')" class=" border-black border-2 p-7"
                                                            id="num7">
                                                        <span class="font-MPlus text-3xl">{{ num7 }}</span>
                                                    </button>
                                                    <button @click="add('num8')" class=" border-black border-2 p-7"
                                                            id="num8">
                                                        <span class="font-MPlus text-3xl">{{ num8 }}</span>
                                                    </button>
                                                    <button @click="add('num9')" class=" border-black border-2 p-7"
                                                            id="num9">
                                                        <span class="font-MPlus text-3xl">{{ num9 }}</span>
                                                    </button>
                                                </div>

                                                <div class="grid grid-cols-3">
                                                    <button @click="add('num10')" class=" border-black border-2 p-7"
                                                            id="num10">
                                                        <span class="font-MPlus text-3xl">{{ num10 }}</span>
                                                    </button>
                                                    <button @click="add('num11')" class=" border-black border-2 p-7"
                                                            id="num11">
                                                        <span class="font-MPlus text-3xl">{{ num11 }}</span>
                                                    </button>
                                                    <button @click="add('num12')" class=" border-black border-2 p-7"
                                                            id="num12">
                                                        <span class="font-MPlus text-3xl">{{ num12 }}</span>
                                                    </button>
                                                </div>

                                                <div class="grid grid-cols-3">
                                                    <button @click="add('num13')" class=" border-black border-2 p-7"
                                                            id="num13">
                                                        <span class="font-MPlus text-3xl">{{ num13 }}</span>
                                                    </button>
                                                    <button @click="add('num14')" class=" border-black border-2 p-7"
                                                            id="num14">
                                                        <span class="font-MPlus text-3xl">{{ num14 }}</span>
                                                    </button>
                                                    <button @click="add('num15')" class=" border-black border-2 p-7"
                                                            id="num15">
                                                        <span class="font-MPlus text-3xl">{{ num15 }}</span>
                                                    </button>
                                                </div>

                                                <div class="grid grid-cols-3">
                                                    <button @click="add('num16')" class=" border-black border-2 p-7"
                                                            id="num16">
                                                        <span class="font-MPlus text-3xl">{{ num16 }}</span>
                                                    </button>
                                                    <button @click="add('num17')" class=" border-black border-2 p-7"
                                                            id="num17">
                                                        <span class="font-MPlus text-3xl">{{ num17 }}</span>
                                                    </button>
                                                    <button @click="add('num18')" class=" border-black border-2 p-7"
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
                                                      class="font-MPlus text-SM duration-300">LETRAS</span>
                                </div>


                                <div class="flex justify-center col-span-2">
                                    <div>
                                        <div class="grid grid-cols-2 gap-5 mt-5">
                                            <div class="flex justify-center">
                                                <button @click="selectItem('A')"
                                                        class="rounded-md py-3 px-5 shadow-md bg-gray-300">
                                                    <span class="font-bold text-4xl">A</span>
                                                </button>
                                            </div>

                                            <div class="flex justify-center">
                                                <button @click="selectItem('B')"
                                                        class="rounded-md py-3 px-5 shadow-md bg-gray-300">
                                                    <span class="font-bold text-4xl">B</span>
                                                </button>
                                            </div>

                                            <div class="flex justify-center">
                                                <button @click="selectItem('C')"
                                                        class="rounded-md  py-3 px-5 shadow-md bg-gray-300">
                                                    <span class="font-bold text-4xl">C</span>
                                                </button>
                                            </div>

                                            <button @click="selectItem(null)"
                                                    class="relative rounded-md p-2 shadow-md bg-gray-300  flex justify-center select-none">
                                                <div class="relative">
                                                    <img :src="eraser" alt="borrador" width="50">
                                                </div>
                                            </button>

                                            <div v-if="content === null" id="muestra"
                                                 class="border-2 border-black py-6 mt-5 bg-white col-span-2 shadow-2xl shadow-blue-900 flex justify-center font-bold text-5xl">
                                                {{ content }}
                                            </div>
                                            <div v-else id="muestra"
                                                 class="border-2 border-black mt-5 bg-white col-span-2 shadow-2xl shadow-blue-900 flex justify-center font-bold text-5xl">
                                                {{ content }}
                                            </div>
                                        </div>

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
</style>
