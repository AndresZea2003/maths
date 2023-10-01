@extends('layouts.app')

@section('main')
{{--    <actividad-15c asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-15.home')}}" route_next="{{route('normal.level-15.d')}}" asset_images="{{asset('images')}}"></actividad-15c>--}}


<layout-sudoku
        :number_of_activities="{{ 8 }}"
        :activity_number="{{ 1 }}"
        planet_1="{{ asset('images/planetas/tierra.svg') }}"
        planet_2="{{ asset('images/planetas/rojo.svg') }}"
        item_1="{{ asset('images/animales/leon.jpg') }}"
        item_2="{{ asset('images/animales/cocodrilo.jpg') }}"
        item_3="{{ asset('images/animales/elefante.jpg') }}"
        color_1=""
        color_2=""
        color_3=""
        icon_1="icon-blue"
        icon_2="icon-yellow"
        icon_3="icon-red1"
        sound_item_1="{{asset('audio/voz1/animals/the/ElLeon.m4a')}}"
        sound_item_2="{{asset('audio/voz1/animals/the/ElCocodrilo.m4a')}}"
        sound_item_3="{{asset('audio/voz1/animals/the/ElElefante.m4a')}}"
        the_sound_item_1="{{asset('audio/voz1/colors/the/ElColorAzul.m4a')}}"
        the_sound_item_2="{{asset('audio/voz1/figures/the/ElCuadrado.m4a')}}"
        the_sound_item_3="{{asset('audio/voz1/letters/the/LaLetraC.m4a')}}"
        activity_description="Aqui la descripcion de la actividad"
        audio_win="{{asset('audio/voz1/win/fantastico1.m4a')}}"
        bg_color_activity="bg-orange-500"
        border_color_activity="border-orange-800"
        palette_text="MIXTO"
        asset_videos="{{asset('videos')}}"
        asset_audio="{{asset('audio')}}"
        route_back="{{route('normal.level-1.home')}}"
        route_next="{{route('normal.test1')}}"
        asset_images="{{asset('images')}}"
        :sudoku_size="{{ 3 }}"
        introduction_audio_1="{{asset('audio/voz1/permutaciones/vamoscolores.m4a')}}"
        caja_1=""
        caja_2=""
        caja_3=""
        caja_4=""
        caja_5=""
        caja_6=""
        caja_7=""
        caja_8=""
        caja_9=""
        :interactive_array="[]"
        :interactive_array_solution="[]"
    >
    </layout-sudoku>
@endsection
