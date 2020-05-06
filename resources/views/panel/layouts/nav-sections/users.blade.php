@if (auth()->user()->role == 1 || auth()->user()->role == 2)
<li class="nav-item">
    <a href="{{ route('users') }}" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Usuarios
        </p>
    </a>
</li>
@endif
