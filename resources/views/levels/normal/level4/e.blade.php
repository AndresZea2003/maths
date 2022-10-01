@extends('layouts.app')

@section('main')
    <actividad-4e asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-4.home')}}" route_next="{{route('normal.level-4.f')}}" route_refresh="{{route('normal.level-4.e')}}" asset_images="{{asset('images')}}"></actividad-4e>
@endsection
