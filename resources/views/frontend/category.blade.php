@extends('frontend.master')
@section('main')
@include('frontend.layout.menu')
@if(isset($newsTieuBieu) && sizeof($newsTieuBieu) > 0)
@foreach ($newsTieuBieu as $item)
    <section class="hero hero--alt hero--animated theme--white
    background--black
    " id="module-1073883919">
    <div class="hero__image focus--centre-centre">
        <img class="img-fluid" src="{{$item->bgr}}"  alt="">
    </div>
    <div class="hero__body">
        <h1 class="hero__title">{{$item->title_h1}}</h1>
    </div>
    </section>
@endforeach
@endif


<section class="text-block text-block--standalone             align--centre
  theme--white
  " id="module-1073883920">
  <div class="content text-block__content">
      @if(isset($aCategory))
        <h2>{{$aCategory->name}}</h2>
        <p>Green Center Villass mời bạn bước vào thế giới của sự sang trọng. Đây là lời mời độc quyền dành riêng cho một ít người. Bạn không chỉ được chiêm ngưỡng những mẫu xe thực sự tuyệt vời của chúng tôi, mà còn được tận hưởng thế giới hào nhoáng và sang trọng xung quanh chúng.</p>
      @endif
  </div>
</section>
<section class="car-grid" id="module-1073883921">
  <div class="car-grid__body">
    @if(isset($listNews) && sizeof($listNews) > 0)
        @foreach ($listNews as $item)
        <article class="car-grid__item">
            <a class="car-grid__link" href="{{url('/danh-muc'.'/'.$item->title_category.'/'.$item->id.'/'.$item->title)}}">
              <div class="car-grid__name">{{$item->title_h1}}</div>
              <img class="car-grid__image img_w370_h170" src="{{$item->bgr}}" alt="{{$item->title_h1}}">
            </a>
          </article>
        @endforeach
    @endif
  </div>
</section>
<section class="cta-module theme--white
  " id="module-1073883922">
  <a class="button button--primary
  cta-module__button" href="{{url($item->url_contact)}}">Li&#234;n hệ với ch&#250;ng t&#244;i</a>
</section>

@stop

