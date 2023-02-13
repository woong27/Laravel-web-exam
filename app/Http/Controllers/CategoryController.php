<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View {
      return view('category.index');
    }

    public function view(): View {
      return view('category.view');
    }
}
