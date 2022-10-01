@extends('layouts.app')

@section('main')
    <actividad-4h asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-4.home')}}" route_next="{{route('normal.level-4.i')}}" route_refresh="{{route('normal.level-4.h')}}" asset_images="{{asset('images')}}"></actividad-4h>
@endsection
