@extends('layouts.app')

@section('main')
{{--    <actividad-10c asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-10.home')}}" route_next="{{route('normal.level-10.d')}}" asset_images="{{asset('images')}}"></actividad-10c>--}}

    <layout-activity-10
        asset_videos="{{asset('videos')}}"
        asset_audio="{{asset('audio')}}"
        route_back="{{route('normal.level-1.home')}}"
        route_next="{{route('normal.test1')}}"
        asset_images="{{asset('images')}}"
        icon_1="icon-red1"
        icon_2="icon-yellow"
        icon_3="icon-blue"
        color_1="red-600"
        color_2="yellow-400"
        color_3="blue-600"
    ></layout-activity-10>
@endsection
