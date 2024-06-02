@extends('template')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">Daftar Tabel Tugas</h1>
        <div class="card">
            <div class="card-header">
                <h4>Data Tabel</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="/tasks/create" class="btn btn-primary">+ Tambah Data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Deadline</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $task->nama }}</td>
                                    <td>{{ $task->status }}</td>
                                    <td>{{ $task->deadline }}</td>
                                    <td>{{ subStr($task->description,0,'10') }}</td>
                                    <td>
                                        <a href="/tasks/edit/" class="btn btn-warning">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                       </table>
                </div>
            </div>
        </div>
    </div>
@endsection