<header>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'LRA') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item"></li>
                        <a class="nav-link" href="/about"> {{ __("About us") }} </a>

                        <li class="nav-item"></li>
                        <a class="nav-link" href="/admissions">{{ __('Admissions') }}</a>

                        <li class="nav-item"></li>
                        <a class="nav-link" href="/facilities">{{ __('Facilities') }}</a>

                        <!-- Search Buttons -->
                        <form class="form-inline">
                                @csrf
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
                            </form>
                    </ul>
                </div>
            </div>

        </nav>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">


            <div class="container collapse navbar-collapse" id="navbarSupportedContent">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Leave empty -->
                    </ul>
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item"></li>
                        <a class="nav-link" href="/faculty"> {{ __("Faculty") }} </a>

                        <li class="nav-item"></li>
                        <a class="nav-link" href="/alumni">{{ __('Alumni') }}</a>

                        <li class="nav-item"></li>
                        <a class="nav-link" href="/history">{{ __('History') }}</a>
                    </ul>
                </div>
            </div>
            </nav>
</header>
