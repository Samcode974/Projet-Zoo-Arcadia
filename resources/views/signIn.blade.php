<x-layout>

   <x-slot:title>
       Connexion
   </x-slot>

<div class="container">
    <form class="row-2 g-3 align-items-center">
        <div class="col-md-6">
          <label for="mail" class="form-label text-center fw-bolder">Email</label>
          <input type="email" class="form-control" id="mail">
        </div>
        <div class="col-md-6">
          <label for="passwrd" class="form-label fw-bolder">Mot de passe</label>
          <input type="password" class="form-control" id="passwrd">
        </div>
        <div class="col-12 text-center">
          <a href="/home"><button type="submit" class="btn btn-primary">Se connecter</button></a>
        </div>
        <div class="col-12 text-center m-3">
            <p>Vous ne possedez pas encore de compte créer en un maintenant</p>
                <a style="text-decoration:none, text-white" href="/signUp">
                    <button type="submit" class="btn btn-primary">Créer un compte</button>
                </a>
        </div>
    </form>
</div>

</x-layout>