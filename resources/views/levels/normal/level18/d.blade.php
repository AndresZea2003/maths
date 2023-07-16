@extends('layouts.app')

@section('main')
    <actividad-18d asset_audio="{{asset('audio')}}"
                   route_back="{{route('normal.level-18.home')}}"
                   route_next="{{route('normal.level-18.e')}}"
                   route_refresh="{{route('normal.level-18.d')}}"
                   asset_images="{{asset('images')}}"
    ></actividad-18d>
@endsection
