@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-12 error">
            <ul>
                @foreach($errors->all() as $error)
                    <li style="list-style:none;display:inline-block;margin-right:10px;">
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Warning!</strong> {{$error}}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="col-md-12 success">
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
                <strong>Success!</strong> {{Session::get('message')}}
            </div>
        </div>
    </div>
@endif