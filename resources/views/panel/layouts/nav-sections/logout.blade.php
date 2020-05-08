<li class="nav-item">
    <a href="#" onclick="$('#salir').submit()" class="nav-link">
        <i class="nav-icon fas fa-door-open"></i>
        <p>
            Salir
        </p>
    </a>
</li>

<form id="salir" action="{{ route('logout') }}" method="POST">
    @csrf
</form>
