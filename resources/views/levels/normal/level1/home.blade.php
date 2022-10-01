@extends('layouts.app')

@section('main')
    <div class="min-h-full bg-gray-200">
        <div class="container mx-auto">
            <div class="font-bold text-xl bg-gray-700 px-5 py-5 shadow-2xl  rounded-b-lg mx-5">Matematicas - Nivel 1</div>
        </div>
        <div class="container mx-auto mb-10 mt-5 rounded-md px-5 ">
            <div class="bg-blue-400 flex-col pt-5 shadow-2xl rounded-md border-4 border-blue-600">
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
                    <a href="{{route('normal.level-1.b')}}">
                        <div
                            class="bg-blue-300 border-blue-400  p-5 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Nivel 2
                                    </div>
                                </div>
                                <div class="w-20">
                                    <img src="{{ asset('images/robot/1A.gif') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-1.c')}}">
                        <div
                            class="bg-blue-300 border-blue-400 py-4  px-5 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Nivel 3
                                    </div>
                                </div>
                                <div class="w-28">
                                    <img src="{{ asset('images/robot/mota1c.gif') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-1.d')}}">
                        <div
                            class="bg-violet-500 border-violet-600 px-5 py-4 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Nivel 4
                                    </div>
                                </div>
                                <div class="w-28">
                                    <img src="{{ asset('images/robot/mati2e-min.gif') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
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
