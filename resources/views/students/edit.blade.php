@extends('layout/main')

@section('title', 'Edit Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3 class="mt-3">Edit Student's data</h3>
            <form method="POST" action="/students/{{$student->id}}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @if(preg_grep('[nama]', $errors->all())) is-invalid @endif" name="nama" id="nama" placeholder="Input name..." value="{{$student->nama}}">
                    <div class="invalid-feedback">
                        Insert a valid name!
                    </div>
                </div>
                <div class="form-group">
                    <label for="univ">Universitas</label>
                    <input type="text" class="form-control @if(preg_grep('[univ]', $errors->all())) is-invalid @endif" id="univ" name="univ" placeholder="Input University..." value="{{$student->univ}}">
                    <div class="invalid-feedback">
                        Insert a valid university!
                    </div>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @if(preg_grep('[jurusan]', $errors->all())) is-invalid @endif" id="jurusan" name="jurusan" placeholder="Input Departement..." value="{{$student->jurusan}}">
                    <div class="invalid-feedback">
                        Insert a valid departement!
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @if(preg_grep('[email]', $errors->all())) is-invalid @endif" id="email" name="email" placeholder="Input Email..." value="{{$student->email}}">
                    <div class="invalid-feedback">
                        Insert a valid email!
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit!</button>
            </form>
        </div>
    </div>
</div>
@endsection