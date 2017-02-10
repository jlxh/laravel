@if(session()->has('ok'))
    <div class="alert alert-success alert-dismissable fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        {{ session('ok') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-danger fade in" role="alert">
        {{ session('error') }}
    </div>
@endif
@if(session()->has('errors'))
    <div class="alert alert-danger fade in" role="alert">
        <ul>
            @foreach(session('errors')->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
