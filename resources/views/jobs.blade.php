{{-- <h1>{{ $status }}</h1> --}}
@extends('layout')
@section('content')
@include('partials._hero')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($jobs) == 0)
            @foreach ($jobs as $job)
             <x-job-card :job='$job' />   
            @endforeach
        @else
            <p>No jobs found</p>
        @endunless


    @endsection
