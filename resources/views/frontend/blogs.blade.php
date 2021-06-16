@extends('frontend.layouts.master')

@section('title', 'Blogs')

@section('content')

    <!-- inner banner -->
<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Blogs</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- Shop -->
    <section class="blog_wthree py-5">
        <div class="container">
            <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>B</span>log</h5>
            <!-- blog row -->
            @foreach($blog->chunk(3) as $items)
            <div class="row p-2">
                @foreach($items as $singleBlog)
                <div class="col-md-4 p-2">
                    <div class="card">
                            @if(file_exists(storage_path().'/app/public/blogs/'.$singleBlog->image ) && (!is_null($singleBlog->image)))
                                <img src="{{ asset('storage/blogs/'.$singleBlog->image) }}" alt="img" class="card-img-top" height="300px">
                            @endif
                        <div class="card-body">
                            <h5 class="card-title blg_w3ls">
                                <span class="text-primary">Blog Title : </span> {{$singleBlog->title}}
                            </h5>
                            <p class="card-text">{!! $singleBlog->description !!}</p>
                            <p class="card-text"> Posted By : {!! $singleBlog->createdBy->name !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
                @endforeach
        </div>
    </section>

@endsection

@push('script')
    <!-- price range (top products) -->
    <script src="{{ asset('ui/frontend') }}/js/config.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('ui/frontend') }}/js/add-to-cart.js"></script>
    <script>
        //<![CDATA[
        $(window).load(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        }); //]]>



    </script>
@endpush


@push('css')
    <!-- flexslider-css -->
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/css/flexslider.css" type="text/css" media="screen" />
@endpush
