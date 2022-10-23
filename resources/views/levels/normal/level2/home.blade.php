@extends('layouts.app')

@section('main')
    <div class="min-h-full bg-space">
        <div class="container mx-auto">
            <div class="font-bold text-xl bg-gray-600 px-5 py-5 shadow-2xl text-gray-300 rounded-b-lg mx-5">Matematicas - Nivel 2</div>
        </div>
        <div class="container mx-auto mb-10 mt-5 rounded-md px-5 ">
            <div class="bg-orange-400 flex-col shadow-2xl rounded-md border-4 border-orange-600">
                <div class="flex justify-center">
                    <div class="font-bold text-2xl text-orange-800">Nivel Naranja</div>
                </div>
                <div class="gap-1 grid md:grid-cols-5 sm:grid-cols-1 mx-5">
                    <a href="{{route('normal.level-2.a')}}">
                        <div
                            class="bg-orange-300 border-orange-400 px-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 1
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <img width="150" src="{{ asset('images/robot/mati2-min.gif') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.b')}}">
                        <div
                            class="bg-orange-300 border-orange-400 px-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 2
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <img width="90" src="{{ asset('images/robot/mati2b-min.gif') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.c')}}">
                        <div
                            class="bg-orange-300 border-orange-400  p-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 3
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <img width="104" src="{{ asset('images/robot/mota2b-min.gif') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.d')}}">
                        <div
                            class="bg-orange-300 border-orange-400  px-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 4
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <img width="102" src="{{ asset('images/robot/mati2d-min.gif') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div
                            class="bg-yellow-300 border-yellow-400 px-1 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 5
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <img width="100" src="{{ asset('images/robot/mati2e-min.gif') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.e')}}">
                        <div
                            class="bg-orange-300 border-orange-400  p-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 6
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <mati-1 class="w-16" asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.f')}}">
                        <div
                            class="bg-orange-300 border-orange-400  p-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 7
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <mati-1 class="w-16" asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.g')}}">
                        <div
                            class="bg-orange-300 border-orange-400  p-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 8
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <mati-1 class="w-16" asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.h')}}">
                        <div
                            class="bg-orange-300 border-orange-400  p-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 9
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <mati-1 class="w-16" asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div
                            class="bg-yellow-300 border-yellow-400 p-1 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 10
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <mati-1 class="w-16" asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.i')}}">
                        <div
                            class="bg-orange-300 border-orange-400  p-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 11
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <mati-1 class="w-16" asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.j')}}">
                        <div
                            class="bg-orange-300 border-orange-400  p-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 12
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <mati-1 class="w-16" asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.k')}}">
                        <div
                            class="bg-orange-300 border-orange-400  p-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 13
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <mati-1 class="w-16" asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('normal.level-2.l')}}">
                        <div
                            class="bg-orange-300 border-orange-400  p-1 rounded-md shadow-2xl border-4 flex-col hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 14
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <mati-1 class="w-16" asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div
                            class="bg-yellow-300 border-yellow-400 p-1 rounded-md shadow-2xl border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>
                                <div class="flex justify-center">
                                    <div class="font-bold text-2xl">
                                        Actividad 15
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <mati-1 class="w-16" asset="{{asset('images')}}"></mati-1>
                                </div>
                            </div>
                        </div>
                    </a>
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
