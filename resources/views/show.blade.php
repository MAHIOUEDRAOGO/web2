<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('acceuil.css')}}">
</head>
<body>
    {{-- debut heder --}}
    <div class="navigation sticky-top">
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
          <a href=""><img src="{{asset('image/cart.jpg')}}" width="40" height="40" alt="cart">  {{Cart::count()}}</a>
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
    </div>
    {{-- fin header --}}


{{-- debut contenu --}}

               <div class="shadow d-flex p-3 mb-1 bg-body-tertiary rounded ">
                <div class="card1" style="width: 14rem;">
                   
                    <div class="card-body">
                      <h5 class="card-title">{{$Produits->titre}}</h5>
                      <div class="mb-1 text-muted">{{$Produits->created_at->format('d/m/y')}}</div>
                      <p class="card-text">{{$Produits->sous_titre}}</p>
                      <p class="card-text">{{$Produits->getPrix()}}</p>
                      <form action="{{route('cart.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="Produits_id" value="{{$Produits->id}}">
                        {{-- pour empêcher un utilisateur de modifier le prix lorsqu'il veut inspecter --}}
                        {{-- <input type="hidden" name="titre" value="{{$Produits->titre}}">
                        <input type="hidden" name="prix" value="{{$Produits->prix}}"> --}}
                        <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                      
                    </form>
                    </div>
                  </div>
                  <div class="col-auto d-none d-lg-block"> <img src="{{$Produits->image}}" alt="smart1"></div>
                </div>
              
{{-- fin contenu --}}



{{-- debut footer --}}

@include('footer')
{{-- fin footer --}}


    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>





               
             
               
              
              
                 
                 

       
   
   
   


