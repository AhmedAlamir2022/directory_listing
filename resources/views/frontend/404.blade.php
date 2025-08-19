@extends('frontend.layouts.master')

@section('contents')
    <!--==========================
                    BREADCRUMB PART START
                ===========================-->
    <div id="breadcrumb_part">
        <div class="bread_overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center text-white">
                        <h4>404</h4>
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> Home </a></li>
                                <li class="breadcrumb-item active" aria-current="page"> 404 </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================
                    BREADCRUMB PART END
                ===========================-->


    {{-- <section id="about_page">
        <div class="container">
            <div class="row justify-content-between">
                <div class="about_img">
                    <img style="width: 442px !important;
                        height: 500px !important;"
                        src="{{ asset('frontend/images/404.jpg') }}" alt="about" class="img-fluid w-100">


                </div>
            </div>
        </div>
    </section>
     --}}

    <section id="about_page" class="py-5">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="about_img text-center">
                        <img src="{{ asset('frontend/images/404.jpg') }}" alt="404 Page" class="img-fluid w-100"
                            style="max-height: 100vh; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
