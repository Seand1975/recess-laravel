@extends('layout.app')

@section('title')
Admin | ANKA
@endsection

@section('content')
<div class="lato bigt tbmargin">Administrator Dashboard</div>

<table class="wide">
    <thead>
        <tr>
            <td style="width: 10%"><div class="midt bebas un">report</div></td>
            <td>
                <div class="qsand midt">
                    <table style="border-width:4px;border-style:solid;border-color:black;display:block">
                        <thead>
                            <tr>
                                <td style="width: 70%;"><div>Total Percentage Sale</div></td>
                                <td><div class="blue mono" style="text-indent: 30px">94.5%</div></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><div>Top Participant</div></td>
                                <td><div class="mono" style="text-indent: 30px"><a href="{{route('profile')}}">404muk</a></div></td>
                            </tr>
                            <tr>
                                <td><div>Top Participant Sale Contribution</div></td>
                                <td><div class="blue mono" style="text-indent: 30px">52.7%</div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2"><div class="midt bebas un">Participant sales contribution graph</div></td>
        </tr>
        <tr>
            <td colspan="2"><div class="tinyt qsand">Graph here.</div></td>
        </tr>
    </tbody>
</table>

@endsection