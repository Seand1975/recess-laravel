@extends('layouts.app', ['activePage' => 'search', 'title' => 'ANKA | Home', 'navName' => 'Welcome to ANKA', 'activeButton' => 'laravel'])
@php
$s = "";
    try {
        $s = $_GET['text'];
    } catch (\Throwable $th) {
        $s="";
    }
@endphp

@include('pages.dani')

@section('content')
    <form class="bg-white" action="{{route('search')}}" method="GET">
      <div id="division" class="holder">
        <input class="search" type="text" id="text" name="text">

      </div>
    </form>
    <button id="clk" type="submit" onclick="show()">
      <div id="rev"><i class="nc-icon nc-zoom-split"></i></div>
    </button>

    <div class="content">

        <div class="container-fluid">
            @if ($s != "")
              @if (count($products)!=0)
              <div class="card">
                <div class="card-header">
                  <div class="row smallc">
                    <div class="col-2"><h5>Product Name</h5></div>
                    <div class="col-8"><h5>Description</h5></div>

                    <div class="col-2"><h5>Vendor</h5></div>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  @foreach ($products as $item)
                  @if (str_contains($item->product_name,$s))
                    <li class="list-group-item">
                      <a href="{{route('product',[$item->posted_by,$item->product_name])}}">
                        <div class="row">
                          <div class="col-2 smallc">{{$item->product_name}}</div>
                          <div class="col-8">{{$item->product_description}}</div>
                          <div class="col-2">{{$item->posted_by}}</div>
                        </div>
                      </a>
                    </li>
                  @endif
                @endforeach
                </ul>
              </div>
              @else
              <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-none" style="margin-top: -5%;">
                <div class="col-md-5 p-lg-5 mx-auto">
                  <h1 class="display-5 fw-normal text-danger">Your query was not found!</h1>
                  <p class="lead fw-normal">Try another search.</p>
                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
              </div>
              @endif

            @else
            <div class="card mx-auto">
                <div class="card-header">Best guy:</div>
            </div>
            <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-none" style="margin-top: -5%;">
              <div class="col-md-5 p-lg-5 mx-auto ">
                <h1 class="display-5 fw-normal">Welcome to ANKA!</h1>
                <p class="lead fw-normal">Your personal anchor for everything. Search for items using the search bar above and Get the results delivered to you ASAP.</p>
              </div>
              <div class="product-device shadow-sm d-none d-md-block"></div>
              <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>
            @endif
        </div>
    </div>
@endsection
