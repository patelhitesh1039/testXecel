@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Branch</h1>
@stop

@section('content')

<div class="container">
    <!-- Card -->
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-secondary">Add Your Branch now </h3>
        </div>

        <div class="card-body">
            <form action="{{ route('insert-branch') }}" method="POST">
                @csrf
                <!-- City Input -->
                <div class="form-group">
                    <label for="city">City</label>
                    <input id="city" type="text" name="city" class="form-control" placeholder="Enter city name">
                </div>

                <!-- Okya Input -->
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input id="Name" type="text" name="name" class="form-control" placeholder="Enter Name name">
                </div>

                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-secondary">Save changes</button>
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
    console.log("Using AdminLTE with custom form!");
</script>
@stop