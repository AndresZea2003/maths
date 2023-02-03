@extends('layouts.app')

@section('main')
    <actividad-16d asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-16.home')}}" route_next="{{route('normal.level-16.e')}}" asset_images="{{asset('images')}}"></actividad-16d>
@endsection
