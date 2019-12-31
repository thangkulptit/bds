@extends('frontend.master')

@section('main')
<section class="hero hero--alt hero--animated theme--white
background--grey
" id="module-1073883242">
<div class="video-hero__player">
  <div class="videowrap-container" id="video-1073883242">
    <div style="display: block; position: relative; max-width: 100%;">
      <iframe style="width: 100%; height: 100%; position: absolute; top: 0px; bottom: 0px; right: 0px; left: 0px;" src="https://www.youtube.com/embed/IKZEmLvYVF0?&autoplay=1"
      width="560" height="315" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
      {{-- <div id="videoContainer-1073883242" style="padding-top: 56.25%;">
        <iframe style="width: 100%; height: 100%; position: absolute; top: 0px; bottom: 0px; right: 0px; left: 0px;" src="//players.brightcove.net/1634657725001/ByQDUBdxb_default/index.html?videoId=6101424516001&amp;autoplay&amp;muted&amp;playsinline&amp;preload/" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen=""></iframe></div>
    </div> --}}
  </div>
  <div id="desktop-vid-title" class="hero__body align--centre-mobile-only">
  </div>
</div>

@if(isset($newsTieuBieu) && sizeof($newsTieuBieu) > 0)
@foreach ($newsTieuBieu as $item)
<div class="hero__body">
  <h1 class="hero__title">
    <p><span>{{$item->title}}</span><br><span></span></p>
  </h1>
  <a class="button button--primary
    hero__cta" href="{{url('/danh-muc'.'/'.$item->title_category.'/'.$item->id.'/'.$item->title)}}">Khám phá thêm</a>
</div>
@endforeach

@endif
</section>
<nav class="link-block link-block--overlay">
  @if(isset($arrSetting) && sizeof($arrSetting) > 0)
    @foreach ($arrSetting as $item)
    <a class="link-block__item" href="{{$item->link}}">
      <div class="link-block__body">
      <strong class="link-block__title">{{$item->title}}</strong>
        <div class="link-block__content">{!!$item->desc!!}</div>
      </div>
    </a>
    @endforeach
  @endif
</nav>
@if(isset($newsTieuBieu) && sizeof($newsTieuBieu) > 0)
  @foreach ($newsTieuBieu as $item)
  <section class="hero hero--alt theme--white  background--black  hero--loaded" id="module-1074114213">
    <div class="hero__image focus--centre-centre orientation--landscape">
    <img class="img-fluid" src="{{$item->bgr}}"  title="{{$item->title_h1}}" alt="{{$item->title_h1}}">
    </div>
    <div class="hero__body">
      <h1 class="hero__title">
        <p><span>{{$item->title_h1}}</span></p>
      </h1>
      <a class="button button--primary
        hero__cta" href="{{url('/danh-muc'.'/'.$item->title_category.'/'.$item->id.'/'.$item->title)}}">Khám phá thêm</a>
    </div>
  </section>
  @endforeach
@endif
<section class="feature-block" id="module-1073883244">
  @if(isset($arrHotNews) && sizeof($arrHotNews) > 0)
  @foreach ($arrHotNews as $item)
  <div class="feature-block__item">
    <div class="feature-card">
      <a class="feature-card__link" href="{{url('/danh-muc'.'/'.$item->title_category.'/'.$item->id.'/'.$item->title)}}">
        <picture>
          <!--[if IE 9]>
          <video style="display: none;">
            <![endif]-->

            <!--[if IE 9]>
          </video>
          <![endif]-->
         <img class="feature-card__image" src="{{$item->bgr}}" alt="{{$item->title_h1}}">
        </picture>
        <div class="feature-card__body">
          <strong class="feature-card__title">{{$item->title_h1}}</strong>
          <div class="content feature-card__content">
            <p><span>{!!$item->desc!!}</span></p>
          </div>
        </div>
      </a>
    </div>
  </div>
  @endforeach
  @endif
</section>
<section data-carousel-cards="" class="card-carousel theme--grey
" id="module-1073978963">
<h1 class="card-carousel__title">TIN TỨC</h1>
<div class="card-carousel__body slick-initialized slick-slider">
  <div aria-live="polite" class="slick-list draggable">
    <div class="slick-track" style="opacity: 1; width: 3429px; transform: translate3d(0px, 0px, 0px);" role="listbox">
      @if (isset($arrNews) && sizeof($arrNews) > 0) 
          @foreach ($arrNews as $i => $item)
            <div id="slide-news-{{$i}}" class="card-carousel__slide slick-slide slick-current {{$i < 4 ? 'slick-active' : ''}}" tabindex="{{$i < 4 ? 0 : 1}}" role="option" aria-describedby="slick-slide{{10 + $i}}" style="width: 381px;" aria-hidden="true">
              <article class="news-card">
                <a class="news-card__link" href="{{url('/danh-muc'.'/'.$item->title_category.'/'.$item->id.'/'.$item->title)}}" tabindex="{{$i < 4 ? 0 : 1}}">
                <img class="news-card__image custom-img-news" src="{{$item->bgr}}" alt="">
                  <div class="news-card__body">
                    <h1 class="news-card__title">{{$item->title_h1}}</h1>
                    <div class="news-card__content">
                      <p>{!!$item->desc!!}</p>
                    </div>
                  </div>
                </a>
              </article>
            </div>
          @endforeach
      @endif
    </div>
  </div>
</div>
<div class="card-carousel__controls" style="top: 276.5px;">
  <button type="button" id="arrow_left" style="display: none" class="slick-prev slick-arrow">Hành động gấp</button>
  <button id="arrow_right" type="button" class="slick-next slick-arrow" aria-disabled="false" style="display: block;">Bên cạnh</button>
</div>
</section>
@stop