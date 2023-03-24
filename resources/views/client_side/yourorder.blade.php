@extends('client_side.master.main')

@section('title', 'Your order Page')

@section('extra-css')

<style>
  nav {
    display: none !important;
  }

  .hero-wrap.hero-wrap-2 {
    height: 330px;
  }

  .hero-wrap.hero-wrap-2 .slider-text {
    height: 330px;
  }
</style>

@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center mb-4">
        <h1 class="mb-2 bread">Order</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="ion-ios-arrow-forward"></i></a></span><span>Your orders <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<!-- Cart Start -->
<div class="container mt-5 mb-5">
  <table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Order ID</th>
        <th>Date</th>
        <th>Time</th>
        <th>Item</th>
        <th>Total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
      <tr>
        <td>
          <p>{{$order->orderId}}</p>
        </td>
        <td>
          <p>{{$order->date}}</p>
        </td>
        <td>
          <p>{{$order->time}}</p>
        </td>
        <td>
          <p>{{$order->items}}</p>
        </td>
        <td>
          <span class="badge badge-success rounded-pill d-inline">{{$order->totalAmount}} <i class="fa-solid fa-indian-rupee-sign fa-xs"></i> </span>
        </td>
        <td>
          <a href="{{ route('user.vieworder',$order->orderId) }}" class="btn btn-link btn-sm btn-rounded">
            <i class="fa-solid fa-eye"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<!-- Cart End -->

</section>

@endsection