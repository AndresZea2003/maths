<script setup>
import {HomeIcon} from "@heroicons/vue/20/solid";
import {ArrowDownIcon, CheckBadgeIcon, ChevronRightIcon, CheckCircleIcon, ArrowPathIcon} from "@heroicons/vue/24/solid"
import Swal from 'sweetalert2'
import {ref} from "vue";

let color = 'white1';
let colorA = '';
let colorB = '';
let colorC = '';
let figura1 = 0;
let pulso = ref(false)
let mati = ref(`${props.asset_images}/robot/mati_act1.gif`)

const props = defineProps({
    route_back: {type: String, required: true},
    route_next: {type: String, required: true},
    route_refresh: {type: String, required: true},
    asset_images: {type: String, required: true},
    asset_audio: {type: String, required: true}
})

const clickPaint = () => {
    pulso.value = !pulso.value;
}

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
        document.getElementById(id).classList.remove('bg-red-500')
        document.getElementById(id).classList.remove('bg-yellow-400')
        document.getElementById(id).classList.remove('bg-pink-500')
        document.getElementById(id).classList.remove('bg-check')
        document.getElementById(id).classList.add(`bg-${color}`);

        // Figura 1

    }

}

const paintClick = (id) => {

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
    document.getElementById(id).classList.remove('bg-blue-600')
    document.getElementById(id).classList.remove('bg-red-500')
    document.getElementById(id).classList.remove('bg-pink-500')
    document.getElementById(id).classList.remove('bg-yellow-400')
    document.getElementById(id).classList.remove('bg-white')
    document.getElementById(id).classList.add(`bg-${color}`);

    // Figura 1
}

