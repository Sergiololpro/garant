<?php
    $title = "Контакты внутренняя";
?>

<?php include 'includes/header.php'; ?>

<div class="wrapper">
  <div class="breadcrumbs breadcrumbs_left">
    <a href="#">Главная</a>
    <span>Контактная информация</span>
  </div>
</div>

<div class="wrapper">
  <div class="contacts__top">
    <h1 class="title title_contacts">Контактная информация</h1>
  </div>
</div>

<div class="contacts-page">
  <div class="wrapper">
    <div class="contacts-page__wrp">
      <div class="contacts-page__left">
        <div class="contacts-page__title">Офис на «Динамо»</div>
        <div class="contacts-page__under">Центральный офис</div>
        <div class="contacts-page__block contacts-page__block_adress">
          Москва, Ленинградский проспект дом 37 к9<br />
          Бизнес-отель «АЭРОСТАР», офис 604, 4 подъезд<br />
          (м.Динамо, около третьего кольца)
        </div>
        <div class="contacts-page__block contacts-page__block_time">
          09:00–23:00 без выходных и праздников.<br />
          Круглосуточно работаем: по предварительной договорённости.
        </div>
        <div class="contacts-page__block contacts-page__block_contacts">
          <a href="+7(495)1500100" class="contacts-page__phone">+7 (495) 150 0 100</a>
          <a href="mailto:info@lombard-car.ru">info@lombard-car.ru</a>
          <div class="messengers messengers_contacts-page">
            <a href="#" class="messengers__el messengers__el_whatsapp"></a>
            <a href="#" class="messengers__el messengers__el_telegram"></a>
          </div>
        </div>
      </div>
      <div class="contacts-page__right">
        <div class="contacts-page__image">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9154e1ca4cf5e646c3822675cc93405f36a4c94e27d2f510e656e544bbe3a524&amp;source=constructor"></iframe>
          <div class="contacts__lupe"></div>
        </div>  
        <div class="contacts-page__bottom">
          <div class="contacts-page__route">Проложить маршрут</div>
          <div class="contacts-page__location">Географические координаты: 37.547552, / 55.789901</div>
        </div>
      </div>
    </div>

    <?php include 'includes/gallery__slider.php'; ?>

  </div>
</div>

<div class="doubt doubt_contacts-page">
  <div class="wrapper">
    <div class="doubt__wrp">
      <article class="doubt__el">
        <img class="doubt__img lazyload" width="34" height="42" src="#" data-src="img/doubt_about_1.svg" alt="">
        <h3 class="doubt__title">Крытая и круглосуточно охраняемая парковка</h3>
      </article>
      <article class="doubt__el">
        <img class="doubt__img lazyload" width="67" height="37" src="#" data-src="img/doubt__img_11.svg" alt="">
        <h3 class="doubt__title">Работаем со строительной спецтехникой</h3>
      </article>
      <article class="doubt__el">
        <img class="doubt__img lazyload" width="48" height="48" src="#" data-src="img/doubt__img_7.svg" alt="">
        <h3 class="doubt__title">10 специалистов в штате</h3>
        <div class="doubt__text">
          <a href="#" target="_blank">Заказать консультацию</a></div>
      </article>
      <article class="doubt__el">
        <img class="doubt__img lazyload" width="50" height="43" src="#" data-src="img/doubt__img_10.svg" alt="">
        <h3 class="doubt__title">Круглосуточное<br />
          видеонаблюдение</h3>
      </article>
      <article class="doubt__el">
        <img class="doubt__img lazyload" width="56" height="35" src="#" data-src="img/doubt__img_8.svg" alt="">
        <h3 class="doubt__title">Комфортный и современный офис
          в центре города</h3>
      </article>
      <article class="doubt__el">
        <img class="doubt__img lazyload" width="37" height="37" src="#" data-src="img/doubt__img_9.svg" alt="">
        <h3 class="doubt__title">Выдаем наличные<br />
          в течении 30 минут</h3>
      </article>
    </div>
    <div class="contacts-page__button">оставить машину у нас</div>
  </div>
</div>

<?php include 'includes/spend.php'; ?>

<?php include 'includes/requisites.php'; ?>

<?php include 'includes/seo_text.php'; ?>

<?php include 'includes/footer.php'; ?>