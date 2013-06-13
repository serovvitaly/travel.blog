@extends('base.layout')

@section('layout')
<div class="row">

  <div class="span3 profile-sider">
    <div class="pfs-wrapper">
    
    </div>
  </div>
  <div class="span9">
      <div class="row-fluid profile-title">
        <div class="span10 pft-title"><h4>{{$profile_title}}</h4></div>
        <div class="span2 pft-actions"></div>
      </div>
      
      <div class="row-fluid profile-header">
        <div class="span6 pfh-panel">
          <h3>Сергей, 24</h3>
          <ul style="display: inline-block;">
            <li>Стрелец</li>
            <li>Москва</li>
          </ul>
        </div>
        <div class="span3 pfh-panel">
          <ul>
            <li>Просмотров</li>
            <li>Лайков</li>
            <li>Был на сайте</li>
          </ul>
        </div>
        <div class="span3 pfh-panel">
          <img src="http://cs406922.vk.me/u185881393/a_3ee86dfd.jpg" alt="">
        </div>
      </div>

      <div class="row-fluid profile-body">
        <div class="span6" id="moments">
          
          <ul class="timeline">
            <li class="tl-item from">
              <span class="dot"></span>
              <p class="message">Привет!</p>
            </li>
            <li class="tl-item to">
              <span class="dot"></span>
              <p class="message">Привет, как дела?</p>
            </li>
            <li class="tl-item from">
              <span class="dot"></span>
              <p class="message">на прошлой неделе я ходила в цирк, там было столько клоуном, жуть...</p>
            </li>
            <li class="tl-item to">
              <span class="dot"></span>
              <p class="message">прикольно!)))</p>
            </li>
          </ul>
            
        </div>
        <div class="span6 pf-content">
          <fieldset>
            <legend>Типаж</legend>
            <ul>
              <li>Рост - 180 см.</li>
              <li>Вес - 65 кг.</li>
              <li>Телосложение - спортивное</li>
              <li>Цвет волос - брюнет</li>
              <li>Языка - английский</li>
            </ul>
          </fieldset>
          <fieldset>
            <legend>О себе</legend>
            <ul>
              <li>Режим дня - сова</li>
              <li>Отношения - свободна</li>
              <li>Дети - когда нибудь</li>
              <li>Доход - средний</li>
              <li>Сфера деятельности - менеджер</li>
              <li>Иностранными языками - английский</li>
              <li>Жилищные условия - живу с родителями</li>
              <li>Курение - не курю</li>
              <li>Алкоголь - не пью</li>
            </ul>
          </fieldset>
          <fieldset>
            <legend>Увлечения</legend>
            <ul>
              <li>Спорт</li>
              <li>Музыка</li>
              <li>Кино</li>
            </ul>
          </fieldset>
        </div>
      </div>  
  </div>


  
</div>
@stop