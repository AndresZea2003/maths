@extends('layouts.app')

@section('main')
    <actividad-15c asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-15.home')}}" route_next="{{route('normal.level-15.d')}}" asset_images="{{asset('images')}}"></actividad-15c>
@endsection
