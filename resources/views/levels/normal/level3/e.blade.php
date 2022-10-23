@extends('layouts.app')

@section('main')
    <actividad-2e asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-2.home')}}" route_next="{{route('normal.level-2.f')}}" asset_images="{{asset('images')}}"></actividad-2e>
@endsection
