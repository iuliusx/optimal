@extends('layouts.layout', ['title'=>"Portfolio Building Uk"])

@section('content')
@foreach($portfolios as $portfolio)
    <h2>imag is here</h2>
    <img src="{{Voyager::image($portfolio->thumbnail('cropped'))}}" />


{{--    <img src="{{Voyager::image($portfolio->slide_images)}}" />--}}
@endforeach
@endsection
