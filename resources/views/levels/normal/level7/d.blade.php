@extends('layouts.app')

@section('main')
    <actividad-7d asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-7.home')}}" route_next="{{route('normal.level-7.e')}}" asset_images="{{asset('images')}}"></actividad-7d>
@endsection
