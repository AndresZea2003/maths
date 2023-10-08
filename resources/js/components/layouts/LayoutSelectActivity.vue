<script setup>
import {HomeIcon} from "@heroicons/vue/24/solid"

const props = defineProps({
    level_number: {type: Number, required: true},
    asset_images: {type: String, required: true},
    route_back: {type: String, required: true},
    number_of_activities: {type: Number, required: true},
    cols: {type: Number, required: true},
    bg_color: {type: String, required: true},
    bg_color_activity: {type: String, required: true},
    border_color_activity: {type: String, required: true},
    base_url: {type: String, required: true},

    activity_number: {type: Number, required: true},
    activity_description: {type: String, required: true},

    asset_audio: {type: String, required: true}
})

const abecedario = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

</script>
<template>
    <div class="min-h-full bg-space">
        <div class="container mx-auto">
            <div class="font-bold text-xl bg-gray-700 px-5 py-5 shadow-2xl text-gray-300 rounded-b-lg mx-5">Matematicas
                - Nivel {{ props.level_number }}
            </div>
        </div>
        <div class="container mx-auto mb-10 mt-5 rounded-md px-5 ">
            <div :class="`${props.bg_color} flex-col shadow-2xl rounded-md border-4 ${props.border_color_activity}`">
                <div class="flex justify-center">
                    <div class="font-bold text-2xl text-gray-600">Nivel {{ props.level_number }}</div>
                </div>
                <div :class="`gap-5 grid md:${props.cols} grid-cols-1 mx-5`">
                    <a v-for="i in props.number_of_activities" :key="i" :id="`caja${i}`" :href="`${props.base_url}/normal/level-${props.level_number}/${abecedario[i - 1]}`">
                        <div
                            :class="`${props.bg_color_activity} ${props.border_color_activity} p-2 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer`">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad {{ i }}
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <img :src="`${props.asset_images}/dog/motas1.gif`" width="120" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="px-5 py-1">
                    <a :href="props.route_back">
                        <button
                            class="bg-stone-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">
                            <home-icon class="h-7 w-7"></home-icon>
                            <span class="font-bold">&nbspVolver</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
