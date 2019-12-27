@if(isset($item))
<section class="hero hero--alt hero--animated theme--white
background--black
" id="module-1073901603">
        <div class="hero__image focus--centre-centre">
            <img class="img-fluid" src="{{$item['bgr']}}"  alt="{{$item['title']}}" title="{{$item['title']}}">
        </div>

    <div class="hero__body">
        <h1 class="hero__title">{{$item['title']}}</h1>

            <a class="button button--primary
hero__cta" href="{{url($item['url_contact'])}}">Li&#234;n hệ với ch&#250;ng t&#244;i</a>
    </div>
</section>
@endif