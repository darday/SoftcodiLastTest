

<form action="{{ url('/estudiante/'.$estudiante->id) }}" method="post" enctype="multipart/for-data">
@csrf
{{ method_field('PATCH') }}

@include('estudiante.form', ['modo'=>'Editar']);

</form>