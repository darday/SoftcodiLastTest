

<form action="{{ url('/estudiante') }}" method="post" enctype="multipart/form-data">
@csrf
@include('estudiante.form',['modo'=>'Crear']);


</form>