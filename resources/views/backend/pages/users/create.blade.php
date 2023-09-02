@extends('backend.layouts.parent')

@section('title')
    Add User
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <!-- form start -->

            <form id="store_form">
                @csrf
                @include('backend.components.alert')

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">User Name:</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" onclick="storeUser();" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function storeUser() {

            axios.post('{{ route('users.store') }}', {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value
            }).then(function(response) {
                toastr.success(response.data.message);
                document.getElementById('store_form').reset();
            }).catch(function(error) {
                toastr.error(error.response.data.message)
            });

        }
    </script>
@endsection
