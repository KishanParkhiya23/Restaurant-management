@extends('layouts.contentNavbarLayout')

@section('title', 'Lunch menu')

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Menu /</span> Lunch
</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header">
        <h5 class="d-inline-block">Lunch Menu</h5>
        <a href="{{ route('admin.menu.add.food.show',2) }}" class="btn rounded-pill  btn-primary float-end" style="padding: 0.6rem 0.9rem;"><i class="fa-solid fa-plus"></i></a>
    </div>
    @include('admin_side.menu.table')
</div>

@section('extraa-js')
<script src="{{asset('assets/js/food-table.js')}}"></script>
@endsection

<!--/ Basic Bootstrap Table -->
@endsection