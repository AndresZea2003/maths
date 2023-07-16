@extends('layouts.app')

@section('main')
{{--    <div--}}
{{--        class="h-full bg-space">--}}
{{--        <div class="container mx-auto rounded-md">--}}
{{--            <div--}}
{{--                class="font-bold text-xl bg-bathroom px-5 py-5 mx-5 shadow-2xl rounded-b-lg flex justify-between items-center border-gray-600 border-b-4 border-x-4">--}}

{{--                <span class="font-noticia text-gray-300">--}}
{{--                    Matematicas--}}
{{--                - Reto 1 - Inicio--}}
{{--                </span>--}}

{{--                <div class="flex justify-start">--}}
{{--                    <a href="{{route('select-activity')}}">--}}
{{--                        <div class="flex justify-center">--}}
{{--                            <span--}}
{{--                                class="hover:text-white text-white hover:bg-gray-500 hover:duration-150  bg-gray-600 p-2 border-4 border-gray-800">--}}
{{--                                <div class="flex">--}}
{{--                                    <div class="flex justify-center items-center">--}}
{{--                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"--}}
{{--                                         clip-rule="evenodd"><path--}}
{{--                                            d="M11 21h8v-2l1-1v4h-9v2l-10-3v-18l10-3v2h9v5l-1-1v-3h-8v18zm10.053-9l-3.293-3.293.707-.707 4.5 4.5-4.5 4.5-.707-.707 3.293-3.293h-9.053v-1h9.053z"/></svg>--}}
{{--                                    </div>--}}
{{--                                    <div class="text-xl flex justify-center items-center font-MPlus">--}}
{{--                                        &nbsp;Salir--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container mx-auto mt-5 mb-10 rounded-md px-5 py-5">--}}
{{--            <div class="border-4 border-green-400 bg-funSpace flex justify-center pt-2 pb-5 rounded-md">--}}
{{--                <div class="flex-col">--}}
{{--                    <span class="font-MPlus">--}}
{{--                        Salva los--}}
{{--                        <span class="text-xl text-yellow-700">colores</span>--}}
{{--                        con--}}
{{--                    </span>--}}
{{--                    <div class="flex justify-center font-MPlus">--}}
{{--                        <span class="text-red-600 font-bold text-4xl">Mati&nbsp</span>--}}
{{--                        <span class="font-bold text-4xl">y&nbsp</span>--}}
{{--                        <span class="text-blue-600 font-bold text-4xl">Motas</span>--}}
{{--                    </div>--}}

{{--                    <a href="{{route('levels')}}">--}}
{{--                        <button--}}
{{--                            class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-lg transition mt-2--}}
{{--                        duration-300 ease-in-out transform hover:scale-105 text-white border-4 border-green-700 flex items-center">--}}
{{--                            <span class="text-2xl font-bold">&nbsp;Comenzar!&nbsp;</span>--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green"--}}
{{--                                 viewBox="0 0 24 24">--}}
{{--                                <path--}}
{{--                                    d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-3 17v-10l9 5.146-9 4.854z"/>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-2 mt-5">--}}
{{--                <div class="bg-dominos p-5 border-gray-600 border-4 rounded-md">--}}
{{--                    <div class="h-full p-5 rounded-md">--}}
{{--                        <div class="font-bold text-2xl flex items-center">--}}
{{--                            <div class="h-7 w-7 text-white">--}}
{{--                                <bars-3-icon/>--}}
{{--                            </div>--}}
{{--                            <span class="text-white">Menu</span>--}}
{{--                        </div>--}}
{{--                        <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-5 mt-5">--}}
{{--                            <div--}}
{{--                                class="bg-gray-400 px-2 py-5 rounded-md border-gray-500 border-4 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">--}}
{{--                                <div>Configuracion</div>--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="bg-gray-400 px-2 py-5 rounded-md border-gray-500 border-4 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">--}}
{{--                                <div>Niveles</div>--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="bg-gray-400 px-2 py-5 rounded-md border-gray-500 border-4 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">--}}
{{--                                <div>Ayuda</div>--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="bg-gray-400 px-2 py-5 rounded-md border-gray-500 border-4 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">--}}
{{--                                <div>Mas..</div>--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="bg-gray-400 px-2 py-5 rounded-md border-gray-500 border-4 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">--}}
{{--                                <div>Mas..</div>--}}
{{--                            </div>--}}
{{--                            <div--}}
{{--                                class="bg-gray-400 px-2 py-5 rounded-md border-gray-500 border-4 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">--}}
{{--                                <div>Mas..</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="bg-dominos p-5 border-gray-600 border-4 rounded-md">--}}
{{--                    <div class="bg-marte p-5 rounded-md shadow-2xl">--}}
{{--                        <div>--}}
{{--                            <span class="font-MPlus font-bold text-xl text-gray-300">Rapido!, Mati y Motas necesitan tu ayuda para salvar la galaxia..</span>--}}
{{--                            <div class="grid grid-cols-3">--}}
{{--                                <div>--}}
{{--                                    <img src="{{asset('images/robot/matiQuieto.gif')}}" width="100" alt="nube">--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <img src="{{asset('images/dog/motas.gif')}}" width="100" alt="nube">--}}
{{--                                </div>--}}
{{--                                <div class="flex justify-center">--}}
{{--                                    <img src="{{asset('images/nube/nube1.gif')}}" width="150" alt="nube">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <home-view asset_audio="{{asset('audio')}}" asset_images="{{asset('images')}}"></home-view>
@endsection
