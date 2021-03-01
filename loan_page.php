<?php
    $title = "Залог";
?>

<?php include 'includes/header.php'; ?>

<section class="banner banner_loan">
  <div class="wrapper wrapper_banner">
    <div class="banner__content">
      <h1 class="banner__title">Займ под залог автомобиля от 0,1% в день в любой точке Москвы</h1>
      <div class="banner__subtitle">Нужны деньги?</div>
      <form class="loan_form">
        <div class="input">
          <div class="input-wp input-wp_phone">
            <input id="phone" name="phone" placeholder="( ___ ) ___ - __ - __" type="tel" class="calculator__input">
          </div>
        </div>
        <div class="button button_loan_form">Получить займ</div>
      </form>
      <div class="banner__text">Нажимая на кнопку “Получить займ” я соглашаюсь на обработку персональных данных и согласен с <a href="#" target="_blank">политикой конфиденциальности</a></div>
    </div>
    <img class="main-slider__img lazyload" src="#" data-src="img/main-slider__img_loan.png" alt="">
  </div>
</section>

<div class="wrapper">
  <div class="breadcrumbs">
    <a href="#">Главная</a>
    <a href="#">Услуги</a>
    <span>Залог автомобиля</span>
  </div>
</div>

<div class="calculator calculator_loan">
  <div class="wrapper">
    <h2 class="calculator__h2">Калькулятор займа под залог автомобиля</h2>
    <div class="calculator__wrp calculator__wrp_small animation animation_bot">
      <div class="calculator__wp">
        <div class="calculator__top">
          <div class="calculator__block calculator__row_top active">
            <div class="calculator__wrapper">
              <div class="calculator__title">Шаг 1: <span>Укажите стоимость вашего транспортного средства и количество занимаемых им парковочных мест</span></div>
              <div class="calculator__inputs calculator__inputs_evenly">
                <div class="input">
                  <div class="input-wp input-wp_rub">
                    <input value="650 000" type="number" class="calculator__input">
                  </div>
                </div>
                <div class="input">
                  <input value="2" type="number" class="calculator__input">
                </div>
              </div>
            </div>
          </div>
          <div class="calculator__block calculator__block_slider calculator__row_top active">
            <div class="calculator__wrapper noUiEl">
              <div class="calculator__title">
                <div>Шаг 2: <span>Укажите, какая сумма вам требуется</span></div>
              </div>
              <div class="calculator__hidden">
                <div class="input input_center">
                  <div class="input-wp input-wp_rub">
                    <input value="500000" data-min="0" data-max="10000000" type="text" class="calculator__input">
                  </div>
                </div>
                <div class="noUi__wrp">
                  <div class="noUi__text noUi__text_min"></div>
                  <div class="noUi__text noUi__text_max"></div>
                  <div class="noUi"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="calculator__block calculator__block_slider calculator__row_top active">
            <div class="calculator__wrapper noUiEl">
              <div class="calculator__title">
                <div>Шаг 3: <span>Укажите срок, на который вам требуется займ</span></div>
              </div>
              <div class="calculator__hidden">
                <div class="input input_center">
                  <div class="input-wp input-wp_days">
                    <input value="10" data-min="1" data-max="365" type="number" class="calculator__input">
                  </div>
                </div>
                <div class="noUi__wrp">
                  <div class="noUi__text noUi__text_min"></div>
                  <div class="noUi__text noUi__text_max"></div>
                  <div class="noUi"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="calculator__block calculator__row_top active">
            <div class="calculator__wrapper">
              <div class="calculator__title">Шаг 4: <span>Укажите, в каких акциях и специальных предложениях вы участвуете</span></div>
              <div class="calculator__inputs calculator__inputs_evenly">
                <div class="input">
                  <select class="select2">
                    <option value="QuickCash">QuickCash</option>
                    <option value="QuickCash 2">QuickCash 2</option>
                    <option value="QuickCash 3">QuickCash 3</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="calculator-utps">
          <div class="calculator__wrapper calculator__wrapper_utps">
            <div class="calculator-utps__el">
              <div class="calculator-utps__title">Стоимость займа</div>
              <div class="calculator-utps__price calculator-utps__price_rub">65 000</div>
            </div>
            <div class="calculator-utps__el">
              <div class="calculator-utps__title">Выдадим сегодня</div>
              <div class="calculator-utps__price calculator-utps__price_rub">500 000</div>
            </div>
            <div class="calculator-utps__el">
              <div class="calculator-utps__title">Процентная ставка</div>
              <div class="calculator-utps__price">3%</div>
            </div>
          </div>
        </div>
        <div class="calculator__bottom">
          <div class="calculator__wrapper calculator__wrapper_bottom">
            <div class="calculator__star">* Расчет не является предложением и может быть изменен в меньшую или большую сторону при осмотре авто.</div>
            <div class="button open_loan">Оформить займ</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="present">
  <div class="wrapper wrapper_present">
    <div class="present__left">
      <img class="present__img lazyload" src="#" data-src="img/present__img.png" alt="">
      <div class="countdown countdown_present">
        <div class="countdown__top">До окончания акции:</div>
        <div class="countdown__wrp">
          <div class="countdown__el">
            <div class="countdown__number countdown__number_d">10</div>
            <div class="countdown__text">дней</div>
          </div>
          <div class="countdown__el">
            <div class="countdown__number countdown__number_h">17</div>
            <div class="countdown__text">часов</div>
          </div>
          <div class="countdown__el">
            <div class="countdown__number countdown__number_m">58</div>
            <div class="countdown__text">минут</div>
          </div>
          <div class="countdown__el">
            <div class="countdown__number countdown__number_s">37</div>
            <div class="countdown__text">секунд</div>
          </div>
        </div>
      </div>
    </div>
    <div class="present__right">
      <h2 class="title title_present">Мы дарим нашим клиентам в Новом году месяц без процентов</h2>
      <div class="present__text">Только в декабре при оформлении долгосрочного займа вы можете воспользоваться беспроцентным периодом длиной в один календарный месяц. Беспроцентный период вступает в силу строго со второго месяца использования займа.</div>
      <div class="present__text present__text_large">Пользуйтесь деньгами в два раза дольше и не думайте о процентах.</div>
      <div class="present__text">
        Подробности у наших менеджеров по телефону:<br />
        <a href="tel:+7495150-0-100" class="present__phone">+7 495 150-0-100</a>
      </div>
    </div>
  </div>
