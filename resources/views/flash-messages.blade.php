@if(session('success'))
    <div class="alert alert-success m-0" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning m-0" role="alert">
        {{ session('warning') }}
    </div>
@endif

@if(session('danger'))
    <div class="alert alert-danger m-0" role="alert">
        {{ session('danger') }}
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info m-0" role="alert">
        {{ session('info') }}
    </div>
@endif