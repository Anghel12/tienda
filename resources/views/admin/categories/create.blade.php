@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR CATEGORIA</h1>
@stop

@section('content')

    
    <div class="card-minimalista">
        <div class="card-body">
            {!! Form::open( ['route' => 'admin.categories.store']) !!}

            @include('admin.categories.partials.form')
            

            {!! Form::submit('crear categoria', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}

        </div>
    </div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <!-- table css -->
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>

   <script>
     $(document).ready( function() {
        $("#name").stringToSlug({
          setEvents: 'keyup keydown blur',
          getPut: '#slug',
          space: '-'
        });
      });
   </script>
@stop