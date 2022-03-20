<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>StockApp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            <header class="main-header dark-header fs-header sticky">
                <div class="header-inner">
                    <div class="logo-holder">
                      <img src="images/logo.png" alt="">
                    </div>
                    <div class="header-search vis-header-search">
                        <div class="header-search-select-item">
                            <select data-placeholder="All Categories" name="id" class="chosen-select" >
                                <option value=""></option>
                            </select>
                        </div>
                        <button class="header-search-button" onclick="window.location.href={{route('categories')}}">Kategori</button>
                    </div>
                    <div class="show-search-button"><i class="fa fa-search"></i> <span>Kategori</span></div>
                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap color-bg">
                        <div class="nav-button">
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!--  navigation -->
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li>
                                  @auth

                                  <a href="{{route('stockapp')}}" class="act-link">Anasayfa </a>
                                  </li>
                                    <li>
                                    <a href="{{route('stores')}}">Mağazalar <i class="fa fa-caret-down"></i></a>
                                    <!--second level -->
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                    </ul>

                                    <li>
                                    <a href="{{route('products')}}">Ürünler <i class="fa fa-caret-down"></i></a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                    </ul>
                                </li>
                              @else
                                <li>
                                <a href="{{route('contact')}}">İletişim </a>
                              </li>
                              <li>
                              <a href="{{route('login')}}">Giriş Yap </a>
                            </li>
                          @endauth
                </div>
            </header>

            <div id="wrapper">
                <div class="content">
                    <section class="scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
                        <div class="bg"  data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '200px' }"></div>
                        <div class="overlay"></div>
                        <div class="hero-section-wrap fl-wrap">
                            <div class="container">
                                <div class="main-search-input-wrap">
                                    <div class="main-search-input fl-wrap">
                                        <div class="main-search-input-item">
                                            <select data-placeholder="All Categories" class="chosen-select" name="adresses" >
                                                <option>Şehir</option>
                                            </select>
                                        </div>
                                        <button class="main-search-button" onclick="window.location.href='listings-half-screen-map-list.html'">Ara</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section id="sec2">
                        <div class="container">
                            <div class="section-title">
                                <h2>Mağazalar</h2>
                                <div class="section-subtitle">StockApp</div>
                                <span class="section-separator"></span>
                            </div>
                            <!-- portfolio start -->
                            <div class="gallery-items fl-wrap mr-bot spad">
                                <!-- gallery-item-->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="listing-item-grid">
											<div class="bg"  data-bg="images/all/1.jpg"></div>
                                            <div class="listing-item-cat">
                                                <h3><a href="listing.html">Conference and Event</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                                                  </div>
                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section class="gray-section">
                        <div class="container">
                            <div class="section-title">
                                <h2>Ürünler</h2>
                                <div class="section-subtitle">Popüler Ürünler</div>
                                <span class="section-separator"></span>
                            </div>
                        </div>
                        <!-- carousel -->
                        <div class="list-carousel fl-wrap card-listing ">
                            <!--listing-carousel-->
                            <div class="listing-carousel  fl-wrap ">

                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="images/all/1.jpg" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <div class="listing-avatar"><a href="author-single.html"></a>
                                                    <span class="avatar-tooltip">Added By  <strong>Kliff Antony</strong></span>
                                                </div>
                                                <h3><a href="listing-single.html">Best deal For the Cars</a></h3>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                </div>
                            </div>
                            <!--listing-carousel end-->
                            <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                        </div>
                        <!--  carousel end-->
                    </section>
                    <!-- section end -->

                    <!--section -->
                    <section>
                        <div class="container">
                            <div class="section-title">
                                <h2>Nasıl Ürün eklenir?</h2>
                                <div class="section-subtitle"></div>
                                <span class="section-separator"></span>
                            </div>
                            <div class="process-wrap fl-wrap">
                                <ul>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">01 . </span>
                                            <div class="time-line-icon"><i class="fa fa-map-o"></i></div>
                                            <h4> Üye ol</h4>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">02 .</span>
                                            <div class="time-line-icon"><i class="fa fa-envelope-open-o"></i></div>
                                            <h4>Mağazanı aç, ürünlerini ekle</h4>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">03 .</span>
                                            <div class="time-line-icon"><i class="fa fa-hand-peace-o"></i></div>
                                            <h4> Ürünlerin listelensin</h4>
                                        </div>
                                    </li>
                                </ul>
                                <div class="process-end"><i class="fa fa-check"></i></div>
                            </div>
                            <!--process-wrap   end-->
                        </div>
                    </section>

                    <!--section -->
                    <section>
                        <div class="container">
                            <div class="section-title">
                                <h2>Müşteri Yorumları</h2>
                                <div class="section-subtitle">İletişim</div>
                                <span class="section-separator"></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                            </div>
                        </div>
                        <!-- testimonials-carousel -->
                        <div class="carousel fl-wrap">
                            <!--testimonials-carousel-->
                            <div class="testimonials-carousel single-carousel fl-wrap">
                                <!--slick-slide-item-->
                                <div class="slick-slide-item">
                                    <div class="testimonilas-text">
                                        <div class="listing-rating card-popup-rainingvis"> </div>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arch itecto beatae vitae dicta sunt explicabo. </p>
                                    </div>
                                    <div class="testimonilas-avatar-item">
                                        <h4>Lisa Noory</h4>
                                    </div>
                                </div>

                                <!--slick-slide-item end-->
                            </div>

                        </div>
                        <!-- carousel end-->
                    </section>


                    <section class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg="images/bg/circle.png"></div>
                        </div>
                        <div class="container">
                            <div class="join-wrap fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>İletişim</h3>
                                        <p>Fikirlerinizi bildirebilisiniz.</p>
                                    </div>
                                    <div class="col-md-4"><a href="{{route('contact')}}" class="join-wrap-btn">İletişim <i class="fa fa-envelope-o"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                </div>
                <!-- Content end -->
            </div>
            <!-- wrapper end -->
            <!--footer -->

            <!--footer end  -->
            <!--register form -->

        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>
    </body>
</html>
