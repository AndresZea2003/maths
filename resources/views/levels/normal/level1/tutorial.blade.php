@extends('layouts.app')

@section('main')
    <tutorial-1 asset_videos="{{asset('videos')}}" asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-1.home')}}" route_next="{{route('normal.test1')}}" asset_images="{{asset('images')}}"></tutorial-1>
@endsection
