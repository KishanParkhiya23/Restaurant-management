@section('extraa-css')
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

<script>
    let token = "{{ csrf_token() }}";
</script>

<div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th style="width: 40%!important;">poppings</th>
                <th>Prize</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">

            @foreach ($data as $item)
            <tr>
                <td>
                    <img src="{{ asset(isset($item['image']) ? $item['image'] : 'client_side/images/menu/no-image.png')}}" alt="Avatar" class="rounded-circle">
                    <strong>{{$item['name']}}</strong>
                </td>
                <td>{{$item['poppings']}}</td>
                <td><i class="fa-solid fa-indian-rupee-sign fa-xs"></i>  {{$item['prize']}}</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('admin.menu.edit.food.show',$item['id'])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item" href="#" onclick="deleteRecord(this,token,{{$item['type']}})" id="{{$item['id']}}"><i class="bx bx-trash me-1"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
