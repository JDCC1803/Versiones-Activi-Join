@extends('dashboard')
@section('info')
    <div class="row mt-20">
        <div class="col l6 m6 s12 offset-l4 offset-m3">
            <div class="card p-10 vista">
                <h2>{{$ver->tema}}</h2>
                <p class='texto-card'>{{$ver->descripcion}}</p><br>
                <p>Fecha:</p>
                <p>{{$ver->fecha}}</p><br>
                <p>Hora:</p>
                <p>{{$ver->hora}}</p><br>
                <div class="row">
                    <div class="col s4">
                        <br><a href="#Like" class='btn-floating bg-gradient-to-r from-teal-400 to-blue-500 right'><i class="material-icons">thumb_up</i></a>
                    </div>
                    <div class="col s4 offset-s2">
                        <br><a href="#Dislike" class='btn-floating bg-gradient-to-b from-rose-400 via-fuchsia-500 to-indigo-500 right'><i class="material-icons">thumb_down</i></a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
@endsection