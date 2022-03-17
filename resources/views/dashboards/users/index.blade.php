<!DOCTYPE HTML>
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
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <div class="header-search vis-header-search">
                        <div class="header-search-input-item">
                            <input type="text" placeholder="Keywords" value=""/>
                        </div>
                        <div class="header-search-select-item">
                            <select data-placeholder="All Categories" class="chosen-select" >
                                <option>All Categories</option>
                                <option>Shops</option>
                                <option>Hotels</option>
                                <option>Restaurants</option>
                                <option>Fitness</option>
                                <option>Events</option>
                            </select>
                        </div>
                        <button class="header-search-button" onclick="window.location.href='listing.html'">Search</button>
                    </div>
                    <div class="show-search-button"><i class="fa fa-search"></i> <span>Search</span></div>
                    <a href="dashboard-add-listing.html" class="add-list">Add Listing <span><i class="fa fa-plus"></i></span></a>
                    <div class="header-user-menu">
                        <div class="header-user-name">
                            <span><img src="images/avatar/1.jpg" alt=""></span>
                            Hello , Alisa
                        </div>
                        <ul>
                            <li><a href="dashboard-myprofile.html"> Edit profile</a></li>
                            <li><a href="dashboard-add-listing.html"> Add Listing</a></li>
                            <li><a href="dashboard-bookings.html">  Bookings  </a></li>
                            <li><a href="dashboard-review.html"> Reviews </a></li>
                            <li><a href="#">Log Out</a></li>
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
                                    <a href="#">Home <i class="fa fa-caret-down"></i></a>
                                    <!--second level -->
                                    <ul>
                                        <li><a href="index.html">Parallax Image</a></li>
                                        <li><a href="index2.html">Video</a></li>
                                        <li><a href="index3.html">Map</a></li>
                                        <li><a href="index4.html">Slideshow</a></li>
                                        <li><a href="index5.html">Slider</a></li>
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
                                    <h2>Üye Panel</h2>
                                    <div class="breadcrumbs"><a href="{{route('stockapp')}}">Anasayfa</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="fixed-bar fl-wrap">
                                            <div class="user-profile-menu-wrap fl-wrap">
                                                <!-- user-profile-menu-->
                                                <div class="user-profile-menu">
                                                    <h3>Kullanıcı</h3>
                                                    <ul>
                                                        <li><a href=""><i class="fa fa-user-o"></i> Profili Düzenle</a></li>
                                                        <li><a href="{{route('contact')}}"><i class="fa fa-envelope-o"></i> İletişim <span>3</span></a></li>
                                                        <li><a href=""><i class="fa fa-unlock-alt"></i>Şifreyi değiştir</a></li>
                                                    </ul>
                                                </div>
                                                <!-- user-profile-menu end-->
                                                <!-- user-profile-menu-->
                                                <div class="user-profile-menu">
                                                    <h3>Mağaza Panel</h3>
                                                    <ul>
                                                        <li><a href=""><i class="fa fa-th-list"></i> Mağaza Yönetim</a></li>
                                                        <li><a href=""> <i class="fa fa-calendar-check-o"></i> Mağaza oluştur</a></li>
                                                    </ul>
                                                </div>
                                                <!-- user-profile-menu end-->
                                                <form method="POST" action="{{ route('logout') }}" class="mb-0">
                                                    @csrf
                                                    <li class="nav-item">
                                                      <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();this.closest('form').submit();">
                                                        <span>Logout</span>
                                                      </a>
                                                    </li>
                                                  </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <!-- profile-edit-container-->
                                        <div class="profile-edit-container">
                                            <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                                <h4>Merhaba, <span>{{ Auth::user()->name}} </span></h4>
                                            </div>
                                            <div class="notification success fl-wrap">
                                                <a class="notification-close" href="#"><i class="fa fa-times"></i></a>
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
                                                        <p><i class="fa fa-check"></i> Your listing <a href="#">Luxury Restourant</a> has been approved! </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- dashboard-list end-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--profile-edit-wrap end -->
                        </div>
                        <!--container end -->
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
                                        <h3>Do You Have Questions ?</h3>
                                        <p>Lorem ipsum dolor sit amet, harum dolor nec in, usu molestiae at no.</p>
                                    </div>
                                    <div class="col-md-4"><a href="contacts.html" class="join-wrap-btn">Get In Touch <i class="fa fa-envelope-o"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                </div>
            </div>
            <!-- wrapper end -->
            <!--footer -->
            <footer class="main-footer dark-footer  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>About Us</h3>
                                <div class="footer-contacts-widget fl-wrap">
                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
                                    <ul  class="footer-contacts fl-wrap">
                                        <li><span><i class="fa fa-envelope-o"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                        <li> <span><i class="fa fa-map-marker"></i> Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                        <li><span><i class="fa fa-phone"></i> Phone :</span><a href="#">+7(111)123456789</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Our Last News</h3>
                                <div class="widget-posts fl-wrap">
                                    <ul>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Vivamus dapibus rutrum</a>
                                                <span class="widget-posts-date"> 21 Mar 09.05 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title=""> In hac habitasse platea</a>
                                                <span class="widget-posts-date"> 7 Mar 18.21 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Tortor tempor in porta</a>
                                                <span class="widget-posts-date"> 7 Mar 16.42 </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Our  Twitter</h3>
                                <div id="footer-twiit"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Subscribe</h3>
                                <div class="subscribe-widget fl-wrap">
                                    <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                    <div class="subcribe-form">
                                        <form id="subscribe">
                                            <input class="enteremail" name="email" id="subscribe-email" placeholder="Email" spellcheck="false" type="text">
                                            <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fa fa-rss"></i> Subscribe</button>
                                            <label for="subscribe-email" class="subscribe-message"></label>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-menu fl-wrap">
                                        <ul>
                                            <li><a href="#">Home </a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Listing</a></li>
                                            <li><a href="#">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
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
                                <div class="copyright"> &#169; Citybook  2018 .  All rights reserved.</div>
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
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>
    </body>
</html>
