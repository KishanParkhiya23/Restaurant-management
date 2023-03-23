@extends('layouts.contentNavbarLayout')

@section('title', 'User details')

@section('extraa-js')
<script>
    let token = "{{ csrf_token() }}";

    function deleteUser(data, type) {
        swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                console.log('here');
                $.ajax({
                    type: 'DELETE',
                    url: `/admin/user-details/delete/user`,
                    data: {
                        "id": data.id,
                        "type": type,
                        "_token": token
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
@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">User details /</span> Users
</h4>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5 class="d-inline-block">Active users</h5>
        <span class="d-inline-block w-auto ml-auto">
            {{$data->links()}}
        </span>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th style="width: 40%!important;">Email</th>
                    <th>Contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">

                @foreach ($data as $user)
                <tr>
                    <td>
                        <strong>{{$user['fullname']}}</strong>
                    </td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['contact']}}</td>
                    <td>
                        <a href="#" onclick="deleteUser(this,0)" id="{{$user['id']}}" title="Delete User"><i class="bx bx-trash me-1"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@section('extraa-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/js/food-table.js')}}"></script>
@endsection

@endsection