const selectColor = (bg, id) => {
    color = bg

    document.getElementById(id).classList.remove('bg-blue-600')
    document.getElementById(id).classList.remove('bg-red-500')
    document.getElementById(id).classList.remove('bg-pink-500')
    document.getElementById(id).classList.remove('bg-yellow-400')
    document.getElementById(id).classList.remove('bg-white')

    document.getElementById(id).classList.add(`bg-${color}`)

    let sound = new Audio();
    sound.src = `${props.asset_audio}/bubble.wav`;
    sound.play()
}
const check = () => {

    if (document.getElementById('caja442').classList.contains('bg-pink-500')) {
        colorA = 'bg-pink-500'
    } else if (document.getElementById('caja442').classList.contains('bg-yellow-400')) {
        colorA = 'bg-yellow-400'
    } else if (document.getElementById('caja442').classList.contains('bg-red-500')) {
        colorA = 'bg-red-500'
    }

    if (document.getElementById('caja443').classList.contains('bg-pink-500')) {
        colorB = 'bg-pink-500'
    } else if (document.getElementById('caja443').classList.contains('bg-yellow-400')) {
        colorB = 'bg-yellow-400'
    } else if (document.getElementById('caja443').classList.contains('bg-red-500')) {
        colorB = 'bg-red-500'
    }

    if (document.getElementById('caja444').classList.contains('bg-pink-500')) {
        colorC = 'bg-pink-500'
    } else if (document.getElementById('caja444').classList.contains('bg-yellow-400')) {
        colorC = 'bg-yellow-400'
    } else if (document.getElementById('caja444').classList.contains('bg-red-500')) {
        colorC = 'bg-red-500'
    }

    if (document.getElementById('caja1').classList.contains('bg-check') &&
        document.getElementById('caja2').classList.contains('bg-check') &&
        document.getElementById('caja3').classList.contains('bg-check') &&
        document.getElementById('caja4').classList.contains('bg-check') &&
        document.getElementById('caja5').classList.contains('bg-check') &&
        document.getElementById('caja6').classList.contains('bg-check') &&
        document.getElementById('caja7').classList.contains('bg-check') &&
        document.getElementById('caja8').classList.contains('bg-check') &&
        document.getElementById('caja9').classList.contains('bg-check') &&
        document.getElementById('caja10').classList.contains('bg-check') &&
        document.getElementById('caja11').classList.contains('bg-check') &&
        document.getElementById('caja12').classList.contains('bg-check') &&
        document.getElementById('caja13').classList.contains('bg-check') &&
        document.getElementById('caja14').classList.contains('bg-check') &&
        document.getElementById('caja15').classList.contains('bg-check') &&
        document.getElementById('caja16').classList.contains('bg-check') &&
        document.getElementById('caja17').classList.contains('bg-check') &&
        document.getElementById('caja18').classList.contains('bg-check') &&
        document.getElementById('caja19').classList.contains('bg-check') &&
        document.getElementById('caja20').classList.contains('bg-check') &&
        document.getElementById('caja21').classList.contains('bg-check') &&
        document.getElementById('caja22').classList.contains('bg-check') &&
        document.getElementById('caja23').classList.contains('bg-check') &&
        document.getElementById('caja24').classList.contains('bg-check') &&
        document.getElementById('caja25').classList.contains('bg-check') &&
        document.getElementById('caja26').classList.contains('bg-check') &&
        document.getElementById('caja27').classList.contains('bg-check') &&
        document.getElementById('caja28').classList.contains('bg-check') &&
        document.getElementById('caja29').classList.contains('bg-check') &&
        document.getElementById('caja30').classList.contains('bg-check') &&
        document.getElementById('caja31').classList.contains('bg-check') &&
        document.getElementById('caja32').classList.contains('bg-check') &&
        document.getElementById('caja33').classList.contains('bg-check') &&
        document.getElementById('caja34').classList.contains('bg-check') &&
        document.getElementById('caja35').classList.contains('bg-check') &&
        document.getElementById('caja36').classList.contains('bg-check') &&
        document.getElementById('caja37').classList.contains('bg-check') &&
        document.getElementById('caja38').classList.contains('bg-check') &&
        document.getElementById('caja39').classList.contains('bg-check') &&
        document.getElementById('caja40').classList.contains('bg-check') &&
        document.getElementById('caja41').classList.contains('bg-check') &&
        document.getElementById('caja42').classList.contains('bg-check') &&
        document.getElementById('caja43').classList.contains('bg-check') &&
        document.getElementById('caja44').classList.contains('bg-check') &&
        document.getElementById('caja45').classList.contains('bg-check') &&
        document.getElementById('caja46').classList.contains('bg-check') &&
        document.getElementById('caja47').classList.contains('bg-check') &&
        document.getElementById('caja48').classList.contains('bg-check') &&
        document.getElementById('caja49').classList.contains('bg-check') &&
        document.getElementById('caja50').classList.contains('bg-check') &&
        document.getElementById('caja51').classList.contains('bg-check') &&
        document.getElementById('caja52').classList.contains('bg-check') &&
        document.getElementById('caja53').classList.contains('bg-check') &&
        document.getElementById('caja54').classList.contains('bg-check') &&
        document.getElementById('caja55').classList.contains('bg-check') &&
        document.getElementById('caja56').classList.contains('bg-check') &&
        document.getElementById('caja57').classList.contains('bg-check') &&
        document.getElementById('caja58').classList.contains('bg-check') &&
        document.getElementById('caja59').classList.contains('bg-check') &&
        document.getElementById('caja60').classList.contains('bg-check') &&
        document.getElementById('caja61').classList.contains('bg-check') &&
        document.getElementById('caja62').classList.contains('bg-check') &&
        document.getElementById('caja63').classList.contains('bg-check') &&
        document.getElementById('caja64').classList.contains('bg-check') &&
        document.getElementById('caja65').classList.contains('bg-check') &&
        document.getElementById('caja66').classList.contains('bg-check') &&
        document.getElementById('caja67').classList.contains('bg-check') &&
        document.getElementById('caja68').classList.contains('bg-check') &&
        document.getElementById('caja69').classList.contains('bg-check') &&
        document.getElementById('caja70').classList.contains('bg-check') &&
        document.getElementById('caja71').classList.contains('bg-check') &&
        document.getElementById('caja72').classList.contains('bg-check') &&
        document.getElementById('caja73').classList.contains('bg-check') &&
        document.getElementById('caja74').classList.contains('bg-check') &&
        document.getElementById('caja75').classList.contains('bg-check') &&
        document.getElementById('caja76').classList.contains('bg-check') &&
        document.getElementById('caja77').classList.contains('bg-check') &&
        document.getElementById('caja78').classList.contains('bg-check') &&
        document.getElementById('caja79').classList.contains('bg-check') &&
        document.getElementById('caja80').classList.contains('bg-check') &&
        document.getElementById('caja81').classList.contains('bg-check') &&
        document.getElementById('caja82').classList.contains('bg-check') &&
        document.getElementById('caja83').classList.contains('bg-check') &&
        document.getElementById('caja84').classList.contains('bg-check') &&
        document.getElementById('caja85').classList.contains('bg-check') &&
        document.getElementById('caja86').classList.contains('bg-check') &&
        document.getElementById('caja87').classList.contains('bg-check') &&
        document.getElementById('caja88').classList.contains('bg-check') &&
        document.getElementById('caja89').classList.contains('bg-check') &&
        document.getElementById('caja90').classList.contains('bg-check') &&
        document.getElementById('caja91').classList.contains('bg-check') &&
        document.getElementById('caja92').classList.contains('bg-check') &&
        document.getElementById('caja93').classList.contains('bg-check') &&
        document.getElementById('caja94').classList.contains('bg-check') &&
        document.getElementById('caja95').classList.contains('bg-check') &&
        document.getElementById('caja96').classList.contains('bg-check') &&
        document.getElementById('caja97').classList.contains('bg-check') &&
        document.getElementById('caja98').classList.contains('bg-check') &&
        document.getElementById('caja99').classList.contains('bg-check') &&
        document.getElementById('caja100').classList.contains('bg-check') &&
        document.getElementById('caja101').classList.contains('bg-check') &&
        document.getElementById('caja102').classList.contains('bg-check') &&
        document.getElementById('caja103').classList.contains('bg-check') &&
        document.getElementById('caja104').classList.contains('bg-check') &&
        document.getElementById('caja105').classList.contains('bg-check') &&
        document.getElementById('caja106').classList.contains('bg-check') &&
        document.getElementById('caja107').classList.contains('bg-check') &&
        document.getElementById('caja108').classList.contains('bg-check') &&
        document.getElementById('caja109').classList.contains('bg-check') &&
        document.getElementById('caja110').classList.contains('bg-check') &&
        document.getElementById('caja111').classList.contains('bg-check') &&
        document.getElementById('caja112').classList.contains('bg-check') &&
        document.getElementById('caja113').classList.contains('bg-check') &&
        document.getElementById('caja114').classList.contains('bg-check') &&
        document.getElementById('caja115').classList.contains('bg-check') &&
        document.getElementById('caja116').classList.contains('bg-check') &&
        document.getElementById('caja117').classList.contains('bg-check') &&
        document.getElementById('caja118').classList.contains('bg-check') &&
        document.getElementById('caja119').classList.contains('bg-check') &&
        document.getElementById('caja120').classList.contains('bg-check') &&
        document.getElementById('caja121').classList.contains('bg-check') &&
        document.getElementById('caja122').classList.contains('bg-check') &&
        document.getElementById('caja123').classList.contains('bg-check') &&
        document.getElementById('caja124').classList.contains('bg-check') &&
        document.getElementById('caja125').classList.contains('bg-check') &&
        document.getElementById('caja126').classList.contains('bg-check') &&
        document.getElementById('caja127').classList.contains('bg-check') &&
        document.getElementById('caja128').classList.contains('bg-check') &&
        document.getElementById('caja129').classList.contains('bg-check') &&
        document.getElementById('caja130').classList.contains('bg-check') &&
        document.getElementById('caja131').classList.contains('bg-check') &&
        document.getElementById('caja132').classList.contains('bg-check') &&
        document.getElementById('caja133').classList.contains('bg-check') &&
        document.getElementById('caja134').classList.contains('bg-check') &&
        document.getElementById('caja135').classList.contains('bg-check') &&
        document.getElementById('caja136').classList.contains('bg-check') &&
        document.getElementById('caja137').classList.contains('bg-check') &&
        document.getElementById('caja138').classList.contains('bg-check') &&
        document.getElementById('caja139').classList.contains('bg-check') &&
        document.getElementById('caja140').classList.contains('bg-check') &&
        document.getElementById('caja141').classList.contains('bg-check') &&
        document.getElementById('caja142').classList.contains('bg-check') &&
        document.getElementById('caja143').classList.contains('bg-check') &&
        document.getElementById('caja144').classList.contains('bg-check') &&
        document.getElementById('caja145').classList.contains('bg-check') &&
        document.getElementById('caja146').classList.contains('bg-check') &&
        document.getElementById('caja147').classList.contains('bg-check') &&
        document.getElementById('caja148').classList.contains('bg-check') &&
        document.getElementById('caja149').classList.contains('bg-check') &&
        document.getElementById('caja150').classList.contains('bg-check') &&
        document.getElementById('caja151').classList.contains('bg-check') &&
        document.getElementById('caja152').classList.contains('bg-check') &&
        document.getElementById('caja153').classList.contains('bg-check') &&
        document.getElementById('caja154').classList.contains('bg-check') &&
        document.getElementById('caja155').classList.contains('bg-check') &&
        document.getElementById('caja156').classList.contains('bg-check') &&
        document.getElementById('caja157').classList.contains('bg-check') &&
        document.getElementById('caja158').classList.contains('bg-check') &&
        document.getElementById('caja159').classList.contains('bg-check') &&
        document.getElementById('caja160').classList.contains('bg-check') &&
        document.getElementById('caja161').classList.contains('bg-check') &&
        document.getElementById('caja162').classList.contains('bg-check') &&
        document.getElementById('caja163').classList.contains('bg-check') &&
        document.getElementById('caja164').classList.contains('bg-check') &&
        document.getElementById('caja165').classList.contains('bg-check') &&
        document.getElementById('caja166').classList.contains('bg-check') &&
        document.getElementById('caja167').classList.contains('bg-check') &&
        document.getElementById('caja168').classList.contains('bg-check') &&
        document.getElementById('caja169').classList.contains('bg-check') &&
        document.getElementById('caja170').classList.contains('bg-check') &&
        document.getElementById('caja171').classList.contains('bg-check') &&
        document.getElementById('caja172').classList.contains('bg-check') &&
        document.getElementById('caja173').classList.contains('bg-check') &&
        document.getElementById('caja174').classList.contains('bg-check') &&
        document.getElementById('caja175').classList.contains('bg-check') &&
        document.getElementById('caja176').classList.contains('bg-check') &&
        document.getElementById('caja177').classList.contains('bg-check') &&
        document.getElementById('caja178').classList.contains('bg-check') &&
        document.getElementById('caja179').classList.contains('bg-check') &&
        document.getElementById('caja180').classList.contains('bg-check') &&
        document.getElementById('caja181').classList.contains('bg-check') &&
        document.getElementById('caja182').classList.contains('bg-check') &&
        document.getElementById('caja183').classList.contains('bg-check') &&
        document.getElementById('caja184').classList.contains('bg-check') &&
        document.getElementById('caja185').classList.contains('bg-check') &&
        document.getElementById('caja186').classList.contains('bg-check') &&
        document.getElementById('caja187').classList.contains('bg-check') &&
        document.getElementById('caja188').classList.contains('bg-check') &&
        document.getElementById('caja189').classList.contains('bg-check') &&
        document.getElementById('caja190').classList.contains('bg-check') &&
        document.getElementById('caja191').classList.contains('bg-check') &&
        document.getElementById('caja192').classList.contains('bg-check') &&
        document.getElementById('caja193').classList.contains('bg-check') &&
        document.getElementById('caja194').classList.contains('bg-check') &&
        document.getElementById('caja195').classList.contains('bg-check') &&
        document.getElementById('caja196').classList.contains('bg-check') &&
        document.getElementById('caja197').classList.contains('bg-check') &&
        document.getElementById('caja198').classList.contains('bg-check') &&
        document.getElementById('caja199').classList.contains('bg-check') &&
        document.getElementById('caja200').classList.contains('bg-check') &&
        document.getElementById('caja201').classList.contains('bg-check') &&
        document.getElementById('caja202').classList.contains('bg-check') &&
        document.getElementById('caja203').classList.contains('bg-check') &&
        document.getElementById('caja204').classList.contains('bg-check') &&
        document.getElementById('caja205').classList.contains('bg-check') &&
        document.getElementById('caja206').classList.contains('bg-check') &&
        document.getElementById('caja207').classList.contains('bg-check') &&
        document.getElementById('caja208').classList.contains(colorA) &&
        document.getElementById('caja209').classList.contains(colorA) &&
        document.getElementById('caja210').classList.contains(colorA) &&
        document.getElementById('caja211').classList.contains(colorA) &&
        document.getElementById('caja212').classList.contains(colorA) &&
        document.getElementById('caja213').classList.contains(colorA) &&
        document.getElementById('caja214').classList.contains(colorA) &&
        document.getElementById('caja215').classList.contains(colorA) &&
        document.getElementById('caja216').classList.contains(colorA) &&
        document.getElementById('caja217').classList.contains(colorB) &&
        document.getElementById('caja218').classList.contains(colorB) &&
        document.getElementById('caja219').classList.contains(colorB) &&
        document.getElementById('caja220').classList.contains(colorB) &&
        document.getElementById('caja221').classList.contains(colorB) &&
        document.getElementById('caja222').classList.contains(colorB) &&
        document.getElementById('caja223').classList.contains(colorB) &&
        document.getElementById('caja224').classList.contains(colorB) &&
        document.getElementById('caja225').classList.contains(colorB) &&
        document.getElementById('caja226').classList.contains(colorC) &&
        document.getElementById('caja227').classList.contains(colorC) &&
        document.getElementById('caja228').classList.contains(colorC) &&
        document.getElementById('caja229').classList.contains(colorC) &&
        document.getElementById('caja230').classList.contains(colorC) &&
        document.getElementById('caja231').classList.contains(colorC) &&
        document.getElementById('caja232').classList.contains(colorC) &&
        document.getElementById('caja233').classList.contains(colorC) &&
        document.getElementById('caja234').classList.contains(colorC) &&
        document.getElementById('caja235').classList.contains('bg-check') &&
        document.getElementById('caja236').classList.contains('bg-check') &&
        document.getElementById('caja237').classList.contains('bg-check') &&
        document.getElementById('caja238').classList.contains('bg-check') &&
        document.getElementById('caja239').classList.contains('bg-check') &&
        document.getElementById('caja240').classList.contains('bg-check') &&
        document.getElementById('caja241').classList.contains('bg-check') &&
        document.getElementById('caja242').classList.contains('bg-check') &&
        document.getElementById('caja243').classList.contains('bg-check') &&
        document.getElementById('caja244').classList.contains('bg-check') &&
        document.getElementById('caja245').classList.contains('bg-check') &&
        document.getElementById('caja246').classList.contains('bg-check') &&
        document.getElementById('caja247').classList.contains('bg-check') &&
        document.getElementById('caja248').classList.contains('bg-check') &&
        document.getElementById('caja249').classList.contains('bg-check') &&
        document.getElementById('caja250').classList.contains('bg-check') &&
        document.getElementById('caja251').classList.contains('bg-check') &&
        document.getElementById('caja252').classList.contains('bg-check') &&
        document.getElementById('caja253').classList.contains('bg-check') &&
        document.getElementById('caja254').classList.contains('bg-check') &&
        document.getElementById('caja255').classList.contains('bg-check') &&
        document.getElementById('caja256').classList.contains('bg-check') &&
        document.getElementById('caja257').classList.contains('bg-check') &&
        document.getElementById('caja258').classList.contains('bg-check') &&
        document.getElementById('caja259').classList.contains('bg-check') &&
        document.getElementById('caja260').classList.contains('bg-check') &&
        document.getElementById('caja261').classList.contains('bg-check') &&
        document.getElementById('caja262').classList.contains('bg-check') &&
        document.getElementById('caja263').classList.contains('bg-check') &&
        document.getElementById('caja264').classList.contains('bg-check') &&
        document.getElementById('caja265').classList.contains('bg-check') &&
        document.getElementById('caja266').classList.contains('bg-check') &&
        document.getElementById('caja267').classList.contains('bg-check') &&
        document.getElementById('caja268').classList.contains('bg-check') &&
        document.getElementById('caja269').classList.contains('bg-check') &&
        document.getElementById('caja270').classList.contains('bg-check') &&
        document.getElementById('caja271').classList.contains('bg-check') &&
        document.getElementById('caja272').classList.contains('bg-check') &&
        document.getElementById('caja273').classList.contains('bg-check') &&
        document.getElementById('caja274').classList.contains('bg-check') &&
        document.getElementById('caja275').classList.contains('bg-check') &&
        document.getElementById('caja276').classList.contains('bg-check') &&
        document.getElementById('caja277').classList.contains('bg-check') &&
        document.getElementById('caja278').classList.contains('bg-check') &&
        document.getElementById('caja279').classList.contains('bg-check') &&
        document.getElementById('caja280').classList.contains('bg-check') &&
        document.getElementById('caja281').classList.contains('bg-check') &&
        document.getElementById('caja282').classList.contains('bg-check') &&
        document.getElementById('caja283').classList.contains('bg-check') &&
        document.getElementById('caja284').classList.contains('bg-check') &&
        document.getElementById('caja285').classList.contains('bg-check') &&
        document.getElementById('caja286').classList.contains('bg-check') &&
        document.getElementById('caja287').classList.contains('bg-check') &&
        document.getElementById('caja288').classList.contains('bg-check') &&
        document.getElementById('caja289').classList.contains('bg-check') &&
        document.getElementById('caja290').classList.contains('bg-check') &&
        document.getElementById('caja291').classList.contains('bg-check') &&
        document.getElementById('caja292').classList.contains('bg-check') &&
        document.getElementById('caja293').classList.contains('bg-check') &&
        document.getElementById('caja294').classList.contains('bg-check') &&
        document.getElementById('caja295').classList.contains('bg-check') &&
        document.getElementById('caja296').classList.contains('bg-check') &&
        document.getElementById('caja297').classList.contains('bg-check') &&
        document.getElementById('caja298').classList.contains('bg-check') &&
        document.getElementById('caja299').classList.contains('bg-check') &&
        document.getElementById('caja300').classList.contains('bg-check') &&
        document.getElementById('caja301').classList.contains('bg-check') &&
        document.getElementById('caja302').classList.contains('bg-check') &&
        document.getElementById('caja303').classList.contains('bg-check') &&
        document.getElementById('caja304').classList.contains('bg-check') &&
        document.getElementById('caja305').classList.contains('bg-check') &&
        document.getElementById('caja306').classList.contains('bg-check') &&
        document.getElementById('caja307').classList.contains('bg-check') &&
        document.getElementById('caja308').classList.contains('bg-check') &&
        document.getElementById('caja309').classList.contains('bg-check') &&
        document.getElementById('caja310').classList.contains('bg-check') &&
        document.getElementById('caja311').classList.contains('bg-check') &&
        document.getElementById('caja312').classList.contains('bg-check') &&
        document.getElementById('caja313').classList.contains('bg-check') &&
        document.getElementById('caja314').classList.contains('bg-check') &&
        document.getElementById('caja315').classList.contains('bg-check') &&
        document.getElementById('caja316').classList.contains('bg-check') &&
        document.getElementById('caja317').classList.contains('bg-check') &&
        document.getElementById('caja318').classList.contains('bg-check') &&
        document.getElementById('caja319').classList.contains('bg-check') &&
        document.getElementById('caja320').classList.contains('bg-check') &&
        document.getElementById('caja321').classList.contains('bg-check') &&
        document.getElementById('caja322').classList.contains('bg-check') &&
        document.getElementById('caja323').classList.contains('bg-check') &&
        document.getElementById('caja324').classList.contains('bg-check') &&
        document.getElementById('caja325').classList.contains('bg-check') &&
        document.getElementById('caja326').classList.contains('bg-check') &&
        document.getElementById('caja327').classList.contains('bg-check') &&
        document.getElementById('caja328').classList.contains('bg-check') &&
        document.getElementById('caja329').classList.contains('bg-check') &&
        document.getElementById('caja330').classList.contains('bg-check') &&
        document.getElementById('caja331').classList.contains('bg-check') &&
        document.getElementById('caja332').classList.contains('bg-check') &&
        document.getElementById('caja333').classList.contains('bg-check') &&
        document.getElementById('caja334').classList.contains('bg-check') &&
        document.getElementById('caja335').classList.contains('bg-check') &&
        document.getElementById('caja336').classList.contains('bg-check') &&
        document.getElementById('caja337').classList.contains('bg-check') &&
        document.getElementById('caja338').classList.contains('bg-check') &&
        document.getElementById('caja339').classList.contains('bg-check') &&
        document.getElementById('caja340').classList.contains('bg-check') &&
        document.getElementById('caja341').classList.contains('bg-check') &&
        document.getElementById('caja342').classList.contains('bg-check') &&
        document.getElementById('caja343').classList.contains('bg-check') &&
        document.getElementById('caja344').classList.contains('bg-check') &&
        document.getElementById('caja345').classList.contains('bg-check') &&
        document.getElementById('caja346').classList.contains('bg-check') &&
        document.getElementById('caja347').classList.contains('bg-check') &&
        document.getElementById('caja348').classList.contains('bg-check') &&
        document.getElementById('caja349').classList.contains('bg-check') &&
        document.getElementById('caja350').classList.contains('bg-check') &&
        document.getElementById('caja351').classList.contains('bg-check') &&
        document.getElementById('caja352').classList.contains('bg-check') &&
        document.getElementById('caja353').classList.contains('bg-check') &&
        document.getElementById('caja354').classList.contains('bg-check') &&
        document.getElementById('caja355').classList.contains('bg-check') &&
        document.getElementById('caja356').classList.contains('bg-check') &&
        document.getElementById('caja357').classList.contains('bg-check') &&
        document.getElementById('caja358').classList.contains('bg-check') &&
        document.getElementById('caja359').classList.contains('bg-check') &&
        document.getElementById('caja360').classList.contains('bg-check') &&
        document.getElementById('caja361').classList.contains('bg-check') &&
        document.getElementById('caja362').classList.contains('bg-check') &&
        document.getElementById('caja363').classList.contains('bg-check') &&
        document.getElementById('caja364').classList.contains('bg-check') &&
        document.getElementById('caja365').classList.contains('bg-check') &&
        document.getElementById('caja366').classList.contains('bg-check') &&
        document.getElementById('caja367').classList.contains('bg-check') &&
        document.getElementById('caja368').classList.contains('bg-check') &&
        document.getElementById('caja369').classList.contains('bg-check') &&
        document.getElementById('caja370').classList.contains('bg-check') &&
        document.getElementById('caja371').classList.contains('bg-check') &&
        document.getElementById('caja372').classList.contains('bg-check') &&
        document.getElementById('caja373').classList.contains('bg-check') &&
        document.getElementById('caja374').classList.contains('bg-check') &&
        document.getElementById('caja375').classList.contains('bg-check') &&
        document.getElementById('caja376').classList.contains('bg-check') &&
        document.getElementById('caja377').classList.contains('bg-check') &&
        document.getElementById('caja378').classList.contains('bg-check') &&
        document.getElementById('caja379').classList.contains('bg-check') &&
        document.getElementById('caja380').classList.contains('bg-check') &&
        document.getElementById('caja381').classList.contains('bg-check') &&
        document.getElementById('caja382').classList.contains('bg-check') &&
        document.getElementById('caja383').classList.contains('bg-check') &&
        document.getElementById('caja384').classList.contains('bg-check') &&
        document.getElementById('caja385').classList.contains('bg-check') &&
        document.getElementById('caja386').classList.contains('bg-check') &&
        document.getElementById('caja387').classList.contains('bg-check') &&
        document.getElementById('caja388').classList.contains('bg-check') &&
        document.getElementById('caja389').classList.contains('bg-check') &&
        document.getElementById('caja390').classList.contains('bg-check') &&
        document.getElementById('caja391').classList.contains('bg-check') &&
        document.getElementById('caja392').classList.contains('bg-check') &&
        document.getElementById('caja393').classList.contains('bg-check') &&
        document.getElementById('caja394').classList.contains('bg-check') &&
        document.getElementById('caja395').classList.contains('bg-check') &&
        document.getElementById('caja396').classList.contains('bg-check') &&
        document.getElementById('caja397').classList.contains('bg-check') &&
        document.getElementById('caja398').classList.contains('bg-check') &&
        document.getElementById('caja399').classList.contains('bg-check') &&
        document.getElementById('caja400').classList.contains('bg-check') &&
        document.getElementById('caja401').classList.contains('bg-check') &&
        document.getElementById('caja402').classList.contains('bg-check') &&
        document.getElementById('caja403').classList.contains('bg-check') &&
        document.getElementById('caja404').classList.contains('bg-check') &&
        document.getElementById('caja405').classList.contains('bg-check') &&
        document.getElementById('caja406').classList.contains('bg-check') &&
        document.getElementById('caja407').classList.contains('bg-check') &&
        document.getElementById('caja408').classList.contains('bg-check') &&
        document.getElementById('caja409').classList.contains('bg-check') &&
        document.getElementById('caja410').classList.contains('bg-check') &&
        document.getElementById('caja411').classList.contains('bg-check') &&
        document.getElementById('caja412').classList.contains('bg-check') &&
        document.getElementById('caja413').classList.contains('bg-check') &&
        document.getElementById('caja414').classList.contains('bg-check') &&
        document.getElementById('caja415').classList.contains('bg-check') &&
        document.getElementById('caja416').classList.contains('bg-check') &&
        document.getElementById('caja417').classList.contains('bg-check') &&
        document.getElementById('caja418').classList.contains('bg-check') &&
        document.getElementById('caja419').classList.contains('bg-check') &&
        document.getElementById('caja420').classList.contains('bg-check') &&
        document.getElementById('caja421').classList.contains('bg-check') &&
        document.getElementById('caja422').classList.contains('bg-check') &&
        document.getElementById('caja423').classList.contains('bg-check') &&
        document.getElementById('caja424').classList.contains('bg-check') &&
        document.getElementById('caja425').classList.contains('bg-check') &&
        document.getElementById('caja426').classList.contains('bg-check') &&
        document.getElementById('caja427').classList.contains('bg-check') &&
        document.getElementById('caja428').classList.contains('bg-check') &&
        document.getElementById('caja429').classList.contains('bg-check') &&
        document.getElementById('caja430').classList.contains('bg-check') &&
        document.getElementById('caja431').classList.contains('bg-check') &&
        document.getElementById('caja432').classList.contains('bg-check') &&
        document.getElementById('caja433').classList.contains('bg-check') &&
        document.getElementById('caja434').classList.contains('bg-check') &&
        document.getElementById('caja435').classList.contains('bg-check') &&
        document.getElementById('caja436').classList.contains('bg-check') &&
        document.getElementById('caja437').classList.contains('bg-check') &&
        document.getElementById('caja438').classList.contains('bg-check') &&
        document.getElementById('caja439').classList.contains('bg-check') &&
        document.getElementById('caja440').classList.contains('bg-check') &&
        document.getElementById('caja441').classList.contains('bg-check')
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

</script>

<template>
    <div class="min-h-full bg-gray-300" @mousedown="clickPaint()" @mouseup="clickPaint()">
        <div class="md:container mx-auto">
            <div class="font-bold text-xl bg-gray-900 mx-5 px-5 py-3 rounded-b-lg shadow-2xl text-white">Matematicas -
                Nivel 1
            </div>
        </div>
        <div class="container mx-auto mb-10 rounded-md px-5">
            <div class="bg-violet-300 border-4 border-violet-600 flex-col pb-2 rounded-md shadow-2xl">
                <div class="mx-5 py-2">
                    <div>
                        <span class="font-bold">Actividad 1 -</span>
                        <span> Replica los colores como se muestra en la imagen izquierda</span>
                    </div>
                </div>
                <div class="mx-5 grid md:grid-cols-4 gap-5">
                    <div id="fondoMati"
                         class="bg-red-400 border-4 border-violet-600 rounded-md flex items-end justify-center">
                        <div class="">
                            <img :src="mati" width="250"
                                 alt="">
                        </div>
                    </div>
                    <div
                        class="bg-white border-4 border-violet-600 rounded-md p-5 md:col-span-3 grid md:grid-cols-4 gap-x-5">
                        <div class="col-span-3 grid md:grid-cols-2 gap-x-5">
                            <div class="border-black border-4 flex items-center justify-center">
                                <div @click="paintClick('caja442')" class="p-6 border-black border-4 rounded"
                                     id="caja442">{{ null }}
                                </div>
                                <div @click="paintClick('caja443')" class="p-6 border-black border-4 rounded"
                                     id="caja443">{{ null }}
                                </div>
                                <div @click="paintClick('caja444')" class="p-6 border-black border-4 rounded"
                                     id="caja444">{{ null }}
                                </div>
                            </div>
                            <div
                                class="border-black border-4 flex items-center justify-center overflow-x-auto overflow-y-auto">
                                <div class="grid grid-cols-7">
                                    <div class=" grid grid-cols-3">
                                        <div @mousemove="paint('caja1')" id="caja1"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja2')" id="caja2"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja3')" id="caja3"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja4')" id="caja4"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja5')" id="caja5"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja6')" id="caja6"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja7')" id="caja7"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja8')" id="caja8"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja9')" id="caja9"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja10')" id="caja10"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja11')" id="caja11"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja12')" id="caja12"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja13')" id="caja13"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja14')" id="caja14"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja15')" id="caja15"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja16')" id="caja16"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja17')" id="caja17"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja18')" id="caja18"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja19')" id="caja19"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja20')" id="caja20"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja21')" id="caja21"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja22')" id="caja22"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja23')" id="caja23"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja24')" id="caja24"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja25')" id="caja25"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja26')" id="caja26"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja27')" id="caja27"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja28')" id="caja28"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja29')" id="caja29"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja30')" id="caja30"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja31')" id="caja31"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja32')" id="caja32"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja33')" id="caja33"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja34')" id="caja34"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja35')" id="caja35"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja36')" id="caja36"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja37')" id="caja37"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja38')" id="caja38"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja39')" id="caja39"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja40')" id="caja40"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja41')" id="caja41"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja42')" id="caja42"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja43')" id="caja43"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja44')" id="caja44"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja45')" id="caja45"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja46')" id="caja46"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja47')" id="caja47"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja48')" id="caja48"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja49')" id="caja49"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja50')" id="caja50"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja51')" id="caja51"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja52')" id="caja52"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja53')" id="caja53"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja54')" id="caja54"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja55')" id="caja55"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja56')" id="caja56"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja57')" id="caja57"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja58')" id="caja58"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja59')" id="caja59"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja60')" id="caja60"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja61')" id="caja61"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja62')" id="caja62"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja63')" id="caja63"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja64')" id="caja64"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja65')" id="caja65"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja66')" id="caja66"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja67')" id="caja67"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja68')" id="caja68"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja69')" id="caja69"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja70')" id="caja70"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja71')" id="caja71"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja72')" id="caja72"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja73')" id="caja73"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja74')" id="caja74"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja75')" id="caja75"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja76')" id="caja76"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja77')" id="caja77"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja78')" id="caja78"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja79')" id="caja79"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja80')" id="caja80"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja81')" id="caja81"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja82')" id="caja82"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja83')" id="caja83"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja84')" id="caja84"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja85')" id="caja85"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja86')" id="caja86"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja87')" id="caja87"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja88')" id="caja88"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja89')" id="caja89"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja90')" id="caja90"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja91')" id="caja91"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja92')" id="caja92"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja93')" id="caja93"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja94')" id="caja94"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja95')" id="caja95"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja96')" id="caja96"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja97')" id="caja97"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja98')" id="caja98"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja99')" id="caja99"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja100')" id="caja100"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja101')" id="caja101"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja102')" id="caja102"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja103')" id="caja103"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja104')" id="caja104"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja105')" id="caja105"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja106')" id="caja106"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja107')" id="caja107"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja108')" id="caja108"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja109')" id="caja109"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja110')" id="caja110"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja111')" id="caja111"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja112')" id="caja112"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja113')" id="caja113"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja114')" id="caja114"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja115')" id="caja115"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja116')" id="caja116"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja117')" id="caja117"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja118')" id="caja118"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja119')" id="caja119"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja120')" id="caja120"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja121')" id="caja121"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja122')" id="caja122"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja123')" id="caja123"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja124')" id="caja124"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja125')" id="caja125"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja126')" id="caja126"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja127')" id="caja127"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja128')" id="caja128"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja129')" id="caja129"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja130')" id="caja130"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja131')" id="caja131"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja132')" id="caja132"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja133')" id="caja133"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja134')" id="caja134"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja135')" id="caja135"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja136')" id="caja136"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja137')" id="caja137"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja138')" id="caja138"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja139')" id="caja139"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja140')" id="caja140"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja141')" id="caja141"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja142')" id="caja142"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja143')" id="caja143"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja144')" id="caja144"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja145')" id="caja145"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja146')" id="caja146"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja147')" id="caja147"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja148')" id="caja148"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja149')" id="caja149"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja150')" id="caja150"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja151')" id="caja151"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja152')" id="caja152"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja153')" id="caja153"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja154')" id="caja154"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja155')" id="caja155"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja156')" id="caja156"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja157')" id="caja157"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja158')" id="caja158"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja159')" id="caja159"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja160')" id="caja160"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja161')" id="caja161"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja162')" id="caja162"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja163')" id="caja163"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja164')" id="caja164"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja165')" id="caja165"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja166')" id="caja166"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja167')" id="caja167"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja168')" id="caja168"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja169')" id="caja169"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja170')" id="caja170"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja171')" id="caja171"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black b">
                                        <div @mousemove="paint('caja172')" id="caja172"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja173')" id="caja173"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja174')" id="caja174"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja175')" id="caja175"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja176')" id="caja176"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja177')" id="caja177"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja178')" id="caja178"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja179')" id="caja179"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja180')" id="caja180"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black b">
                                        <div @mousemove="paint('caja181')" id="caja181"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja182')" id="caja182"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja183')" id="caja183"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja184')" id="caja184"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja185')" id="caja185"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja186')" id="caja186"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja187')" id="caja187"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja188')" id="caja188"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja189')" id="caja189"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">

                                        <div @mousemove="paint('caja190')" id="caja190"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja191')" id="caja191"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja192')" id="caja192"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja193')" id="caja193"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja194')" id="caja194"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja195')" id="caja195"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja196')" id="caja196"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja197')" id="caja197"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja198')" id="caja198"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <!--                linea3-->
                                    <div class="grid grid-cols-3 grid-rows-2">

                                        <div @mousemove="paint('caja199')" id="caja199"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja200')" id="caja200"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja201')" id="caja201"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja202')" id="caja202"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja203')" id="caja203"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja204')" id="caja204"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja205')" id="caja205"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja206')" id="caja206"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja207')" id="caja207"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black border-4">
                                        <div @mousemove="paint('caja208')" id="caja208"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja209')" id="caja209"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja210')" id="caja210"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja211')" id="caja211"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja212')" id="caja212"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja213')" id="caja213"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja214')" id="caja214"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja215')" id="caja215"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja216')" id="caja216"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black border-4">
                                        <div @mousemove="paint('caja217')" id="caja217"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja218')" id="caja218"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja219')" id="caja219"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja220')" id="caja220"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja221')" id="caja221"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja222')" id="caja222"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja223')" id="caja223"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja224')" id="caja224"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja225')" id="caja225"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black border-4">
                                        <div @mousemove="paint('caja226')" id="caja226"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja227')" id="caja227"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja228')" id="caja228"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja229')" id="caja229"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja230')" id="caja230"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja231')" id="caja231"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja232')" id="caja232"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja233')" id="caja233"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja234')" id="caja234"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black b">
                                        <div @mousemove="paint('caja235')" id="caja235"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja236')" id="caja236"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja237')" id="caja237"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja238')" id="caja238"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja239')" id="caja239"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja240')" id="caja240"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja241')" id="caja241"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja242')" id="caja242"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja243')" id="caja243"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black b">
                                        <div @mousemove="paint('caja244')" id="caja244"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja245')" id="caja245"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja246')" id="caja246"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja247')" id="caja247"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja248')" id="caja248"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja249')" id="caja249"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja250')" id="caja250"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja251')" id="caja251"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja252')" id="caja252"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black b">
                                        <div @mousemove="paint('caja253')" id="caja253"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja254')" id="caja254"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja255')" id="caja255"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja256')" id="caja256"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja257')" id="caja257"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja258')" id="caja258"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja259')" id="caja259"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja260')" id="caja260"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja261')" id="caja261"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja262')" id="caja262"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja263')" id="caja263"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja264')" id="caja264"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja265')" id="caja265"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja266')" id="caja266"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja267')" id="caja267"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja268')" id="caja268"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja269')" id="caja269"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja270')" id="caja270"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja271')" id="caja271"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja272')" id="caja272"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja273')" id="caja273"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja274')" id="caja274"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja275')" id="caja275"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja276')" id="caja276"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja277')" id="caja277"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja278')" id="caja278"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja279')" id="caja279"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja280')" id="caja280"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja281')" id="caja281"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja282')" id="caja282"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja283')" id="caja283"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja284')" id="caja284"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja285')" id="caja285"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja286')" id="caja286"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja287')" id="caja287"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja288')" id="caja288"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja289')" id="caja289"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja290')" id="caja290"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja291')" id="caja291"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja292')" id="caja292"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja293')" id="caja293"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja294')" id="caja294"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja295')" id="caja295"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja296')" id="caja296"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja297')" id="caja297"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <!--                linea4-->
                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja298')" id="caja298"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja299')" id="caja299"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja300')" id="caja300"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja301')" id="caja301"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja302')" id="caja302"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja303')" id="caja303"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja304')" id="caja304"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja305')" id="caja305"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja306')" id="caja306"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja307')" id="caja307"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja308')" id="caja308"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja309')" id="caja309"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja310')" id="caja310"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja311')" id="caja311"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja312')" id="caja312"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja313')" id="caja313"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja314')" id="caja314"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja315')" id="caja315"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja316')" id="caja316"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja317')" id="caja317"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja318')" id="caja318"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja319')" id="caja319"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja320')" id="caja320"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja321')" id="caja321"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja322')" id="caja322"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja323')" id="caja323"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja324')" id="caja324"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja325')" id="caja325"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja326')" id="caja326"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja327')" id="caja327"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja328')" id="caja328"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja329')" id="caja329"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja330')" id="caja330"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja331')" id="caja331"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja332')" id="caja332"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja333')" id="caja333"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja334')" id="caja334"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja335')" id="caja335"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja336')" id="caja336"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja337')" id="caja337"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja338')" id="caja338"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja339')" id="caja339"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja340')" id="caja340"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja341')" id="caja341"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja342')" id="caja342"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja343')" id="caja343"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja344')" id="caja344"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja345')" id="caja345"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja346')" id="caja346"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja347')" id="caja347"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja348')" id="caja348"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja349')" id="caja349"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja350')" id="caja350"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja351')" id="caja351"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja352')" id="caja352"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja353')" id="caja353"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja354')" id="caja354"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja355')" id="caja355"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja356')" id="caja356"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja357')" id="caja357"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja358')" id="caja358"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja359')" id="caja359"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja360')" id="caja360"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja361')" id="caja361"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja362')" id="caja362"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja363')" id="caja363"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja364')" id="caja364"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja365')" id="caja365"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja366')" id="caja366"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja367')" id="caja367"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja368')" id="caja368"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja369')" id="caja369"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">

                                        <div @mousemove="paint('caja370')" id="caja370"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja371')" id="caja371"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja372')" id="caja372"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja373')" id="caja373"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja374')" id="caja374"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja375')" id="caja375"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja376')" id="caja376"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja377')" id="caja377"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja378')" id="caja378"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">

                                        <div @mousemove="paint('caja379')" id="caja379"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja380')" id="caja380"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja381')" id="caja381"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja382')" id="caja382"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja383')" id="caja383"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja384')" id="caja384"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja385')" id="caja385"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja386')" id="caja386"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja387')" id="caja387"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2">

                                        <div @mousemove="paint('caja388')" id="caja388"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja389')" id="caja389"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja390')" id="caja390"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja391')" id="caja391"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja392')" id="caja392"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja393')" id="caja393"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja394')" id="caja394"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja395')" id="caja395"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja396')" id="caja396"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <!--                linea5-->
                                    <div class="grid grid-cols-3 grid-rows-2">
                                        <div @mousemove="paint('caja397')" id="caja397"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja398')" id="caja398"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja399')" id="caja399"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja400')" id="caja400"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja401')" id="caja401"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja402')" id="caja402"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja403')" id="caja403"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja404')" id="caja404"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja405')" id="caja405"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja406')" id="caja406"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja407')" id="caja407"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja408')" id="caja408"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja409')" id="caja409"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja410')" id="caja410"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja411')" id="caja411"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja412')" id="caja412"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja413')" id="caja413"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja414')" id="caja414"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja415')" id="caja415"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja416')" id="caja416"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja417')" id="caja417"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja418')" id="caja418"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja419')" id="caja419"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja420')" id="caja420"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja421')" id="caja421"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja422')" id="caja422"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja423')" id="caja423"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja424')" id="caja424"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja425')" id="caja425"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja426')" id="caja426"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja427')" id="caja427"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja428')" id="caja428"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja429')" id="caja429"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja430')" id="caja430"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja431')" id="caja431"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja432')" id="caja432"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 grid-rows-2 border-black">
                                        <div @mousemove="paint('caja433')" id="caja433"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja434')" id="caja434"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja435')" id="caja435"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja436')" id="caja436"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja437')" id="caja437"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja438')" id="caja438"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja439')" id="caja439"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja440')" id="caja440"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                        <div @mousemove="paint('caja441')" id="caja441"
                                             class=" select-none p-2 bg-check hover:bg-blue-700">
                                            {{ null }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-violet-300 border-black border-4">
                            <div class="grid grid-cols-2 gap-5 flex">
                                <div
                                    class="bg-gray-900 col-span-2 border-4 border-violet-400 flex justify-center py-12">
                                    <div class="text-violet-400 font-bold text-2xl">
                                        Planeta Violeta
                                    </div>
                                </div>
                                <div class="flex justify-center col-span-2 py-10">
                                    <div class="grid grid-cols-2 gap-5">
                                        <button @click="check()"
                                                class="bg-green-400 px-2 py-1 rounded shadow-2xl border-4 border-green-500 font-bold">
                                            <CheckCircleIcon class="w-10 text-green-600"></CheckCircleIcon>
                                        </button>
                                        <a :href="props.route_refresh">
                                            <button
                                                class="bg-red-400 px-2 py-1 rounded shadow-2xl border-4 border-red-500 font-bold">
                                                <ArrowPathIcon class="w-10 text-green-600"></ArrowPathIcon>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-3 grid md:grid-cols-2 gap-x-5">
                            <div
                                class="bg-violet-400 border-black border-4 flex items-center justify-center grid grid-cols-3 pt-5">
                                <div class="flex justify-center">
                                    <button @click="selectColor('pink-500', 'muestra')"
                                            class="border-2 border-black bg-pink-500 hover:bg-pink-600 rounded-full p-5">
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('yellow-400', 'muestra')"
                                            class="border-2 border-black bg-yellow-400 hover:bg-yellow-500 rounded-full p-5">
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('red-500', 'muestra')"
                                            class="border-2 border-black bg-red-500 hover:bg-red-600 rounded-full p-5">
                                    </button>
                                </div>
                                <div id="muestra" class="border-2 border-black p-5 m-2 bg-white col-span-4"></div>
                            </div>
                            <div
                                class="bg-violet-400 border-black border-4 flex items-center justify-center grid grid-cols-4 pt-5">
                                <div class="flex justify-center">
                                    <button @click="selectColor('pink-500', 'muestra2')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             viewBox="0 0 24 24"
                                             fill="#ec4899">
                                            <path
                                                d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('yellow-400', 'muestra2')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             viewBox="0 0 24 24"
                                             fill="#facc15">
                                            <path
                                                d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex justify-center">
                                    <button @click="selectColor('red-500', 'muestra2')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                             viewBox="0 0 24 24"
                                             fill="#ef4444">
                                            <path
                                                d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/>
                                        </svg>
                                    </button>
                                </div>
                                <button @click="selectColor('check', 'muestra2')" class="px-5">
                                    <svg width="45" height="45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         fill-rule="evenodd"
                                         clip-rule="evenodd">
                                        <path
                                            d="M5.662 23l-5.369-5.365c-.195-.195-.293-.45-.293-.707 0-.256.098-.512.293-.707l14.929-14.928c.195-.194.451-.293.707-.293.255 0 .512.099.707.293l7.071 7.073c.196.195.293.451.293.708 0 .256-.097.511-.293.707l-11.216 11.219h5.514v2h-12.343zm3.657-2l-5.486-5.486-1.419 1.414 4.076 4.072h2.829zm.456-11.429l-4.528 4.528 5.658 5.659 4.527-4.53-5.657-5.657z"/>
                                    </svg>
                                </button>
                                <div class="col-span-4">
                                    <div id="muestra2" class="border-2 border-black p-5 m-2 bg-white col-span-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="border-4 border-black flex justify-center items-center bg-gray-900">
                            <div>
                                <img :src="`${asset_images}/dog/motas1.gif`" width="100" alt="">
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
