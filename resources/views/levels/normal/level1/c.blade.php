@extends('layouts.app')

@section('main')
    <actividad-1c asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-1.home')}}" route_next="{{route('normal.level-1.d')}}" asset_images="{{asset('images')}}"></actividad-1c>
@endsection
