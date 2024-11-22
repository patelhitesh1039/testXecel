{{-- <ul class="sidebar-menu">
    @if(auth()->user()->hasRole('Admin'))
    <!-- Admin menu items -->
    <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
    @endif


    <!-- Supervisor menu items -->
    <li><a href="{{ route('supervisor.dashboard') }}">Supervisor Dashboard</a></li>

</ul>

<div>
    {{ auth()->user()->name }}
    <a href="{{ route('logout') }}">Logout</a>
</div> --}}
{{--  @if(auth()->user()->hasRole('Supervisor'))  --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Supervisor Dashboard</h1>
@stop

@section('content')
<p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
@stop
