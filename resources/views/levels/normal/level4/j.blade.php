@extends('layouts.app')

@section('main')
    <actividad-4j asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-4.home')}}" route_next="{{route('normal.level-4.home')}}" route_refresh="{{route('normal.level-4.j')}}" asset_images="{{asset('images')}}"></actividad-4j>
@endsection
