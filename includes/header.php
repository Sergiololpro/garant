<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="js/libs/slick/slick.css">
  <link rel="stylesheet" href="js/libs/select2/select2.min.css">
  <link rel="stylesheet" href="js/libs/nouislider/nouislider.min.css">
  <link rel="stylesheet" href="css/styles.css?v=27">

  <meta property="og:site_name" content="Garant" />
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:title" content="Garant main" />
  <meta property="og:description" content="Garant description" />
  <meta property="og:image" content="img/logo.svg" />
  <meta property="og:url" content="https://garant.ru" />
  <meta property="og:type" content="website" />

  <meta name="description" content="Garant">
  <meta name="keywords" content="Garant">
  <title><?=$title?></title>
</head>

<body>

  <header class="header">
    <div class="wrapper wrapper_header">
      <div class="menu">
        <div class="menu__top">
          <div class="header__menu header__menu_close">
            <div></div>
            <div></div>
            <div></div>
          </div>
          <div class="header__cabinet header__cabinet_menu">
            <div class="cabinet-modal__img"></div>
            <form class="cabinet-modal">
              <div class="cabinet-modal__text">Войти в личный кабинет</div>
              <div class="input">
                <div class="input-wp">
                  <input name="login" placeholder="Логин" type="text" class="calculator__input">
                </div>
              </div>
              <div class="input input_error">
                <div class="input-wp">
                  <input name="password" placeholder="Пароль" type="password" class="calculator__input">
                </div>
              </div>
              <div class="button button_green button_cabinet-modal">Войти</div>
              <a href="#" class="cabinet-modal__link">Забыли пароль?</a>
            </form>
          </div>
          <div class="lang lang_menu">
            <div class="lang__top">
              <div data-lang="1" class="lang__top-el active">Ru</div>
              <div data-lang="2" class="lang__top-el">Eng</div>
              <div data-lang="3" class="lang__top-el">Ka</div>
              <div data-lang="4" class="lang__top-el">Az</div>
              <div data-lang="5" class="lang__top-el">Hy</div>
            </div>
            <div class="lang__drop">
              <div data-lang="1" class="lang__drop-el active">Ru</div>
              <div data-lang="2" class="lang__drop-el">Eng</div>
              <div data-lang="3" class="lang__drop-el">Ka</div>
              <div data-lang="4" class="lang__drop-el">Az</div>
              <div data-lang="5" class="lang__drop-el">Hy</div>
            </div>
          </div>
        </div>
        <div class="menu__wp">
          <nav class="menu__block">
            <a href="#" class="menu__main-link">УСЛУГИ</a>
            <div class="menu__wrp">
              <a href="#" class="menu__sub-link">Залог легкового автомобиля</a>
              <a href="#" class="menu__sub-link">Залог грузового автомобиля</a>
              <a href="#" class="menu__sub-link">Залог спецтехники</a>
              <a href="#" class="menu__sub-link">Залог строительного транспорта</a>
              <a href="#" class="menu__sub-link">Залог мотоцикла</a>
              <a href="#" class="menu__sub-link">Залог водного транспорта</a>
              <a href="#" class="menu__sub-link">Залог воздушного транспорта</a>
              <a href="#" class="menu__sub-link">VIP ломбард</a>
              <a href="#" class="menu__sub-link">Перезалог автомобилей</a>
              <a href="#" class="menu__sub-link">Совместная продажа</a>
              <a href="#" class="menu__sub-link">Предложить свой залог</a>
              <a href="#" class="menu__sub-link">Бесплатный выезд оценщика</a>
            </div>
          </nav>
          <nav class="menu__block">
            <a href="#" class="menu__main-link">О КОМПАНИИ</a>
            <div class="menu__wrp">
              <a href="#" class="menu__sub-link">История компании</a>
              <a href="#" class="menu__sub-link">Преимущества</a>
              <a href="#" class="menu__sub-link">СМИ о нас</a>
              <a href="#" class="menu__sub-link">Вакансии</a>
            </div>
          </nav>
          <nav class="menu__block">
            <a href="#" class="menu__main-link">КЛИЕНТАМ</a>
            <div class="menu__wrp">
              <a href="#" class="menu__sub-link">Условия займов</a>
              <a href="#" class="menu__sub-link">Правила автоломбарда</a>
              <a href="#" class="menu__sub-link">Отзывы</a>
              <a href="#" class="menu__sub-link">FAQ</a>
            </div>
          </nav>
          <nav class="menu__block">
            <a href="#" class="menu__main-link">ИНФОРМАЦИЯ</a>
            <div class="menu__wrp">
              <a href="#" class="menu__sub-link">Программа лояльности</a>
              <a href="#" class="menu__sub-link">Скидки для пенсионеров</a>
              <a href="#" class="menu__sub-link">Актуальные акции</a>
              <a href="#" class="menu__sub-link">Контактная информация</a>
            </div>
          </nav>
        </div>
      </div>
      <div class="search">
        <div class="wrapper">
          <div class="search__wrp">
            <input class="search__input" placeholder="Поиск по сайту" type="text">
            <div class="button button_green button_search">Искать</div>
          </div>
          <div class="search__results active">
            <div class="search__title">Результаты поиска</div>
            <div class="search__els">
              <a href="#" class="search__el">Срок получения наличных</a>
              <a href="#" class="search__el">Срок получения денег на карту</a>
              <a href="#" class="search__el">Срок расмотрения заявки</a>
              <a href="#" class="search__el">Срок действия договора залога</a>
            </div>
          </div>
        </div>
      </div>
      <div class="header__left">
        <div class="header__menu">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <a href="#" class="logo logo_header">
          <img src="#" data-src="img/logo.svg" class="lazyload" alt="">
        </a>
      </div>
      <nav class="header-nav">
        <div class="header-nav__el">
          <a href="#" class="header-nav__link">Услуги</a>
          <div class="header-drop">
            <div class="wrapper wrapper_header-drop">
              <div class="header-drop__col">
                <a href="#" class="header-drop__el">Залог легкового автомобиля</a>
                <a href="#" class="header-drop__el">Залог грузового автомобиля</a>
                <a href="#" class="header-drop__el">Залог спецтехники</a>
                <a href="#" class="header-drop__el">Залог строительного транспорта</a>
                <a href="#" class="header-drop__el">Залог мотоцикла</a>
                <a href="#" class="header-drop__el">Залог водного транспорта</a>
                <a href="#" class="header-drop__el">Залог воздушного транспорта</a>
              </div>
              <div class="header-drop__col">
                <a href="#" class="header-drop__el">VIP ломбард</a>
                <a href="#" class="header-drop__el">Перезалог автомобилей</a>
                <a href="#" class="header-drop__el">Совместная продажа</a>
                <a href="#" class="header-drop__el">Предложить свой залог</a>
                <a href="#" class="header-drop__el">Бесплатный выезд оценщика</a>
              </div>
            </div>
          </div>
        </div>
        <div class="header-nav__el">
          <a href="#" class="header-nav__link">О компании</a>
          <div class="header-drop">
            <div class="wrapper wrapper_header-drop">
              <div class="header-drop__col">
                <a href="#" class="header-drop__el">История компании</a>
                <a href="#" class="header-drop__el">Преимущества</a>
                <a href="#" class="header-drop__el">СМИ о нас</a>
                <a href="#" class="header-drop__el">Вакансии</a>
              </div>
            </div>
          </div>
        </div>
        <div class="header-nav__el">
          <a href="#" class="header-nav__link">Клиентам</a>
          <div class="header-drop">
            <div class="wrapper wrapper_header-drop">
              <div class="header-drop__col">
                <a href="#" class="header-drop__el">Условия займов</a>
                <a href="#" class="header-drop__el">Правила автоломбарда</a>
                <a href="#" class="header-drop__el">Отзывы</a>
                <a href="#" class="header-drop__el">FAQ</a>
              </div>
            </div>
          </div>
        </div>
        <div class="header-nav__el">
          <a href="#" class="header-nav__link">Акции</a>
          <div class="header-drop">
            <div class="wrapper wrapper_header-drop">
              <div class="header-drop__col">
                <a href="#" class="header-drop__el">Залог легкового автомобиля</a>
                <a href="#" class="header-drop__el">Залог грузового автомобиля</a>
                <a href="#" class="header-drop__el">Залог спецтехники</a>
                <a href="#" class="header-drop__el">Залог строительного транспорта</a>
                <a href="#" class="header-drop__el">Залог мотоцикла</a>
                <a href="#" class="header-drop__el">Залог водного транспорта</a>
                <a href="#" class="header-drop__el">Залог воздушного транспорта</a>
              </div>
              <div class="header-drop__col">
                <a href="#" class="header-drop__el">VIP ломбард</a>
                <a href="#" class="header-drop__el">Перезалог автомобилей</a>
                <a href="#" class="header-drop__el">Совместная продажа</a>
                <a href="#" class="header-drop__el">Предложить свой залог</a>
                <a href="#" class="header-drop__el">Бесплатный выезд оценщика</a>
              </div>
            </div>
          </div>
        </div>
        <div class="header-nav__el">
          <a href="#" class="header-nav__link">Контакты</a>
          <div class="header-drop">
            <div class="wrapper wrapper_header-drop">
              <div class="header-drop__col">
                <a href="#" class="header-drop__el">Залог легкового автомобиля</a>
                <a href="#" class="header-drop__el">Залог грузового автомобиля</a>
                <a href="#" class="header-drop__el">Залог спецтехники</a>
                <a href="#" class="header-drop__el">Залог строительного транспорта</a>
                <a href="#" class="header-drop__el">Залог мотоцикла</a>
                <a href="#" class="header-drop__el">Залог водного транспорта</a>
                <a href="#" class="header-drop__el">Залог воздушного транспорта</a>
              </div>
              <div class="header-drop__col">
                <a href="#" class="header-drop__el">VIP ломбард</a>
                <a href="#" class="header-drop__el">Перезалог автомобилей</a>
                <a href="#" class="header-drop__el">Совместная продажа</a>
                <a href="#" class="header-drop__el">Предложить свой залог</a>
                <a href="#" class="header-drop__el">Бесплатный выезд оценщика</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="header-buttons">
        <div class="header-buttons__el to_calc">Рассчитать</div>
        <div class="header-buttons__el header-buttons__el_second open_loan">Получить займ</div>
      </div>
      <a href="tel:+7495506-17-77" class="header__phone">+7 495 506-17-77</a>
      <div class="messengers messengers_header">
        <a href="#" class="messengers__el messengers__el_whatsapp"></a>
        <a href="#" class="messengers__el messengers__el_telegram"></a>
      </div>
      <div class="header__right">
        <div class="header__search"></div>
        <div class="header__cabinet">
          <div class="cabinet-modal__img"></div>
          <form class="cabinet-modal">
            <div class="cabinet-modal__text">Войти в личный кабинет</div>
            <div class="input">
              <div class="input-wp">
                <input name="login" placeholder="Логин" type="text" class="calculator__input">
              </div>
            </div>
            <div class="input input_error">
              <div class="input-wp">
                <input name="password" placeholder="Пароль" type="password" class="calculator__input">
              </div>
            </div>
            <div class="button button_green button_cabinet-modal">Войти</div>
            <a href="#" class="cabinet-modal__link">Забыли пароль?</a>
          </form>
        </div>
        <div class="lang lang_header">
            <div class="lang__top">
              <div data-lang="1" class="lang__top-el active">Ru</div>
              <div data-lang="2" class="lang__top-el">Eng</div>
              <div data-lang="3" class="lang__top-el">Ka</div>
              <div data-lang="4" class="lang__top-el">Az</div>
              <div data-lang="5" class="lang__top-el">Hy</div>
            </div>
            <div class="lang__drop">
              <div data-lang="1" class="lang__drop-el active">Ru</div>
              <div data-lang="2" class="lang__drop-el">Eng</div>
              <div data-lang="3" class="lang__drop-el">Ka</div>
              <div data-lang="4" class="lang__drop-el">Az</div>
              <div data-lang="5" class="lang__drop-el">Hy</div>
            </div>
        </div>
      </div>
    </div>
  </header>

  <div class="overlay"></div>

  <div id="modal-loan" class="modal modal-loan">
    <div class="modal__close"></div>
    <form class="modal__wrp">
      <div class="title title_center">Получить займ</div>
      <div class="input">
        <div class="input-wp">
          <input name="name" placeholder="Ваше имя" type="text" class="calculator__input">
        </div>
      </div>
      <div class="input">
        <div class="input-wp input-wp_email">
          <input name="email" placeholder="Электронная почта" type="email" class="calculator__input">
        </div>
      </div>
      <div class="button button_modal">Получить займ</div>
    </form>
  </div>

  <div id="modal-loan_large" class="modal modal-loan modal-loan_large">
    <div class="modal__close"></div>
    <form class="modal__wrp">
      <div class="title title_center open_loan">Получить займ</div>
      <div class="input">
        <div class="input-wp">
          <input name="name" placeholder="Ваше имя" type="text" class="calculator__input">
        </div>
      </div>
      <div class="input input_error">
        <div class="input-wp input-wp_email">
          <input name="email" placeholder="Электронная почта" type="email" class="calculator__input">
        </div>
      </div>
      <div class="button button_modal">Получить займ</div>
      <div class="check">
        <input id="conf_4" value="conf_4" name="conf_4" type="checkbox" checked>
        <label class="check__label" for="conf_4">
            <span class="check__check"></span>
            <span class="check__text">Я согласен на обработку персональных данных</span>
        </label>
      </div>
      <a href="#" target="_blank" class="first-form__link">Политика конфиденциальности</a>
    </form>
  </div>

  <div id="modal-loan_select" class="modal modal-loan modal-loan_large">
    <div class="modal__close"></div>
    <form class="modal__wrp">
      <div class="title title_center open_loan">Получить займ</div>
      <div class="input">
        <div class="input-wp">
          <input name="name" placeholder="Ваше имя" type="text" class="calculator__input">
        </div>
      </div>
      <div class="input input-modal">
        <select id="connect_type" data-placeholder="Желаемый способ связи" class="select2_modal">
          <option value="">&nbsp;</option>
          <option value="email">Электронная почта</option>
          <option value="phone">Звонок</option>
          <option value="whatsapp">WhatsApp</option>
          <option value="telegram">Telegram</option>
        </select>
        <div class="input-modal__wrp">
          <div data-type="email" class="input-modal__modal input-modal__modal_email">
            <input name="email" placeholder="Электронная почта" type="email" class="calculator__input">
          </div>
          <div data-type="phone" class="input-modal__modal input-modal__modal_phone">
            <input name="phone" placeholder="Телефон" type="tel" class="calculator__input">
          </div>
          <div data-type="whatsapp" class="input-modal__modal input-modal__modal_whatsapp">
            <input name="whatsapp" placeholder="WhatsApp" type="text" class="calculator__input">
          </div>
          <div data-type="telegram" class="input-modal__modal input-modal__modal_telegram">
            <input name="telegram" placeholder="Telegram" type="text" class="calculator__input">
          </div>
        </div>
      </div>
      <div class="button button_modal">Получить займ</div>
      <div class="check">
        <input id="conf_5" value="conf_5" name="conf_5" type="checkbox" checked>
        <label class="check__label" for="conf_5">
            <span class="check__check"></span>
            <span class="check__text">Я согласен на обработку персональных данных</span>
        </label>
      </div>
      <a href="#" target="_blank" class="first-form__link">Политика конфиденциальности</a>
    </form>
  </div>

  <div id="modal-card" class="modal modal-loan modal-loan_card">
    <div class="modal__close"></div>
    <form class="modal__wrp">
      <div class="title title_center">Оформить карту</div>
      <div class="input">
        <div class="input-wp">
          <input name="name" placeholder="Ваше имя" type="text" class="calculator__input">
        </div>
      </div>
      <div class="input input-modal">
        <select id="connect_type_3" data-placeholder="Желаемый способ связи" class="select2_modal">
          <option value="">&nbsp;</option>
          <option value="email">Электронная почта</option>
          <option value="phone">Звонок</option>
          <option value="whatsapp">WhatsApp</option>
          <option value="telegram">Telegram</option>
        </select>
        <div class="input-modal__wrp">
          <div data-type="email" class="input-modal__modal input-modal__modal_email">
            <input name="email" placeholder="Электронная почта" type="email" class="calculator__input">
          </div>
          <div data-type="phone" class="input-modal__modal input-modal__modal_phone">
            <input name="phone" placeholder="Телефон" type="tel" class="calculator__input">
          </div>
          <div data-type="whatsapp" class="input-modal__modal input-modal__modal_whatsapp">
            <input name="whatsapp" placeholder="WhatsApp" type="text" class="calculator__input">
          </div>
          <div data-type="telegram" class="input-modal__modal input-modal__modal_telegram">
            <input name="telegram" placeholder="Telegram" type="text" class="calculator__input">
          </div>
        </div>
      </div>
      <div class="input">
        <select data-placeholder="Тип карты" class="select2">
          <option value="">&nbsp;</option>
          <option value="type 1">Тип 1</option>
          <option value="type 2">Тип 2</option>
          <option value="type 3">Тип 3</option>
        </select>
      </div>
      <div class="button button_modal">Оформить карту</div>
      <div class="check">
        <input id="conf_6" value="conf_6" name="conf_6" type="checkbox" checked>
        <label class="check__label" for="conf_6">
            <span class="check__check"></span>
            <span class="check__text">Я согласен на обработку персональных данных</span>
        </label>
      </div>
      <a href="#" target="_blank" class="first-form__link">Политика конфиденциальности</a>
    </form>
  </div>

  <div id="modal-review" class="modal modal-review">
    <div class="modal__close"></div>
    <form class="modal__wrp modal__wrp_full">
      <div class="title title_center">Оставьте свой отзыв</div>
      <div class="input">
        <div class="input-wp">
          <input name="name" placeholder="Ваше имя" type="text" class="calculator__input">
        </div>
      </div>
      <div class="input">
        <div class="input-wp">
          <input name="email" placeholder="Электронная почта" type="email" class="calculator__input">
        </div>
      </div>
      <div class="input input_textarea">
        <div class="input-wp">
          <textarea id="review" name="review" placeholder="Ваш отзыв"></textarea>
        </div>
      </div>
      <div class="modal-review__raiting">
        <div class="modal-review__text">Пожалуйста, оцените работу нашей компании:</div>
        <div class="raiting raiting_green raiting_rev-form">
          <div class="active"></div>
          <div class="active"></div>
          <div class="active"></div>
          <div class="active"></div>
          <div class="active"></div>
        </div>
      </div>
      <div class="button button_modal button_modal-small">Отправить отзыв</div>
      <div class="check">
        <input id="conf_7" value="conf_7" name="conf_7" type="checkbox" checked>
        <label class="check__label" for="conf_7">
            <span class="check__check"></span>
            <span class="check__text">Я согласен на обработку персональных данных</span>
        </label>
      </div>
      <a href="#" target="_blank" class="first-form__link">Политика конфиденциальности</a>
    </form>
  </div>

  <div id="modal-question" class="modal modal-review modal-review_question">
    <div class="modal__close"></div>
    <form class="modal__wrp modal__wrp_full">
      <div class="title title_center">Задать вопрос</div>
      <div class="input">
        <div class="input-wp">
          <input name="name" placeholder="Ваше имя" type="text" class="calculator__input">
        </div>
      </div>
      <div class="input input-modal">
        <select id="connect_type_2" data-placeholder="Желаемый способ связи" class="select2_modal">
          <option value="">&nbsp;</option>
          <option value="email">Электронная почта</option>
          <option value="phone">Звонок</option>
          <option value="whatsapp">WhatsApp</option>
          <option value="telegram">Telegram</option>
        </select>
        <div class="input-modal__wrp">
          <div data-type="email" class="input-modal__modal input-modal__modal_email">
            <input name="email" placeholder="Электронная почта" type="email" class="calculator__input">
          </div>
          <div data-type="phone" class="input-modal__modal input-modal__modal_phone">
            <input name="phone" placeholder="Телефон" type="tel" class="calculator__input">
          </div>
          <div data-type="whatsapp" class="input-modal__modal input-modal__modal_whatsapp">
            <input name="whatsapp" placeholder="WhatsApp" type="text" class="calculator__input">
          </div>
          <div data-type="telegram" class="input-modal__modal input-modal__modal_telegram">
            <input name="telegram" placeholder="Telegram" type="text" class="calculator__input">
          </div>
        </div>
      </div>
      <div class="input input_textarea">
        <div class="input-wp">
          <textarea id="review" name="review" placeholder="Ваш вопрос" class="calculator__textarea"></textarea>
        </div>
      </div>
      <div class="button button_modal button_modal-small">Отправить</div>
      <div class="check">
        <input id="conf_2" value="conf_2" name="conf_2" type="checkbox" checked>
        <label class="check__label" for="conf_2">
            <span class="check__check"></span>
            <span class="check__text">Я согласен на обработку персональных данных</span>
        </label>
      </div>
      <a href="#" target="_blank" class="first-form__link">Политика конфиденциальности</a>
    </form>
  </div>

  <div id="modal-control" class="modal modal-review modal-review_control">
    <div class="modal__close"></div>
    <form class="modal__wrp modal__wrp_full">
      <div class="title title_center">Контроль качества</div>
      <div class="modal__under">Мы очень внимательно следим, чтобы наши клиенты получали максимально качественные и профессионально оказанные услуги.</div>
      <div class="input">
        <div class="input-wp">
          <input name="name" placeholder="Ваше имя" type="text" class="calculator__input">
        </div>
      </div>
      <div class="input">
        <div class="input-wp">
          <input name="email" placeholder="Электронная почта" type="email" class="calculator__input">
        </div>
      </div>
      <div class="input input_textarea">
        <div class="input-wp">
          <textarea id="review" name="review" placeholder="Ваше обращение" class="calculator__textarea"></textarea>
        </div>
      </div>
      <div class="button button_modal button_modal-small">Отправить</div>
      <div class="check">
        <input id="conf_3" value="conf_3" name="conf_3" type="checkbox" checked>
        <label class="check__label" for="conf_3">
          <span class="check__check"></span>
          <span class="check__text">Я согласен на обработку персональных данных</span>
        </label>
      </div>
      <a href="#" target="_blank" class="first-form__link">Политика конфиденциальности</a>
    </form>
  </div>

  <div id="modal-thanks" class="modal modal-thanks">
    <div class="modal__close"></div>
    <div class="modal__wrp modal__wrp_full">
      <div class="title title_center title_green">Спасибо за обращение!</div>
      <div class="modal__subtitle">Мы свяжемся с Вами в ближайшее время</div>
    </div>
  </div>

  <div id="modal-subscribe" class="modal modal-thanks modal-thanks_subscribe">
    <div class="modal__close"></div>
    <div class="modal__wrp modal__wrp_full">
      <div class="title title_center title_green">Благодарим за подписку!</div>
      <div class="modal__under">Вы всегда можете от нее отказаться,<br />
      ссылка на аннулирование подписки находится в конце каждого письма</div>
    </div>
  </div>

  <div id="modal-resume" class="modal modal-thanks modal-thanks_resume">
    <div class="modal__close"></div>
    <div class="modal__wrp modal__wrp_full">
      <div class="title title_center title_green">Благодарим за Ваше резюме!</div>
      <div class="modal__under">Специалист отдела кадров свяжется с Вами в ближайшее время</div>
    </div>
  </div>

  <div id="modal-rules" class="modal modal-rules">
    <div class="modal__close"></div>
    <div class="title title_center">Условия проведения акции</div>
    <div class="modal-rules__content">
      <article>
        <h3>1. Основные положения.</h3>
        <p>1.1. Наименование Акции: «Акция на займы до 30 дней».</p>
        <p>1.2. Территория проведения Акции: Российская Федерация.</p>
        <p>1.3. Информация об Организаторе Акции:</p>
        <p>Организатором Акции является ООО «Ломбард Гарант», юридический адрес: 125167, г. Москва, Ленинградский проспект, дом 37, корпус 9, эт. 6, пом. XXXI, ком. 32 (оф. 604)</p>
        <p>1.4. Акция проводится в порядке и на условиях, указанных в настоящих Правилах.</p>
        <p>1.5. Период проведения Акции — с 01.09.2020 г. по 31.01.2021 г. включительно.</p>
        <p>1.6. Акция проводится в рамках стимулирующей рекламной кампании и направлена на привлечение внимания к услугам ООО «Ломбард Гарант», формирование и поддержание интереса к компании, и ее продвижение на рынке. Участники Акции не несут имущественных рисков, связанных с участием в Акции.</p>
      </article>
      <article>
        <h3>2. Порядок участия.</h3>
        <p>2.1. Принять участие в Акции могут все дееспособные граждане, достигшие 18-летнего возраста.</p>
        <p>2.2. Акция проводится во всех офисах компании и действует как для новых, так и для постоянных клиентов.</p>
        <p>2.3. Предложение данной акции действует для вновь заключенных договоров займа под залог автомобиля на сумму от 100 000 руб. Договор займа на данных условиях действует не больше месяца и продлению не подлежит.</p>
        <p>2.4. Работники и представители Офисов Автоломбарда Гарант и Организатора Акции, аффилированные лица и члены их семей к участию в Акции не допускаются.</p>
        <p>2.5. К участию в акции допускаются все физические лица, пользующиеся услугами ломбарда в указанный период времени.</p>
        <p>2.6. Для участия в Акции необходимо обратиться в компанию по телефонам или адресам, указанным на сайте. Предоставить информацию про марку и модель своего транспортного средства, его состояние и год выпуска, а также озвучить необходимую для получения сумму денег, подходящий срок займа. В результате анализа этой информации, сотрудник автоломбарда предлагает клиенту займ под залога автомобиля.</p>
        <p>2.7. Данное предложение не является публичной офертой.</p>
      </article>
      <article>
        <h3>3. Порядок участия.</h3>
        <p>3.1. Принять участие в Акции могут все дееспособные граждане, достигшие 18-летнего возраста.</p>
        <p>3.2. Акция проводится во всех офисах компании и действует как для новых, так и для постоянных клиентов.</p>
        <p>3.3. Предложение данной акции действует для вновь заключенных договоров займа под залог автомобиля на сумму от 100 000 руб. Договор займа на данных условиях действует не больше месяца и продлению не подлежит.</p>
        <p>3.4. Работники и представители Офисов Автоломбарда Гарант и Организатора Акции, аффилированные лица и члены их семей к участию в Акции не допускаются.</p>
        <p>3.5. К участию в акции допускаются все физические лица, пользующиеся услугами ломбарда в указанный период времени.</p>
        <p>3.6. Для участия в Акции необходимо обратиться в компанию по телефонам или адресам, указанным на сайте. Предоставить информацию про марку и модель своего транспортного средства, его состояние и год выпуска, а также озвучить необходимую для получения сумму денег, подходящий срок займа. В результате анализа этой информации, сотрудник автоломбарда предлагает клиенту займ под залога автомобиля.</p>
        <p>3.7. Данное предложение не является публичной офертой.</p>
      </article>
    </div>
  </div>

  <div id="modal-online" class="modal modal-online">
    <div class="modal__close"></div>
    <div class="title title_center">Онлайн-заявка на оценку</div>
    <div class="modal-online__wp">
      <div class="modal-online__top">
        <div class="modal-online__wrp">
          <div class="modal-online__col">
            <div class="modal-online__title">Контактная информация</div>
            <div class="input">
              <label for="name_online" class="input__label">Ваше имя</label>
              <div class="input-wp">
                <input name="name_online" type="text" class="calculator__input">
              </div>
            </div>
            <div class="input input-modal">
              <label class="input__label">Желаемый способ связи</label>
              <select id="connect_type_3" data-placeholder="Желаемый способ связи" class="select2_modal">
                <option value="">&nbsp;</option>
                <option value="email">Электронная почта</option>
                <option value="phone">Звонок</option>
                <option value="whatsapp">WhatsApp</option>
                <option value="telegram">Telegram</option>
              </select>
              <div class="input-modal__wrp">
                <div data-type="email" class="input-modal__modal input-modal__modal_email active">
                  <input name="email" placeholder="Электронная почта" type="email" class="calculator__input">
                </div>
                <div data-type="phone" class="input-modal__modal input-modal__modal_phone">
                  <input name="phone" placeholder="Телефон" type="tel" class="calculator__input">
                </div>
                <div data-type="whatsapp" class="input-modal__modal input-modal__modal_whatsapp">
                  <input name="whatsapp" placeholder="WhatsApp" type="text" class="calculator__input">
                </div>
                <div data-type="telegram" class="input-modal__modal input-modal__modal_telegram">
                  <input name="telegram" placeholder="Telegram" type="text" class="calculator__input">
                </div>
              </div>
            </div>
            <div class="input">
              <label for="review_online" class="input__label">Дополнительная информация</label>
              <div class="input-wp">
                <textarea id="review_online" name="review_online"></textarea>
              </div>
            </div>
            <div class="modal-online__button">Прикрепить фото</div>
          </div>
          <div class="modal-online__col">
            <div class="modal-online__title">Информация о о транспортном средстве</div>
            <div class="input">
              <label for="mark_online" class="input__label">Марка</label>
              <div class="input-wp">
                <input name="mark_online" type="text" class="calculator__input">
              </div>
            </div>
            <div class="input">
              <label for="model_online" class="input__label">Модель</label>
              <div class="input-wp">
                <input name="model_online" type="text" class="calculator__input">
              </div>
            </div>
            <div class="input">
              <label for="year_online" class="input__label">Год выпуска автомобиля</label>
              <div class="input-wp">
                <input name="year_online" type="text" class="calculator__input">
              </div>
            </div>
            <div class="input">
              <label for="engine_online" class="input__label">Коробка передач</label>
              <select class="select2">
                <option value="QuickCash">АКПП</option>
                <option value="QuickCash 2">МКПП</option>
              </select>
            </div>
            <div class="input">
              <label for="engine_online" class="input__label">Объем двигателя</label>
              <div class="input-wp">
                <input name="engine_online" type="text" class="calculator__input">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-online__bottom">
        <div class="modal-online__lft">
          <div class="check">
            <input id="conf_3" value="conf_3" name="conf_3" type="checkbox" checked>
            <label class="check__label" for="conf_3">
              <span class="check__check"></span>
              <span class="check__text">Я согласен на обработку персональных данных</span>
            </label>
          </div>
          <a href="#" target="_blank" class="first-form__link">Политика конфиденциальности</a>
        </div>
        <div class="button button_modal-online">Отправить заявку</div>
      </div>
    </div>
  </div>

  <div class="button button_fixed open_loan">Получить займ</div>