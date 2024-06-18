@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ $college->collfullname }}</h1>
        </div>
        <div class="card-body">
            <h2>Departments</h2>
            @foreach ($college->departments as $department)
                <div class="card mb-3">
                    <div class="card-header">
                        {{ $department->deptfullname }}
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($department->programs as $program)
                                <li class="list-group-item">{{ $program->progfullname }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
