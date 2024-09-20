<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Habitat;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function show () : View
    {
        return view('home', [
            'habitats' => Habitat::all(), 'animals'=>Animal::all(), 'services' => Service::all(), 'users' => User::all(),
        ]);
    }
}
