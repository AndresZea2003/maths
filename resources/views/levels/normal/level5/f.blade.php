@extends('layouts.app')

@section('main')
    <actividad-5f asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-5.home')}}" route_next="{{route('levels')}}" asset_images="{{asset('images')}}"></actividad-5f>
@endsection
