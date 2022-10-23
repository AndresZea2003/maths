@extends('layouts.app')

@section('main')
    <div
        class="h-full bg-space">
        <div class="container mx-auto rounded-md">
            <div class="font-bold text-xl bg-gray-700 px-5 py-5 mx-5 shadow-2xl rounded-b-lg text-gray-300">Matematicas
                - Inicio
            </div>
        </div>
        <div class="container mx-auto mt-5 mb-10 rounded-md px-5 py-5">
            <div class="border-4 border-green-400 bg-funSpace flex justify-center py-5 rounded-md">
                <div class="flex-col">
                    <div class="flex justify-center font-MPlus">
                        <span class="text-red-600 font-bold text-4xl">Mati&nbsp</span>
                        <span class="font-bold text-4xl">y&nbsp</span>
                        <span class="text-blue-600 font-bold text-4xl">Motas</span>
                    </div>
                    <div class="flex justify-center m-5">
                        <a href="{{route('levels')}}">
                            <playButton class="font-bold">Comenzar!</playButton>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-2 mt-5">
                <div class="bg-blue-900 p-5 border-black border-2 rounded-md">
                    <div class="bg-red-200 h-full p-5 rounded-md shadow-2xl">
                        <div class="font-bold text-2xl flex items-center">
                            <div class="h-7 w-7">
                                <bars-3-icon/>
                            </div>
                            <span>Menu</span>
                        </div>
                        <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-5 mt-5">
                            <div
                                class="bg-red-300 px-2 py-5 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">
                                <div>Configuracion</div>
                            </div>
                            <div
                                class="bg-red-300 px-2 py-5 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">
                                <div>Niveles</div>
                            </div>
                            <div
                                class="bg-red-300 px-2 py-5 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">
                                <div>Ayuda</div>
                            </div>
                            <div
                                class="bg-red-300 px-2 py-5 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">
                                <div>Mas..</div>
                            </div>
                            <div
                                class="bg-red-300 px-2 py-5 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">
                                <div>Mas..</div>
                            </div>
                            <div
                                class="bg-red-300 px-2 py-5 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">
                                <div>Mas..</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-blue-900 p-5 border-black border-2 rounded-md">
                    <div class="bg-marte p-5 rounded-md shadow-2xl">
                        <div>
                            <span class="font-MPlus font-bold text-xl text-gray-300">Rapido!, Mati y Motas necesitan tu ayuda para salvar la galaxia..</span>
                            <div class="grid grid-cols-3">
                                <div>
                                    <img src="{{asset('images/robot/mati.gif')}}" width="100" alt="nube">
                                </div>
                                <div>
                                    <img src="{{asset('images/dog/motas.gif')}}" width="100" alt="nube">
                                </div>
                                <div class="flex justify-center">
                                    <img src="{{asset('images/nube/nube1.gif')}}" width="150" alt="nube">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
