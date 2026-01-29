@extends('layouts.frontend')
@section('title') Terms And Conditions | Safe Zone Systems @endsection
@section('content')
<style>
    h4{
         color: #00235a;
    }

  ul.custom-bullet li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 12px;
    }

    ul.custom-bullet li::before {
        content: "•";         /* bullet */
        position: absolute;
        left: 0;
        top: 0;
        font-size: 20px;
        line-height: 1;
        color: #000;          /* change color if you want */
    }


    .single-service, .service-aside {
        margin: 80px 0;
    }

</style>
<main class="site-content">
    <div class="innerPage-banner">
        <div class="container">
            <div class="d-flex flex-wrap">
                <div class="pageBanner-content">
                    <h1>Terms And Conditions</h1>
                    <div class="breadcrumbs">
                        <a href="/">Home</a>
                        <span>Terms And Conditions</span>
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
</main>
@endsection