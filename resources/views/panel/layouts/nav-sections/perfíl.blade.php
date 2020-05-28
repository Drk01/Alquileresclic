<li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Mi cuenta
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('editMyProfile') }}" @if (\Request::route()->getName()== 'editMyProfile') class=" nav-link active"
                @else
                class="nav-link"
                @endif>
                <i class="far fa-user nav-icon"></i>
                <p>Editar mi perfil</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('changePassword') }}" @if (\Request::route()->getName()== 'changePassword') class=" nav-link active"
                @else
                class="nav-link"
                @endif>
                <i class="fas fa-key nav-icon"></i>
                <p>Cambiar contraseña</p>
            </a>
        </li>
    </ul>
</li>
