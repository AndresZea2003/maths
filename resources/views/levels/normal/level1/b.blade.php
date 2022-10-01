@extends('layouts.app')

@section('main')
    <actividad-1b asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-1.home')}}" route_next="{{route('normal.level-1.c')}}" asset_images="{{asset('images')}}"></actividad-1b>
@endsection
