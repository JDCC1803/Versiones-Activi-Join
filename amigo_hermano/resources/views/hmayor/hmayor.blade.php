@extends('dashboard')
@section('info')
<div class="row">
    <div class="col l10 m10 s10 offset-l1">
        <h3 class="titulo1 center mt-12">Lista de actividades</h3><br>
        <p class='texto center'>Descubre quienes quieren aprender lo mismo que tu</p>
    </div>
    <div class="col l6 m10 s10 offset-l1">
        <div class="card mt-20">
            <table class='centered highlight'>
                <thead>
                    <th>ID</th>
                    <th>Estudiante</th>
                    <th>Tema</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                @foreach ($new as $ide)
                    <tr>
                        <td>{{$ide->id}}</td>
                        <td>{{$ide->user->name}}</td>
                        <td>{{$ide->tema}}</td>
                        
                        <td>{{$ide->fecha}}</td>
                        <td>{{$ide->hora}}</td>
                        <td><a href="{{route('hmayor.show',$ide->id)}}" class='btn-floating light-green accent-4'><i class="material-icons">visibility</i></a>
                        <a href="{{route('hmayor.edit',$ide->id)}}" class='btn-floating light-blue accent-4'><i class="material-icons">autorenew</i></a>
                        <a href="{{route('destroy',$ide->id)}}" class='btn-floating red accent-4'><i class="material-icons">delete_forever</i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection