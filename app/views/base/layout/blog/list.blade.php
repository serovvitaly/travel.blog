@extends('base.layout')

@section('layout')

  <div style="border: 1px solid #D3D3D3; width: 50px; height: 300px; position: fixed; top: 40px; left: 0; background: #FFF;"></div>

  <div class="row" style="position: relative; margin: 50px 50px 10px;" id="wookmark-content">
      @foreach ($items as $item)
        <div class="span3 wookmark-item">
        
          <div>
            <img src="/skins/base/img/4f788976f73cf34a9e4a1f0fa5ceae38.jpg" alt="">
          </div>
          
          <div class="plane-text">
            {{ $item->translation_title }}
          </div>
          <div class="plane-bottom">
            2 комментария
          </div>
        
        </div>
      @endforeach

      {{$content}}
      
  </div>

@stop