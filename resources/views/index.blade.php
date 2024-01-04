 @extends('master')
 
 <!-- debut du carousel -->
 @section('corps')
     
 
 <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/1.jpg" class="taille-img d-block w-100" alt="">          
      </div>
      <div class="carousel-item">
        <img src="image/2.jpg" class="taille-img d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/3.jpg" class="taille-img d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/4.jpg" class="taille-img d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- fin du carousel -->


<!-- debut nouvelle arrivage -->

<div class="arrivage">
    <div class="btn titre btn-primary"> <h2>Nouvelles Arrivages</h2></div>
 </div>
 <marquee behavior="" direction="">
   <section class="nouveau">

     <div class="shadow p-3 mb-5 bg-body-tertiary rounded" >
             <div class="card" style="width: 18rem;">
               <img src="image/arr.jpg" alt="img">
               <div class="card-body">
                 <h5 class="card-title">Samsung Galaxy A64</h5>
                 <p class="card-text"> 128G,8GB RAM,Camera HD <br><span>PRIX:110000 FCFA</span></p>
                 <a href="#" class="btn btn-primary"> Acheter</a>
               </div>
             </div>
       </div>
       <div class="shadow p-3 mb-5 bg-body-tertiary rounded" >
             <div class="card" style="width: 18rem;">
               <img src="image/arr2.jpg" alt="img">
               <div class="card-body">
                 <h5 class="card-title">Ipad Pro</h5>
                 <p class="card-text"> 12,9 pouce, 128G, 4G RAM <br><span>PRIX:17000 FCFA</span></p>
                 <a href="#" class="btn btn-primary"> Acheter</a>
               </div>
             </div>
         </div>

         <div class="shadow p-3 mb-5 bg-body-tertiary rounded" >
               <div class="card" style="width: 18rem;">
                 <img src="image/arr1.jpg" alt="img">
                 <div class="card-body">
                   <h5 class="card-title">Casque Bluethooth</h5>
                   <p class="card-text"> Audio HD <br><span>PRIX:10000 FCFA</span></p>
                   <a href="#" class="btn btn-primary"> Acheter</a>
                 </div>
               </div>
           </div>

           <div class="shadow p-3 mb-5 bg-body-tertiary rounded" >
               <div class="card" style="width: 18rem;">
                 <img src="image/arr4.jpg" alt="img">
                 <div class="card-body">
                   <h5 class="card-title">ASUS nouvelle generation</h5>
                   <p class="card-text"> 230G, 8GB RAM, Ecran 15 pouce <br><span>PRIX:250000 FCFA</span></p>
                   <a href="#" class="btn btn-primary"> Acheter</a>
                 </div>
               </div>
           </div>
         
       
</section> </marquee>

<!-- fin nouvelle arrivage -->

