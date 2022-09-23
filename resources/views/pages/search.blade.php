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
                @foreach ($products as $item)
                  @if (str_contains($item->product_name,$s))
                    <a class="card" href="{{route('product',[$item->posted_by,$item->product_name])}}">
                      <div id="prodname" class="col col-2">{{$item->product_name}}</div>
                      <div id="desc" class="col col-8">{{$item->product_description}}</div>
                      <div id="participant" class="col col-2">{{$item->posted_by}}</div>
                    </a>
                  @endif   
                @endforeach
              @else
              <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-none">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                  <h1 class="display-5 fw-normal text-danger">Your query was not found!</h1>
                  <p class="lead fw-normal">Try another search.</p>
                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
              </div>
              @endif
              
            @else
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-none">
              <div class="col-md-5 p-lg-5 mx-auto my-5">
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