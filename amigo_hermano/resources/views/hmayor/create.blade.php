@extends('dashboard')
@section('info')
<h1 class='titulo3 center mt-12'>Que es lo que podria ayudarlos</h1>
<div class="row">
    <div class="nuevo card col l6 m8 s12 offset-l3 offset-m2">
        <form action="/hmayor" method="POST" class='p-10'>
            <p>Recuerda que esta práctica ayudará a orientar a los nuevos</p>
            @csrf
            
                <div class="input-field col s8 m8 l8 ">
                
                    <select name="user_id">
                        <option disabled selected>Selecciona quien realizará la actividad de tu lista</option>
                        @foreach($new as $ide)
                        <option value="{{$ide->id}}">{{$ide->name}}</option>
                        @endforeach 
                    </select>
             
                </div>
                <input type="text" name="tema" placeholder="Cual es el tema" required>
                <br><br>
                <textarea name="descripcion" cols="30" rows="10" placeholder="De que trata tu actividad" required></textarea>
                <br><br>
                <input type="text" name="fecha" placeholder="Fecha: dd/mm/aaaa" required>
                <input type="text" name="hora" placeholder="Horario" required>
                <button>Enviar</button><br><br><br>
        </form>
    </div>
</div>
@endsection