@extends('frontend/master')

@section('main')
@include('frontend/layout/header')

@if(isset($item))
    <section class="text-block text-block--standalone align--centre theme--white" id="module-1073901604">
        <div class="content text-block__content">
            <h2>{{$item['title_h1']}}</h2>
            <p>{!!$item['desc']!!}</p>
        </div>
    </section>
@endif

<section class="cta-module theme--white
" id="module-1073901605">
        <a class="button button--primary
 cta-module__button" href="https://www.rolls-roycemotorcars-hanoi.vn/be-inspired/">Truyền cảm hứng</a>
</section>

@for($i = 1 ; $i <= 5 ; $i++ )
      
@if(isset($item['title'.$i],$item['text'.$i], $item['images'.$i])) 
<section data-carousel-gallery class="gallery-carousel theme--white
  " id="module-1073901606">
  <div class="gallery-carousel__body">
    <div class="gallery-carousel__slide">
     <figure class="gallery-media align--{{($i % 2 != 0) ? 'left' : 'right'}}">
        <picture>
          <!--[if IE 9]>
          <video style="display: none;">
            <![endif]-->

            <!--[if IE 9]>
          </video>
          <![endif]-->
        <img class="gallery-media__media img_h_w" src="{{$item['images'.$i]}}" alt="{{$item['title']}}">
        </picture>
        <figcaption class="gallery-media__caption matchHeight">
          <h3 class="gallery-media__title">
            <p>{{$item['title'.$i]}}</p>
          </h3>
          <div class="content gallery-media__content">
            <p>
            <p>{{$item['text'.$i]}}</p>
            </p> 
          </div>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
@endif
@endfor
<section class="text-block text-block--standalone align--centre
 theme--white
" id="module-1073901610">
    <div class="content text-block__content">
        <h2>{{$item['title_h1']}}</h2>
<p>{!!$item['content']!!}</p>
    </div>
