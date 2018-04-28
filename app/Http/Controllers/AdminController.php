<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function store(Request $request)
    {
        $product = new Products();
        $product->pro_name = $request->pro_name;
        $product->save();
    }
}
