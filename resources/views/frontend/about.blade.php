@extends('frontend.layouts.master')

@section('title', 'About')

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
<h4 class="text-center">  About Us </h4>
    @foreach($users->chunk(4) as $items)
        <div class="row p-2">
        @foreach($items as $user)
            <div class="col-md-3">
                <div class="card">
            <div class="card-body">
                @if(file_exists(storage_path().'/app/public/users/'.$user->profile->picture ) && (!is_null($user->profile->picture)))
                    <img src="{{ asset('storage/users/'.$user->profile->picture) }}" alt="img" class="card-img-top" height="300px">
                @endif
                <h5 class="card-title blg_w3ls">
                    <p class="card-text">{!! $user->role->name !!} </p>
                    <p> {{$user->name}}</p>
                </h5>

            </div>
        </div>
            </div>
            @endforeach
        </div>
    @endforeach

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
