@extends('layouts.contentNavbarLayout')

@section('title', 'Cancel orders')

@section('extraa-css')
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
        background: #c8a97e;
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
        border: 1px solid #c8a97e;
        z-index: 1;
    }
</style>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-0"> Cancel orders
</h4>
<div class="card">
    <div class="card-header">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 60%!important;">Order</th>
                        <th style="width: 20%!important;">items</th>
                        <th style="width: 20%!important;">Date</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if (count($data) > 0)
                    @foreach ($data as $item)
                    <tr>
                        <td>
                            <img src="{{asset(isset($item->orderFoods->image) ? $item->orderFoods->image : 'client_side/images/menu/no-menu-image.jpg')}}" alt="Avatar" class="rounded-circle">
                            <strong>{{$item->orderFoods->name}}</strong>
                        </td>
                        <td>{{$item->quantity}}</td>
                        <td>{{ date('d-m-Y',strtotime($item->updated_at)) }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td>
                            <h3> No data found</h3>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="mt-5 text-end">
    {{$data->links()}}
</div>
@section('extraa-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/js/food-table.js')}}"></script>
@endsection

@endsection