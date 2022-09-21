@extends('layouts.app', ['activePage' => 'products', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Maps', 'activeButton' => 'laravel'])

@section('content')
<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="details col-md-6">
                <h3 class="product-title" style="font-variant:small-caps">{{$prod[0]->product_name}}</h3>
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
                <p class="product-description">{{$prod[0]->product_description}}</p>
                <h4 class="price">current price: <span>${{$prod[0]->rate_per_item}}</span></h4>
                <h4 class="price">In stock: <span>{{$prod[0]->available_quantity}}</span></h4>
                <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                
                <div class="action">
                    <span>Quantity: <input type="number" name="qty" id="qty" min="1" max="{{$prod[0]->available_quantity}}"></span>
                    <button class="add-to-cart btn btn-default" type="button">Book Amount</button>
                    <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