</section>
{{-- <section data-large-carousel class="large-carousel theme--white
" id="module-1073901611">
    <div class="large-carousel__carousel">
        <div class="large-carousel__body">
                <div class="large-carousel__slide">
                    <picture>
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                        <source media="(min-width: 1440px)" srcset="/media/1004/porto_cervo_dawn_edit.jpg?center=0.72666666666666668,0.48663101604278075&amp;mode=crop&amp;width=2000&amp;height=800&amp;rnd=131769072850000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 1100px)" srcset="/media/1004/porto_cervo_dawn_edit.jpg?center=0.72666666666666668,0.48663101604278075&amp;mode=crop&amp;width=1440&amp;height=576&amp;rnd=131769072850000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 760px)" srcset="/media/1004/porto_cervo_dawn_edit.jpg?center=0.72666666666666668,0.48663101604278075&amp;mode=crop&amp;width=1100&amp;height=440&amp;rnd=131769072850000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 660px)" srcset="/media/1004/porto_cervo_dawn_edit.jpg?center=0.72666666666666668,0.48663101604278075&amp;mode=crop&amp;width=760&amp;height=532&amp;rnd=131769072850000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 0px)" srcset="/media/1004/porto_cervo_dawn_edit.jpg?center=0.72666666666666668,0.48663101604278075&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769072850000000&amp;quality=75&amp;format=jpg">
                        <!--[if IE 9]></video><![endif]-->
                        <img class="gallery-media__media" srcset="/media/1004/porto_cervo_dawn_edit.jpg?center=0.72666666666666668,0.48663101604278075&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769072850000000&amp;quality=75&amp;format=jpg" alt="">
                    </picture>
                </div>
                <div class="large-carousel__slide">
                    <picture>
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                        <source media="(min-width: 1440px)" srcset="/media/1005/porto-cervo-wraith-black-badge.jpg?anchor=center&amp;mode=crop&amp;width=2000&amp;height=800&amp;rnd=131769075150000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 1100px)" srcset="/media/1005/porto-cervo-wraith-black-badge.jpg?anchor=center&amp;mode=crop&amp;width=1440&amp;height=576&amp;rnd=131769075150000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 760px)" srcset="/media/1005/porto-cervo-wraith-black-badge.jpg?anchor=center&amp;mode=crop&amp;width=1100&amp;height=440&amp;rnd=131769075150000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 660px)" srcset="/media/1005/porto-cervo-wraith-black-badge.jpg?anchor=center&amp;mode=crop&amp;width=760&amp;height=532&amp;rnd=131769075150000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 0px)" srcset="/media/1005/porto-cervo-wraith-black-badge.jpg?anchor=center&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769075150000000&amp;quality=75&amp;format=jpg">
                        <!--[if IE 9]></video><![endif]-->
                        <img class="gallery-media__media" srcset="/media/1005/porto-cervo-wraith-black-badge.jpg?anchor=center&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769075150000000&amp;quality=75&amp;format=jpg" alt="">
                    </picture>
                </div>
                <div class="large-carousel__slide">
                    <picture>
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                        <source media="(min-width: 1440px)" srcset="/media/1006/private-jet-ghost-ewb_edit.jpg?center=0.65,0.50267379679144386&amp;mode=crop&amp;width=2000&amp;height=800&amp;rnd=131769075180000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 1100px)" srcset="/media/1006/private-jet-ghost-ewb_edit.jpg?center=0.65,0.50267379679144386&amp;mode=crop&amp;width=1440&amp;height=576&amp;rnd=131769075180000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 760px)" srcset="/media/1006/private-jet-ghost-ewb_edit.jpg?center=0.65,0.50267379679144386&amp;mode=crop&amp;width=1100&amp;height=440&amp;rnd=131769075180000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 660px)" srcset="/media/1006/private-jet-ghost-ewb_edit.jpg?center=0.65,0.50267379679144386&amp;mode=crop&amp;width=760&amp;height=532&amp;rnd=131769075180000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 0px)" srcset="/media/1006/private-jet-ghost-ewb_edit.jpg?center=0.65,0.50267379679144386&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769075180000000&amp;quality=75&amp;format=jpg">
                        <!--[if IE 9]></video><![endif]-->
                        <img class="gallery-media__media" srcset="/media/1006/private-jet-ghost-ewb_edit.jpg?center=0.65,0.50267379679144386&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769075180000000&amp;quality=75&amp;format=jpg" alt="">
                    </picture>
                </div>
                <div class="large-carousel__slide">
                    <picture>
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                        <source media="(min-width: 1440px)" srcset="/media/1001/elegance-ghost-ewb.jpg?anchor=center&amp;mode=crop&amp;width=2000&amp;height=800&amp;rnd=131769069380000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 1100px)" srcset="/media/1001/elegance-ghost-ewb.jpg?anchor=center&amp;mode=crop&amp;width=1440&amp;height=576&amp;rnd=131769069380000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 760px)" srcset="/media/1001/elegance-ghost-ewb.jpg?anchor=center&amp;mode=crop&amp;width=1100&amp;height=440&amp;rnd=131769069380000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 660px)" srcset="/media/1001/elegance-ghost-ewb.jpg?anchor=center&amp;mode=crop&amp;width=760&amp;height=532&amp;rnd=131769069380000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 0px)" srcset="/media/1001/elegance-ghost-ewb.jpg?anchor=center&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769069380000000&amp;quality=75&amp;format=jpg">
                        <!--[if IE 9]></video><![endif]-->
                        <img class="gallery-media__media" srcset="/media/1001/elegance-ghost-ewb.jpg?anchor=center&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769069380000000&amp;quality=75&amp;format=jpg" alt="">
                    </picture>
                </div>
                <div class="large-carousel__slide">
                    <picture>
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                        <source media="(min-width: 1440px)" srcset="/media/1002/fux-front-a_edit.jpg?center=0.40294117647058825,0.49176470588235294&amp;mode=crop&amp;width=2000&amp;height=800&amp;rnd=131915979710000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 1100px)" srcset="/media/1002/fux-front-a_edit.jpg?center=0.40294117647058825,0.49176470588235294&amp;mode=crop&amp;width=1440&amp;height=576&amp;rnd=131915979710000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 760px)" srcset="/media/1002/fux-front-a_edit.jpg?center=0.40294117647058825,0.49176470588235294&amp;mode=crop&amp;width=1100&amp;height=440&amp;rnd=131915979710000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 660px)" srcset="/media/1002/fux-front-a_edit.jpg?center=0.40294117647058825,0.49176470588235294&amp;mode=crop&amp;width=760&amp;height=532&amp;rnd=131915979710000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 0px)" srcset="/media/1002/fux-front-a_edit.jpg?center=0.40294117647058825,0.49176470588235294&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131915979710000000&amp;quality=75&amp;format=jpg">
                        <!--[if IE 9]></video><![endif]-->
                        <img class="gallery-media__media" srcset="/media/1002/fux-front-a_edit.jpg?center=0.40294117647058825,0.49176470588235294&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131915979710000000&amp;quality=75&amp;format=jpg" alt="">
                    </picture>
                </div>
                <div class="large-carousel__slide">
                    <picture>
                        <!--[if IE 9]><video style="display: none;"><![endif]-->
                        <source media="(min-width: 1440px)" srcset="/media/1003/m-kazem-wraith.jpg?anchor=center&amp;mode=crop&amp;width=2000&amp;height=800&amp;rnd=131769072790000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 1100px)" srcset="/media/1003/m-kazem-wraith.jpg?anchor=center&amp;mode=crop&amp;width=1440&amp;height=576&amp;rnd=131769072790000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 760px)" srcset="/media/1003/m-kazem-wraith.jpg?anchor=center&amp;mode=crop&amp;width=1100&amp;height=440&amp;rnd=131769072790000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 660px)" srcset="/media/1003/m-kazem-wraith.jpg?anchor=center&amp;mode=crop&amp;width=760&amp;height=532&amp;rnd=131769072790000000&amp;quality=75&amp;format=jpg">
                        <source media="(min-width: 0px)" srcset="/media/1003/m-kazem-wraith.jpg?anchor=center&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769072790000000&amp;quality=75&amp;format=jpg">
                        <!--[if IE 9]></video><![endif]-->
                        <img class="gallery-media__media" srcset="/media/1003/m-kazem-wraith.jpg?anchor=center&amp;mode=crop&amp;width=660&amp;height=462&amp;rnd=131769072790000000&amp;quality=75&amp;format=jpg" alt="">
                    </picture>
                </div>
        </div>
        <div class="large-carousel__controls large-carousel__controls--large"></div>
    </div>
    <div class="large-carousel__menu">
        <div class="large-carousel__controls large-carousel__controls--small"></div>
        <div class="large-carousel__status"></div>
        <a class="fullscreen-icon large-carousel__fullscreen" href="/" title="Toggle Fullscreen">Toggle Fullscreen</a>
    </div>
</section> --}}
@endsection

