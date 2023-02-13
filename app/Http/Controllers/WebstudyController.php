<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WebstudyController extends Controller {
    public function index(): View {
        return view('webstudy.index');
    }

    public function view(): View
   {
     return view('webstudy.view');
   }

    public function create(): View
   {
     return view('webstudy.create');
   }

}
