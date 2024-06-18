@extends('layouts.app')

@section('content')
    <h1>All Colleges</h1>
    @foreach ($colleges as $college)
        <div class="card mb-3">
            <div class="card-header">
                {{ $college->collfullname }}
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($college->programs as $program)
                        <li class="list-group-item">{{ $program->progfullname }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
@endsection
