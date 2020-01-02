@extends('frontend/master')

@section('main')
@include('frontend/layout/header')
<div class="map">
    <div id="googleMap" style="width:100%;height:600px;"></div>

    <script>
        function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(21.040190,105.774490),
            zoom:16,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSxLoeVH330_x1JYvbWXnNmGFAKFKOPeE&callback=myMap">
    </script>
</div>
@if(isset($contact))
<section class="text-block text-block--standalone align--centre theme--white" id="module-1073901604">
    <div class="content text-block__content">
        <h2>{{$contact['title']}}</h2>
        <p>{!!$contact['desc']!!}</p>
    </div>
</section>
@endif

<section class="card-grid theme--grey
" id="module-33066">
    <header class="text-block card-grid__header">
        <div class="text-block__title">
            {{$contact['gap_go_doi_ngu_title']}}
        </div>
    </header>
    <div class="card-grid__body">
        <div class="card-grid__item">

            <article class="base-card base-card--location">
                <img class="base-card__image" src="{{$contact['list_img']['0']}}" alt="{{$contact['title']}}" />

                <div class="base-card__body">
                    <h1 class="base-card__title">Showroom</h1>
                    <div class="content base-card__content">
                        <p><strong>Green center Villass Hanoi</strong>
                            <br />{{$contact['address']}}
                        </p>

                        <p>
                            <span>Điện thoại:</span>
                            <span class="dealer-number">
                                <a href="tel:+{{$contact['phone']}}">{{$contact['phone']}}</a>
                            </span>
                        </p>
                    </div>
                    <h1 class="base-card__title"></h1>
                    <div class="content base-card__content">
                        <p><strong><br />Giờ mở cửa<br /></strong>
                            <br />
                            {{$contact['hour_online']}}
                    </div>
                </div>
                <footer class="base-card__footer">
                    <span style="cursor: pointer;" class="base-card__cta showBanDo">Xem bản đồ</span>
                </footer>
                <script>
                    var body = $("html, body");
                    $('.showBanDo').click(function(){
                        body.stop().animate({scrollTop:0}, 500, 'swing', function() { 
                     });
                    });
                    
                </script>

            </article>
        </div>
    </div>
</section>

<section class="text-block text-block--standalone                 theme--white
" id="module-1073901639">
    <div class="text-block__title">
        Li&#234;n hệ với ch&#250;ng t&#244;i
    </div>
    <div class="content text-block__content">
        <p>Nếu bạn muốn phản hồi về c&#225;c mẫu biệt thự hoặc dịch vụ của ch&#250;ng t&#244;i, đặt c&#226;u hỏi hay
            y&#234;u cầu th&#244;ng tin, xin vui l&#242;ng giữ li&#234;n hệ</p>
    </div>
</section>

<section class="card-grid theme--grey
" id="module-35100">
    <header class="text-block card-grid__header">
        <div class="text-block__title">
            {{$contact['gap_go_doi_ngu_title']}}
        </div>
        <div class="content text-block__content">
            {{$contact['gap_go_doi_ngu_desc']}}
        </div>
    </header>

    <div class="card-grid__body">
        @for($i = 0 ; $i < sizeof($contact['list_img']) ; $i++) <div class="card-grid__item">
            <article class="base-card">
                <img class="base-card__image" style="width: 400px; height: 267px;" src="" alt="">
                <div class="base-card__body">
                    <h1 class="base-card__title">{{$contact['list_name'][$i]}}</h1>
                    <div class="base-card__subtitle">{!!($contact['list_desc'][$i])!!} </div>
                    <div class="content base-card__content">

                    </div>
                    <div class="content base-card__content">
                    </div>

                    <footer class="base-card__footer">
                        Liên hệ ngay: {{$contact['phone']}}
                    </footer>
                </div>
            </article>
    </div>
    @endfor

    </div>
</section>


@endsection