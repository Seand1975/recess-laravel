@extends('layout.app')

@section('title')
ANKA | Home
@endsection

@section('content')

  <div class="lato bigt tbmargin">Welcome to ANKA!</div>
  <div class="bebas midt bmargin">Search for any item using the search bar below.</div>

  <div id="searchbar">
    <form class="form" action="{{route('search')}}" method="get">
      <input style="width: 90%;" id="text" type="text" name="searchtext" placeholder="Search here...">
      <button id="searchbutton" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

  <div class="qsand midt bmargin">Currently the best performing participant is: <a href="{{route('profile')}}" class="mono">404muk</a> <br />
    Get a 1.5% Cashback when you buy their items in bulk (3 or more)! </div>

    <a href="{{route('admin')}}" class="qsand tinyt">Are you an administrator?</a>

@endsection