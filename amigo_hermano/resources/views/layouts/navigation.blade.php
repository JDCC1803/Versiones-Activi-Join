<nav>
    <div class="nav-wrapper">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
            <li><a class="" href="{{route('dashboard')}}">Logo</a></li>
            <li><a class=" black-text  " href="{{route('dashboard')}}">Inicio</a></li>
            <li><a class=" black-text  " href="{{route('hmayor.index')}}">Perfil</a></li>
            <li><a class=" black-text  " href="{{route('hmenor.create')}}">Agregar</a></li>
            <li><a class=" black-text  " href="{{route('hmayor.create')}}">Crear</a></li>
            <li><a class=" black-text  " href="{{route('hmayor.index')}}">Capacitaciones</a></li>
            <li><a class=" black-text  " href="{{route('hmenor.index')}}">Hermano_Mayor</a></li>
        </ul>
        <ul class="right hide-on-med-and-down"><li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li></ul>
        
        
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
    <li><a class=" black-text  " href="{{route('dashboard')}}">Inicio</a></li>
    <li><a class=" black-text  " href="{{route('hmayor.index')}}">Perfil</a></li>
    <li><a class=" black-text  " href="{{route('hmenor.create')}}">Agregar</a></li>
    <li><a class=" black-text  " href="{{route('hmayor.create')}}">Crear</a></li>
    <li><a class=" black-text  " href="{{route('hmayor.index')}}">Capacitaciones</a></li>
    <li><a class=" black-text  " href="{{route('hmenor.index')}}">Hermano_Mayor</a></li>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a class=" black-text  " href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesión<a>
    </form>
</ul>
<ul id="dropdown1" class="dropdown-content">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a class=" black-text  " href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesión<a>
    </form>
</ul>
