<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

        <title>Tiền Số Offline</title>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="/css/style.css" rel='stylesheet' type='text/css' />
        <script src="/js/jquery.min.js"></script>
        <!---- start-smoth-scrolling---->
        <script type="text/javascript" src="/js/move-top.js"></script>
        <script type="text/javascript" src="/js/easing.js"></script>
        <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
        <!-- Styles -->
    </head>
    <body>
        <!--header-top-starts-->
        <div class="header-top">
            <div class="container">
                <div class="head-main">
                    <a href="{{url('/')}}"><h2 class="logo">Tiền Số Offline.Com</h2></a>
                </div>
            </div>
        </div>
        <!--header-top-end-->
        <!--start-header-->
        <div class="header">
            <div class="container">
                <div class="head">
                <div class="navigation">
                     <span class="menu"></span>
                        <ul class="navig">
                            <li><a href="{{url('/')}}"  class="active">Trang Chủ</a></li>
                            @foreach ($category as $key=>$value )
                            <li><a href="{{route('danh-muc.show',[$value->id,'slug'=>Str::slug($value->title)])}}">{{$value->title}}</a></li>
                            @endforeach
                        </ul>
                </div>
                <div class="header-right">
                    <form action="{{url('tim-kiem')}}" method="get">
                        @csrf
                        <div class="search-bar">
                            <input type="text" value="" name="keywords" placeholder="Tìm Kiếm">
                            <input type="submit" value="">
                        </div>
                    </form>
                    <ul>
                        <li><a href="#"><span class="fb"> </span></a></li>
                    </ul>
                </div>
                    <div class="clearfix"></div>
                </div>
                </div>
            </div>
        <!-- script-for-menu -->
        <!-- script-for-menu -->
            <script>
                $("span.menu").click(function(){
                    $(" ul.navig").slideToggle("slow" , function(){
                    });
                });
            </script>
        <!-- script-for-menu -->
        <!--banner-starts-->
        <!--banner-end-->
        <!--about-starts-->
        @yield('content')
        <!--about-end-->
        <!--slide-starts-->
        <div class="slide">
            <div class="container">
                <div class="fle-xsel">
                <ul id="flexiselDemo3">
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="/images/s-1.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="/images/s-2.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="/images/s-3.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="/images/s-4.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="/images/s-5.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="banner-1">
                                <img src="/images/s-6.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                </ul>

                                 <script type="text/javascript">
                                    $(window).load(function() {

                                        $("#flexiselDemo3").flexisel({
                                            visibleItems: 5,
                                            animationSpeed: 1000,
                                            autoPlay: true,
                                            autoPlaySpeed: 3000,
                                            pauseOnHover: true,
                                            enableResponsiveBreakpoints: true,
                                            responsiveBreakpoints: {
                                                portrait: {
                                                    changePoint:480,
                                                    visibleItems: 2
                                                },
                                                landscape: {
                                                    changePoint:640,
                                                    visibleItems: 3
                                                },
                                                tablet: {
                                                    changePoint:768,
                                                    visibleItems: 3
                                                }
                                            }
                                        });

                                    });
                                    </script>
                                    <script type="text/javascript" src="/js/jquery.flexisel.js"></script>
                        <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!--slide-end-->
        <!--footer-starts-->
        <div class="footer">
            <div class="container">
                <div class="footer-text">
                    <p>© 2022    Coffee Break. All Rights Reserved | Design by  <a href="#" target="_blank">Me</a> </p>
                </div>
            </div>
        </div>
        <!--footer-end-->
    </body>
</html>
