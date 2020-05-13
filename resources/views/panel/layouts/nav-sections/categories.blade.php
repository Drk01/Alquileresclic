@if (auth()->user()->role == 1)
<li class="nav-item has-treeview menu-close">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tag"></i>
        <p>
            Categorías
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('createCategory') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Crear categoría</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('categoriesList') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Listado de categorías</p>
            </a>
        </li>
    </ul>
</li>
@endif
