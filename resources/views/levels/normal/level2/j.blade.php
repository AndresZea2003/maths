@extends('layouts.app')

@section('main')
    <actividad-2j asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-2.home')}}" route_next="{{route('normal.level-2.k')}}" asset_images="{{asset('images')}}"></actividad-2j>
@endsection
