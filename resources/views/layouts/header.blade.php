<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <head>
          <meta charset="utf-8">
          <title>Curriculum Vitae - Kosta Skolznev</title>

          <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
          <link rel="stylesheet" type="text/css" href="{{ url('/css/slick.css') }}" />
          <link rel="stylesheet" type="text/css" href="{{ url('/css/slick-theme.css') }}" />
          <link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome/css/font-awesome.min.css') }}" />
          <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">
      </head>
      <body>
        <div class="container">
          <div class="photo">
            <img class="wrap-background" src="images/photo3.jpg" alt="Konstantin Skolznev">
            <img class="photo-wrapfront" src="images/photo.jpg" alt="Konstantin Skolznev">
            <img class="photo-wrapback" src="images/photo2.jpg" alt="Konstantin Skolznev">
          </div>
          <div class="name">
            <h1>Скользнев Константин</h1>
          </div>
          <div class="description">
            <h4>Обо мне</h4>
            <p>frontend/backend разработчик, 32 года</p>
            <p></p>
          </div>
          <div class="skills">
            <h4>Скилы</h4>
            <div class="allskills">
              <div class="skill-name">php</div>
              <div class="stars">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <div class="skill-name">laravel</div>
              <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <div class="skill-name">html</div>
              <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <div class="skill-name">css</div>
              <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <div class="skill-name">javascript</div>
              <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="contact">
            <h4>Контакты</h4>
            <div class="allcontacts">
              <ul>
                <li><a href="mailto:k.skolzniev@gmail.com"><img src="images/logo_gmail.png" alt="email">k.skolzniev@gmail.com</a></li>
                <li><a href="tel:+79221628938"><img src="images/logo_phone.png" alt="phone">89221628938</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=89221628938"><img src="images/logo_whatsapp.png" alt="whatsapp">89221628938</a></li>
                <li><a href="https://m.me/costa.skolzniev.5"><img src="images/logo_messenger.png" alt="messenger">Costa Skolzniev</a></li>
                <li><a href="tg://resolve?domain=<89221628938>"><img src="images/logo_telegram.png" alt="telegram">89221628938</a></li>
                <li><a href="https://github.com/KostaSkolznev"><img src="images/logo_githab.png" alt="githab">Github</a></li>
                <li><img src="images/logo_linkedin.png" alt="linkedin">LinkedIn</li>
              </ul>
            </div>
          </div>