</section>

<section class="popular">
  <div class="wrapper wrapper_popular">
    <h2 class="title title_center">Популярные марки автомобилей в залог</h2>
    <div class="popular__slider">
      <a href="#" class="popular__slide">
        <div class="popular__image" style="background-image: url(pic/popular__image_1.png);"></div>
        <div class="popular__title">AUDI</div>
      </a>
      <a href="#" class="popular__slide">
        <div class="popular__image" style="background-image: url(pic/popular__image_2.png);"></div>
        <div class="popular__title">LEXUS</div>
      </a>
      <a href="#" class="popular__slide">
        <div class="popular__image" style="background-image: url(pic/popular__image_3.png);"></div>
        <div class="popular__title">BMW</div>
      </a>
      <a href="#" class="popular__slide">
        <div class="popular__image" style="background-image: url(pic/popular__image_4.png);"></div>
        <div class="popular__title">RANGE ROVER</div>
      </a>
      <a href="#" class="popular__slide">
        <div class="popular__image" style="background-image: url(pic/popular__image_5.png);"></div>
        <div class="popular__title">PORSCHE</div>
      </a>
      <a href="#" class="popular__slide">
        <div class="popular__image" style="background-image: url(pic/popular__image_1.png);"></div>
        <div class="popular__title">AUDI</div>
      </a>
      <a href="#" class="popular__slide">
        <div class="popular__image" style="background-image: url(pic/popular__image_2.png);"></div>
        <div class="popular__title">LEXUS</div>
      </a>
      <a href="#" class="popular__slide">
        <div class="popular__image" style="background-image: url(pic/popular__image_3.png);"></div>
        <div class="popular__title">BMW</div>
      </a>
      <a href="#" class="popular__slide">
        <div class="popular__image" style="background-image: url(pic/popular__image_4.png);"></div>
        <div class="popular__title">RANGE ROVER</div>
      </a>
      <a href="#" class="popular__slide">
        <div class="popular__image" style="background-image: url(pic/popular__image_5.png);"></div>
        <div class="popular__title">PORSCHE</div>
      </a>
    </div>
  </div>
  <div class="wrapper wrapper_popular-bottom">
    <div class="popular__show-more">Не нашли марку своего автомобиля?</div>
    <div class="popular__drop">
      <div class="popular__col">
        <a href="#" class="popular__el">Aston Martin</a>
        <a href="#" class="popular__el">Alfa Romeo</a>
        <a href="#" class="popular__el">Acura</a>
        <a href="#" class="popular__el">BMW</a>
        <a href="#" class="popular__el">Bugatti</a>
        <a href="#" class="popular__el">Chevrolet</a>
        <a href="#" class="popular__el">Cadillac</a>
        <a href="#" class="popular__el">Cherry</a>
        <a href="#" class="popular__el">Citroen</a>
        <a href="#" class="popular__el">Daimler</a>
        <a href="#" class="popular__el">Datsun</a>
        <a href="#" class="popular__el">Dodge</a>
      </div>
      <div class="popular__col">
        <a href="#" class="popular__el">Aston Martin</a>
        <a href="#" class="popular__el">Alfa Romeo</a>
        <a href="#" class="popular__el">Acura</a>
        <a href="#" class="popular__el">BMW</a>
        <a href="#" class="popular__el">Bugatti</a>
        <a href="#" class="popular__el">Chevrolet</a>
        <a href="#" class="popular__el">Cadillac</a>
        <a href="#" class="popular__el">Cherry</a>
        <a href="#" class="popular__el">Citroen</a>
        <a href="#" class="popular__el">Daimler</a>
        <a href="#" class="popular__el">Datsun</a>
        <a href="#" class="popular__el">Dodge</a>
      </div>
      <div class="popular__col">
        <a href="#" class="popular__el">Aston Martin</a>
        <a href="#" class="popular__el">Alfa Romeo</a>
        <a href="#" class="popular__el">Acura</a>
        <a href="#" class="popular__el">BMW</a>
        <a href="#" class="popular__el">Bugatti</a>
        <a href="#" class="popular__el">Chevrolet</a>
        <a href="#" class="popular__el">Cadillac</a>
        <a href="#" class="popular__el">Cherry</a>
        <a href="#" class="popular__el">Citroen</a>
        <a href="#" class="popular__el">Daimler</a>
        <a href="#" class="popular__el">Datsun</a>
        <a href="#" class="popular__el">Dodge</a>
      </div>
      <div class="popular__col">
        <a href="#" class="popular__el">Aston Martin</a>
        <a href="#" class="popular__el">Alfa Romeo</a>
        <a href="#" class="popular__el">Acura</a>
        <a href="#" class="popular__el">BMW</a>
        <a href="#" class="popular__el">Bugatti</a>
        <a href="#" class="popular__el">Chevrolet</a>
        <a href="#" class="popular__el">Cadillac</a>
        <a href="#" class="popular__el">Cherry</a>
        <a href="#" class="popular__el">Citroen</a>
        <a href="#" class="popular__el">Daimler</a>
        <a href="#" class="popular__el">Datsun</a>
        <a href="#" class="popular__el">Dodge</a>
      </div>
      <div class="popular__col">
        <a href="#" class="popular__el">Aston Martin</a>
        <a href="#" class="popular__el">Alfa Romeo</a>
        <a href="#" class="popular__el">Acura</a>
        <a href="#" class="popular__el">BMW</a>
        <a href="#" class="popular__el">Bugatti</a>
        <a href="#" class="popular__el">Chevrolet</a>
        <a href="#" class="popular__el">Cadillac</a>
        <a href="#" class="popular__el">Cherry</a>
        <a href="#" class="popular__el">Citroen</a>
        <a href="#" class="popular__el">Daimler</a>
        <a href="#" class="popular__el">Datsun</a>
        <a href="#" class="popular__el">Dodge</a>
      </div>
      <div class="popular__col">
        <a href="#" class="popular__el">Aston Martin</a>
        <a href="#" class="popular__el">Alfa Romeo</a>
        <a href="#" class="popular__el">Acura</a>
        <a href="#" class="popular__el">BMW</a>
        <a href="#" class="popular__el">Bugatti</a>
        <a href="#" class="popular__el">Chevrolet</a>
        <a href="#" class="popular__el">Cadillac</a>
        <a href="#" class="popular__el">Cherry</a>
        <a href="#" class="popular__el">Citroen</a>
        <a href="#" class="popular__el">Daimler</a>
        <a href="#" class="popular__el">Datsun</a>
        <a href="#" class="popular__el">Dodge</a>
      </div>
      <div class="popular__col">
        <a href="#" class="popular__el">Aston Martin</a>
        <a href="#" class="popular__el">Alfa Romeo</a>
        <a href="#" class="popular__el">Acura</a>
        <a href="#" class="popular__el">BMW</a>
        <a href="#" class="popular__el">Bugatti</a>
        <a href="#" class="popular__el">Chevrolet</a>
        <a href="#" class="popular__el">Cadillac</a>
        <a href="#" class="popular__el">Cherry</a>
        <a href="#" class="popular__el">Citroen</a>
        <a href="#" class="popular__el">Daimler</a>
        <a href="#" class="popular__el">Datsun</a>
        <a href="#" class="popular__el">Dodge</a>
      </div>
    </div>
  </div>
