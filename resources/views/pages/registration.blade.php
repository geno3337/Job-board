@extends('layouts.layout')
@section('title', 'registration')
@section('content')
    <div class="d-flex justify-content-center align-items-center min-vh-100 min-vw-100">
        {{-- <div>
        @if ($errors->any())
            <div>
               @foreach ($errors->all() as $error)
                   <div class="alert alert-damger">{{$error}}</div>
               @endforeach
            </div>
        @endif

        @if (session()->has('error'))
        <div class="alert alert-damger">{{session('error')}}</div>
        @endif

        @if (session()->has('success'))
        <div class="alert alert-damger">{{session('success')}}</div>
        @endif
   </div> --}}
        <form action={{ 'registarpost' }} method="POST" class="w-50">
            @csrf
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ old('name') }}" aria-describedby="emailHelp">
                @error('name')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}"
                    aria-describedby="emailHelp">
                @error('email')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                @error('password')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputConformPassword" class="form-label">Conform Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputConformPassword">
                @error('password_confirmation')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
            {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endSection
