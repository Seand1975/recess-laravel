@extends('layouts.app', ['activePage' => 'products', 'title' => 'All Products | ANKA', 'navName' => 'Products List'])

@section('content')
    <div class="container">
        <div class="row">

            @isset($dataProducts)
                @foreach ($dataProducts as $product)
                    <div class="col-6 col-sm-12">
                        <a href="{{route('')}}">
                            <div class="card">
                                <div class="card-header">
                                    {{ $product->product_name }}
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
            @endisset
        </div>


    </div>
@endsection
