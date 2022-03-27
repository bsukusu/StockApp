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
        <link type="text/css" rel="stylesheet" href="{{asset('css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/color.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!-- loader -->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--  loader end -->
        <!-- Main   -->
        <div id="main">
            <!-- header  -->
            <header class="main-header dark-header fs-header sticky">
                <div class="header-inner">
                    <div class="logo-holder">
                        <a href="index.html"><img src="images/logo2.png" alt=""></a>
                    </div>
                        <div class="header-user-menu">
                          <div class="header-user-name">
                              <span><img src="" alt=""></span> </img>
                               {{auth()->user()->name}}
                          </div>
                          <ul>
                              <li><a href="{{route('edit-profile')}}"> Profili güncelle</a></li>
                              <form method="POST" action="{{ route('logout') }}" class="mb-0">
                                @csrf
                                <li class="nav-item">
                                  <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">
                                    <span>Çıkış</span>
                                  </a>
                                </form>
                          </ul>
                    </div>
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
                            <ul>
                                <li>
                                    <a href="{{route('stockapp')}}">Anasayfa</a>

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
                                    <a href="#" class="act-link">Pages <i class="fa fa-caret-down"></i></a>
                                    <!--second level -->
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li><a href="author-single.html">User single</a></li>
                                        <li><a href="how-itworks.html">How it Works</a></li>
                                        <li><a href="pricing-tables.html">Pricing</a></li>
                                        <li><a href="dashboard-myprofile.html">User Dasboard</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="header2.html">Header 2</a></li>
                                        <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                    </ul>
                                    <!--second level end-->
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                </div>
            </header>
            <!--  header end -->
            <!-- wrapper -->
            <div id="wrapper">
                <!--content -->
                <div class="content">
                    <!--section -->
                    <section id="sec1">
                        <!-- container -->
                        <div class="container">
                            <!-- profile-edit-wrap -->
                            <div class="profile-edit-wrap">
                                <div class="profile-edit-page-header">
                                    <h2>Şifreyi Değiştir</h2>
                                    <div class="breadcrumbs"><a href="{{route('stockapp')}}">Anasayfa</a><a href="{{route('dashboard')}}">Dasboard</a><span>Change Password</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="fixed-bar fl-wrap">
                                            <div class="user-profile-menu-wrap fl-wrap">
                                                <!-- user-profile-menu-->
                                                <div class="user-profile-menu">
                                                    <h3>Ana menü</h3>
                                                    <ul>
                                                      <li><a href="{{route('dashboard')}}" class="user-profile-act"><i class="fa fa-gears"></i>Dashboard</a></li>
                                                        <li><a href="{{route('edit-profile')}}"><i class="fa fa-user-o"></i> Profili güncelle</a></li>
                                                        <li><a href="{{route('contact')}}"><i class="fa fa-envelope-o"></i> Mesaj Bırak </a></li>
                                                        <li><a href="{{route('password.confirm')}}"><i class="fa fa-unlock-alt"></i>Şifreyi Değiştir</a></li>
                                                    </ul>
                                                </div>
                                                <!-- user-profile-menu end-->
                                                <!-- user-profile-menu-->
                                                <div class="user-profile-menu">
                                                    <h3>Mağazalar</h3>
                                                    <ul>
                                                        <li><a href=""><i class="fa fa-th-list"></i> Mağaza oluştur </a></li>
                                                        <li><a href="dashboard-bookings.html"> <i class="fa fa-calendar-check-o"></i> Ürünleri Listele </a></li>

                                                    </ul>
                                                </div>


                                                <!-- user-profile-menu end-->
                                                <form method="POST" action="{{ route('logout') }}" class="mb-0">
                                                  @csrf
                                                <a href="{{route('logout')}}" class="log-out-btn" onclick="event.preventDefault();this.closest('form').submit();">Çıkış Yap</a>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <!-- profile-edit-container-->
                                        <div class="profile-edit-container">
                                            <div class="profile-edit-header fl-wrap">
                                                <h4>Hesap Bilgilerim</h4>
                                            </div>
                                            <form method="post" action="{{route('update-profile',[$user->id])}}" class="custom-form">
                                              @put
                                                <label> isminiz <i class="fa fa-user-o"></i></label>
                                                <input type="text" name="name"  value="{{old('name',$user->name)}}">
                                                <label>Email Adres<i class="fa fa-envelope-o"></i>  </label>
                                                <input type="text" name="email" value="{{old('email',$user->email)}}">
                                                <label>Telefon<i class="fa fa-phone"></i>  </label>
                                                <input type="text" name="phone" value="{{old('phone'),$user->phone}}">
                                                <label>Resminiz<i class="fa-solid fa-image"></i>> </label>
                                                <input type="file" name="image" value="{{old('image'),$user->image}}">
                                                <button type="submit" href=""> Güncelle</button>
                                              </form>
                                            </div>
                                        </div>

                                </div>
                            </div>
                            <!--profile-edit-wrap end -->
                        </div>
                        <!--container end -->
                    </section>
                    <!-- section end -->

                    <!-- section end -->
                </div>
            </div>
            <!-- wrapper end -->
            <!--footer -->
            <footer class="main-footer dark-footer  ">
                <div class="container">
                    <div class="row">
                            <div class="footer-widget fl-wrap">
                                <h3>Hakkımızda</h3>
                                <div class="footer-contacts-widget fl-wrap">
                                    <p>Avcılar/İstanbul </p>
                                    <ul  class="footer-contacts fl-wrap">
                                        <li><span><i class="fa fa-envelope-o"></i> Mail :</span><a href="#" target="_blank">busesukusu@gmail.com</a></li>
                                        <li> <span><i class="fa fa-map-marker"></i> Adres :</span><a href="#" target="_blank">Avcılar</a></li>
                                        <li><span><i class="fa fa-phone"></i> Telefon :</span><a href="#">+532 585 47 5158</a></li>
                                    </ul>
                                </div>
                            </div>


                    </div>
                </div>
                <div class="sub-footer fl-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-widget">
                                    <img src="images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="copyright"> &#169; StockApp  2022 .  All rights reserved.</div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#" target="_blank" ><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-chrome"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-vk"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--footer end  -->
            <a class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
