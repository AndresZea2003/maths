@extends('layouts.app')

@section('main')
    <actividad-18b asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-18.home')}}" route_next="{{route('normal.level-18.c')}}" route_refresh="{{route('normal.level-18.b')}}" asset_images="{{asset('images')}}"></actividad-18b>
@endsection
