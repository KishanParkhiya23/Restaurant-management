@extends('layouts.contentNavbarLayout')

@section('title', 'Completed orders')

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
</style>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-0"> Completed orders
</h4>
<div class="card">
    <div class="card-header">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>user name</th>
                        <th>user contact</th>
                        <th>items</th>
                        <th>Type</th>
                        <th>Date</th>
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
                        <td>{{ $item->users->fullname }}</td>
                        <td>{{ $item->users->contact }}</td>
                        <td>{{$item->quantity}}</td>
                        <td> {{$item->orderFoods->type == 1 ? 'Delivery' : ($item->orderFoods->type == 2 ? 'Takeaway' : 'On-table order')}} </td>
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