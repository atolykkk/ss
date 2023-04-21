<?php
  include("path.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <title>Code of Future Third Module</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <?php
    include("application/include/header.php");
    ?>


<!-- middle block of main page -->
<div class="container">
  <div class="content row">
    <div class="main-content col-md-8">
      <h3>Одна публикация</h3>
      <div class="single_news row">
        <div class="img col-12 ">
          <img src="images/harrypotter.jpg" alt="..." class="img-thumbnail">
          </div>
          <div class="single_news_text col-12">
            <h3><a href="">Особенности и преимущества платформы «1С:Предприятие»</a></h3>
            <i class="las la-user-circle">Creator</i>
            <i class="las la-calendar-week">01.01.2023</i>

            <p class="introduction">Постараемся рассказать про это подробно и убедительно. <br>
                                    Что такое 1С:Предприятие? Мы говорим, что это система программ. 
                                    Она состоит из платформы, приложений, экосистемы, различной методической информации и,
                                    конечно, специалистов, которые работают с этими технологиями и приложениями.</p>
          </div>
        </div>
      </div>
          <!-- side information -->
          <div class="sidebar col-12 col-md-4">
            <div class="par search">
              <h3>Исследование материалов</h3>
              <form action="/" method="post">
                <input type="text" name="search-term" class="text-input" placeholder="Enter longread ">
              </form>
            </div>
            <div class="par top">
                <h3>Разделы</h3>
                <ul>
                    <li><a href="#">1С новости</a></li>
                    <li><a href="#">Разработка</a></li>
                    <li><a href="#">Игры</a></li>
                </ul>
            </div>
      </div>
  </div>
</div>
<!-- end of middle block -->

<?php
  include("application/include/footer.php");
?>
</body>
</html>