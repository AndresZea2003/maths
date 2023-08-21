@extends('layouts.app')

@section('main')
    {{--    <actividad-14a asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-14.home')}}" route_next="{{route('normal.level-14.b')}}" asset_images="{{asset('images')}}"></actividad-14a>--}}

    <img-layout-permutaciones
        :number_of_activities="{{ 6 }}"
        :activity_number="{{ 1 }}"
        planet_1="{{ asset('images/planetas/tierra.svg') }}"
        planet_2="{{ asset('images/planetas/rojo.svg') }}"
        item_1="{{ asset('images/cosas/cuadrado.svg') }}"
        item_2="{{ asset('images/cosas/triangulo.svg') }}"
        item_3="{{ asset('images/cosas/circulo.svg') }}"
        activity_description="Aqui la descripcion de la actividad"
        audio_win="{{asset('audio/voz1/win/fantastico1.m4a')}}"
        bg_color_activity="bg-green-500"
        border_color_activity="border-green-800"
        palette_text="FIGURAS"
        asset_videos="{{asset('videos')}}"
        asset_audio="{{asset('audio')}}"
        route_back="{{route('normal.level-14.home')}}"
        route_next="{{route('normal.level-14.b')}}"
        asset_images="{{asset('images')}}"
    >
    </img-layout-permutaciones>
@endsection
