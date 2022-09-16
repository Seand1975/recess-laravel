@php
$item = $_GET['item'];
$qty = $_GET['quantity'];
$addr = $_GET['address'];
$unitp = $_GET['unitp'];

$total= ($qty*$unitp) + 1;
@endphp

@extends('layout.app')

@section('title')
Purchase of <?=$item?> | ANKA
@endsection

@section('content')
<div class="lato bigt tbmargin">You have purchased the item, "<?=$item?>" !</div>
<div class="bebas midt bmargin">
    The total price is <span class="mono blue minit" style="margin-left: 1em">$<?=$total?> </span>
     being shipped to <span class="mono blue minit"><?=$addr?>.</span>
</div>
@endsection