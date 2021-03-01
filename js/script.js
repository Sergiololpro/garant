$(document).ready(function () {

    // Детект мобильного браузера
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    // Выбор языка
    $(".lang__drop-el").on("click", function() {
        $(".lang__drop-el, .lang__top-el").removeClass("active");
        $(this).addClass("active");

        $(".lang__top-el[data-lang=" + $(this).data("lang") + "]").addClass("active");
    });

    $(".lang").on("click", function() {
        $(this).toggleClass("active");
    });

    // Открыть меню
    $(".header__menu").on("click", function() {
        $(".menu").addClass("active");
    });

    // Закрыть меню
    $(".header__menu_close").on("click", function() {
        $(".menu").removeClass("active");
    });

    // Навигация в шапке
    $(".header-nav").on("mouseenter", function() {
        setTimeout(function () {
            $(".header-nav").addClass("active");
        }, 300);
    });

    $(".header-nav").on("mouseleave", function() {
        $(this).removeClass("active");
    });

    // Открыть / закрыть поиск
    $(".header__search").on("click", function() {
        $(".search").toggleClass("active");
    });

    // Слайдер на главной
    if ($('.main-slider').length) {
        $('.main-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            dots: false,
            responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        arrows : false,
                        dots: true
                    }
                }
            ]
        });
    }

    // Обратный отсчет
    var countDownDate = new Date("Apr 7, 2021 00:00:00").getTime();
    
    var x = setInterval(function() {
        var now = new Date().getTime(),
            distance = countDownDate - now,
            days = Math.floor(distance / (1000 * 60 * 60 * 24)),
            hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
            minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
            seconds = Math.floor((distance % (1000 * 60)) / 1000);

        $(".countdown__number_d").html(days);
        $(".countdown__number_h").html(hours);
        $(".countdown__number_m").html(minutes);
        $(".countdown__number_s").html(seconds);
    }, 1000);

    // Калькулятор займа - табы
    $(".calculator__tab").on("click", function() {
        $(".calculator__tab, .calculator__content").removeClass("active");
        $(this).addClass("active");

        $(".calculator__content[data-serv=" + $(this).data("serv") + "]").addClass("active");
        $(".calculator__content[data-tab=" + $(this).data("tab") + "]").addClass("active");
    });

    $(".calculator__tabs").on("click", function() {
        $(this).toggleClass("active");
    });

    if ($(".calculator_services").length && isMobile.any()) {
        $(".calculator_services .calculator__tab, .calculator_services .calculator__content").removeClass("active");

        $(".calculator_services .calculator__tab[data-serv=2]").addClass("active");
        $(".calculator_services .calculator__content[data-serv=2]").addClass("active");
    }

    if ($(".calculator__row_top").length && isMobile.any()) {
        $(".calculator__row_top:nth-child(3), .calculator__row_top:nth-child(4)").removeClass("active");
    }

    // Открыть / закрыть блок в калькуляторе
    $(".calculator__title").on("click", function() {
        $(this).closest(".calculator__row_top").toggleClass("active");
    });

    // Select2
    if ($.fn.select2) {
        $('.select2').select2({
            minimumResultsForSearch: -1,
            placeholder: $(this).data("placeholder")
        });

        $('.select2_modal').select2({
            minimumResultsForSearch: -1,
            placeholder: $(this).data("placeholder"),
            dropdownCssClass: "modal_drop"
        });
    }

    // Сумма и срок займа
    $(".noUiEl").each(function() {
        var $parent = $(this),
            $input = $parent.find('.calculator__input'),
            $range = $parent.find('.noUi'),
            min = $input.data("min"),
            max = $input.data("max"),
            current = $input.val();

        $parent.find(".noUi__text_min").html(min.toLocaleString('ru'));
        $parent.find(".noUi__text_max").html(max.toLocaleString('ru'));

        noUiSlider.create($range[0], {
            behaviour: 'tap',
            start: [current],
            range: {
                'min': min,
                'max': max
            }
        });

        $range[0].noUiSlider.on('update', function (values) {
            $input.val(Math.floor(values[0]).toLocaleString('ru'));
            $range.find(".noUi-handle div").html(Math.floor(values[0]).toLocaleString('ru'));
        });

        $input.on('change', function () {
            $range[0].noUiSlider.set([parseInt(this.value), null]);
        });

        $input.on('click', function () {
            $input.val('');
        });
    });

    // Раскрыть отзыв
    $(".reviews__more").on("click", function() {
        $(this).closest(".reviews__el").toggleClass("active");
    });

    // Слайдер отзывов
    if ($('.reviews__els').length) {
        $(".reviews__els").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            responsive: [
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 1000,
                    settings: "unslick"
                }
            ]
        });
    }

    // Слайдер глаллереи
    if ($('.gallery__slider').length) {
        $('.gallery__slider').slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            dots: false,
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    // Открыть адрес на карте
    $(".map__top").on("click", function() {
        if (!isMobile.any()) {
            var $parent = $(this).closest(".map__adress");

            if ($parent.hasClass("active")) {
                $parent.removeClass("active");
                $(".map__adresses").removeClass("active"); 
            } else {
                $parent.toggleClass("active").toggleClass("hidden");
                $(".map__adresses").addClass("active"); 
            }
        }
    });

    // Utp 1 слайдер
    if ($('.utps-1').length) {
        $(".wrapper_utps-1").slick({
            slidesToShow: 2,
            slidesToScroll: 2,
            mobileFirst: true,
            arrows: false,
            dots: true,
            responsive: [
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 1000,
                    settings: "unslick"
                }
            ]
        });
    }

    // Utp 2 слайдер
    if ($('.loan__els').length) {
        $(".loan__els").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            arrows: false,
            dots: true,
            responsive: [
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 1000,
                    settings: "unslick"
                }
            ]
        });
    }

    $(window).on('scroll load', function() {
        animations();
    });

    // Анимации
    function animations() {
        $(".animation:not(.animated)").each(function () {
            var $this = $(this),
                windowTop = $(window).height() + $(window).scrollTop(),
                objectTop = $this.offset().top;

            if (windowTop > objectTop) {
                $this.addClass('animated');
            } else {
                $this.removeClass('animated');
            }
        });
    }

    // Закрыть модальное окно
    $(".overlay").on("click", function() {
        $(".modal, .overlay").removeClass("active");
    });

    $(".modal__close").on("click", function() {
        $(this).closest(".modal").removeClass("active");
        $(".overlay").removeClass("active");
    });

    // Открыть модальное окно "Заем"
    $(".open_loan").on("click", function() {
        $("#modal-loan").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Заем" согласие
    $(".open_loan_large").on("click", function() {
        $("#modal-loan_large").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Заем" селект
    $(".open_loan_select").on("click", function() {
        $("#modal-loan_select").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Отзыв"
    $(".open_review").on("click", function() {
        $("#modal-review").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Вопрос"
    $(".open_question").on("click", function() {
        $("#modal-question").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Контроль"
    $(".open_control").on("click", function() {
        $("#modal-control").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Карта"
    $(".open_card").on("click", function() {
        $("#modal-card").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Обращение"
    $(".open_thanks").on("click", function() {
        $("#modal-thanks").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Подписка"
    $(".open_subscribe").on("click", function() {
        $("#modal-subscribe").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Резюме"
    $(".open_resume").on("click", function() {
        $("#modal-resume").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Условия проведения акции"
    $(".open_rules").on("click", function() {
        $("#modal-rules").addClass("active");
        $(".overlay").addClass("active");
    });

    // Открыть модальное окно "Онлайн-заявка на оценку"
    $(".open_online").on("click", function() {
        $("#modal-online").addClass("active");
        $(".overlay").addClass("active");
    });

    // Маска телефона
    if ($("#phone").length) {
        $('#phone').mask('(000) 000-00-00');
    }

    // Слайдер на главной
    if ($('.popular__slider').length) {
        $('.popular__slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            dots: false,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }

    // Открыть / закрыть популярные марки
    $(".popular__show-more").on("click", function() {
        $(".popular__show-more, .popular__drop").toggleClass("active");
    });

    // Открыть / закрыть частые вопросы
    $(".often__question").on("click", function() {
        $(this).closest(".often__el").toggleClass("active");
    });

    // Слайдер "Выгодное решение"
    if ($('.doubt__wrp').length) {
        $(".doubt__wrp").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 1000,
                    settings: "unslick"
                }
            ]
        });
    }

    // Слайдер "Оперативная помощь"
    if ($('.help__wrp').length) {
        $(".help__wrp").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 1000,
                    settings: "unslick"
                }
            ]
        });
    }

    // Открыть еще "Также смотрите"
    $(".also__show-more").on("click", function() {
        $(".also").addClass("active");
    });

    // Раскрыть / скрыть услуги
    $(".services__more").on("click", function() {
        $(this).closest(".services").toggleClass("show-all");

        if (!$(this).closest(".services").hasClass("show-all")) {
            $('body, html').animate({
                scrollTop: $(this).closest(".services").find(".services__more").offset().top - screen.height + $(".header").height() + $(".services__more").height()
            }, 500);
        }
    });

    // Слайдер "Наша команда"
    if ($('.team__slider').length) {
        $('.team__slider').slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            dots: false,
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    // Слайдер "Наши партнеры"
    if ($('.partners__wrp').length) {
        $(".partners__wrp").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5
                    }
                },
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6
                    }
                },
                {
                    breakpoint: 1200,
                    settings: "unslick"
                }
            ]
        });
    }

    // Раскрыть / скрыть награды
    $(".rewards__show-more").on("click", function() {
        $(this).closest(".rewards").toggleClass("show-all");

        if (!$(this).closest(".rewards").hasClass("show-all")) {
            $('body, html').animate({
                scrollTop: $(this).closest(".rewards").find(".rewards__show-more").offset().top - screen.height + $(".header").height() + $(".rewards__show-more").height()
            }, 500);
        }
    });

    // Скрыть сообщение на странице акций
    $(".actions-alert").on("click", function() {
        $(this).removeClass("active");
    });

    // Акции - табы
    $(".social__nav").on("click", function() {
        $(".social__nav, .social__tab").removeClass("active");
        $(this).addClass("active");

        $(".social__tab[data-tab=" + $(this).data("nav") + "]").addClass("active");
    });

    // Раскрыть / скрыть акции
    $(".social__more").on("click", function() {
        $(this).closest(".social__tab").toggleClass("show-all");

        if (!$(this).closest(".social__tab").hasClass("show-all")) {
            $('body, html').animate({
                scrollTop: $(this).closest(".social").find(".social__more").offset().top - screen.height + $(".header").height() + $(".social__more").height()
            }, 500);
        }
    });

    // Переключение вкладок на странице Котакты
    $(".contacts__tab").on("click", function() {
        $(".contacts__tab, .contacts__wrp").removeClass("active");
        $(this).addClass("active");

        $(".contacts__wrp[data-tab=" + $(this).data("tab") + "]").addClass("active");
    });

    // Слайдер "Годы"
    if ($('.years__top').length) {
        $(".years__top").slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            mobileFirst: true,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6
                    }
                },
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 7,
                        slidesToScroll: 7
                    }
                },
                {
                    breakpoint: 1200,
                    settings: "unslick"
                }
            ]
        });
    }

    // Переключение вкладок на странице История
    $(".years__year").on("click", function() {
        $(".years__year, .years__wrp").removeClass("active");
        $(this).addClass("active");

        $(".years__wrp[data-year=" + $(this).data("year") + "]").addClass("active");
    });

    // Слайдер "История компании"
    if ($('.history-slider').length) {
        $(".history-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>'
        });
    }

    // Слайдер "Вас может заинтересовать"
    if ($('.interesting__slider').length) {
        $('.interesting__slider').slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            dots: false,
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    // Слайдер картинок на внутренней
    if ($('.text-page__images').length) {
        $(".text-page__images").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 1000,
                    settings: "unslick"
                }
            ]
        });
    }

    // Переключение вкладок на странице Отзывов
    $(".rev-navs__nav").on("click", function() {
        $(".rev-navs__nav, .rev-page__content").removeClass("active");
        $(this).addClass("active");

        $(".rev-page__content[data-tab=" + $(this).data("nav") + "]").addClass("active");
    });

    // Слайдер "Проводимые акции"
    if ($('.spend__wrap').length) {
        $(".spend__wrap").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>',
            responsive: [
                {
                    breakpoint: 700,
                    settings: "unslick"
                }
            ]
        });
    }

    // Слайдер "Спасибо"
    if ($('.thanks__slider').length) {
        $(".thanks__slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="slider-nav slider-nav-prev"></div>',
            nextArrow: '<div class="slider-nav slider-nav-next"></div>'
        });
    }

    // Слайдер "Клуб"
    if ($('.club-top').length) {
        $(".club-top").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            arrows: false,
            asNavFor: '.club-center',
            centerMode: true,
            responsive: [
                {
                    breakpoint: 736,
                    settings: "unslick"
                }
            ]
        });

        $(".club-top").on('afterChange', function(event, slick, currentSlide, nextSlide){
            var id = currentSlide + 1;
            
            $(".club-bottom .club__col").removeClass("active");

            $(".club-bottom .club__col:nth-child(" + id + ")").addClass("active");
        });
    }

    if ($('.club-center').length) {
        $(".club-center").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            mobileFirst: true,
            arrows: false,
            asNavFor: '.club-top',
            responsive: [
                {
                    breakpoint: 736,
                    settings: "unslick"
                }
            ]
        });
    }

    // Открыть / закрыть отзывы
    $(".questions__el_center").on("click", function() {
        $(this).toggleClass("active");
    });

    // Подсветка столбцов у карт
    $(".club__right .club__col").on("mouseenter", function() {
        var id = $(this).index() + 1;

        $(".club__right .club__col").removeClass("active");
        $(".club__right .club__col:nth-child(" + id + ")").addClass("active");
    });

    // Переключение вкладок в личном кабинете
    $(".cab-top__nav").on("click", function() {
        $(".cab-top__nav, .cab-content").removeClass("active");
        $(this).addClass("active");

        $(".cab-content[data-id=" + $(this).data("id") + "]").addClass("active");
    });

    // Скролл до калькулятора
    $(".to_calc").on("click", function() {
        if ($(".calculator").length) {
            $('body, html').animate({
                scrollTop: $(".calculator").offset().top - $(".header").height()
            }, 500);
        }
    });

    // Открыть / закрыть окна кабинета
    $(".cabinet-modal__img").on("click", function() {
        $(this).closest(".header__cabinet").find(".cabinet-modal").toggleClass("active");
    });

    // Валидация поля
    $(".select2_modal").on("change", function () {
        var connect_type = $(this).val();

        $(this).parent().find(".input-modal__modal").removeClass("active");
        $(this).parent().find(".input-modal__modal[data-type=" + connect_type + "]").addClass("active");
    });

    // Закрыть куки
    $(".cookies__button").on("click", function() {
        $(".cookies").removeClass("active");
    });

});
