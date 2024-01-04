
        <!-- debut de la navbar -->
        <div class="navigation sticky-top ">
            <div class="nav1 ">
              <div class="logo"><img src="{{asset('image/logo1.png')}}" width="50" height="50" alt=""><span translate="no">Open tech</span> </div>
              <form class="d-flex" role="search">
                <input class="form-control recherche me-2  " type="search" placeholder="Exemple: Ordinateur" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Recherche</button>
              </form>
              <div class="user">
                <li class="nav-item dropdown">
                <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('image/user.jpg')}}" width="40" height="40" alt="user">  </a>
              <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('connexion')}}">Se Connecter </a></li>
                    <li><a class="dropdown-item" href="{{route('compte')}}">Créer un compte</a></li>
              </ul>  
              </li>
                <a class="text-muted" href="{{route('cart.index')}}"><img src="{{asset('image/cart.jpg')}}" width="40" height="40" alt="cart"> {{Cart::count()}} </a>
              </div>
            </div>
            <div class="nav2 container-fluid navbar-expand-lg">
              <ul>
                <li><a href="{{route('acceuil')}}">Acceuil</a></li>
                <li class="nav-item dropdown">
                  
                  <a class="nav-link survol dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Produits
                  </a>
                
                  <ol class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('phone')}}">Smartphones</a></li>
                    <li><a class="dropdown-item" href="{{route('ordinateur')}}">Ordinateurs</a></li>
                    <li><a class="dropdown-item" href="{{route('accessoire')}}">Accessoires</a></li>
                  </ol>
                </li>
                <li><a href="{{route('propos')}}">Qui sommes-nous?</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
              </ul>
            </div>
            @if (session('success'))
    <div class="alert alert-success"> {{session('success')}}</div>
@endif
          </div>

        <!-- fin de la navbar -->