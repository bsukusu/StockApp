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
        <link rel="shortcut icon" href={{"images/favicon.ico"}}>
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
                        <a href=""><img src="{{asset('images/logo.png')}}" alt=""></a>
                    </div>
                    <div class="header-user-menu">
                        <div class="header-user-name">
                            <span><img src="" alt=""></span> </img>
                             {{auth()->user()->name}}
                        </div>
                        <ul>
                            <li><a href="{{route('user-profile')}}"> Profili güncelle</a></li>
                            <form method="POST" action="{{ route('logout') }}" class="mb-0">
                              @csrf
                              <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">
                                  <span>Çıkış</span>
                                </a>
                        </ul>
                    </div>

                    <!--  navigation -->
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{route('stockapp')}}">Anasayfa</a>

                                </li>
                                <li>
                                    <a href="#">İlanlar </a>
                                    <!--second level end-->
                                </li>
                            </ul>
                        </nav>
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
                                    <h2>Üye Panel</h2>
                                    <div class="breadcrumbs"><a href="{{route('stockapp')}}">Anasayfa</a><span>Panel</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="fixed-bar fl-wrap">
                                            <div class="user-profile-menu-wrap fl-wrap">
                                                <!-- user-profile-menu-->
                                                <div class="user-profile-menu">
                                                    <h3>Ana menü</h3>
                                                    <ul>
                                                    	<li><a href="{{route('user.dashboard')}}" class="user-profile-act"><i class="fa fa-gears"></i>Dashboard</a></li>
                                                        <li><a href="{{route('user-profile')}}"><i class="fa fa-user-o"></i> Profili güncelle</a></li>
                                                        <li><a href="{{route('contact')}}"><i class="fa fa-envelope-o"></i> Mesaj Bırak </a></li>
                                                        <li><a href="{{route('reset')}}"><i class="fa fa-unlock-alt"></i>Şifreyi Değiştir</a></li>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <!-- profile-edit-container-->
                                        <div class="profile-edit-container">
                                            <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                                <h4> Hoşgeldin <span> {{auth()->user()->name}} </span></h4>
                                            </div>

                                        <div class="dashboard-list-box fl-wrap activities">
                                            <div class="dashboard-header fl-wrap">
                                                <h3>Bildirimler</h3>
                                            </div>
                                            <!-- dashboard-list end-->
                                            <div class="dashboard-list">
                                                <div class="dashboard-message">
                                                    <span class="new-dashboard-item"><i class="fa fa-times"></i></span>

                                                    <div class="dashboard-message-text">
                                                        <form method="post" action="{{route('admin')}}">
                                                        @csrf
                                                        <button class="btn btn-success" type="submit"> <span>Admin ol </span> </button>
                                                      </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--profile-edit-wrap end -->
                        </div>
                        <!--container end -->
                    </section>

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
      </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src={{asset("js/jquery.min.js")}}></script>
        <script type="text/javascript" src={{asset("js/plugins.js")}}></script>
        <script type="text/javascript" src={{asset("js/scripts.js")}}></script>
    </body>
</html>
