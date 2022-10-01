@extends('layouts.app')

@section('main')
    <actividad-4d asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-4.home')}}" route_next="{{route('normal.level-4.e')}}" route_refresh="{{route('normal.level-4.d')}}" asset_images="{{asset('images')}}"></actividad-4d>
@endsection
