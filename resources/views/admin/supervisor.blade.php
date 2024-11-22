@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Supervisor</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <a href="{{ route('create/supervisor') }}" class="ml-auto btn btn-secondary">Add Supervisor</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">BRANCH</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($supervisors as $index => $supervisor)
                <tr>
                    <td>{{ $loop->iteration + ($supervisors->currentPage() - 1) * $supervisors->perPage() }}</td>
                    <td>{{ $supervisor->name }}</td>
                    <td>{{ $supervisor->email }}</td>
                    <td>{{ $supervisor->branch->city_name }} - {{ $supervisor->branch->city }}</td>
                    <td class="d-flex align-items-center">
                        <a href="" class="mr-2 btn btn-secondary">Edit</a>
                        <form action="" method="POST" class="mb-0">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        <nav class="mt-3">
            <ul class="pagination justify-content-end">
                {{-- Previous Page Link --}}
                @if ($supervisors->onFirstPage())
                <li class="page-item disabled">
                    <span class="text-white page-link bg-secondary border-secondary">Previous</span>
                </li>
                @else
                <li class="page-item">
                    <a class="text-white page-link bg-secondary border-secondary"
                        href="{{ $supervisors->previousPageUrl() }}" rel="prev">Previous</a>
                </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($supervisors->links()->elements as $element)
                @if (is_string($element))
                <li class="page-item disabled">
                    <span class="text-white page-link bg-secondary border-secondary">{{ $element }}</span>
                </li>
                @endif

                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $supervisors->currentPage())
                <li class="page-item active">
                    <span class="text-white page-link bg-dark border-dark">{{ $page }}</span>
                </li>
                @else
                <li class="page-item">
                    <a class="text-white page-link bg-secondary border-secondary" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endif
                @endforeach
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($supervisors->hasMorePages())
                <li class="page-item">
                    <a class="text-white page-link bg-secondary border-secondary"
                        href="{{ $supervisors->nextPageUrl() }}" rel="next">Next</a>
                </li>
                @else
                <li class="page-item disabled">
                    <span class="text-white page-link bg-secondary border-secondary">Next</span>
                </li>
                @endif
            </ul>
        </nav>
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