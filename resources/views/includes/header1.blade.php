<header>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class=" container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'LRA') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <div class="d-flex justify-content-around navbar-nav ms-auto">

                        <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/facilities">{{ __('Facilities') }}</a> </li>

                        <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/admissions">{{ __('Admissions') }}</a> </li>

                        <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/faculty"> {{ __("Faculty") }} </a> </li>

                        <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/alumni">{{ __('Alumni') }}</a> </li>

                        <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/history">{{ __('History') }}</a> </li>

                        <li class="nav-item">
                        <a class="nav-link text-black fw-bolder" href="/about"> {{ __("About") }} </a> </li>

                        <li class="nav-item">
                        <a class="nav-link btn custom-btn text-white" href="#"> {{ __("Apply Now") }} </a> </li>
                    </div>
                </div>

            </div>

        </nav>


</header>
