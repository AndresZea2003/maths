@extends('layouts.app')

@section('main')
    <actividad-1g asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-1.home')}}" route_next="{{route('normal.level-2.home')}}" asset_images="{{asset('images')}}"></actividad-1g>
@endsection
