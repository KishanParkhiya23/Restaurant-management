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

<div class="col-xxl mt-2">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0"> {{ (isset($data)) ? "Edit ". $data['name'] : "Add New Chef" }}</h5> <small class="text-muted float-end">{{ (isset($data)) ? "Edit chef personal details" : "Add New Chef" }} </small>
        </div>
        <div class="card-body">
            @if (isset($data))
            <form action="{{route('admin.chef.edit.save',$data['id'])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body p-0">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ url(asset( $data['image'] != null ?  $data['image'] : 'client_side\images\no-image.png'))}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
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
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge ">
                            <span id="basic-icon-default-fullname2" class="input-group-text @error('name') is-invalid @enderror"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$data['name']}}" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="name" />
                        </div>
                        @error('name')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">speciality</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text  @error('speciality') is-invalid @enderror"><i class="fa-solid fa-martini-glass-empty" style="font-size: 0.8rem;opacity:0.85"></i></span>
                            <input type="text" id="speciality" value="{{$data['speciality']}}" class="form-control  @error('speciality') is-invalid @enderror" placeholder="Speciality" aria-label="Speciality" aria-describedby="basic-icon-default-company2" name="speciality" />
                        </div>
                        @error('speciality')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-message">Discription</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text @error('discription') is-invalid @enderror"><i class="bx bx-comment"></i></span>
                            <textarea id="discription" class="form-control @error('discription') is-invalid @enderror" placeholder="Discription" aria-label="Discription" aria-describedby="basic-icon-default-message2" rows="2" name="discription">{{$data['discription']}}</textarea>
                        </div>
                        @error('discription')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10" style="text-align: right;">
                        <a type="button" class="btn btn-secondary text-white" style="margin-left: auto;" href="{{route('admin.chef.dashboard')}}">Cancel</a>
                        <button type="submit" class="btn btn-primary" style="margin-left: auto;">Save</button>
                    </div>
                </div>
            </form>
            @else
            <form action="{{route('admin.chef.add.save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body p-0">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ asset('client_side\images\no-image.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-secondary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload image</span>
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
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">speciality</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text  @error('speciality') is-invalid @enderror"><i class="fa-solid fa-martini-glass-empty" style="font-size: 0.8rem;opacity:0.85"></i></span>
                            <input type="text" id="speciality" class="form-control  @error('speciality') is-invalid @enderror" placeholder="Speciality" aria-label="Speciality" aria-describedby="basic-icon-default-company2" name="speciality" />
                        </div>
                        @error('speciality')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-message">Discription</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text @error('discription') is-invalid @enderror"><i class="bx bx-comment"></i></span>
                            <textarea id="discription" class="form-control @error('discription') is-invalid @enderror" placeholder="Discription" aria-label="Discription" aria-describedby="basic-icon-default-message2" rows="2" name="discription"></textarea>
                        </div>
                        @error('discription')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10" style="text-align: right;">
                        <a type="button" class="btn btn-secondary text-white" style="margin-left: auto;" href="{{route('admin.chef.dashboard')}}">Cancel</a>
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
