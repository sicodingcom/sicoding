<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function __invoke()
  {
    return view('pages.products.index');
  }
}
