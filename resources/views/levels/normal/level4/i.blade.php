@extends('layouts.app')

@section('main')
    <actividad-4i asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-4.home')}}" route_next="{{route('normal.level-4.j')}}" route_refresh="{{route('normal.level-4.i')}}" asset_images="{{asset('images')}}"></actividad-4i>
@endsection
