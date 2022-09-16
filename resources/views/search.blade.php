@php
$search = $_GET["searchtext"];
$list = [$search.' bags', $search.' phones', $search.'iser', $search.'iosis'];
@endphp

@extends('layout.app')

@section('title')
<?= $search ?> | ANKA
@endsection

@section('content')
<div class="lato bigt tbmargin">You searced for "<?= $search;?>"</div>
<table class="bebas midt" style="width:100%;">
  <thead>
    <tr>
    <td class="item">item</td>
    <td class="desc">description</td>
    <td class="stat">status</td>
    </tr>
  </thead>
  <tbody class="tinyt2">
  <?php foreach($list as $l){ ?>
    <tr class="qsand" style="border-style: solid;border-width: 2px;border-radius: 5px;">
      <td style="text-decoration: underline;">
        <a href="{{route('item')}}?item=<?=$l?>"><?= $l ?></a>
      </td>
      <td><?= $l ?> to be bought.</td>
      <td>Available</td>
    </tr>
  <?php } ?>
  </tbody>
</table>
@endsection
