@extends('layouts.app')

@section('main')
    <actividad-12e asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-12.home')}}" route_next="{{route('normal.level-12.home')}}" asset_images="{{asset('images')}}"></actividad-12e>
@endsection
