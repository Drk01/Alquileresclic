@if (auth()->user()->role == 1)
<li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tag"></i>
        <p>
            Categorías
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('createCategory') }}" @if (\Request::route()->getName()== 'createCategory') class=" nav-link active"
                @else
                class="nav-link" @endif>
                <i class="far fa-circle nav-icon"></i>
                <p>Crear categoría</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('categoriesList') }}" @if (\Request::route()->getName()== 'categoriesList') class=" nav-link active"
                @else
                class="nav-link" @endif>
                <i class="far fa-circle nav-icon"></i>
                <p>Listado de categorías</p>
            </a>
        </li>
    </ul>
</li>
@endif
