<x-layout>

    <x-slot:title>
        Contact
        </x-slot>

        <div class="hero-scene text-center text-white">
            <div class="hero-scene-content">
                <h1>Contact</h1>
            </div>
        </div>
        <div class="container">
            <div class="text-center mt-3">
                <h3>Vous souhaitez nous contacter ou nous faire part d'une demande, renseignez votre message ainsi que votre adresse pour que nous puissions traiter votre demande!!</h3>
            </div>
            <div class="align-items-center">
                <form class="row align-items-center" action="POST">
                    <div class="text-center m-3">
                        <label for="title" class="form-label fw-bolder">Titre</label>
                        <input type="texte" id="title">
                    </div>
                    <div class="text-center m-3">
                        <label for="descriptif" class="fw-bolder">Description</label>
                        <textarea class="form-control" id="descriptif"></textarea>
                    </div>
                    <div class="text-center  m-3">
                        <label for="mail" class="form-label fw-bolder">Email</label>
                        <input type="email" id="mail">
                    </div>
                </form>
                <button type="submit" class="btn btn-primary mt-3 mb-3 align-items-center">Envoyer votre demande</button>
            </div>
            </div>
</x-layout>