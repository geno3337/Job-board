@extends('layout')
@section('title', 'changePassword')
@section('content')
    <div class="d-flex justify-content-center align-items-center min-vh-100 min-vw-100">
        <div>
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
        </div>
        <form action={{ 'changePasswordPost' }} method="POST" class="w-50">
            @csrf
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Current Password</label>
                <input type="password" name="currentPassword" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">New Password</label>
                <input type="password" name="newPassword" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Conform Password</label>
                <input type="password" name="conformPassword" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endSection
