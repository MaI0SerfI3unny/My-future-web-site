<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/news.css">
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
    <main class="pb-5 mt-5 pt-5">
      <div class="container">
        <h1 class="text-uppercase mb-5 text-white">Новости</h1>
        <div class="row">
          <div class="col-md-11 mt-2 mb-2">
            <a href="#">
            <img style="max-width:250px;max-height:250px" src="img/new1.jpg" class="img-fluid float-left mr-3" alt="">
            <h3 class="pl-3 pr-3 text-white">Сколько зарабатывает верстальщик?</h3>
            <p class="pl-3 pr-3 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.</p>
                </a>
          </div>

          <div class="col-md-11 mt-2 mb-2">
            <img style="max-width:250px;max-height:250px" src="img/new2.jpg" class="img-fluid float-left mr-3" alt="">
            <h3 class="pl-3 pr-3 text-white">Взлом Пентагона</h3>
            <p class="pl-3 pr-3 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
          </div>

          <div class="col-md-11 mt-2 mb-2">
            <img style="max-width:250px;max-height:250px" src="img/new3.jpg" class="img-fluid float-left mr-3" alt="">
            <h3 class="pl-3 pr-3 text-white">Как тебе такое,мир?</h3>
            <p class="pl-3 pr-3 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                  nulla pariatur.</p>
          </div>
        </div>
        <button class="menu_button" type="button" name="button"><a href="">1</a></button>
        <button class="menu_button" type="button" name="button"><a href="">2</a></button>
        <button class="menu_button" type="button" name="button"><a href="">3</a></button>
        <button class="menu_button" type="button" name="button"><a href="">4</a></button>
      </div>
    </main>
  </body>
</html>