</section>

<section class="how">
  <div class="wrapper">
    <h2 class="title title_center">Как взять займ под залог авто?</h2>
    <div class="how__wrp">
      <div class="how__arrow how__arrow_1"></div>
      <div class="how__arrow how__arrow_2"></div>
      <div class="how__el">
        <img class="how__img lazyload" src="#" data-src="img/how__img_1.png" alt="">
        <div class="how__title">Оформить заявку или позвонить</div>
      </div>
      <div class="how__el">
        <img class="how__img lazyload" src="#" data-src="img/how__img_2.png" alt="">
        <div class="how__title">Приехать в офис с паспортом и ПТС</div>
      </div>
      <div class="how__el">
        <img class="how__img lazyload" src="#" data-src="img/how__img_3.png" alt="">
        <div class="how__title">Получить деньги</div>
      </div>
    </div>
    <div class="button button_how open_loan">Перейти к первому шагу</div>
  </div>
</section>

<section class="doubt">
  <div class="wrapper">
    <h2 class="title title_doubt title_center title_white">Все еще сомневаетесь, что заем под авто – выгодное решение?</h2>
    <div class="doubt__subtitle">Для наших клиентов бесплатно:</div>
    <div class="doubt__wrp">
      <article class="doubt__el">
        <img class="doubt__img lazyload" src="#" data-src="img/doubt__img_1.svg" alt="">
        <div class="doubt__number">1</div>
        <h3 class="doubt__title">Пролонгация договора</h3>
        <div class="doubt__text">Dictum aliquam at pulvinar euismod ut odio eget auctor elementum massa</div>
      </article>
      <article class="doubt__el">
        <img class="doubt__img lazyload" src="#" data-src="img/doubt__img_2.svg" alt="">
        <div class="doubt__number">2</div>
        <h3 class="doubt__title">Охраняемая парковка</h3>
        <div class="doubt__text">Amet duis augue id nisi ac non eget nec quam arcu</div>
      </article>
      <article class="doubt__el">
        <img class="doubt__img lazyload" src="#" data-src="img/doubt__img_3.svg" alt="">
        <div class="doubt__number">3</div>
        <h3 class="doubt__title">Страхование</h3>
        <div class="doubt__text">Sed eget facilisis dolor nisi, eget eget ac, ut ultricies pellentesque risus habitant</div>
      </article>
      <article class="doubt__el">
        <img class="doubt__img lazyload" src="#" data-src="img/doubt__img_4.svg" alt="">
        <div class="doubt__number">4</div>
        <h3 class="doubt__title">Круглосуточная поддержка</h3>
        <div class="doubt__text">Blandit leo, viverra tristique odio varius sed iaculis egestas in urna erat mauris cursus nisi</div>
      </article>
      <article class="doubt__el">
        <img class="doubt__img lazyload" src="#" data-src="img/doubt__img_5.svg" alt="">
        <div class="doubt__number">5</div>
        <h3 class="doubt__title">Удобный личный кабинет</h3>
        <div class="doubt__text">Semper at tempus, congue mauris nisi sodales et turpis in</div>
      </article>
      <article class="doubt__el">
        <img class="doubt__img lazyload" src="#" data-src="img/doubt__img_6.svg" alt="">
        <div class="doubt__number">6</div>
        <h3 class="doubt__title">Онлайн-оценка</h3>
        <div class="doubt__text">Id ac ac praesent gravida semper neque, et velit et elementum purus porttitor sit</div>
      </article>
    </div>
  </div>
