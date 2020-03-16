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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
                    <div class="overlay"></div>
                    <div class="media-container video-parallax">
                        <div class="bg mob-bg par-elem" data-bg="images/bg/9.jpg"></div>
                        <div class="video-container">
                            <video autoplay loop muted class="bgvid">
                                <source src="{{ asset('public/video/2.mp4')}}" type="video/mp4"
                                        data-scrollax="properties: { translateY: '30%' }">
                            </video>
                        </div>
                        <!--
                            Vimeo code

                             <div  class="background-vimeo" data-vim="97871257"> </div> -->
                        <!--
                            Youtube code

                             <div  class="background-youtube-wrapper" data-vid="Hg5iNVSp2z8" data-mv="1"> </div> -->
                    </div>
                </div>
                <div class="container">
                    <div class="list-single-header-item  fl-wrap">
                        <div class="row">
                            <div class="col-md-9">
                                <h1>Digital Event In City Hall <span class="verified-badge"><i class="fal fa-check"></i></span>
                                </h1>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA</a> <a
                                            href="#"> <i class="fal fa-phone"></i>+38099231212</a> <a href="#"><i
                                                class="fal fa-envelope"></i> yourmail@domain.com</a></div>
                            </div>
                            <div class="col-md-3">
                                <a class="fl-wrap list-single-header-column custom-scroll-link " href="#sec5">
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
                        <a class="listing-item-category-wrap">
                            <div class="listing-item-category purp-bg"><i class="fal fa-cocktail"></i></div>
                            <span>Events</span>
                        </a>
                        <div class="list-single-author"><a href="author-single.html"><span class="author_avatar"> <img
                                            alt='' src='{{ asset('public/images/avatar/5.jpg')}}'>  </span>By Alisa
                                Noory</a></div>
                        <div class="geodir_status_date color-bg"><i class="fal fa-clock"></i>27 may 2019</div>
                        <div class="box-widget counter-widget" data-countDate="09/12/2021">
                            <div class="countdown">
                                <div class="countdown-item">
                                    <span class="days rot">00</span>
                                    <p>days</p>
                                </div>
                                <div class="countdown-item">
                                    <span class="hours rot">00</span>
                                    <p>hours </p>
                                </div>
                                <div class="countdown-item">
                                    <span class="minutes rot2">00</span>
                                    <p>minutes </p>
                                </div>
                                <div class="countdown-item">
                                    <span class="seconds rot2">00</span>
                                    <p>seconds</p>
                                </div>
                            </div>
                        </div>
                        <div class="list-single-stats cws">
                            <ul class="no-list-style">
                                <li><span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  156 </span></li>
                                <li><span class="bookmark-counter"><i class="fas fa-heart"></i> Bookmark -  24 </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- scroll-nav-wrapper-->

            <!-- scroll-nav-wrapper end-->
            <section class="gray-bg no-top-padding">
                <div class="container">

                    <div class="clearfix"></div>
                    <div class="row">
                        <!-- list-single-main-wrapper-col -->
                        <div class="col-md-8">
                            <!-- list-single-main-wrapper -->
                            <div class="list-single-main-wrapper fl-wrap" id="sec2">

                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap block_box">
                                    <div class="list-single-main-item-title">
                                        <h3>Lovely Wooden House</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <p>3 guests
                                            1 bedroom
                                            2 beds
                                            1.5 baths</p>
                                        <p><i class="fas fa-home"></i> Entire home</p>
                                        <p>You’ll have the cabin to yourself.</p>
                                        <p><i class="fas fa-bell"></i> Self check-in</p>
                                        <p> Check yourself in with the lockbox.</p>
                                        <p><i class="fas fa-hourglass-end"></i> Tim is a Superhost</p>
                                        <p>Superhosts are experienced, highly rated hosts who are committed to providing
                                            great stays for guests.</p>
                                        <p>Our wooden house is a lovely place to stay for couples or single-travelers.
                                            It offers everything required for a relaxed stay.</p>

                                    </div>
                                </div>
                                <div class="accordion mar-top" id="sec3">
                                    <a class="toggle act-accordion" href="#"> Read more about the space<span></span></a>
                                    <div class="accordion-inner visible">
                                        <h4 class="simple-title"> Guest access</h4>
                                        <p>The whole house is yours! And even the yard is included :-)</p>
                                    </div>
                                    <a class="toggle" href="#"> Sleeping arrangements</a>
                                    <div class="accordion-inner">
                                        <h4 class="simple-title">Bedroom 1</h4>
                                        <p>1 double bed,1 single bed</p>
                                    </div>


                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap block_box">
                                    <div class="list-single-main-item-title">
                                        <h3>Amenities</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="listing-features fl-wrap">
                                            <ul class="no-list-style">
                                                <li><a href="#"><i class="fas fa-book-open"></i> Essentials</a></li>
                                                <li><a href="#"><i class="fab fa-hotjar"></i> Heating</a></li>
                                                <li><a href="#"><i class="fas fa-hot-tub"></i> Hot water</a></li>
                                                <li><a href="#"><i class="fas fa-fire-extinguisher"></i> Indoor
                                                        fireplace</a></li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <!-- list-single-main-item end -->
                                <!-- accordion-->

                                <!-- accordion end -->
                                <!-- list-single-main-item-->
                                <div class="list-single-main-item fl-wrap block_box" id="sec4">
                                    <div class="list-single-main-item-title">
                                        <h3>Availability</h3>
                                        <p>This host offers 10% off if you stay a week and a 30% monthly discount.</p>
                                    </div>

                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="team-holder fl-wrap">
                                            <!-- team-item -->
                                            <div class="team-box">


                                            </div>
                                            <!-- team-item  end-->
                                            <!-- team-item -->

                                            <!-- team-item end  -->
                                            <!-- team-item -->

                                            <!-- team-item end  -->
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap block_box" id="sec5">
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
                                                        <a href="images/all/18.jpg" class="image-popup"><img
                                                                    src="{{ asset('public/images/all/18.jpg')}}" alt=""></a>
                                                        <a href="images/all/24.jpg" class="image-popup"><img
                                                                    src="{{ asset('public/images/all/24.jpg')}}" alt=""></a>
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
                                <div class="list-single-main-item fl-wrap block_box" id="sec6">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Add Review</h3>
                                    </div>
                                    <!-- Add Review Box -->
                                    <div id="add-review" class="add-review-box">
                                        <!-- Review Comment -->
                                        <form id="add-comment" class="add-comment  custom-form" name="rangeCalc">
                                            <fieldset>

                                                <div class="list-single-main-item_content fl-wrap">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label><i class="fal fa-user"></i></label>
                                                            <input type="text" placeholder="Your Name *" value=""
                                                                   name="ls3_name"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label><i class="fal fa-envelope"></i> </label>
                                                            <input type="text" placeholder="Email Address*" value=""
                                                                   name="ls3_email"/>
                                                        </div>
                                                    </div>
                                                    <textarea cols="40" rows="3" name="ls3_textarea"
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
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Register Now</h3>
                                </div>
                                <div class="box-widget">
                                    <div class="box-widget-content">
                                        <form class="add-comment custom-form">
                                            <fieldset>
                                                <label><i class="fal fa-user"></i></label>
                                                <input type="text" placeholder="Your Name *" value=""/>
                                                <div class="clearfix"></div>
                                                <label><i class="fal fa-envelope"></i> </label>
                                                <input type="text" placeholder="Email Address *" value=""/>
                                                <div class="clearfix"></div>
                                                <label><i class="fal fa-phone"></i> </label>
                                                <input type="text" placeholder="Phone *" value=""/>
                                                <div class="quantity fl-wrap">
                                                    <span><i class="fal fa-user-plus"></i>Persons : </span>
                                                    <div class="quantity-item">
                                                        <input type="button" value="-" class="minus">
                                                        <input type="text" name="quantity" title="Qty"
                                                               class="qty color-bg" data-min="1" data-max="3"
                                                               data-step="1" value="1">
                                                        <input type="button" value="+" class="plus">
                                                    </div>
                                                </div>
                                                <textarea cols="40" rows="3"
                                                          placeholder="Additional Information:"></textarea>
                                            </fieldset>
                                            <button class="btn color2-bg url_btn float-btn"
                                                    onclick="window.location.href='booking.html'">Register Now <i
                                                        class="fal fa-bookmark"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Location / Contacts </h3>
                                </div>
                                <div class="box-widget">
                                    <div class="map-container">
                                        <div id="singleMap" data-latitude="40.7427837"
                                             data-longitude="-73.11445617675781" data-mapTitle="Our Location"></div>
                                    </div>
                                    <div class="box-widget-content bwc-nopad">
                                        <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                            <ul class="no-list-style">
                                                <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">USA
                                                        27TH Brooklyn NY</a></li>
                                                <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a>
                                                </li>
                                                <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a>
                                                </li>
                                                <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#">themeforest.net</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                            <ul class="no-list-style">
                                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                            <div class="bottom-bcw-box_link"><a href="#"
                                                                                class="show-single-contactform tolt"
                                                                                data-microtip-position="top"
                                                                                data-tooltip="Write Message"><i
                                                            class="fal fa-envelope"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3> Price Range </h3>
                                </div>
                                <div class="box-widget">
                                    <div class="box-widget-content">
                                        <div class="claim-price-wdget fl-wrap">
                                            <div class="claim-price-wdget-content fl-wrap">
                                                <div class="pricerange fl-wrap"><span>Price : </span> 81$ - 320$</div>
                                                <div class="claim-widget-link fl-wrap"><span>Own or work here?</span><a
                                                            href="#">Claim Now!</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3> Instagram </h3>
                                </div>
                                <div class="box-widget">
                                    <div class="box-widget-content">
                                        <div class='jr-insta-thumb' id="insta-content"
                                             data-instatoken="3075034521.5d9aa6a.284ff8339f694dbfac8f265bf3e93c8a"></div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Hosted by : </h3>
                                </div>
                                <div class="box-widget">
                                    <div class="box-widget-author fl-wrap">
                                        <div class="box-widget-author-title">
                                            <div class="box-widget-author-title-img">
                                                <img src="{{ asset('public/images/avatar/5.jpg')}}" alt="">
                                            </div>
                                            <div class="box-widget-author-title_content">
                                                <a href="user-single.html">Alisa Noory</a>
                                                <span>4 Places Hosted</span>
                                            </div>
                                            <div class="box-widget-author-title_opt">
                                                <a href="user-single.html" class="tolt green-bg"
                                                   data-microtip-position="top" data-tooltip="View Profile"><i
                                                            class="fas fa-user"></i></a>
                                                <a href="#" class="tolt color-bg cwb" data-microtip-position="top"
                                                   data-tooltip="Chat With Owner"><i
                                                            class="fas fa-comments-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Similar listings :</h3>
                                </div>
                                <div class="box-widget  fl-wrap">
                                    <div class="box-widget-content">
                                        <!--widget-posts-->
                                        <div class="widget-posts  fl-wrap">
                                            <ul class="no-list-style">
                                                <li>
                                                    <div class="widget-posts-img"><a href="listing-single.html"><img
                                                                    src="{{ asset('public/images/gallery/thumbnail/1.png')}}"
                                                                    alt=""></a>
                                                    </div>
                                                    <div class="widget-posts-descr">
                                                        <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                        class="fas fa-map-marker-alt"></i> 40 Journal
                                                                Square Plaza, NJ, USA</a></div>
                                                        <div class="widget-posts-descr-link"><a href="listing.html">Restaurants </a>
                                                            <a href="listing.html">Cafe</a></div>
                                                        <div class="widget-posts-descr-score">4.1</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="widget-posts-img"><a href="listing-single.html"><img
                                                                    src="{{ asset('public/images/gallery/thumbnail/2.png')}}"
                                                                    alt=""></a>
                                                    </div>
                                                    <div class="widget-posts-descr">
                                                        <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                        class="fas fa-map-marker-alt"></i> 70 Bright St
                                                                New York, USA </a></div>
                                                        <div class="widget-posts-descr-link"><a href="listing.html">Hotels </a>
                                                        </div>
                                                        <div class="widget-posts-descr-score">5.0</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="widget-posts-img"><a href="listing-single.html"><img
                                                                    src="{{ asset('public/images/gallery/thumbnail/3.png')}}"
                                                                    alt=""></a>
                                                    </div>
                                                    <div class="widget-posts-descr">
                                                        <h4><a href="listing-single.html">Rocko Band in Marquee Club</a>
                                                        </h4>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                        class="fas fa-map-marker-alt"></i>75 Prince St,
                                                                NY, USA</a></div>
                                                        <div class="widget-posts-descr-link"><a href="listing.html">Events</a>
                                                        </div>
                                                        <div class="widget-posts-descr-score">4.2</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="widget-posts-img"><a href="listing-single.html"><img
                                                                    src="{{ asset('public/images/gallery/thumbnail/4.png')}}"
                                                                    alt=""></a>
                                                    </div>
                                                    <div class="widget-posts-descr">
                                                        <h4><a href="listing-single.html">Premium Fitness Gym</a></h4>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                        class="fas fa-map-marker-alt"></i> W 85th St,
                                                                New York, USA</a></div>
                                                        <div class="widget-posts-descr-link"><a href="listing.html">Fitness</a>
                                                            <a href="listing.html">Gym</a></div>
                                                        <div class="widget-posts-descr-score">5.0</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- widget-posts end-->
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>Tags</h3>
                                </div>
                                <div class="box-widget   fl-wrap">
                                    <div class="box-widget-content">
                                        <div class="list-single-tags tags-stylwrap">
                                            <a href="#">Hotel</a>
                                            <a href="#">Hostel</a>
                                            <a href="#">Room</a>
                                            <a href="#">Spa</a>
                                            <a href="#">Restourant</a>
                                            <a href="#">Parking</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<!--chat-widget -->
