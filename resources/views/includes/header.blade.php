<header>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Gifted Ideas') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <!--
                        <li class="nav-item dropdown"></li>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-primary" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __("Find Products") }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-center">
                                    {{ __('All Categories') }}
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-center">
                                    {{ __('Clothing/Apparel') }}
                                </a></li>
                        </ul>
                    -->

                        <li class="nav-item"></li>
                        <a class="nav-link" href="/about"> {{ __("About us") }} </a>

                        <li class="nav-item"></li>
                        <a class="nav-link" href="/inquire">{{ __('Admissions') }}</a>

                        <li class="nav-item"></li>
                        <a class="nav-link" href="/inquire">{{ __('Facilities') }}</a>

                    </ul>
                </div>
            </div>
        </nav>
</header>
