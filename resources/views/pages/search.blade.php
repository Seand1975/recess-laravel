@extends('layouts.app', ['activePage' => 'search', 'title' => 'ANKA | Home', 'navName' => 'Welcome to ANKA', 'activeButton' => 'laravel'])
@php
$s = "";
    try {
        $s = $_GET['text'];
    } catch (\Throwable $th) {
        $s="";
    }
@endphp

<script type="text/javascript">
    let hov = false;
    function show() {
        if (!hov) {
            let input = document.getElementById('text');
            let btn = document.getElementById('clk');
            input.className += " inp";
            btn.className += " move";
            hov = true;
        }
    }
</script>

<style>
@keyframes inp {
  0% {
    width: 0%;
    visibility: hidden;
  }
  100% {
    width: 80%;
    visibility: visible;
  }
}
@keyframes posn {
  0%{
    left:40%;
    background-color: white;
    color:black;
    transform: rotate(45deg);
  }
  33%{
    transform: rotate(70deg);
  }
  67%{
    transform: rotate(20deg);
  }
  100%{
    left:4%;
    background-color: #343a40;
    color:white;
  }
}
.search{
  width: 2%;
  height: 50px;
  font-size: 30px;
  text-indent: 20px;
  border-radius: 4px;
  visibility: hidden;
}
.inp{
  animation: inp 1s;
  animation-delay: 0.25s;
  animation-fill-mode: forwards;
}
button#clk{
  transform: rotate(45deg);
  width: 60px;
  height: 60px;
  position: relative;
  top: 3%;
  left: 40%;
  margin-left: 10px;
  background-attachment: fixed;
  font-weight: bolder;
}
.move{
 animation: posn 1s;
 animation-delay: 0.25s;
 animation-fill-mode: forwards;
}
div.holder{
  align-items: center;
  display: flex;
  width: 95%;
  margin-top: 6vh;
  margin-left: 3vw;
}
div#rev{
  transform: rotate(-45deg);
}
.product-device {
  position: absolute;
  right: 35.5%;
  bottom: -30%;
  width: 320px;
  height: 560px;
  background-color: #a7bacf;
  border-radius: 21px;
  z-index: -1;
}
.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
}
.product-device-2 {
  top: -30%;
  right: auto;
  bottom: 0;
  left: 5%;
  transform: rotate(30deg);
  background-color: #14213d;
}
.my-5{z-index: 1;}
</style>

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