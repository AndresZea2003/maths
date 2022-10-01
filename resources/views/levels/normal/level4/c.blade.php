@extends('layouts.app')

@section('main')
    <actividad-4c asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-4.home')}}" route_next="{{route('normal.level-4.d')}}" route_refresh="{{route('normal.level-4.c')}}" asset_images="{{asset('images')}}"></actividad-4c>
@endsection
