@extends('layouts.app')

@section('content')
    @include('sections.header')
    <div class="flex">
        @include('sections.sidebar')
        @include('sections.main')
    </div>
    @include('sections.modal')
@endsection