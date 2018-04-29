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
        $file = $request->file('pro_img');
        $filename = $file->getClientOriginalName();

        $path = 'upload/images';
        $file->move($path, $filename);

        $product = new Products();
        $product->pro_name = $request->pro_name;
        $product->pro_price = $request->pro_price;
        $product->pro_code = $request->pro_code;
        $product->pro_img = $filename;
        $product->pro_info = $request->pro_info;
        $product->sel_price = $request->spl_price;
        $product->save();

        return redirect()->back()->with('status', 'Product Created');
    }
}
