@extends('layouts.app')

@section('main')
    {{--    <actividad-10d asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-10.home')}}" route_next="{{route('normal.level-10.e')}}" asset_images="{{asset('images')}}"></actividad-10d>--}}

    <layout-activity-10
        asset_videos="{{asset('videos')}}"
        asset_audio="{{asset('audio')}}"
        route_back="{{route('normal.level-1.home')}}"
        route_next="{{route('normal.test1')}}"
        asset_images="{{asset('images')}}"
        icon_1="icon-blue"
        icon_2="icon-orange"
        icon_3="icon-green"
        color_1="blue-600"
        color_2="orange-400"
        color_3="green-600"
    ></layout-activity-10>
@endsection
