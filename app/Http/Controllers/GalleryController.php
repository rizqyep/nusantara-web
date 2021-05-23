<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $plantationImages = Gallery::where('category', 'plantation')->get();
        $processImages = Gallery::where('category', 'process')->get();

        return view('gallery', compact('plantationImages', 'processImages'));
    }
}