<div class="chat-widget-button cwb tolt" data-microtip-position="left" data-tooltip="Chat With Owner"><i
            class="fal fa-comments-alt"></i></div>
<div class="chat-widget_wrap not-vis-chat">
    <div class="chat-widget_header">
        <h3>Chat with <a href="author-single.html"> Alisa Noory</a></h3>
        <div class="status st_online"><span></span>Online</div>
    </div>
    <div class="chat-body" data-simplebar>
        <!-- message-->
        <div class="chat-message chat-message_guest fl-wrap">
            <div class="dashboard-message-avatar">
                <img src="{{ asset('public/images/avatar/4.jpg')}}" alt="">
            </div>
            <span class="chat-message-user-name">Jessie</span>
            <span class="massage-date">25 may 2018  <span>7.51 PM</span></span>
            <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae
                nunc. </p>
        </div>
        <!-- message end-->
        <!-- message-->
        <div class="chat-message chat-message_user fl-wrap">
            <div class="dashboard-message-avatar">
                <img src="{{ asset('public/images/avatar/5.jpg')}}" alt="">
            </div>
            <span class="chat-message-user-name">Alica</span>
            <span class="massage-date">25 may 2018  <span>7.51 PM</span></span>
            <p>Nulla eget erat consequat quam feugiat dapibus eget sed mauris.</p>
        </div>
        <!-- message end-->
        <!-- message-->
        <div class="chat-message chat-message_guest fl-wrap">
            <div class="dashboard-message-avatar">
                <img src="{{ asset('public/images/avatar/4.jpg')}}" alt="">
            </div>
            <span class="chat-message-user-name">Jessie</span>
            <span class="massage-date">25 may 2018  <span>7.51 PM</span></span>
            <p>Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus..</p>
        </div>
        <!-- message end-->
    </div>
    <div class="chat-widget_input fl-wrap">
        <textarea placeholder="Type Message"></textarea>
        <button type="submit"><i class="fal fa-paper-plane"></i></button>
    </div>
</div>
<!--chat-widget end -->
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
