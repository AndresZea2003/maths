<script setup>

const props = defineProps({
    route_back: {type: String, required: true},
    route_next: {type: String, required: true},
    asset_images: {type: String, required: true},
    asset_audio: {type: String, required: true},
    asset_videos: {type: String, required: true},
})

</script>

<template>
    <div class="flex justify-center items-center h-full bg-circles-blue">
        <div>
            <div class="flex justify-start border-blue-800 border-x-4 border-t-4 bg-blue-500 px-5 rounded-t-md">
                <div>
                    <div>
                        <span class="font-noticia text-2xl">Tutorial - Nivel 1</span>
                    </div>
                    <div>
                        <span class="font-MPlus text-white">- A continuacion se mostrara un video guia para poder realizar el nivel 1</span>
                    </div>
                </div>
            </div>
            <div class="bg-blue-200 border-blue-800 border-4 rounded-b-md p-5">
                <video controls width="900" class="border-blue-900 border-4">
                    <source :src="`${props.asset_videos}/nivel1-tutorial.mp4`" type="video/mp4">
                </video>
            </div>

            <div class="flex justify-between mt-2">
                <a :href="props.route_back">
                    <button class="bg-blue-800 px-2 py-1 text-xl border-blue-900 border-4 font-MPlus text-white">Atras
                    </button>
                </a>

                <a :href="props.route_next">
                    <button
                        class="bg-blue-800 px-2 py-1 text-xl border-blue-900 border-4 font-MPlus text-white animate-pulse">
                        Comenzar!
                    </button>
                </a>
            </div>

        </div>
    </div>
</template>
