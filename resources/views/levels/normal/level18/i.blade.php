@extends('layouts.app')

@section('main')
    <actividad-18i asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-18.home')}}" route_next="{{route('normal.level-18.j')}}" route_refresh="{{route('normal.level-18.i')}}" asset_images="{{asset('images')}}"></actividad-18i>
@endsection
