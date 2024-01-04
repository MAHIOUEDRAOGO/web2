@extends('master')

@section('connexion')
<section class="cpt">
    <div class="compte"> 
    
      <form action="">
        <h2>Connexion</h2>
        <div class="compte2">
        <input type="email" name="nom" id="nom" placeholder="Adresse mail" required><br>
        <input type="password" name="passe" id="passe" placeholder="Mot de passe" required><br>
        <input type="submit" value="Connecter"><br>
        <a href="">Mot de passe oublier ?</a>
      </div>
      </form>
    
    
    
    </div>
    </section>
@endsection