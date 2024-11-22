@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Branches</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <a href="{{ route('branch') }}" class="ml-auto btn btn-secondary">Add Branches</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" style="padding-right: 30px;">#</th>
                    <th scope="col" style="padding-right: 50px;">CITY</th>
                    <th scope="col" style="padding-right: 50px;">NAME</th>
                    <th scope="col" style="padding-right: 70px;">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branches as $branch)
                <tr>
                    <th scope="row" style="padding-right: 30px;">{{ $branch->id }}</th>
                    <td style="padding-right: 50px;">{{ $branch->city }}</td>
                    <td style="padding-right: 50px;">{{ $branch->name }}</td>
                    <td class="d-flex">
                        <a href="" class="mr-2 btn btn-secondary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
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