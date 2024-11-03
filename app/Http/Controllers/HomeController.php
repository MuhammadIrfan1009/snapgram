<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Photo;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view('home', compact('photos'));
    }
}
