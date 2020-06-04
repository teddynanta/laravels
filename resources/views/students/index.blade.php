@extends('layout/main')

@section('title', 'Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mt-3">List of Students</h3>

            <a href="/students/create" class="btn btn-primary mb-3">+ Student</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group">
                @foreach ($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$student->nama}}
                        <a href="/students/{{$student->id}}" class="badge badge-info">Show Details</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection