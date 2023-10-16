@extends('layouts.app')

@section('main')
{{--    <actividad-16a asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-16.home')}}" route_next="{{route('normal.level-16.b')}}" asset_images="{{asset('images')}}"></actividad-16a>--}}

<layout-sudoku
        :number_of_activities="{{ 12 }}"
        :activity_number="{{ 1 }}"
        planet_1="{{ asset('images/planetas/tierra.svg') }}"
        planet_2="{{ asset('images/planetas/rojo.svg') }}"
        item_1="{{ asset('images/cosas/cono.svg') }}"
        item_2="{{ asset('images/cosas/cilindro.svg') }}"
        item_3="{{ asset('images/cosas/esfera.svg') }}"
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
        caja_1=""
        caja_2="1"
        caja_3="2"
        caja_4="1"
        caja_5="2"
        caja_6=""
        caja_7=""
        caja_8="3"
        caja_9="1"
        :interactive_array="[1,7,6]"
        :interactive_array_solution="[3,2,3]"
        ok_audio_1="{{asset('audio/voz1/sudokus/animals/elefantefila.m4a')}}"
        ok_audio_2="{{asset('audio/voz1/sudokus/animals/correctococodrilo.m4a')}}"
        ok_audio_3=""
        ok_audio_4=""
        error_audio_1="{{asset('audio/voz1/sudokus/errors/yafila.m4a')}}"
        error_audio_2="{{asset('audio/voz1/sudokus/errors/col1fila3.m4a')}}"
        error_audio_3="{{asset('audio/voz1/sudokus/errors/yafilacol.m4a')}}"
        :selector_1="[1,0]"
        :selector_2="[3,1]"
        :selector_3="[2,3]"
        :selector_4="[0,0]"
    >
    </layout-sudoku>
@endsection
