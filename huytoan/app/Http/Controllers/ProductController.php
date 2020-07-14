<?php

namespace App\Http\Controllers;

use App\gallerylaravel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $products = gallerylaravel::all();
        return view('gallery',compact('products'));
    }

}
