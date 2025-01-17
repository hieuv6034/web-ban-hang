<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('theme_admin/css/bootstrap.min.css') }}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('theme_admin/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{asset('theme_admin/css/style-responsive.css') }}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('theme_admin/css/font.css') }}" type="text/css"/>
    <link href="{{asset('theme_admin/css/font-awesome.cs') }}s" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('theme_admin/css/morris.css') }}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('theme_admin/css/monthly.css') }}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('theme_admin/js/jquery2.0.3.min.js') }}"></script>
</head>
<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="admin" class="logo">
                    Admin
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->

                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{asset('theme_admin/images/2.png')}}">
                            <span class="username">John Doe</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Thông tin</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Cài đặt</a></li>
                            <li><a href="{{URL::to ('/logout') }}"><i class="fa fa-key"></i> Đăng xuất</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="{{URL::to ('/admin') }}}">
                                <i class="fa fa-dashboard"></i>
                                <span>Tổng quan</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Danh mục sản phẩm</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('admin.get.list.category') }}">Danh sách danh mục</a></li>
                                <li><a href="{{ route('admin.get.create.category') }}">Thêm danh mục sản phẩm</a></li>
                                
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Sản phẩm</span>
                            </a>
                            <ul class="sub">
                              <li><a href="{{ route('admin.get.list.product') }}">Danh sách sản phẩm</a></li>
                              <li><a href="{{ route('admin.get.create.product') }}">Thêm sản phẩm</a></li>
                          </ul>
                      </li>
                      <!-- <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Danh mục sản phẩm</span>
                        </a>
                        <ul class="sub">
                          <li><a href="{{ URL::to('/add-category-product') }}">Thêm danh mục sản phẩm</a></li>
                          <li><a href="{{ URL::to('/all-category-product') }}">Danh sách sản phẩm</a></li>
                        </ul>
                  </li> -->

              </ul>            </div>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
         <section class="wrapper">
           @yield('content')


       </section>

   </section>
   <!--main content end-->
</section>

<script src="{{asset('theme_admin/js/bootstrap.js') }}"></script>
<script src="{{asset('theme_admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{asset('theme_admin/js/scripts.js') }}"></script>
<script src="{{asset('theme_admin/js/jquery.slimscroll.js') }}"></script>
<script src="{{asset('theme_admin/js/jquery.nicescroll.j') }}s"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('theme_admin/js/jquery.scrollTo.js') }}"></script>
<!-- morris JavaScript -->  
<script>
   $(document).ready(function() {
    //BOX BUTTON SHOW AND CLOSE
    jQuery('.small-graph-box').hover(function() {
        jQuery(this).find('.box-button').fadeIn('fast');
    }, function() {
        jQuery(this).find('.box-button').fadeOut('fast');
    });
    jQuery('.small-graph-box .box-close').click(function() {
        jQuery(this).closest('.small-graph-box').fadeOut(200);
        return false;
    });

      //CHARTS
      function gd(year, day, month) {
       return new Date(year, month - 1, day).getTime();
   }
});
</script>
<!-- calendar -->
<script type="text/javascript" src="{{asset('theme_admin/js/monthly.js') }}"></script>
<script type="text/javascript">
  $(window).load( function() {

   $('#mycalendar').monthly({
    mode: 'event',

});

   $('#mycalendar2').monthly({
    mode: 'picker',
    target: '#mytarget',
    setWidth: '250px',
    startHidden: true,
    showTrigger: '#mytarget',
    stylePast: true,
    disablePast: true
});

   switch(window.location.protocol) {
      case 'http:':
      case 'https:':
    // running on a server, should be good.
    break;
    case 'file:':
    alert('Just a heads-up, events will not work when run locally.');
}

});
</script>

<script src="{{asset('theme_admin/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('theme_admin/ckfinder/ckfinder.js')}}"></script>
<!-- //calendar -->
</body>
</html>
