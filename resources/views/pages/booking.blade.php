@extends('layouts.app', ['activePage' => 'booking', 'title' => 'Bookings | ANKA', 'navName' => 'Bookings', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <h1 style = "text-align: center">Orders</h1>
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-2"><h6>Order Name</h6></div>
                            <div class="col-8"><h6>Description</h6></div>
                            <div class="col-2">Quantity</div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                    @foreach ($order as $anorder)
                        <li class="list-group-item"><div class="row">
                        <div class="col-2">{{$anorder}}</div>
                        <div class="col-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, doloribus facere nemo quasi totam, maxime commodi blanditiis deleniti maiores numquam eos eaque molestiae, perspiciatis recusandae? Asperiores nihil itaque veniam aut.</div>
                        <div class="col-2">1</div>
                    </div>
                    </li>
                    @endforeach
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-2">Jacket</div>
                            <div class="col-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, doloribus facere nemo quasi totam, maxime commodi blanditiis deleniti maiores numquam eos eaque molestiae, perspiciatis recusandae? Asperiores nihil itaque veniam aut.</div>
                            <div class="col-2">3</div>
                        </div>
                </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-2">Watch</div>
                            <div class="col-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, doloribus facere nemo quasi totam, maxime commodi blanditiis deleniti maiores numquam eos eaque molestiae, perspiciatis recusandae? Asperiores nihil itaque veniam aut.</div>
                            <div class="col-2">2</div>
                        </div>
                    </li>
                    </ul>
              </div>
        </div>
    </div>
@endsection
