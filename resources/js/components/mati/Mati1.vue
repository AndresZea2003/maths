<script setup>

import {ref} from "vue";

const props = defineProps({
    asset: {type:String, required:true},
})

let img1 = ref(props.asset + '/robot/mati_act1.gif')


</script>

<template>
    <img :src="img1" alt="">
</template>
