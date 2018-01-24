@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar Show</h1>

    {!! Form::open(['action' => [ 'ShowController@editShow', $show->id]]) !!}
    <div class="form-group">

        <div>

        <h4> <span class="label label-primary">Evento</span></h4></div>    
        {!! Form::select('event[]', ($events), null, 
            ['multiple'=>false,'class' => 'form-control margin']) !!}

        <label for="date" class="label label-primary">Fecha</label>
        <input class="form-control" value={{$show->date}} type="date" name="date" id="date">
                        
        <h4> <span class="label label-primary">Ubicacion</span></h4>   
        {!! Form::select('ubication[]', ($ubications), null, 
            ['multiple'=>false,'class' => 'form-control margin']) !!}

        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Editar Show',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
             </div>
    {!! Form::close() !!}
</div>

@endsection