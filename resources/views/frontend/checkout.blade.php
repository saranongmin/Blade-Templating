@extends('frontend.layouts.master')

@section('title', 'Checkout')

@push('ssl_script')
    <script>

        (function (window, document) {
            var loader = function () {
                var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                tag.parentNode.insertBefore(script, tag);
            };
            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
        })(window, document);

    </script>
@endpush

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
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!--checkout-->
<section class="checkout_wthree py-sm-5 py-3">
    <div class="container">
        <div class="check_w3ls">
            <div class="d-sm-flex justify-content-between mb-4">
                <h4>review your order
                </h4>
                <h4 class="mt-sm-0 mt-3">Your shopping cart contains:
                    <span>{{ count($products) }} Products</span>
                </h4>
            </div>
            <div class="checkout-right">

                @if(session()->has('status'))
                    <div class="alert alert-success">
                        <p>{{ session('status') }}</p>
                    </div>
                @endif

                <form action="{{ route('place_order') }}" method="post" class="creditly-card-form shopf-sear-headinfo_form">
                    @csrf
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($products)>0)
                    @foreach($products as $product)

                    <input type="hidden" name="product_ids[]" value="{{ $product->id }}">

                    <tr class="rem{{$product->id}}">
                        <td class="invert">{{ $loop->iteration }}</td>
                        <td class="invert-image">
                            <a href="{{ route('product.details', $product->id) }}">
                                @if(file_exists(storage_path().'/app/public/products/'.$product->image ) && (!is_null($product->image)))
                                    <img src="{{ asset('storage/products/'.$product->image) }}" alt="img" class="card-img-top">
                                @else
                                    <img src="{{ asset('/default-avatar.png') }}">
                                @endif
                            </a>
                        </td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
{{--                                    <div class="entry value-minus">&nbsp;</div>--}}
{{--                                    <div class="entry value">--}}
                                        <input type="number" id="quantity{{ $product->id }}" name="quantity[]" value="">
                                    </div>
{{--                                    <div class="entry value-plus active">&nbsp;</div>--}}
{{--                                </div>--}}
                            </div>
                        </td>
                        <td class="invert">{{ $product->title }}</td>

                        <td class="invert">{{ $product->unit_price }} TK</td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close{{ $product->id }}" onclick="removeFromCart({{ $product->id }})"> </div>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
{{--            </div>--}}
            <div class="row checkout-left mt-5">
{{--                <div class="col-md-4 checkout-left-basket">--}}
{{--                    <h4>Continue to basket</h4>--}}
{{--                    <ul>--}}
{{--                        <li>Solid Men's Black Shirt--}}
{{--                            <i>-</i>--}}
{{--                            <span>$20.00 </span>--}}
{{--                        </li>--}}
{{--                        <li>Women's Light Blue Tunic--}}
{{--                            <i>-</i>--}}
{{--                            <span>$35.00 </span>--}}
{{--                        </li>--}}
{{--                        <li>Boy's Casual Shirt & Trouser Set--}}
{{--                            <i>-</i>--}}
{{--                            <span>$23.00</span>--}}
{{--                        </li>--}}
{{--                        <li>Total--}}
{{--                            <i>-</i>--}}
{{--                            <span>$78.00</span>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
                <div class="col-md-12 address_form">
                    <h4>Billing Address</h4>

                        <div class="creditly-wrapper wrapper">
                            <div class="information-wrapper">
                                <div class="first-row form-group">
                                    <div class="controls">
                                        <label class="control-label">Full name: </label>
                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                    </div>
                                    <div class="card_number_grids">
                                        <div class="card_number_grid_left">
                                            <div class="controls">
                                                <label class="control-label">Mobile number:</label>
                                                <input class="form-control" type="text" name="mobile_number" placeholder="Mobile number">
                                            </div>
                                        </div>
                                        <div class="card_number_grid_right">
                                            <div class="controls">
                                                <label class="control-label">Shipping Address: </label>
                                                <textarea name="shipping_address" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

{{--                                <button type="submit"  class="submit check_out">place order</button>--}}
{{--                                <a href="http://laravel6.test/shopping-bag">Pay Now</a>--}}
{{--                                <button class="your-button-class" id="sslczPayBtn"--}}
{{--                                        token="if you have any token validation"--}}
{{--                                        postdata="your javascript arrays or objects which requires in backend"--}}
{{--                                        order="123"--}}
{{--                                        endpoint="An URL where backend code will initiate the payment to SSLCommerz"> Pay Now--}}
{{--                                        endpoint="{{ url('payment-test') }}"> Pay Now--}}
{{--                                </button>--}}

                            </div>
                        </div>
                    </form>
                    <button type="submit" id="sslczPayBtn" class="submit check_out">place order</button>

            </div>
            </div>
        </div>
</section>
<!--//checkout-->
@endsection

@push('css')
    <link href="{{ asset('ui/frontend') }}/css/checkout.css" type="text/css" rel="stylesheet" media="all">
    @endpush
@push('script')

<script>
    hub.render();

    hub.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!--quantity-->
{{--<script>--}}
{{--    $('.value-plus').on('click', function () {--}}
{{--        var divUpd = $(this).parent().find('.value'),--}}
{{--            newVal = parseInt(divUpd.text(), 10) + 1;--}}
{{--        divUpd.text(newVal);--}}
{{--    });--}}

{{--    $('.value-minus').on('click', function () {--}}
{{--        var divUpd = $(this).parent().find('.value'),--}}
{{--            newVal = parseInt(divUpd.text(), 10) - 1;--}}
{{--        if (newVal >= 1) divUpd.text(newVal);--}}
{{--    });--}}
{{--</script>--}}
<!--quantity-->
<!-- FadeOut-Script -->
<script>

    // $(document).ready(function (c) {

        function removeFromCart(id){

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "post",
                url: APP_URL+'remove_from_cart',
                data: {productId: id},
                cache: false,
                success: function (res) {
                    console.log(res)
                    $('.rem'+id).empty();
                    // $('.close'+id).on('click', function (c) {
                    //      $('.rem'+id).fadeOut('slow', function (c) {
                    //         $('.rem'+id).remove();
                    //     });
                    // });

                },
                error: function (xhr, status, error) {
                    console.log("An AJAX error occured: " + status + "\nError: " + error);
                }
            });

        }

    // });
</script>
{{--<script>--}}
{{--    $(document).ready(function (c) {--}}
{{--        $('.close2').on('click', function (c) {--}}
{{--            $('.rem2').fadeOut('slow', function (c) {--}}
{{--                $('.rem2').remove();--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    $(document).ready(function (c) {--}}
{{--        $('.close3').on('click', function (c) {--}}
{{--            $('.rem3').fadeOut('slow', function (c) {--}}
{{--                $('.rem3').remove();--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
<!--// FadeOut-Script -->
@endpush
