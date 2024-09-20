<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Todo Manager' }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        @vite(['resources/css/app.css', 'resources/css/form.css', 'resources/js/app.js'])
    </head>
    <body>
    @env('local')
    <div style="text-align:center; position: fixed; z-index: 50; width:100%"> EN DEVELOPPEMENT </div>
    @endenv
        <header>
        <nav class="navbar navbar-expand-lg bg-body-primary" style="background-color:green">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Arcadia
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="/home">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/service" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/service">Restauration</a></li>
                    <li><a class="dropdown-item" href="#visite">Visite des habitats</a></li>
                    <li><a class="dropdown-item" href="#train">Visite du zoo en train</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/habitats" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Habitats
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/habitats">Savane</a></li>
                    <li><a class="dropdown-item" href="#">Jungle</a></li>
                    <li><a class="dropdown-item" href="#">Marais</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/signIn">Connexion/Deconnexion</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main>


        {{ $slot }}
        
        </main>
        <footer class="bg-dark text-warning text-center footer">
            <h3>A propos de nous</h3>
        <div class='row row-cols-2'>
            <div class="col-12 col-lg-6">
                <p>Nos horaires d'ouvertures:</p>
                <p>lundi: 8h00-19h00</p>
                <p>Mardi: 8h00-19h00</p>
                <p>Mercredi: 8h00-19h00</p>
                <p>Jeudi: 8h00-19h00</p>
                <p>Vendredi: 8h00-19h00</p>
                <p>Samedi:8h00-19h00</p>
                <p>Dimanche: 8h00-18h00</p>
            </div>
            <div class="col-12 col-lg-6">
                Comment nous joindre:
            </div>
        </div>
    </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>