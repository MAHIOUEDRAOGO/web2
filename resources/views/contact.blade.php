@extends('master')

@section('contact')
<div class="contact-parent">
    <div class="contact1">
     <div><h3><i class="fa-solid fa-location-dot p-1"> </i> Localisation</h3> <p>Nous sommes au Burkina fasso precisement dans les ville tel que: <br>
    Ouagadougou, Bobo dioulasso, Koudougou, Ouahiyougya</p></div>
     <div><h3>Email:</h3><i class="fa-solid fa-envelope p-1"></i> opentech@gmail.com</div>
     <div><h3>Appel:</h3><i class="fa-solid fa-phone p-1 "></i> +226 65840363<br> <i class="fa-brands fa-whatsapp p-1"></i> +226 54946047</div> 
     <div><h3>Horaires:</h3> <p>24h/24 <br>7jrs/7</p></div>
    </div>
   
    <div class="contact2">
        <form action="">
              <h3> Contactez-nous via ce formulaire</h3>
              <input type="text" name="NnPr" id="NnPr" placeholder="Nom et prenom">
              <input type="email" placeholder="adresse email"><br><br>
              <input type="text" name="sujet" id="sujet" placeholder="sujet"><br><br>
              <textarea name="message" id="message" cols="65" rows="3" placeholder="Message"></textarea><br>
              <input type="submit" value="Envoyer">
      
          </form>
          
      </div>

    </div>
@endsection