@php
    $current_route_name = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/SecqureOneHealth_logo-1.png') }}" alt="Logo" width="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $current_route_name == 'show.productions' ? 'active' : '' }}"
                        aria-current="page" href="{{ route('show.productions') }}">Productions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $current_route_name == 'show.individual.productions' ? 'active' : '' }}"
                        href="{{ route('show.individual.productions') }}">Individual Productions</a>
                </li>
            </ul>
            <a href="{{ route('handle.logout') }}" class="btn btn-secondary btn-sm ms-auto">Logout</a>
        </div>
    </div>
</nav>
@push('scripts')
    <script src="{{ asset('filter-sort-searchable.js') }}"></script>
@endpush
