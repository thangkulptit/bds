<html lang="vi-VN" dir="ltr" class="js geolocation localstorage csspointerevents hashchange supports no-touchevents fullscreen objectfit object-fit matchmedia cssanimations flexbox flexboxlegacy csstransforms csstransforms3d csstransitions" style="">
  <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <!-- Technical metadata -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <!-- Content metadata -->
    <title>{{$item['title_h1']}}</title>
    <meta name="robots" content="all, noydir, noodp">
    <meta name="description" content="{{$item['desc']}}">
    <meta name="title" content="{{$item['title_h1']}}">
    <meta name="author" content="">
    <meta name="priority" content="0">
    <base href="{{asset('/')}}">
    {{-- loading --}}
    <style>
        .wrap-loading {
            z-index: 99999;
            position: fixed;
            width: 100%;
            height: 100%;
            background: #222;
            opacity: 0.5;
            top: 0;

        }

        .lds-ring {
            top: 45%;
            left: 45%;
            display: inline-block;
            position: absolute;
            width: 64px;
            height: 64px;
        }

        .lds-ring div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 80px;
            height: 80px;
            margin: 6px;
            border: 6px solid #fff;
            border-radius: 50%;
            animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #fff transparent transparent transparent;
        }

        .lds-ring div:nth-child(1) {
            animation-delay: -0.45s;
        }

        .lds-ring div:nth-child(2) {
            animation-delay: -0.3s;
        }

        .lds-ring div:nth-child(3) {
            animation-delay: -0.15s;
        }

        @keyframes lds-ring {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
        body{
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
</style>
    <div class="wrap-loading">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <strong style="color: white; position: absolute; top: 20px; left: 20px;">Green Center Villass</strong>
        </div>
    </div>
    <!-- Favicons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <meta name="apple-mobile-web-app-title" content="{{$item['title_h1']}}">
    <meta name="application-name" content="Rolls-Royce Motor Cars">
    <meta name="msapplication-TileColor" content="#333333">
    <meta name="theme-color" content="#333333">
    <meta property="og:title" content="{{$item['title_h1']}}">
    <meta property="og:description" content="{{$item['desc']}}">
    <meta property="og:url" content="{{asset('/')}}">
    <meta name="twitter:title" content="{{$item['title_h1']}}">
    <meta name="twitter:description" content="{{$item['desc']}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Translation strings -->
    <script async="" src="js/import3.js"></script>
    <script>
      I18N = {
          DealerName: "Rolls-Royce Motor Cars Hanoi",
          DealerLocation: "Hanoi",
          Previous: "Hành đ&#244;̣ng g&#226;́p",
          Next: "B&#234;n cạnh",
          Close: " Ch&#226;̣n đường"
      }
    </script>
    <!-- Preload JavaScript -->
    <script src="js/import.js"></script>
    <script src="js/app.js"></script>
    
    <!-- Stylesheets -->
    <link href="css/import.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--<link href="css/bootstrap4.css" rel="stylesheet"> !--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Page title -->
    <title>Green Center Villass </title>
    <!-- Render section: header -->
    <!-- Google Tag Manager -->
    <script>
      (function (w, d, s, l, i) {
          w[l] = w[l] || []; w[l].push({
              'gtm.start':
              new Date().getTime(), event: 'gtm.js'
          });
          var f = d.getElementsByTagName(s)[0],
              j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
              'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-K8Z9HK9');
    </script>
    <!-- End Google Tag Manager -->
    <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>
  </head>
  <body id="top" class="">
    <input class="external-link-exception" id="exception0" name="exception0" type="hidden" value="pre-owned.rolls-roycemotorcars.com"><input class="external-link-exception" id="exception1" name="exception1" type="hidden" value="www.rolls-roycemotorcars.com">
    <!-- Google Tag Manager -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8Z9HK9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager -->
    <ul class="accessibility-links">
      <li><a href="#navigation">Navigation</a></li>
      <li><a href="#content">Content</a></li>
    </ul>
    @include('frontend/layout/menu')
    <div class="wrapper">
      <main id="content" role="main">
        @yield('main')
        {{-- @include('frontend/layout/above-footer') --}}
      </main>
      @include('frontend/layout/footer')
    </div>
    <div class="modal modal--valid">
      <div class="modal--overlay"></div>
      <div class="modal--content">
        <div class="text-content">
          <p>Xin ý rằng bạn hiện đang rời khỏi trang web chính thức của GreenCenterVillass, hãy nhấp vào bên dưới để chuyển đến một trang web bên ngoài.</p>
        </div>
        <div class="container">
          <button class="button button--primary" id="submit">Tiếp tục</button>
          <button class="button button--default" id="close">Hủy</button>
        </div>
      </div>
    </div>
    <nav class="menu menu--fixed menu--hidden" id="navigation" role="navigation" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
      <div class="menu__title">
        MENU
        <a href="#" class="menu__close"> Ch&amp;#226;̣n đường</a>
      </div>
      <ul class="menu__list menu__list--primary">
        @foreach($menu as $item)
          <li class="menu__item">
            <a class="menu__link" href="{{url('/danh-muc/'.$item->title)}}">{{$item->name}}</a>
          </li>
        @endforeach
        <li class="menu__item">
          <a class="menu__link" href="{{url('/lien-he')}}">Liên hệ</a>
        </li>
      </ul>
       <ul class="menu__list menu__list--secondary">
        <li class="menu__item">
          <a class="menu__link">PHÁP LÝ</a>
        </li>
        <li class="menu__item">
          <a class="menu__link">CHÍNH SÁCH COOKIE</a>
        </li>
      </ul> 
    </nav>
    <ul class="accessibility-links">
      <li><a href="#top">Top of Page</a></li>
    </ul>
    <!-- Postload Javascript -->
    <script src="js/import2.js"></script>
    <script>
      // $('.base-card__body').matchHeight({ property: 'min-height' });
      
      $(document).ready(function () {
          //fix height of media gallery box to allow for terms absolute bottom positioned
          var galleryMediaHeightFix = function () {
              var imgHeight = $('img.gallery-media__media').height();
              $('.matchHeight').css('height', imgHeight);
          }
          galleryMediaHeightFix();
      
          $(window).resize(function () {
              galleryMediaHeightFix();
          });
          $('.wrap-loading').css({ 'visibility': 'hidden' });
      });

      
    </script>
  </body>
</html>