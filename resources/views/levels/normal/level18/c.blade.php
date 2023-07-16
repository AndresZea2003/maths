@extends('layouts.app')

@section('main')
    <actividad-18c asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-18.home')}}" route_next="{{route('normal.level-18.d')}}" route_refresh="{{route('normal.level-18.c')}}" asset_images="{{asset('images')}}"></actividad-18c>
@endsection
