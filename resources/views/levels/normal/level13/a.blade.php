@extends('layouts.app')

@section('main')
    {{--    <actividad-13a asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-13.home')}}" route_next="{{route('normal.level-13.b')}}" asset_images="{{asset('images')}}"></actividad-13a>--}}

    <items-layout-permutaciones
        :number_of_activities="{{ 8 }}"
        :activity_number="{{ 1 }}"
        planet_1="{{ asset('images/planetas/tierra.svg') }}"
        planet_2="{{ asset('images/planetas/rojo.svg') }}"
        item_1="A"
        item_2="B"
        item_3="C"
        activity_description="Aqui la descripcion de la actividad"
        audio_win="{{asset('audio/voz1/win/fantastico1.m4a')}}"
        bg_color_activity="bg-red-500"
        border_color_activity="border-red-800"
        palette_text="LETRAS"
        asset_videos="{{asset('videos')}}"
        asset_audio="{{asset('audio')}}"
        route_back="{{route('normal.level-13.home')}}"
        route_next="{{route('normal.level-13.b')}}"
        asset_images="{{asset('images')}}"
    ></items-layout-permutaciones>
@endsection
