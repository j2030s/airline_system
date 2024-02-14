@extends('layout.master')

@section('title', 'Admin Page')

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

<div class="container p-5">
    <h1>Welcome to Your Dashboard</h1>
    
    <!-- Add content or widgets for your dashboard here -->
    
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Recent Bookings</h5>
                    <!-- Display recent bookings or any relevant information -->
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Upcoming Flights</h5>
                    <!-- Display upcoming flights  -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




