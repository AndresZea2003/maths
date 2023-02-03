@extends('layouts.app')

@section('main')
    <test-1 asset_audio="{{asset('audio')}}" route_back="{{route('normal.level-1.home')}}" route_next="{{route('normal.level-1.a')}}" asset_images="{{asset('images')}}"></test-1>
@endsection
