<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from townhub.kwst.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 18:12:42 GMT -->
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Townhub - Directory Listing Template</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="{{ asset('public/css/reset.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('public/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('public/css/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('public/css/color.css')}}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{ asset('public/images/favicon.ico')}}">
</head>

<body>
<!--loader-->
<div class="loader-wrap">
    <div class="loader-inner">
        <div class="loader-inner-cirle"></div>
    </div>
</div>
<!--loader end-->
<!-- main start  -->
<div id="main">
    <!-- header -->
    <header class="main-header">
        <!-- logo-->
        <a href="index-2.html" class="logo-holder"><img src="{{ asset('public/images/logo.png')}}" alt=""></a>
        <!-- logo end-->
        <!-- header-search_btn-->
        <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>Search</span></div>
        <!-- header-search_btn end-->
        <!-- header opt -->
        <a href="dashboard-add-listing.html" class="add-list color-bg">Add Listing <span><i
                        class="fal fa-layer-plus"></i></span></a>
        <div class="cart-btn   show-header-modal" data-microtip-position="bottom" role="tooltip"
             aria-label="Your Wishlist"><i class="fal fa-heart"></i><span class="cart-counter green-bg"></span></div>
        <div class="show-reg-form modal-open avatar-img" data-srcav="{{ asset('public/images/avatar/3.jpg')}}"><i
                    class="fal fa-user"></i>Sign
            In
        </div>
        <!-- header opt end-->
        <!-- lang-wrap-->
        <div class="lang-wrap">
            <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>En</strong></span><i
                        class="fa fa-caret-down arrlan"></i></div>
            <ul class="lang-tooltip lang-action no-list-style">
                <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                <li><a href="#" data-lantext="Fr">Franais</a></li>
                <li><a href="#" data-lantext="Es">Espaol</a></li>
                <li><a href="#" data-lantext="De">Deutsch</a></li>
            </ul>
        </div>
        <!-- lang-wrap end-->
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap color-bg">
            <div class="nav-button">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!-- nav-button-wrap end-->
        <!--  navigation -->
        <div class="nav-holder main-menu">
            <nav>
                <ul class="no-list-style">
                    <li>
                        <a href="#" class="act-link">Home <i class="fa fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            <li><a href="index-2.html">Parallax Image</a></li>
                            <li><a href="index2.html">Slider</a></li>
                            <li><a href="index3.html">Slideshow</a></li>
                            <li><a href="index4.html">Video</a></li>
                            <li><a href="index5.html">Map</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="#">Listings <i class="fa fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            <li><a href="listing.html">Column map</a></li>
                            <li><a href="listing2.html">Column map 2</a></li>
                            <li><a href="listing3.html">Fullwidth Map</a></li>
                            <li><a href="listing4.html">Fullwidth Map 2</a></li>
                            <li><a href="listing5.html">Without Map</a></li>
                            <li><a href="listing6.html">Without Map 2</a></li>
                            <li>
                                <a href="#">Single <i class="fa fa-caret-down"></i></a>
                                <!--third  level  -->
                                <ul>
                                    <li><a href="listing-single.html">Style 1</a></li>
                                    <li><a href="listing-single2.html">Style 2</a></li>
                                    <li><a href="listing-single3.html">Style 3</a></li>
                                    <li><a href="listing-single4.html">Style 4</a></li>
                                </ul>
                                <!--third  level end-->
                            </li>
                        </ul>
                        <!--second level end-->
                    </li>
                    <li>
                        <a href="blog.html">News</a>
                    </li>
                    <li>
                        <a href="#">Pages <i class="fa fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            <li>
                                <a href="#">Shop<i class="fa fa-caret-down"></i></a>
                                <!--third  level  -->
                                <ul>
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="product-single.html">Product single</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                </ul>
                                <!--third  level end-->
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="author-single.html">User single</a></li>
                            <li><a href="help.html">How it Works</a></li>
                            <li><a href="booking.html">Booking</a></li>
                            <li><a href="pricing-tables.html">Pricing</a></li>
                            <li><a href="dashboard.html">User Dasboard</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                        <!--second level end-->
                    </li>
                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
        <!-- header-search_container -->
        <div class="header-search_container header-search vis-search">
            <div class="container small-container">
                <div class="header-search-input-wrap fl-wrap">
                    <!-- header-search-input -->
                    <div class="header-search-input">
                        <label><i class="fal fa-keyboard"></i></label>
                        <input type="text" name="header_search_input" placeholder="What are you looking for ?"
                               value=""/>
                    </div>
                    <!-- header-search-input end -->
                    <!-- header-search-input -->
                    <div class="header-search-input location autocomplete-container">
                        <label><i class="fal fa-map-marker"></i></label>
                        <input type="text" placeholder="Location..." class="autocomplete-input" id="autocompleteid2"
                               value=""/>
                        <a href="#"><i class="fal fa-dot-circle"></i></a>
                    </div>
                    <!-- header-search-input end -->
                    <!-- header-search-input -->
                    <div class="header-search-input header-search_selectinpt ">
                        <select data-placeholder="Category" class="chosen-select no-radius">
                            <option>All Categories</option>
                            <option>All Categories</option>
                            <option>Shops</option>
                            <option>Hotels</option>
                            <option>Restaurants</option>
                            <option>Fitness</option>
                            <option>Events</option>
                        </select>
                    </div>
                    <!-- header-search-input end -->
                    <button class="header-search-button green-bg" onclick="window.location.href='listing.html'"><i
                                class="far fa-search"></i> Search
                    </button>
                </div>
                <div class="header-search_close color-bg"><i class="fal fa-long-arrow-up"></i></div>
            </div>
        </div>
        <!-- header-search_container  end -->
        <!-- wishlist-wrap-->
        <div class="header-modal novis_wishlist">
            <!-- header-modal-container-->
            <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
                <!--widget-posts-->
                <div class="widget-posts  fl-wrap">
                    <ul class="no-list-style">
                        <li>
                            <div class="widget-posts-img"><a href="listing-single.html"><img
                                            src="{{ asset('public/images/gallery/thumbnail/1.png')}}" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a>
                                </div>
                                <div class="widget-posts-descr-link"><a href="listing.html">Restaurants </a> <a
                                            href="listing.html">Cafe</a></div>
                                <div class="widget-posts-descr-score">4.1</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-img"><a href="listing-single.html"><img
                                            src="{{ asset('public/images/gallery/thumbnail/2.png')}}" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a>
                                </div>
                                <div class="widget-posts-descr-link"><a href="listing.html">Hotels </a></div>
                                <div class="widget-posts-descr-score">5.0</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-img"><a href="listing-single.html"><img
                                            src="{{ asset('public/images/gallery/thumbnail/3.png')}}" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="listing-single.html">Rocko Band in Marquee Club</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                <div class="widget-posts-descr-link"><a href="listing.html">Events</a></div>
                                <div class="widget-posts-descr-score">4.2</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget-posts-img"><a href="listing-single.html"><img
                                            src="{{ asset('public/images/gallery/thumbnail/4.png')}}" alt=""></a>
                            </div>
                            <div class="widget-posts-descr">
                                <h4><a href="listing-single.html">Premium Fitness Gym</a></h4>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a>
                                </div>
                                <div class="widget-posts-descr-link"><a href="listing.html">Fitness</a> <a
                                            href="listing.html">Gym</a></div>
                                <div class="widget-posts-descr-score">5.0</div>
                                <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- widget-posts end-->
            </div>
            <!-- header-modal-container end-->
            <div class="header-modal-top fl-wrap">
                <h4>Your Wishlist : <span><strong></strong> Locations</span></h4>
                <div class="close-header-modal"><i class="far fa-times"></i></div>
            </div>
        </div>
        <!--wishlist-wrap end -->
    </header>

    <!-- wrapper-->
    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <section class="listing-hero-section hidden-section" data-scrollax-parent="true" id="sec1">
                <div class="bg-parallax-wrap">
                    <!--ms-container-->
                    <div class="slideshow-container" data-scrollax="properties: { translateY: '300px' }">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!--ms_item-->
                                <div class="swiper-slide">
                                    <div class="ms-item_fs fl-wrap full-height">
                                        <div class="bg" data-bg="{{ asset('public/images/bg/9.jpg')}}"></div>
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                                <!--ms_item end-->
                                <!--ms_item-->
                                <div class="swiper-slide ">
                                    <div class="ms-item_fs fl-wrap full-height">
                                        <div class="bg" data-bg="images/bg/31.jpg"></div>
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                                <!--ms_item end-->
                                <!--ms_item-->
                                <div class="swiper-slide">
                                    <div class="ms-item_fs fl-wrap full-height">
                                        <div class="bg" data-bg="images/bg/25.jpg"></div>
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                                <!--ms_item end-->
                            </div>
                        </div>
                    </div>
                    <!--ms-container end-->
                    <div class="overlay"></div>
                </div>
                <div class="slide-progress-wrap">
                    <div class="slide-progress"></div>
                </div>
                <div class="container">
                    <div class="list-single-header-item  fl-wrap">
                        <div class="row">
                            <div class="col-md-9">
                                <h1>Premium Fitness Gym <span class="verified-badge"><i class="fal fa-check"></i></span>
                                </h1>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a> <a
                                            href="#"> <i class="fal fa-phone"></i>+38099231212</a> <a href="#"><i
                                                class="fal fa-envelope"></i> yourmail@domain.com</a></div>
                            </div>
                            <div class="col-md-3">
                                <a class="fl-wrap list-single-header-column custom-scroll-link " href="#sec6">
                                    <div class="listing-rating-count-wrap single-list-count">
                                        <div class="review-score">4.1</div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                        <br>
                                        <div class="reviews-count">2 reviews</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="list-single-header_bottom fl-wrap">
                        <a class="listing-item-category-wrap" href="#">
                            <div class="listing-item-category  blue-bg"><i class="fal fa-dumbbell"></i></div>
                            <span>Fitness / Gym</span>
                        </a>
                        <div class="list-single-author"><a href="author-single.html"><span class="author_avatar"> <img
                                            alt='' src='{{ asset('public/images/avatar/5.jpg')}}'>  </span>By Alisa
                                Noory</a></div>
                        <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Close Now</div>
                        <div class="list-single-stats">
                            <ul class="no-list-style">
                                <li><span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  256 </span></li>
                                <li><span class="bookmark-counter"><i class="fas fa-heart"></i> Bookmark -  445 </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- scroll-nav-wrapper-->
            <div class="scroll-nav-wrapper fl-wrap">

            </div>
            <!-- scroll-nav-wrapper end-->
            <section class="gray-bg no-top-padding">
                <div class="container">

                    <div class="clearfix"></div>
                    <div class="row">
                        <!-- list-single-main-wrapper-col -->
                        <div class="col-md-12">
                            <!-- list-single-main-wrapper -->
                            <div class="list-single-main-wrapper fl-wrap">
                                <!-- list-single-main-item-->
                                <div class="list-single-main-item fl-wrap block_box" id="sec2">
                                    <div class="list-single-main-item-title">
                                        <h3>Top Menu Items</h3>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="team-holder fl-wrap">
                                                    <!-- team-item -->

                                                    <div class="listing-item">
                                                        <article class="geodir-category-listing fl-wrap">
                                                            <div class="geodir-category-img">
                                                                <a href="listing-single.html"
                                                                   class="geodir-category-img-wrap fl-wrap">
                                                                    <img src="{{ asset('public/images/kfc1.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                                <div class="geodir-category-opt">
                                                                    <div class="listing-rating-count-wrap">


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-content fl-wrap">
                                                                <div class="geodir-category-content-title fl-wrap">
                                                                    <div class="geodir-category-content-title-item">
                                                                        <h3 class="title-sin_map"><a
                                                                                    href="listing-single.html">8 Pieces
                                                                                Family Fill Up</a></h3>
                                                                        <button class="btn btn-info"
                                                                                onclick="window.location.href = 'https://w3docs.com';">
                                                                            Order Now
                                                                        </button>


                                                                    </div>
                                                                </div>

                                                        </article>
                                                    </div>
                                                    <div class="listing-item">
                                                        <article class="geodir-category-listing fl-wrap">
                                                            <div class="geodir-category-img">
                                                                <a href="listing-single.html"
                                                                   class="geodir-category-img-wrap fl-wrap">
                                                                    <img src="{{ asset('public/images/kfc1.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                                <div class="geodir-category-opt">
                                                                    <div class="listing-rating-count-wrap">


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-content fl-wrap">
                                                                <div class="geodir-category-content-title fl-wrap">
                                                                    <div class="geodir-category-content-title-item">
                                                                        <h3 class="title-sin_map"><a
                                                                                    href="listing-single.html">8 Pieces
                                                                                Family Fill Up</a></h3>
                                                                        <button class="btn btn-info"
                                                                                onclick="window.location.href = 'https://w3docs.com';">
                                                                            Order Now
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                        </article>
                                                    </div>


                                                    <!-- team-item end  -->
                                                </div>


                                            </div>
                                            <div class="col-md-6">

                                                <div class="team-holder fl-wrap">
                                                    <!-- team-item -->

                                                    <div class="listing-item">
                                                        <article class="geodir-category-listing fl-wrap">
                                                            <div class="geodir-category-img">
                                                                <a href="listing-single.html"
                                                                   class="geodir-category-img-wrap fl-wrap">
                                                                    <img src="{{ asset('public/images/kfc1.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                                <div class="geodir-category-opt">
                                                                    <div class="listing-rating-count-wrap">


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-content fl-wrap">
                                                                <div class="geodir-category-content-title fl-wrap">
                                                                    <div class="geodir-category-content-title-item">
                                                                        <h3 class="title-sin_map"><a
                                                                                    href="listing-single.html">8 Pieces
                                                                                Family Fill Up</a></h3>
                                                                        <button class="btn btn-info"
                                                                                onclick="window.location.href = 'https://w3docs.com';">
                                                                            Order Now
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                        </article>
                                                    </div>
                                                    <div class="listing-item">
                                                        <article class="geodir-category-listing fl-wrap">
                                                            <div class="geodir-category-img">
                                                                <a href="listing-single.html"
                                                                   class="geodir-category-img-wrap fl-wrap">
                                                                    <img src="{{ asset('public/images/kfc1.jpg')}}"
                                                                         alt="">
                                                                </a>
                                                                <div class="geodir-category-opt">
                                                                    <div class="listing-rating-count-wrap">


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="geodir-category-content fl-wrap">
                                                                <div class="geodir-category-content-title fl-wrap">
                                                                    <div class="geodir-category-content-title-item">
                                                                        <h3 class="title-sin_map"><a
                                                                                    href="listing-single.html">8 Pieces
                                                                                Family Fill Up</a></h3>
                                                                        <button class="btn btn-info"
                                                                                onclick="window.location.href = 'https://w3docs.com';">
                                                                            Order Now
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                        </article>
                                                    </div>


                                                    <!-- team-item end  -->
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-facts -->
                                <div class="list-single-facts fl-wrap">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- inline-facts -->

                                            <!-- inline-facts end -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- inline-facts  -->

                                            <!-- inline-facts end -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- inline-facts  -->

                                            <!-- inline-facts end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-facts end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap block_box" id="sec3">
                                    <div class="list-single-main-item-title">
                                        <h3>Limited Time Only</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <p></p>
                                        <p></p>

                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap block_box">
                                    <div class="list-single-main-item-title">
                                        <h3>World Famous Chicken</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">

                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item-->
                                <div class="list-single-main-item fl-wrap block_box" id="sec4">
                                    <div class="list-single-main-item-title">
                                        <h3>Big Box Meal</h3>
                                    </div>

                                </div>
                                <!-- list-single-main-item end -->
                                <!-- accordion-->

                                <!-- accordion end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap block_box" id="sec6">
                                    <div class="list-single-main-item-title">
                                        <h3>Item Reviews - <span> 2 </span></h3>
                                    </div>
                                    <!--reviews-score-wrap-->
                                    <div class="reviews-score-wrap fl-wrap">
                                        <div class="review-score-total">
                                                    <span class="review-score-total-item">
                                                    4.1
                                                    </span>
                                            <div class="listing-rating card-popup-rainingvis"
                                                 data-starrating2="5"></div>
                                        </div>
                                        <div class="review-score-detail">
                                            <!-- review-score-detail-list-->
                                            <div class="review-score-detail-list">
                                                <!-- rate item-->
                                                <div class="rate-item">
                                                    <div class="rate-item-title"><span>Quality</span></div>
                                                    <div class="rate-item-bg" data-percent="100%">
                                                        <div class="rate-item-line gradient-bg"></div>
                                                    </div>
                                                    <div class="rate-item-percent">5.0</div>
                                                </div>
                                                <!-- rate item end-->
                                                <!-- rate item-->
                                                <div class="rate-item">
                                                    <div class="rate-item-title"><span>Location</span></div>
                                                    <div class="rate-item-bg" data-percent="90%">
                                                        <div class="rate-item-line gradient-bg"></div>
                                                    </div>
                                                    <div class="rate-item-percent">4.0</div>
                                                </div>
                                                <!-- rate item end-->
                                                <!-- rate item-->
                                                <div class="rate-item">
                                                    <div class="rate-item-title"><span>Price</span></div>
                                                    <div class="rate-item-bg" data-percent="60%">
                                                        <div class="rate-item-line gradient-bg"></div>
                                                    </div>
                                                    <div class="rate-item-percent">3.0</div>
                                                </div>
                                                <!-- rate item end-->
                                                <!-- rate item-->
                                                <div class="rate-item">
                                                    <div class="rate-item-title"><span>Service</span></div>
                                                    <div class="rate-item-bg" data-percent="80%">
                                                        <div class="rate-item-line gradient-bg"></div>
                                                    </div>
                                                    <div class="rate-item-percent">4.0</div>
                                                </div>
                                                <!-- rate item end-->
                                            </div>
                                            <!-- review-score-detail-list end-->
                                        </div>
                                    </div>
                                    <!-- reviews-score-wrap end -->
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="reviews-comments-wrap">
                                            <!-- reviews-comments-item -->
                                            <div class="reviews-comments-item">
                                                <div class="review-comments-avatar">
                                                    <img src="{{ asset('public/images/avatar/4.jpg')}}" alt="">
                                                </div>
                                                <div class="reviews-comments-item-text fl-wrap">
                                                    <div class="reviews-comments-header fl-wrap">
                                                        <h4><a href="#">Liza Rose</a></h4>
                                                        <div class="review-score-user">
                                                            <span class="review-score-user_item">4.2</span>
                                                            <div class="listing-rating card-popup-rainingvis"
                                                                 data-starrating2="4"></div>
                                                        </div>
                                                    </div>
                                                    <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                                                        sem. Nulla consequat massa quis enim. Donec pede justo,
                                                        fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                                        rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
                                                        felis eu pede mollis pretium. "</p>
                                                    <div class="reviews-comments-item-footer fl-wrap">
                                                        <div class="reviews-comments-item-date"><span><i
                                                                        class="far fa-calendar-check"></i>12 April 2018</span>
                                                        </div>
                                                        <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>
                                                            Helpful Review <span>2</span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--reviews-comments-item end-->
                                            <!-- reviews-comments-item -->
                                            <div class="reviews-comments-item">
                                                <div class="review-comments-avatar">
                                                    <img src="{{ asset('public/images/avatar/6.jpg')}}" alt="">
                                                </div>
                                                <div class="reviews-comments-item-text fl-wrap">
                                                    <div class="reviews-comments-header fl-wrap">
                                                        <h4><a href="#">Adam Koncy</a></h4>
                                                        <div class="review-score-user">
                                                            <span class="review-score-user_item">5.0</span>
                                                            <div class="listing-rating card-popup-rainingvis"
                                                                 data-starrating2="5"></div>
                                                        </div>
                                                    </div>
                                                    <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                                        posuere convallis purus non cursus. Cras metus neque, gravida
                                                        sodales massa ut. "</p>
                                                    <div class="review-images ">
                                                        <a href="images/all/31.jpg" class="image-popup"><img
                                                                    src="{{ asset('public/images/all/31.jpg')}}" alt=""></a>
                                                        <a href="images/all/15.jpg" class="image-popup"><img
                                                                    src="{{ asset('public/images/all/15.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="reviews-comments-item-footer fl-wrap">
                                                        <div class="reviews-comments-item-date"><span><i
                                                                        class="far fa-calendar-check"></i>03 December 2017</span>
                                                        </div>
                                                        <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>
                                                            Helpful Review <span>4</span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--reviews-comments-item end-->
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap block_box">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Add Review</h3>
                                    </div>
                                    <!-- Add Review Box -->
                                    <div id="add-review" class="add-review-box">
                                        <!-- Review Comment -->
                                        <form id="add-comment" class="add-comment  custom-form" name="rangeCalc">
                                            <fieldset>
                                                <div class="review-score-form fl-wrap">
                                                    <div class="review-range-container">
                                                        <!-- review-range-item-->
                                                        <div class="review-range-item">
                                                            <div class="range-slider-title">Cleanliness</div>
                                                            <div class="range-slider-wrap ">
                                                                <input type="text" class="rate-range" data-min="0"
                                                                       data-max="5" name="rgcl" data-step="1" value="4">
                                                            </div>
                                                        </div>
                                                        <!-- review-range-item end -->
                                                        <!-- review-range-item-->
                                                        <div class="review-range-item">
                                                            <div class="range-slider-title">Comfort</div>
                                                            <div class="range-slider-wrap ">
                                                                <input type="text" class="rate-range" data-min="0"
                                                                       data-max="5" name="rgc2" data-step="1" value="1">
                                                            </div>
                                                        </div>
                                                        <!-- review-range-item end -->
                                                        <!-- review-range-item-->
                                                        <div class="review-range-item">
                                                            <div class="range-slider-title">Staf</div>
                                                            <div class="range-slider-wrap ">
                                                                <input type="text" class="rate-range" data-min="0"
                                                                       data-max="5" name="rgc3" data-step="1" value="5">
                                                            </div>
                                                        </div>
                                                        <!-- review-range-item end -->
                                                        <!-- review-range-item-->
                                                        <div class="review-range-item">
                                                            <div class="range-slider-title">Facilities</div>
                                                            <div class="range-slider-wrap">
                                                                <input type="text" class="rate-range" data-min="0"
                                                                       data-max="5" name="rgc4" data-step="1" value="3">
                                                            </div>
                                                        </div>
                                                        <!-- review-range-item end -->
                                                    </div>
                                                    <div class="review-total">
                                                        <span><input type="text" name="rg_total" data-form="AVG({rgcl})"
                                                                     value="0"></span>
                                                        <strong>Your Score</strong>
                                                    </div>
                                                </div>


                                                <div class="list-single-main-item_content fl-wrap">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label><i class="fal fa-user"></i></label>
                                                            <input type="text" placeholder="Your Name *" value=""
                                                                   name="ls4_name"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label><i class="fal fa-envelope"></i> </label>
                                                            <input type="text" placeholder="Email Address*" value=""
                                                                   name="ls4_email"/>
                                                        </div>
                                                    </div>
                                                    <textarea cols="40" rows="3" name="ls4_textarea"
                                                              placeholder="Your Review:"></textarea>
                                                    <div class="clearfix"></div>
                                                    <div class="photoUpload">
                                                        <span><i class="fal fa-image"></i> <strong>Add Photos</strong></span>
                                                        <input type="file" class="upload" multiple>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <button class="btn  color2-bg float-btn">Submit Review <i
                                                                class="fal fa-paper-plane"></i></button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <!-- Add Review Box / End -->
                                </div>
                                <!-- list-single-main-item end -->
                            </div>
                        </div>
                        <!-- list-single-main-wrapper-col end -->
                        <!-- list-single-sidebar -->
                        <div class="col-md-4">
                            <!--box-widget-item -->

                            <!--box-widget-item end -->
                            <!--box-widget-item -->

                            <!--box-widget-item end -->
                            <!--box-widget-item -->

                            <!--box-widget-item end -->
                            <!--box-widget-item -->

                            <!--box-widget-item end -->
                            <!--box-widget-item -->

                            <!--box-widget-item end -->
                            <!--box-widget-item -->

                            <!--box-widget-item end -->
                            <!--box-widget-item -->

                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">

                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->

                            <!--box-widget-item end -->
                        </div>
                        <!-- list-single-sidebar end -->
                    </div>
                </div>
            </section>
            <div class="limit-box fl-wrap"></div>
        </div>
        <!--content end-->
    </div>
    <!-- wrapper end-->
    <!--footer -->
    <footer class="main-footer fl-wrap">
        <!-- footer-header-->
        <div class="footer-header fl-wrap grad ient-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="subscribe-header">
                            <h3>Subscribe For a <span>Newsletter</span></h3>
                            <p>Whant to be notified about new locations ? Just sign up.</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="subscribe-widget">
                            <div class="subcribe-form">
                                <form id="subscribe">
                                    <input class="enteremail fl-wrap" name="email" id="subscribe-email"
                                           placeholder="Enter Your Email" spellcheck="false" type="text">
                                    <button type="submit" id="subscribe-button" class="subscribe-button"><i
                                                class="fal fa-envelope"></i></button>
                                    <label for="subscribe-email" class="subscribe-message"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-header end-->
        <!--footer-inner-->
        <div class="footer-inner   fl-wrap">
            <div class="container">
                <div class="row">
                    <!-- footer-widget-->
                    <div class="col-md-4">
                        <div class="footer-widget fl-wrap">
                            <div class="footer-logo"><a href="index-2.html"><img
                                            src="{{ asset('public/images/logo.png')}}" alt=""></a></div>
                            <div class="footer-contacts-widget fl-wrap">
                                <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis
                                    cursus.
                                    Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                <ul class="footer-contacts fl-wrap no-list-style">
                                    <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#"
                                                                                              target="_blank">yourmail@domain.com</a>
                                    </li>
                                    <li><span><i class="fal fa-map-marker"></i> Adress :</span><a href="#"
                                                                                                  target="_blank">USA
                                            27TH Brooklyn NY</a></li>
                                    <li><span><i class="fal fa-phone"></i> Phone :</span><a
                                                href="#">+7(111)123456789</a></li>
                                </ul>
                                <div class="footer-social">
                                    <span>Find  us on: </span>
                                    <ul class="no-list-style">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget end-->
                    <!-- footer-widget-->
                    <div class="col-md-4">
                        <div class="footer-widget fl-wrap">
                            <h3>Our Last News</h3>
                            <div class="footer-widget-posts fl-wrap">
                                <ul class="no-list-style">
                                    <li class="clearfix">
                                        <a href="#" class="widget-posts-img"><img
                                                    src="{{ asset('public/images/all/4.jpg')}}" class="respimg"
                                                    alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Vivamus dapibus rutrum</a>
                                            <span class="widget-posts-date"><i
                                                        class="fal fa-calendar"></i> 21 Mar 09.05 </span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="widget-posts-img"><img
                                                    src="{{ asset('public/images/all/2.jpg')}}" class="respimg"
                                                    alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title=""> In hac habitasse platea</a>
                                            <span class="widget-posts-date"><i
                                                        class="fal fa-calendar"></i> 7 Mar 18.21 </span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="widget-posts-img"><img
                                                    src="{{ asset('public/images/all/7.jpg')}}" class="respimg"
                                                    alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Tortor tempor in porta</a>
                                            <span class="widget-posts-date"><i
                                                        class="fal fa-calendar"></i> 7 Mar 16.42 </span>
                                        </div>
                                    </li>
                                </ul>
                                <a href="blog.html" class="footer-link">Read all <i
                                            class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- footer-widget end-->
                    <!-- footer-widget  -->
                    <div class="col-md-4">
                        <div class="footer-widget fl-wrap ">
                            <h3>Our Twitter</h3>
                            <div class="twitter-holder fl-wrap scrollbar-inner2" data-simplebar
                                 data-simplebar-auto-hide="false">
                                <div id="footer-twiit"></div>
                            </div>
                            <a href="#" class="footer-link twitter-link" target="_blank">Follow us <i
                                        class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- footer-widget end-->
                </div>
            </div>
            <!-- footer bg-->
            <div class="footer-bg" data-ran="4"></div>
            <div class="footer-wave">
                <svg viewbox="0 0 100 25">
                    <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"/>
                </svg>
            </div>
            <!-- footer bg  end-->
        </div>
        <!--footer-inner end -->
        <!--sub-footer-->
        <div class="sub-footer  fl-wrap">
            <div class="container">
                <div class="copyright"> &#169; Townhub 2019 . All rights reserved.</div>
                <div class="lang-wrap">
                    <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>En</strong></span><i
                                class="fa fa-caret-down arrlan"></i></div>
                    <ul class="lang-tooltip lang-action no-list-style">
                        <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                        <li><a href="#" data-lantext="Fr">Franais</a></li>
                        <li><a href="#" data-lantext="Es">Espaol</a></li>
                        <li><a href="#" data-lantext="De">Deutsch</a></li>
                    </ul>
                </div>
                <div class="subfooter-nav">
                    <ul class="no-list-style">
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--sub-footer end -->
    </footer>
    <!--footer end -->
    <!--map-modal -->
    <div class="map-modal-wrap">
        <div class="map-modal-wrap-overlay"></div>
        <div class="map-modal-item">
            <div class="map-modal-container fl-wrap">
                <div class="map-modal fl-wrap">
                    <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                </div>
                <h3><span>Location for : </span><a href="#">Listing Title</a></h3>
                <div class="map-modal-close"><i class="fal fa-times"></i></div>
            </div>
        </div>
    </div>
    <!--map-modal end -->
    <!--register form -->
    <div class="main-register-wrap modal">
        <div class="reg-overlay"></div>
        <div class="main-register-holder tabs-act">
            <div class="main-register fl-wrap  modal_main">
                <div class="main-register_title">Welcome to
                    <span><strong>Town</strong>Hub<strong>.</strong></span>
                </div>
                <div class="close-reg"><i class="fal fa-times"></i></div>
                <ul class="tabs-menu fl-wrap no-list-style">
                    <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                    <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                </ul>
                <!--tabs -->
                <div id="tab-1" class="tab-content first-tab">
                    <div class="custom-form">
                        <form method="post" name="registerform">
                            <label>Username or Email Address <span>*</span> </label>
                            <input name="register_email" type="text" onClick="this.select()" value="">
                            <label>Password <span>*</span> </label>
                            <input name="register_password" type="password" onClick="this.select()" value="">
                            <button type="submit" class="btn float-btn color2-bg"> Log In <i
                                        class="fas fa-caret-right"></i></button>
                            <div class="clearfix"></div>
                            <div class="filter-tags">
                                <input id="check-a3" type="checkbox" name="check">
                                <label for="check-a3">Remember me</label>
                            </div>
                        </form>
                        <div class="lost_password">
                            <a href="#">Lost Your Password?</a>
                        </div>
                    </div>
                </div>
                <!--tab end -->
                <!--tab -->
                <div class="tab">
                    <div id="tab-2" class="tab-content">
                        <div class="custom-form">
                            <form method="post" name="registerform" class="main-register-form"
                                  id="main-register-form2">
                                <label>Full Name <span>*</span> </label>
                                <input name="register_name" type="text" onClick="this.select()" value="">
                                <label>Email Address <span>*</span></label>
                                <input name="register_email" type="text" onClick="this.select()" value="">
                                <label>Password <span>*</span></label>
                                <input name="register_password" type="password" onClick="this.select()" value="">
                                <div class="filter-tags ft-list">
                                    <input id="check-a2" type="checkbox" name="register_check">
                                    <label for="check-a2">I agree to the <a href="#">Privacy Policy</a></label>
                                </div>
                                <div class="clearfix"></div>
                                <div class="filter-tags ft-list">
                                    <input id="check-a" type="checkbox" name="register_check">
                                    <label for="check-a">I agree to the <a href="#">Terms and
                                            Conditions</a></label>
                                </div>
                                <div class="clearfix"></div>
                                <button type="submit" class="btn float-btn color2-bg"> Register <i
                                            class="fas fa-caret-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--tab end -->
            </div>
            <!--tabs end -->
            <div class="log-separator fl-wrap"><span>or</span></div>
            <div class="soc-log fl-wrap">
                <p>For faster login or register use your social account.</p>
                <a href="#" class="facebook-log"> Facebook</a>
            </div>
            <div class="wave-bg">
                <div class='wave -one'></div>
                <div class='wave -two'></div>
            </div>
        </div>
    </div>
</div>
</div>
<!--register form end -->
<a class="to-top"><i class="fas fa-caret-up"></i></a>
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="{{ asset('public/js/jquery.min.js')}}"></script>
<script src="{{ asset('public/js/plugins.js')}}"></script>
<script src="{{ asset('public/js/scripts.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
<script src="{{ asset('public/js/map-single.js')}}"></script>
</body>

<!-- Mirrored from townhub.kwst.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 18:12:43 GMT -->
</html>
