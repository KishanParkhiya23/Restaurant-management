@extends('layouts.contentNavbarLayout')

@section('title', 'Stories management')

@section('extraa-js')
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

@section('content')

<!-- Striped Rows -->
<div class="card mb-3">
    <div class="card-header pb-2">
        <h5 class="d-inline-block">{{ isset($data) ? "Edit" : "Add" }} new story</h5>
    </div>
</div>
<div class="card">
    <div class="container">
        <div class="row py-5">
            <form action="{{route( isset($data) ? 'admin.stories-management.edit.save' : 'admin.stories-management.add.save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ isset($data) ? $data['id'] : ''}}">
                <div class="card-body p-0">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{ asset( isset($data) ? $data['image'] : 'client_side/images/menu/no-image.png' )}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-secondary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">{{ isset($data) ? "Edit" : "Add" }} story image</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" name="image" class="account-file-input" hidden="" accept="image/png, image/jpeg" value="{{ isset($data) ? $data['image'] : '' }}">
                            </label>
                            <p class="text-muted mb-0" style="font-size: 13px; margin-bottom: -24px!important;">Allowed JPG, GIF or PNG. Max size of 800K</p>

                            @error('image')
                            <br>
                            <div class="text-error">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Title</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge ">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" name="title" value="{{ isset($data) ? $data['title'] : old('title') }}" />
                        </div>
                        @error('title')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Date</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <input type="date" id="date" class="form-control  @error('date') is-invalid @enderror" placeholder="Enter date" aria-label="date" aria-describedby="basic-icon-default-company2" name="date" value="{{ isset($data) ? $data['date'] : old('date') }}" max="<?= date('Y-m-d') ?>" />
                        </div>
                        @error('date')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-message">Description</label>
                    <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                            <textarea id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter description" aria-label="description" aria-describedby="basic-icon-default-message2" rows="5" name="description">{{ isset($data) ? $data['description'] : old('description') }}</textarea>
                        </div>
                        @error('description')
                        <div class="text-error">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10" style="text-align: right;">
                        <a type="button" class="btn btn-secondary text-white" style="margin-left: auto;" href="{{ route('admin.stories-management') }}">Cancel</a>
                        <button type="submit" class="btn btn-primary" style="margin-left: auto;">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--/ Striped Rows -->
@endsection