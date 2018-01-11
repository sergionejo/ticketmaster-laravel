@extends('layouts.app')

@section('style')

.half {
    width: 44%;
    display: inline-block;
    margin-right: 5%;
}

.half-sm {
    width: 25%;
    display: inline-block;
    margin-right: 4%;
}

.margenBajo {
    margin-bottom: 1em;
}

@endsection

@section('content')

<div class="container">
    <h1 class="margenBajo">Bienvenido a la zona de administracion</h1>
</div>

<div class="container">
   
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#homeAdmin">Bienvenido</a></li>
        <li><a data-toggle="tab" href="#eventsAdmin">Eventos</a></li>  
        <li><a data-toggle="tab" href="#genresAdmin">Géneros</a></li>
        <li><a data-toggle="tab" href="#categoriesAdmin">Categorias</a></li>
    </ul>
  
    <div class="tab-content">
        <div id="homeAdmin" class="tab-pane fade in active">
            <h3>Bienvenido a la zona de administracion</h3>
            <p>Desde aqui podrá editar las diferentes partes de la página</p>
        </div>

        <div id="eventsAdmin" class="tab-pane fade">
            <h3 class="margenBajo">Eventos</h3>

            <div class="container">
                @forelse($events as $event)

                    <div class="panel panel-primary half">
                        <div class="panel-heading">{{$event->name}}</div>
                        <div class="panel-body">{{$event->description}}</div>
                    </div>

                @empty
                    <div class="list-empty">No hay ningún evento</div>
                @endforelse
            </div>

        </div>

        <div id="categoriesAdmin" class="tab-pane fade">
            <h3 class="margenBajo">Categorias</h3>

            <div class="container">
                @forelse($categories as $category)

                    <div class="panel panel-primary half-sm">
                        <div class="panel-heading">{{$category->name}}</div>
                    </div>

                @empty
                    <div class="list-empty">No hay ninguna categoria</div>
                @endforelse
            </div>
        </div>

        <div id="genresAdmin" class="tab-pane fade">
            <h3 class="margenBajo">Géneros</h3>
            
            <div class="container">
                @forelse($genres as $genre)

                    <div class="panel panel-primary half-sm">
                        <div class="panel-heading">{{$genre->name}}</div>
                    </div>

                @empty
                    <div class="list-empty">No hay ningún género</div>
                @endforelse
            </div>
        </div>
    </div>
  </div>

@endsection