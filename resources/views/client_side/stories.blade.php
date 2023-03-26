@extends('client_side.master.main')

@section('title', 'Stories Page')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('client_side/images/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Blog</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach ($stories as $story)
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry" style="min-height: 31rem;">
                    <a href="javascript:void(0)" class="block-20" style="background-image: url({{ asset($story['image'] != null ? $story['image'] : 'client_side/images/image_6.jpg')}});">
                    </a>
                    <div class="text p-3">
                        <div class="meta">
                            <div>{{$story['date']}}</div>
                        </div>
                        <h3 class="heading"><a href="#">{{$story['title']}}</a></h3>
                        <p class="clearfix">
                            <!-- <a href="#" class="float-left read">Read more</a> -->
                            <span class="text-primary mt-auto" style="cursor: pointer;" id="{{ $story['id'] }}" onclick="showModel(this)">
                                Read more
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0 py-2 px-auto">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="blog-entry mb-0">
                            <img alt="Image not found" width="100%" class="rounded" id="modelImage">
                            <div class="text p-3">
                                <div class="meta">
                                    <p id="modelDate"></p>
                                </div>
                                <p class="text-dark" id="modelDescription"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@section('extra-js')
<script>
    function showModel(data) {
        $.ajax({
            type: 'POST',
            url: `/user/get/story-data`,
            data: {
                "id": data.id,
                "_token": "{{ csrf_token() }}"
            },
            success: function(response) {
                $('#modelImage').attr('src', `http://127.0.0.1:8000/${response.data['image']}`);
                $('#modelDate').text(response.data['date']);
                $('#modelDescription').text(response.data['description']);
                $("#modal").modal("toggle");
            }
        })
    }
</script>
@endsection


@endsection