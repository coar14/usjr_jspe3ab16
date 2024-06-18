@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{ $student->studfirstname }} {{ $student->studlastname }}</h1>
        </div>
        <div class="card-body">
            <p>Program: {{ $student->program->progfullname }}</p>
            <p>College: {{ $student->college->collfullname }}</p>
        </div>
    </div>
@endsection
