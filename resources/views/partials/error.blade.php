@if(session()->has('error'))
    <div class="alert alert-dismissible alert-danger fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="">&times;</span>
        </button>
        <strong>
            {{ session()->get('error') }}
        </strong>
    </div>
@endif
