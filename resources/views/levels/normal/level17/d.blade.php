@extends('layouts.app')

@section('main')
    <actividad-17d asset_audio="{{asset('audio')}}"
                   route_back="{{route('normal.level-17.home')}}"
                   route_next="{{route('normal.level-17.e')}}"
                   asset_images="{{asset('images')}}"
                   color_1="yellow-400"
                   color_2="pink-500"
    ></actividad-17d>
@endsection
