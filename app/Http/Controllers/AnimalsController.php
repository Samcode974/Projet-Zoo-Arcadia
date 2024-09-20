<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnimalsController extends Controller
{
    public function show(): View
    {
        return view('animals', [
            'animals' => Animal::all()
        ]);
    }
}
