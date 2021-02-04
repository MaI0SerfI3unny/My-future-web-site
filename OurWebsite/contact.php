<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALRDKH-_kscVECSC3DgYsIsVVTGm1Ywe8&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 50%;
        float: right;
        height: 100%;

      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 93.5%;
        margin: 0;
        padding: 0;

      }

    </style>
    <script src="js/map.js">

    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/contact.css">
  </head>
  <body class="contact-main">
    <?php require'pages/header.php' ?>

    <div class="float-left contact">
      <h1 class="pl-5 ml-5 mt-5 pt-5">Контакты</h1>
      <form class="float-left pt-4 pl-5 ml-5" action="index.html" method="post">
        <input class="mb-3" type="text" name="" value="" placeholder="Email...">
        <br>
        <input class="mb-2" type="text" name="" value="" placeholder="Текст тут...">
        <br>
        <input type="submit" name="" value="ОТПРАВИТЬ" placeholder="ОТПРАВИТЬ">
      </form>
    </div>
    <div id="map"></div>
  </body>
</html>
