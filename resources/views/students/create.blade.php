@extends('layout/main')

@section('title', 'Add Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3 class="mt-3">Add Student</h3>
            <form method="POST" action="/students">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @if(preg_grep('[nama]', $errors->all())) is-invalid @endif" name="nama" id="nama" placeholder="Input name...">
                    <div class="invalid-feedback">
                        Insert a valid name!
                    </div>
                </div>
                <div class="form-group">
                    <label for="univ">Universitas</label>
                    <input type="text" class="form-control @if(preg_grep('[univ]', $errors->all())) is-invalid @endif" id="univ" name="univ" placeholder="Input University...">
                    <div class="invalid-feedback">
                        Insert a valid university!
                    </div>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @if(preg_grep('[jurusan]', $errors->all())) is-invalid @endif" id="jurusan" name="jurusan" placeholder="Input Departement...">
                    <div class="invalid-feedback">
                        Insert a valid departement!
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @if(preg_grep('[email]', $errors->all())) is-invalid @endif" id="email" name="email" placeholder="Input Email...">
                    <div class="invalid-feedback">
                        Insert a valid email!
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit!</button>
            </form>
        </div>
    </div>
</div>
@endsection