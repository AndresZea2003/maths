@extends('layouts.app')

@section('main')
    <actividad-5a asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-5.home')}}" route_next="{{route('normal.level-5.b')}}" asset_images="{{asset('images')}}"></actividad-5a>
@endsection
