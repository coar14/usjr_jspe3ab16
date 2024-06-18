@extends('layouts.app')

@section('content')
    <h1>All Departments</h1>
    @foreach ($departments as $department)
        <div class="card mb-3">
            <div class="card-header">
                {{ $department->deptfullname }} - {{ $department->college->collfullname }}
            </div>
        </div>
    @endforeach
@endsection
