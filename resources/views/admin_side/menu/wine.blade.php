@extends('layouts.contentNavbarLayout')

@section('title', 'Wine menu')

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
    <span class="text-muted fw-light">Menu /</span> Wine
</h4>
<!-- Basic Bootstrap Table -->
<div class="card">
    <div class="card-header">
        <h5 class="d-inline-block">Wine Menu</h5>
        <a href="{{ route('admin.menu.add.food.show',6) }}" class="btn rounded-pill  btn-primary float-end" style="padding: 0.6rem 0.9rem;"><i class="fa-solid fa-plus"></i></a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th style="width: 40%!important;">Toppings</th>
                    <th>Prize</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($data as $item)
                <tr>
                    <td>
                        <img src="{{ asset(isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-image.png')}}" alt="Avatar" class="rounded-circle">
                        <strong>{{$item['name']}}</strong>
                    </td>
                    <td>{{$item['poppings']}}</td>
                    <td>${{$item['prize']}}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('admin.menu.edit.food.show',$item['id'])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="#" onclick="deleteRecord(this)" id="{{$item['id']}}"><i class="bx bx-trash me-1"></i> Delete</a>
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
    function deleteRecord(data) {
        swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                let id = data.id;
                $.ajax({
                    type: 'DELETE',
                    url: `/admin/menu/delete/food/${data.id}`,
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        location.replace('/admin/menu/wine');
                    }
                })
            }
        });
    }
</script>

@endsection
<!--/ Basic Bootstrap Table -->
@endsection