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

    <!-- wrapper-->
    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!-- Map -->
            <div class="map-container column-map right-pos-map fix-map hid-mob-map">
                <div id="map-main"></div>
                <ul class="mapnavigation no-list-style">
                    <li><a href="#" class="prevmap-nav mapnavbtn"><span><i class="fas fa-caret-left"></i></span></a>
                    </li>
                    <li><a href="#" class="nextmap-nav mapnavbtn"><span><i class="fas fa-caret-right"></i></span></a>
                    </li>
                </ul>
                <div class="scrollContorl mapnavbtn tolt" data-microtip-position="top-left"
                     data-tooltip="Enable Scrolling"><span><i class="fal fa-unlock"></i></span></div>
                <div class="location-btn geoLocation tolt" data-microtip-position="top-left"
                     data-tooltip="Your location"><span><i class="fal fa-location"></i></span></div>
                <div class="map-close"><i class="fas fa-times"></i></div>
            </div>
            <!-- Map end -->
            <div class="col-list-wrap novis_to-top">
                <!-- list-main-wrap-header-->
                <div class="list-main-wrap-header fl-wrap fixed-listing-header">
                    <div class="container">
                        <!-- list-main-wrap-title-->
                        <div class="list-main-wrap-title">
                            <h2>Results For : <span>New York </span></h2>
                        </div>
                        <!-- list-main-wrap-title end-->
                        <!-- list-main-wrap-opt-->
                        <div class="list-main-wrap-opt">
                            <!-- price-opt-->
                            <div class="price-opt">
                                <span class="price-opt-title">Sort   by:</span>
                                <div class="listsearch-input-item">
                                    <select data-placeholder="Popularity" class="chosen-select no-search-select">
                                        <option>Popularity</option>
                                        <option>Average rating</option>
                                        <option>Price: low to high</option>
                                        <option>Price: high to low</option>
                                    </select>
                                </div>
                            </div>
                            <!-- price-opt end-->
                            <!-- price-opt-->
                            <div class="grid-opt">
                                <ul class="no-list-style">
                                    <li class="grid-opt_act"><span class="two-col-grid act-grid-opt tolt"
                                                                   data-microtip-position="bottom"
                                                                   data-tooltip="Grid View"><i
                                                    class="fal fa-th"></i></span></li>
                                    <li class="grid-opt_act"><span class="one-col-grid tolt"
                                                                   data-microtip-position="bottom"
                                                                   data-tooltip="List View"><i class="fal fa-list"></i></span>
                                    </li>
                                </ul>
                            </div>
                            <!-- price-opt end-->
                        </div>
                        <!-- list-main-wrap-opt end-->
                    </div>
                    <a class="custom-scroll-link back-to-filters clbtg" href="#lisfw"><i class="fal fa-search"></i></a>
                </div>
                <!-- list-main-wrap-header end-->
                <div class="clearfix"></div>
                <div class="container">
                    <div class="mob-nav-content-btn mncb_half color2-bg show-list-wrap-search fl-wrap"><i
                                class="fal fa-filter"></i> Filters
                    </div>
                    <div class="mob-nav-content-btn mncb_half color2-bg schm  fl-wrap"><i
                                class="fal fa-map-marker-alt"></i> View on map
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- listsearch-input-wrap-->
                <div class="listsearch-input-wrap lws_mobile fl-wrap tabs-act" id="lisfw">
                    <div class="listsearch-input-wrap_contrl fl-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="tabs-menu fl-wrap no-list-style">
                                        <li class="current"><a href="#filters-search"> <i class="fal fa-sliders-h"></i>
                                                Filters </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="container">
                        <!--tabs -->
                        <div class="tabs-container fl-wrap">
                            <!--tab -->
                            <div class="tab">
                                <div id="filters-search" class="tab-content  first-tab ">
                                    <div class="fl-wrap">
                                        <div class="row">
                                            <!-- listsearch-input-item-->
                                            <div class="col-md-6">
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="Location" name="pickup_location_ride"
                                                            class="chosen-select no-search-select">
                                                        <option>Enter your pickup location</option>
                                                        <option value="shop">Shops</option>
                                                        <option value="hotels">Hotels</option>
                                                        <option value="restaurants">Restaurants</option>
                                                        <option value="fitness">Fitness</option>
                                                        <option value="events">Events</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="City/Location" name="city_location_ride"
                                                            class="chosen-select no-search-select">
                                                        <option>Enter Destination</option>
                                                        <option value="ny">New York</option>
                                                        <option value="chgo">Chicago</option>
                                                        <option value="losanls">Los Angeles</option>
                                                        <option value="washgtn">Washington</option>
                                                        <option value="bstn">Boston</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4" style="text-align: left;">
                                                <label for="example-date-input"
                                                       class="col-2 col-form-label">Date</label>
                                                <div class="col-2">
                                                    <input class="form-control ride-search" type="date"
                                                           value="2011-08-19" id="example-date-input" name="ride_date">


                                                </div>
                                            </div>

                                            <div class="form-group col-md-4" style="text-align: left;">
                                                <label for="example-date-input"
                                                       class="col-2 col-form-label">Time</label>
                                                <div class="col-2">
                                                    <input class="form-control ride-search" type="date"
                                                           value="2011-08-19" id="example-date-input" name="ride_time">
                                                </div>
                                            </div>


                                            <!-- listsearch-input-item end-->
                                            <!-- listsearch-input-item-->

                                            <!-- listsearch-input-item end-->
                                            <!-- listsearch-input-item-->

                                            <!-- listsearch-input-item end-->
                                            <!-- listsearch-input-item-->

                                            <!-- listsearch-input-item end-->
                                            <!-- listsearch-input-item-->
                                            <div class="col-md-3">
                                                <div class="listsearch-input-item">
                                                    <button class="header-search-button color-bg"
                                                            onclick="window.location.href='listing.html'"><i
                                                                class="far fa-search"></i><span>Search</span></button>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item end-->
                                        </div>
                                        <!-- hidden-listing-filter -->
                                        <div class="hidden-listing-filter fl-wrap">
                                            <div class="listsearch-input-wrap-header fl-wrap"><i
                                                        class="fal fa-tasks"></i>More Filters
                                            </div>
                                            <div class="fl-wrap mar-btoom">
                                                <div class="row">
                                                    <!-- listsearch-input-item-->
                                                    <div class="col-md-3">
                                                        <div class="listsearch-input-item">
                                                            <button class="toggle-filter-btn tsb_act "><i
                                                                        class="fal fa-clock"></i> <span>Open Now</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- listsearch-input-end-->
                                                    <!-- listsearch-input-item-->
                                                    <div class="col-md-3">
                                                        <div class="listsearch-input-item clact date-container">
                                                            <span class="iconn-dec"><i
                                                                        class="fal fa-calendar"></i></span>
                                                            <input type="text" placeholder="Event Date"
                                                                   name="datepicker_here" value=""/>
                                                            <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                                        </div>
                                                    </div>
                                                    <!-- listsearch-input-end-->
                                                    <!-- listsearch-input-item-->
                                                    <div class="col-md-6">
                                                        <div class="listsearch-input-item">
                                                            <div class="price-rage-wrap fl-wrap">
                                                                <div class="price-rage-wrap-title"><i
                                                                            class="fal fa-hand-holding-usd"></i> Price :
                                                                </div>
                                                                <div class="price-rage-item fl-wrap">
                                                                    <input type="text" class="price-range" data-min="0"
                                                                           data-max="4" name="price_range1"
                                                                           data-step="1" value="$$">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- listsearch-input-end-->
                                                </div>
                                            </div>
                                            <div class="listsearch-input-wrap-header fl-wrap"><i
                                                        class="fal fa-tags"></i>Facilities
                                            </div>
                                            <!-- listsearch-input-item-->
                                            <div class="listsearch-input-item">
                                                <div class=" fl-wrap filter-tags">
                                                    <ul class="no-list-style">
                                                        <li>
                                                            <input id="check-aa" type="checkbox" name="ride_check1">
                                                            <label for="check-aa">Elevator in building</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-b" type="checkbox" name="ride_check1">
                                                            <label for="check-b">Friendly workspace</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-c" type="checkbox" name="ride_check1"
                                                                   checked>
                                                            <label for="check-c">Instant Book</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-d" type="checkbox" name="ride_check1">
                                                            <label for="check-d">Wireless Internet</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-d2" type="checkbox" name="ride_check1"
                                                                   checked>
                                                            <label for="check-d2">Free WiFi</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-d3" type="checkbox" name="ride_check1"
                                                                   checked>
                                                            <label for="check-d3">Free Parking</label>
                                                        </li>
                                                        <li>
                                                            <input id="check-d4" type="checkbox" name="ride_check1">
                                                            <label for="check-d4">Smoking Allowed</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- listsearch-input-item end-->
                                        </div>
                                        <!-- hidden-listing-filter end -->
                                        <div class="more-filter-option-wrap">
                                            <div class="more-filter-option-btn act-hiddenpanel"><i
                                                        class="far fa-plus"></i> <span>More Options</span></div>
                                            <div class="clear-filter-btn color"><i class="far fa-redo"></i> Reset
                                                Filters
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab end-->
                            <!--tab -->

                            <!--tab end-->
                        </div>
                        <!--tabs end-->
                    </div>
                </div>
                <!-- listsearch-input-wrap end-->
                <!-- listing-item-container -->
                <div class="listing-item-container init-grid-items fl-wrap">
                    <div class="container">
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span>
                                    </div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="{{ asset('public/images/all/1.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img
                                                    src="{{ asset('public/images/avatar/1.jpg')}}" alt=""></a>
                                        <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                    </div>
                                    <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now
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
                                <div class="geodir-category-content fl-wrap">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">Luxary
                                                    Resaturant</a><span class="verified-badge"><i
                                                            class="fal fa-check"></i></span></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#5" class="map-item"><i
                                                            class="fas fa-map-marker-alt"></i> 27th Brooklyn New York,
                                                    USA</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida
                                            orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities :</div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi">
                                                    <i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i
                                                            class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i>
                                                </li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
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
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span
                                                                class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#1" class="map-item"><i
                                                                class="fal fa-map-marker-alt"></i><span
                                                                class="geodir-opt-tooltip">On the map <strong>1</strong></span>
                                                    </a></li>
                                                <li>
                                                    <div class="dynamic-gal gdop-list-link"
                                                         data-dynamicPath="[{'src': 'images/all/1.jpg'},{'src': 'images/all/24.jpg'}, {'src': 'images/all/12.jpg'}]">
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
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span>
                                    </div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="{{ asset('public/images/all/9.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img
                                                    src="images/avatar/2.jpg" alt=""></a>
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
                                <div class="geodir-category-content fl-wrap">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">Rocko Band in
                                                    Marquee Club</a></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#2" class="map-item"><i
                                                            class="fas fa-map-marker-alt"></i> 75 Prince St, NY, USA</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida
                                            orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities :</div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi">
                                                    <i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i
                                                            class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i>
                                                </li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a class="listing-item-category-wrap">
                                            <div class="listing-item-category purp-bg"><i class="fal fa-cocktail"></i>
                                            </div>
                                            <span>Events</span>
                                        </a>
                                        <div class="geodir-opt-list">
                                            <ul class="no-list-style">
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span
                                                                class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#2" class="map-item"><i
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
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span>
                                    </div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="{{ asset('public/images/all/31.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img
                                                    src="{{ asset('public/images/avatar/4.jpg')}}" alt=""></a>
                                        <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                    </div>
                                    <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Close Now</div>
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
                                <div class="geodir-category-content fl-wrap">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">Premium Fitness
                                                    Gym</a><span class="verified-badge"><i
                                                            class="fal fa-check"></i></span></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#3" class="map-item"><i
                                                            class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida
                                            orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities :</div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi">
                                                    <i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i
                                                            class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i>
                                                </li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a class="listing-item-category-wrap">
                                            <div class="listing-item-category blue-bg"><i class="fal fa-dumbbell"></i>
                                            </div>
                                            <span>Fitness / Gym</span>
                                        </a>
                                        <div class="geodir-opt-list">
                                            <ul class="no-list-style">
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span
                                                                class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#3" class="map-item"><i
                                                                class="fal fa-map-marker-alt"></i><span
                                                                class="geodir-opt-tooltip">On the map <strong>3</strong></span>
                                                    </a></li>
                                                <li>
                                                    <div class="dynamic-gal gdop-list-link"
                                                         data-dynamicPath="[{'src': '{{ asset('public/images/all/31.jpg')}}'},{'src': '{{ asset('public/images/all/10.jpg')}}'}, {'src': '{{ asset('public/images/all/15.jpg')}}'}]">
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
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span>
                                    </div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="{{ asset('public/images/all/16.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img
                                                    src="{{ asset('public/images/avatar/3.jpg')}}" alt=""></a>
                                        <span class="avatar-tooltip">Added By  <strong>Kliff Antony</strong></span>
                                    </div>
                                    <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now
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
                                <div class="geodir-category-content fl-wrap">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">MontePlaza Hotel</a><span
                                                        class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#4" class="map-item"><i
                                                            class="fas fa-map-marker-alt"></i> 70 Bright St New York,
                                                    USA</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida
                                            orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities :</div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi">
                                                    <i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i
                                                            class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i>
                                                </li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
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
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span
                                                                class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#4" class="map-item"><i
                                                                class="fal fa-map-marker-alt"></i><span
                                                                class="geodir-opt-tooltip">On the map <strong>4</strong></span></a>
                                                </li>
                                                <li>
                                                    <div class="dynamic-gal gdop-list-link"
                                                         data-dynamicPath="[{'src': '{{ asset('public/images/all/16.jpg')}}'},{'src': '{{ asset('public/images/all/27.jpg')}}'}, {'src': '{{ asset('public/images/all/20.jpg')}}'}]">
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
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span>
                                    </div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="{{ asset('public/images/all/28.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img
                                                    src="{{ asset('public/images/avatar/5.jpg')}}" alt=""></a>
                                        <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                                    </div>
                                    <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now
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
                                <div class="geodir-category-content fl-wrap">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">Handmade Shop</a>
                                            </h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#5" class="map-item"><i
                                                            class="fas fa-map-marker-alt"></i> 34-42 Montgomery St , NY,
                                                    USA</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida
                                            orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities :</div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi">
                                                    <i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i
                                                            class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i>
                                                </li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
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
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span
                                                                class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#5" class="map-item"><i
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
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <!-- listing-item  -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span>
                                    </div>
                                    <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                        <img src="{{ asset('public/images/all/18.jpg')}}" alt="">
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img
                                                    src="{{ asset('public/images/avatar/1.jpg')}}" alt=""></a>
                                        <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                    </div>
                                    <div class="geodir_status_date gsd_close"><i class="fal fa-lock-open"></i>Close Now
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
                                <div class="geodir-category-content fl-wrap">
                                    <div class="geodir-category-content-title fl-wrap">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">Iconic Cafe in
                                                    Manhattan</a><span class="verified-badge"><i
                                                            class="fal fa-check"></i></span></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#6" class="map-item"><i
                                                            class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza,
                                                    NJ, USA</a></div>
                                        </div>
                                    </div>
                                    <div class="geodir-category-text fl-wrap">
                                        <p class="small-text">Sed interdum metus at nisi tempor laoreet. Integer gravida
                                            orci a justo sodales.</p>
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities :</div>
                                            <ul class="no-list-style">
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Free WiFi">
                                                    <i class="fal fa-wifi"></i></li>
                                                <li class="tolt" data-microtip-position="top" data-tooltip="Parking"><i
                                                            class="fal fa-parking"></i></li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i>
                                                </li>
                                                <li class="tolt" data-microtip-position="top"
                                                    data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
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
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span
                                                                class="geodir-opt-tooltip">Contact Info</span></a></li>
                                                <li><a href="#6" class="map-item"><i
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
                                                <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                        <div class="pagination">
                            <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                            <a href="#">1</a>
                            <a href="#" class="current-page">2</a>
                            <a href="#">3</a>
                            <a href="#">...</a>
                            <a href="#">7</a>
                            <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- listing-item-container end -->
                <!--<div class="avatar-img" data-srcav="http://citybook.kwst.net/images/avatar/4.jpg"></div>-->
            </div>
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
                <div class="tabs-container">
                    <div class="tab">
                        <!--tab -->
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
                                        <input name="register_password" type="password" onClick="this.select()"
                                               value="">
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
<script src="{{ asset('public/js/map-plugin.js')}}"></script>
<script src="{{ asset('public/js/map-listing.js')}}"></script>
</body>

<!-- Mirrored from townhub.kwst.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 18:12:43 GMT -->
</html>
