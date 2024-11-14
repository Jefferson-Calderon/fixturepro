@extends('layout')

@section('title', 'Full Sports | Página Principal')

@section('content')
    @include('home')
    @include('features')
    @include('sports')
    @include('testimonials')
    @include('call-to-action')
@endsection