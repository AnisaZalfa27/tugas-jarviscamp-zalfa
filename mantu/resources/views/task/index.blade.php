<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container">
        <h1 class="text-center">Daftar Tugas</h1>
        <hr>
        <div class="row">
            @foreach($tasks as $task)
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $task['name'] }}</h4>
                        <small>deadline :{{ \Carbon\Carbon::parse($task['deadline'])->format('d m Y') }}</small><br>
                        <span class="badge bg-warning">{{ $task['status'] }}</span>
                        <p class="card-text">{{ Str::limit($task['description'], 40, '...') }}</p>
                        <div class="nt-2">
                            <a href="#" class="btn btn-warning">Detail</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
     </div>


      
  </body>
</html>