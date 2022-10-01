@extends('layouts.app')

@section('main')
    <actividad-4a asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-4.home')}}" route_next="{{route('normal.level-4.b')}}" route_refresh="{{route('normal.level-4.a')}}" asset_images="{{asset('images')}}"></actividad-4a>
@endsection
