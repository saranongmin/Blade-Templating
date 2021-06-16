<!-- header -->
<header>
    <div class="container">
        <!-- top nav -->
        <nav class="top_nav d-flex pt-3 pb-1">
            <!-- logo -->
            <h1>
                <a class="navbar-brand" href="{{ route('welcome') }}">fh
                </a>
            </h1>
            <!-- //logo -->
            <div class="w3ls_right_nav ml-auto d-flex">
                <!-- search form -->
                <form class="nav-search form-inline my-0 form-control" action="#" method="post">
                    <select class="form-control input-lg" name="category">
                        <option value="all">Search our store</option>
                        <optgroup label="Mens">
                            <option value="T-Shirts">T-Shirts</option>
                            <option value="coats-jackets">Coats & Jackets</option>
                            <option value="Shirts">Shirts</option>
                            <option value="Suits & Blazers">Suits & Blazers</option>
                            <option value="Jackets">Jackets</option>
                            <option value="Sweat Shirts">Trousers</option>
                        </optgroup>
                        <optgroup label="Womens">
                            <option value="Dresses">Dresses</option>
                            <option value="T-shirts">T-shirts</option>
                            <option value="skirts">Skirts</option>
                            <option value="jeans">Jeans</option>
                            <option value="Tunics">Tunics</option>
                        </optgroup>
                        <optgroup label="Girls">
                            <option value="Dresses">Dresses</option>
                            <option value="T-shirts">T-shirts</option>
                            <option value="skirts">Skirts</option>
                            <option value="jeans">Jeans</option>
                            <option value="Tops">Tops</option>
                        </optgroup>
                        <optgroup label="Boys">
                            <option value="T-Shirts">T-Shirts</option>
                            <option value="coats-jackets">Coats & Jackets</option>
                            <option value="Shirts">Shirts</option>
                            <option value="Suits & Blazers">Suits & Blazers</option>
                            <option value="Jackets">Jackets</option>
                            <option value="Sweat Shirts">Sweat Shirts</option>
                        </optgroup>
                    </select>
                    <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
                </form>
                <!-- search form -->
                <div class="nav-icon d-flex">
                    <!-- sigin and sign up -->
                    <a class="text-dark login_btn align-self-center mx-3" href="#myModal_btn" data-toggle="modal" data-target="#myModal_btn">
                        <i class="far fa-user"></i>
                    </a>
                    <!-- sigin and sign up -->
                    <!-- shopping cart -->
                    <div class="cart-mainf">
                        <div class="hubcart hubcart2 cart cart box_1">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <a href="{{ route('shopping_bag') }}">
                                    <span class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                        <i class="fas fa-shopping-bag"></i>
                                    </span>
                                </a>

                            </form>
                        </div>
                    </div>
                    <!-- //shopping cart ends here -->
                </div>
            </div>
        </nav>
        <!-- //top nav -->
        <!-- bottom nav -->
        <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('welcome')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>

                    </li>
                    @foreach($categories as $category)
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ $category->title }}</a>
                        <div class="dropdown-menu" style="width:30%">
                            <div class="px-0 container">
                                <div class="row">

                                    <div class="col-md-4">
                                        @foreach($category->subCategories as $subCategory)
                                            <a class="dropdown-item" href="{{ route('products.list', [$category->id, $subCategory->id]) }}">{{ $subCategory->title }}</a>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blogs')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- //bottom nav -->
    </div>
    <!-- //header container -->
</header>
<!-- //header -->
