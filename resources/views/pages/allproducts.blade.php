@extends('layouts.app', ['activePage' => 'products', 'title' => 'All Products | ANKA', 'navName' => 'Products List'])
@php
use App\Models\Product;
$dataProducts = Product::get();
@endphp
@section('content')
    <div class="container">
        <div class="row">

            @foreach ($dataProducts as $product)
                    <div class="col-6 p-2">
                        <a href="{{route('product',[$product->posted_by,$product->product_name])}}">
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $product->product_name }}</h4>
                                </div>
                                <div class="card-body">
                                    <div class="p-2">
                                        {{ $product->product_description }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
        </div>


    </div>
@endsection
