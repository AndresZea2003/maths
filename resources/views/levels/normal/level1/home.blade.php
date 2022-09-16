@extends('layouts.app')

@section('main')
    <div class="min-h-full bg-blue-900">
        <div class="bg-gray-700 container mx-auto px-5 py-5 shadow-2xl rounded-md">
            <div class="font-bold text-xl">Matematicas - Nivel 1</div>
        </div>
        <div class="bg-gray-300 container mx-auto mb-10 mt-10 shadow-2xl rounded-md px-5 py-5">
            <div class="bg-blue-400 flex-col pt-5">
                <div class="flex justify-center">
                    <div class="font-bold text-2xl text-gray-600">Nivel Azul</div>
                </div>
                <div class="mt-5 gap-5 grid md:grid-cols-4 sm:grid-cols-1 mx-5">
                    <a href="{{route('normal.level-1.a')}}">
                        <div
                            class="bg-blue-300 border-blue-400  p-5 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Nivel 1
                                    </div>
                                </div>
                                <div class="w-20">
                                    <mati-1 asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div
                        class="bg-blue-300 border-blue-400 p-5 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                        <div>
                            <div class="flex justify-center">
                                <div class="font-bold text-2xl">
                                    Nivel 2
                                </div>
                            </div>
                            <div class="w-20">
                                <mati-1 asset="{{asset('images')}}"></mati-1>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-blue-300 border-blue-400 p-5 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                        <div>
                            <div class="flex justify-center">
                                <div class="font-bold text-2xl">
                                    Nivel 3
                                </div>
                            </div>
                            <div class="w-20">
                                <mati-1 asset="{{asset('images')}}"></mati-1>
                            </div>
                        </div>
                    </div>
                    <div
                        class="bg-yellow-300 border-yellow-400 p-5 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                        <div>
                            <div class="flex justify-center">
                                <div class="font-bold text-2xl">
                                    Nivel 4
                                </div>
                            </div>
                            <div class="w-20">
                                <mati-1 asset="{{asset('images')}}"></mati-1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-5">
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
