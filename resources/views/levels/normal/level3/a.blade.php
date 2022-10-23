@extends('layouts.app')

@section('main')
    <actividad-3a asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-3.home')}}" route_next="{{route('normal.level-3.b')}}" asset_images="{{asset('images')}}"></actividad-3a>
@endsection
