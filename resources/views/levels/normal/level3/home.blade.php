@extends('layouts.app')

@section('main')
    <div class="min-h-full bg-gray-200">
        <div class="container mx-auto">
            <div class="font-bold text-xl bg-gray-700 px-5 py-5 shadow-2xl  rounded-b-lg mx-5">Matematicas - Nivel 1
            </div>
        </div>
        <div class="container mx-auto mb-10 mt-5 rounded-md px-5 ">
            <div class="bg-green-400 flex-col shadow-2xl rounded-md border-4 border-green-600">
                <div class="flex justify-center">
                    <div class="font-bold text-2xl text-gray-600">Nivel Verde</div>
                </div>
                <div class="gap-5 grid md:grid-cols-4 sm:grid-cols-1 mx-5">
                    <a href="{{route('normal.level-1.a')}}">
                        <div
                            class="bg-green-300 border-green-400 p-2 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 1
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <motas-1 class="w-24" asset="{{asset('images')}}"></motas-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-1.a')}}">
                        <div
                            class="bg-green-300 border-green-400  p-2 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 2
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <motas-1 class="w-24" asset="{{asset('images')}}"></motas-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-1.a')}}">
                        <div
                            class="bg-green-300 border-green-400  p-2 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 3
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <motas-1 class="w-24" asset="{{asset('images')}}"></motas-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-1.a')}}">
                        <div
                            class="bg-green-300 border-green-400  p-2 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 4
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <motas-1 class="w-24" asset="{{asset('images')}}"></motas-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-1.d')}}">
                        <div
                            class="bg-green-300 border-green-400 p-2 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 5
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <motas-1 class="w-24" asset="{{asset('images')}}"></motas-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-1.a')}}">
                        <div
                            class="bg-green-300 border-green-400  p-2 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 6
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <motas-1 class="w-24" asset="{{asset('images')}}"></motas-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-1.a')}}">
                        <div
                            class="bg-green-300 border-green-400  p-2 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 7
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <motas-1 class="w-24" asset="{{asset('images')}}"></motas-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class=" rounded-md flex justify-center items-end border-green-600 border-b-4">
                        <div>
                            <div class="flex justify-center">
                                <mati-2 class="w-24" asset="{{asset('images')}}"></mati-2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-5 py-1">
                    <a href="{{route('levels')}}">
                        <button
                            class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">
                            <home-icon class="h-7 w-7"></home-icon>
                            <span class="font-bold">&nbspVolver</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    import MatiSaludo from "../../../../js/components/mati/MatiSaludo";
    export default {
        components: {MatiSaludo}
    }
</script>
