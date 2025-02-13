@extends('layouts.layout')
@section('title', 'storeJobs')
@section('content')
    <div class="d-flex justify-content-center align-items-center flex-column min-vh-100 min-vw-100">
        <div class="d-flex justify-content-center align-items-center m-3">
            <h4>Add Job Details</h4>
        </div>
        {{-- <div>
            @if ($errors->any())
                <div>
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-damger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-damger">{{ session('error') }}</div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-damger">{{ session('success') }}</div>
            @endif
        </div> --}}
        <form action="{{ 'storeJobPost' }}" method="POST" class="w-50">
            @csrf
            <div class="mb-3 ">
                <label for="jobRole" class="form-label">JobRole</label>
                <input type="text" name="jobRole" class="form-control" id="jobRole"
                    value="{{ old('jobRole', $job->jobRole ?? '') }}" aria-describedby="emailHelp">
                    @error('jobRole')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 ">
                <label for="jobArea" class="form-label">JobArea</label>
                <input type="text" name="jobArea" class="form-control" id="jobArea"
                    value="{{ old('jobArea', $job->jobArea ?? '') }}" aria-describedby="emailHelp">
                    @error('jobArea')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="skillsRequired" class="form-label">Skills Required</label>
                <input type="text" name="skillsRequired" class="form-control" id="skillsRequired"
                    value="{{ old('skillsRequired', $job->skillsRequired ?? '') }}">
                    @error('skillsRequired')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">salary</label>
                <input type="text" name="salary" class="form-control"
                    id="salary"value="{{ old('salary', $job->salary ?? '') }}">
                    @error('salary')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Company</label>
                <input type="text" name="company" class="form-control" id="company"
                    value="{{ old('company', $job->company ?? '') }}" >
                    @error('company')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" id="location"
                    value="{{ old('location', $job->location ?? '') }}">
                    @error('location')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="experience" class="form-label">Experience</label>
                <input type="text" name="experience" class="form-control" id="experience"
                    value="{{ old('experience', $job->experience ?? '') }}">
                    @error('experience')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="discription" class="form-label">Discription</label>
                <input type="text" name="discription" class="form-control" id="discription"
                    value="{{ old('discription', $job->discription ?? '') }}">
                    @error('discription')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="applyLink" class="form-label">Apply Link</label>
                <input type="text" name="applyLink" class="form-control" id="applyLink"
                    value="{{ old('applyLink', $job->applyLink ?? '') }}">
                @error('applyLink')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
