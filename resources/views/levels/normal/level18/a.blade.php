@extends('layouts.app')

@section('main')
    <actividad-18a asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-18.home')}}" route_next="{{route('normal.level-18.b')}}" route_refresh="{{route('normal.level-18.a')}}" asset_images="{{asset('images')}}"></actividad-18a>
@endsection