</section>

<section class="help">
  <div class="wrapper">
    <h2 class="title title_help title_center">Мы оказали оперативную финансовую помощь уже тысячам клиентов, которые и дальше пользуются намими услугами:</h2>
    <div class="help__subtitle">Примеры автозалогов:</div>
    <div class="help__wrp">
      <article class="help__el">
        <div class="help__image" style="background-image: url(pic/help__image_1.jpg);"></div>
        <div class="help__bottom">
          <div>
            <h3 class="help__title">Mercedes Benz S-класс</h3>
            <div class="help__text">3.5 л. / 272 л.с. / Бензин</div>
          </div>
          <ul class="help__list">
            <li>Сумма залога: <b>350 000 р.</b></li>
            <li>Дата займа: <b>2019 г.</b></li>
          </ul>
        </div>
      </article>
      <article class="help__el">
        <div class="help__image" style="background-image: url(pic/help__image_2.jpg);"></div>
        <div class="help__bottom">
          <div>
            <h3 class="help__title">Audi A6 2020</h3>
            <div class="help__text">6 л. / 317 л.с. / Бензин</div>
          </div>
          <ul class="help__list">
            <li>Сумма залога: <b>600 000 р.</b></li>
            <li>Дата займа: <b>2020 г.</b></li>
          </ul>
        </div>
      </article>
      <article class="help__el">
        <div class="help__image" style="background-image: url(pic/help__image_3.jpg);"></div>
        <div class="help__bottom">
          <div>
            <h3 class="help__title">BMW X6 2019</h3>
            <div class="help__text">10 л. / 408 л.с. / Дизель</div>
          </div>
          <ul class="help__list">
            <li>Сумма залога: <b>1 200 000 р.</b></li>
            <li>Дата займа: <b>2020 г.</b></li>
          </ul>
        </div>
      </article>
    </div>
    <div class="button button_help open_loan">Оформить займ</div>
    <a href="#" class="help__link">Читать отзывы клиентов</a>
  </div>
