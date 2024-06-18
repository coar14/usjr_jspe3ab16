@extends('layouts.app')

@section('content')
    <h1>All Students</h1>
    <ul class="list-group">
        @foreach ($students as $student)
            <li class="list-group-item">
                {{ $student->studfirstname }} {{ $student->studlastname }}
                <a href="{{ route('student.show', $student->studid) }}" class="btn btn-primary btn-sm float-right">Show</a>
            </li>
        @endforeach
    </ul>
@endsection
