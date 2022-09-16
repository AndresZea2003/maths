@extends('layouts.app')

@section('main')
    <div class="h-full bg-blue-600">
        <div class="bg-gray-400 container mx-auto px-5 py-5 shadow-2xl rounded-md">
            <div class="font-bold text-xl">Matematicas - Inicio</div>
        </div>
        <div class="bg-gray-100 container mx-auto mt-5 mb-10 shadow-2xl rounded-md px-2 py-5">
            <div class="border-4 border-black bg-green-200 flex justify-center">
                <div class="flex-col">
                    <div class="flex justify-center">
                        <span class="text-red-600 font-bold text-2xl">Mati&nbsp</span>
                        <span class="font-bold text-2xl">y&nbsp</span>
                        <span class="text-blue-600 font-bold text-2xl">Motas</span>
                    </div>
                    <div class="flex justify-center my-2">
                        <a href="{{route('levels')}}">
                            <button class="bg-green-400 px-2 py-1 rounded-md">Jugar!</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-2 mt-5">
                <div class="bg-red-300 p-5">
                    <div class="font-bold text-2xl flex items-center">
                        <div class="h-7 w-7">
                            <bars-3-icon/>
                        </div>
                        <span>Menu</span>
                    </div>
                    <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-5 mt-2">
                        <c-button></c-button>
                        <div class="bg-violet-900 p-5 rounded-md shadow-md">
                            <div>Niveles</div>
                        </div>
                        <div class="bg-violet-900 p-5 rounded-md shadow-md">
                            <div>Ayuda</div>
                        </div>
                    </div>
                </div>
                <div class="bg-red-300">
                    <div>
                        <div class="flex justify-center">
                            <span class="text-red-600 font-bold text-2xl">Mati&nbsp</span>
                            <span class="font-bold text-2xl">y&nbsp</span>
                            <span class="text-blue-600 font-bold text-2xl">Motas</span>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <mati-saludo width="120" asset="{{asset('images')}}"></mati-saludo>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
