    <!--==========================
        TOPBAR PART START
    ===========================-->
    <section id="wsus__topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-7 d-none d-md-block">
                    <ul class="wsus__topbar_left">
                        <li><a href="mailto:{{ config('settings.site_email') }}"><i class="fal fa-envelope"></i>
                                {{ config('settings.site_email') }}</a></li>
                        <li><a href="callto:{{ config('settings.site_phone') }}"><i
                                    class="fal fa-phone-alt"></i>{{ config('settings.site_phone') }}</a></li>
                    </ul>
                </div>
                <div class="col-xl-6 col-md-5">
                    <div class="wsus__topbar_right">
                        @auth
                            <a href="{{ route('user.dashboard') }}"><i class="fas fa-user"></i> Dashboard</a>
                        @endauth
                        @guest
                            <a href="{{ route('login') }}"><i class="fas fa-user"></i> Login</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
        TOPBAR PART END
    ===========================-->


    <!--==========================
        MENU PART START
    ===========================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ config('settings.logo') }}" alt="DB.Card">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="far fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about.index') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('listings') }}">Listing</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}">Contact Us</a></li>
                </ul>
                <a class="user_btn" href="{{ route('user.listing.create') }}"><i class="far fa-plus"></i>Add listing</a>
            </div>
        </div>
    </nav>
    <!--==========================
        MENU PART END
    ===========================-->
