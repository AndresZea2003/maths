@extends('layouts.app')

@section('main')
    <actividad-12b asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-12.home')}}" route_next="{{route('normal.level-12.c')}}" asset_images="{{asset('images')}}"></actividad-12b>
@endsection
