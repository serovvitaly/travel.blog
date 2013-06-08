@extends('base.layout')

@section('layout')

  <div style="border: 1px solid #D3D3D3; width: 50px; height: 300px; position: fixed; top: 40px; left: 0; background: #FFF;"></div>

  <div class="row" style="position: relative; margin: 44px 50px 10px;" id="wookmark-content">
      @foreach ($posts as $post)
        <div class="span3 wookmark-item">
        
          <div>
            <img src="/vendor/jquery/plugins/wookmark/sample-images/image_5.jpg" alt="">
          </div>
          
          <div class="plane-text">
            {{ $post->translation_title }}
          </div>
          <div class="plane-bottom">
            2 комментария
          </div>
        
        </div>
      @endforeach

      {{$content}}
      
  </div>

@stop