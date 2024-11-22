@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <a href="{{ route('add/user') }}" class="ml-auto btn btn-secondary">Add Users</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )

                <tr>

                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="d-flex">
                        <div>
                            <a href="" class="mr-2 btn btn-secondary">Edit</a>

                            <a href="" class="btn btn-danger">Delete</a>
                        </div>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
<script>
    console.log("Using AdminLTE with custom form!");
</script>
@stop