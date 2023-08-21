@extends('layouts.app')

@section('main')
    <layout-select-activity
        :level_number="{{ 14 }}"
        :number_of_activities="{{ 6 }}"
        cols="md:grid-cols-3"
        asset_images="{{asset('images')}}"
        route_back="{{ route('levels')}} "
        base_url="{{ url('/') }}"
        bg_color="bg-green-400"
        bg_color_activity="bg-green-300"
        border_color_activity="border-green-500"
    ></layout-select-activity>
@endsection
