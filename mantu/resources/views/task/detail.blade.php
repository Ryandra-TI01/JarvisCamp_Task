<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container pt-5">
        <h2 class="text-center">Detail Tugas</h2>
        <hr>
        <a href="/tasks">Kembali</a><br><br>
        <h4>{{ $task_detail['name'] }}</h4>
        <small>Deadline : {{ ($task_detail['deadline']) }}</small><br>
        <small>Deadline : {{ \Carbon\Carbon::parse($task_detail['deadline'])->diffForHumans() }}</small><br>
        <span class="badge bg-warning">{{ $task_detail['status'] }}</span>
        <p>{{ $task_detail['description'] }}</p>




        {{-- <div class="row">
            <div class="col-12 col-md-4 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $task['name'] }}</h4>
                        <small>Deadline :{{ \Carbon\Carbon::parse($task['deadline'])->diffForHumans() }}</small><br>
                        <span class="badge bg-warning">{{ $task['status'] }}</span>
                        <p>{{ Str::limit($task['description'],35,'...') }}</p>

                        <div class="mt-2">
                            <a href="/detail/{{ $task['id'] }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>