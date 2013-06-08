<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
  
  <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/skins/base/css/styles.css">
  
</head>
<body>

  <div class="container-fluid">
  
    @include('base.component.topmenu2')
  
    
  
    <!--div class="container content-conteiner"-->
    <div class="container-fluid" id="scroll-container">
    @section('layout')
      <!-- layouts -->
    @show
      <div class="loading"></div>
    </div>
  </div>

  <script src="/vendor/jquery/jquery-1.10.1.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="/vendor/jquery/plugins/scroll-pagination/scrollpagination.js"></script>
  <script src="/vendor/jquery/plugins/wookmark/jquery.wookmark.min.js"></script>
  <script src="/skins/base/js/common.js"></script>
  
</body>
</html>