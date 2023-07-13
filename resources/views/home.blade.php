<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stastistik</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Project Stastistik</a>
        </div>
    </nav>
 
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>form nilai mahasiswa</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            @livewire('post')
        </div>
    </div>

    <div class="col-auto">
    <a herf="/exportexcel" class="btn btn-success">import excel</a>
</div>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button> 
          </div>
      </div>
        <form action="/admin/import" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" class="form-control">
            <div class="col-span-6 sm:col-span-4">
                <button type="submit" class="rounded-lg border-transparent bg-blue-400 text-gray-200 px-4 py-2 hover:bg-green-500">Upload</button>
            </div>
        </form>
     
    @livewireScripts
</body>
</html>