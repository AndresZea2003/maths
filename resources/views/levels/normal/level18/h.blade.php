@extends('layouts.app')

@section('main')
    <actividad-18h asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-18.home')}}" route_next="{{route('normal.level-18.i')}}" route_refresh="{{route('normal.level-18.h')}}" asset_images="{{asset('images')}}"></actividad-18h>
@endsection
