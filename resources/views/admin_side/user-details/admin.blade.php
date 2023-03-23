@extends('layouts.contentNavbarLayout')

@section('title', 'Admin details')

@section('extraa-css')
<style>
    select {
        appearance: none;
        background-color: transparent;
        border: none;
        padding: 0.4em 1em;
        margin: 0;
        width: 100%;
        font-family: inherit;
        font-size: inherit;
        cursor: inherit;
        line-height: inherit;
    }

    .Bglight {
        background-color: #e4e4e4 !important;
    }

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

@section('extraa-js')
<script>
    let token = "{{ csrf_token() }}";

    function changeUserType(data) {
        if (data.id == 1) {
            alert(`You can't change role of main admin`);
            location.reload();
        } else {
            $.ajax({
                type: 'PUT',
                url: `/admin/user-details/change/role`,
                data: {
                    "id": data.id,
                    "role": data.value,
                    "_token": token
                },
                success: function(response) {
                    location.reload();
                    toastr.success('Role changed succesfully!');
                }
            })
        }
    }

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
    <span class="text-muted fw-light">User details /</span> Admins
</h4>
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5 class="d-inline-block">Active admins</h5>
        <span class="d-inline-block w-auto ml-auto">
            {{$data->links()}}
        </span>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Date of birth</th>
                    <th>Gender</th>
                    <th>Admin type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">

                @foreach ($data as $user)
                <tr class="{{$user['id'] == 1 ? 'Bglight' : ''}}">
                    <td>
                        <img src="{{ asset(isset($user['profile_img']) ? 'storage/'.$user['profile_img'] : 'client_side/images/menu/no-image.png')}}" alt="Avatar" class="rounded-circle">

                        <strong>{{$user['firstname']}} {{$user['lastname']}}</strong>
                    </td>
                    <td>{{$user['contact']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['city']}}</td>
                    <td>{{$user['dob']}}</td>
                    <td>{{$user['gender']}}</td>
                    <td>
                        <select name="role" id="{{$user->id}}" class="custom-select" style="cursor: pointer;" onchange="changeUserType(this)" {{$user['id'] == 1 ? 'disabled' : ''}}>
                            <option value="1" {{$user['role'] == 1 ? 'selected' : ''}}>Admin</option>
                            <option value="2" {{$user['role'] == 2 ? 'selected' : ''}}>Chef</option>
                        </select>
                    </td>
                    <td>
                        <a href="javascript:void(0)" id="{{$user['id']}}" title="Delete User" onclick="{{ Auth::id() != $user['id'] ? 'deleteUser(this,1)' : '' }} "><i class="bx bx-trash"></i> </a>
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