@extends('layouts.contentNavbarLayout')

@section('title', 'Stories management')
<style>
    table.a {
        table-layout: fixed !important;
    }

    table .avatar img {
        width: 200% !important;
        height: 200% !important;
    }
</style>
@section('content')

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
                $.ajax({
                    type: 'DELETE',
                    url: `/admin/stories-management/delete`,
                    data: {
                        "id": data.id,
                        "_token": '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        location.reload();
                    }
                })
            }
        });
    }
</script>
@endsection


<!-- Striped Rows -->
<div class="card">
    <div class="card-header">
        <h5 class="d-inline-block">Stories manage</h5>
        <a href="{{ route('admin.stories-management.add.show') }}" class="btn rounded-pill  btn-primary float-end" style="padding: 0.6rem 0.9rem;"><i class="fa-solid fa-plus"></i></a>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th style="width:20%">Title</th>
                    <th style="width:11%">Date</th>
                    <th style="width:65%">Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($stories as $story)
                <tr>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up">
                                <img src="{{asset($story['image'] != null ? $story['image'] : 'client_side/images/image_6.jpg')}}" alt="Avatar" class="rounded-circle">
                            </li>
                        </ul>
                    </td>
                    <td><strong>{{$story['title']}}</strong></td>
                    <td>{{$story['date']}}</td>
                    <td>{{$story['description']}}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('admin.stories-management.edit.show',$story['id'])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteRecord(this)" id="{{ $story['id'] }}"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--/ Striped Rows -->
@endsection