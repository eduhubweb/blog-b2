


<!DOCTYPE html>
<html>
<head>
    @include('layouts.theme1._head')
</head>

<body class="theme-red">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #Float icon -->
<ul id="f-menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
      @include('layouts.theme1._hoverSocialButton')
</ul>
<!-- Search  -->
<div class="search-bar">
    <div class="search-icon"> <i class="zmdi zmdi-search"></i> </div>
    <input type="text" placeholder="Search...">
    <div class="close-search"> <i class="zmdi zmdi-close"></i> </div>
</div>
<!-- Top Bar -->
<nav class="navbar">
    @include('layouts.theme1._topNav')
</nav>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    @include('layouts.theme1._leftSideNav')
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    @include('layouts.theme1._rightSideNav')
</aside>

<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        @yield('content')
    </div>
</section>
<section class="content home">
<div class="container-fluid">
     @include('layouts.theme1._footer')
</div>
 </section>
@include('layouts.theme1._scripts')

</body>
</html>
