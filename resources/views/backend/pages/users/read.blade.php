@extends('backend.layouts.parent')

@section('title')
    User
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-Striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr id="user_{{ $item->id }}">
                                <td id="index_cell"> {{ $data->firstItem() + $key }} </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button onclick="deleteUser('{{ $item->id }}');" type="button"
                                            class="btn btn-warning">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {!! $data->links() !!}
        <!-- /.card -->
        @empty($data->firstItem())
            <h4>no data here</h4>
        @endempty
    </div>
@endsection

@section('scripts')
    <script>
        function deleteUser(id) {
            axios.delete(`/dashboard/users/${id}`).then(function(response) {
                toastr.success(response.data.message),
                    document.getElementById(`user_${id}`).remove()
            }).match(function(error) {
                toastr.error(error.response.data.message)
            });
        }
    </script>
@endsection
