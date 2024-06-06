@extends('template')
@section('content')
<div class="container pt-5">
  <h2 class="text-center">Detail Tugas</h2>
  <hr>
  <a href="{{ route('tasks') }}">Kembali</a><br><br>
  <h4>{{ $task_detail['nama'] }}</h4>
  <small>Deadline : {{ ($task_detail['deadline']) }}</small><br>
  <small>Deadline : {{ \Carbon\Carbon::parse($task_detail['deadline'])->diffForHumans() }}</small><br>
  <span class="badge bg-warning">{{ $task_detail['status'] }}</span>
  <p>{{ $task_detail['description'] }}</p>
</div>
@endsection
