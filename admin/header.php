<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Website Belanja ShV</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/styles.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; 
      }
    </style>
  </head>
  <body>
  <style>
     {margin:0; padding:0;}
     
    body {
     background-color:#ffB6C1;
     font-family:butler, sans-serif;
     color:#000;
    }

    nav {
     margin:auto;
     text-align: center;
     width: 100%;
    } 

     ul ul {
     display: none;
    }

    nav ul li:hover > ul{
    display: block;
    width: 150px;
    }

    nav ul {
     background: #FFF0F5;
     padding: 0 20px;
     list-style: none;
     position: relative;
     display: inline-table;
     width: 100%;
    }

    nav ul:after {
     content: ""; 
     clear:both; 
     display: block;
    }

    nav ul li{
     float:left;
    }

    nav ul li:hover{
     background:#000;
    }

    nav ul li:hover a{
     color:#000;
    }

    nav ul li a{
     display: block;
     padding: 25px;
     color: #000;
     text-decoration: none;
    }

    nav ul ul{
     background: #FFF05F;
     border-radius: 0px;
     padding: 0;
     position: absolute;
     top:100%;
    }

    nav ul ul li{
     float:none;
     border-top: 1px soild #53bd84;
     border-bottom: 1px solid #53bd84;
     position: relative;
    }

    nav ul ul li a{
     padding: 15px 40px;
     color: #FF69B4;
    }

    nav ul ul li a:hover{
     background-color: #ADFF2F;
    }

    nav ul ul ul{
     position: absolute;
     left: 100%;
     top: 0;
    }
    </style>
<!-- Awal script Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" id="scrollspy">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="uas1.php">WEBSITE BELANJA PALING MURAH</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="dashboard.php"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only">(current)</span></a>
            </li>
            <li>
              <a href="admin/contact.php"><span class="glyphicon glyphicon-info-sign"></span> Contact Us</a>
            </li>
            <li class="item">
                          <a href="keranjang.php"><span class="glyphicon glyphicon-shopping-cart"></span> keranjang </a>
                        </li>
            <li class="item">
                          <a href="checkout.php"><span class="glyphicon glyphicon-check"></span> List Check Out </a>
                        </li>           
              
            <li>
              <a href="login.php"><span class="glyphicon glyphicon-lock"></span> Login</a>
            </li>
          </ul>
        </nav><!-- Akhir script Navbar -->