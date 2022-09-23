@extends('layouts.app', ['activePage' => 'booking', 'title' => 'Bookings | ANKA', 'navName' => 'Bookings', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <h1 style = "text-align: center">Orders</h1>
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-3"><h6>Order Name</h6></div>
                            <div class="col-md-9"><h6>Description</h6></div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><div class="row">
                        <div class="col-md-3">Shoes</div>
                        <div class="col-md-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, doloribus facere nemo quasi totam, maxime commodi blanditiis deleniti maiores numquam eos eaque molestiae, perspiciatis recusandae? Asperiores nihil itaque veniam aut.</div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-3">Jacket</div>
                            <div class="col-md-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, doloribus facere nemo quasi totam, maxime commodi blanditiis deleniti maiores numquam eos eaque molestiae, perspiciatis recusandae? Asperiores nihil itaque veniam aut.</div>
                        </div>
                </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-3">Watch</div>
                            <div class="col-md-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, doloribus facere nemo quasi totam, maxime commodi blanditiis deleniti maiores numquam eos eaque molestiae, perspiciatis recusandae? Asperiores nihil itaque veniam aut.</div>
                        </div>
                    </li>
                    </ul>
              </div>
        </div>
    </div>
@endsection
