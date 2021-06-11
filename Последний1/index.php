<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Винный магазин</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

  <div class="container-fluid first-screen">
    <div class="container">


      <div class="row fitst-text">
      <p class="col-xl-2 offset-xl-2 col-lg-3 offset-lg-2">Новокузнечный переулок 4/1</p>
      <p class="col-xl-2 offset-xl-5 col-lg-3 offset-lg-4">8 (812) 123-45-67</p>
      </div>

    <ul class="nav justify-content-center first-nav">
  <li class="nav-item col-2">
    <a class="nav-link " aria-current="page" href="#">Каталог</a>
  </li>
  <li class="nav-item col-2">
    <a class="nav-link" href="#">Доставка</a>
  </li>
  <li class="nav-item col-2">
    <a class="nav-link" href="#">Коллекции</a>
  </li>
  <li class="nav-item col-2">
    <a class="nav-link" href="#">Контакты</a>
  </li>
    </ul>

<div class="collapseone">
    <div class="collapse" id="navbarToggleExternalContent">
  <div class="p-4">
    <a href="#">Каталог</a><br>
    <a href="#">Доставка</a><br>
    <a href="#">Коллекции</a><br>
    <a href="#">Контакты</a>
  </div>
</div>
<nav class="navbar navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
</div>


    <p style="text-align:center" class="paragraph"><div class="row">
    <a class="col-xl-2 offset-xl-4 col-lg-2 offset-lg-4 col-sm-4 offset-sm-2 col-xs-4 offset-xs-2 firstbtn" href="#"><div>ВИННАЯ КАРТА</div></a>
    <a class="col-xl-2 col-lg-2 col-sm-4 col-xs-4 firstbtn" href="#"><div>ДЕГУСТАЦИЯ</div></a>
  </div></p>


    </div>
  </div>

  <div class="container-fluid third-screen">
    <div class="container">
        <div class="row third-screen-two">
          <div class="col-10 offset-1">
            <hr class="hr-third">
            <div class="row">
              <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <p>Винная карта LE CORTE</p>
                <div class="row navrow">

          <?php

$cards = array(
  array('title'=>'Россия',
  'values'=>array(
        "Лефкадия, Совиньон Блан, 2016",
        "Усадьба Дивноморское, East Hill Blend, 2016",
        "Alma Valley, Petite Arvine, 2016",
        "Oleg Repin, Aligote, 2015"
  )),
 array('title'=>'Франция',
  'values'=>array(
        "Лефкадия, Совиньон Блан, 2016",
        "Усадьба Дивноморское, East Hill Blend, 2016",
        "Alma Valley, Petite Arvine, 2016",
        "Oleg Repin, Aligote, 2015"
  )),
  array('title'=>'Италия',
  'values'=>array(
        "Лефкадия, Совиньон Блан, 2016",
        "Усадьба Дивноморское, East Hill Blend, 2016",
        "Alma Valley, Petite Arvine, 2016",
        "Oleg Repin, Aligote, 2015"
  )),
  array('title'=>'Австрия',
  'values'=>array(
        "Hugel, Riesling Estate, 2014",
        "Hugel, Gewurztraminer Estate, 2015",
        "Domaines Schlumberger, Pinot Gris Grand Cru Spiegel 2017 (semi-sweet)",
        "Domaine Marcel Deiss, Langenberg Premierer Cru, 2013"
  ))
);

foreach ($cards as $id => $value) {
  print("<a class='firstbtn col-2 thirdbtntwo' href='index.php?id=".$id."'><div>".$value['title']."</div></a>");
};

if ($_GET['id']==1){
  print ('<p>Франция</p>');
}
elseif($_GET['id']==2){
  print ('<p>Италия</p>');
}
elseif($_GET['id']==3){
  print ('<p>Австрия</p>');
}
else print ('<p>Россия</p>');

foreach ($cards[$_GET['id']] as $vine)
  if(isset ($vine) && is_array($vine))
foreach ($vine as $value) {
   print ("<li>".$value."</li>");
};

