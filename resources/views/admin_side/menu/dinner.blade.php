@extends('layouts.contentNavbarLayout')

@section('title', 'Dinner menu')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Menu /</span> Dinner
</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header">
        <h5 class="d-inline-block">Dinner Menu</h5>
        <a href="{{ route('admin.menu.add.food.show',3) }}" class="btn rounded-pill  btn-primary float-end" style="padding: 0.6rem 0.9rem;"><i class="fa-solid fa-plus"></i></a>
    </div>
    @include('admin_side.menu.table')
</div>

@section('extraa-css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection

@section('extraa-js')
<script src="{{asset('assets/js/food-table.js')}}"></script>
@endsection

@endsection