@extends('layouts.app')

@section('main')
    <actividad-18f asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-18.home')}}" route_next="{{route('normal.level-18.g')}}" route_refresh="{{route('normal.level-18.f')}}" asset_images="{{asset('images')}}"></actividad-18f>
@endsection
