@extends('layouts.contentNavbarLayout')

@section('title', 'Profile Page ')

@section('extraa-css')
<link rel="stylesheet" href="{{asset('assets/css/admin-profile.css')}}">
@endsection

@section('content')


<div class="container">
    <div class="main-body">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{url(Storage::url( $data['profile_img'] != null ? $data['profile_img'] : 'images/no-image.png'))}}" alt="Admin" class="rounded-circle" width="150px" height="150px">
                            <div class="mt-3">

                                <h4>{{$data['name']}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <!-- <hr> -->
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$data['name']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$data['email']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Contact</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$data['contact']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-primary" href="javascript:void(0)">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection