@extends('layouts.app')

@section('main')
    {{--        <tutorial-1--}}
    {{--            asset_videos="{{asset('videos')}}"--}}
    {{--            asset_audio="{{asset('audio')}}"--}}
    {{--            route_back="{{route('normal.level-1.home')}}"--}}
    {{--            route_next="{{route('normal.test1')}}"--}}
    {{--            asset_images="{{asset('images')}}"--}}
    {{--            icon_1="icon-blue"--}}
    {{--            icon_2="icon-yellow"--}}
    {{--            icon_3="icon-fuchsia"--}}
    {{--            color_1="blue-600"--}}
    {{--            color_2="yellow-400"--}}
    {{--            color_3="fuchsia-400"--}}
    {{--        ></tutorial-1>--}}

    {{--        <borrador--}}
    {{--            asset_videos="{{asset('videos')}}"--}}
    {{--            asset_audio="{{asset('audio')}}"--}}
    {{--            route_back="{{route('normal.level-1.home')}}"--}}
    {{--            route_next="{{route('normal.test1')}}"--}}
    {{--            asset_images="{{asset('images')}}"--}}
    {{--            icon_1="icon-blue"--}}
    {{--            icon_2="icon-yellow"--}}
    {{--            icon_3="icon-fuchsia"--}}
    {{--            color_1="blue-600"--}}
    {{--            color_2="yellow-400"--}}
    {{--            color_3="fuchsia-400"--}}
    {{--        ></borrador>--}}



    {{--    <layout-activity-10--}}
    {{--        asset_videos="{{asset('videos')}}"--}}
    {{--        asset_audio="{{asset('audio')}}"--}}
    {{--        route_back="{{route('normal.level-1.home')}}"--}}
    {{--        route_next="{{route('normal.test1')}}"--}}
    {{--        asset_images="{{asset('images')}}"--}}
    {{--        icon_1="icon-blue"--}}
    {{--        icon_2="icon-yellow"--}}
    {{--        icon_3="icon-fuchsia"--}}
    {{--        color_1="blue-600"--}}
    {{--        color_2="yellow-400"--}}
    {{--        color_3="fuchsia-400"--}}
    {{--    ></layout-activity-10>--}}

    {{--    <perfect-vue--}}
    {{--        :number_of_activities="{{ 8 }}"--}}
    {{--        :activity_number="{{ 1 }}"--}}
    {{--        planet_1="{{ asset('images/planetas/tierra.svg') }}"--}}
    {{--        planet_2="{{ asset('images/planetas/rojo.svg') }}"--}}
    {{--        item_1="A"--}}
    {{--        item_2="B"--}}
    {{--        item_3="C"--}}
    {{--        activity_description="Aqui la descripcion de la actividad"--}}
    {{--        audio_win="{{asset('audio/voz1/win/fantastico1.m4a')}}"--}}
    {{--        bg_color_activity="bg-red-500"--}}
    {{--        border_color_activity="border-red-800"--}}
    {{--        palette_text="LETRAS"--}}
    {{--        asset_videos="{{asset('videos')}}"--}}
    {{--        asset_audio="{{asset('audio')}}"--}}
    {{--        route_back="{{route('normal.level-1.home')}}"--}}
    {{--        route_next="{{route('normal.test1')}}"--}}
    {{--        asset_images="{{asset('images')}}"--}}
    {{--    ></perfect-vue>--}}

{{--    <img-layout-permutaciones--}}
{{--        :number_of_activities="{{ 8 }}"--}}
{{--        :activity_number="{{ 1 }}"--}}
{{--        planet_1="{{ asset('images/planetas/tierra.svg') }}"--}}
{{--        planet_2="{{ asset('images/planetas/rojo.svg') }}"--}}
{{--        item_1="{{ asset('images/cosas/cuadrado.svg') }}"--}}
{{--        item_2="{{ asset('images/cosas/triangulo.svg') }}"--}}
{{--        item_3="{{ asset('images/cosas/circulo.svg') }}"--}}
{{--        activity_description="Aqui la descripcion de la actividad"--}}
{{--        audio_win="{{asset('audio/voz1/win/fantastico1.m4a')}}"--}}
{{--        bg_color_activity="bg-green-500"--}}
{{--        border_color_activity="border-green-800"--}}
{{--        palette_text="FIGURAS"--}}
{{--        asset_videos="{{asset('videos')}}"--}}
{{--        asset_audio="{{asset('audio')}}"--}}
{{--        route_back="{{route('normal.level-13.home')}}"--}}
{{--        route_next="{{route('normal.level-13.b')}}"--}}
{{--        asset_images="{{asset('images')}}"--}}
{{--    >--}}
{{--    </img-layout-permutaciones>--}}

    <interactive-items-layout-permutaciones
        :number_of_activities="{{ 8 }}"
        :activity_number="{{ 1 }}"
        planet_1="{{ asset('images/planetas/tierra.svg') }}"
        planet_2="{{ asset('images/planetas/rojo.svg') }}"
        item_1="A"
        item_2="B"
        item_3="C"
        audio_item_1="{{asset('audio/voz1/letters/A.m4a')}}"
        audio_item_2="{{asset('audio/voz1/letters/B.m4a')}}"
        audio_item_3="{{asset('audio/voz1/letters/C.m4a')}}"
        audio_item_extra="{{asset('audio/voz1/letters/and/yC.m4a')}}"
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
        initial_audio_1="{{asset('audio/voz1/permutaciones/letters/vamosletras.m4a')}}"
        initial_audio_2="{{asset('audio/voz1/permutaciones/letters/filasletra.m4a')}}"
        initial_audio_3="{{asset('audio/voz1/permutaciones/letters/prestaletra.m4a')}}"
    ></interactive-items-layout-permutaciones>

@endsection
