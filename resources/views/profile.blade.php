@extends('layout.app',['title'=>'404muk | ANKA'])

@section('content')
<div class="lato bigt tbmargin">Profile</div>
<div class="bebas midt bmargin flex">about<div class="mono blue" style="margin-left: 1em">404muk</div></div>

<table class="wide">
    <thead>
        <tr>
            <td style="width: 50%"><div class="bigt bebas un">rank</div><div class="tinyt qsand">    1 out of 23 vendors</div></td>
            <td><div class="bigt bebas un">points</div><div class="tinyt qsand">    365</div></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><div class="bigt bebas un">products left</div><div class="tinyt qsand">    54</div></td>
            <td><div class="bigt bebas un">return buyers</div><div class="tinyt qsand">    17</div></td>
        </tr>
    </tbody>
</table>

@endsection