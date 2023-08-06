@extends('layouts.app')

@section('main')
        <tutorial-1
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
        ></tutorial-1>

    {{--    <borrador--}}
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
    {{--    ></borrador>--}}



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


@endsection
