@extends('layouts.contentNavbarLayout')

@section('title', 'Pending orders')

@section('extraa-css')
<meta http-equiv="refresh" content="5">

<style>
    .table> :not(caption)>*>* {
        padding: 0.8rem 1.8rem !important;
    }

    .rounded-circle {
        width: 2rem;
        height: 2rem;
        margin-right: 1vw;
    }

    .card-image {
        width: 60px;
        margin: auto;
    }


    .notify-badge {
        position: relative;
        background: rgb(113 221 55);
        padding: 2px 8px;
        height: 2rem;
        top: 1.5rem;
        left: 2rem;
        right: 1.5rem;
        width: 2rem;
        text-align: center;
        line-height: 2rem;
        font-size: 1rem;
        border-radius: 50%;
        color: white;
        border: 1px solid #78df41;
        z-index: 1;
    }
</style>
@endsection



@section('content')
<h4 class="fw-bold py-3 mb-0"> Pending orders
</h4>
<div class="container">
    <div class="mb-5 text-end">
        {{$data->links()}}
    </div>
    <div class="row text-center">
        @foreach ($data as $item)
        <div class="col-xl-3 col-sm-6 mb-5 text-center">
            <div class="bg-white rounded shadow-sm py-3 px-3">
                <div style="min-height: 180px;">
                    <span class="notify-badge">{{$item->quantity}}</span>
                    <img src="{{asset(isset($item->orderFoods->image) ? $item->orderFoods->image : 'client_side/images/menu/no-menu-image.jpg')}}" alt="" class="card-image img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">{{$item->orderFoods->name}}</h5><span class="small text-uppercase text-muted mt-2">{{$item->orderFoods->poppings}}</span>
                </div>
                <a href="{{route('admin.chef-management.accept.order',$item->id)}}" class="btn btn-success d-block w-50 m-auto mt-2">Accept</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@section('extraa-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/js/food-table.js')}}"></script>
@endsection

@endsection