@extends('layouts.app')

@section('main')
    <actividad-7c asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-7.home')}}" route_next="{{route('normal.level-7.d')}}" asset_images="{{asset('images')}}"></actividad-7c>
@endsection
