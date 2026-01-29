@extends('layouts.app')

@section('content')
    <div class="container-xl py-4">
        <h1 class="text-primary">Teachers</h1>
        <div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>#</th>
                    </tr>
                </thead>

                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->lastname }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>
                            <a href="teachers/{{ $teacher->id }}" class="btn btn-sm btn-success">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
