@extends('layout/main')

@section('title', 'Details')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mt-3">Details of Student</h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->univ}}</h6>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <p class="card-text">{{$student->email}}</p>
                    <a href="/students/{{$student->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="{{$student->id}}" method="POST" class="d-inline">
                        {{ method_field('DELETE')}}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                    <a href="/students" class="card-link">&LeftArrow; back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection