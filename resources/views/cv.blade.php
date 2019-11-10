@include('layouts.header')
      <div class="portfolio">
        <h2>Портфолио</h2>
        <div class="slickcards">
          <div class="card">
            <img src="images/mycv.png" alt="my cv">
            <h3>Мое Резюме</h3>
            <p>html, css, javascript, jquery, laravel</p>
          </div>
          <div class="card">
            <img src="images/dveri.jpg" alt="dveri">
            <h3>интернет-магазин дверей</h3>
            <p>wordpress, html, css, bootstrap4, javascript, php</p>
          </div>
          <div class="card">
            <img src="images/screenshot_iot.png" alt="my cv">
            <h3>интернет-магазин ИОТ</h3>
            <p>wordpress, html, css, bootsrap4, javascript, php</p>
          </div>
          <div class="card">
            <img src="images/flowers.png" alt="flowers">
            <h3>сайт букеты цветов</h3>
            <p>webgl, laravel, php, html, css, grid css</p>
          </div>
          <div class="card">
            <img src="images/flowers.png" alt="my cv">
            <h3>Какой-то сайт</h3>
            <p>javascript, html, css</p>
          </div>
        </div>
      </div>

      <div class="experience">
        <h2>Опыт</h2>
      </div>
      <div class="experience-description">
        несколько проектов
      </div>
      <div class="education">
        <h2>Образование</h2>
      </div>
      <div class="education-description">
        <h4>hexlet</h4>
        <p>В данный момент прохожу курсы профессии PHP-программист, также изучаю фреймворк laravel</p>
        <h4>ЕЭТК</h4>
        <p>автоматизированные системы хранения и управления информацией</p>
        <p>техник-информатик</p>
      </div>
@include('layouts.footer')
