@extends('layouts.app')

@section('main')
    <actividad-5e asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-5.home')}}" route_next="{{route('normal.level-5.f')}}" asset_images="{{asset('images')}}"></actividad-5e>
@endsection
