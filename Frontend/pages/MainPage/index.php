<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../../assets/main.css" />
  <link rel="stylesheet" href="../../pages/Railways/style.css">

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
        <!-- <section class="container-search" style="margin-top: 100px; width:
            300px; background-color: white;">
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
            <button>Найти</button>
          </section> -->
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
  <div class="center">
    <div class="center__content">
      <h1>Авиабилеты в Казахстане</h1>
      <h1>Подробнее о поиске авиабилетов на Chocotravel</h1>
      <p>
        Именно по этим причинам люди используют Chocotravel как бесплатный
        сервис по поиску авиабилетов
      </p>
      <div class="mainpage-advantages-row">
        <div class="mainpage-advantage">
          <img src="https://www.chocotravel.com/media/v3/media/images/mainpage-features/mainpage-features-plane.svg" alt="1000 авиакомпаний" class="mainpage-advantage__img" />
          <h3 class="mainpage-advantage__heading">1000 авиакомпаний</h3>
          <p class="mainpage-advantage__text">
            Chocotravel.com сравнивает предложения более 1000 авиакомпаний
            мира, чтобы найти для вас лучший вариант перелета
          </p>
        </div>
        <div class="mainpage-advantage">
          <img src="https://www.chocotravel.com/media/v3/media/images/mainpage-features/mainpage-features-wallet.svg" alt="Авиабилеты по цене авиакомпаний" class="mainpage-advantage__img" />
          <h3 class="mainpage-advantage__heading">
            Авиабилеты по цене авиакомпаний
          </h3>
          <p class="mainpage-advantage__text">
            На Chocotravel.com вы приобретаете билеты по стоимости
            авиакомпании, без скрытых комиссий и сборов, а иногда даже дешевле
          </p>
        </div>
        <div class="mainpage-advantage">
          <img src="https://www.chocotravel.com/media/v3/media/images/mainpage-features/mainpage-features-handshake.svg" alt="1000 авиакомпаний" class="mainpage-advantage__img" />
          <h3 class="mainpage-advantage__heading">Надежность</h3>
          <p class="mainpage-advantage__text">
            Нам доверяют более 200 000 казахстанцев ежегодно
          </p>
        </div>
        <div class="mainpage-advantage">
          <img src="https://www.chocotravel.com/media/v3/media/images/mainpage-features/mainpage-features-clock.svg" alt="1000 авиакомпаний" class="mainpage-advantage__img" />
          <h3 class="mainpage-advantage__heading">
            Круглосуточная поддержка
          </h3>
          <p class="mainpage-advantage__text">
            Мы решаем ваши проблемы 24 часа в сутки
          </p>
        </div>
        <div class="mainpage-advantage">
          <img src="https://www.chocotravel.com/media/v3/media/images/mainpage-features/mainpage-features-mobile.svg" alt="1000 авиакомпаний" class="mainpage-advantage__img" />
          <h3 class="mainpage-advantage__heading">
            Все билеты в твоем мобильном
          </h3>
          <p class="mainpage-advantage__text">
            Полнофункциональные мобильные приложения для Android и IOS
          </p>
        </div>
        <div class="mainpage-advantage">
          <img src="https://www.chocotravel.com/media/v3/media/images/mainpage-features/mainpage-features-touch.svg" alt="1000 авиакомпаний" class="mainpage-advantage__img" />
          <h3 class="mainpage-advantage__heading">Покупка за 3 минуты</h3>
          <p class="mainpage-advantage__text">
            Вы экономите время, больше не нужно ездить в агентства. Проводите
            время с любимыми
          </p>
        </div>
      </div>
    </div>
    <h1>Как купить авиабилеты на Chocotravel.kz</h1>
    <div class="chocotravel-video-guide-grid">
      <div class="chocotravel-video-guide-grid__left">
        <div class="chocotravel-video-guide-grid__item-mini">
          <div class="chocotravel-video-guide-grid-item__num">1</div>
          <div class="chocotravel-video-guide-grid__desc">
            <p>Укажите нужное направление и даты</p>
          </div>
        </div>
        <div class="chocotravel-video-guide-grid__item-mini">
          <div class="chocotravel-video-guide-grid-item__num">2</div>
          <div class="chocotravel-video-guide-grid__desc">
            <p>Выберите подходящий рейс</p>
          </div>
        </div>
        <div class="chocotravel-video-guide-grid__item-mini">
          <div class="chocotravel-video-guide-grid-item__num">3</div>
          <div class="chocotravel-video-guide-grid__desc">
            <p>Оплатите билет любым удобным способом</p>
          </div>
        </div>
      </div>
      <div class="chocotravel-video-guide-grid__right">
        <div class="mainpage-video-guide">
          <div class="mainpage-video-guide__overlay">
            <a class="mainpage-video-guide__overlay-title" href="https://www.youtube.com/watch?time_continue=1&amp;v=HXKPZaBTbNE" target="_blank" rel="nofollow" savefrom_lm_index="0" savefrom_lm="1">
              Как купить авиабилет на Chocotravel.com? </a><span style="padding: 0; margin: 0; margin-left: 5px"><a style="
                  background-image:
                  url('data:image/gif;base64,R0lGODlhEAAQAOZ3APf39+Xl5fT09OPj4/Hx8evr6/3+/u7u7uDh4OPi497e3t7e3/z8/P79/X3GbuXl5ubl5eHg4WzFUfb39+Pj4lzGOV7LOPz7+/n6+vn5+ZTLj9/e387Ozt7f3/7+/vv7/ISbePn5+m/JV1nRKXmVbkCnKVrSLDqsCuDh4d/e3uDn3/z7/H6TdVeaV1uSW+bn5v39/eXm5eXm5kyHP/f39pzGmVy7J3yRd9/f3mLEKkXCHJbka2TVM5vaZn6Wdfn6+YG/c/r5+ZO/jeLi41aHTIeageLn4f39/vr6+kzNG2PVM5i+lomdf2CXYKHVmtzo2YXNeDqsBebl5uHh4HDKWN3g3kKqEH6WeZHTXIPKdnSPbv79/pfmbE7PHpe1l4O8dTO5DODg4VDLIlKUUtzo2J7SmEWsLlG4NJbFjkrJHP7+/VK5Nfz8+zmnC3KKa+Hg4OHh4Y63j/3+/eDg4Ojo6P///8DAwP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAHcALAAAAAAQABAAAAfWgHd2g4SFhYJzdYqLjIpzgx5bBgYwHg1Hk2oNDXKDFwwfDF5NLmMtcStsn4MhGT8YS04aGmU1QRhIGYMTADQAQlAODlloAMYTgwICRmRfVBISIkBPKsqDBAREZmcVFhYVayUz2IMHB1dWOmImI2lgUVrmgwUFLzdtXTxKSSduMfSD6Aik48MGlx05SAykM0gKhAAPAhTB0oNFABkPHg5KMIBCxzlMQFQZMGBIggSDpsCJgGDOmzkIUCAIM2dOhEEcNijQuQDHgg4KOqRYwMGOIENIB90JBAA7');
                  background-repeat: no-repeat;
                  width: 16px;
                  height: 16px;
                  display: inline-block;
                  border: none;
                  text-decoration: none;
                  padding: 0px;
                  position: relative;
                  "></a></span>
          </div>
          <div class="mainpage-video-guide__play"></div>
        </div>
      </div>
    </div>

    <div class="mainpage__subscribe-form">
      <div class="mainpage__subscribe-form-text">
        <img src="https://www.chocotravel.com/media/v3/media/images/subscribe-icon.svg" alt="" />
        <p>
          Подпишитесь на рассылку и будьте в курсе всех самых выгодных цен и
          интересных новостей!
        </p>
      </div>
      <div class="mainpage__subscribe-form-actions">
        <div class="mainpage__subscribe-form-email">
          <input type="email" class="mainpage__subscribe-form-email-input" placeholder="Ваш E-mail" />
        </div>
        <div class="mainpage__subscribe-form-btn">
          <button class="mainpage__subscribe-form-button">Подписаться</button>
        </div>
      </div>
    </div>

    <div class="about_us_text">
      <p>
        Часто сталкиваетесь с необходимостью купить билеты на самолет? Думали
        ли Вы о том,как было бы здорово, если бы бронирование авиабилетов
        занимало всего 5 минут? Теперь это стало реально! Благодаря сервису
        Chocotravel.com купить авиабилеты онлайн в Казахстане можно в
        несколько кликов.
      </p>
      <p><strong>Покупка ЖД и авиабилетов онлайн:</strong></p>
      <p>1. Экономит Ваше время.</p>
      <p>
        Автоматизированная система поиска в режиме онлайн после ввода
        параметров находит лучшие варианты авиаперелета, предлагаемые всеми
        доступными авиакомпаниями. За считанные минуты перед Вами появится
        перечень выгодных предложений более чем от 1000 авиакомпаний. При этом
        Вам совершенноне нужно ехать в другой конец города и напрасно тратить
        время в длинных очередях в кассе!
      </p>
      <p>2. Экономит Ваши деньги.</p>
      <p>
        Вы сможете подобрать дешевые авиабилеты по различным направлениям.
        Цены на авиабилеты порадуют Вас, ведь мы продаем их без наценок.
      </p>
      <p>3. Множество способов оплаты.</p>
      <p>Вы можете оплатить покупку любым удобным для вас способом:</p>
      <ol>
        <li>банковскими картами VISA, Mastercard и Union Pay;</li>
        <li>через приложение Рахмет;</li>
        <li>в рассрочку Freedom Finance credit</li>
      </ol>
      <p><strong>Преимущества портала Chocotravel.com:</strong></p>
      <ul>
        <li>
          На сайте Вы можете найти, забронировать и купить авиабилеты онлайн
          на рейсы практически любой авиакомпании в мире.
        </li>
        <li>
          Мы помогаем найти билет на любое направление по минимальной
          стоимости.
        </li>
        <li>
          У нас Вы также можете приобрести железнодорожные билеты онлайн.
        </li>
        <li>
          При заполнении формы заказа Вам понадобится лишь один раз вписать
          информацию о себе. При последующих покупках система автоматически
          сохраняет данные, избавляя Вас от утомительной процедуры ввода
          данных. Возможность страхования по выбранной программе.
        </li>
      </ul>
    </div>

    <div class="install-app-mainpage-container">
      <picture>
        <source srcset="
            https://chocotravel.com/media/v3/media/images/mainpage/download-app.png
            " />
        <source srcset="
            https://chocotravel.com/media/v3/media/images/mainpage/download-app.webp
            " />
        <img src="https://chocotravel.com/media/v3/media/images/mainpage/download-app.png" alt="Установите приложение Chocotravel" width="424" height="404" />
      </picture>
      <div>
        <div class="install-app-mainpage-desc">
          <h3 class="install-app-mainpage-desc__head">
            Установи приложение Chocotravel!
          </h3>
          <p class="install-app-mainpage-desc__text">
            Все билеты без наценок в твоем мобильном.
          </p>
          <p class="install-app-mainpage-desc__text--small">
            Получить ссылку для скачивания по СМС
          </p>
          <div class="install-app-mainpage-form">
            <div class="install-app-mainpage-input-group">
              <input type="text" class="install-app-mainpage-input" placeholder="+7" />
              <input type="button" class="install-app-mainpage-btn" value="Получить" />
            </div>
          </div>
        </div>

        <div class="install-app-mainpage-links">
          <a href="https://h9c4k.app.goo.gl/LfjL">
            <img src="https://chocotravel.com/media/v3/media/images/icons/apps/app-store-badge.svg" width="138" height="45" />
          </a>
          <a href="https://h9c4k.app.goo.gl/CUYp">
            <img src="https://chocotravel.com/media/v3/media/images/icons/apps/google-play-badge.png" width="152" height="45" />
          </a>
          <a href="https://h9c4k.app.goo.gl/qxi8">
            <img src="https://chocotravel.com/media/v3/media/images/icons/apps/app-gallery-badge.png" width="152" height="45" />
          </a>
        </div>
      </div>
    </div>
  </div>
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
                <div class="footer-icons__item footer-icons__item--union-pay"></div>
              </div>
            </li>
          </ul>
        </div>
        <div class="footer__col --icons">
          <ul>
            <li class="footer_img">
              <div class="footer-icons">
                <a class="footer-icons__item footer-icons__item--astana_hub" target="_blank" rel="nofollow" href="https://astanahub.com/"></a>
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