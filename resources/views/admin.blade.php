<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">

  <title>Blog Template for Bootstrap</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.min.css" rel="stylesheet">
  <link href="/css/admin.css" rel="stylesheet">

  <style>

  </style>


</head>

<body>
  <?php
    function getActiveLink($name){
        $current = Route::getCurrentRoute()->getPath();
        if($name == $current)
            echo 'active';
        echo '';
    }
?>

    <nav>
      <div class="nav-wrapper container">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="/admin">Trang Chủ</a></li>
          <li><a href="/admin/categories">Danh Mục</a></li>
          <li><a href="/admin/deals">Deal</a></li>
          <li><a href="/admin/partners">Nhà Cung Cấp</a></li>
          <li><a href="/admin/orders">Bán Hàng</a></li>
          <li><a href="/admin/customers">Khách Hàng</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="section">
          @yield('heading')
        </div>
        <div class="divider"></div>
      </div>
      <div class="row">
        @yield('content')
      </div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
    <script>
      $(document).ready(function() {
        $('select').material_select();
        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15, // Creates a dropdown of 15 years to control year
          format: 'yyyy-mm-dd 23:59:59'
        });
      });
    </script>
</body>

</html>
