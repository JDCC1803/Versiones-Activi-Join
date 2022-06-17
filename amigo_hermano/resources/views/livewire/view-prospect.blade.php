<div>
    {{-- In work, do what you enjoy. --}}
    <div class="col l10 m10 s10 offset-l1">
        <h3 class="titulo1 center mt-12">Quienes te seguiran</h3><br>
        <p class='texto center'>Mira quienes son tus hermanos menores y ayudalos a elegir bien su carrera</p>
    </div>
    <div class="col l6 m10 s10 offset-l1">
        <div class="card mt-20">
            <table class='centered highlight'>
                <thead>
                    <th>ID</th>
                    <th>Estudiante</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                @foreach ($new as $ide)
                    <tr>
                        <td>{{$ide->id}}</td>
                        <td>{{$ide->user->name}}</td>
                        
                        <td><a href="{{route('hmenor.show',$ide->id)}}" class='left btn-floating light-green accent-4'><i class="material-icons">visibility</i></a>
                            <form action="{{route('hmenor.destroy',$ide->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="user_id" value="{{$ide->user_id}}" required>
                            <input type="hidden" name="id" value="{{$ide->id}}" required>
                            <button class='btn-floating red accent-4'><i class="material-icons">delete_forever</i></button>
                        </form></td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
