@php
$item = $_GET['item'];
$before = FALSE;
@endphp

@extends('layout.app')

@section('title')
<?= $item ?> | ANKA
@endsection

<?php
if(isset($_COOKIE["before"])){
  $before = TRUE;
}else {
  setcookie("before","404muk", time() + 60);
}
?>

@section('content')
<?php if($before){ ?>
  <div class="mono microt" style="position:absolute;float:left;">&#9432; You've been here before!</div>
<?php } ?>
  <div class="lato bigt tbmargin"><?=$item?></div>
  <div class="bebas midt">Posted by:   <a href="{{ route('profile') }}" class="mono">404muk</a></div>

  <div class="itemDetails" style="height:55vh;margin-bottom: 5vh;display: flex;">
    <div id="itemDesc" style="border-style: solid;width:35%;height: inherit;border-width: 5px;padding:5px;background-color: #4499ff55;">
      <div class="bebas midt un">Description</div>
      <div class="qsand tinyt"><?=$item?> on sale. Hurry up and purchase it while stock lasts!</div>
    </div>
    <div id="itemBook" style="padding:5px;width:65%;border-style:solid;border-width: 5px;border-color: #00000000;">
      <div class="bebas midt un">Booking</div>
      <div style="margin-left:25px">
        <form action="{{ route('purchase') }}" method="get">
          <input type="text" value="<?=$item?>" name="item" style="height: 0%;width:0%;">
          <input type="number" value="2.99" name="unitp" style="height: 0%;width:0%;">
          <table class="tinyt">
            <thead>
              <tr>
                <td class="qsand un" style="width:30%;">Quantity</td>
                <td class="mono" style="width:70%;"><input style="width:35%;" type="number" name="quantity"> 28 still in stock.</td>
              </tr>
            </thead>

            <tbody>

            <tr>
              <td class="qsand un">Unit Price</td>
              <td class="mono">$2.99</td>
            </tr>

            <tr>
              <td class="qsand un">Address</td>
              <td class="mono"><input style="width:100%;" type="address" name="address"></td>
            </tr>

            <tr>
              <td class="qsand un">Delivery cost</td>
              <td class="mono">$1</td>
            </tr>

            <tr>
              <td class="qsand">Total</td>
              <td class="mono">nan(will implement later)</td>
            </tr>

            <tr>
              <td class="qsand">404muk's points</td>
              <td id="total" class="mono">10 (+2)</td>
            </tr>

            </tbody>

            <tfoot>
            <tr>
              <td class="qsand"></td>
              <td class="mono"><button style="background-color: #4499ff55;" type="submit" class="wide minit mono">Proceed To Checkout</button></td>
            </tr>
            </tfoot>

          </table>
        </form>
      </div>
    </div>
  </div>

  <div class="qsand microt">Support your favourite vendor. Each product you buy adds one point to their profile. Also, if you're a return customer and you buy one item from them, they are added an extra two points, but if you buy more than one product, they are added an extra four points.</div>

@endsection
