@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @include('partials.hero')
    @include('partials.services')
    @include('partials.team')
    @include('partials.testimonials')
    @include('partials.contact')
@endsection
