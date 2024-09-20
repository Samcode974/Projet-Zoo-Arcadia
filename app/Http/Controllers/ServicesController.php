<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ServicesController extends Controller
{
    public function show(): View
    {
        Log::info('Hi there!');
        return view('service', [
            'services' => Service::all(),
        ]);
    }

    public function add(Request $request)
    {
        Log::info('POST SERVICE');
        $nameService = $request->input("nom");
        $descriptionService = $request->input("description");
        $image = $request->file('image');

        /**
         * On récupère l'image et on sauvegarde sur notre disque dur
        **/
        //On créé un nom de fichier ex:  test_15452.jpg
        $nomImage = Str::slug($nameService)."_".uniqid().".".$image->extension();
        //on stock image dans /storage/app/images/services/ et on récupère le chemin dans la variable $path
        $pathPublic = "storage/images/services/". $nomImage;
        $image->storeAs("public/images/services/",  $nomImage);

        
        //Stocker dans la base de donnée
        $newService = Service::create([
            "nom"=> $nameService,
            "description" => $descriptionService,
            "image"=> $pathPublic
        ]);

        return redirect()->route('services');
    }

    public function delete(Request $request, string $id)
    {
        echo $id;

        //suppresion dans la bdd et l'image sur le DD

    }
}
