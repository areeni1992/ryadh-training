@if (Session::has('status') == 'success' || Session::has('status') == 'error' || $errors->any())
    <div class="alert alert-{{ session()->has('status') == 'success' ? 'success' : 'danger' }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5>
            <i class="icon fas fa-{{ session()->has('status') == 'success' ? 'check' : 'ban' }}"></i>
            {{ Session::get('status') == 'success' ? Session::get('message') : 'Error' }}!
        </h5>
    </div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endif
