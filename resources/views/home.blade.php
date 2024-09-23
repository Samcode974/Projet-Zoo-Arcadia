<x-layout>

   <x-slot:title>
       Accueil
   </x-slot>
 

   <div class="hero-scene text-center text-white">
    <div class="hero-scene-content">
        <p>Bienvenue sur notre site partez à la décourverte de notre Parc zoologique et de loisir</p>
        <h1>Zoo Arcadia</h1>
        <a href="/service">
            <button class="btn btn-warning">Visiter</button>
        </a>
    </div>
</div>
<h4 class="text-center mt-3">
    Arcadia est un zoo situé en France près de la fôret de Brocéliane, en Bretagne depuis 1960.<br>
    Nous possèdont tout un panel d'animaux,réparti par habitat (savane, jungle, marais) et nous fesont extrêmement attention à leurs santés.<br>
    Chaque jour, plusieurs vétérinaires viennent effectuer des contrôles sur chaque animaux avant notre ouverture afin de s'assurer des bon déroulement des journées. 
</h4>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imgs/girafe.jpg" class="d-block w-100" alt="goeland">
        </div>
        <div class="carousel-item">
            <img src="imgs/pandaroux.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imgs/animaux-de-zoo-sur-le-fond-de-nature-31663413.webp" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<hr>
<article>
        <div class="container text-center p-4">

            <h2 class="text-center text-primary">Découvrez nos différents habitats des animaux !!</h2>
            @foreach ( $habitats as $habitat )
                
                    <ul class="list-group  align-items-center">
                        <li class="list-group-item list-group-item-info">{{$habitat->nom}}</li>
                    </ul>
             
            @endforeach
            <div class="text-center pt-4">
                <a href="/habitats" class="btn btn-warning">Nos habitats</a>
            </div>
        </div>
    </article>
    <article>
        <div class="text-center">
            <h1>Nos services</h1>
            <h3>Retrouvez sur notre site propose différentes prestations qui vous sont proposer: </h3>
            @foreach ($services as $service )
            <ul class="list-group align-items-center">
                <li class="list-group-item list-group-item-info">{{$service->nom}}</li>
            </ul>
            @endforeach
            <a href="/service">
                <button type="button" class="btn btn-warning m-3">Voir les services</button>
            </a>
        </div>
    </article>
    <article>
        <h1 class="text-center">Nos animaux</h1>
        @foreach ($animals as $animal )
            <ul class="list-group align-items-center">
                <li class="list-group-item list-group-item-info">{{$animal->prenom}}</li>
            </ul>
            @endforeach
    </article>
    <article>
        <div class="container">
            <div class="text-center mt-3">
                <h1>Avis</h1>
                <h3>Votre avis compte laissez nous un commentaire!</h3>
            </div>
            <div class="align-items-center">
                <form method="POST" action="/avis">
                    <div class="row justify-content-center align-items-center">

                        <div class="text-center m-3 col-4"> 
                            <label for="pseudo" class="fw-bolder">Pseudo</label>
                            <input class="form-control" id="pseudo" name="pseudo"></input>
                            <label for="descriptif" class="fw-bolder">Avis</label>
                            <textarea class="form-control" id="descriptif" name="avis"></textarea>
                        </div>

                    </div>
                    <div class="row justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary mt-3 mb-3 col-4 align-items-center">Envoyer votre avis</button>
                    </div>
                </form>
                <h4>Nos avis!!<span class="badge bg-secondary">Nouveau</span></h4>
                @foreach ($users as $user)
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="display:flex">
                    <div class="toast-header">
                        <img src="..." class="rounded me-2" alt="...">
                        <strong class="me-auto">{{$user->name}}</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </article>
</x-layout>
