@extends('frontend.layouts.master')

@section('title', 'Homepage')

@section('content')
<!-- banner -->
<div class="banner-text">
    <div class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li class="banner">
                <div class="container">
                    <h3 class="agile_btxt">
                        <span>f</span>ashion
                        <span>h</span>ub
                    </h3>
                    <h4 class="w3_bbot">shop exclusive clothing</h4>
                    <div class="slider-info mt-sm-5">
                        <h4 class="bn_right">
                            <span>w</span>omen's
                            <span>f</span>ashion</h4>
                        <div class="bnr_clip position-relative">
                            <h4>get up to
                                <span class="px-2">45% </span>
                            </h4>
                            <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                <div class="bg-flex-item">
                                    <span>O</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F</span>
                                </div>
                                <div class="bg-flex-item">
                                        <span>F
                                        </span>
                                </div>
                            </div>
                            <p class="text-uppercase py-2">on special sale</p>
                            <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="banner banner2">
                <div class="container">
                    <h3 class="agile_btxt">
                        <span>f</span>ashion
                        <span>h</span>ub
                    </h3>
                    <h4 class="w3_bbot">shop exclusive clothing</h4>
                    <div class="slider-info mt-sm-5">
                        <h4 class="bn_right">
                            <span>m</span>en's
                            <span>f</span>ashion</h4>
                        <div class="bnr_clip position-relative">
                            <h4>get up to
                                <span class="px-2">35% </span>
                            </h4>
                            <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                <div class="bg-flex-item">
                                    <span>O</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F</span>
                                </div>
                                <div class="bg-flex-item">
                                        <span>F
                                        </span>
                                </div>
                            </div>
                            <p class="text-uppercase py-2">on special sale</p>
                            <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="banner banner3">
                <div class="container">
                    <h3 class="agile_btxt">
                        <span>f</span>ashion
                        <span>h</span>ub
                    </h3>
                    <h4 class="w3_bbot">shop exclusive clothing</h4>
                    <div class="slider-info mt-sm-5">
                        <h4 class="bn_right">
                            <span>k</span>id's
                            <span>f</span>ashion</h4>
                        <div class="bnr_clip position-relative">
                            <h4>get up to
                                <span class="px-2">45% </span>
                            </h4>
                            <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                <div class="bg-flex-item">
                                    <span>O</span>
                                </div>
                                <div class="bg-flex-item">
                                    <span>F</span>
                                </div>
                                <div class="bg-flex-item">
                                        <span>F
                                        </span>
                                </div>
                            </div>
                            <p class="text-uppercase py-2">on special sale</p>
                            <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- //banner -->
<!--services-->
<div class="agileits-services" id="services">
    <div class="no-gutters agileits-services-row row">
        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-sync-alt p-4"></span>
            <h4 class="mt-2 mb-3">30 days replacement</h4>
        </div>
        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-gift p-4"></span>
            <h4 class="mt-2 mb-3">Gift Card</h4>
        </div>

        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-lock p-4"></span>
            <h4 class="mt-2 mb-3">secure payments</h4>
        </div>
        <div class="col-lg-3 col-sm-6 agileits-services-grids p-sm-5 p-3">
            <span class="fas fa-shipping-fast p-4"></span>
            <h4 class="mt-2 mb-3">free shipping</h4>
        </div>
    </div>
</div>
<!-- //services-->
<!-- about -->
<div class="row no-gutters pb-5">
    @foreach($categories as $category)
    <div class="col-sm-4">
        <div class="hovereffect">
{{--            <img class="img-fluid" src="{{ asset('ui/frontend') }}/images/a1.jpg" alt="">--}}

            @if(file_exists(storage_path().'/app/public/categories/'.$category->image ) && (!is_null($category->image)))
                <img src="{{ asset('storage/categories/'.$category->image) }}" alt="img" class="card-img-top">
            @endif
            <div class="overlay">
                <h5>{!!  $category->description !!}</h5>
                <a class="info" href="{{ route('products.list', $category->id) }}">Shop Now</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- //about -->
<!-- product tabs -->
<section class="tabs_pro py-md-5 pt-sm-3 pb-5">
    <h5 class="head_agileinfo text-center text-capitalize pb-5">
        <span>s</span>mart clothing</h5>
    <div class="tabs tabs-style-line pt-md-5">
        <nav class="container">
            <ul id="clothing-nav" class="nav nav-tabs tabs-style-line" role="tablist">
                @foreach($categories as $count => $category)

                    <li role="presentation" @if($count == 0) class="active nav-item" @endif>
                        <a  href="#tab-{{ $category->id }}" class="nav-link" aria-controls="#tab-{{ $category->id }}" role="tab" data-toggle="tab">{{ $category->title }}</a>
                    </li>

                @endforeach
            </ul>
        </nav>
        <!-- Content Panel -->
        <div id="clothing-nav-content" class="tab-content py-sm-5">
            @foreach($categories as $count => $category)
                <div role="tabpanel" @if($count == 0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $category->id }}">
                    <div id="owl-demo" class="owl-carousel text-center">
                        @foreach($category->products as $product)
                            <div class="item">
                                <!-- card -->
                                <div class="card product-men p-3">
                                    <div class="men-thumb-item">
                                        @if(file_exists(storage_path().'/app/public/products/'.$product->image ) && (!is_null($product->image)))
                                            <img src="{{ asset('storage/products/'.$product->image) }}" alt="img" class="card-img-top">
                                        @endif
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
{{--                                                <a href="" class="link-product-add-cart">Quick View</a>--}}
                                                <a href="{{ route('product.details', $product->id) }}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="card-body  py-3 px-2">
                                        <h5 class="card-title text-capitalize">{{$product->title}}</h5>
                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-dark font-weight-bold">Tk : {{ $product->discount }}</p>
                                            <p class="line-through">Tk : {{ $product->unit_price }}</p>
                                        </div>
                                    </div>
                                    <!-- card footer -->
                                    <div class="card-footer d-flex justify-content-end">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="hub_item" value="Self Design Women's Tunic">
                                            <input type="hidden" name="amount" value="28.00">
                                            <button type="submit" class="hub-cart phub-cart btn">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                            </button>
                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>
                                    </div>
                                </div>
                                <!-- //card -->
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- //product tabs -->
<!-- insta posts -->
<section class="py-lg-5">
    <!-- insta posts -->
    <h5 class="head_agileinfo text-center text-capitalize pb-5">
        <span>s</span>hop on insta</h5>
    <div class="gallery row no-gutters pt-lg-5">
        @foreach($products as $product)
                <div class="col-lg-2 col-sm-4 col-6 gallery-item">
                    @if(file_exists(storage_path().'/app/public/products/'.$product->image ) && (!is_null($product->image)))
                        <a href="{{ route('product.details', $product->id) }}"><img src="{{ asset('storage/products/'.$product->image) }}" alt="img" class="card-img-top"></a>
                    @endif




        </div>
            @endforeach
    </div>

</section>
<!-- //insta posts -->

{{--@include('frontend.layouts.elements.sign-up-modal')--}}
{{--@include('frontend.layouts.elements.sign-in-modal')--}}
{{--@include('frontend.layouts.elements.sign-in')--}}
@endsection

@push('script')
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
@endpush
