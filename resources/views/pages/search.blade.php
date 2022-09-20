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
</style>

@section('content')
    <form action="{{route('search')}}" method="GET">
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
            @endif
        </div>
    </div>
@endsection