</section>

<section class="also">
  <div class="wrapper">
    <h2 class="title title_center">Также смотрите:</h2>
    <div class="also__wrp">
      <a href="#" class="also__el">
        <h3 class="also__title">Habitant aliquam, cras</h3>
        <div class="also__text">Eleifend porttitor morbi luctus maecenas sit ullamcorper ut elementum etiam. Nec diam, vitae tempus enim, feugiat eget...</div>
      </a>
      <a href="#" class="also__el">
        <h3 class="also__title">Habitant aliquam, cras</h3>
        <div class="also__text">Eleifend porttitor morbi luctus maecenas sit ullamcorper ut elementum etiam. Nec diam, vitae tempus enim, feugiat eget...</div>
      </a>
      <a href="#" class="also__el">
        <h3 class="also__title">Habitant aliquam, cras</h3>
        <div class="also__text">Eleifend porttitor morbi luctus maecenas sit ullamcorper ut elementum etiam. Nec diam, vitae tempus enim, feugiat eget...</div>
      </a>
      <a href="#" class="also__el">
        <h3 class="also__title">Habitant aliquam, cras</h3>
        <div class="also__text">Eleifend porttitor morbi luctus maecenas sit ullamcorper ut elementum etiam. Nec diam, vitae tempus enim, feugiat eget...</div>
      </a>
      <a href="#" class="also__el">
        <h3 class="also__title">Habitant aliquam, cras</h3>
        <div class="also__text">Eleifend porttitor morbi luctus maecenas sit ullamcorper ut elementum etiam. Nec diam, vitae tempus enim, feugiat eget...</div>
      </a>
      <a href="#" class="also__el">
        <h3 class="also__title">Habitant aliquam, cras</h3>
        <div class="also__text">Eleifend porttitor morbi luctus maecenas sit ullamcorper ut elementum etiam. Nec diam, vitae tempus enim, feugiat eget...</div>
      </a>
    </div>
    <div class="also__show-more">Показать еще</div>
  </div>
</section>

<?php include 'includes/often.php'; ?>

<?php include 'includes/more.php'; ?>

<?php include 'includes/seo_text.php'; ?>

<?php include 'includes/map.php'; ?>

<?php include 'includes/footer.php'; ?>