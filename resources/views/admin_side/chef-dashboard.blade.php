@extends('layouts.contentNavbarLayout')

@section('title', 'Chef dashboard')

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

@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Chef /</span> Head chef
</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header">
        <h5 class="d-inline-block">Head chef</h5>
        <a href="{{route('admin.chef.add.show')}}" class="btn rounded-pill  btn-primary float-end" style="padding: 0.6rem 0.9rem;"><i class="fa-solid fa-plus"></i></a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Speciality</th>
                    <th style="width: 40%!important;">Discription</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($chefs as $chef)
                <tr>
                    <td>
                        <img src="{{asset($chef['image'])}}" alt="Avatar" class="rounded-circle">
                        <strong>{{$chef['name']}}</strong>
                    </td>
                    <td>{{$chef['speciality']}}</td>
                    <td>{{$chef['discription']}}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.chef.edit',$chef['id']) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" id="deleteRecord"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@section('extraa-css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection

@section('extraa-js')

<script>
    $('#deleteRecord').click(function() {
        swal("Delete chef", "Are you sure to delete this chef details ? ", "error", {
            confirmButtonText: 'Yes',
        });

    });
</script>
@endsection
<!--/ Basic Bootstrap Table -->
@endsection