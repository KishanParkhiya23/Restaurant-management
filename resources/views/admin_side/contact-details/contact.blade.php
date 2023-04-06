@extends('layouts.contentNavbarLayout')

@section('title', 'Contact details')
<style>
    table.a {
        table-layout: fixed !important;
    }

    table .avatar img {
        width: 200% !important;
        height: 200% !important;
    }

    .fw-semibold {
        font-size: 0.85rem;
        font-weight: 0;
        padding-bottom: 1rem;
    }
</style>
@section('content')


@section('extraa-js')
<script>
    function showModel(data) {
        // alert(data.id);
        // $("#modal").modal("toggle");

        $.ajax({
            type: 'POST',
            url: `/admin/contact-details/contact/get-data`,
            data: {
                "id": data.id,
                "_token": "{{ csrf_token() }}"
            },
            success: function(response) {
                $('#modalCenterTitle').text(response.data['name']);
                $('#modalSubject').text(response.data['subject']);
                $('#modelContant').text(response.data['message']);
                $('#modelEmail').text(response.data['email']);
                $("#modal").modal("toggle");
            }
        })
    }
</script>
@endsection


<!-- Striped Rows -->
<div class="container">
    <div class="row">
        <div class="card p-0">
            <div class="card-header">
                <h5 class="d-inline-block m-0">Contact details</h5>

            </div>
        </div>
        <div class="row my-3 p-0">
        <div class="text-end mb-3">
                    {{$data->links()}}
                </div>

            @foreach ($data as $contact)
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card">
                    <div class="card-body" style="padding: 1.25rem 1.5rem ;">
                        <div class="card-title d-flex align-items-start justify-content-between mb-0">
                            <h4>{{$contact->name}}</h4>
                        </div>

                        <span class="fw-semibold d-block mb-1">{{$contact->subject}}</span>
                        <a href="javascript:void(0)" onclick="showModel(this)" class="mt-1" id="{{ $contact->id }}"><small class="text-success fw-semibold"> <i class="fa-sharp fa-solid fa-chevron-right fa-sm"></i> Read More</small></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <div id="modelEmail"></div>
                <br>

                <span>Subject : </span>
                <b id="modalSubject"></b>
                <br>

                <span>Details : </span>
                <span id="modelContant"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

@endsection