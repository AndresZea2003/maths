@extends('layouts.app')

@section('main')
    <actividad-12c asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-12.home')}}" route_next="{{route('normal.level-12.d')}}" asset_images="{{asset('images')}}"></actividad-12c>
@endsection
