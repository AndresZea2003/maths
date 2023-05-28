@extends('layouts.app')

@section('main')
    <div class="min-h-full bg-space">
        <div class="container mx-auto rounded-md">
            <div class="font-bold text-xl bg-gray-600 px-5 py-5 mx-5 shadow-2xl rounded-b-lg text-gray-300">Matematicas
                - Niveles
            </div>
        </div>
        <div class="container mx-auto mb-10 rounded-md px-5 py-5">
            <div class="bg-gray-400 flex-col pt-5 rounded-md border-4 border-gray-600 shadow-2xl">
                <div class="bg-gray-900 flex justify-center grid md:grid-cols-3 sm:grid-cols-1 mx-5">
                    <div class="flex md:justify-end justify-center">
                        {{--                        <div class="w-20">--}}
                        {{--                            <mati-saludo asset="{{asset('images')}}"></mati-saludo>--}}
                        {{--                        </div>--}}
                    </div>
                    <div
                        class="md:flex sm:flex-col items-center bg-gray-800 text-gray-200 rounded-md border-gray-700 border-4">
                        <div class="flex justify-center">
                            <div>Salva los &nbsp</div>
                        </div>
                        <div class="flex justify-center pl-3">
                            <div class="spinner">
                                <span class="text-blue-600">C</span>
                                <span class="text-red-600">O</span>
                                <span class="text-yellow-400">L</span>
                                <span class="text-green-600">O</span>
                                <span class="text-blue-600">R</span>
                                <span class="text-red-600">E</span>
                                <span class="text-yellow-400">S</span>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div>
                                <span>con&nbsp</span>
                                <span class="text-red-600 font-bold">Mati&nbsp</span>
                                <span>y&nbsp</span>
                                <span class="text-blue-600 font-bold">Motas&nbsp</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex md:justify-start justify-center">
                        {{--                        <div class="w-20">--}}
                        {{--                            <mati-saludo asset="{{asset('images')}}"></mati-saludo>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="flex justify-center mt-5">
                    <div class="font-bold text-2xl text-gray-600">Niveles</div>
                </div>
                <div class="mt-5 gap-5 grid md:grid-cols-6 sm:grid-cols-1 mx-5">
                    <a href="{{route('normal.level-1.home')}}">
                        <div
                            class="bg-blue-300 p-5 rounded-md shadow-2xl border-blue-400 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>Nivel 1</div>
                        </div>
                    </a>
                    <a href="{{ route('normal.level-2.home') }}">
                        <div
                            class="bg-orange-300 p-5 rounded-md shadow-2xl border-orange-400 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>Nivel 2</div>
                        </div>
                    </a>
                    <a href="{{ route('normal.level-3.home') }}">
                        <div
                            class="bg-green-300 p-5 rounded-md shadow-2xl border-green-400 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>Nivel 3</div>
                        </div>
                    </a>
                    <a href="{{ route('normal.level-4.home') }}">
                        <div
                            class="bg-violet-300 p-5 rounded-md shadow-2xl border-violet-400 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>Nivel 4</div>
                        </div>
                    </a>
                    <a href="{{ route('normal.level-5.home') }}">
                        <div
                            class="bg-red-300 p-5 rounded-md shadow-2xl border-red-400 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>Nivel 5</div>
                        </div>
                    </a>
                    <a>
                        <div
                            class="bg-gray-200 p-5 rounded-md shadow-2xl border-gray-300 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div class="font-bold">Proximamente...</div>
                        </div>
                    </a>
                    <a href="{{ route('normal.level-7.home') }}">
                        <div
                            class="bg-stone-400 p-5 rounded-md shadow-2xl border-stone-500 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>Nivel 7</div>
                        </div>
                    </a>
                    <a>
                        <div
                            class="bg-gray-200 p-5 rounded-md shadow-2xl border-gray-300 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div class="font-bold">Proximamente...</div>
                        </div>
                    </a>
                    <a href="{{ route('normal.level-9.home') }}">
                        <div
                            class="bg-rose-200 p-5 rounded-md shadow-2xl border-rose-300 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>Nivel 9</div>
                        </div>
                    </a>
                    <a>
                        <div
                            class="bg-gray-200 p-5 rounded-md shadow-2xl border-gray-300 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div class="font-bold">Proximamente...</div>
                        </div>
                    </a>
                    <a href="{{ route('normal.level-11.home') }}">
                        <div
                            class="bg-yellow-200 p-5 rounded-md shadow-2xl border-yellow-400 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div>Nivel 11</div>
                        </div>
                    </a>
                    <a>
                        <div
                            class="bg-gray-200 p-5 rounded-md shadow-2xl border-gray-300 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div class="font-bold">Proximamente...</div>
                        </div>
                    </a>
                    <a>
                        <div
                            class="bg-gray-200 p-5 rounded-md shadow-2xl border-gray-300 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div class="font-bold">Proximamente...</div>
                        </div>
                    </a>
                    <a>
                        <div
                            class="bg-gray-200 p-5 rounded-md shadow-2xl border-gray-300 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div class="font-bold">Proximamente...</div>
                        </div>
                    </a>
                    <a>
                        <div
                            class="bg-gray-200 p-5 rounded-md shadow-2xl border-gray-300 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div class="font-bold">Proximamente...</div>
                        </div>
                    </a>
                    <a>
                        <div
                            class="bg-gray-200 p-5 rounded-md shadow-2xl border-gray-300 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div class="font-bold">Proximamente...</div>
                        </div>
                    </a>
                    <a>
                        <div
                            class="bg-gray-200 p-5 rounded-md shadow-2xl border-gray-300 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">
                            <div class="font-bold">Proximamente...</div>
                        </div>
                    </a>

                    {{--                    <div--}}
                    {{--                        class="bg-yellow-300 p-5 rounded-md shadow-2xl border-yellow-400 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">--}}
                    {{--                        <div>Nivel 6</div>--}}
                    {{--                    </div>--}}
                    {{--                    <a href="{{ route('normal.level-8.home') }}">--}}
                    {{--                        <div--}}
                    {{--                            class="bg-pink-300 p-5 rounded-md shadow-2xl border-pink-400 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">--}}
                    {{--                            <div>Nivel 8</div>--}}
                    {{--                        </div>--}}
                    {{--                    </a>--}}
                    {{--                    <a href="{{ route('normal.level-10.home') }}">--}}
                    {{--                        <div--}}
                    {{--                            class="bg-blue-600 p-5 rounded-md shadow-2xl border-blue-700 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">--}}
                    {{--                            <div>Nivel 10</div>--}}
                    {{--                        </div>--}}
                    {{--                    </a>--}}
                    {{--                    <a href="{{ route('normal.level-12.home') }}">--}}
                    {{--                        <div--}}
                    {{--                            class="bg-red-600 p-5 rounded-md shadow-2xl border-red-700 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">--}}
                    {{--                            <div>Nivel 12</div>--}}
                    {{--                        </div>--}}
                    {{--                    </a>--}}
                    {{--                    <a href="{{ route('normal.level-13.home') }}">--}}
                    {{--                        <div--}}
                    {{--                            class="bg-red-100 p-5 rounded-md shadow-2xl border-red-200 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">--}}
                    {{--                            <div>Nivel 13</div>--}}
                    {{--                        </div>--}}
                    {{--                    </a>--}}
                    {{--                    <a href="{{ route('normal.level-14.home') }}">--}}
                    {{--                        <div--}}
                    {{--                            class="bg-green-600 p-5 rounded-md shadow-2xl border-green-700 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">--}}
                    {{--                            <div>Nivel 14</div>--}}
                    {{--                        </div>--}}
                    {{--                    </a>--}}
                    {{--                    <a href="{{ route('normal.level-15.home') }}">--}}
                    {{--                        <div--}}
                    {{--                            class="bg-yellow-400 p-5 rounded-md shadow-2xl border-yellow-500 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">--}}
                    {{--                            <div>Nivel 15</div>--}}
                    {{--                        </div>--}}
                    {{--                    </a>--}}
                    {{--                    <a href="{{ route('normal.level-16.home') }}">--}}
                    {{--                        <div--}}
                    {{--                            class="bg-pink-600 p-5 rounded-md shadow-2xl border-pink-700 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">--}}
                    {{--                            <div>Nivel 16</div>--}}
                    {{--                        </div>--}}
                    {{--                    </a>--}}
                    {{--                    <a href="{{ route('normal.level-17.home') }}">--}}
                    {{--                        <div--}}
                    {{--                            class="bg-orange-300 p-5 rounded-md shadow-2xl border-orange-400 border-4 flex justify-center hover:scale-90 duration-300 cursor-pointer">--}}
                    {{--                            <div>Nivel 17</div>--}}
                    {{--                        </div>--}}
                    {{--                    </a>--}}
                </div>

                <div class="p-5">
                    <a href="{{route('home')}}">
                        <button
                            class="bg-red-300 px-2 py-1 rounded-md border-red-800 border-2 flex items-center hover:text-white hover:bg-gray-700 hover:scale-90 duration-300">
                            <home-icon class="h-7 w-7"></home-icon>
                            <span class="font-bold">&nbspVolver</span>
                        </button>
                    </a>
                </div>
            </div>
            {{--            <a href="">--}}
            {{--                <div--}}
            {{--                    class="bg-blue-600 p-10 rounded-lg hover:opacity-90 hover:scale-105 duration-300  hover:cursor-pointer flex justify-center">--}}
            {{--                    <span class="font-bold text-xl">Nivel 1</span>--}}
            {{--                </div>--}}
            {{--            </a>--}}
        </div>
    </div>
@endsection
