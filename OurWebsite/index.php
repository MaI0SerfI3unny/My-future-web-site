<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ProggerOnGod-Platform for proggers</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php require'pages/header.php' ?>
<main>
  <div class="slider">
     <div class="slider__wrapper">
       <div class="slider__item">
        <div>
          <button type="button" name="button"><a class="text-white" href="#">Перейти</a></button>
          <h1 class="">Новый курс <br>Информационная безопазность</h1>
          <img src="img/SLIDER.png" class="img-fluid">
        </div>
       </div>
       <div class="slider__item">
         <div style="">
           <button type="button" name="button"><a class="text-white" href="#">Перейти</a></button>
           <h1 class="">Новый курс <br>Python-разработчик</h1>
           <img src="img/python.png" class="img-fluid">
         </div>
       </div>
       <div class="slider__item">
         <div style="">
           <button type="button" name="button"><a class="text-white" href="#">Перейти</a></button>
           <h1 class="">Новый курс <br>Java-разработчик</h1>
           <img src="img/java.jpg" class="img-fluid">
         </div>
       </div>
       <div class="slider__item">
         <div style="">
           <button type="button" name="button"><a class="text-white" href="#">Перейти</a></button>
           <h1 class="">Новый курс <br>Верстальщик</h1>
           <img src="img/mark.png" class="img-fluid">
         </div>
       </div>
     </div>
     <a class="slider__control slider__control_left" href="#" role="button"></a>
     <a class="slider__control slider__control_right" href="#" role="button"></a>
   </div>
   <script src="js/slider.js">
</script>
<div class="hamburger-menu">
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

<div class="new">
<div class="container">
  <h1 class="text-uppercase mt-5 mb-5 pt-3 text-white">Свежие новости</h1>
  <div class="col-md-7 mt-3 float-left">
    <a href="#">
      <div class="">
        <h6>Сколько зарабатывает верстальщик?</h6>
      </div>
    <img style="width:100%; height: 557px" src="img/new1.jpg" alt="">
  </a>
  </div>
  <div class="col-md-5 float-right mt-3">
    <a href="#">
    <img style="width:100%; height:175px" src="img/new2.jpg" alt="">
    <div class="">
      <h6>Взлом Пентагона</h6>
    </div>
  </a>
  </div>
  <div class="col-md-5 float-right mt-3">
    <a href="#">
    <img style="width:100%; height:175px" src="img/new3.jpg" alt="">
    <div class="">
      <h6>Как тебе такое,мир?</h6>
    </div>
  </a>
  </div>
  <div class="col-md-5 float-right mt-3">
    <a href="#">
    <img style="width:100%; height:175px" src="img/new4.jpg" alt="">
    <div class="">
      <h6>Как собрать себе топовый комп?</h6>
    </div>
  </a>
  </div>
</div>
</div>

<div class="special mt-5 pt-4">
  <div class="container">
  <h1 class="text-uppercase text-white text-center">специальное предложение</h1>
  <div class="row justify-content-center">
    <div class="col-md-3 p-3">
      <a href="#">
      <div class="card">
        <div class="card-img-top">
          <p class="text-center"><img class="img-fluid mt-3" src="img/spe1.png" alt=""></p>
        </div>
        <div class="card-body text-center">
          <h6>Толстовка CyberPunk</h6>
          <h5 class="">969 ГРН</h5>
          <button type="submit" class="btn btn-danger">Подробнее</button>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-3 p-3">
      <a href="#">
      <div class="card">
        <div class="card-img-top">
          <p class="text-center"><img class="img-fluid" src="img/spe2.png" alt=""></p>
        </div>
        <div class="card-body text-center">
          <h6>Толстовка</h6>
          <h5 class="">969 ГРН</h5>
          <button type="submit" class="btn btn-danger">Подробнее</button>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-3 p-3">
      <a href="#">
      <div class="card">
        <div class="card-img-top">
          <p class="text-center"><img class="img-fluid" src="img/spe3.png" alt=""></p>
        </div>
        <div class="card-body text-center">
          <h6>Ноутбук Lenovo</h6>
          <h5 class="">9000 ГРН</h5>
          <button type="submit" class="btn btn-danger">Подробнее</button>
        </div>
      </div>
    </a>
    </div>
    <div class="col-md-3 p-3">
      <a href="#">
      <div class="card">
        <div class="card-img-top">
          <p class="text-center"><img class="img-fluid" src="img/spe4.png" alt=""></p>
        </div>
        <div class="card-body text-center">
          <h6>Хакерфон Huawei</h6>
          <h5 class="">3069 ГРН</h5>
          <button type="submit" class="btn btn-danger">Подробнее</button>
        </div>
      </div>
    </a>
    </div>
  </div>
</div>
</div>

<div class="form">
  <div class="container">
    <h1 class="text-uppercase float-right text-white mt-2">Есть предложения?</h1>
    <br><br><br>
    <form class="float-right" action="index.html" method="post">
      <input type="text" name="" value="" placeholder="Email...">
      <br>
      <input type="text" name="" value="" placeholder="Пиши сюда...">
      <br>
      <button class="text-white m-3" type="submit" name="button">Отправить</button>
    </form>
  </div>
</div>
</main>
  </body>
</html>
