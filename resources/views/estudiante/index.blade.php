
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style1.css"> 
    </head>
    <body>
        <center><h1>Estudiantes Registrados</h1></center>  
<div class="container">
<div class="table-responsive">            
    <div style="padding-left: 6%">
        
        
        
        @if(Session::has('Mensaje'))
            <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('Mensaje') }}
           <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>  -->
        @endif
</div>
    
    <br>

      <!--  @section('css')
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
        @endsection -->


        
        
            
           

        <a href="{{ url('/estudiante/create') }}" class="btn btn-primary"> Registrar nuevo estudiante</a>        

<br>
    
        <table class="table align-middle">       
            <thead>
                <tr>
                    <th >#</th>
                    <th >Nombres</th>
                    <th >Apellidos</th>
                    <th >Teléfono</th>
                    <th >Correo electrónico</th>
                    <th >Celular</th>
                    <th >Nombre de usuario</th>
                    <th >Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $estudiantes as $estudiante )
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->Nombre }}</td>
                    <td>{{ $estudiante->Apellido }}</td>
                    <td>{{ $estudiante->Telefono }}</td>
                    <td>{{ $estudiante->Correo }}</td>
                    <td>{{ $estudiante->Celular }}</td>
                    <td>{{ $estudiante->NombreUsuario }}</td>
                    <td>
                    <a href="{{ url('/estudiante/'.$estudiante->id.'/edit') }}" class="btn btn-primary btn-sm">
                    Editar</a> |  
                    
                    <form action="{{url('/estudiante/'.$estudiante->id )}}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Desea borrar?')" class="btn btn-primary btn-sm" class="d-inline" value="Borrar">
                    
                    </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $estudiantes->links() !!}
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>







</body>
<!--@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script>
$('#example').DataTable();
</script>
@endsection -->

</html>