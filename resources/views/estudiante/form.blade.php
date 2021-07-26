
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>    
    <div class="container">
                <div style="padding-left: 3%">
                    <h1>{{ $modo }} estudiante</h1>
                </div>
                <br>
                
                    @if(count($errors)>0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach( $errors->all() as $error )
                            <li> {{ $error }} </li>
                                @endforeach     
                            </ul>
                        </div>   
                    @endif

        <div class="row">
            <div class="col-sm-6">                
                <div class="form-group">
                        <lable for="Nombre" style="padding-left: 3%">Nombres</label>
                    <div style="padding-left: 3%">
                        <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($estudiante->Nombre)?$estudiante->Nombre:old('Nombre') }}">
                    </div>
                </div>                
            </div>
            <br>
                    
            <div class="col-sm-6">
                <div class="form-group">
                        <label for="Apellido" style="padding-left: 3%">Apellidos</label>
                    <div style="padding-left: 3%">
                        <input type="text" class="form-control" name="Apellido" id="Apellido" value="{{ isset($estudiante->Apellido)?$estudiante->Apellido:old('Apellido') }}">
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                        <label for="Telefon" style="padding-left: 3%">Teléfono</label>
                    <div style="padding-left: 3%" >
                        <input type="text" class="form-control " name="Telefono" id="Telefono" value="{{ isset($estudiante->Telefono)?$estudiante->Telefono:old('Telefono') }}">
                    </div>
                </div>
            </div>
            <br>
        

            <div class="col-sm-6">
                <div class="form-group">
                        <label for="Correo" style="padding-left: 3%">Correo electrónico</label>
                    <div style="padding-left: 3%">
                        <input type="text" class="form-control" name="Correo" id="Correo" value="{{ isset($estudiante->Correo)?$estudiante->Correo:old('Correo') }}">
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                        <label for="Celular" style="padding-left: 3%">Celular</label>
                    <div style="padding-left: 3%">
                        <input type="text" class="form-control" name="Celular" id="Celular" value="{{ isset($estudiante->Celular)?$estudiante->Celular:old('Celular') }}">
                    </div>
                </div>
            </div>
            <br>

            <div class="col-sm-6">
                <div class="form-group">
                        <label for="Contrasenia" style="padding-left: 3%">Contraseña</label>
                    <div style="padding-left: 3%">
                        <input type="password" class="form-control" name="Contrasenia" id="Contrasenia" value="{{ isset($estudiante->Contrasenia)?$estudiante->Contrasenia:old('Contrasenia') }}">
                    </div>
                </div>
            </div>
        </div>
        <br>  

        <div class="col-md-6">
            <div class="form-group">
                    <label for="NombreUsuario" style="padding-left: 3%">Nombre de usuario</label>
                <div style="padding-left: 3%">
                    <input type="text" class="form-control" name="NombreUsuario" id="NombreUsuario" value="{{ isset($estudiante->NombreUsuario)?$estudiante->NombreUsuario:old('NombreUsuario') }}">
                </div>
            </div>
        </div>
        <br>

        <div style="padding-left: 2%">    
            <input type="submit" class="btn btn-primary" value="{{$modo}} datos">
            <a href="{{ url('/estudiante/') }}" class="btn btn-primary"> Regresar</a>
        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>

