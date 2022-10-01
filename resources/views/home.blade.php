@extends('layouts.app')

@section('main')
    <div class="h-full bg-gray-200">
        <div class="container mx-auto rounded-md">
            <div class="font-bold text-xl bg-gray-700 px-5 py-5 mx-5 shadow-2xl rounded-b-lg text-gray-300">Matematicas - Inicio
            </div>
        </div>
        <div class="container mx-auto mt-5 mb-10 rounded-md px-5 py-5">
            <div class="border-4 border-green-400 bg-green-200 flex justify-center py-5 rounded-md">
                <div class="flex-col">
                    <div class="flex justify-center">
                        <span class="text-red-600 font-bold text-4xl">Mati&nbsp</span>
                        <span class="font-bold text-4xl">y&nbsp</span>
                        <span class="text-blue-600 font-bold text-4xl">Motas</span>
                    </div>
                    <div class="flex justify-center mt-5">
                        <a href="{{route('levels')}}">
                            <button
                            class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">
                            <span class="font-bold">Jugar!</span>
                        </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-2 mt-5">
                <div class="bg-gray-300 p-5 border-black border-2">
                    <div class="font-bold text-2xl flex items-center">
                        <div class="h-7 w-7">
                            <bars-3-icon/>
                        </div>
                        <span>Menu</span>
                    </div>
                    <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-5 mt-10">
                        <div class="bg-red-300 px-2 py-8 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">
                            <div>Configuracion</div>
                        </div>
                        <div class="bg-red-300 px-2 py-8 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">
                            <div>Niveles</div>
                        </div>
                        <div class="bg-red-300 px-2 py-8 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300 flex justify-center font-bold">
                            <div>Ayuda</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-300 border-black border-2">
                    <div>
                        <div class="flex justify-center">
                            <span class="text-red-600 font-bold text-2xl">Mati&nbsp</span>
                            <span class="font-bold text-2xl">y&nbsp</span>
                            <span class="text-blue-600 font-bold text-2xl">Motas</span>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img width="120" src="{{ asset('images/robot/mati.gif') }}" alt="">
{{--                        <mati-saludo width="120" asset="{{asset('images')}}"></mati-saludo>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
