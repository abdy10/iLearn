@extends('layouts.app')

@section('content')
    <div class="container-xl py-4">
        <h1 class="text-success">Students Page</h1>

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

                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <a href="students/{{ $student->id }}" class="btn btn-sm btn-success">
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