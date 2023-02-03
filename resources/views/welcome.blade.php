@extends('layouts.app')

@section('main')
    <div class="h-screen">
        <div class="flex bg-jigsaw bg-orange-300 justify-center h-full items-center">
            <div class="flex-col">
                <div class="bg-yellow-500 p-5 rounded-t-lg border-orange-400 border-4 shadow-2xl">
                    <span
                        class="font-noticia text-6xl bg-clip-text text-transparent bg-gradient-to-r from-gray-800 to-gray-500">Experiencias logico matematicas</span>
                </div>
                <div
                    class="bg-orange-200 border-4 border-orange-400 p-5 rounded-b-lg shadow-2xl font-MPlus grid grid-cols-2">
                    <div>
                        <span class="text-4xl">Bienvenido!</span><br>
                        Practiquemos
                        <span class="text-xl">Matematicas</span>
                        juntos de una forma divertida<br>
                    </div>

                    <div class="loadingspinner">
                        <div id="square1"></div>
                        <div id="square2"></div>
                        <div id="square3"></div>
                        <div id="square4"></div>
                        <div id="square5"></div>
                    </div>


                    <div class="col-span-2">

                        {{--                        <div>--}}
                        {{--                        <div class="loader"></div>--}}
                        {{--                    </div>--}}

                        {{--                        <a href="{{route('home')}}">--}}
                        {{--                            <div class="mt-5 flex justify-center">--}}
                        {{--                            <span--}}
                        {{--                                class="hover:text-gray-300 hover:bg-orange-400 hover:duration-150  bg-orange-300 p-2 border-4 border-orange-400">Jugar</span>--}}
                        {{--                            </div>--}}
                        {{--                        </a>--}}

                        <div class="grid grid-cols-3">
                            <div class="mt-5 flex justify-center">
                            <span
                                class="hover:text-white hover:bg-orange-400 hover:duration-150  bg-orange-300 p-2 border-4 border-orange-400">
                                <div>
                                    <div class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                             viewBox="0 0 24 24"><path
                                                d="M12.324 7.021l.154.345c.237-.041.52-.055.847-.025l.133.577c-.257-.032-.53-.062-.771-.012l-.092.023c-.464.123-.316.565.098.672.682.158 1.494.208 1.815.922.258.578-.041.973-.541 1.163l.154.346-.325.068-.147-.329c-.338.061-.725.053-1.08-.041l-.1-.584c.294.046.658.087.938.03l.186-.06c.333-.165.231-.582-.264-.681-.367-.083-1.342-.021-1.705-.831-.205-.458-.053-.936.535-1.154l-.161-.361.326-.068m3.82 1.614c-.706-1.648-2.681-2.751-4.409-2.463-1.728.288-2.557 1.857-1.85 3.506.746 1.739 2.888 2.853 4.651 2.414 1.562-.388 2.28-1.887 1.608-3.457zm4.05-5.635l3.766 8.233c-5.433 4.223-12.654-.038-17.951 4.461l-3.766-8.233c4.944-4.779 11.773-.45 17.951-4.461zm3.806 12.014c-6.857 3.939-12.399-1.424-19.5 5.986l-4.5-9.964 1.402-1.462 3.807 8.401-.002.008c7.445-5.592 11.195-1.175 18.109-4.561.294.647.565 1.33.684 1.592z"/></svg>
                                    </div>
                                    <div>
                                        Comprar licencia
                                    </div>
                                </div>
                            </span>
                            </div>
                            <div class="flex justify-center">
                                <a href="{{route('select-activity')}}">
                                    <div class="mt-5 flex justify-center">
                            <span
                                class="hover:text-white hover:bg-orange-400 hover:duration-150  bg-orange-300 p-2 border-4 border-orange-400">
                                <div class="flex">
                                    <div class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                             viewBox="0 0 24 24"><path
                                                d="M10.149 7.381c-1.482-.008-3.343.795-4.763 2.214-.541.541-1.019 1.173-1.386 1.882 1.281-.969 2.647-1.273 4.247-.375.471-1.245 1.099-2.512 1.902-3.721zm8.477 8.461c-1.313.858-2.604 1.478-3.723 1.914.897 1.6.594 2.964-.376 4.244.712-.367 1.343-.844 1.884-1.386 1.425-1.423 2.229-3.288 2.215-4.772zm5.329-13.805c-.357-.025-.707-.037-1.051-.037-7.451 0-11.692 5.678-13.235 10.245l4.095 4.094c4.702-1.685 10.236-5.767 10.236-13.136 0-.38-.015-.768-.045-1.166zm-8.565 8.579c-.339-.338-.339-.886 0-1.224.338-.338.886-.338 1.224 0 .339.338.339.886 0 1.224-.339.339-.886.339-1.224 0zm2.449-2.448c-.677-.676-.677-1.772 0-2.449s1.773-.676 2.449 0c.677.676.677 1.772 0 2.449-.676.676-1.772.676-2.449 0zm-6.089 8.723c-1.469 1.797-3.812 3.084-6.126 3.084-3.2 0-5.624-2.354-5.624-5.311 0-1.485.611-3.122 2.043-4.689-3.201 5.137 1.532 9.831 7.101 4.31l.765.765c-.91 1.061-1.84 1.8-3.149 2.461 1.344.057 3.049-.568 4.195-1.416l.795.796z"/></svg>
                                    </div>
                                    <div class="text-2xl flex justify-center items-center">
                                        &nbsp;Jugar!
                                    </div>
                                </div>

                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="mt-5 flex justify-center">
                            <span
                                class="hover:text-white hover:bg-orange-400 hover:duration-150  bg-orange-300 p-2 border-4 border-orange-400">
                                <div>
                                    <div class="flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"><path
                                                d="M11.266 7l12.734-2.625-.008-.042-1.008-4.333-21.169 4.196c-1.054.209-1.815 1.134-1.815 2.207v14.597c0 1.657 1.343 3 3 3h18c1.657 0 3-1.343 3-3v-14h-12.734zm8.844-5.243l2.396 1.604-2.994.595-2.398-1.605 2.996-.594zm-5.898 1.169l2.4 1.606-2.994.595-2.401-1.607 2.995-.594zm-5.904 1.171l2.403 1.608-2.993.595-2.406-1.61 2.996-.593zm-2.555 5.903l2.039-2h3.054l-2.039 2h-3.054zm4.247 10v-7l6 3.414-6 3.586zm4.827-10h-3.054l2.039-2h3.054l-2.039 2zm6.012 0h-3.054l2.039-2h3.054l-2.039 2z"/></svg>
                                    </div>
                                    <div class="flex justify-center items-center mt-1">
                                        Probar demo
                                    </div>
                                </div>
                            </span>
                            </div>

                        </div>
                    </div>

                </div>
                <p class="text-center text-gray-500 text-xs"> © Miguel Moreno </p>
            </div>
        </div>
        {{--        Contenido--}}
        {{--        <div class="text-red-600">Welcome</div>--}}

    </div>
@endsection
