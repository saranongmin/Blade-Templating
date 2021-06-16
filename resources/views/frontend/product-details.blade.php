@extends('frontend.layouts.master')

@section('title', 'Product Details')

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
        <li class="breadcrumb-item">
            <a href="women.html">Women's Clothing</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Single Product</li>
    </ol>
</nav>
<!-- //breadcrumbs -->


<!-- Single -->
<div class="innerf-pages section py-5">
    <div class="container">
        <div class="row my-sm-5">
            <div class="col-lg-4 single-right-left">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            <li data-thumb="{{ asset('storage/products/'.$product->image) }}">
                                <div class="thumb-image">

                                    @if(file_exists(storage_path().'/app/public/products/'.$product->image ) && (!is_null($product->image)))
                                        <img src="{{ asset('storage/products/'.$product->image) }}"  data-imagezoom="true" alt=" " class="img-fluid">
                                    @else
                                        <img src="{{ asset('/default-avatar.png') }}">
                                    @endif

{{--                                    <img src="{{ asset('ui/frontend') }}/images/mff1.jpg" data-imagezoom="true" alt=" " class="img-fluid">--}}
                                </div>
                            </li>
                            @foreach($product->pictures as $img)
                                @if(file_exists(storage_path().'/app/public/products/'.$img->picture ) && (!is_null($img->picture)))

                                    <li data-thumb="{{ asset('storage/products/'.$img->picture) }}">
                                        <div class="thumb-image">
                                            <img src="{{ asset('storage/products/'.$img->picture) }}" data-imagezoom="true" alt=" " class="img-fluid"> </div>
                                    </li>
                                @endif

                            @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                <h3>{{ $product->title }}</h3>
                <div class="caption">

                    <ul class="rating-single">
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                    <h6>TK {{ $product->discount>0 ? $product->discount_price : $product->unit_price}}</h6>
                </div>
                <div class="desc_single">
                    <h5>Description</h5>

                    <p>{!! $product->description !!}</p>
                    {!! Form::open([
                                        'route'=>['place_order', $product->id]
                                ]) !!}

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            {!! Form::number('quantity', 1, ['class'=>'form-control']) !!}
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            {{ Form::label('size', 'Sizes : ',['class'=>'pr-3']) }}
                            @foreach($product->sizes as $key=>$size)
                                {!! Form::radio('size', $size->name) !!}{{ $size->name }}
                            @endforeach
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            {{ Form::label('color', 'Colors : ',['class'=>'pr-3']) }}
                            @foreach($product->colors as $key=>$color)
                                {!! Form::radio('color', $color->name) !!}{{ $color->name }}
                            @endforeach
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            {{ Form::label('shipping_address', 'Shipping Address : ', ['class'=>'pr-3']) }}
                            {!! Form::textarea('shipping_address', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>



                    <button class="btn btn-info" type="submit">Place Order</button>
                    {!! Form::close() !!}
                </div>

                <div class="occasion-cart">
                    <div class="chr single-item single_page_b">
                        <form action="#" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="Floral Print Women's Top">
                            <input type="hidden" name="amount" value="18.00">
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
<!-- /new_arrivals -->
<div class="section singlep_btm pb-5">
    <div class="container">
        <div class="new_arrivals">
            <h4 class="rad-txt text-capitalize">you may also be interested in
            </h4>
            @foreach($products->chunk(4) as $items)
            <div class="row mt-4">
                @foreach($items as $product)
                <div class="col-md-3">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">

                            @if(file_exists(storage_path().'/app/public/products/'.$product->image ) && (!is_null($product->image)))
                                <img src="{{ asset('storage/products/'.$product->image) }}" alt="img" class="card-img-top"/>
                            @endif

                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{ route('product.details', $product->id) }}" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">{{$product->title}}</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">Tk {{$product->discount}}</p>
                                <p class="line-through">Tk {{ $product->unit_price }}</p>
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
                </div>
                @endforeach

            </div>
            @endforeach
            <!--//new_arrivals-->
        </div>
    </div>
</div>

@endsection

@push('script')
    <!-- FlexSlider -->
    <script src="{{ asset('ui/frontend') }}/js/jquery.flexslider.js"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider1').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <script src="{{ asset('ui/frontend') }}/js/imagezoom.js"></script>
@endpush

@push('css')
      <!-- flexslider-css -->
    <link rel="stylesheet" href="{{ asset('ui/frontend') }}/css/flexslider.css" type="text/css" media="screen" />

@endpush
