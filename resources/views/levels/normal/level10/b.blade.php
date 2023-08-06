@extends('layouts.app')

@section('main')
    {{--    <actividad-10b asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-10.home')}}" route_next="{{route('normal.level-10.c')}}" asset_images="{{asset('images')}}"></actividad-10b>--}}

    <layout-sub-interactive-activity-10
        asset_videos="{{asset('videos')}}"
        asset_audio="{{asset('audio')}}"
        route_back="{{route('normal.level-1.home')}}"
        route_next="{{route('normal.test1')}}"
        asset_images="{{asset('images')}}"
        win_audio="/voz1/win/fantastico1.m4a"
        icon_1="icon-blue"
        icon_2="icon-yellow"
        icon_3="icon-fuchsia"
        color_1="blue-600"
        color_2="yellow-400"
        color_3="fuchsia-400"
        color_audio1="/voz1/colors/Amarillo.m4a"
        color_audio2="/voz1/colors/Azul.m4a"
        color_audio3="/voz1/colors/Fuchsia.m4a"
    ></layout-sub-interactive-activity-10>

@endsection
