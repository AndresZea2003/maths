@extends('layouts.app')

@section('main')
    <actividad-3c asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-3.home')}}" route_next="{{route('normal.level-3.d')}}" asset_images="{{asset('images')}}"></actividad-3c>
@endsection
