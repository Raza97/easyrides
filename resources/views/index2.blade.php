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
                                                class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
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
                                                class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
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
    <!-- header end-->
    <!-- wrapper-->
    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!--Hero slider-->
            <div class="hero-slider_wrap fl-wrap">
                <div class="hero-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--hero-slider-item-->
                            <div class="swiper-slide">
                                <div class="hero-slider-item fl-wrap">
                                    <div class="bg-tabs-wrap">
                                        <div class="bg" data-bg="{{ asset('public/images/bg/37.jpg')}}"></div>
                                        <div class="overlay op7"></div>
                                    </div>
                                    <div class="container small-container">
                                        <div class="intro-item fl-wrap">
                                            <span class="section-separator"></span>
                                            <div class="bubbles">
                                                <h1>Explore Best Places In City</h1>
                                            </div>
                                            <h3>Find some of the best tips from around the city from our partners and
                                                friends.</h3>
                                        </div>
                                        <div class="hero-search  fl-wrap">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-keyboard"></i></label>
                                                        <input type="text" placeholder="What are you looking for?"
                                                               value=""/>
                                                    </div>
                                                    <div class="main-search-input-item location autocomplete-container">
                                                        <label><i class="fal fa-map-marker-check"></i></label>
                                                        <input type="text" placeholder="Location"
                                                               class="autocomplete-input" id="autocompleteid" value=""/>
                                                        <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                                    </div>
                                                    <div class="main-search-input-item">
                                                        <select data-placeholder="All Categories"
                                                                class="chosen-select no-search-select">
                                                            <option>All Categories</option>
                                                            <option>Shops</option>
                                                            <option>Hotels</option>
                                                            <option>Restaurants</option>
                                                            <option>Fitness</option>
                                                            <option>Events</option>
                                                        </select>
                                                    </div>
                                                    <button class="main-search-button color2-bg"
                                                            onclick="window.location.href='listing.html'">Search <i
                                                                class="far fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--hero-slider-item end-->
                            <!--hero-slider-item-->
                            <div class="swiper-slide">
                                <div class="hero-slider-item fl-wrap">
                                    <div class="bg-tabs-wrap">
                                        <div class="bg" data-bg="{{ asset('public/images/bg/7.jpg')}}"></div>
                                        <div class="overlay op7"></div>
                                    </div>
                                    <div class="container small-container">
                                        <div class="intro-item fl-wrap">
                                            <span class="section-separator"></span>
                                            <div class="bubbles">
                                                <h1>Find Best Restaurants and Cafe</h1>
                                            </div>
                                            <h3>Find some of the best tips from around the city from our partners and
                                                friends.</h3>
                                        </div>
                                        <div class="hero-search  fl-wrap">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-cheeseburger"></i></label>
                                                        <input type="text" placeholder="Restaurant Name" value=""/>
                                                    </div>
                                                    <div class="main-search-input-item clact date-container4">
                                                        <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                        <input type="text" placeholder="Date and Time"
                                                               name="datepicker-here-time" value=""/>
                                                        <span class="clear-singleinput"><i
                                                                    class="fal fa-times"></i></span>
                                                    </div>
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-user-friends"></i></label>
                                                        <input type="number" placeholder="Persons" value=""/>
                                                    </div>
                                                    <button class="main-search-button color2-bg"
                                                            onclick="window.location.href='listing.html'">Search <i
                                                                class="far fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--hero-slider-item end-->
                            <!--hero-slider-item-->
                            <div class="swiper-slide">
                                <div class="hero-slider-item fl-wrap">
                                    <div class="bg-tabs-wrap">
                                        <div class="bg" data-bg="{{ asset('public/images/bg/5.jpg')}}"></div>
                                        <div class="overlay op7"></div>
                                    </div>
                                    <div class="container small-container">
                                        <div class="intro-item fl-wrap">
                                            <span class="section-separator"></span>
                                            <div class="bubbles">
                                                <h1>Visit Events and Clubs</h1>
                                            </div>
                                            <h3>Find some of the best tips from around the city from our partners and
                                                friends.</h3>
                                        </div>
                                        <div class="hero-search  fl-wrap">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <div class="main-search-input-item">
                                                        <label><i class="fal fa-handshake-alt"></i></label>
                                                        <input type="text" placeholder="Event Name or Place" value=""/>
                                                    </div>
                                                    <div class="main-search-input-item">
                                                        <select data-placeholder="Loaction"
                                                                class="chosen-select on-radius no-search-select">
                                                            <option>All Cities</option>
                                                            <option>New York</option>
                                                            <option>London</option>
                                                            <option>Paris</option>
                                                            <option>Kiev</option>
                                                            <option>Moscow</option>
                                                            <option>Dubai</option>
                                                            <option>Rome</option>
                                                            <option>Beijing</option>
                                                        </select>
                                                    </div>
                                                    <div class="main-search-input-item clact date-container4">
                                                        <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                        <input type="text" placeholder="Event Date"
                                                               name="datepicker-here" value=""/>
                                                        <span class="clear-singleinput"><i
                                                                    class="fal fa-times"></i></span>
                                                    </div>
                                                    <button class="main-search-button color2-bg"
                                                            onclick="window.location.href='listing.html'">Search <i
                                                                class="far fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--hero-slider-item end-->
                        </div>
                    </div>
                </div>
                <div class="listing-carousel_pagination hero_pagination">
                    <div class="listing-carousel_pagination-wrap"></div>
                </div>
                <div class="slider-hero-button-prev shb color2-bg"><i class="fas fa-caret-left"></i></div>
                <div class="slider-hero-button-next shb color2-bg"><i class="fas fa-caret-right"></i></div>
            </div>
            <!--Hero slider end-->
            <!--section  -->
            <section class="slw-sec" id="sec1">
                <div class="section-title">
                    <h2>The Latest Listings</h2>
                    <div class="section-subtitle">Newest Listings</div>
                    <span class="section-separator"></span>
                    <p>Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet
                        rutrum elementum.</p>
                </div>
                <div class="listing-slider-wrap fl-wrap">
                    <div class="listing-slider fl-wrap">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!--  swiper-slide  -->
                                <div class="swiper-slide">
                                    <div class="listing-slider-item fl-wrap">
                                        <!-- listing-item  -->
                                        <div class="listing-item listing_carditem">
                                            <article class="geodir-category-listing fl-wrap">
                                                <div class="geodir-category-img">
                                                    <div class="geodir-js-favorite_btn"><i
                                                                class="fal fa-heart"></i><span>Save</span></div>
                                                    <a href="listing-single.html"
                                                       class="geodir-category-img-wrap fl-wrap">
                                                        <img src="{{ asset('public/images/all/48.jpg')}}" alt="">
                                                    </a>
                                                    <div class="geodir_status_date gsd_open"><i
                                                                class="fal fa-lock-open"></i>Open Now
                                                    </div>
                                                    <div class="geodir-category-opt">
                                                        <div class="geodir-category-opt_title">
                                                            <h4><a href="listing-single.html">The Goggi Restaurant</a>
                                                            </h4>
                                                            <div class="geodir-category-location"><a href="#"><i
                                                                            class="fas fa-map-marker-alt"></i> 34-42
                                                                    Montgomery St , NY, USA</a></div>
                                                        </div>
                                                        <div class="listing-rating-count-wrap">
                                                            <div class="review-score">4.1</div>
                                                            <div class="listing-rating card-popup-rainingvis"
                                                                 data-starrating2="4"></div>
                                                            <br>
                                                            <div class="reviews-count">26 reviews</div>
                                                        </div>
                                                        <div class="listing_carditem_footer fl-wrap">
                                                            <a class="listing-item-category-wrap" href="#">
                                                                <div class="listing-item-category red-bg"><i
                                                                            class="fal fa-cheeseburger"></i></div>
                                                                <span>Restaurants</span>
                                                            </a>
                                                            <div class="price-level geodir-category_price">
                                                                <span class="price-level-item"
                                                                      data-pricerating="2"></span>
                                                                <span class="price-name-tooltip">Pricey</span>
                                                            </div>
                                                            <div class="post-author"><a href="#"><img
                                                                            src="{{ asset('public/images/avatar/4.jpg')}}"
                                                                            alt=""><span>By , Alisa Noory</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- listing-item end -->
                                    </div>
                                </div>
                                <!--  swiper-slide end  -->
                                <!--  swiper-slide  -->
                                <div class="swiper-slide">
                                    <div class="listing-slider-item fl-wrap">
                                        <!-- listing-item  -->
                                        <div class="listing-item listing_carditem">
                                            <article class="geodir-category-listing fl-wrap">
                                                <div class="geodir-category-img">
                                                    <div class="geodir-js-favorite_btn"><i
                                                                class="fal fa-heart"></i><span>Save</span></div>
                                                    <a href="listing-single.html"
                                                       class="geodir-category-img-wrap fl-wrap">
                                                        <img src="{{ asset('public/images/all/25.jpg')}}" alt="">
                                                    </a>
                                                    <div class="geodir_status_date gsd_close"><i
                                                                class="fal fa-lock"></i>Close Now
                                                    </div>
                                                    <div class="geodir-category-opt">
                                                        <div class="geodir-category-opt_title">
                                                            <h4><a href="listing-single.html">Gym in the Center</a></h4>
                                                            <div class="geodir-category-location"><a href="#"><i
                                                                            class="fas fa-map-marker-alt"></i> 70 Bright
                                                                    St New York, USA</a></div>
                                                        </div>
                                                        <div class="listing-rating-count-wrap">
                                                            <div class="review-score">5.0</div>
                                                            <div class="listing-rating card-popup-rainingvis"
                                                                 data-starrating2="5"></div>
                                                            <br>
                                                            <div class="reviews-count">7 reviews</div>
                                                        </div>
                                                        <div class="listing_carditem_footer fl-wrap">
                                                            <a class="listing-item-category-wrap" href="#">
                                                                <div class="listing-item-category blue-bg"><i
                                                                            class="fal fa-dumbbell"></i></div>
                                                                <span>Fitness / Gym</span>
                                                            </a>
                                                            <div class="price-level geodir-category_price">
                                                                <span class="price-level-item"
                                                                      data-pricerating="3"></span>
                                                                <span class="price-name-tooltip">Moderate</span>
                                                            </div>
                                                            <div class="post-author"><a href="#"><img
                                                                            src="{{ asset('public/images/avatar/6.jpg')}}"
                                                                            alt=""><span>By , Mark Rose</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- listing-item end -->
                                    </div>
                                </div>
                                <!--  swiper-slide end  -->
                                <!--  swiper-slide  -->
                                <div class="swiper-slide">
                                    <div class="listing-slider-item fl-wrap">
                                        <!-- listing-item  -->
                                        <div class="listing-item listing_carditem">
                                            <article class="geodir-category-listing fl-wrap">
                                                <div class="geodir-category-img">
                                                    <div class="geodir-js-favorite_btn"><i
                                                                class="fal fa-heart"></i><span>Save</span></div>
                                                    <a href="listing-single.html"
                                                       class="geodir-category-img-wrap fl-wrap">
                                                        <img src="{{ asset('public/images/all/42.jpg')}}" alt="">
                                                    </a>
                                                    <div class="geodir_status_date gsd_open"><i
                                                                class="fal fa-lock-open"></i>Open Now
                                                    </div>
                                                    <div class="geodir-category-opt">
                                                        <div class="geodir-category-opt_title">
                                                            <h4><a href="listing-single.html">Moonlight Hotel</a></h4>
                                                            <div class="geodir-category-location"><a href="#"><i
                                                                            class="fas fa-map-marker-alt"></i> 34-42
                                                                    Montgomery St , NY, USA</a></div>
                                                        </div>
                                                        <div class="listing-rating-count-wrap">
                                                            <div class="review-score">4.2</div>
                                                            <div class="listing-rating card-popup-rainingvis"
                                                                 data-starrating2="4"></div>
                                                            <br>
                                                            <div class="reviews-count">3 reviews</div>
                                                        </div>
                                                        <div class="listing_carditem_footer fl-wrap">
                                                            <a class="listing-item-category-wrap" href="#">
                                                                <div class="listing-item-category  yellow-bg"><i
                                                                            class="fal fa-bed"></i></div>
                                                                <span>Hotels</span>
                                                            </a>
                                                            <div class="price-level geodir-category_price">
                                                                <span class="price-level-item"
                                                                      data-pricerating="4"></span>
                                                                <span class="price-name-tooltip">Ultra Hight</span>
                                                            </div>
                                                            <div class="post-author"><a href="#"><img
                                                                            src="{{ asset('public/images/avatar/5.jpg')}}"
                                                                            alt=""><span>By , Nasty Wood</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- listing-item end -->
                                    </div>
                                </div>
                                <!--  swiper-slide end  -->
                                <!--  swiper-slide  -->
                                <div class="swiper-slide">
                                    <div class="listing-slider-item fl-wrap">
                                        <!-- listing-item  -->
                                        <div class="listing-item listing_carditem">
                                            <article class="geodir-category-listing fl-wrap">
                                                <div class="geodir-category-img">
                                                    <div class="geodir-js-favorite_btn"><i
                                                                class="fal fa-heart"></i><span>Save</span></div>
                                                    <a href="listing-single.html"
                                                       class="geodir-category-img-wrap fl-wrap">
                                                        <img src="{{ asset('public/images/all/29.jpg')}}" alt="">
                                                    </a>
                                                    <div class="geodir_status_date gsd_open"><i
                                                                class="fal fa-lock-open"></i>Open Now
                                                    </div>
                                                    <div class="geodir-category-opt">
                                                        <div class="geodir-category-opt_title">
                                                            <h4><a href="listing-single.html">Shop in Aurora Center</a>
                                                            </h4>
                                                            <div class="geodir-category-location"><a href="#"><i
                                                                            class="fas fa-map-marker-alt"></i> 40
                                                                    Journal Square Plaza, NJ, USA</a></div>
                                                        </div>
                                                        <div class="listing-rating-count-wrap">
                                                            <div class="review-score">5.0</div>
                                                            <div class="listing-rating card-popup-rainingvis"
                                                                 data-starrating2="5"></div>
                                                            <br>
                                                            <div class="reviews-count">2 reviews</div>
                                                        </div>
                                                        <div class="listing_carditem_footer fl-wrap">
                                                            <a class="listing-item-category-wrap" href="#">
                                                                <div class="listing-item-category green-bg"><i
                                                                            class="fal fa-cart-arrow-down"></i></div>
                                                                <span>Shopping</span>
                                                            </a>
                                                            <div class="price-level geodir-category_price">
                                                                <span class="price-level-item"
                                                                      data-pricerating="4"></span>
                                                                <span class="price-name-tooltip">Ultra Hight</span>
                                                            </div>
                                                            <div class="post-author"><a href="#"><img
                                                                            src="{{ asset('public/images/avatar/3.jpg')}}"
                                                                            alt=""><span>By , Kliff Antony</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- listing-item end -->
                                    </div>
                                </div>
                                <!--  swiper-slide end  -->
                            </div>
                        </div>
                        <div class="listing-carousel-button listing-carousel-button-next2"><i
                                    class="fas fa-caret-right"></i></div>
                        <div class="listing-carousel-button listing-carousel-button-prev2"><i
                                    class="fas fa-caret-left"></i></div>
                    </div>
                    <div class="tc-pagination_wrap">
                        <div class="tc-pagination2"></div>
                    </div>
                </div>
            </section>
            <!--section end-->
            <!--section  -->
            <div class="sec-circle fl-wrap"></div>
            <!--section -->
            <section class="gray-bg hidden-section particles-wrapper">
                <div class="container">
                    <div class="section-title">
                        <h2>Explore Best Cities</h2>
                        <div class="section-subtitle">Catalog of Categories</div>
                        <span class="section-separator"></span>
                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus.</p>
                    </div>
                    <div class="listing-item-grid_container fl-wrap">
                        <div class="row">
                            <!--  listing-item-grid  -->
                            <div class="col-sm-4">
                                <div class="listing-item-grid">
                                    <div class="bg" data-bg="{{ asset('public/images/all/56.jpg')}}"></div>
                                    <div class="d-gr-sec"></div>
                                    <div class="listing-counter color2-bg"><span>16 </span> Locations</div>
                                    <div class="listing-item-grid_title">
                                        <h3><a href="listing.html">New York</a></h3>
                                        <p>Constant care and attention to the patients makes good record</p>
                                    </div>
                                </div>
                            </div>
                            <!--  listing-item-grid end  -->
                            <!--  listing-item-grid  -->
                            <div class="col-sm-4">
                                <div class="listing-item-grid">
                                    <div class="bg" data-bg="{{ asset('public/images/all/57.jpg')}}"></div>
                                    <div class="d-gr-sec"></div>
                                    <div class="listing-counter color2-bg"><span>22 </span> Locations</div>
                                    <div class="listing-item-grid_title">
                                        <h3><a href="listing.html">Paris</a></h3>
                                        <p>Constant care and attention to the patients makes good record</p>
                                    </div>
                                </div>
                            </div>
                            <!--  listing-item-grid end  -->
                            <!--  listing-item-grid  -->
                            <div class="col-sm-4">
                                <div class="listing-item-grid">
                                    <div class="bg" data-bg="{{ asset('public/images/all/58.jpg')}}"></div>
                                    <div class="d-gr-sec"></div>
                                    <div class="listing-counter color2-bg"><span>9 </span> Locations</div>
                                    <div class="listing-item-grid_title">
                                        <h3><a href="listing.html">Moscow</a></h3>
                                        <p>Constant care and attention to the patients makes good record</p>
                                    </div>
                                </div>
                            </div>
                            <!--  listing-item-grid end  -->
                            <!--  listing-item-grid  -->
                            <div class="col-sm-4">
                                <div class="listing-item-grid">
                                    <div class="bg" data-bg="{{ asset('public/images/all/60.jpg')}}"></div>
                                    <div class="d-gr-sec"></div>
                                    <div class="listing-counter color2-bg"><span>12 </span> Locations</div>
                                    <div class="listing-item-grid_title">
                                        <h3><a href="listing.html">Rome</a></h3>
                                        <p>Constant care and attention to the patients makes good record</p>
                                    </div>
                                </div>
                            </div>
                            <!--  listing-item-grid end  -->
                            <!--  listing-item-grid  -->
                            <div class="col-sm-8">
                                <div class="listing-item-grid">
                                    <div class="bg" data-bg="{{ asset('public/images/all/59.jpg')}}"></div>
                                    <div class="d-gr-sec"></div>
                                    <div class="listing-counter color2-bg"><span>33 </span> Locations</div>
                                    <div class="listing-item-grid_title">
                                        <h3><a href="listing.html">London</a></h3>
                                        <p>Constant care and attention to the patients makes good record</p>
                                    </div>
                                </div>
                            </div>
                            <!--  listing-item-grid end  -->
                        </div>
                    </div>
                    <a href="listing.html" class="btn dec_btn   color2-bg">View All Cities<i
                                class="fal fa-arrow-alt-right"></i></a>
                </div>

            </section>
            <!--  section  -->
            <!--section end-->
            <section class="parallax-section small-par" data-scrollax-parent="true">
                <div class="bg par-elem " data-bg="images/bg/22.jpg"
                     data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay  op7"></div>
                <div class="container">
                    <div class=" single-facts single-facts_2 fl-wrap">
                        <!-- inline-facts -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="1254">1254</div>
                                    </div>
                                </div>
                                <h6>New Visiters Every Week</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="12168">12168</div>
                                    </div>
                                </div>
                                <h6>Happy customers every year</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="2172">2172</div>
                                    </div>
                                </div>
                                <h6>Won Amazing Awards</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                        <!-- inline-facts  -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="732">732</div>
                                    </div>
                                </div>
                                <h6>New Listing Every Week</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->
                    </div>
                </div>
            </section>
            <!--section end-->
            <!--section  -->
            <section>
                <div class="container big-container">
                    <div class="section-title">
                        <h2><span>Most Popular Palces</span></h2>
                        <div class="section-subtitle">Best Listings</div>
                        <span class="section-separator"></span>
                        <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut,
                            convallis eros sollicitudin turpis.</p>
                    </div>
                    <div class="listing-filters gallery-filters fl-wrap">
                        <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All Categories</a>
                        <a href="#" class="gallery-filter" data-filter=".restaurant">Restaurants </a>
                        <a href="#" class="gallery-filter" data-filter=".hotels">Hotels</a>
                        <a href="#" class="gallery-filter" data-filter=".events">Events</a>
                        <a href="#" class="gallery-filter" data-filter=".fitness">Fitness</a>
                    </div>
                    <div class="grid-item-holder gallery-items fl-wrap">
                        <!--  gallery-item-->
                        <div class="gallery-item restaurant events">
                            <!-- listing-item  -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <div class="geodir-js-favorite_btn"><i
                                                    class="fal fa-heart"></i><span>Save</span></div>
                                        <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('public/images/all/1.jpg')}}" alt="">
                                        </a>
                                        <div class="listing-avatar"><a href="author-single.html"><img
                                                        src="{{ asset('public/images/avatar/1.jpg')}}" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                        </div>
                                        <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open
                                            Now
                                        </div>
                                        <div class="geodir-category-opt">
                                            <div class="listing-rating-count-wrap">
                                                <div class="review-score">4.8</div>
                                                <div class="listing-rating card-popup-rainingvis"
                                                     data-starrating2="5"></div>
                                                <br>
                                                <div class="reviews-count">12 reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                        <div class="geodir-category-content-title fl-wrap">
                                            <div class="geodir-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="listing-single.html">Luxary
                                                        Resaturant</a><span class="verified-badge"><i
                                                                class="fal fa-check"></i></span></h3>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                class="fas fa-map-marker-alt"></i> 27th Brooklyn New
                                                        York, USA</a></div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-text fl-wrap">
                                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer
                                                gravida orci a justo sodales.</p>
                                            <div class="facilities-list fl-wrap">
                                                <div class="facilities-list-title">Facilities :</div>
                                                <ul class="no-list-style">
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Non-smoking Rooms"><i
                                                                class="fal fa-smoking-ban"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="geodir-category-footer fl-wrap">
                                            <a class="listing-item-category-wrap">
                                                <div class="listing-item-category red-bg"><i
                                                            class="fal fa-cheeseburger"></i></div>
                                                <span>Restaurants</span>
                                            </a>
                                            <div class="geodir-opt-list">
                                                <ul class="no-list-style">
                                                    <li><a href="#" class="show_gcc"><i
                                                                    class="fal fa-envelope"></i><span
                                                                    class="geodir-opt-tooltip">Contact Info</span></a>
                                                    </li>
                                                    <li><a href="#1" class="single-map-item"
                                                           data-newlatitude="40.72956781"
                                                           data-newlongitude="-73.99726866"><i
                                                                    class="fal fa-map-marker-alt"></i><span
                                                                    class="geodir-opt-tooltip">On the map <strong>1</strong></span>
                                                        </a></li>
                                                    <li>
                                                        <div class="dynamic-gal gdop-list-link"
                                                             data-dynamicPath="[{'src': '{{ asset('public/images/all/1.jpg')}}'},{'src': '{{ asset('public/images/all/24.jpg')}}'}, {'src': '{{ asset('public/images/all/12.jpg')}}'}]">
                                                            <i class="fal fa-search-plus"></i><span
                                                                    class="geodir-opt-tooltip">Gallery</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price-level geodir-category_price">
                                                <span class="price-level-item" data-pricerating="3"></span>
                                                <span class="price-name-tooltip">Pricey</span>
                                            </div>
                                            <div class="geodir-category_contacts">
                                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a>
                                                    </li>
                                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a
                                                                href="#">yourmail@domain.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                        <!-- gallery-item  end-->
                        <!--  gallery-item-->
                        <div class="gallery-item events">
                            <!-- listing-item  -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <div class="geodir-js-favorite_btn"><i
                                                    class="fal fa-heart"></i><span>Save</span></div>
                                        <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('public/images/all/9.jpg')}}" alt="">
                                        </a>
                                        <div class="listing-avatar"><a href="author-single.html"><img
                                                        src="{{ asset('public/images/avatar/2.jpg')}}" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Mark Rose</strong></span>
                                        </div>
                                        <div class="geodir_status_date color-bg"><i class="fal fa-clock"></i>27 may 2019
                                        </div>
                                        <div class="geodir-category-opt">
                                            <div class="listing-rating-count-wrap">
                                                <div class="review-score">4.2</div>
                                                <div class="listing-rating card-popup-rainingvis"
                                                     data-starrating2="4"></div>
                                                <br>
                                                <div class="reviews-count">6 reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                        <div class="geodir-category-content-title fl-wrap ">
                                            <div class="geodir-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="listing-single.html">Rocko Band in
                                                        Marquee Club</a></h3>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-text fl-wrap">
                                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer
                                                gravida orci a justo sodales.</p>
                                            <div class="facilities-list fl-wrap">
                                                <div class="facilities-list-title">Facilities :</div>
                                                <ul class="no-list-style">
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Non-smoking Rooms"><i
                                                                class="fal fa-smoking-ban"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="geodir-category-footer fl-wrap">
                                            <a class="listing-item-category-wrap">
                                                <div class="listing-item-category purp-bg"><i
                                                            class="fal fa-cocktail"></i></div>
                                                <span>Events</span>
                                            </a>
                                            <div class="geodir-opt-list">
                                                <ul class="no-list-style">
                                                    <li><a href="#" class="show_gcc"><i
                                                                    class="fal fa-envelope"></i><span
                                                                    class="geodir-opt-tooltip">Contact Info</span></a>
                                                    </li>
                                                    <li><a href="#" class="single-map-item"
                                                           data-newlatitude="40.88496706"
                                                           data-newlongitude="-73.88191222"><i
                                                                    class="fal fa-map-marker-alt"></i><span
                                                                    class="geodir-opt-tooltip">On the map <strong>2</strong></span></a>
                                                    </li>
                                                    <li>
                                                        <div class="dynamic-gal gdop-list-link"
                                                             data-dynamicPath="[{'src': 'images/all/9.jpg'},{'src': 'images/all/32.jpg'}, {'src': 'images/all/23.jpg'}]">
                                                            <i class="fal fa-search-plus"></i><span
                                                                    class="geodir-opt-tooltip">Gallery</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price-level geodir-category_price">
                                                <span class="price-level-item" data-pricerating="4"></span>
                                                <span class="price-name-tooltip">Ultra High</span>
                                            </div>
                                            <div class="geodir-category_contacts">
                                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a>
                                                    </li>
                                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a
                                                                href="#">yourmail@domain.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                        <!-- gallery-item  end-->
                        <!-- gallery-item  -->
                        <div class="gallery-item fitness">
                            <!-- listing-item  -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <div class="geodir-js-favorite_btn"><i
                                                    class="fal fa-heart"></i><span>Save</span></div>
                                        <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('public/images/all/31.jpg')}}" alt="">
                                        </a>
                                        <div class="listing-avatar"><a href="author-single.html"><img
                                                        src="{{ asset('public/images/avatar/4.jpg')}}" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                        </div>
                                        <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Close Now
                                        </div>
                                        <div class="geodir-category-opt">
                                            <div class="listing-rating-count-wrap">
                                                <div class="review-score">3.8</div>
                                                <div class="listing-rating card-popup-rainingvis"
                                                     data-starrating2="3"></div>
                                                <br>
                                                <div class="reviews-count">4 reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                        <div class="geodir-category-content-title fl-wrap">
                                            <div class="geodir-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="listing-single.html">Premium Fitness
                                                        Gym</a><span class="verified-badge"><i class="fal fa-check"></i></span>
                                                </h3>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                class="fas fa-map-marker-alt"></i> W 85th St, New York,
                                                        USA</a></div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-text fl-wrap">
                                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer
                                                gravida orci a justo sodales.</p>
                                            <div class="facilities-list fl-wrap">
                                                <div class="facilities-list-title">Facilities :</div>
                                                <ul class="no-list-style">
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Non-smoking Rooms"><i
                                                                class="fal fa-smoking-ban"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="geodir-category-footer fl-wrap">
                                            <a class="listing-item-category-wrap">
                                                <div class="listing-item-category blue-bg"><i
                                                            class="fal fa-dumbbell"></i></div>
                                                <span>Fitness / Gym</span>
                                            </a>
                                            <div class="geodir-opt-list">
                                                <ul class="no-list-style">
                                                    <li><a href="#" class="show_gcc"><i
                                                                    class="fal fa-envelope"></i><span
                                                                    class="geodir-opt-tooltip">Contact Info</span></a>
                                                    </li>
                                                    <li><a href="#" class="single-map-item"
                                                           data-newlatitude="40.94982541"
                                                           data-newlongitude="-73.84357452"><i
                                                                    class="fal fa-map-marker-alt"></i><span
                                                                    class="geodir-opt-tooltip">On the map <strong>3</strong></span>
                                                        </a></li>
                                                    <li>
                                                        <div class="dynamic-gal gdop-list-link"
                                                             data-dynamicPath="[{'src': 'images/all/31.jpg'},{'src': 'images/all/10.jpg'}, {'src': 'images/all/15.jpg'}]">
                                                            <i class="fal fa-search-plus"></i><span
                                                                    class="geodir-opt-tooltip">Gallery</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price-level geodir-category_price">
                                                <span class="price-level-item" data-pricerating="2"></span>
                                                <span class="price-name-tooltip">Moderate</span>
                                            </div>
                                            <div class="geodir-category_contacts">
                                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a>
                                                    </li>
                                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a
                                                                href="#">yourmail@domain.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                        <!-- gallery-item  end-->
                        <!-- gallery-item  -->
                        <div class="gallery-item hotels">
                            <!-- listing-item  -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <div class="geodir-js-favorite_btn"><i
                                                    class="fal fa-heart"></i><span>Save</span></div>
                                        <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('public/images/all/16.jpg')}}" alt="">
                                        </a>
                                        <div class="listing-avatar"><a href="author-single.html"><img
                                                        src="{{ asset('public/images/avatar/3.jpg')}}" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Kliff Antony</strong></span>
                                        </div>
                                        <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open
                                            Now
                                        </div>
                                        <div class="geodir-category-opt">
                                            <div class="listing-rating-count-wrap">
                                                <div class="review-score">5.0</div>
                                                <div class="listing-rating card-popup-rainingvis"
                                                     data-starrating2="5"></div>
                                                <br>
                                                <div class="reviews-count">4 reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                        <div class="geodir-category-content-title fl-wrap">
                                            <div class="geodir-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="listing-single.html">MontePlaza
                                                        Hotel</a><span class="verified-badge"><i
                                                                class="fal fa-check"></i></span></h3>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                class="fas fa-map-marker-alt"></i> 70 Bright St New
                                                        York, USA</a></div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-text fl-wrap">
                                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer
                                                gravida orci a justo sodales.</p>
                                            <div class="facilities-list fl-wrap">
                                                <div class="facilities-list-title">Facilities :</div>
                                                <ul class="no-list-style">
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Non-smoking Rooms"><i
                                                                class="fal fa-smoking-ban"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="geodir-category-footer fl-wrap">
                                            <a class="listing-item-category-wrap">
                                                <div class="listing-item-category  yellow-bg"><i class="fal fa-bed"></i>
                                                </div>
                                                <span>Hotels</span>
                                            </a>
                                            <div class="geodir-opt-list">
                                                <ul class="no-list-style">
                                                    <li><a href="#" class="show_gcc"><i
                                                                    class="fal fa-envelope"></i><span
                                                                    class="geodir-opt-tooltip">Contact Info</span></a>
                                                    </li>
                                                    <li><a href="#" class="single-map-item"
                                                           data-newlatitude="40.72228267"
                                                           data-newlongitude="-73.99246214"><i
                                                                    class="fal fa-map-marker-alt"></i><span
                                                                    class="geodir-opt-tooltip">On the map <strong>4</strong></span></a>
                                                    </li>
                                                    <li>
                                                        <div class="dynamic-gal gdop-list-link"
                                                             data-dynamicPath="[{'src': 'images/all/16.jpg'},{'src': 'images/all/27.jpg'}, {'src': 'images/all/20.jpg'}]">
                                                            <i class="fal fa-search-plus"></i><span
                                                                    class="geodir-opt-tooltip">Gallery</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price-level geodir-category_price">
                                                <span class="price-level-item" data-pricerating="4"></span>
                                                <span class="price-name-tooltip">Ultra High</span>
                                            </div>
                                            <div class="geodir-category_contacts">
                                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a>
                                                    </li>
                                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a
                                                                href="#">yourmail@domain.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                        <!-- gallery-item  end-->
                        <!-- gallery-item  -->
                        <div class="gallery-item hotels">
                            <!-- listing-item  -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <div class="geodir-js-favorite_btn"><i
                                                    class="fal fa-heart"></i><span>Save</span></div>
                                        <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('public/images/all/28.jpg')}}" alt="">
                                        </a>
                                        <div class="listing-avatar"><a href="author-single.html"><img
                                                        src="{{ asset('public/images/avatar/5.jpg')}}" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                                        </div>
                                        <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open
                                            Now
                                        </div>
                                        <div class="geodir-category-opt">
                                            <div class="listing-rating-count-wrap">
                                                <div class="review-score">4.7</div>
                                                <div class="listing-rating card-popup-rainingvis"
                                                     data-starrating2="5"></div>
                                                <br>
                                                <div class="reviews-count">9 reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                        <div class="geodir-category-content-title fl-wrap">
                                            <div class="geodir-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="listing-single.html">Handmade
                                                        Shop</a></h3>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                class="fas fa-map-marker-alt"></i> 34-42 Montgomery St ,
                                                        NY, USA</a></div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-text fl-wrap">
                                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer
                                                gravida orci a justo sodales.</p>
                                            <div class="facilities-list fl-wrap">
                                                <div class="facilities-list-title">Facilities :</div>
                                                <ul class="no-list-style">
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Non-smoking Rooms"><i
                                                                class="fal fa-smoking-ban"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="geodir-category-footer fl-wrap">
                                            <a class="listing-item-category-wrap">
                                                <div class="listing-item-category green-bg"><i
                                                            class="fal fa-cart-arrow-down"></i></div>
                                                <span>Shopping</span>
                                            </a>
                                            <div class="geodir-opt-list">
                                                <ul class="no-list-style">
                                                    <li><a href="#" class="show_gcc"><i
                                                                    class="fal fa-envelope"></i><span
                                                                    class="geodir-opt-tooltip">Contact Info</span></a>
                                                    </li>
                                                    <li><a href="#" class="single-map-item"
                                                           data-newlatitude="40.88496706"
                                                           data-newlongitude="-73.88191222"><i
                                                                    class="fal fa-map-marker-alt"></i><span
                                                                    class="geodir-opt-tooltip">On the map <strong>5</strong></span>
                                                        </a></li>
                                                    <li>
                                                        <div class="dynamic-gal gdop-list-link"
                                                             data-dynamicPath="[{'src': '{{ asset('public/images/all/28.jpg')}}'},{'src': '{{ asset('public/images/all/29.jpg')}}'}, {'src': '{{ asset('public/images/all/30.jpg')}}'}]">
                                                            <i class="fal fa-search-plus"></i><span
                                                                    class="geodir-opt-tooltip">Gallery</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price-level geodir-category_price">
                                                <span class="price-level-item" data-pricerating="3"></span>
                                                <span class="price-name-tooltip">Pricey</span>
                                            </div>
                                            <div class="geodir-category_contacts">
                                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a>
                                                    </li>
                                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a
                                                                href="#">yourmail@domain.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                        <!-- gallery-item  end-->
                        <!-- gallery-item  -->
                        <div class="gallery-item  restaurant hotels">
                            <!-- listing-item  -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <div class="geodir-js-favorite_btn"><i
                                                    class="fal fa-heart"></i><span>Save</span></div>
                                        <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('public/images/all/18.jpg')}}" alt="">
                                        </a>
                                        <div class="listing-avatar"><a href="author-single.html"><img
                                                        src="{{ asset('public/images/avatar/1.jpg')}}" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                        </div>
                                        <div class="geodir_status_date gsd_close"><i class="fal fa-lock-open"></i>Close
                                            Now
                                        </div>
                                        <div class="geodir-category-opt">
                                            <div class="listing-rating-count-wrap">
                                                <div class="review-score">4.1</div>
                                                <div class="listing-rating card-popup-rainingvis"
                                                     data-starrating2="4"></div>
                                                <br>
                                                <div class="reviews-count">26 reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                        <div class="geodir-category-content-title fl-wrap">
                                            <div class="geodir-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="listing-single.html">Iconic Cafe in
                                                        Manhattan</a><span class="verified-badge"><i
                                                                class="fal fa-check"></i></span></h3>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                class="fas fa-map-marker-alt"></i> 40 Journal Square
                                                        Plaza, NJ, USA</a></div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-text fl-wrap">
                                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer
                                                gravida orci a justo sodales.</p>
                                            <div class="facilities-list fl-wrap">
                                                <div class="facilities-list-title">Facilities :</div>
                                                <ul class="no-list-style">
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Non-smoking Rooms"><i
                                                                class="fal fa-smoking-ban"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="geodir-category-footer fl-wrap">
                                            <a class="listing-item-category-wrap">
                                                <div class="listing-item-category red-bg"><i
                                                            class="fal fa-cheeseburger"></i></div>
                                                <span>Restaurants</span>
                                            </a>
                                            <div class="geodir-opt-list">
                                                <ul class="no-list-style">
                                                    <li><a href="#" class="show_gcc"><i
                                                                    class="fal fa-envelope"></i><span
                                                                    class="geodir-opt-tooltip">Contact Info</span></a>
                                                    </li>
                                                    <li><a href="#" class="single-map-item"
                                                           data-newlatitude="40.76221766"
                                                           data-newlongitude="-73.96511769"><i
                                                                    class="fal fa-map-marker-alt"></i><span
                                                                    class="geodir-opt-tooltip">On the map <strong>6</strong></span>
                                                        </a></li>
                                                    <li>
                                                        <div class="dynamic-gal gdop-list-link"
                                                             data-dynamicPath="[{'src': '{{ asset('public/images/all/18.jpg')}}'},{'src': '{{ asset('public/images/all/21.jpg')}}'}, {'src': '{{ asset('public/images/all/22.jpg')}}'}]">
                                                            <i class="fal fa-search-plus"></i><span
                                                                    class="geodir-opt-tooltip">Gallery</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price-level geodir-category_price">
                                                <span class="price-level-item" data-pricerating="2"></span>
                                                <span class="price-name-tooltip">Moderate</span>
                                            </div>
                                            <div class="geodir-category_contacts">
                                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a>
                                                    </li>
                                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a
                                                                href="#">yourmail@domain.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                        <!-- gallery-item  end-->
                        <!-- gallery-item  -->
                        <div class="gallery-item fitness">
                            <!-- listing-item  -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <div class="geodir-js-favorite_btn"><i
                                                    class="fal fa-heart"></i><span>Save</span></div>
                                        <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('public/images/all/52.jpg')}}" alt="">
                                        </a>
                                        <div class="listing-avatar"><a href="author-single.html"><img
                                                        src="{{ asset('public/images/avatar/6.jpg')}}" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                        </div>
                                        <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Close Now
                                        </div>
                                        <div class="geodir-category-opt">
                                            <div class="listing-rating-count-wrap">
                                                <div class="review-score">4.1</div>
                                                <div class="listing-rating card-popup-rainingvis"
                                                     data-starrating2="4"></div>
                                                <br>
                                                <div class="reviews-count">56 reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                        <div class="geodir-category-content-title fl-wrap">
                                            <div class="geodir-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="listing-single.html">BodyStrong
                                                        Gym</a><span class="verified-badge"><i class="fal fa-check"></i></span>
                                                </h3>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                class="fas fa-map-marker-alt"></i> W 85th St, New York,
                                                        USA</a></div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-text fl-wrap">
                                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer
                                                gravida orci a justo sodales.</p>
                                            <div class="facilities-list fl-wrap">
                                                <div class="facilities-list-title">Facilities :</div>
                                                <ul class="no-list-style">
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Non-smoking Rooms"><i
                                                                class="fal fa-smoking-ban"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="geodir-category-footer fl-wrap">
                                            <a class="listing-item-category-wrap">
                                                <div class="listing-item-category blue-bg"><i
                                                            class="fal fa-dumbbell"></i></div>
                                                <span>Fitness / Gym</span>
                                            </a>
                                            <div class="geodir-opt-list">
                                                <ul class="no-list-style">
                                                    <li><a href="#" class="show_gcc"><i
                                                                    class="fal fa-envelope"></i><span
                                                                    class="geodir-opt-tooltip">Contact Info</span></a>
                                                    </li>
                                                    <li><a href="#" class="single-map-item"
                                                           data-newlatitude="40.94982541"
                                                           data-newlongitude="-73.84357452"><i
                                                                    class="fal fa-map-marker-alt"></i><span
                                                                    class="geodir-opt-tooltip">On the map <strong>7</strong></span>
                                                        </a></li>
                                                    <li>
                                                        <div class="dynamic-gal gdop-list-link"
                                                             data-dynamicPath="[{'src': 'images/all/10.jpg'},{'src': 'images/all/14.jpg'}]">
                                                            <i class="fal fa-search-plus"></i><span
                                                                    class="geodir-opt-tooltip">Gallery</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price-level geodir-category_price">
                                                <span class="price-level-item" data-pricerating="2"></span>
                                                <span class="price-name-tooltip">Moderate</span>
                                            </div>
                                            <div class="geodir-category_contacts">
                                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a>
                                                    </li>
                                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a
                                                                href="#">yourmail@domain.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                        <!-- gallery-item  end-->
                        <!-- gallery-item  -->
                        <div class="gallery-item hotels">
                            <!-- listing-item  -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <div class="geodir-js-favorite_btn"><i
                                                    class="fal fa-heart"></i><span>Save</span></div>
                                        <a href="listing-single.sshtml" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('public/images/all/62.jpg')}}" alt="">
                                        </a>
                                        <div class="listing-avatar"><a href="author-single.html"><img
                                                        src="{{ asset('public/images/avatar/4.jpg')}}" alt=""></a>
                                            <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                                        </div>
                                        <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open
                                            Now
                                        </div>
                                        <div class="geodir-category-opt">
                                            <div class="listing-rating-count-wrap">
                                                <div class="review-score">4.7</div>
                                                <div class="listing-rating card-popup-rainingvis"
                                                     data-starrating2="5"></div>
                                                <br>
                                                <div class="reviews-count">9 reviews</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                        <div class="geodir-category-content-title fl-wrap">
                                            <div class="geodir-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="listing-single.html">Family Store</a>
                                                </h3>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                class="fas fa-map-marker-alt"></i> 34-42 Montgomery St ,
                                                        NY, USA</a></div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-text fl-wrap">
                                            <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer
                                                gravida orci a justo sodales.</p>
                                            <div class="facilities-list fl-wrap">
                                                <div class="facilities-list-title">Facilities :</div>
                                                <ul class="no-list-style">
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Non-smoking Rooms"><i
                                                                class="fal fa-smoking-ban"></i></li>
                                                    <li class="tolt" data-microtip-position="top"
                                                        data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="geodir-category-footer fl-wrap">
                                            <a class="listing-item-category-wrap">
                                                <div class="listing-item-category green-bg"><i
                                                            class="fal fa-cart-arrow-down"></i></div>
                                                <span>Shopping</span>
                                            </a>
                                            <div class="geodir-opt-list">
                                                <ul class="no-list-style">
                                                    <li><a href="#" class="show_gcc"><i
                                                                    class="fal fa-envelope"></i><span
                                                                    class="geodir-opt-tooltip">Contact Info</span></a>
                                                    </li>
                                                    <li><a href="#" class="single-map-item"
                                                           data-newlatitude="40.88496706"
                                                           data-newlongitude="-73.88191222"><i
                                                                    class="fal fa-map-marker-alt"></i><span
                                                                    class="geodir-opt-tooltip">On the map <strong>5</strong></span>
                                                        </a></li>
                                                    <li>
                                                        <div class="dynamic-gal gdop-list-link"
                                                             data-dynamicPath="[{'src': '{{ asset('public/images/all/28.jpg')}}'},{'src': '{{ asset('public/images/all/29.jpg')}}'}, {'src': '{{ asset('public/images/all/30.jpg')}}'}]">
                                                            <i class="fal fa-search-plus"></i><span
                                                                    class="geodir-opt-tooltip">Gallery</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price-level geodir-category_price">
                                                <span class="price-level-item" data-pricerating="3"></span>
                                                <span class="price-name-tooltip">Pricey</span>
                                            </div>
                                            <div class="geodir-category_contacts">
                                                <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                <ul class="no-list-style">
                                                    <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a>
                                                    </li>
                                                    <li><span><i class="fal fa-envelope"></i> Write : </span><a
                                                                href="#">yourmail@domain.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                        <!-- gallery-item  end-->
                    </div>
                    <a href="listing.html" class="btn  dec_btn  color2-bg">Check Out All Listings<i
                                class="fal fa-arrow-alt-right"></i></a>
                </div>
            </section>
            <!--section end-->
            <!--section  -->
            <section class="parallax-section" data-scrollax-parent="true">
                <div class="bg par-elem " data-bg="{{ asset('public/images/bg/11.jpg')}}"
                     data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay op7"></div>
                <!--container-->
                <div class="container">
                    <div class="video_section-title fl-wrap">
                        <h4>Aliquam erat volutpat interdum</h4>
                        <h2>Get ready to start your exciting journey. <br> Our agency will lead you through the amazing
                            digital world</h2>
                    </div>
                    <a href="https://vimeo.com/70851162" class="promo-link big_prom   image-popup"><i
                                class="fal fa-play"></i><span>Promo Video</span></a>
                </div>
            </section>
            <!--section end-->
            <!--section  -->
            <section data-scrollax-parent="true">
                <div class="container">
                    <div class="section-title">
                        <h2>How it works</h2>
                        <div class="section-subtitle">Discover &amp; Connect</div>
                        <span class="section-separator"></span>
                        <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit
                            risus at metus.</p>
                    </div>
                    <div class="process-wrap fl-wrap">
                        <ul class="no-list-style">
                            <li>
                                <div class="process-item">
                                    <span class="process-count">01 </span>
                                    <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                                    <h4> Find Interesting Place</h4>
                                    <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus
                                        tellus ut, convallis eros sollicitudin turpis.</p>
                                </div>
                                <span class="pr-dec"></span>
                            </li>
                            <li>
                                <div class="process-item">
                                    <span class="process-count">02</span>
                                    <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                                    <h4> Contact a Few Owners</h4>
                                    <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus
                                        sollicitudin feugiat pharetra consectetur.</p>
                                </div>
                                <span class="pr-dec"></span>
                            </li>
                            <li>
                                <div class="process-item">
                                    <span class="process-count">03</span>
                                    <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                                    <h4> Make a Listing</h4>
                                    <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id
                                        vestibulum metus nullam viverra porta.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="process-end"><i class="fal fa-check"></i></div>
                    </div>
                </div>
            </section>
            <!--section end-->
            <!--section  -->
            <section class="gradient-bg hidden-section" data-scrollax-parent="true">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="colomn-text  pad-top-column-text fl-wrap">
                                <div class="colomn-text-title">
                                    <h3>Our App Available Now</h3>
                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis
                                        cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit
                                        amet, conse ctetuer adipiscing elit.</p>
                                    <a href="#" class=" down-btn color3-bg"><i class="fab fa-apple"></i> Apple Store
                                    </a>
                                    <a href="#" class=" down-btn color3-bg"><i class="fab fa-android"></i> Google Play
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="collage-image">
                                <img src="{{ asset('public/images/api.png')}}" class="main-collage-image" alt="">
                                <div class="images-collage-title color2-bg icdec"><img
                                            src="{{ asset('public/images/logo.png')}}" alt="">
                                </div>
                                <div class="images-collage_icon green-bg" style="right:-20px; top:120px;"><i
                                            class="fal fa-thumbs-up"></i></div>
                                <div class="collage-image-min cim_1"><img src="{{ asset('public/images/api/1.jpg')}}"
                                                                          alt=""></div>
                                <div class="collage-image-min cim_2"><img src="{{ asset('public/images/api/2.jpg')}}"
                                                                          alt=""></div>
                                <div class="collage-image-btn green-bg">Booking now</div>
                                <div class="collage-image-input">Search <i class="fa fa-search"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
                <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
                <div class="circle-wrap" style="left:270px;top:120px;"
                     data-scrollax="properties: { translateY: '-200px' }">
                    <div class="circle_bg-bal circle_bg-bal_small"></div>
                </div>
                <div class="circle-wrap" style="right:420px;bottom:-70px;"
                     data-scrollax="properties: { translateY: '150px' }">
                    <div class="circle_bg-bal circle_bg-bal_big"></div>
                </div>
                <div class="circle-wrap" style="left:420px;top:-70px;"
                     data-scrollax="properties: { translateY: '100px' }">
                    <div class="circle_bg-bal circle_bg-bal_big"></div>
                </div>
                <div class="circle-wrap" style="left:40%;bottom:-70px;">
                    <div class="circle_bg-bal circle_bg-bal_middle"></div>
                </div>
                <div class="circle-wrap" style="right:40%;top:-10px;">
                    <div class="circle_bg-bal circle_bg-bal_versmall"
                         data-scrollax="properties: { translateY: '-350px' }"></div>
                </div>
                <div class="circle-wrap" style="right:55%;top:90px;">
                    <div class="circle_bg-bal circle_bg-bal_versmall"
                         data-scrollax="properties: { translateY: '-350px' }"></div>
                </div>
            </section>
            <!--section end-->
            <!--section  -->
            <section>
                <div class="container">
                    <div class="section-title">
                        <h2> Testimonilas</h2>
                        <div class="section-subtitle">Clients Reviews</div>
                        <span class="section-separator"></span>
                        <p>Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="testimonilas-carousel-wrap fl-wrap">
                    <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i>
                    </div>
                    <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i>
                    </div>
                    <div class="testimonilas-carousel">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!--testi-item-->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <div class="testi-avatar"><img src="{{ asset('public/images/avatar/2.jpg')}}"
                                                                       alt=""></div>
                                        <div class="testimonilas-text fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis"
                                                 data-starrating2="5"></div>
                                            <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac
                                                nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis.
                                                Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                            <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                            <div class="testimonilas-avatar fl-wrap">
                                                <h3>Andy Dimasky</h3>
                                                <h4>Restaurant Owner</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--testi-item end-->
                                <!--testi-item-->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <div class="testi-avatar"><img src="{{ asset('public/images/avatar/3.jpg')}}"
                                                                       alt=""></div>
                                        <div class="testimonilas-text fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis"
                                                 data-starrating2="5"></div>
                                            <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac
                                                nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis.
                                                Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                            <a href="#" class="testi-link" target="_blank">Via Twitter</a>
                                            <div class="testimonilas-avatar fl-wrap">
                                                <h3>Frank Dellov</h3>
                                                <h4>Hotel Owner</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--testi-item end-->
                                <!--testi-item-->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <div class="testi-avatar"><img src="{{ asset('public/images/avatar/4.jpg')}}"
                                                                       alt=""></div>
                                        <div class="testimonilas-text fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis"
                                                 data-starrating2="5"></div>
                                            <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac
                                                nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis.
                                                Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                            <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                            <div class="testimonilas-avatar fl-wrap">
                                                <h3>Centa Simpson</h3>
                                                <h4>Restaurant Owner</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--testi-item end-->
                                <!--testi-item-->
                                <div class="swiper-slide">
                                    <div class="testi-item fl-wrap">
                                        <div class="testi-avatar"><img src="{{ asset('public/images/avatar/5.jpg')}}"
                                                                       alt=""></div>
                                        <div class="testimonilas-text fl-wrap">
                                            <div class="listing-rating card-popup-rainingvis"
                                                 data-starrating2="5"></div>
                                            <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac
                                                nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis.
                                                Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                            <a href="#" class="testi-link" target="_blank">Via Instagram</a>
                                            <div class="testimonilas-avatar fl-wrap">
                                                <h3>Linda Svensky</h3>
                                                <h4>Shop Owner</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--testi-item end-->
                            </div>
                        </div>
                    </div>
                    <div class="tc-pagination"></div>
                </div>
                <div class="waveWrapper waveAnimation">

                    <div class="waveWrapperInner bgMiddle">
                        <div class="wave-bg-anim waveMiddle"
                             style="background-image: url('{{ asset('public/images/wave-top.png')}}')"></div>
                    </div>
                    <div class="waveWrapperInner bgBottom">
                        <div class="wave-bg-anim waveBottom"
                             style="background-image: url('{{ asset('public/images/wave-top.png')}}')"></div>
                    </div>
                </div>
            </section>
            <!--section end-->
            <!--section  -->
            <section class="gray-bg">
                <div class="container">
                    <div class="clients-carousel-wrap fl-wrap">
                        <div class="cc-btn   cc-prev"><i class="fal fa-angle-left"></i></div>
                        <div class="cc-btn cc-next"><i class="fal fa-angle-right"></i></div>
                        <div class="clients-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!--client-item-->
                                    <div class="swiper-slide">
                                        <a href="#" class="client-item"><img
                                                    src="{{ asset('public/images/clients/1.png')}}" alt=""></a>
                                    </div>
                                    <!--client-item end-->
                                    <!--client-item-->
                                    <div class="swiper-slide">
                                        <a href="#" class="client-item"><img
                                                    src="{{ asset('public/images/clients/2.png')}}" alt=""></a>
                                    </div>
                                    <!--client-item end-->
                                    <!--client-item-->
                                    <div class="swiper-slide">
                                        <a href="#" class="client-item"><img
                                                    src="{{ asset('public/images/clients/3.png')}}" alt=""></a>
                                    </div>
                                    <!--client-item end-->
                                    <!--client-item-->
                                    <div class="swiper-slide">
                                        <a href="#" class="client-item"><img
                                                    src="{{ asset('public/images/clients/1.png')}}" alt=""></a>
                                    </div>
                                    <!--client-item end-->
                                    <!--client-item-->
                                    <div class="swiper-slide">
                                        <a href="#" class="client-item"><img
                                                    src="{{ asset('public/images/clients/2.png')}}" alt=""></a>
                                    </div>
                                    <!--client-item end-->
                                    <!--client-item-->
                                    <div class="swiper-slide">
                                        <a href="#" class="client-item"><img
                                                    src="{{ asset('public/images/clients/3.png')}}" alt=""></a>
                                    </div>
                                    <!--client-item end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--section end-->
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
                                <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus.
                                    Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                <ul class="footer-contacts fl-wrap no-list-style">
                                    <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a>
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
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
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
                                            <span class="widget-posts-date"><i class="fal fa-calendar"></i> 21 Mar 09.05 </span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="widget-posts-img"><img
                                                    src="{{ asset('public/images/all/2.jpg')}}" class="respimg"
                                                    alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title=""> In hac habitasse platea</a>
                                            <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 18.21 </span>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="widget-posts-img"><img
                                                    src="{{ asset('public/images/all/7.jpg')}}" class="respimg"
                                                    alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="#" title="">Tortor tempor in porta</a>
                                            <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 16.42 </span>
                                        </div>
                                    </li>
                                </ul>
                                <a href="blog.html" class="footer-link">Read all <i class="fal fa-long-arrow-right"></i></a>
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
                <div class="main-register_title">Welcome to <span><strong>Town</strong>Hub<strong>.</strong></span>
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