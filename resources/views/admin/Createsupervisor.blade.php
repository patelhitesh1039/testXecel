@extends('adminlte::page')

@section('title', 'Add Supervisor')

@section('content_header')
<h1>Add Supervisor</h1>
@stop

@section('content')

<div class="container">
    <!-- Card -->
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-secondary">Add New Supervisor</h3>
        </div>

        <div class="card-body">
            <form action="{{route('storeSupervisor')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="Enter supervisor name"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" class="form-control"
                        placeholder="Enter password" required>
                </div>

                <div class="form-group">
                    <label for="branch_id">Branch</label>
                    <select name="branch_id" id="branch_id" class="form-control" required>
                        <option value="">Select The Option</option>
                        @foreach($branches as $branch)
                        <option value="{{ $branch->id }}">{{ $branch->city_name }} - {{ $branch->city }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-secondary">Create Supervisor</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Card -->
</div>

@stop

@section('css')
<!-- You can add custom CSS here if needed -->
@stop

@section('js')
<script>
    console.log("Supervisor form loaded successfully!");
</script>
@stop
