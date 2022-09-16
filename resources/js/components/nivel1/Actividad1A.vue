<script setup>
import {HomeIcon} from "@heroicons/vue/20/solid";

const props = defineProps({
    route_back: {type: String, required: true},
    route_next: {type: String, required: true}
})
</script>

<template>
    <div class="min-h-full bg-blue-900">
        <div class="bg-gray-700 container mx-auto px-5 py-5 shadow-2xl rounded-md">
            <div class="font-bold text-xl">Matematicas - Nivel 1</div>
        </div>
        <div class="bg-gray-300 container mx-auto mb-10 shadow-2xl rounded-md px-5 py-5">
            <div class="bg-blue-400 flex-col pb-5">
                <div class="mx-5 py-5">
                    <div>
                        <span class="font-bold">Actividad 1 -</span>
                        <span> Replica los colores como se muestra en la imagen izquierda</span>
                    </div>
                </div>
                <div class="mx-5 grid md:grid-cols-4 gap-5">
                    <div class="bg-white border-4 border-blue-600 rounded-md flex justify-center py-5">
                        <div class="flex-col grid gap-5">
                            <div class="grid grid-cols-2">
                                <div class="p-6 border-black border-2 bg-blue-600">{{ null }}</div>
                                <div class="p-6 border-black border-2 bg-green-600">{{ null }}</div>
                                <div class="p-6 border-black border-2 bg-yellow-400">{{ null }}</div>
                                <div class="p-6 border-black border-2 bg-red-600">{{ null }}</div>
                            </div>
                            <div class="grid grid-cols-2 rotate-45 my-5">
                                <div class="p-6 border-black border-2 bg-green-600">{{ null }}</div>
                                <div class="p-6 border-black border-2 bg-red-600">{{ null }}</div>
                                <div class="p-6 border-black border-2 bg-blue-600">{{ null }}</div>
                                <div class="p-6 border-black border-2 bg-yellow-400">{{ null }}</div>
                            </div>
                            <div class="grid grid-cols-2 rotate-45 my-5">
                                <div class="p-6 border-black border-2 bg-yellow-400">{{ null }}</div>
                                <div class="p-6 border-black border-2 bg-blue-600">{{ null }}</div>
                                <div class="p-6 border-black border-2 bg-red-600">{{ null }}</div>
                                <div class="p-6 border-black border-2 bg-green-600">{{ null }}</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-white border-4 border-blue-600 rounded-md py-5 md:col-span-3 grid md:grid-cols-3">
                        <div class="flex justify-center bg-red-500">
                            <div class="flex-col grid gap-5">
                                <div class="grid grid-cols-2">
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-2 rotate-45 my-5">
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                </div>
                                <div class="grid grid-cols-2 rotate-45 my-5">
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                    <div class="p-6 border-black border-2 cursor-cell hover:bg-gray-300">{{ null }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-5 pt-2">
                        <a :href="props.route_back">
                            <button
                                class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">
                                <HomeIcon class="h-7 w-7"></HomeIcon>
                                <span class="font-bold">&nbspVolver</span>
                            </button>
                        </a>
                    </div>
                    <div class="px-5 pt-2 flex justify-end">
                        <div>
                            <a :href="props.route_next">
                                <button
                                    class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">
                                    <HomeIcon class="h-7 w-7"></HomeIcon>
                                    <span class="font-bold">&nbspSiguiente</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
