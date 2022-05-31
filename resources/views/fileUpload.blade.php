<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejemplo de subida de archivos</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading"><h2>Ejemplo de subida de archivos</h2></div>
      <div class="panel-body">
   
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        <a href="uploads/{{ Session::get('file') }}" target="_blank">{{ Session::get('file') }}</a>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Ups!</strong> Hay un problema con la entrada de este archivo.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
  
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Subir</button>
                </div>
   
            </div>
        </form>
  
      </div>
    </div>
</div>
</body>

</html>