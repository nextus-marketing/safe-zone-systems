@extends('layouts.frontend')

@section('title')
    404 Not Found | Safe Zone Systems
@endsection

@section('content')
<style>
    @media (max-width: 1399px) {
    .error-content {
        margin: 50px 0 320px;
    }
}
</style>
    <main class="site-content">
                <div class="innerPage-banner">
                    <div class="container">
                        <div class="d-flex flex-wrap">
                            <div class="pageBanner-content">
                                <h1>404 Error</h1>
                                <div class="breadcrumbs">
                                    <a href="/">Home</a>
                                    <span>404</span>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="scroling-lines">
                        <span>
                            <span data-parallax='{"y":750, "smoothness":45}'></span>
                        </span>
                        <span>
                            <span data-parallax='{"y":-550, "smoothness":55}'></span>
                        </span>
                        <span>
                            <span data-parallax='{"y":250, "smoothness":65}'></span>
                        </span>
                        <span>
                            <span data-parallax='{"y":650, "smoothness":25}'></span>
                        </span>
                        <span>
                            <span data-parallax='{"y":-450, "smoothness":45}'></span>
                        </span>
                    </div>
                </div>
                <!-- /.innerPage-banner -->

                <div class="page-content">
                    <div class="error-area">
                        <div class="container">
                            <div class="error-content">
                                <div class="row justify-content-center">
                                    <div class="col-xl-9">
                                        <div class="row">
                                            <div class="col">
                                                <span>4</span>
                                            </div>
                                            <div class="col">
                                                <span>0</span>
                                            </div>
                                            <div class="col">
                                                <span>4</span>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-lg-7 text-center text-lg-left mb-4 mb-lg-0">
                                                <h3>Oops!</h3>
                                                <p>Sorry, The page you are looking for no longer exists.</p>
                                            </div>
                                            <div class="col-lg-5 text-center text-lg-right">
                                                <a href="/"><i class="icofont-double-left"></i> Back To Home</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-content -->
            </main>
@endsection
