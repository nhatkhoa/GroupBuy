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

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/blog.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link " href="/admin">Trang Chủ</a>
            <a class="nav-link {{'active' }}" href="/admin/categories">Danh Mục</a>
            <a class="nav-link" href="/admin/deals">Deal</a>
            <a class="nav-link" href="/admin/partners">Nhà Cung Cấp</a>
            <a class="nav-link" href="/admin/orders">Bán Hàng</a>
            <a class="nav-link" href="/admin/customers">Khách Hàng</a>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>

    </div>
</div>

<footer class="blog-footer">
    <p>Copyright 2015 &copy; Khoa Hoàng</p>

    <p>
        <a href="#">Back to top</a>
    </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/js/vendor/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
