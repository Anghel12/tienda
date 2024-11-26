@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDIT</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($brand, ['route' => ['admin.brands.update', $brand], 'autocomplete' => 'off', 'files' => true, 'method' => 'PUT']) !!}

         {!! Form::hidden('user_id', auth()->user()->id) !!} 
        
       @include('admin.brands.partials.form')  

        {!! Form::submit('Actualizar Preevedores', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src=" {{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}} "></script>

   <script>
     $(document).ready( function() {
        $("#title").stringToSlug({
          setEvents: 'keyup keydown blur',
          getPut: '#slug',
          space: '-'
        });
      });
   </script>
@stop