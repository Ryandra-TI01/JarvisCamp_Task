@extends('template')
@section('content')
<div class="container">
  <h1 class="text-center">Daftar Tugas</h1>
  <hr>
  <div class="row">
      @foreach ($tasks as $task)
      <div class="col-12 col-md-4 mt-3">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">{{ $task['nama'] }}</h4>
                  <small>Deadline :{{ \Carbon\Carbon::parse($task['deadline'])->diffForHumans() }}</small><br>
                  <span class="badge bg-warning">{{ $task['status'] }}</span>
                  <p>{{ Str::limit($task['description'],35,'...') }}</p>
                  <div class="mt-2">
                      <a href="/detail/{{ $task['id'] }}" class="btn btn-primary">Detail</a>
                  </div>
              </div>
          </div>
      </div>
      @endforeach
  </div>
</div>
@endsection
