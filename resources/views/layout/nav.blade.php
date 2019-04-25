<ul class="nav d-flex justify-content-between">
    <li class="nav-item ">
        <a class="nav-link active" href=" {{ route('home') }}">Accueil</a>
    </li>

        <div class="dropdown">
            <a id="shop" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            Shop
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="{{ route('shop.index') }}">Voir les articles</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('skate.create') }}">Ajouter un skate</a>
        </div>
        </div>


                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:#ff5353">
                                    {{ __('Se déconnecter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

