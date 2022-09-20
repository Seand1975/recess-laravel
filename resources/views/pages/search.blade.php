@extends('layouts.app', ['activePage' => 'search', 'title' => 'ANKA | Home', 'navName' => 'Welcome to ANKA', 'activeButton' => 'laravel'])
@php
$s = "";
    try {
        $s = $_GET['text'];
    } catch (\Throwable $th) {
        $s="";
    }
@endphp

@include('dani')

@section('content')
    <form class="bg-white" action="{{route('search')}}" method="GET">
      <div class="holder">
        <input class="search" type="text" id="text" name="text">
        <button id="clk" type="submit" onmouseover="show()">
            <div id="rev"><i class="nc-icon nc-zoom-split"></i></div>
        </button>
      </div>
    </form>
    
    <div class="content">
        <div class="container-fluid">
            @if ($s != "")
              @php
                    
              @endphp
              <div class="row">
                hi
              </div>
            @else
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-none">
              <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-5 fw-normal">Welcome to ANKA!</h1>
                <p class="lead fw-normal">Your personal anchor for everything. Search for items using the search bar above and Get the results delivered to you ASAP.</p>
                <a class="btn btn-outline-secondary" href="#">Search for Vendors</a>
              </div>
              <div class="product-device shadow-sm d-none d-md-block"></div>
              <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
            </div>
            @endif
        </div>
    </div>
@endsection