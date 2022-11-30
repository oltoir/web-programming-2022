<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../../assets/main.css" />
  <link rel="stylesheet" href="./style.css" />

  <title>Дешевые авиабилеты онлайн</title>
</head>

<body>
  <!-- header -->
  <div class="chocofamily-logos">
    <div id="choco-projects" class="choco-projects">
      <ul class="choco-projects__list">
        <li class="choco-projects__item choco-projects__item--chocolife">
          <a href="http://chocolife.me/?utm_source=chocotravel.com&amp;utm_medium=plashka" class="choco-projects__link">
            <span class="choco-projects__title">Скидки до 90%</span>
            <div class="choco-projects__logo"></div>
          </a>
        </li>
        <li class="choco-projects__item choco-projects__item--tripfor">
          <span class="choco-projects__title">Авиабилеты</span>
          <div class="choco-projects__logo"></div>
        </li>
        <li class="choco-projects__item choco-projects__item--lensmark">
          <a href="http://lensmark.kz/?utm_source=chocotravel.com&amp;utm_medium=plashka" class="choco-projects__link" rel="nofollow" target="_blank">
            <span class="choco-projects__title">Оптика</span>
            <div class="choco-projects__logo"></div>
          </a>
        </li>
        <li class="choco-projects__item choco-projects__item--chocofood">
          <a href="http://chocofood.kz/?utm_source=chocotravel.com&amp;utm_medium=plashka" class="choco-projects__link" rel="nofollow" target="_blank">
            <span class="choco-projects__title">Заказ Еды</span>
            <div class="choco-projects__logo"></div>
          </a>
        </li>
        <li class="choco-projects__item choco-projects__item--idoctor">
          <a href="http://idoctor.kz/?utm_source=chocotravel&amp;utm_medium=plashka" class="choco-projects__link" rel="nofollow" target="_blank">
            <span class="choco-projects__title">Поиск врачей</span>
            <div class="choco-projects__logo"></div>
          </a>
        </li>
      </ul>
      <div class="login">
        <div class="login__container">
          <div class="login__inner__container relative flex items-center">
            <?php
            session_start();
            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
              echo "<a href=\"../Profile/index.php\" style=\"
                margin-right: 4px;
                color: rgb(0, 123, 255);
                text-decoration: underline;
                \">
              Личный кабинет
            </a>";
              echo "<h2>Hello, " . $_SESSION["username"] . "</h2>";
              echo "<a class=\"log-out__button\" href=\"../Logout/index.php\"> Выход </a>";
            } else {
              echo "<a class=\"log-out__button\" href=\"../Login/index.php\"> Вход </a>";
            }
            ?>
          </div>
        </div>
      </div>
      <div class="lang-switcher">Рус</div>
    </div>
  </div>
  <div class="center">
    <div class="header">
      <div class="header__logo" itemtype="http://schema.org/Organization">
        <a href="../MainPage/index.php">
          <img itemprop="logo" src="https://www.chocotravel.com/media/v3/media/images/chocotravel-logo.svg" width="273" height="51" alt="Chocotravel.com" title="Авиабилеты дешево онлайн" />
        </a>
      </div>
      <div class="menu__main">
        <a href="../Flights/index.php">
          <img src="https://www.chocotravel.com/media/v3/media/images/plane_active.svg" alt="Авиабилеты" />
          <span>Авиабилеты</span>
        </a>
        <a href="../Railways/index.php">
          <img src="https://www.chocotravel.com/media/v3/media/images/jd_ticket.png" alt="ЖД билеты" />
          <span>ЖД билеты</span>
        </a>
        <a href="#">
          <img src="https://www.chocotravel.com/media/v3/media/images/hotel.svg" alt="Гостиницы" />
          <span>Гостиницы</span>
        </a>
        <a href="#">
          <img src="https://www.chocotravel.com/media/v3/media/images/rentalcars.svg" alt="Авто" />
          <span>Авто</span>
        </a>
        <a href="../Visa/index.php">
          <img src="https://www.chocotravel.com/media/v3/media/images/visa.svg" alt="Визы" />
          <span>Визы</span>
        </a>
        <a href="#">
          <div class="b2b-icon-wrapper">
            <img src="https://www.chocotravel.com/media/v3/media/images/msb.svg" alt="Корпоративным клиентам" />
          </div>
          <span>Корпоративным клиентам</span>
        </a>
        <a href="#">
          <div class="tours-icon-wrapper">
            <img src="https://www.chocotravel.com/media/v3/media/images/tours.svg" alt="Туры" />
          </div>
          <span>Туры</span>
        </a>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!-- header -->

  <!-- content -->

  <main class="container">
    <div class="container-www">
      <section class="container-search">
        <div style="width: 250px">
          <input type="text" placeholder="Откуда" />
        </div>
        <div class="asdasdasdasdsad">
          <img alt="swap" />
        </div>
        <div style="width: 250px">
          <input type="text" placeholder="Куда" />
        </div>
        <div style="width: 250px" class="asdasdasdsa">
          <input type="text" placeholder="Дата туда/обратно" />
        </div>
        <div>
          <img alt="swap" />
        </div>
        <button>
          <a href="../RailwayrsTickets/index.php">Найти</a>
          <button>
      </section>
      <div class="last">
        <section class="blokcsa">
          <h4>Алматы 2 -> Мангистау</h4>
          <h3>23:13 - 14:00</h3>
          <h5>Цена: 3504 тг</h5>
        </section>
        <section class="blokcsa">
          <h4>Алматы 2 -> Мангистау</h4>
          <h3>23:13 - 14:00</h3>
          <h5>Цена: 3504 тг</h5>
        </section>
        <section class="blokcsa">
          <h4>Алматы 2 -> Мангистау</h4>
          <h3>23:13 - 14:00</h3>
          <h5>Цена: 3504 тг</h5>
        </section>
        <section class="blokcsa">
          <h4>Алматы 2 -> Мангистау</h4>
          <h3>23:13 - 14:00</h3>
          <h5>Цена: 3504 тг</h5>
        </section>
      </div>
    </div>
  </main>

  <!-- content -->

  <!-- footer -->
  <footer>
    <div class="footer">
      <div class="footer__row">
        <div class="footer__col">
          <ul>
            <li class="header_footer_list">Популярные направления</li>
            <li>
              <a href="/ru/flights/city/almaty/astana" title="авиабилеты из алматы в астану">Алматы — Астана</a>
            </li>
            <li>
              <a href="/ru/flights/city/almaty/dubai" title="авиабилеты из алматы в дубай">Алматы — Дубай</a>
            </li>
            <li>
              <a href="/ru/flights/city/almaty/istanbul" title="авиабилеты из алматы в стамбул">Алматы — Стамбул</a>
            </li>
            <li>
              <a href="/ru/flights/city/almaty/bangkok" title="авиабилеты из алматы в бангкок">Алматы — Бангкок</a>
            </li>
            <li>
              <a href="/ru/flights/city/almaty/moscow" title="авиабилеты из алматы в москву">Алматы — Москва</a>
            </li>
            <li>
              <a href="/ru/flights" title="популярные авиарейсы">Популярные
                направления</a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <ul>
            <li class="header_footer_list">Авиакомпании</li>
            <li>
              <a href="/ru/aircompanies/air-astana/kc" title="авиакомпания air astana эйр астана">Air Astana</a>
            </li>
            <li>
              <a href="/ru/aircompanies/qazaq-air/iq" title="казах эйр qazaq air">Qazaq Air</a>
            </li>
            <li>
              <a href="/ru/aircompanies/aeroflot/su" title="авиакомпания аэрофлот aeroflot">Aeroflot</a>
            </li>
            <li>
              <a href="/ru/aircompanies/scat-airlines/dv" title="авиакомпания SCAT">SCAT</a>
            </li>
            <li><a href="/ru/aircompanies">Все авиакомпании</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <ul>
            <li class="header_footer_list">Популярные страны</li>
            <li><a href="/ru/countries/russia/ru">Авиабилеты в Россию</a></li>
            <li>
              <a href="/ru/countries/thailand/th">Авиабилеты в Таиланд</a>
            </li>
            <li><a href="/ru/countries/turkey/tr">Авиабилеты в Турцию</a></li>
            <li>
              <a href="/ru/countries/germany/de">Авиабилеты в Германию</a>
            </li>
            <li>
              <a href="/ru/countries/georgia/ge">Авиабилеты в Грузию</a>
            </li>
            <li><a href="/ru/countries">Все страны</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <ul>
            <li class="header_footer_list">Продукты</li>
            <li><a href="/" title="авиабилеты онлайн">Авиабилеты</a></li>
            <li>
              <a href="../Railways/index.php" title="жд билеты">ЖД билеты</a>
            </li>
            <li>
              <a href="/ru/visa" title="виза онлайн">Визовая поддержка</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__row">
        <div class="footer__col">
          <ul>
            <li class="header_footer_list">О нас</li>
            <li><a href="../AboutUs/index.php" target="_blank">О компании</a></li>
            <li><a href="/ru/blog">Блог</a></li>
            <li><a href="/ru/payments">Способы оплаты</a></li>
            <li><a href="../Contacts/index.php">Контакты</a></li>

            <li><a href="/ru/agreement">Публичная оферта</a></li>
            <li><a href="/ru/agreement/railways">Публичная оферта ЖД</a></li>
            <li><a href="/ru/articles">СМИ о нас</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <ul>
            <li class="header_footer_list">Пользователям</li>
            <li><a href="/ru/faq">Вопросы-ответы</a></li>
            <li><a href="/ru/feedback">Отзывы</a></li>
            <li><a href="/ru/recommend">Лучшие цены</a></li>
            <li>
              <a href="/ru/airlinesregistration">Регистрация на рейс</a>
            </li>
          </ul>
        </div>
        <div class="footer__col">
          <ul>
            <li class="header_footer_list">Полезная информация</li>
            <li><a href="/ru/aircompanies">Авиакомпании</a></li>
            <li><a href="/ru/airports">Аэропорты</a></li>
            <li><a href="/ru/countries">Страны</a></li>
            <li><a href="/ru/city">Города</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <ul>
            <li class="header_footer_list">Партнерам</li>
            <li><a href="/ru/msb">Корпоративным клиентам</a></li>
            <li><a href="/ru/advertizing">Рекламодателям</a></li>
            <li><a href="/ru/for-partners">Сотрудничество</a></li>
            <li><a href="/ru/subagents-welcome">Стать агентом</a></li>
          </ul>
        </div>
      </div>
      <div class="footer__row">
        <div class="footer__col --icons">
          <ul>
            <li class="footer_img">
              <div class="footer-icons">
                <div class="footer-icons__item footer-icons__item--visa"></div>
                <div class="footer-icons__item footer-icons__item--master"></div>
                <div class="footer-icons__item
                        footer-icons__item--union-pay"></div>
              </div>
            </li>
          </ul>
        </div>
        <div class="footer__col --icons">
          <ul>
            <li class="footer_img">
              <div class="footer-icons">
                <a class="footer-icons__item
                        footer-icons__item--astana_hub" target="_blank" rel="nofollow" href="https://astanahub.com/"></a>
              </div>
            </li>
          </ul>
        </div>
        <div class="footer__col --icons">
          <ul>
            <li class="footer_img">
              <a href="https://www.instagram.com/chocotravel" target="_blank" class="social social--inst"></a>
              <a href="https://www.facebook.com/chocotravelcom" target="_blank" class="social social--fb"></a>
            </li>
          </ul>
        </div>
        <div class="footer__col --icons">
          <ul>
            <li class="footer_img">
              <div class="footer-icons">
                <div class="footer-icons__item
                        footer-icons__item--depositphotos"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer -->
</body>

</html>