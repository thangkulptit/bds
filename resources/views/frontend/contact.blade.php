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
@if(isset($item))
    <section class="text-block text-block--standalone align--centre theme--white" id="module-1073901604">
        <div class="content text-block__content">
            <h2>{{$item['title_h1']}}</h2>
            <p>{{$item['desc']}}</p>
        </div>
    </section>
@endif


@endsection

