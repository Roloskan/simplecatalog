<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $catalog_data = Catalog::orderBy('name', 'asc')->get();
        return view('home', compact('catalog_data'));
    }
}