?>


    </div>


              </div>

              <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 third-two-img">
                <div class="row">
                <img class="col-12" src="assets/img/Вино11.png" alt="">
                <img class="col-12" src="assets/img/Вино22.png" alt="">
                <img class="col-12" src="assets/img/Вино33.png" alt="">
                </div>
              </div>
            </div>
            <hr>
          </div>
        </div>

    </div>
  </div>


  <div class="container-fluid fiveth-screen">
    <div class="container">


      <ul class="nav nav-pills nav-fill footer">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="#">Главная</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Каталог</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Поставщики</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Коллекции</a>
  </li>
  <li class="nav-item footer-pool-one">
    <a class="nav-link" href="#">Дегустация</a>
  </li>
  <li class="nav-item footer-pool-two">
    <a class="nav-link" href="#">Коллекция 2020</a>
  </li>
  <li class="nav-item footer-pool">
    <a class="nav-link" href="#">Контакты</a>
  </li>
</ul>



<ul class="nav nav-pills nav-fill footer-three">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="#">винный бутик LE CORTE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tel: +78121234567">8 (812) 123-45-67</a>
  </li>
  <li class="nav-item">
    <p class="nav-link contact" href="#">
      <a href="https://youtube.com"><i class="fab fa-youtube"></i></a>
      <a href="https://vk.com"><i class="fab fa-vk"></i></a>
      <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
    </p>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">© le-corte.ru</a>
  </li>
</ul>
<div class="collapseone">
    <div class="collapse" id="navbarToggleExternalContent">
  <div class="p-4">
    <a href="#">Главная</a><br>
    <a href="#">Каталог</a><br>
    <a href="#">Поставщики</a><br>
    <a href="#">Коллекции</a><br>
    <a href="#">Дегустация</a><br>
    <a href="#">Коллекция 2020</a><br>
    <a href="#">винный бутик LE CORTE</a><br>
    <a href="#">8 (812) 123-45-67</a><br>
    <a href="#">
      <p class="nav-link contact" href="#">
        <a href="https://youtube.com"><i class="fab fa-youtube"></i></a>
        <a href="https://vk.com"><i class="fab fa-vk"></i></a>
        <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
      </p>
    </a><br>
    <a href="#">винный бутик LE CORTE</a><br>
    <a href="#">© le-corte.ru</a>
  </div>
</div>
<nav class="navbar navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
</div>

    </div>
  </div>


</div>
<script src="https://kit.fontawesome.com/1969ac2503.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>


<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();?>

   <div class="container-fluid third-screen">
    <div class="container">
        <div class="row third-screen-two">
          <div class="col-10 offset-1">
            <hr class="hr-third">
            <div class="row">
              <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <p>Винная карта LE CORTE</p>
                <div class="row navrow">
<?php 
          $mydb = new wpdb('root','','vine','localhost');
          $data = $mydb->get_results("SELECT name FROM cards WHERE title='yes'",ARRAY_A);
          $russia = $mydb->get_results("SELECT content FROM cards WHERE name='Россия'",ARRAY_A);
          $france = $mydb->get_results("SELECT content FROM cards WHERE name='Франция'",ARRAY_A);
          $italy = $mydb->get_results("SELECT content FROM cards WHERE name='Италия'",ARRAY_A);
          $austria = $mydb->get_results("SELECT content FROM cards WHERE name='Австрия'",ARRAY_A);

foreach ($data as $id => $value) {
  print("<a class='firstbtn col-2 thirdbtntwo' href='index.php?id=".$id."'><div>".$value['title']."</div></a>");
};

if ($_GET['id']==1){
  print ('<p>Франция</p>');
}
elseif($_GET['id']==2){
  print ('<p>Италия</p>');
}
elseif($_GET['id']==3){
  print ('<p>Австрия</p>');
}
else print ('<p>Россия</p>'); 
          
    if ($_GET['id'] == 0){
      foreach ($russia as $value){
           print ("<li>".$value."</li>");
      }
    }
      elseif ($_GET['id'] == 1){
      foreach ($france as $value){
           print ("<li>".$value."</li>");
      }
    }
      elseif ($_GET['id'] == 2){
      foreach ($italy as $value){
           print ("<li>".$value."</li>");
      }
    }
      elseif ($_GET['id'] == 3){
      foreach ($austria as $value){
           print ("<li>".$value."</li>");
      }
    }
      else{
        foreach ($russia as $value){
           print ("<li>".$value."</li>");
      }
    }
    

?>

    </div>
              </div>

              <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-xs-12 third-two-img">
                <div class="row">
                <img class="col-12" src="assets/img/Вино11.png" alt="">
                <img class="col-12" src="assets/img/Вино22.png" alt="">
                <img class="col-12" src="assets/img/Вино33.png" alt="">
                </div>
              </div>
            </div>
            <hr>
          </div>
        </div>

    </div>
  </div>
          
<?php get_footer();?>
