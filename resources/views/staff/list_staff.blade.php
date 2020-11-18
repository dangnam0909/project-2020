@EXTENDS('layout.main')

@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">List staff</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="data-table" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center text-dark">
                        <th>Stt</th>
                        <th>Full name</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($staff as $key=>$item)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $item->fullName }}</td>
                            <td>{{ $item->birthday }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="text-center">
                                <!--<a class="btn btn-primary p-1 m-0 text-xs" href="{{ route('list_staff_create') }}">Add</a>-->
                                <a class="btn btn-success p-1 m-0 text-xs" href="{{ route('list_staff_edit',['id'=>$item->id]) }}"><i class="fas fa-user-edit"></i></a>
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
                                <a class="btn btn-danger p-1 m-1 text-xs" data-toggle="modal" id="delete_id" data-target="#exampleModalCenter"  href="{{ route('list_staff_delete',['id'=>$item->id]) }}"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" href="{{ route('list_staff_delete',['id'=>$item->id]) }}">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#delete_id').on('click', function () {
            let id = $("#delete_id").val();
            console.log(id);return true;
        })
    });

</script>
