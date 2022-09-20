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
body{
  background-color: #14213d77;
}
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
    left:45%;
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
    left:85%;
    background-color: #14213d;
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
  animation-delay: 0.5s;
  animation-fill-mode: forwards;
}
button#clk{
  transform: rotate(45deg);
  width: 60px;
  height: 60px;
  position: absolute;
  top: 6vh;
  left: 45%;
  margin-left: 10px;
  background-attachment: fixed;
  font-weight: bolder;
}
.move{
 animation: posn 1s;
 animation-delay: 0.5s;
 animation-fill-mode: forwards;
}
div.holder{
  align-items: center;
  display: flex;
  width: 100%;
  margin-top: 6vh;
  margin-left: 3vw;
}
div#rev{
  transform: rotate(-45deg);
}
</style>

@section('content')
    <div class="holder">
        <input class="search" type="text" id="text" value="">
        <button id="clk" type="submit" onmouseover="show()">
            <div id="rev">Search</div>
        </button>
    </div>

    <div class="content">
        <div class="container-fluid">
            @if ($s != "")
                @php
                    
                @endphp
                <div class="row">
                    
                </div>
            @endif
        </div>
    </div>
@endsection