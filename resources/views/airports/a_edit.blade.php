@extends('layout.master')

@section('title', 'Admin Airport Management')

@section('side-items')

    <li class="nav-item">
        <a class="nav-link" href="#">Airports</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Users</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Flights</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Bookings</a>
    </li>



@endsection



@section('content')
    <div class="container mt-4">
        <h2>Edit Airport</h2>
        <form action="{{ route('airports.update', $airport->id) }}" method="post">
            @csrf
            @method('PUT')

            <!-- Airport Code -->
            <div class="mb-3">
                <label for="code" class="form-label">Airport Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ $airport->code }}" required>
            </div>

            <!-- Airport Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Airport Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $airport->name }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Airport</button>
        </form>
    </div>
@endsection