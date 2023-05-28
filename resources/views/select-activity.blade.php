@extends('layouts.app')

@section('main')
    <div class="h-screen">
        <div class="flex bg-jigsaw bg-orange-300 justify-center h-full items-center">
            <div class="flex-col">
                <div
                    class="bg-yellow-300 p-5 rounded-t-lg border-orange-400 border-4 shadow-2xl flex items-center justify-between">
                    <div>
                        <div class="loader"></div>
                    </div>
                    <span
                        class="mx-20 font-bold text-2xl bg-clip-text text-transparent bg-gradient-to-r from-gray-800 to-gray-500">Muy bien!, Ahora selecciona un reto para comenzar</span>
                    <div>
                        <div class="loader"></div>
                    </div>
                </div>

                <div class="mt-5">
                    <a href="{{ route('home') }}">
                        <div class="bg-gray-400 rounded-t-lg flex justify-center select-none border-gray-500 border-4">
                            <span class="text-white font-bold text-2xl">Reto 1</span>
                        </div>
                        <div
                            class="md:flex sm:flex-col items-center hover:bg-gray-700 bg-gray-800 text-gray-200 rounded-b-lg border-gray-700 border-4 py-5">
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
                    </a>
                </div>

                <div class="mt-5">
                    <div class="bg-gray-400 rounded-t-lg flex justify-center select-none border-gray-500 border-4">
                        <span class="text-white font-bold text-2xl">Reto 2</span>
                    </div>

                    <div
                        class="md:flex sm:flex-col items-center bg-gray-500 text-gray-200 rounded-b-lg border-gray-700 border-4 pb-1">
                        <div aria-label="Orange and tan hamster running in a metal wheel" role="img"
                             class="wheel-and-hamster scale-75">
                            <div class="wheel"></div>
                            <div class="hamster">
                                <div class="hamster__body">
                                    <div class="hamster__head">
                                        <div class="hamster__ear"></div>
                                        <div class="hamster__eye"></div>
                                        <div class="hamster__nose"></div>
                                    </div>
                                    <div class="hamster__limb hamster__limb--fr"></div>
                                    <div class="hamster__limb hamster__limb--fl"></div>
                                    <div class="hamster__limb hamster__limb--br"></div>
                                    <div class="hamster__limb hamster__limb--bl"></div>
                                    <div class="hamster__tail"></div>
                                </div>
                            </div>
                            <div class="spoke"></div>
                        </div>

                        <span class="font-MPlus text-black">No disponible...</span>
                    </div>

                </div>

                <div class="flex justify-start">
                    <a href="{{route('welcome')}}">
                        <div class="mt-5 flex justify-center">
                            <span
                                class="hover:text-white hover:bg-orange-400 hover:duration-150  bg-orange-300 p-2 border-4 border-orange-400">
                                <div class="flex">
                                    <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path
                                            d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12-5.373-12-12-12-12 5.373-12 12zm7.58 0l5.988-5.995 1.414 1.416-4.574 4.579 4.574 4.59-1.414 1.416-5.988-6.006z"/></svg>
                                    </div>
                                    <div class="text-2xl flex justify-center items-center font-MPlus">
                                        &nbsp;Atras
                                    </div>
                                </div>

                            </span>
                        </div>
                    </a>
                </div>
                <div>

                    <p class="text-center text-gray-500 text-xs"> © Miguel Moreno </p>
                </div>
            </div>
            {{--        Contenido--}}
            {{--        <div class="text-red-600">Welcome</div>--}}

        </div>
@endsection
