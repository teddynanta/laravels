@extends('layout/main')

@section('title', 'Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
        <h3 class="mt-3">Daftar Mahasiswa</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Universitas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->univ}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>
                            <a class="badge badge-warning">edit</a>
                            <a class="badge badge-danger">hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection