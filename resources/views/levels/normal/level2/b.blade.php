@extends('layouts.app')

@section('main')
    <actividad-2b asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-2.home')}}" route_next="{{route('normal.level-2.c')}}" asset_images="{{asset('images')}}"></actividad-2b>
@endsection
