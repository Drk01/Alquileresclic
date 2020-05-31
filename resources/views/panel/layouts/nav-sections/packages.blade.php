@if (auth()->user()->role == 0)
<li class="nav-item">
    <a href="{{ route('showPackageOptions') }}" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>
            Paquetes
        </p>
    </a>
</li>
@endif
