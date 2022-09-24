<?php

namespace App\Http\Controllers;

use App\Models\ProductBooking;
use App\Models\Product;
use Illuminate\Http\Request;
use Redirect;

class ProductBookingController extends Controller
{
    public function book(Request $req)
    {
        $neworder = new ProductBooking;
        $neworder->name = $req->input('customer');
        $neworder->delivery_address = $req->input('address');
        $neworder->quantity_booked = $req->input('quantity');
        $neworder->product_name = $req->input('product');
        $neworder->save();

        $update_qty = Product::where('product_name',$req->input('product'))->first();
        $update_qty->available_quantity = ($update_qty->available_quantity) - ($req->input('quantity'));
        $update_qty->save();

        return Redirect::route('points',['name'=>$req->input('vendor'),'qty'=>$req->input('quantity')])->with('a','b');
    }
}
