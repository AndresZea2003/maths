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
    asset_audio: {type: String, required: true},
    color_1: {type: String, required: true},
    color_2: {type: String, required: true},
    color_3: {type: String, required: true},
    icon_1: {type: String, required: true},
    icon_2: {type: String, required: true},
    icon_3: {type: String, required: true}
})

const propColor1 = `bg-${props.color_1}`
const propColor2 = `bg-${props.color_2}`
const propColor3 = `bg-${props.color_3}`

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
const boxNumRange = [101, 118];

function initialAudio() {
    if (talk.value === false) {
        talk.value = true;

        document.getElementById('caja101').classList.add('scale-50');
        document.getElementById('caja102').classList.add('scale-50');
        document.getElementById('caja103').classList.add('scale-50');

        document.getElementById('caja104').classList.add('scale-50');
        document.getElementById('caja105').classList.add('scale-50');
        document.getElementById('caja106').classList.add('scale-50');

        document.getElementById('caja107').classList.add('scale-50');
        document.getElementById('caja108').classList.add('scale-50');
        document.getElementById('caja109').classList.add('scale-50');

        document.getElementById('caja110').classList.add('scale-50');
        document.getElementById('caja111').classList.add('scale-50');
        document.getElementById('caja112').classList.add('scale-50');

        document.getElementById('caja113').classList.add('scale-50');
        document.getElementById('caja114').classList.add('scale-50');
        document.getElementById('caja115').classList.add('scale-50');

        document.getElementById('caja116').classList.add('scale-50');
        document.getElementById('caja117').classList.add('scale-50');
        document.getElementById('caja118').classList.add('scale-50');


        let sound = new Audio();
        sound.src = `${props.asset_audio}/voz1/nivel10/en-este.m4a`;
        sound.play()

        setTimeout(function () {
            document.getElementById('actividad').classList.add('opacity-10')
            document.getElementById('vista').classList.add(propColor1);
        }, 8000)

        setTimeout(function () {
            document.getElementById('vista').classList.remove(propColor1);
            document.getElementById('vista').classList.add('bg-green-600');
        }, 9000)

        setTimeout(function () {
            document.getElementById('vista').classList.remove('bg-green-600');
            document.getElementById('vista').classList.add('bg-red-600');
        }, 10000)

        setTimeout(function () {
            document.getElementById('vista').classList.remove('bg-red-600');
        }, 11000)

        setTimeout(function () {
            document.getElementById('actividad').classList.remove('opacity-10')
            document.getElementById('vista').classList.add('opacity-10')
            document.getElementById('actividad').classList.add(propColor3);
        }, 14000)

        setTimeout(function () {
            document.getElementById('actividad').classList.remove(propColor3);
            document.getElementById('actividad').classList.add(propColor2);
        }, 15000)

        setTimeout(function () {
            document.getElementById('actividad').classList.remove(propColor2);
            document.getElementById('actividad').classList.add(propColor1);
        }, 16000)

        setTimeout(function () {
            document.getElementById('actividad').classList.remove(propColor1);
            document.getElementById('vista').classList.remove('opacity-10')
        }, 17000)

        setTimeout(function () {
            document.getElementById('caja101').classList.remove('scale-50');
            document.getElementById('caja101').classList.add(propColor1);
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Azul.m4a`;
            sound.play()
        }, 20000)
        setTimeout(function () {
            document.getElementById('caja102').classList.remove('scale-50');
            document.getElementById('caja102').classList.add('bg-red-600');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Rojo.m4a`;
            sound.play()
        }, 21000)
        setTimeout(function () {
            document.getElementById('caja103').classList.remove('scale-50');
            document.getElementById('caja103').classList.add('bg-green-500');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Verde.m4a`;
            sound.play()
        }, 22000)
        setTimeout(function () {
            document.getElementById('caja104').classList.remove('scale-50');
            document.getElementById('caja105').classList.remove('scale-50');
            document.getElementById('caja106').classList.remove('scale-50');
        }, 22500)
        setTimeout(function () {
            document.getElementById('caja104').classList.remove('scale-50');
            document.getElementById('caja104').classList.add(propColor1);
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Azul.m4a`;
            sound.play()
        }, 23000)
        setTimeout(function () {
            document.getElementById('caja105').classList.remove('scale-50');
            document.getElementById('caja105').classList.add('bg-green-500');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Verde.m4a`;
            sound.play()
        }, 24000)
        setTimeout(function () {
            document.getElementById('caja106').classList.remove('scale-50');
            document.getElementById('caja106').classList.add('bg-red-600');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Rojo.m4a`;
            sound.play()
        }, 25000)
        setTimeout(function () {
            document.getElementById('caja107').classList.remove('scale-50');
            document.getElementById('caja108').classList.remove('scale-50');
            document.getElementById('caja109').classList.remove('scale-50');
        }, 25500)
        setTimeout(function () {
            document.getElementById('caja107').classList.remove('scale-50');
            document.getElementById('caja107').classList.add('bg-red-600');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Rojo.m4a`;
            sound.play()
        }, 26000)
        setTimeout(function () {
            document.getElementById('caja108').classList.remove('scale-50');
            document.getElementById('caja108').classList.add('bg-green-500');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Verde.m4a`;
            sound.play()
        }, 27000)
        setTimeout(function () {
            document.getElementById('caja109').classList.remove('scale-50');
            document.getElementById('caja109').classList.add(propColor1);
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Azul.m4a`;
            sound.play()
        }, 28000)
        setTimeout(function () {
            document.getElementById('caja110').classList.remove('scale-50');
            document.getElementById('caja111').classList.remove('scale-50');
            document.getElementById('caja112').classList.remove('scale-50');
        }, 28500)
        setTimeout(function () {
            document.getElementById('caja110').classList.remove('scale-50');
            document.getElementById('caja110').classList.add('bg-red-600');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Rojo.m4a`;
            sound.play()
        }, 29000)
        setTimeout(function () {
            document.getElementById('caja111').classList.remove('scale-50');
            document.getElementById('caja111').classList.add(propColor1);
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Azul.m4a`;
            sound.play()
        }, 30000)
        setTimeout(function () {
            document.getElementById('caja112').classList.remove('scale-50');
            document.getElementById('caja112').classList.add('bg-green-500');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Verde.m4a`;
            sound.play()
        }, 31000)
        setTimeout(function () {
            document.getElementById('caja113').classList.remove('scale-50');
            document.getElementById('caja114').classList.remove('scale-50');
            document.getElementById('caja115').classList.remove('scale-50');
        }, 31500)
        setTimeout(function () {
            document.getElementById('caja113').classList.remove('scale-50');
            document.getElementById('caja113').classList.add('bg-green-500');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Verde.m4a`;
            sound.play()
        }, 32000)
        setTimeout(function () {
            document.getElementById('caja114').classList.remove('scale-50');
            document.getElementById('caja114').classList.add(propColor1);
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Azul.m4a`;
            sound.play()
        }, 33000)
        setTimeout(function () {
            document.getElementById('caja115').classList.remove('scale-50');
            document.getElementById('caja115').classList.add('bg-red-600');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Rojo.m4a`;
            sound.play()
        }, 34000)
        setTimeout(function () {
            document.getElementById('caja116').classList.remove('scale-50');
            document.getElementById('caja117').classList.remove('scale-50');
            document.getElementById('caja118').classList.remove('scale-50');
        }, 34500)
        setTimeout(function () {
            document.getElementById('caja116').classList.remove('scale-50');
            document.getElementById('caja116').classList.add('bg-green-500');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Verde.m4a`;
            sound.play()
        }, 35000)
        setTimeout(function () {
            document.getElementById('caja117').classList.remove('scale-50');
            document.getElementById('caja117').classList.add('bg-red-600');
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Rojo.m4a`;
            sound.play()
        }, 36000)
        setTimeout(function () {
            document.getElementById('caja118').classList.remove('scale-50');
            document.getElementById('caja118').classList.add(propColor1);
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/colors/Azul.m4a`;
            sound.play()
        }, 37000)
        setTimeout(function () {
            let sound = new Audio();
            sound.src = `${props.asset_audio}/voz1/nivel10/ahora-es.m4a`;
            sound.play()
        }, 38000)


        // showIndexSquare();
        // mati.value = `${props.asset_images}/robot/matiQuieto.gif`;
        // let sound = new Audio();
        // sound.src = `${props.asset_audio}/voz1/Observa-que-el-cuadrado-de-la-izquierda.m4a`;
        // sound.play()
        // setTimeout(function () {
        //     let sound = new Audio();
        //     sound.src = `${props.asset_audio}/voz1/colors/Azul.m4a`;
        //     sound.play()
        // }, 4000)
        // setTimeout(function () {
        //     let sound = new Audio();
        //     sound.src = `${props.asset_audio}/voz1/colors/Verde.m4a`;
        //     sound.play()
        // }, 5500)
        // setTimeout(function () {
        //     let sound = new Audio();
        //     sound.src = `${props.asset_audio}/voz1/colors/Amarillo.m4a`;
        //     sound.play()
        // }, 7000)
        // setTimeout(function () {
        //     let sound = new Audio();
        //     sound.src = `${props.asset_audio}/voz1/colors/y-rojo.m4a`;
        //     sound.play()
        // }, 8500)
        // setTimeout(function () {
        //     let sound = new Audio();
        //     sound.src = `${props.asset_audio}/voz1/Pinta-de-forma-identica-el-cuadrado-derecha.m4a`;
        //     sound.play()
        // }, 10000)
        widthMati.value = 160;
        setTimeout(resetMati, 15000);
        // setTimeout(function () {
        //     helpAudio()
        // }, 15000)
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

    if (id === 'caja1' || id === 'caja2' || id === 'caja3') {
        if (grupo1check.value) {
            return;
        }
    } else if (id === 'caja4' || id === 'caja5' || id === 'caja6') {
        if (grupo2check.value) {
            return;
        }
    } else if (id === 'caja7' || id === 'caja8' || id === 'caja9') {
        if (grupo3check.value) {
            return;
        }
    } else if (id === 'caja10' || id === 'caja11' || id === 'caja12') {
        if (grupo4check.value) {
            return;
        }
    } else if (id === 'caja13' || id === 'caja14' || id === 'caja15') {
        if (grupo5check.value) {
            return;
        }
    } else if (id === 'caja16' || id === 'caja17' || id === 'caja18') {
        if (grupo6check.value) {
            return;
        }
    }

    document.getElementById(id).classList.remove('hover:bg-gray-400')
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.remove(propColor1)
    document.getElementById(id).classList.remove('bg-green-600')
    document.getElementById(id).classList.remove(propColor2)
    document.getElementById(id).classList.remove(propColor3)
    document.getElementById(id).classList.add(`bg-${color}`);


    if (color === props.color_2) {
        sequenceNumber.value = '1'
    } else if (color === props.color_1) {
        sequenceNumber.value = '2'
    } else if (color === props.color_3) {
        sequenceNumber.value = '3'
    } else if (color === 'white') {
        sequenceNumber.value = ''
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

    const playJumpSound = () => {
        const sound = new Audio();
        sound.src = `${props.asset_audio}/jumpCoin.wav`;
        sound.play();
    };

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
    if (document.getElementById('caja1').classList.contains(propColor1) &&
        document.getElementById('caja2').classList.contains('bg-red-600') &&
        document.getElementById('caja3').classList.contains(propColor2) &&
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

const successSound = () => {
    let sound = new Audio();
    sound.src = `${props.asset_audio}/success.wav`;
    sound.play()
}

const selectColor = (bg, id) => {
    color = bg
    colorSelected.value++
    if (id === 1) {
        document.getElementById('muestra1').classList.remove(propColor1, 'bg-red-600', 'bg-green-600', 'bg-white');
        document.getElementById('muestra1').classList.add(`bg-${bg}`);
    } else if (id === 2) {
        document.getElementById('muestra').classList.remove(propColor1, propColor3, propColor2, 'bg-white');
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

const bottonLigth = (id) => {
    document.getElementById(id).classList.add('bg-gray-infinite')
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


                        <div class="col-span-9">
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

                            <div id="fig3"
                                 :class="`${selectFig3} mr-5 pb-5 duration-300 col-span-9 flex justify-center`">

                                <div id="actividad" class="items-center justify-center p-2 mt-5 duration-300">
                                    <div>
                                        <div class="flex">
                                            <div id="error1" class="absolute -translate-x-[60px] translate-y-[4px] opacity-0 duration-300">
                                                <div class="rounded-full bg-red-infinite">
                                                    <svg width="40" fill="red" viewBox="0 0 64 64" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                                         xmlns:serif="http://www.serif.com/"
                                                         style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier"> <rect id="Icons" x="-704" y="-64"
                                                                                           width="1280" height="800"
                                                                                           style="fill:none;"></rect>
                                                            <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g>
                                                                <g id="H1"> </g>
                                                                <g id="H2"> </g>
                                                                <g id="H3"> </g>
                                                                <g id="list-ul"> </g>
                                                                <g id="hamburger-1"> </g>
                                                                <g id="hamburger-2"> </g>
                                                                <g id="list-ol"> </g>
                                                                <g id="list-task"> </g>
                                                                <g id="trash"> </g>
                                                                <g id="vertical-menu"> </g>
                                                                <g id="horizontal-menu"> </g>
                                                                <g id="sidebar-2"> </g>
                                                                <g id="Pen"> </g>
                                                                <g id="Pen1" serif:id="Pen"> </g>
                                                                <g id="clock"> </g>
                                                                <g id="external-link"> </g>
                                                                <g id="hr"> </g>
                                                                <g id="info"> </g>
                                                                <g id="warning"> </g>
                                                                <path id="error-circle"
                                                                      d="M32.085,56.058c6.165,-0.059 12.268,-2.619 16.657,-6.966c5.213,-5.164 7.897,-12.803 6.961,-20.096c-1.605,-12.499 -11.855,-20.98 -23.772,-20.98c-9.053,0 -17.853,5.677 -21.713,13.909c-2.955,6.302 -2.96,13.911 0,20.225c3.832,8.174 12.488,13.821 21.559,13.908c0.103,0.001 0.205,0.001 0.308,0Zm-0.282,-4.003c-9.208,-0.089 -17.799,-7.227 -19.508,-16.378c-1.204,-6.452 1.07,-13.433 5.805,-18.015c5.53,-5.35 14.22,-7.143 21.445,-4.11c6.466,2.714 11.304,9.014 12.196,15.955c0.764,5.949 -1.366,12.184 -5.551,16.48c-3.672,3.767 -8.82,6.016 -14.131,6.068c-0.085,0 -0.171,0 -0.256,0Zm-12.382,-10.29l9.734,-9.734l-9.744,-9.744l2.804,-2.803l9.744,9.744l10.078,-10.078l2.808,2.807l-10.078,10.079l10.098,10.098l-2.803,2.804l-10.099,-10.099l-9.734,9.734l-2.808,-2.808Z"></path>
                                                                <g id="plus-circle"> </g>
                                                                <g id="minus-circle"> </g>
                                                                <g id="vue"> </g>
                                                                <g id="cog"> </g>
                                                                <g id="logo"> </g>
                                                                <g id="radio-check"> </g>
                                                                <g id="eye-slash"> </g>
                                                                <g id="eye"> </g>
                                                                <g id="toggle-off"> </g>
                                                                <g id="shredder"> </g>
                                                                <g id="spinner--loading--dots-"
                                                                   serif:id="spinner [loading, dots]"> </g>
                                                                <g id="react"> </g>
                                                                <g id="check-selected"> </g>
                                                                <g id="turn-off"> </g>
                                                                <g id="code-block"> </g>
                                                                <g id="user"> </g>
                                                                <g id="coffee-bean"> </g>
                                                                <g id="coffee-beans"> <g id="coffee-bean1"
                                                                                         serif:id="coffee-bean"> </g> </g>
                                                                <g id="coffee-bean-filled"> </g>
                                                                <g id="coffee-beans-filled"> <g id="coffee-bean2"
                                                                                                serif:id="coffee-bean"> </g> </g>
                                                                <g id="clipboard"> </g>
                                                                <g id="clipboard-paste"> </g>
                                                                <g id="clipboard-copy"> </g>
                                                                <g id="Layer1"> </g> </g> </g></svg>
                                                </div>
                                            </div>
                                            <div id="error2" class="absolute -translate-x-[60px] translate-y-[75px] opacity-0 duration-300">
                                                <div class="rounded-full bg-red-infinite">
                                                    <svg width="40" fill="red" viewBox="0 0 64 64" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                                         xmlns:serif="http://www.serif.com/"
                                                         style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier"> <rect id="Icons" x="-704" y="-64"
                                                                                           width="1280" height="800"
                                                                                           style="fill:none;"></rect>
                                                            <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g>
                                                                <g id="H1"> </g>
                                                                <g id="H2"> </g>
                                                                <g id="H3"> </g>
                                                                <g id="list-ul"> </g>
                                                                <g id="hamburger-1"> </g>
                                                                <g id="hamburger-2"> </g>
                                                                <g id="list-ol"> </g>
                                                                <g id="list-task"> </g>
                                                                <g id="trash"> </g>
                                                                <g id="vertical-menu"> </g>
                                                                <g id="horizontal-menu"> </g>
                                                                <g id="sidebar-2"> </g>
                                                                <g id="Pen"> </g>
                                                                <g id="Pen1" serif:id="Pen"> </g>
                                                                <g id="clock"> </g>
                                                                <g id="external-link"> </g>
                                                                <g id="hr"> </g>
                                                                <g id="info"> </g>
                                                                <g id="warning"> </g>
                                                                <path id="error-circle"
                                                                      d="M32.085,56.058c6.165,-0.059 12.268,-2.619 16.657,-6.966c5.213,-5.164 7.897,-12.803 6.961,-20.096c-1.605,-12.499 -11.855,-20.98 -23.772,-20.98c-9.053,0 -17.853,5.677 -21.713,13.909c-2.955,6.302 -2.96,13.911 0,20.225c3.832,8.174 12.488,13.821 21.559,13.908c0.103,0.001 0.205,0.001 0.308,0Zm-0.282,-4.003c-9.208,-0.089 -17.799,-7.227 -19.508,-16.378c-1.204,-6.452 1.07,-13.433 5.805,-18.015c5.53,-5.35 14.22,-7.143 21.445,-4.11c6.466,2.714 11.304,9.014 12.196,15.955c0.764,5.949 -1.366,12.184 -5.551,16.48c-3.672,3.767 -8.82,6.016 -14.131,6.068c-0.085,0 -0.171,0 -0.256,0Zm-12.382,-10.29l9.734,-9.734l-9.744,-9.744l2.804,-2.803l9.744,9.744l10.078,-10.078l2.808,2.807l-10.078,10.079l10.098,10.098l-2.803,2.804l-10.099,-10.099l-9.734,9.734l-2.808,-2.808Z"></path>
                                                                <g id="plus-circle"> </g>
                                                                <g id="minus-circle"> </g>
                                                                <g id="vue"> </g>
                                                                <g id="cog"> </g>
                                                                <g id="logo"> </g>
                                                                <g id="radio-check"> </g>
                                                                <g id="eye-slash"> </g>
                                                                <g id="eye"> </g>
                                                                <g id="toggle-off"> </g>
                                                                <g id="shredder"> </g>
                                                                <g id="spinner--loading--dots-"
                                                                   serif:id="spinner [loading, dots]"> </g>
                                                                <g id="react"> </g>
                                                                <g id="check-selected"> </g>
                                                                <g id="turn-off"> </g>
                                                                <g id="code-block"> </g>
                                                                <g id="user"> </g>
                                                                <g id="coffee-bean"> </g>
                                                                <g id="coffee-beans"> <g id="coffee-bean1"
                                                                                         serif:id="coffee-bean"> </g> </g>
                                                                <g id="coffee-bean-filled"> </g>
                                                                <g id="coffee-beans-filled"> <g id="coffee-bean2"
                                                                                                serif:id="coffee-bean"> </g> </g>
                                                                <g id="clipboard"> </g>
                                                                <g id="clipboard-paste"> </g>
                                                                <g id="clipboard-copy"> </g>
                                                                <g id="Layer1"> </g> </g> </g></svg>
                                                </div>
                                            </div>
                                            <div id="error3" class="absolute -translate-x-[60px] translate-y-[150px] opacity-0 duration-300">
                                                <div class="rounded-full bg-red-infinite">
                                                    <svg width="40" fill="red" viewBox="0 0 64 64" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                                         xmlns:serif="http://www.serif.com/"
                                                         style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier"> <rect id="Icons" x="-704" y="-64"
                                                                                           width="1280" height="800"
                                                                                           style="fill:none;"></rect>
                                                            <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g>
                                                                <g id="H1"> </g>
                                                                <g id="H2"> </g>
                                                                <g id="H3"> </g>
                                                                <g id="list-ul"> </g>
                                                                <g id="hamburger-1"> </g>
                                                                <g id="hamburger-2"> </g>
                                                                <g id="list-ol"> </g>
                                                                <g id="list-task"> </g>
                                                                <g id="trash"> </g>
                                                                <g id="vertical-menu"> </g>
                                                                <g id="horizontal-menu"> </g>
                                                                <g id="sidebar-2"> </g>
                                                                <g id="Pen"> </g>
                                                                <g id="Pen1" serif:id="Pen"> </g>
                                                                <g id="clock"> </g>
                                                                <g id="external-link"> </g>
                                                                <g id="hr"> </g>
                                                                <g id="info"> </g>
                                                                <g id="warning"> </g>
                                                                <path id="error-circle"
                                                                      d="M32.085,56.058c6.165,-0.059 12.268,-2.619 16.657,-6.966c5.213,-5.164 7.897,-12.803 6.961,-20.096c-1.605,-12.499 -11.855,-20.98 -23.772,-20.98c-9.053,0 -17.853,5.677 -21.713,13.909c-2.955,6.302 -2.96,13.911 0,20.225c3.832,8.174 12.488,13.821 21.559,13.908c0.103,0.001 0.205,0.001 0.308,0Zm-0.282,-4.003c-9.208,-0.089 -17.799,-7.227 -19.508,-16.378c-1.204,-6.452 1.07,-13.433 5.805,-18.015c5.53,-5.35 14.22,-7.143 21.445,-4.11c6.466,2.714 11.304,9.014 12.196,15.955c0.764,5.949 -1.366,12.184 -5.551,16.48c-3.672,3.767 -8.82,6.016 -14.131,6.068c-0.085,0 -0.171,0 -0.256,0Zm-12.382,-10.29l9.734,-9.734l-9.744,-9.744l2.804,-2.803l9.744,9.744l10.078,-10.078l2.808,2.807l-10.078,10.079l10.098,10.098l-2.803,2.804l-10.099,-10.099l-9.734,9.734l-2.808,-2.808Z"></path>
                                                                <g id="plus-circle"> </g>
                                                                <g id="minus-circle"> </g>
                                                                <g id="vue"> </g>
                                                                <g id="cog"> </g>
                                                                <g id="logo"> </g>
                                                                <g id="radio-check"> </g>
                                                                <g id="eye-slash"> </g>
                                                                <g id="eye"> </g>
                                                                <g id="toggle-off"> </g>
                                                                <g id="shredder"> </g>
                                                                <g id="spinner--loading--dots-"
                                                                   serif:id="spinner [loading, dots]"> </g>
                                                                <g id="react"> </g>
                                                                <g id="check-selected"> </g>
                                                                <g id="turn-off"> </g>
                                                                <g id="code-block"> </g>
                                                                <g id="user"> </g>
                                                                <g id="coffee-bean"> </g>
                                                                <g id="coffee-beans"> <g id="coffee-bean1"
                                                                                         serif:id="coffee-bean"> </g> </g>
                                                                <g id="coffee-bean-filled"> </g>
                                                                <g id="coffee-beans-filled"> <g id="coffee-bean2"
                                                                                                serif:id="coffee-bean"> </g> </g>
                                                                <g id="clipboard"> </g>
                                                                <g id="clipboard-paste"> </g>
                                                                <g id="clipboard-copy"> </g>
                                                                <g id="Layer1"> </g> </g> </g></svg>
                                                </div>
                                            </div>
                                            <div id="error4" class="absolute -translate-x-[60px] translate-y-[222px] opacity-0 duration-300">
                                                <div class="rounded-full bg-red-infinite">
                                                    <svg width="40" fill="red" viewBox="0 0 64 64" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                                         xmlns:serif="http://www.serif.com/"
                                                         style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier"> <rect id="Icons" x="-704" y="-64"
                                                                                           width="1280" height="800"
                                                                                           style="fill:none;"></rect>
                                                            <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g>
                                                                <g id="H1"> </g>
                                                                <g id="H2"> </g>
                                                                <g id="H3"> </g>
                                                                <g id="list-ul"> </g>
                                                                <g id="hamburger-1"> </g>
                                                                <g id="hamburger-2"> </g>
                                                                <g id="list-ol"> </g>
                                                                <g id="list-task"> </g>
                                                                <g id="trash"> </g>
                                                                <g id="vertical-menu"> </g>
                                                                <g id="horizontal-menu"> </g>
                                                                <g id="sidebar-2"> </g>
                                                                <g id="Pen"> </g>
                                                                <g id="Pen1" serif:id="Pen"> </g>
                                                                <g id="clock"> </g>
                                                                <g id="external-link"> </g>
                                                                <g id="hr"> </g>
                                                                <g id="info"> </g>
                                                                <g id="warning"> </g>
                                                                <path id="error-circle"
                                                                      d="M32.085,56.058c6.165,-0.059 12.268,-2.619 16.657,-6.966c5.213,-5.164 7.897,-12.803 6.961,-20.096c-1.605,-12.499 -11.855,-20.98 -23.772,-20.98c-9.053,0 -17.853,5.677 -21.713,13.909c-2.955,6.302 -2.96,13.911 0,20.225c3.832,8.174 12.488,13.821 21.559,13.908c0.103,0.001 0.205,0.001 0.308,0Zm-0.282,-4.003c-9.208,-0.089 -17.799,-7.227 -19.508,-16.378c-1.204,-6.452 1.07,-13.433 5.805,-18.015c5.53,-5.35 14.22,-7.143 21.445,-4.11c6.466,2.714 11.304,9.014 12.196,15.955c0.764,5.949 -1.366,12.184 -5.551,16.48c-3.672,3.767 -8.82,6.016 -14.131,6.068c-0.085,0 -0.171,0 -0.256,0Zm-12.382,-10.29l9.734,-9.734l-9.744,-9.744l2.804,-2.803l9.744,9.744l10.078,-10.078l2.808,2.807l-10.078,10.079l10.098,10.098l-2.803,2.804l-10.099,-10.099l-9.734,9.734l-2.808,-2.808Z"></path>
                                                                <g id="plus-circle"> </g>
                                                                <g id="minus-circle"> </g>
                                                                <g id="vue"> </g>
                                                                <g id="cog"> </g>
                                                                <g id="logo"> </g>
                                                                <g id="radio-check"> </g>
                                                                <g id="eye-slash"> </g>
                                                                <g id="eye"> </g>
                                                                <g id="toggle-off"> </g>
                                                                <g id="shredder"> </g>
                                                                <g id="spinner--loading--dots-"
                                                                   serif:id="spinner [loading, dots]"> </g>
                                                                <g id="react"> </g>
                                                                <g id="check-selected"> </g>
                                                                <g id="turn-off"> </g>
                                                                <g id="code-block"> </g>
                                                                <g id="user"> </g>
                                                                <g id="coffee-bean"> </g>
                                                                <g id="coffee-beans"> <g id="coffee-bean1"
                                                                                         serif:id="coffee-bean"> </g> </g>
                                                                <g id="coffee-bean-filled"> </g>
                                                                <g id="coffee-beans-filled"> <g id="coffee-bean2"
                                                                                                serif:id="coffee-bean"> </g> </g>
                                                                <g id="clipboard"> </g>
                                                                <g id="clipboard-paste"> </g>
                                                                <g id="clipboard-copy"> </g>
                                                                <g id="Layer1"> </g> </g> </g></svg>
                                                </div>
                                            </div>
                                            <div id="error5" class="absolute -translate-x-[60px] translate-y-[295px] opacity-0 duration-300">
                                                <div class="rounded-full bg-red-infinite">
                                                    <svg width="40" fill="red" viewBox="0 0 64 64" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                                         xmlns:serif="http://www.serif.com/"
                                                         style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier"> <rect id="Icons" x="-704" y="-64"
                                                                                           width="1280" height="800"
                                                                                           style="fill:none;"></rect>
                                                            <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g>
                                                                <g id="H1"> </g>
                                                                <g id="H2"> </g>
                                                                <g id="H3"> </g>
                                                                <g id="list-ul"> </g>
                                                                <g id="hamburger-1"> </g>
                                                                <g id="hamburger-2"> </g>
                                                                <g id="list-ol"> </g>
                                                                <g id="list-task"> </g>
                                                                <g id="trash"> </g>
                                                                <g id="vertical-menu"> </g>
                                                                <g id="horizontal-menu"> </g>
                                                                <g id="sidebar-2"> </g>
                                                                <g id="Pen"> </g>
                                                                <g id="Pen1" serif:id="Pen"> </g>
                                                                <g id="clock"> </g>
                                                                <g id="external-link"> </g>
                                                                <g id="hr"> </g>
                                                                <g id="info"> </g>
                                                                <g id="warning"> </g>
                                                                <path id="error-circle"
                                                                      d="M32.085,56.058c6.165,-0.059 12.268,-2.619 16.657,-6.966c5.213,-5.164 7.897,-12.803 6.961,-20.096c-1.605,-12.499 -11.855,-20.98 -23.772,-20.98c-9.053,0 -17.853,5.677 -21.713,13.909c-2.955,6.302 -2.96,13.911 0,20.225c3.832,8.174 12.488,13.821 21.559,13.908c0.103,0.001 0.205,0.001 0.308,0Zm-0.282,-4.003c-9.208,-0.089 -17.799,-7.227 -19.508,-16.378c-1.204,-6.452 1.07,-13.433 5.805,-18.015c5.53,-5.35 14.22,-7.143 21.445,-4.11c6.466,2.714 11.304,9.014 12.196,15.955c0.764,5.949 -1.366,12.184 -5.551,16.48c-3.672,3.767 -8.82,6.016 -14.131,6.068c-0.085,0 -0.171,0 -0.256,0Zm-12.382,-10.29l9.734,-9.734l-9.744,-9.744l2.804,-2.803l9.744,9.744l10.078,-10.078l2.808,2.807l-10.078,10.079l10.098,10.098l-2.803,2.804l-10.099,-10.099l-9.734,9.734l-2.808,-2.808Z"></path>
                                                                <g id="plus-circle"> </g>
                                                                <g id="minus-circle"> </g>
                                                                <g id="vue"> </g>
                                                                <g id="cog"> </g>
                                                                <g id="logo"> </g>
                                                                <g id="radio-check"> </g>
                                                                <g id="eye-slash"> </g>
                                                                <g id="eye"> </g>
                                                                <g id="toggle-off"> </g>
                                                                <g id="shredder"> </g>
                                                                <g id="spinner--loading--dots-"
                                                                   serif:id="spinner [loading, dots]"> </g>
                                                                <g id="react"> </g>
                                                                <g id="check-selected"> </g>
                                                                <g id="turn-off"> </g>
                                                                <g id="code-block"> </g>
                                                                <g id="user"> </g>
                                                                <g id="coffee-bean"> </g>
                                                                <g id="coffee-beans"> <g id="coffee-bean1"
                                                                                         serif:id="coffee-bean"> </g> </g>
                                                                <g id="coffee-bean-filled"> </g>
                                                                <g id="coffee-beans-filled"> <g id="coffee-bean2"
                                                                                                serif:id="coffee-bean"> </g> </g>
                                                                <g id="clipboard"> </g>
                                                                <g id="clipboard-paste"> </g>
                                                                <g id="clipboard-copy"> </g>
                                                                <g id="Layer1"> </g> </g> </g></svg>
                                                </div>
                                            </div>
                                            <div id="error6" class="absolute -translate-x-[60px] translate-y-[365px] opacity-0 duration-300">
                                                <div class="rounded-full bg-red-infinite">
                                                    <svg width="40" fill="red" viewBox="0 0 64 64" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                                                         xmlns:serif="http://www.serif.com/"
                                                         style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                           stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier"> <rect id="Icons" x="-704" y="-64"
                                                                                           width="1280" height="800"
                                                                                           style="fill:none;"></rect>
                                                            <g id="Icons1" serif:id="Icons"> <g id="Strike"> </g>
                                                                <g id="H1"> </g>
                                                                <g id="H2"> </g>
                                                                <g id="H3"> </g>
                                                                <g id="list-ul"> </g>
                                                                <g id="hamburger-1"> </g>
                                                                <g id="hamburger-2"> </g>
                                                                <g id="list-ol"> </g>
                                                                <g id="list-task"> </g>
                                                                <g id="trash"> </g>
                                                                <g id="vertical-menu"> </g>
                                                                <g id="horizontal-menu"> </g>
                                                                <g id="sidebar-2"> </g>
                                                                <g id="Pen"> </g>
                                                                <g id="Pen1" serif:id="Pen"> </g>
                                                                <g id="clock"> </g>
                                                                <g id="external-link"> </g>
                                                                <g id="hr"> </g>
                                                                <g id="info"> </g>
                                                                <g id="warning"> </g>
                                                                <path id="error-circle"
                                                                      d="M32.085,56.058c6.165,-0.059 12.268,-2.619 16.657,-6.966c5.213,-5.164 7.897,-12.803 6.961,-20.096c-1.605,-12.499 -11.855,-20.98 -23.772,-20.98c-9.053,0 -17.853,5.677 -21.713,13.909c-2.955,6.302 -2.96,13.911 0,20.225c3.832,8.174 12.488,13.821 21.559,13.908c0.103,0.001 0.205,0.001 0.308,0Zm-0.282,-4.003c-9.208,-0.089 -17.799,-7.227 -19.508,-16.378c-1.204,-6.452 1.07,-13.433 5.805,-18.015c5.53,-5.35 14.22,-7.143 21.445,-4.11c6.466,2.714 11.304,9.014 12.196,15.955c0.764,5.949 -1.366,12.184 -5.551,16.48c-3.672,3.767 -8.82,6.016 -14.131,6.068c-0.085,0 -0.171,0 -0.256,0Zm-12.382,-10.29l9.734,-9.734l-9.744,-9.744l2.804,-2.803l9.744,9.744l10.078,-10.078l2.808,2.807l-10.078,10.079l10.098,10.098l-2.803,2.804l-10.099,-10.099l-9.734,9.734l-2.808,-2.808Z"></path>
                                                                <g id="plus-circle"> </g>
                                                                <g id="minus-circle"> </g>
                                                                <g id="vue"> </g>
                                                                <g id="cog"> </g>
                                                                <g id="logo"> </g>
                                                                <g id="radio-check"> </g>
                                                                <g id="eye-slash"> </g>
                                                                <g id="eye"> </g>
                                                                <g id="toggle-off"> </g>
                                                                <g id="shredder"> </g>
                                                                <g id="spinner--loading--dots-"
                                                                   serif:id="spinner [loading, dots]"> </g>
                                                                <g id="react"> </g>
                                                                <g id="check-selected"> </g>
                                                                <g id="turn-off"> </g>
                                                                <g id="code-block"> </g>
                                                                <g id="user"> </g>
                                                                <g id="coffee-bean"> </g>
                                                                <g id="coffee-beans"> <g id="coffee-bean1"
                                                                                         serif:id="coffee-bean"> </g> </g>
                                                                <g id="coffee-bean-filled"> </g>
                                                                <g id="coffee-beans-filled"> <g id="coffee-bean2"
                                                                                                serif:id="coffee-bean"> </g> </g>
                                                                <g id="clipboard"> </g>
                                                                <g id="clipboard-paste"> </g>
                                                                <g id="clipboard-copy"> </g>
                                                                <g id="Layer1"> </g> </g> </g></svg>
                                                </div>
                                            </div>
                                            <div class="flex justify-center">
                                                <div class="grid grid-cols-3 gap-y-5 gap-x-1">
                                                    <div v-for="i in 18" :key="i" :id="`caja${i}`"
                                                         @click="paint(`caja${i}`)"
                                                         :class="['p-6' , 'border-black', 'border-2', 'cursor-cell', 'grid', 'hover:bg-gray-400', 'duration-300', 'select-none'
                                             ]">
                                                        {{ null }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div
                            class="flex justify-center items-center bg-gray-200 border-l-4 border-gray-300 h-full col-span-2">
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


                                <div class="flex justify-center items-center mt-2">
                                    <span id="colorea" class="font-MPlus text-xl">COLOREA</span>
                                </div>

                                <div class="grid grid-cols-2 gap-5 mt-5">
                                    <div class="flex justify-center">
                                        <button @click="selectColor(props.color_3, 2)"
                                                class="rounded-md p-2 shadow-md bg-gray-300">
                                            <svg :class="props.icon_3" xmlns="http://www.w3.org/2000/svg"
                                                 width="50"
                                                 height="50"
                                                 viewBox="0 0 24 24">
                                                <path
                                                    d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="flex justify-center">
                                        <button @click="selectColor(props.color_2, 2)"
                                                class="rounded-md p-2 shadow-md bg-gray-300">
                                            <svg :class="props.icon_2" xmlns="http://www.w3.org/2000/svg"
                                                 width="50"
                                                 height="50" viewBox="0 0 24 24">
                                                <path
                                                    d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="flex justify-center">
                                        <button @click="selectColor(props.color_1, 2)"
                                                class="rounded-md p-2 shadow-md bg-gray-300">
                                            <svg :class="props.icon_1" xmlns="http://www.w3.org/2000/svg"
                                                 width="50"
                                                 height="50" viewBox="0 0 24 24">
                                                <path
                                                    d="M0 21.398c5.504.456 3.533-5.392 8.626-5.445l2.206 1.841c.549 6.645-7.579 8.127-10.832 3.604zm16.878-8.538c1.713-2.687 7.016-11.698 7.016-11.698.423-.747-.515-1.528-1.17-.976 0 0-7.887 6.857-10.213 9.03-1.838 1.719-1.846 2.504-2.441 5.336l2.016 1.681c2.67-1.098 3.439-1.248 4.792-3.373z"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <button @click="selectColor('white', 2)"
                                            class="relative rounded-md p-2 shadow-md bg-gray-300  flex justify-center select-none">
                                        <div class="relative">
                                            <img :src="eraser" alt="borrador" width="50">
                                        </div>
                                    </button>

                                    <div id="muestra"
                                         class="border-2 border-black py-5 mt-5 bg-white col-span-2 shadow-2xl shadow-blue-900"></div>
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

.icon-orange {
    fill: #fb923c;
}

.icon-orange:hover {
    fill: #ea580c;
}

.icon-stone {
    fill: #57534e;
}

.icon-stone:hover {
    fill: #a8a29e;
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

.bg-red-infinite {
    animation: red-infinite 2s infinite;
}

@keyframes red-infinite {
    0% {
        background-color: white;
    }

    50% {
        background-color: #fecaca;
    }

    100% {
        background-color: white;
    }
}
</style>
