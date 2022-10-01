@extends('layouts.app')

@section('main')
    <actividad-4b asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-4.home')}}" route_next="{{route('normal.level-4.c')}}" route_refresh="{{route('normal.level-4.b')}}" asset_images="{{asset('images')}}"></actividad-4b>
@endsection
