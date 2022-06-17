<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="col l10 m10 s10 offset-l1">
        <h1 class=" titulo1 center mt-12">Perfiles de los nuevos</h1><br>
        <p class='texto center'>Conoce quienes son los interesados en unirse al proyecto de ayuda</p>
        <div class="col l12 m12 s12">
            @foreach($new as $ide)
            <div class="col s12 m6 l4 card card-width bg-gradient-to-bl from-orange-400 to-rose-400 cards">
                <div class="card-content white-text center-align">
                    <div class="col s12 right">
                            <i class="material-icons right white-text">favorite</i>
                    </div>
                    <h1 class='center black-text col l12'>{{$ide->name}}</h1>
                    <a class="waves-effect waves-light btn modal-trigger border-round mt-7 z-depth-4" href="#card{{$ide->id}}">Ver perfil</a>
                </div>
            </div>
    <!-- Modal Structure -->
        <div class="add">
            <div id="card{{$ide->id}}" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4 class='titulo3 center'>{{$ide->id}}</h4><br>
                    <p class='texto-card'>{{$ide->name}}</p>
                    <br><p class='texto-card'>Etiquetas.</p>
                    <form action="/hmenor" method="POST">
                        @csrf
                        <input type="hidden" name="name" value="{{$ide->name}}" required>
                        <input type="hidden" name="user_id" value="{{$ide->id}}" required>
                        <button>Agregar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                </div>
            </div>
        </div>
        @endforeach
</div>
