<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductBooking;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }
        return abort(404);
    }

    public function prod($participant,$item)
    {
        $prod = Product::where('product_name',$item)->where('posted_by',$participant)->first();
        return view('pages.products',compact('prod'));
    }

    public function order($uname)
    {
        $booking = ProductBooking::where('name', $uname)->get();
        return view('pages.booking',['order'=>$booking]);
    }

    public function productsPage()
    {
        return view('pages.allproducts');
    }
}
