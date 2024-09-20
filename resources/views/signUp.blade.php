<x-layout>

   <x-slot:title>
       Créer son compte
   </x-slot>

<div class="container">
    <form class="row g-3">
        <div class="col-6 col-md-8">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" placeholder="Nom">
        </div>
        <div class="col-6 col-md-8">
            <label for="firstName" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="firstName" placeholder="Prénom">
        </div>
        <div class="col-6 col-md-8">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-6 col-md-8">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12 mb-3">
        <button type="submit" class="btn btn-primary">Se connecter</button>
        </div>
  </form>
</div>

</x-layout>