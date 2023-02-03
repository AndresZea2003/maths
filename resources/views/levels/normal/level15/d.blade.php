@extends('layouts.app')

@section('main')
    <actividad-15d asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-15.home')}}" route_next="{{route('normal.level-15.e')}}" asset_images="{{asset('images')}}"></actividad-15d>
@endsection
