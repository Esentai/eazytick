<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $items = Item::all();
//       return view('welcome', compact('items'));
        return view('welcome')->with(compact('items'));
    }
}
