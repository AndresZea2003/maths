@extends('layouts.app')

@section('main')
{{--    <test-1 asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-1.home')}}" route_next="{{route('normal.level-1.a')}}" asset_images="{{asset('images')}}"></test-1>--}}

    <test-1
        asset_videos="{{asset('videos')}}"
        asset_audio="{{asset('audio')}}"
        route_back="{{route('normal.level-1.home')}}"
        route_next="{{route('normal.test1')}}"
        asset_images="{{asset('images')}}"
        icon_1="icon-blue"
        icon_2="icon-yellow"
        icon_3="icon-fuchsia"
        color_1="blue-600"
        color_2="yellow-400"
        color_3="fuchsia-400"
    ></test-1>
@endsection
