@extends('layouts.app')

@section('main')
{{--    <actividad-10a asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-10.home')}}" route_next="{{route('normal.level-10.b')}}" asset_images="{{asset('images')}}"></actividad-10a>--}}

    <layout-interactive-activity-10
        asset_videos="{{asset('videos')}}"
        asset_audio="{{asset('audio')}}"
        route_back="{{route('normal.level-1.home')}}"
        route_next="{{route('normal.test1')}}"
        asset_images="{{asset('images')}}"
        win_audio="/voz1/win/fantastico1.m4a"
    ></layout-interactive-activity-10>


@endsection
