<li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-ad"></i>
        <p>
            Anuncios
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @if (auth()->user()->role == 1 || auth()->user()->role == 2)
        <li class="nav-item">
            <a href="{{ route('ads') }}" @if (\Request::route()->getName()== 'ads') class=" nav-link active"
                @else
                class="nav-link"
                @endif>
                <i class="far fa-circle nav-icon"></i>
                <p>Moderación de anuncios</p>
            </a>
        </li>
        @endif
        @if (auth()->user()->role == 0)
        <li class="nav-item">
            <a href="{{ route('createAd') }}" @if (\Request::route()->getName()== 'createAd') class=" nav-link active"
                @else
                class="nav-link"
                @endif>
                <i class="far fa-circle nav-icon"></i>
                <p>Crear anuncio</p>
            </a>
        </li>
        @endif
        @if (auth()->user()->role == 0)
        <li class="nav-item">
            <a href="{{ route('myAds') }}" @if (\Request::route()->getName()== 'myAds') class=" nav-link active"
                @else
                class="nav-link"
                @endif>
                <i class="far fa-circle nav-icon"></i>
                <p>Ver mis anuncios</p>
            </a>
        </li>
        @endif
        @if (auth()->user()->role == 1)
        <li class="nav-item">
            <a href="{{ route('getAllAds') }}" @if (\Request::route()->getName()== 'getAllAds') class=" nav-link active"
                @else
                class="nav-link"
                @endif>
                <i class="far fa-circle nav-icon"></i>
                <p>Ver todos los anuncios</p>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <a href="{{ route('getMyFavorites') }}" @if (\Request::route()->getName()== 'getMyFavorites') class="
                nav-link
                active"
                @else
                class="nav-link"
                @endif>
                <i class="far fa-circle nav-icon"></i>
                <p>Anuncios favoritos</p>
            </a>
        </li>
    </ul>
</li>
