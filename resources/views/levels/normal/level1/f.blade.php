@extends('layouts.app')

@section('main')
    <actividad-1f asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-1.home')}}" route_next="{{route('normal.level-1.g')}}" asset_images="{{asset('images')}}"></actividad-1f>
@endsection
