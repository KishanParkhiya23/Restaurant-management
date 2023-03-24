@extends('layouts.contentNavbarLayout')

@section('title', 'Food edit page')

@section('extraa-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/css/multiSelect.css')}}">
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

@section('extraa-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script src="{{asset('assets/js/multiSelect.js')}}"></script>
@endsection

@section('content')

@php
$url = 'admin.menu.edit.food.save';
if(isset($data)){
if ($data['type'] == 1) {
$urlData = 'breakfast';
} elseif ($data['type'] == 2) {
$urlData = 'lunch';
} elseif ($data['type'] == 3) {
$urlData = 'dinner';
} elseif ($data['type'] == 4) {
$urlData = 'drinks';
} elseif ($data['type'] == 5) {
$urlData = 'desserts';
} else {
$urlData = 'wine';
}
}
@endphp

<div class="col-xxl mt-2">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">{{ isset($data) ? "Edit ".$data['name'] : 'Add new ' . $foodType . ' item' }}</h5> <small class="text-muted float-end">{{ (isset($data)) ? "Edit food item details" : "Add new foood item" }} </small>
        </div>
        <div class="card-body">
            @if (isset($data))
            <form action="{{route($url,$data['id'])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body p-0">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ url(asset( $data['image'] != null ?  $data['image'] : 'client_side\images\menu\no-image.png'))}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-secondary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Change image</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" name="image" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                            </label>
                            <p class="text-muted mb-0" style="font-size: 13px; margin-bottom: -24px!important;">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Item Name</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge ">
                            <span id="basic-icon-default-fullname2" class="input-group-text @error('name') is-invalid @enderror"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$data['name']}}" placeholder="Enter Item Name" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="name" />
                        </div>
                        @error('name')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Item Prize</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text  @error('prize') is-invalid @enderror"> <i class='fa-sharp fa-solid fa-indian-rupee-sign' style="font-size: 1.2rem;opacity:1"></i> </span>
                            <input type="text" id="prize" value="{{$data['prize']}}" class="form-control  @error('prize') is-invalid @enderror" placeholder="Enter Prize" aria-label="prize" aria-describedby="basic-icon-default-company2" name="prize" />
                        </div>
                        @error('prize')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-message">Poppings on Item</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text @error('poppings') is-invalid @enderror"><i class='bx bx-cookie' style="font-size: 1.2rem;opacity:0.85"></i></span>
                            <textarea id="poppings" class="form-control @error('poppings') is-invalid @enderror" placeholder="Enter Poppings" aria-label="poppings" aria-describedby="basic-icon-default-message2" rows="2" name="poppings">{{$data['poppings']}}</textarea>
                        </div>
                        @error('poppings')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10" style="text-align: right;">
                        <a type="button" class="btn btn-secondary text-white" style="margin-left: auto;" href="{{route('admin.menu.' . $urlData . '.show')}}">Cancel</a>
                        <button type="submit" class="btn btn-primary" style="margin-left: auto;">Save</button>
                    </div>
                </div>
            </form>
            @else
            <form action="{{route('admin.menu.add.food.save',$foodType)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="type">
                <div class="card-body p-0">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ asset('client_side\images\menu\no-image.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-secondary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Add image</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" name="image" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                            </label>
                            <p class="text-muted mb-0" style="font-size: 13px; margin-bottom: -24px!important;">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge ">
                            <span id="basic-icon-default-fullname2" class="input-group-text @error('name') is-invalid @enderror"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="name" />
                        </div>
                        @error('name')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Prize</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text  @error('prize') is-invalid @enderror"> <i class='bx bxs-badge-dollar' style="font-size: 1.2rem;opacity:1"></i> </span>
                            <input type="text" id="prize" class="form-control  @error('prize') is-invalid @enderror" placeholder="Enter prize" aria-label="prize" aria-describedby="basic-icon-default-company2" name="prize" />
                        </div>
                        @error('prize')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-message">Poppings</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text @error('poppings') is-invalid @enderror"><i class='bx bx-cookie' style="font-size: 1.2rem;opacity:0.85"></i></span>
                            <textarea id="poppings" class="form-control @error('poppings') is-invalid @enderror" placeholder="Enter Poppings" aria-label="poppings" aria-describedby="basic-icon-default-message2" rows="2" name="poppings"></textarea>
                        </div>
                        @error('poppings')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10" style="text-align: right;">
                        <a type="button" class="btn btn-secondary text-white" style="margin-left: auto;" href="{{route('admin.menu.'. $foodType . '.show')}}">Cancel</a>
                        <button type="submit" class="btn btn-primary" style="margin-left: auto;">Save</button>
                    </div>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>

<script>
    let accountUserImage = document.getElementById('uploadedAvatar');
    const fileInput = document.querySelector('.account-file-input'),
        resetFileInput = document.querySelector('.account-image-reset');

    if (accountUserImage) {
        const resetImage = accountUserImage.src;
        fileInput.onchange = () => {
            if (fileInput.files[0]) {
                accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
            }
        };
    }
</script>
@endsection
