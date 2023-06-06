crear regristro

<form action="{{url('/registro')}}" method="post" enctype="multipart/form-data">


    @csrf       
    @include('registro.form');
</form>
