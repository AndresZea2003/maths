@extends('layouts.app')

@section('main')
    <actividad-10a asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-10.home')}}" route_next="{{route('normal.level-10.b')}}" asset_images="{{asset('images')}}"></actividad-10a>
@endsection
