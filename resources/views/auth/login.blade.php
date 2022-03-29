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

                    <div class="show-reg-form modal-open"><a href="" class="act-link"></a> Giriş Yap </div>
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
                                <li>
                                <a href="{{route('contact')}}">İletişim </a>
                              </li>
                </div>
            </header>
            <!--  header end -->
            <!-- wrapper -->
            <div id="wrapper">
                <!--content-->
                <div class="content">
                    <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="bubble-bg"></div>
                        <div class="container">
                            <div class="section-title center-align">
                                <h2><span>Giriş Yap</span></h2>
                                <div class="breadcrumbs fl-wrap"><a href="{{route('stockapp')}}">Anasayfa</a> <span>Contacts</span></div>
                                <span class="section-separator"></span>
                            </div>
                        </div>

                    </section>
                    <!-- section end -->
                    <!--section -->
                    <section id="sec1">
                      <div class="col-md-6">
                                @if($errors->any())
                                    <ul>
                                      @foreach ($errors->all() as $contactError)
                                        <li> {{$contactError}} </li>
                                      @endforeach
                                    </ul>
                                  @endif
                                <div class="col-md-6">
                                    <div class="list-single-main-wrapper fl-wrap">
                                        <div id="contact-form">
                                            <div id="message"></div>
                                            <form  class="custom-form" action="{{route('login')}}" method="POST">
                                              @csrf
                                                <fieldset>
                                                    <label><i class="fa fa-user-o"></i></label>
                                                    <input type="text" name="email" placeholder="Email: ">
                                                    <div class="clearfix"></div>
                                                    <label><i class="fa fa-envelope-o"></i>  </label>
                                                    <input type="password"  name="password" id="email" placeholder="Şifre: " >

                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('login') }}
                                                      </button>
                                      </div>
                                        <!-- contact form  end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </section>
                    <!-- section end -->
                    <div class="limit-box fl-wrap"></div>
                    <!--section -->
                    <section class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg="images/bg/circle.png"></div>
                        </div>
                        <div class="container">
                            <div class="join-wrap fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Topluluğumuza Katılabilirsiniz</h3>
                                    </div>
                                    <div class="col-md-4"><a href="" class="join-wrap-btn modal-open">Giriş Yap <i class="fa fa-sign-in"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                </div>
                <!-- contentend -->
            </div>
            <!-- wrapper end -->

                                <section class="gradient-bg">
                                    <div class="cirle-bg">
                                        <div class="bg"></div>
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
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOURAPIKEYHERE&libraries=places&callback=initAutocomplete"></script>
        <script type="text/javascript" src="js/map_infobox.js"></script>
        <script type="text/javascript" src="js/markerclusterer.js"></script>
        <script type="text/javascript" src="js/maps.js"></script>
    </body>
</html>
