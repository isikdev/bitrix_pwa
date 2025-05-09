<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
<html>

<head>




    <meta name="ahrefs-site-verification" content="e8ee10b705d6282a7048f31bcd12f1ec4cecebce96268385a815c9a96957c84c">

    <!-- <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- <link href="https://fonts.cdnfonts.com/css/signpainter" rel="stylesheet"> -->
    <meta name="a407d7a2fb12b3a3ab49dfbc379ad5b2" content="">
    <meta name="mailru-domain" content="ySCcbVaSR91fGDSO" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R95R457P01"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-R95R457P01');
    </script>


    <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) {
            if (document.scripts[j].src === r) {
                return;
            }
        }
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
            k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(95136106, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/95136106" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>


    <?
  $APPLICATION->ShowHead();
  use Bitrix\Main\Page\Asset;
  $asset = Asset::getInstance();

  use \Bitrix\Conversion\Internals\MobileDetect;

$detect = new MobileDetect;


    // CSS

  $asset->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>');

  $asset->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/google.js');
  
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles.css');
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/fonts/caveat/caveat.css');
    // JS
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/source/jquery.fancybox.pack.js');
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.sudoSlider.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.maskedinput.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bundle.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bundle.js');
    //STRING
  Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
  Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
  Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext' rel='stylesheet'>");
  Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
  ?>
    <title>
        <?$APPLICATION->ShowTitle()?>
    </title>


    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    <script src="https://unpkg.com/lazysizes@4.1.7/lazysizes.js"></script>
    <script src="https://epay.homebank.kz/payform/payment-api.js"></script>

    <meta name="theme-color" content="#681320">
    <link rel="manifest" href="/local/templates/new/pwa/manifest.json">
    <link rel="apple-touch-icon" href="/local/templates/new/pwa/logo.png">
    <script src="/local/templates/new/pwa/pwa-register.js"></script>

    <script>
    let deferredPrompt;
    const pwaButtons = document.querySelectorAll('[data-pwa-install]'); // Получаем все кнопки установки PWA

    // Изначально скрываем кнопки установки
    window.addEventListener('load', function() {
        pwaButtons.forEach(button => {
            button.style.display = 'none';
        });
    });

    window.addEventListener('beforeinstallprompt', (e) => {
        // Предотвращаем автоматическое появление установочного диалога
        e.preventDefault();
        deferredPrompt = e;
        console.log('Event beforeinstallprompt перехвачен', e);

        // Проверяем доступность платформы
        if (e.platforms && e.platforms.length > 0) {
            console.log('Поддерживаемые платформы:', e.platforms);
        }

        // Показываем кнопки установки, если событие доступно
        pwaButtons.forEach(button => {
            button.style.display = 'block';
        });

        // Добавляем data-атрибут к body, чтобы знать, что PWA можно установить
        document.body.setAttribute('data-pwa-available', 'true');
    });

    function installPWA() {
        console.log('Функция installPWA() вызвана');

        if (deferredPrompt) {
            console.log('deferredPrompt доступен, показываем диалог установки');

            if (typeof gtag === 'function') {
                console.log('Отправляем событие в GA: pwa_install_attempt');
                gtag('event', 'pwa_install_attempt', {
                    'event_category': 'PWA',
                    'event_label': 'Попытка установки PWA'
                });
            }

            deferredPrompt.prompt();
            deferredPrompt.userChoice.then((choiceResult) => {
                console.log('Результат выбора пользователя:', choiceResult.outcome);

                if (choiceResult.outcome === 'accepted') {
                    console.log('Пользователь принял предложение установки');
                    if (typeof gtag === 'function') {
                        console.log('Отправляем событие в GA: pwa_install_success');
                        gtag('event', 'pwa_install_success', {
                            'event_category': 'PWA',
                            'event_label': 'Успешная установка PWA'
                        });
                    }
                } else {
                    console.log('Пользователь отклонил предложение установки');
                    if (typeof gtag === 'function') {
                        console.log('Отправляем событие в GA: pwa_install_rejected');
                        gtag('event', 'pwa_install_rejected', {
                            'event_category': 'PWA',
                            'event_label': 'Отказ от установки PWA'
                        });
                    }
                }
                deferredPrompt = null;
            });
        } else {
            console.log('deferredPrompt недоступен, показываем инструкции по установке');
            showInstallInstructions();
        }
    }

    function showInstallInstructions() {
        // Определяем платформу пользователя
        const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        const isAndroid = /Android/.test(navigator.userAgent);
        const isChrome = /Chrome/.test(navigator.userAgent);
        const isSafari = /Safari/.test(navigator.userAgent) && !/Chrome/.test(navigator.userAgent);

        let message = '';

        if (isIOS && isSafari) {
            message =
                'Для установки приложения на iOS, нажмите на кнопку "Поделиться" (квадрат со стрелкой) внизу экрана, затем выберите "На экран «Домой»".';
        } else if (isAndroid && isChrome) {
            message =
                'Для установки приложения на Android, откройте меню браузера (три точки в правом верхнем углу) и выберите "Установить приложение".';
        } else {
            message = 'Для установки приложения используйте Chrome на Android или Safari на iOS.';
        }

        alert(message);

        if (typeof gtag === 'function') {
            gtag('event', 'pwa_install_instructions', {
                'event_category': 'PWA',
                'event_label': 'Показаны инструкции по установке PWA',
                'platform': isIOS ? 'iOS' : (isAndroid ? 'Android' : 'Desktop')
            });
        }
    }

    window.addEventListener('appinstalled', (evt) => {
        console.log('Приложение было успешно установлено!', evt);
        if (typeof gtag === 'function') {
            gtag('event', 'pwa_app_installed', {
                'event_category': 'PWA',
                'event_label': 'PWA успешно установлено'
            });
        }

        // Скрываем кнопки установки после установки
        pwaButtons.forEach(button => {
            button.style.display = 'none';
        });
    });
    </script>

    <style>
    .app__img {
        position: absolute;
        left: -55px;
        max-width: 100px;
        margin-top: -10px;
    }

    .gg__img {
        position: absolute;
        right: -55px;
        max-width: 100px;
        margin-top: -10px;
    }

    .header-logo {
        position: relative;
    }

    .mobile-apps {
        display: flex;
        gap: 10px;
        margin: 0 10px;
    }

    .mobile-apps img {
        max-width: 24px;
        height: auto;
    }

    @media screen and (max-width:768px) {
        .gg__img {
            display: none !important;
        }

        .app__img {
            display: none !important;
        }
    }
    </style>

</head>

<?$APPLICATION->ShowPanel();?>

<body id="google_translate_element">
    <!-- 
 <div class="l-page">
    <div class="l-header">
      
      <div class="container">


        <div class="row align-items-center header-top">
 
          <div class="col-md-5 col-4">
            <div class="header-menu d-flex">
              <div class="header-menu__burger header-menu__burger-mobile header-menu-mobile">
                <div class="header-menu__burger-lines">
                  <div class="header-menu__burger-line"></div>
                  <div class="header-menu__burger-line"></div>
                  <div class="header-menu__burger-line"></div>
                </div>
              </div>
       


              <div class="header--eng d-flex justify-content-end">
                <div class="header--eng__item">
                  <a href="javascript:void(0)" class="lang-en lang-select <?=($_COOKIE['googtrans'] == '/auto/en' ? 'language__img_active' : '')?>" data-google-lang="en">ENG</a>
                
                  <a href="javascript:void(0)" class="lang-ru lang-select notranslate <?=($_COOKIE['googtrans'] == '/auto/en' ? '' : 'language__img_active')?>" data-google-lang="ru">RUS</a>
                </div>
              </div>
              <div class="header-city">
                <div class="header_col d-flex">
                  <div class="header-city__icon"><svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="9" cy="9.2793" r="9" fill="#A03D49"/>
                    <path d="M8.99961 8.19479L15.8868 15.082L8.99961 23.5561L2.1124 15.082L8.99961 8.19479Z" fill="#A03D49"/>
                    <circle cx="9.00029" cy="9.27925" r="3.86891" fill="#E5E5E5"/>
                  </svg>

                </div>
                <div class="header-city__name">
         

                 
<?
// $APPLICATION->IncludeComponent(
// 	"bitrix:main.include",
// 	"",
// 	Array(
// 		"AREA_FILE_SHOW" => "file",
// 		"AREA_FILE_SUFFIX" => "inc",
// 		"EDIT_TEMPLATE" => "",
// 		"PATH" => "/include/city1.php"
// 	)
// );
?>
                  
              </div>
            </div>
            <div class="header_col d-flex">
              <div class="header-city__icon"><svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0099 13.6519L17.2099 15.917C17.2099 15.917 15.6299 17.6853 13.8499 18.1423C9.82989 19.1755 4.92989 14.248 3.90989 12.9168C2.88989 11.6054 -1.45011 4.77051 1.14989 2.20742C2.14989 1.21397 3.56989 0.776855 3.56989 0.776855L5.14989 6.14147C5.14989 6.14147 3.80989 7.31373 5.00989 8.78403C6.20989 10.2742 8.30989 12.6187 9.60989 13.7513C10.9299 14.8838 12.0099 13.6519 12.0099 13.6519Z" fill="#A03D49"/>
              </svg>

            </div>
            <div class="header-city__name tel_head">
<?
// $APPLICATION->IncludeComponent(
// 	"bitrix:main.include",
// 	"",
// 	Array(
// 		"AREA_FILE_SHOW" => "file",
// 		"AREA_FILE_SUFFIX" => "inc",
// 		"EDIT_TEMPLATE" => "",
// 		"PATH" => "/include/phone1.php"
// 	)
// );
?>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 col-4">
        <div class="header-logo">   
          <div class="header-logo__img"><a href="/"><img src="<?=SITE_DIR?>local/templates/laroma/images/logo.png"></a></div>
          <div class="app__img"><a target="_blank" href="https://apps.apple.com/ru/app/pizza-la-roma/id6446418383"><img src="<?=SITE_DIR?>local/templates/laroma/app.png"></a></div>
          <div class="gg__img"><a target="_blank" href="https://play.google.com/store/apps/details?id=com.rus.pizzalaroma"><img src="<?=SITE_DIR?>local/templates/laroma/gg.png"></a></div>
        </div>
        <style>
            .app__img {
              position: absolute;
              left: -55px;
              max-width: 100px;
              margin-top: -10px;
            }
            
            .gg__img {
              position: absolute;
              right: -55px;
              max-width: 100px;
              margin-top: -10px;
            }

            .header-logo {
              position:relative;
            }

            @media screen and (max-width:768px) {
              .gg__img{
                display:none!important;
              }
              .app__img {
                display:none!important;
              }
            }
        </style>
    </div>


    <div class="col-md-5 col-4">
      <div class="header-personal d-sm-flex d-block">
        <div class="header-city">
          <div class="header_col d-flex">
            <div class="header-city__icon"><svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="9" cy="9.2793" r="9" fill="#A03D49"/>
              <path d="M8.99961 8.19479L15.8868 15.082L8.99961 23.5561L2.1124 15.082L8.99961 8.19479Z" fill="#A03D49"/>
              <circle cx="9.00029" cy="9.27925" r="3.86891" fill="#E5E5E5"/>
            </svg>

          </div>
          <div class="header-city__name">
<?
// $APPLICATION->IncludeComponent(
// 	"bitrix:main.include",
// 	"",
// 	Array(
// 		"AREA_FILE_SHOW" => "file",
// 		"AREA_FILE_SUFFIX" => "inc",
// 		"EDIT_TEMPLATE" => "",
// 		"PATH" => "/include/city2.php"
// 	)
// );
?>

        </div>
      </div>
      <div class="header_col d-flex">
        <div class="header-city__icon"><svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.0099 13.6519L17.2099 15.917C17.2099 15.917 15.6299 17.6853 13.8499 18.1423C9.82989 19.1755 4.92989 14.248 3.90989 12.9168C2.88989 11.6054 -1.45011 4.77051 1.14989 2.20742C2.14989 1.21397 3.56989 0.776855 3.56989 0.776855L5.14989 6.14147C5.14989 6.14147 3.80989 7.31373 5.00989 8.78403C6.20989 10.2742 8.30989 12.6187 9.60989 13.7513C10.9299 14.8838 12.0099 13.6519 12.0099 13.6519Z" fill="#A03D49"/>
        </svg>

      </div>
      <div class="header-city__name tel_head">
<?
// $APPLICATION->IncludeComponent(
// 	"bitrix:main.include",
// 	"",
// 	Array(
// 		"AREA_FILE_SHOW" => "file",
// 		"AREA_FILE_SUFFIX" => "inc",
// 		"EDIT_TEMPLATE" => "",
// 		"PATH" => "/include/phone2.php"
// 	)
// );
?>
       
      </div>
    </div>
  </div>

<div>
  <div class="ritter">       
          <?php 
              // global $USER;
              // if (!$USER->IsAuthorized()) echo '<div class="avik"><img src="/local/templates/laroma/images/avatar.png" alt=""><a href="https://pizzalaroma.kz/personal/private/">Войти</a></div>';
              // if ($USER->IsAuthorized()) echo '<div class="avik"><img src="/local/templates/laroma/images/avatar.png" alt=""><a href="https://pizzalaroma.kz/personal">Профиль</a> <br/> <a href="https://pizzalaroma.kz/personal/private/?logout=yes&bitrix_include_areas=Y&clear_cache=Y">Выйти</a></div>';
          ?>
        </div>

  <div class="zo_basket ">
   <a class="header-personal__cart d-flex justify-content-end" href="/personal/cart/">
     <div class="header-personal__cart-icon" style="display: flex; align-items: center;">
       <image id="image0" width="" height="" src="<?=SITE_TEMPLATE_PATH ?>/images/basket.png"/ style="max-width: 23px; max-height: 23px;">
       </div>
       <div class="header-personal__cart-line"></div>
       <div class="header-personal__cart-number">            
        <? 
      //   $APPLICATION->IncludeComponent(
      //    "bazarow:basket.small.bazarow",
      //    "ajax",
      //    Array(
      //      "COMPONENT_TEMPLATE" => "ajax",
      //      "PATH_TO_BASKET" => "/personal/cart",
      //      "PATH_TO_ORDER" => "/personal/cart",
      //      "SHOW_DELAY" => "N",
      //      "SHOW_NOTAVAIL" => "Y",
      //      "SHOW_SUBSCRIBE" => "Y"
      //    )
      //  );
       ?>
     </div>
   </a>
   <div class="zo_popover">
     <div class="tringle_block">
      <div id="triangle-up"></div>
    </div>


    <div class="popover_wrap">
      <?
    //   $APPLICATION->IncludeComponent(
    //     "bitrix:main.include",
    //     "",
    //     Array(
    //      "AREA_FILE_SHOW" => "file",
    //      "AREA_FILE_SUFFIX" => "inc",
    //      "EDIT_TEMPLATE" => "",
    //      "PATH" => "/include/basket.php"
    //    )
    //  );
     ?>

     <div class="popover_btns">
       <a href="/personal/order/make/" class="popover_btn_make">Оформить заказ</a>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="header-menu align-items-center justify-content-center d-none d-md-flex header-menu-desctop">

</div>
</div>
<div class="modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close js-modal-close"><svg class="icon-svg" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect y="2.33301" width="2.47494" height="25.5873" transform="rotate(-45 0 2.33301)" />
          <rect x="18.668" width="2.47494" height="26.3993" transform="rotate(45 18.668 0)" />
        </svg>

      </button>
    </div>
    <div class="modal-body modal-wide">
      <ul class="burger-popup-menu"> 
        <li class="burger-popup-menu-title"> <a href="/catalog/pitstsa/">Меню</a></li>
        <li> <a href="/catalog/pitstsa/">Пицца</a></li>
        <li> <a href="/catalog/salaty/">Салаты</a></li>
        <li> <a href="/catalog/goryachie-blyuda/">Горячие блюда</a></li>
        <li> <a href="/catalog/supy/">Супы</a></li>
        <li> <a href="/catalog/zakuski/">Закуски</a></li>
        <li> <a href="/catalog/deserty/">Десерты</a></li>
        <li> <a href="/catalog/napitki/">Напитки</a></li>
        <li> <a href="/catalog/bar/">Бар</a></li>
      </ul>
      <ul class="burger-popup-menu"> 
        <li class="burger-popup-menu-title">Информация</li>
        <li> <a  href="/action/"> АКЦИИ</a></li>
        <li> <a href="/vakansii/">ВАКАНСИИ</a></li>
        <li><a href="/delivery/">ДОСТАВКА</a></li>
        <li><a href="/contact/">КОНТАКТЫ</a></li>
      </ul>
      <div class="burger-popup-footer">
        <div class="burger-footer__location pb-4">
          <div class="footer-menu-contact"> 
            <div class="footer-menu-contact-icon"><svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.9991 0C4.00516 0 0.755859 3.2493 0.755859 7.2432C0.755859 12.1998 7.23785 19.4763 7.51383 19.7836C7.77305 20.0723 8.22563 20.0718 8.48438 19.7836C8.76035 19.4763 15.2423 12.1998 15.2423 7.2432C15.2423 3.2493 11.993 0 7.9991 0ZM7.9991 10.8875C5.98965 10.8875 4.35488 9.25266 4.35488 7.2432C4.35488 5.23375 5.98969 3.59898 7.9991 3.59898C10.0085 3.59898 11.6433 5.23379 11.6433 7.24324C11.6433 9.2527 10.0085 10.8875 7.9991 10.8875Z" fill="white"/>
            </svg>

          </div>
          <div class="footer-menu-contact-text burger-footer-text">г. Атырау, ул. Абая, 18А</div>
        </div>
        <div class="footer-menu-contact pt-2">
          <div class="footer-menu-contact-icon"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.9806 13.26L17.1806 15.54C17.1806 15.54 15.6006 17.32 13.8206 17.78C9.80059 18.82 4.90059 13.86 3.88059 12.52C2.86059 11.2 -1.47941 4.32005 1.12059 1.74005C2.12059 0.740049 3.54059 0.300049 3.54059 0.300049L5.12059 5.70005C5.12059 5.70005 3.78059 6.88005 4.98059 8.36005C6.18059 9.86005 8.28059 12.22 9.58059 13.36C10.9006 14.5 11.9806 13.26 11.9806 13.26Z" fill="white"/>
          </svg>

        </div>
        <div class="footer-menu-contact-text burger-footer-phone">  <a href="tel:8122319191">+7122 31-91-91</a></div>
      </div>
    </div>
    <div class="burger-footer__location line-burger pt-4">
      <div class="footer-menu-contact"> 
        <div class="footer-menu-contact-icon"><svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.9991 0C4.00516 0 0.755859 3.2493 0.755859 7.2432C0.755859 12.1998 7.23785 19.4763 7.51383 19.7836C7.77305 20.0723 8.22563 20.0718 8.48438 19.7836C8.76035 19.4763 15.2423 12.1998 15.2423 7.2432C15.2423 3.2493 11.993 0 7.9991 0ZM7.9991 10.8875C5.98965 10.8875 4.35488 9.25266 4.35488 7.2432C4.35488 5.23375 5.98969 3.59898 7.9991 3.59898C10.0085 3.59898 11.6433 5.23379 11.6433 7.24324C11.6433 9.2527 10.0085 10.8875 7.9991 10.8875Z" fill="white"/>
        </svg>

      </div>
      <div class="footer-menu-contact-text burger-footer-text">г. Атырау, ул. Курмангазы, 5</div>
    </div>
    <div class="footer-menu-contact pt-2">
      <div class="footer-menu-contact-icon"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.9806 13.26L17.1806 15.54C17.1806 15.54 15.6006 17.32 13.8206 17.78C9.80059 18.82 4.90059 13.86 3.88059 12.52C2.86059 11.2 -1.47941 4.32005 1.12059 1.74005C2.12059 0.740049 3.54059 0.300049 3.54059 0.300049L5.12059 5.70005C5.12059 5.70005 3.78059 6.88005 4.98059 8.36005C6.18059 9.86005 8.28059 12.22 9.58059 13.36C10.9006 14.5 11.9806 13.26 11.9806 13.26Z" fill="white"/>
      </svg>

    </div>
    <div class="footer-menu-contact-text burger-footer-phone"> <a href="tel:8122505700">+7122 50-57-00</a></div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal-backdrop"></div>
 -->


    <header>
        <div class="container">
            <div class="head">
                <div class="logo">
                    <a href="/"><img src="/local/templates/new/img/logof.svg" alt=""></a>
                </div>
                <div class="he1">
                    <img src="/local/templates/new/img/hphone.svg" alt="">
                    <span>Контакты:</span>
                    <p><a href="tel:+7 (701) 684-79-07">+7 (701) 684-79-07</a></p>
                    <p><a href="tel:+7 (702) 319-20-05">+7 (702) 319-20-05</a></p>
                </div>

                <div class="he1">
                    <img src="/local/templates/new/img/grafik.svg" alt="">
                    <span>График работы:</span>
                    <p>с 10:00 до 23:00</p>
                </div>

                <div class="he1">
                    <img src="/local/templates/new/img/address.svg" alt="">
                    <span>Город:</span>
                    <p>Атырау</p>
                </div>

                <div class="he2">
                    <div class="zo_basket">
                        <a class="header-personal__cart" href="/personal/cart/">
                            <div class="header-personal__cart-number">
                                <? 
                   if(!$detect->isMobile())
                   {
                      $APPLICATION->IncludeComponent(
                      "bazarow:basket.small.bazarow",
                      "ajax",
                      Array(
                        "COMPONENT_TEMPLATE" => "ajax",
                        "PATH_TO_BASKET" => "/personal/cart",
                        "PATH_TO_ORDER" => "/personal/cart",
                        "SHOW_DELAY" => "N",
                        "SHOW_NOTAVAIL" => "Y",
                        "SHOW_SUBSCRIBE" => "Y"
                      )
                    );
                }
                ?>
                            </div>

                            <image id="image0" width="" height="" src="<?=SITE_TEMPLATE_PATH ?>/img/cart.svg" />

                            <span>Корзина</span>
                        </a>

                    </div>
                </div>

                <div class="he3">
                    <a href="https://apps.apple.com/ru/app/pizza-la-roma/id6446418383" target="_blank"><img
                            src="/local/templates/new/img/app.svg" alt=""></a>
                    <a href="#" onclick="installPWA(); return false;" data-pwa-install><img
                            src="/local/templates/new/img/market.svg" alt=""></a>
                </div>



            </div>
        </div>
    </header>


    <div class="mobile-header">

        <div class="header--eng">
            <div class="header--eng__item">
                <a href="javascript:void(0)"
                    class="lang-en lang-select <?=($_COOKIE['googtrans'] == '/auto/en' ? 'language__img_active' : '')?>"
                    data-google-lang="en">
                    <!-- <img src="/local/templates/new/img/eng_m.svg" alt=""> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
                        <path d="M5 8L0.669872 0.5L9.33013 0.5L5 8Z" fill="white" />
                    </svg>
                </a>

                <a href="javascript:void(0)"
                    class="lang-kk lang-select <?=($_COOKIE['googtrans'] == '/auto/kk' ? 'language__img_active' : '')?>"
                    data-google-lang="kk">
                    <!-- <img src="/local/templates/new/img/eng_m.svg" alt="">  -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
                        <path d="M5 8L0.669872 0.5L9.33013 0.5L5 8Z" fill="white" />
                    </svg>
                </a>


                <a href="javascript:void(0)"
                    class="lang-ru lang-select notranslate <?=($_COOKIE['googtrans'] == '/auto/en' ? '' : 'language__img_active')?>"
                    data-google-lang="ru">
                    <!-- <img src="/local/templates/new/img/eng_m.svg" alt=""> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
                        <path d="M5 8L0.669872 0.5L9.33013 0.5L5 8Z" fill="white" />
                    </svg>
                </a>


            </div>
        </div>


        <a href="https://pizzalaroma.kz/personal/private/" class="avik"><img
                src="/local/templates/new/img/pesonal_m.svg" alt=""></a>

        <div class="logo">
            <a href="/"><img src="/local/templates/new/img/logof.svg" alt=""></a>
        </div>

        <div class="mobile-apps">
            <a href="https://apps.apple.com/ru/app/pizza-la-roma/id6446418383" target="_blank"><img
                    src="/local/templates/new/img/app_m.svg" alt=""></a>
            <a href="#" onclick="installPWA(); return false;" data-pwa-install><img
                    src="/local/templates/new/img/market_m.svg" alt=""></a>
        </div>

        <div class="zo_basket">
            <a class="header-personal__cart" href="/personal/cart/">
                <div class="header-personal__cart-number">
                    <? 
                if($detect->isMobile())
                {
                   $APPLICATION->IncludeComponent(
                   "bazarow:basket.small.bazarow",
                   "ajax",
                   Array(
                     "COMPONENT_TEMPLATE" => "ajax",
                     "PATH_TO_BASKET" => "/personal/cart",
                     "PATH_TO_ORDER" => "/personal/cart",
                     "SHOW_DELAY" => "N",
                     "SHOW_NOTAVAIL" => "Y",
                     "SHOW_SUBSCRIBE" => "Y"
                   )
                 );
             }
                ?>
                </div>

                <image id="image0" width="" height="" src="<?=SITE_TEMPLATE_PATH ?>/img/cart_m.svg" />

            </a>

        </div>

        <div class="butter">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="24" viewBox="0 0 28 24" fill="none">
                <rect width="28" height="4" rx="2" fill="#681320" />
                <rect y="10" width="28" height="4" rx="2" fill="#681320" />
                <rect y="20" width="28" height="4" rx="2" fill="#681320" />
            </svg>
        </div>
    </div>

    <div class="nav">
        <div class="container">
            <div class="navi">
                <div class="navigation">
                    <?$APPLICATION->IncludeComponent(
          "bitrix:menu", 
          "top", 
          array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "left",
            "USE_EXT" => "N",
            "COMPONENT_TEMPLATE" => ""
          ),
          false
        );?>
                </div>
                <div class="header-social">
                    <a href="https://www.instagram.com/la.roma.atyrau/" target="_blank"><img
                            src="/local/templates/new/img/h1.svg" alt=""></a>
                    <a href="https://web.facebook.com/la.roma.atyrau" target="_blank"><img
                            src="/local/templates/new/img/h2.svg" alt=""></a>
                    <a href="https://www.tiktok.com/@kafepizzalaroma" target="_blank"><img
                            src="/local/templates/new/img/h3.svg" alt=""></a>
                </div>

                <div class="header--eng">
                    <div class="header--eng__item">

                        <!-- <a href="javascript:void(0)" class="lang-en lang-select <?=($_COOKIE['googtrans'] == '/auto/en' ? 'language__img_active' : '')?>" data-google-lang="en"><img src="/local/templates/new/img/eng.png" alt=""> Eng <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
            <path d="M5 8L0.669872 0.5L9.33013 0.5L5 8Z" fill="white"/>
          </svg></a>


          <a href="javascript:void(0)" class="lang-en lang-select <?=($_COOKIE['googtrans'] == '/auto/kk' ? 'language__img_active' : '')?>" data-google-lang="kk"><img src="/local/templates/new/img/eng.png" alt=""> Kz <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
            <path d="M5 8L0.669872 0.5L9.33013 0.5L5 8Z" fill="white"/>
          </svg></a>


          <a href="javascript:void(0)" class="lang-ru lang-select notranslate <?=($_COOKIE['googtrans'] == '/auto/en' ? '' : 'language__img_active')?>" data-google-lang="ru"><img src="/local/templates/new/img/eng.png" alt=""> Rus <svg xmlns="http://www.w3.org/2000/svg" width="10" height="8" viewBox="0 0 10 8" fill="none">
            <path d="M5 8L0.669872 0.5L9.33013 0.5L5 8Z" fill="white"/>
          </svg></a> -->


                        <a href="javascript:void(0)"
                            class="lang-en lang-select <?=($_COOKIE['googtrans'] == '/auto/en' ? 'language__img_active' : '')?>"
                            data-google-lang="en"> Eng</a>


                        <a href="javascript:void(0)"
                            class="lang-en lang-select <?=($_COOKIE['googtrans'] == '/auto/kk' ? 'language__img_active' : '')?>"
                            data-google-lang="kk"> Kz</a>

                        <a href="javascript:void(0)"
                            class="lang-ru lang-select notranslate <?=($_COOKIE['googtrans'] == '/auto/ru' ? 'language__img_active' : '')?> <?=($_COOKIE['googtrans'] == null ? 'language__img_active' : '')?>"
                            data-google-lang="ru"> Rus </a>
                    </div>
                </div>


                <?php 
              global $USER;
              // if (!$USER->IsAuthorized()) echo '<div class="avik"><img src="/local/templates/new/profile.svg" alt=""><a href="https://pizzalaroma.kz/personal/private/">Войти</a></div>';

                if ($USER->IsAuthorized()) {
                  echo '<a href="https://pizzalaroma.kz/personal/private/" class="avik"><img src="/local/templates/new/img/profile.svg" alt="">Профиль</a>';
                } else {
                  echo '<a href="https://pizzalaroma.kz/personal/private/" class="avik"><img src="/local/templates/new/img/profile.svg" alt="">Войти</a>';
                }

              
              // if ($USER->IsAuthorized()) echo '<div class="avik"><img src="/local/templates/laroma/images/avatar.png" alt=""><a href="https://pizzalaroma.kz/personal">Профиль</a> <br/> <a href="https://pizzalaroma.kz/personal/private/?logout=yes&bitrix_include_areas=Y&clear_cache=Y">Выйти</a></div>';
          ?>


            </div>
        </div>

    </div>

    <script>
    {
        document.addEventListener('DOMContentLoaded', function() {
            if (window.innerWidth < 800) {
                document.querySelector('.header-menu-mobile').addEventListener('click', function() {
                    document.body.classList.add('modal-open');
                    document.querySelector('.modal').classList.add('show');
                    document.querySelector('.modal-backdrop').classList.add('show');
                })

                document.querySelector('.js-modal-close').addEventListener('click', function() {
                    document.body.classList.remove('modal-open');
                    document.querySelector('.modal').classList.remove('show');
                    document.querySelector('.modal-backdrop').classList.remove('show');
                })
            }
        });
    }
    </script>