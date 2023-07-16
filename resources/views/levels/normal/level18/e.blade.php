@extends('layouts.app')

@section('main')
    <actividad-18e asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-18.home')}}" route_next="{{route('normal.level-18.f')}}" route_refresh="{{route('normal.level-18.e')}}" asset_images="{{asset('images')}}"></actividad-18e>
@endsection
