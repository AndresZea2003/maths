@extends('layouts.app')

@section('main')
    <actividad-2d asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-2.home')}}" route_next="{{route('normal.level-2.e')}}" asset_images="{{asset('images')}}"></actividad-2d>
@endsection
