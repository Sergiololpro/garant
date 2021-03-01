<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="css/styles.css?v=22">

  <meta property="og:site_name" content="Garant" />
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:title" content="Garant main" />
  <meta property="og:description" content="Garant description" />
  <meta property="og:image" content="img/logo.svg" />
  <meta property="og:url" content="https://garant.ru" />
  <meta property="og:type" content="website" />

  <meta name="description" content="Garant">
  <meta name="keywords" content="Garant">
  <title>Личный кабинет</title>
</head>

<body class="cab">

  <header class="cab-header">
    <div class="wrapper wrapper_cab-header">
      <div class="cab-header__left">
        <div class="cab-header__back"></div>
        <div class="cab-header__text">
          <div class="cab-header__grey">Автоломбард Гарант</div>
          <div class="cab-header__title">Личный кабинет</div>
        </div>
      </div>
      <div class="cab-header__exit">Выйти</div>
    </div>
  </header>

  <div class="cab-main">
    <div class="wrapper">
      <div class="cab-top">
        <div data-id="1" class="cab-top__nav active">Информация о клиенте</div>
        <div data-id="2" class="cab-top__nav">Действующие займы (5)</div>
        <div data-id="3" class="cab-top__nav">Индивидуальные предложения</div>
      </div>

      <div data-id="1" class="cab-content active">
        <div class="cab-content__top">
          <div class="cab-content__wrp">
            <div class="cab-content__left">
              <div class="cab-content__title">Персональные данные</div>
              <div class="cab-input">
                <label for="surname" class="cab-input__label">Фамилия</label>
                <input disabled id="surname" name="surname" placeholder="Константинопольский" type="text" class="cab-input__input">
              </div>
              <div class="cab-input">
                <label for="name" class="cab-input__label">Имя</label>
                <input disabled id="name" name="name" placeholder="Юрий" type="text" class="cab-input__input">
              </div>
              <div class="cab-input">
                <label for="patronymic" class="cab-input__label">Отчество</label>
                <input disabled id="patronymic" name="patronymic" placeholder="Александрович" type="text" class="cab-input__input">
              </div>
              <div class="cab-input">
                <label for="birthdate" class="cab-input__label">Дата рождения</label>
                <input disabled id="birthdate" name="birthdate" placeholder="23.08.1983" type="number" class="cab-input__input">
              </div>
            </div>
            <div class="cab-content__right">
              <div class="cab-content__title">Программы и карты лояльности</div>
              <div class="cab-content__card">
                <div class="cab-card">
                  <div class="cab-card__top">
                    <img class="cab-card__card lazyload" src="#" data-src="img/cab-card__card.png" alt="">
                  </div>
                  <div class="cab-card__bottom">
                    <div class="cab-card__text">Сумма на бонусном счету</div>
                    <div class="cab-card__price">650 000</div>
                    <div class="cab-card__under">10 000 баллов = 10 000 руб.</div>
                  </div>
                </div>
                <div class="cab-bars">
                  <div class="cab-bars__title">До изменения номинала карты осталось:</div>
                  <div class="cab-bars__wrp">
                    <div class="cab-bars__text">оплатить услуги на сумму: <span>15 000</span></div>
                    <div class="cab-bars__bar">
                      <div class="cab-bars__line" style="width: 70%;"></div>
                    </div>
                  </div>
                  <div class="cab-bars__wrp">
                    <div class="cab-bars__text">или получить займ на сумму: <span>1 000 000</span></div>
                    <div class="cab-bars__bar">
                      <div class="cab-bars__line" style="width: 10%;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cab-content__bottom">Цифры могут быть указаны с погрешностями, точные суммы уточняйте у специалиста</div>
      </div>

      <div data-id="2" class="cab-content">
        <div class="cab-content__top">
          <div class="cab-content__title">Ваши займы</div>
          <table class="cab-table">
            <thead>
              <tr>
                <td>№</td>
                <td>Наименование</td>
                <td>Дата оплаты</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><span>2281996: Часы Rolex</span></td>
                <td>23.02.21</td>
              </tr>
              <tr>
                <td>2</td>
                <td><span>23569001: Автомобиль BMW X5</span></td>
                <td>14.02.21</td>
              </tr>
              <tr>
                <td>3</td>
                <td><span>21448094: Автомобиль Mazda CX7</span></td>
                <td class="red">18.01.21</td>
              </tr>
              <tr>
                <td>4</td>
                <td><span>18007026: Мотоцикл SUZUKI XR281</span></td>
                <td class="red">12.01.21</td>
              </tr>
              <tr>
                <td>5</td>
                <td><a href="#">17223800: Часы Rolex</a></td>
                <td>06.02.21</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="cab-content__bottom">Цифры могут быть указаны с погрешностями, точные суммы уточняйте у специалиста</div>
      </div>

      <div data-id="3" class="cab-content cab-content cab-content_actions">
        <article class="social__el">
          <div class="social__main">
            <div class="social__content">
              <h3 class="social__title">РАБОТАЕМ НА ВАШИХ УСЛОВИЯХ</h3>
              <div class="social__text">Ждете самые выгодные условия, чтобы взять займ? Или, может быть, вы уже имеете займ в другой организации, но процентная ставка оказалась слишком высока? Время брать инициативу в свои руки!</div>
              <div class="social__block">
                <p>Для того, чтобы воспользоваться акционным предложением, достаточно предоставить при оформлении сделки документы, подтверждающие факт вашей принадлежности к льготной категории граждан.</p>
              </div>
            </div>
            <img class="social__img lazyload" src="#" data-src="pic/social__img_1.png" alt="">
          </div>
          <div class="social__under">
            <div class="social__left">
              <div class="button button_social button_green open_loan">Связаться с менеджером</div>
              <a href="#" class="maximum__more">Подробно об акции</a>
            </div>
            <div class="social__grey">
              *акция действует только для новых клиентов <br />
              **не является свободной офертой
            </div>
          </div>
        </article>
        <article class="social__el">
          <div class="social__main">
            <div class="social__content">
              <h3 class="social__title">РАБОТАЕМ НА ВАШИХ УСЛОВИЯХ</h3>
              <div class="social__text">Ждете самые выгодные условия, чтобы взять займ? Или, может быть, вы уже имеете займ в другой организации, но процентная ставка оказалась слишком высока? Время брать инициативу в свои руки!</div>
              <div class="social__block">
                <p>Для того, чтобы воспользоваться акционным предложением, достаточно предоставить при оформлении сделки документы, подтверждающие факт вашей принадлежности к льготной категории граждан.</p>
              </div>
            </div>
            <img class="social__img lazyload" src="#" data-src="pic/social__img_1.png" alt="">
          </div>
          <div class="social__under">
            <div class="social__left">
              <div class="button button_social button_green open_loan">Связаться с менеджером</div>
              <a href="#" class="maximum__more">Подробно об акции</a>
            </div>
            <div class="social__grey">
              *акция действует только для новых клиентов <br />
              **не является свободной офертой
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>

  <footer class="cab-footer">
    <div class="wrapper wrapper_cab-footer">
      <a href="#" class="cab-footer__logo">
        <img src="img/cab-logo.svg" alt="">
      </a>
      <div class="cab-footer__contacts">
        <a href="tel:+7(499)558-13-38" class="cab-footer__phone">+7 (499) 558-13-38</a>
        <a href="mailto:info@lombard-car.ru" class="cab-footer__email">info@lombard-car.ru</a>
      </div>
      <div class="cab-footer__links">
        <a href="#" class="cab-footer__link">Связаться с руководством</a>
        <a href="#" class="cab-footer__link">Политика конфиденциальности</a>
      </div>
    </div>
  </footer>

  <script src="js/libs/jquery/jquery.js"></script>
  <script src="js/libs/lazysizes/lazysizes.js"></script>
  <script src="js/script.js?v=22"></script>
</body>

</html>