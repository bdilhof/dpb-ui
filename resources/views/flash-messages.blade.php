<!-- Staging notice -->
@env('staging')
    <div class="alert alert-dismissible fade show alert-warning m-0" role="alert">
        <h4 class="alert-heading">Testovacie prostredie</h4>
        <p class="mb-0">Toto je testovacia verzia projektu, určená výlučne na prehliadanie a skúšanie nových funkcionalít pred ich nasadením do produkčného prostredia.</p>
        <p class="mb-0">Prosím, nepoužívajte túto verziu na žiadne iné účely. Pre bežné používanie a živú prevádzku použite produkčnú verziu dostupnú na: <a class="alert-link" href="{{ config('app.url_production') }}" target="_blank">{{ config('app.url_production') }}</a></p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endenv

@if(session('success'))
    <div class="alert alert-dismissible fade show alert-success m-0" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-dismissible fade show alert-warning m-0" role="alert">
        {{ session('warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('danger'))
    <div class="alert alert-dismissible fade show alert-danger m-0" role="alert">
        {{ session('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('info'))
    <div class="alert alert-dismissible fade show alert-primary m-0" role="alert">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
