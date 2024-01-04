@extends('master')

@section('compte')
<section class="cpt">
    <div class="compte"> 
  
    <form action="">
      <h2>Créer un compte</h2>
      <div class="compte2">
      <input type="text" name="user" id="user" placeholder="Nom d'utilisateur" required><br>
      <input type="text" name="nom" id="nom" placeholder="Nom" required>
      <input type="text" name="prenom" id="prenom" placeholder="Prenom" required><br> 
      <input type="email" name="nom" id="nom" placeholder="Adresse mail"><br>
      <input type="password" name="passe" id="passe" placeholder="Mot de passe" required><br>
      <input type="submit" value="Créer">
    </div>
    </form>
  
  
  
  </div>
  </section>
@endsection