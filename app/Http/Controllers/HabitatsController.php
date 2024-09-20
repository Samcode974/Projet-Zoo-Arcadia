<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Habitat;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HabitatsController extends Controller
{
    public function show(): View
    {
        $habitats = Habitat::all();
        return view('habitats', [
            'habitats' => $habitats, 'animals'=>Animal::all(),
        ]);
    }
}
