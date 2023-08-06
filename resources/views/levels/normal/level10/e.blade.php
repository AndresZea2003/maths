@extends('layouts.app')

@section('main')
    {{--    <actividad-10e asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-10.home')}}" route_next="{{route('normal.level-10.home')}}" asset_images="{{asset('images')}}"></actividad-10e>--}}

    <layout-activity-10
        asset_videos="{{asset('videos')}}"
        asset_audio="{{asset('audio')}}"
        route_back="{{route('normal.level-1.home')}}"
        route_next="{{route('normal.test1')}}"
        asset_images="{{asset('images')}}"
        icon_1="icon-stone"
        icon_2="icon-orange"
        icon_3="icon-pink"
        color_1="stone-600"
        color_2="orange-400"
        color_3="pink-600"
    ></layout-activity-10>
@endsection
