@extends('backend.layouts.parent')

@section('title')
    Add User Admin
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <!-- form start -->

            <form action="{{ route('admins.store') }}" method="POST">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Admin Name:</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}"
                            placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{ old('email') }}"
                            placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input name="password" type="password" class="form-control" id="password"
                            value="{{ old('password') }}" placeholder="Password">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
