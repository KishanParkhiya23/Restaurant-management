@extends('layouts.contentNavbarLayout')

@section('title', 'Profile settings')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>

<style>
    .ui-widget-header {
        border: 1px solid #bbbbbb;
        background: none;
        color: #000000;
        font-weight: bold;
    }

    .ui-widget-header .ui-icon {
        filter: invert(1) !important;
    }

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default,
    .ui-button,
    html .ui-button.ui-state-disabled:hover,
    html .ui-button.ui-state-disabled:active {
        color: #000000;
    }

    .ui-widget-content {
        border: 1px solid #dddddd;
        background: #ffffff;
        color: #333333;
    }

    .ui-state-hover,
    .ui-widget-content .ui-state-hover,
    .ui-widget-header .ui-state-hover,
    .ui-state-focus,
    .ui-widget-content .ui-state-focus,
    .ui-widget-header .ui-state-focus,
    .ui-button:hover,
    .ui-button:focus {
        border: none;
        background: none;
        font-weight: bold;
        cursor: pointer;
    }

    .ui-state-active,
    .ui-widget-content .ui-state-active,
    .ui-widget-header .ui-state-active,
    a.ui-button:active,
    .ui-button:active,
    .ui-button.ui-state-active:hover {
        border: 1px solid #000000;
    }

    .form-control[readonly] {
        background-color: #fff;
    }

    #my_date_picker {
        cursor: pointer;
    }
</style>

@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="javascript:void(0);">
                    <i class="bx bx-user me-1"></i> Account
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.profile.change.password')}}">
                    <i class="bx bx-key me-1"></i>Change Password
                </a>
            </li>
        </ul>
        <div class="card mb-4">
            <h5 class="card-header pb-1">Profile Details</h5>
            <!-- Account -->
            <form id="formAccountSettings" action="{{route('admin.profile.save')}}" method="POST" enctype="multipart/form-data">@csrf

                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{url(Storage::url( $data['profile_img'] != null ? $data['profile_img'] : 'images/no-image.png'))}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-secondary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" name="profile_img" class="account-file-input" hidden accept="image/png, image/jpeg" />
                            </label>
                            <p class="text-muted mb-0" style="font-size: 13px; margin-bottom: -24px!important;">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>
                <hr class="my-0">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstname" class="form-label">First Name</label>
                            <input class="form-control  @error('firstname') is-invalid @enderror" type="text" id="firstname" name="firstname" value="{{$data['firstname']}}" />
                            @error('firstname') <span class="text-danger"> {{$message}} </span> @enderror

                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input class="form-control  @error('lastname') is-invalid @enderror" type="text" name="lastname" id="lastname" value="{{$data['lastname']}}" />
                            @error('lastname') <span class="text-danger"> {{$message}} </span> @enderror

                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{$data['email']}}" placeholder="john.doe@example.com" readonly />
                            <p class="text-muted mb-0" style="font-size: 10px;">You can not modified your email id</p>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" class="form-control  @error('contact') is-invalid @enderror" id="contact" name="contact" value="{{$data['contact']}}" />
                            @error('contact') <span class="text-danger"> {{$message}} </span> @enderror
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="gender">Gender</label>
                            <select id="gender" class="select2 form-select  @error('gender') is-invalid @enderror" name="gender">
                                <option value="" disabled>Select Gender</option>
                                <option value="Male" {{ $data['gender'] == 'Male' ? 'selected' : ''}}>Male</option>
                                <option value="Female" {{ $data['gender'] == 'Female' ? 'selected' : ''}}>Female</option>
                                <option value="Other" {{ $data['gender'] == 'Other' ? 'selected' : ''}}>Other</option>
                            </select>
                            @error('gender') <span class="text-danger"> {{$message}} </span> @enderror

                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{$data['city']}}" />
                            @error('city') <span class="text-danger"> {{$message}} </span> @enderror

                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="dob" class="form-label">Date of birth</label>
                            <input type="text" value="{{$data['dob']}}" id="my_date_picker" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" readonly>
                            @error('dob') <span class="text-danger"> {{$message}} </span> @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2 d-block" style="margin-left: auto;">Save profile</button>
                        <!-- <button type="reset" class="btn btn-outline-secondary">Cancel</button> -->
                    </div>
                </div>
            </form>
            <!-- /Account -->
        </div>
    </div>
</div>
<script>
    $("#my_date_picker").datepicker({
        maxDate: '-1d',
    });
</script>
@endsection