@extends('frontend/master')

@section('main')
@include('frontend/layout/header')

@if(isset($item))
    <section class="text-block text-block--standalone align--centre theme--white" id="module-1073901604">
        <div class="content text-block__content">
            <h2>{{$item['title']}}</h2>
            <p>{{$item['desc']}}</p>
        </div>
    </section>
@endif

<section class="cta-module theme--white
" id="module-1073901605">
        <a class="button button--primary
 cta-module__button" href="https://www.rolls-roycemotorcars-hanoi.vn/be-inspired/">Truyền cảm hứng</a>
</section>

<section data-carousel-gallery class="gallery-carousel theme--white
  " id="module-1073901606">
  <div class="gallery-carousel__body">
    <div class="gallery-carousel__slide">
      @if(isset($item['title1'],$item['text1'], $item['images1'])) 
      <figure class="gallery-media align--left">
        <picture>
          <!--[if IE 9]>
          <video style="display: none;">
            <![endif]-->
            <source media="(min-width: 1650px)" srcset="/media/1009/veneer-18.jpg?anchor=center&amp;mode=crop&amp;width=1200&amp;height=840&amp;rnd=131769072860000000&amp;quality=75&amp;format=jpg">
            <source media="(min-width: 1440px)" srcset="/media/1009/veneer-18.jpg?anchor=center&amp;mode=crop&amp;width=990&amp;height=693&amp;rnd=131769072860000000&amp;quality=75&amp;format=jpg">
            <source media="(min-width: 1100px)" srcset="/media/1009/veneer-18.jpg?anchor=center&amp;mode=crop&amp;width=760&amp;height=532&amp;rnd=131769072860000000&amp;quality=75&amp;format=jpg">
            <source media="(min-width: 760px)" srcset="/media/1009/veneer-18.jpg?anchor=center&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769072860000000&amp;quality=75&amp;format=jpg">
            <source media="(min-width: 660px)" srcset="/media/1009/veneer-18.jpg?anchor=center&amp;mode=crop&amp;width=760&amp;height=532&amp;rnd=131769072860000000&amp;quality=75&amp;format=jpg">
            <source media="(min-width: 0px)" srcset="/media/1009/veneer-18.jpg?anchor=center&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769072860000000&amp;quality=75&amp;format=jpg">
            <!--[if IE 9]>
          </video>
          <![endif]-->
         <img class="gallery-media__media" src="{{$item['images1']}}" srcset="/media/1009/veneer-18.jpg?anchor=center&amp;mode=crop&amp;width=990&amp;height=693&amp;rnd=131769072860000000&amp;quality=75&amp;format=jpg" alt="">
        </picture>
        <figcaption class="gallery-media__caption matchHeight">
          <h3 class="gallery-media__title">
            <p>{{$item['title1']}}</p>
          </h3>
          <div class="content gallery-media__content">
            <p>
            <p>{{$item['text1']}}</p>
            </p> 
          </div>
        </figcaption>
      </figure>
      @endif
    </div>
  </div>
</section>
@endsection