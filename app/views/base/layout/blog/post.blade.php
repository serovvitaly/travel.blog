@extends('base.layout')

@section('layout')

  <div class="row-fluid profile-title">
    <div class="span10 pft-title"><h4>{{$post->translation_title}}</h4></div>
    <div class="span2 pft-actions"></div>
  </div>

  <div class="row-fluid">
    <div class="span9">
      <div>
        <img src="/vendor/jquery/plugins/wookmark/sample-images/image_1.jpg" alt="">
      </div>
      {{$post->translation_content_ru}}
    </div>
    <div class="span3">
      {{$content}}
    </div>
  </div>

@stop