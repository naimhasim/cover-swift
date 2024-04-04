<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class RootController extends Controller
{
    public function home(){
      $services = Services::all();

      return view('pages.home.index', compact('services'));
    }
}