<!-- debut des Produits -->
<div class="shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="produit-text">Nos Produits</h1>
    <div class="produit">

        <div class="produit1">
    
            <div class="smartphone">
                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Smartphone
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="smartphone.html">iphone</a></li>
                    <li><a class="dropdown-item" href="smartphone.html">techno</a></li>
                    <li><a class="dropdown-item" href="smartphone.html">samsung</a></li>
                    <li><a class="dropdown-item" href="smartphone.html">infinix</a></li>
                    <li><a class="dropdown-item" href="smartphone.html">itel</a></li>
                </ul>
            </div>
    
                
                @foreach ($Produit as $Produits)
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                  <div class="card1" style="width: 14rem;">
                      <img src="{{$Produits->image}}" class="card-img-top" alt="smart1">
                      <div class="card-body">
                        <h5 class="card-title">{{$Produits->titre}}</h5>
                        <div class="mb-1 text-muted">{{$Produits->created_at->format('d/m/y')}}</div>
                        <p class="card-text">{{$Produits->sous_titre}}</p>
                        <p class="card-text">{{$Produits->getPrix()}}</p>
                        <a href="{{route('show',$Produits->slug)}}" class="btn btn-primary">acheter</a>
                      </div>
                    </div>
                  </div>
                @endforeach
               
                  
                  

        </div>
    
    
    
    
        <div class="produit2">
            <div class="smartphone"> 
                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Odinateurs
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="ordinateur.html">HP</a></li>
                    <li><a class="dropdown-item" href="ordinateur.html">ASUS</a></li>
                    <li><a class="dropdown-item" href="ordinateur.html">MAC</a></li>
                    <li><a class="dropdown-item" href="ordinateur.html">THINKPAD</a></li>
                    <li><a class="dropdown-item" href="ordinateur.html">SAMSUNG</a></li>
                </ul>
            </div> 
          
              <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="card1" style="width: 14rem;">
                    <img src="image/ordi5.jpg" class="card-img-top" alt="smart1">
                    <div class="card-body">
                      <h5 class="card-title">HP core i5</h5>
                      <p class="card-text">290G 4G RAM 23.8 pouces</p>
                      <p class="card-text">Prix:200.000f</p>
                      <a href="#" class="btn btn-primary">acheter</a>
                    </div>
                  </div>
                </div>
               
                  <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                  <div class="card1" style="width: 14rem;">
                    <img src="image/ordi3.jpg" class="card-img-top" alt="smart1">
                    <div class="card-body">
                      <h5 class="card-title">Toshiba</h5>
                      <p class="card-text">230G 4G RAM 15.3 pouces </p>
                      <p class="card-text">Prix:170.000f</p>
                      <a href="#" class="btn btn-primary">acheter</a>
                    </div>
                  </div>
                </div>
                  <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                  <div class="card1" style="width: 14rem;">
                    <img src="image/ordi2.jpg" class="card-img-top" alt="smart1">
                    <div class="card-body">
                      <h5 class="card-title">Mac Book</h5>
                      <p class="card-text">230G 4G RAM 13 pouces</p>
                      <p class="card-text">Prix:300.000f</p>
                      <a href="#" class="btn btn-primary">acheter</a>
                    </div>
                  </div>
                </div>
                  
                  <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                  <div class="card1" style="width: 14rem;">
                    <img src="image/ordi1.jpg" class="card-img-top" alt="smart1">
                    <div class="card-body">
                      <h5 class="card-title">Mac Bureau</h5>
                      <p class="card-text">500G 8G RAM 23 pouces</p>
                      <p class="card-text">Prix:400.000f</p>
                      <a href="#" class="btn btn-primary">acheter</a>
                    </div>
                  </div>
                </div>
                  
          
        </div>
               
    
        <div class="produit3">
            <div class="smartphone">
                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    accessoirs
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="accessoire.html">routeur wifi</a></li>
                    <li><a class="dropdown-item" href="accessoire.html">bluetooth et écouteurs</a></li>
                    <li><a class="dropdown-item" href="accessoire.html">souris et claviers</a></li>
                    <li><a class="dropdown-item" href="accessoire.html">chargeurs d'ordinateur et telephone</a></li>
                    <li><a class="dropdown-item" href="accessoire.html">clée usb</a></li>
                </ul>
            </div>
    
           
            <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
              <div class="card1" style="width: 14rem;">
                  <img src="image/acc1.jpg" class="card-img-top" alt="smart1">
                  <div class="card-body">
                    <h5 class="card-title">Airpod</h5>
                    <p class="card-text">Audio HD</p>
                    <p class="card-text">Prix:6.000f</p>
                    <a href="#" class="btn btn-primary">acheter</a>
                  </div>
                </div>
              </div>
             
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="card1" style="width: 14rem;">
                  <img src="image/acc2.jpg" class="card-img-top" alt="smart1">
                  <div class="card-body">
                    <h5 class="card-title">Ecouteur Casque</h5>
                    <p class="card-text">Audio HD</p>
                    <p class="card-text">Prix:4.000f</p>
                    <a href="#" class="btn btn-primary">acheter</a>
                  </div>
                </div>
              </div>
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="card1" style="width: 14rem;">
                  <img src="image/acc3.jpg" class="card-img-top" alt="smart1">
                  <div class="card-body">
                    <h5 class="card-title">Clavier sans fil</h5>
                    <p class="card-text">Azerty</p>
                    <p class="card-text">Prix:15.000f</p>
                    <a href="#" class="btn btn-primary">acheter</a>
                  </div>
                </div>
              </div>
                
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="card1" style="width: 14rem;">
                  <img src="image/acc4.jpg" class="card-img-top" alt="smart1">
                  <div class="card-body">
                    <h5 class="card-title">Casque Bluetooth</h5>
                    <p class="card-text">Audio HD</p>
                    <p class="card-text">Prix:12.000f</p>
                    <a href="#" class="btn btn-primary">acheter</a>
                  </div>
                </div>
              </div>
            </div>   
         
      </div>
    </div>
    
    @endsection

<!-- fin des Produits -->
