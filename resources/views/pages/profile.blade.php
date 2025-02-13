@extends('layouts.layout')
@section('title', 'profile')
@section('content')
    <div class="d-flex justify-content-center align-items-center min-vh-100 min-vw-100">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                @if ($user)
                    <h5>name : {{ $user->name }}</h5>
                    <h5>email : {{ $user->email }}</h5>
                    <a href="{{ route('updateUser') }}">
                        <button type="button" class="btn btn-primary">Update</button>
                    </a>
                    {{-- @auth('admin')
                        <a href="#"
                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                            <button type="button" class="btn btn-primary">Delete</button>
                        </a>

                        <form id="delete-form-{{ $user->id }}" action="{{ route('deleteUser', ['id' => $user->id]) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endauth --}}
                @else
                    <h5>No data found</h5>
                @endif
            </div>
        </div>
    </div>
@endSection
