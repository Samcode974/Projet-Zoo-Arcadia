<x-layout>

   <x-slot:title>
       Habitats
   </x-slot>
 
<div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <h1>Habitats</h1>
    </div>
</div>

<div clas="container">
    <div class="row row-cols-2 row-cols-lg-3">
            @foreach ($habitats as $habitat)
              <div class="col p-3">
                  <div class="image-card text text-white">
                      <img alt="" src="/imgs/maraisgit.jpg" class="rounded w-100"/>
                      <p class="titre-image">{{$habitat->nom}}</p>
                      <p class="titre-description">{{$habitat->description}}</p>
                  </div>
              </div>
            @endforeach
            <!-- <div class="col p-3">
                <div class="image-card text text-white">
                    <img alt="" src="/imgs/marais.jpg" class="rounded w-100"/>
                    <p class="titre-image">Marais</p>
                </div>
            </div>
            <div class="col p-3">
                <div class="image-card text text-white">
                    <img alt="" src="/imgs/jungle1.jpg" class="rounded w-100"/>
                    <p class="titre-image">Jungle</p>
                </div>
            </div>
            <div class="col p-3">
                <div class="image-card text text-white">
                    <img alt="" src="/imgs/savane1.jpg" class="rounded w-100"/>
                    <p class="titre-image">Savane</p>
                </div> -->
            </div>
    <!— Ajouter d’autres images —>
    </div>
</div>
<div class="container">
    <div class="row row-cols-4">
    @foreach ($animals as $animal)
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img src="/imgs/pandaroux.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$animal->prenom}}</h5>
          <p class="card-text"> {{$animal->etat}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Race : </li>
          <li class="list-group-item">Habitat : </li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
      @endforeach
    </div>
   
    
</x-layout>