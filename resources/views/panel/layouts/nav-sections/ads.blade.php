@if (auth()->user()->role == 1 || auth()->user()->role == 2)
<li class="nav-item">
    <a href="{{ route('ads') }}" class="nav-link">
        <i class="nav-icon fas fa-ad"></i>
        <p>
            Anuncios
        </p>
    </a>
</li>
@endif
