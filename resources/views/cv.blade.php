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
            <p>opencart, html, css, bootstrap4, javascript, php</p>
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
        <p>Релевантный опыт в сфере веб - создание сайтов на основе wordpress и opencart, также в данный момент изучаю laravel и react</p>
        <h4>ООО "УДМЗ" (Екатеринбург)</h4>
        <b>Системный Администратор</b>
        <p>08.2017 – Работаю на данный момент</p>
        <p>Windows server 2008/2012, AD, MS SQL server, MS Exchange, OpenVPN, Крипто-Про, Интернет банки, Установка и настройка ПО на ПК, терминальный доступ, удаленное администрирование, контур-экстерн, администрирование 1С (8.2), монтаж ЛВС, настройка коммутационного оборудования</p>

        <h4>ООО "Айси-Групп" (Екатеринбург)</h4>
        <b>Системный Администратор</b>
        <p>08.2016 – 06.2017</p>
        <p>Windows server 2008/2012, AD, АТС Asterisk, Установка и настройка ПО на ПК, терминальный доступ, удаленное администрирование, MS SQL server, Крипто-Про, контур-экстерн, администрирование 1С (8.2), монтаж ЛВС, настройка коммутационного оборудования</p>

        <h4>МКУ ЦБ и МТО МОУ Орджоникидзевского района (Екатеринбург)</h4>
        <b>Системный Администратор</b>
        <p>08.2016 – 06.2017</p>
        <p>Установка и настройка ПО на ПК, ViPNet, zakupki.gov.ru, Windows server 2003/2008, Крипто-Про, Контур-Экстерн, Парус-Бюджет, настройка коммутационного оборудования</p>
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
