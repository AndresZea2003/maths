@extends('layouts.app')

@section('main')
    <actividad-4g asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-4.home')}}" route_next="{{route('normal.level-4.h')}}" route_refresh="{{route('normal.level-4.g')}}" asset_images="{{asset('images')}}"></actividad-4g>
@endsection
