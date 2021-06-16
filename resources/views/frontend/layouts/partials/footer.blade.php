<!-- footer -->
<footer>
    <div class="footerv2-w3ls">
        <div class="footer-w3lagile-innerr">
            <!-- footer-top -->
            <div class="container-fluid">
                <div class="row  footer-v2grids w3-agileits">
                    <!-- services -->
                    <div class="col-lg-2 col-sm-6 footer-v2grid">
                        <h4>Support</h4>
                        <ul>

                            <li>
                                <a href="payment.html">Payment</a>
                            </li>
                            <li>
                                <a href="#">Shipping</a>
                            </li>
                            <li>
                                <a href="#">Cancellation & Returns</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //services -->
                    <!-- latest posts -->
                    <div class="col-lg-3 col-sm-6 footer-v2grid mt-sm-0 mt-5">
                        <h4>Latest Blog</h4>
                        @foreach($blogs as $blog)
                        <div class="footer-v2grid1 row">
                            <div class="col-4 footer-v2grid1-left">
                                <a href="">
                                    @if(file_exists(storage_path().'/app/public/blogs/'.$blog->image ) && (!is_null($blog->image)))
                                        <img src="{{ asset('storage/blogs/'.$blog->image) }}" height="100">
                                    @endif
                                </a>
                            </div>
                            <div class="col-8 footer-v2grid1-right p-0">
                                <a href="">{{$blog->title}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- //latest posts -->
                    <!-- locations -->
                    <div class="col-lg-2 col-sm-6 footer-v2grid my-lg-0 my-5">
                        <h4>office locations</h4>
                        <ul>
                            <li>
                                <a href="#">new jersey</a>
                            </li>
                            <li>
                                <a href="#">texas</a>
                            </li>
                            <li>
                                <a href="#">michigan</a>
                            </li>
                            <li>
                                <a href="#">cannada</a>
                            </li>
                            <li>
                                <a href="#">brazil</a>
                            </li>
                            <li>
                                <a href="#">california</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //locations -->
                    <!-- flickr posts -->
                    <div class="col-lg-3 col-sm-6 footer-v2grid my-lg-0 my-sm-5">
                        <h4 class="b-log">
                            flickr posts
                        </h4>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/bl4.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/bl1.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/bl6.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/bl5.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>

                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/bl2.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/bl3.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/bl6.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/bl4.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                        <div class="footer-v2grid-instagram">
                            <a href="#">
                                <img src="{{ asset('ui/frontend') }}/images/bl5.jpg" alt=" " class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- //flickr posts -->
                    <!-- popular tags -->
                    <div class="col-lg-2  footer-v2grid mt-sm-0 mt-5">
                        <h4>popular tags</h4>
                        <ul class="w3-tag2">
                            <li>
                                <a href="shop.html">amet</a>
                            </li>
                            <li>
                                <a href="men.html">placerat</a>
                            </li>
                            <li>
                                <a href="shop.html">Proin </a>
                            </li>
                            <li>
                                <a href="boys.html">vehicula</a>
                            </li>
                            <li>
                                <a href="shop.html">diam</a>
                            </li>
                            <li>
                                <a href="women.html">velit</a>
                            </li>
                            <li>
                                <a href="shop.html">felis</a>
                            </li>
                            <li>
                                <a href="shop.html">mauris</a>
                            </li>
                            <li>
                                <a href="girls.html">amet</a>
                            </li>
                            <li>
                                <a href="shop.html">placerat</a>
                            </li>
                            <li>
                                <a href="shop.html">Proin </a>
                            </li>
                            <li>
                                <a href="index.html">vehicula</a>
                            </li>
                            <li>
                                <a href="shop.html">diam</a>
                            </li>
                            <li>
                                <a href="men.html">velit</a>
                            </li>
                            <li>
                                <a href="shop.html">felis</a>
                            </li>
                            <li>
                                <a href="women.html">mauris</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //popular tags -->
                </div>
            </div>
            <!-- //footer-top -->
            <div class="footer-bottomv2 py-5">
                <div class="container">
                    <ul class="bottom-links-agile">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="shop.html">Shop</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>

                    </ul>
                    <h3 class="text-center follow">Follow Us</h3>
                    <ul class="social-iconsv2 agileinfo">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5 footer-copy_w3ls">
            <div class="d-lg-flex justify-content-between">
                <div class="mt-2 sub-some align-self-lg-center">
                    <h5>Payment Method</h5>
                    <ul class="mt-4">
                        <li class="list-inline-item">
                            <img src="{{ asset('ui/frontend') }}/images/pay2.png" alt="">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ asset('ui/frontend') }}/images/pay5.png" alt="">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ asset('ui/frontend') }}/images/pay3.png" alt="">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ asset('ui/frontend') }}/images/pay7.png" alt="">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ asset('ui/frontend') }}/images/pay8.png" alt="">
                        </li>
                        <li class="list-inline-item ">
                            <img src="{{ asset('ui/frontend') }}/images/pay9.png" alt="">
                        </li>
                    </ul>
                </div>
                <div class="cpy-right align-self-center">
                    <h2 class="agile_btxt">
                        <a href="index.html">
                            <span>f</span>ashion
                            <span>h</span>ub</a>
                    </h2>
                    <p>© 2018 Fashion Hub. All rights reserved | Design by
                        <a href="http://w3layouts.com" class="text-secondary"> W3layouts.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->
