<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/course.css">
  </head>
  <body>
<?php require'pages/header.php' ?>
<div class="hamburger-menu mt-3">
    <div class="container">
  <input id="menu__toggle" type="checkbox" />
  <label class="menu__btn" for="menu__toggle">
    <span></span>
  </label>

  <ul class="menu__box">
    <li><a class="menu__item" href="#">Главная</a></li>
    <li><a class="menu__item" href="#">Про нас</a></li>
    <li><a class="menu__item" href="#">Блог</a></li>
    <li><a class="menu__item" href="#">Контакты</a></li>
    <li><a class="menu__item" href="#">Курсы</a></li>
    <li><a class="menu__item" href="#">Магазин</a></li>
  </ul>
</div>
</div>
<main>
  <div class="course">
  <div class="container">
    <h2 class="mb-3  mt-5 pt-5 text-uppercase text-white">Курсы</h2>
    <div class="row">
    <div style="height:300px" class="col-md-11">
      <a href="#">
      <h3 class="text-white text-uppercase">Python - разработчик</h3>
      <img style="width:107%;  height:100%" src="img/course1.jpg" alt="">
    </a>
    </div>
    <div style="height:300px" class="col-md-11">
      <a href="#">
      <h3 class="text-white text-uppercase">Java - разработчик</h3>
      <img style="width:107%; height:100%" src="img/course2.jpg" alt="">
    </a>
    </div>
    <div style="height:300px" class="col-md-11">
      <a href="#">
      <h3 class="text-white text-uppercase">Верстальщик</h3>
      <img style="width:107%; height:100%" src="img/course3.jpg" alt="">
    </a>
    </div>
  </div>
  </div>
  </div>
</main>
  </body>
</html>
