@extends('layouts.layout')
@section('title','Home')
@section('content')
{{-- <div class="d-flex justify-content-center align-items-center min-vh-100 min-vw-100">
    <h1>employer Dashboard</h1>
</div> --}}
<x-employer.JobCard/>
@endsection
