@extends('app')

  

@section('content')

<div class="container">

<div class="row">

    <div class="col-md-10 col-md-offset-1">

    {!! Form::model($movie,['route' => 'movie.update', 'method' => 'put', 'novalidate']) !!}

             

                {!! Form::hidden('id', $movie->id) !!}

             

                <div class="form-group">

                      {!! Form::label('full_name', 'Nombre') !!}

                      {!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required']) !!}

                  </div>

  

                  <div class="form-group">

                      {!! Form::label('email', 'Descripci&oacute;n') !!}

                      {!! Form::text('description', null, ['class' => 'form-control' , 'required' => 'required'])

!!}

                  </div>

             

                <div class="form-group">

                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}

                  </div>

            {!! Form::close() !!}

    </div>

</div>

</div>

@endsection