<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;

class PagesController extends Controller
{
    public function index()
    {
    	return view ('pages.index');
    }
    public function shop()
    {
    	$categories = Category::all();
    	$brands = Brand::all();
    	return view('pages.shop', compact('categories', 'brands'));
    }
}
