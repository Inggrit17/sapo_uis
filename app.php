<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Sapo Uis</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
<link href="/Assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Fontawesome CSS -->
<link rel="stylesheet" href="Assets/library/FontAwesom/css/all.min.css">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="Assets/css/app.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
      <div class="container">

        <a class="navbar-brand" href="#">Sapo Uis</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-toggle="dropdown" aria aria-haspopup="true" aria aria-expanded="false">Manage</a>
          <div class="dropdown-menu" aria-labelledby="dropdown-1">
              <a href="/admin-category.html" class="dropdown-item">Kategori</a>
              <a href="/admin-product.html" class="dropdown-item">Produk</a>
              <a href="/admin-order.html" class="dropdown-item">Order</a>
              <a href="/admin-users.html" class="dropdown-item">Pengguna</a>
          </div>
      </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="/cart.html" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart (0)</a>
        </li>   
        <li class="nav-item">
            <a href="/login.html" class="nav-link">Login</a>
        </li>  
    </li>   
    <li class="nav-item">
        <a href="/Register.html" class="nav-link">Register</a>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-toggle="dropdown" aria aria-haspopup="true" aria aria-expanded="false">Admin</a>
        <div class="dropdown-menu" aria-labelledby="dropdown-2">
            <a href="/admin-profil.html" class="dropdown-item">Profil</a>
            <a href="/admin-orders.html" class="dropdown-item">Orders</a>
            <a href="#" class="dropdown-item">Logout</a>
        </div>
    </li>
    </ul>
  </div>

</div>
</nav>

<!-- content -->
<?php $this->load->view($page); ?>
<!-- end content -->


<script src="/Assets/library/jquery/jquery-3.4.1.min.js"></script>
<script src="/Assets/library/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/Assets/js/app.js"></script>
</body>
</html>
