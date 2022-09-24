@extends('layouts.app', ['activePage' => 'product', 'title' => 'Products | ANKA', 'navName' => 'Products', 'activeButton' => 'laravel'])

@section('content')
<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="details col-md-6">
                <h3 class="product-title" style="font-variant:small-caps">{{$prod->product_name}}</h3>
                <h6 class="text-warning">Posted By: {{$prod->posted_by}}</h6>
                <div class="rating">
                    <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <span class="review-no">@php echo rand(118,541); @endphp  reviews</span>
                </div>
                <p class="product-description">{{$prod->product_description}}</p>
                <h4 class="price">current price: <span>${{$prod->rate_per_item}}</span></h4>
                <h4 class="price">In stock: <span>{{$prod->available_quantity}}</span></h4>
                <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>


            </div>
        </div>
        <h4>Order this item:</h4>
                <form action="{{url("ordering")}}" method="POST">
                    @csrf
                    <span>Quantity: <input type="number" name="quantity" id="qty" min="1" max="{{$prod->available_quantity}}"></span>
                    <span>Delivery Address: <input type="text" name="address"></span>
                    <input type="text" name="product" style="width:0px;height:0px;border-color:#00000000;" value="{{$prod->product_name}}">
                    <input type="text" name="customer" style="width:0px;height:0px;border-color:#00000000;" value="{{auth()->user()->name}}">
                    <input type="text" name="vendor" style="width:0px;height:0px;border-color:#00000000;" value="{{$prod->posted_by}}">
                    <button class="add-to-cart btn btn-default" type="submit">Place Order</button>
                </form>
    </div>
</div>
@endsection
