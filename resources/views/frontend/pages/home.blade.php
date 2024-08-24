@extends('frontend.layout.master')

@section('frontend-title')
    Home Page
@endsection

@section('frontend_content')
    @include('frontend.pages.widgets.slider')

    @include('frontend.pages.widgets.featered')

    @include('frontend.pages.widgets.count-down')

    @include('frontend.pages.widgets.best-seller')


    @include('frontend.pages.widgets.latest-product')

    @include('frontend.pages.widgets.testimonial')
@endsection
