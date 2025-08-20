@php
    $footerInfo = \App\Models\FooterInfo::first();
    $socialLinks = \App\Models\SocialLink::where('status', 1)->get();

@endphp
<footer>
    <div class="container">
        <div class="row text-white">
            <div class="col-xl-3 col-sm-12 col-md-6 col-lg-6">
                <div class="footer_text">
                    <h3>About Us</h3>
                    <p>{!! $footerInfo?->short_description !!}</p>
                    <ul class="footer_icon">
                        @foreach ($socialLinks as $link)
                            <li><a href="{{ $link->url }}"><i class="{{ $link->icon }}"></i></a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-6 col-lg-6">
                <div class="footer_text">
                    <h3>My Account</h3>
                    <ul class="footer_link">
                        @guest
                            <li><a href="{{ route('register') }}"><i class="far fa-chevron-double-right"></i> Register</a></li>
                            <li><a href="{{  route('login') }}"><i class="far fa-chevron-double-right"></i> Login</a></li>
                        @endguest

                        @auth
                            <li><a href="{{ route('user.dashboard') }}"><i class="far fa-chevron-double-right"></i> User Dashboard</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                <div class="footer_text">
                    <h3>Helpful Links</h3>
                    <ul class="footer_link">
                        <li><a href="{{ route('home') }}"><i class="far fa-chevron-double-right"></i> Home</a></li>
                        <li><a href="{{ route('packages') }}"><i class="far fa-chevron-double-right"></i> Packages</a></li>
                        <li><a href="{{ route('privacy-policy.index') }}"><i class="far fa-chevron-double-right"></i> Privacy Policy</a></li>
                        <li><a href="{{ route('terms-and-condition.index') }}"><i class="far fa-chevron-double-right"></i> Terms & Conditions</a></li>
                        <li><a href="{{ route('contact.index') }}"><i class="far fa-chevron-double-right"></i> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-6 col-lg-6">
                <div class="footer_text footer_contact">
                    <h3>Information</h3>
                    <ul class="footer_link">
                        <li>
                            <p><i class="far fa-map-marker-alt"></i> {{ $footerInfo?->address }}</p>
                        </li>
                        <li><a href="#"><a href="mailto:{{ $footerInfo?->email }}"><i class="fal fa-envelope"></i>
                                    {{ $footerInfo?->email }}</a></li>
                        <li><a href="#"><a href="callto:{{ $footerInfo?->phone }}"><i
                                        class="fal fa-phone-alt"></i>
                                    {{ $footerInfo?->phone }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-5">
                    <p>{{ $footerInfo?->copyright }}</p>
                </div>
                <div class="col-xl-6 col-md-7">

                </div>
            </div>
        </div>
    </div>
</footer>
