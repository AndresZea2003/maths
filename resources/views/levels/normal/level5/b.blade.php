@extends('layouts.app')

@section('main')
    <actividad-5b asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-5.home')}}" route_next="{{route('normal.level-5.c')}}" asset_images="{{asset('images')}}"></actividad-5b>
@endsection
