<?php

namespace App\Http\Controllers;

use App\Models\FavoriteFood;
use Illuminate\Http\Request;

class FavoriteFoodController extends Controller
{
    public function index()
    {
        $foods = FavoriteFood::all();
        return view('favorite_food.index', compact('foods'));
    }
}
