@extends('layouts.app')

@section('main')
{{--    <actividad-16e asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-16.home')}}" route_next="{{route('normal.level-16.f')}}" asset_images="{{asset('images')}}"></actividad-16e>--}}

<layout-sudoku
        :number_of_activities="{{ 12 }}"
        :activity_number="{{ 1 }}"
        planet_1="{{ asset('images/planetas/tierra.svg') }}"
        planet_2="{{ asset('images/planetas/rojo.svg') }}"
        item_1="{{ asset('images/animales/hormiganew.svg') }}"
        item_2="{{ asset('images/animales/abejanew.svg') }}"
        item_3="{{ asset('images/animales/grillo.svg') }}"
        color_1=""
        color_2=""
        color_3=""
        icon_1="icon-blue"
        icon_2="icon-yellow"
        icon_3="icon-red1"
        sound_item_1="{{asset('audio/voz1/animals/the/LaHormiga.m4a')}}"
        sound_item_2="{{asset('audio/voz1/animals/the/LaAbeja.m4a')}}"
        sound_item_3="{{asset('audio/voz1/animals/the/ElGrillo.m4a')}}"
        the_sound_item_1="{{asset('audio/voz1/colors/the/ElColorAzul.m4a')}}"
        the_sound_item_2="{{asset('audio/voz1/figures/the/ElCuadrado.m4a')}}"
        the_sound_item_3="{{asset('audio/voz1/letters/the/LaLetraC.m4a')}}"
        activity_description="Completa el cuadro sin repetir ningun Animal en fila o en columna"
        audio_win="{{asset('audio/voz1/win/fantastico1.m4a')}}"
        bg_color_activity="bg-circles-orange"
        border_color_activity="border-orange-600"
        palette_text="ANIMALES"
        asset_videos="{{asset('videos')}}"
        asset_audio="{{asset('audio')}}"
        route_back="{{route('normal.level-16.home')}}"
        route_next="{{route('normal.level-16.b')}}"
        asset_images="{{asset('images')}}"
        :sudoku_size="{{ 3 }}"
        introduction_audio_1="{{asset('audio/voz1/sudokus/inicios/vamosimagenes.m4a')}}"
        introduction_audio_2="{{asset('audio/voz1/sudokus/inicios/ubiquemos.m4a')}}"
        caja_1="2"
        caja_2="3"
        caja_3=""
        caja_4=""
        caja_5="1"
        caja_6="2"
        caja_7="1"
        caja_8="2"
        caja_9=""
        :interactive_array="[3,9,4]"
        :interactive_array_solution="[1,3,3]"
        ok_audio_1="{{asset('audio/voz1/sudokus/oks/erafaltante.m4a')}}"
        ok_audio_2="{{asset('audio/voz1/sudokus/oks/erafaltante.m4a')}}"
        ok_audio_3="{{asset('audio/voz1/sudokus/oks/erafaltante.m4a')}}"
        ok_audio_4=""
        error_audio_1="{{asset('audio/voz1/sudokus/errors/yaseencuentra.m4a')}}"
        error_audio_2="{{asset('audio/voz1/sudokus/errors/yaseencuentra.m4a')}}"
        error_audio_3="{{asset('audio/voz1/sudokus/errors/yaseencuentra.m4a')}}"
        error_audio_4=""
        :selector_1="[1,0]"
        :selector_2="[3,3]"
        :selector_3="[2,1]"
        :selector_4="[0,0]"
    >
    </layout-sudoku>
@endsection
