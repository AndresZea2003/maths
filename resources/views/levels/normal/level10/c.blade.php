@extends('layouts.app')

@section('main')
    <actividad-10c asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-10.home')}}" route_next="{{route('normal.level-10.d')}}" asset_images="{{asset('images')}}"></actividad-10c>
@endsection
