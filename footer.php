<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
</div>

<?

// $APPLICATION->IncludeComponent(
// 	"bitrix:catalog.products.viewed", 
// 	"zo", 
// 	array(
// 		"COMPONENT_TEMPLATE" => "zo",
// 		"IBLOCK_MODE" => "multi",
// 		"IBLOCK_TYPE" => "catalog",
// 		"IBLOCK_ID" => "4",
// 		"SHOW_FROM_SECTION" => "N",
// 		"SECTION_ID" => $GLOBALS["CATALOG_CURRENT_SECTION_ID"],
// 		"SECTION_CODE" => "",
// 		"SECTION_ELEMENT_ID" => $GLOBALS["CATALOG_CURRENT_ELEMENT_ID"],
// 		"SECTION_ELEMENT_CODE" => "",
// 		"DEPTH" => "2",
// 		"HIDE_NOT_AVAILABLE" => "N",
// 		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
// 		"PAGE_ELEMENT_COUNT" => "9",
// 		"TEMPLATE_THEME" => "blue",
// 		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
// 		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
// 		"ENLARGE_PRODUCT" => "STRICT",
// 		"SHOW_SLIDER" => "Y",
// 		"SLIDER_INTERVAL" => "3000",
// 		"SLIDER_PROGRESS" => "N",
// 		"LABEL_PROP_POSITION" => "top-left",
// 		"PRODUCT_SUBSCRIPTION" => "Y",
// 		"SHOW_DISCOUNT_PERCENT" => "N",
// 		"SHOW_OLD_PRICE" => "N",
// 		"SHOW_MAX_QUANTITY" => "N",
// 		"SHOW_CLOSE_POPUP" => "N",
// 		"MESS_BTN_BUY" => "Купить",
// 		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
// 		"MESS_BTN_SUBSCRIBE" => "Подписаться",
// 		"MESS_BTN_DETAIL" => "Подробнее",
// 		"MESS_NOT_AVAILABLE" => "Нет в наличии",
// 		"CACHE_TYPE" => "A",
// 		"CACHE_TIME" => "3600",
// 		"CACHE_GROUPS" => "Y",
// 		"ACTION_VARIABLE" => "action_cpv",
// 		"PRODUCT_ID_VARIABLE" => "id",
// 		"PRICE_CODE" => array(
// 		),
// 		"USE_PRICE_COUNT" => "N",
// 		"SHOW_PRICE_COUNT" => "1",
// 		"PRICE_VAT_INCLUDE" => "Y",
// 		"CONVERT_CURRENCY" => "N",
// 		"BASKET_URL" => "/personal/basket.php",
// 		"USE_PRODUCT_QUANTITY" => "N",
// 		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
// 		"ADD_PROPERTIES_TO_BASKET" => "Y",
// 		"PRODUCT_PROPS_VARIABLE" => "prop",
// 		"PARTIAL_PRODUCT_PROPERTIES" => "N",
// 		"ADD_TO_BASKET_ACTION" => "ADD",
// 		"DISPLAY_COMPARE" => "N",
// 		"ADDITIONAL_PICT_PROP_4" => "-",
// 		"LABEL_PROP_4" => array(
// 		),
// 		"ADDITIONAL_PICT_PROP_5" => "-",
// 		"USE_ENHANCED_ECOMMERCE" => "N",
// 		"SHOW_PRODUCTS_4" => "N"
// 	),
// 	false
// );

?>

<?
  $page = $APPLICATION->GetCurPage(true);
  $pageUrl = stristr($page, 'index.php', true);
?>
<?if($pageUrl != "/personal/order/make/" && $pageUrl != "/personal/cart/"):?>

<?endif;?>

<footer>
    <div class="container">
        <div class="foot">
            <div class="f1">
                <img src="/local/templates/new/img/logof.svg" alt="">
            </div>
            <div class="f2">
                <img src="/local/templates/new/img/phonef.svg" alt="">
                <span>Контакты:</span>
                <p>ул. Курмангазы, 5</p>
                <p><a href="tel:+7(701)684 79 07">+7(701)684 79 07</a></p>
                <p><a href="tel:+7(7122)50-57-00">+7(7122)50-57-00</a></p>
            </div>

            <div class="f2">
                <img src="/local/templates/new/img/phonef.svg" alt="">
                <span>Контакты:</span>
                <p>ул. Абая, 18А</p>
                <p><a href="tel:+7(702)319 20 05">+7(702)319 20 05</a></p>
                <p><a href="tel:+7(7122)31-91-91">+7(7122)31-91-91</a></p>
            </div>

            <div class="f2 fl">
                <div class="f2_1">
                    <img src="/local/templates/new/img/clock.svg" alt="">
                    <span>График работы:</span>
                    <p>с 10:00 до 23:00</p>
                </div>
                <div class="f2_1">
                    <img src="/local/templates/new/img/clock.svg" alt="">
                    <span>Город:</span>
                    <p>Атырау</p>
                </div>
            </div>

            <div class="f3">
                <a href="https://apps.apple.com/ru/app/pizza-la-roma/id6446418383" target="_blank"><img
                        src="/local/templates/new/img/app.svg" alt=""></a>
                <a href="#" onclick="installPWA(); return false;"><img
                        src="/local/templates/new/img/market.svg" alt=""></a>
            </div>




        </div>
    </div>
</footer>
<div class="bottom_footer">
    <div class="container">
        <div class="bottom_footer-block">
            <a href="https://www.instagram.com/la.roma.atyrau/" target="_blank">
                <img src="/local/templates/new/img/inst.svg" alt="">
                www.instagram.com/la.roma.atyrau/
            </a>
            <a href="https://www.tiktok.com/@kafepizzalaroma" target="_blank">
                <img src="/local/templates/new/img/tiktok.svg" alt="">
                www.tiktok.com/@kafepizzalaroma
            </a>
            <a href="https://web.facebook.com/la.roma.atyrau" target="_blank">
                <img src="/local/templates/new/img/fb.svg" alt="">
                https://web.facebook.com/la.roma.atyrau
            </a>
        </div>
    </div>
</div>

<div class="totop">
    <svg width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="15" y="115" width="100" height="100" rx="50" transform="rotate(-90 15 115)" fill="#681320"
            fill-opacity="0.5" />
        <rect x="7.5" y="122.5" width="115" height="115" rx="57.5" transform="rotate(-90 7.5 122.5)" stroke="#C71D14"
            stroke-opacity="0.15" stroke-width="15" />
        <path
            d="M83.2611 72.6073L66.5058 56.6838L49.8093 72.6689L48.1895 71.1279L66.5001 53.5616L84.8752 71.0604L83.2611 72.6073Z"
            fill="white" />
    </svg>
</div>


<div class="mobile-menu">
    <div class="mobile-menu-top">
        <div class="sco">
            <a href="https://www.instagram.com/la.roma.atyrau/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path
                        d="M20.16 0H7.84C5.7607 0 3.76657 0.825997 2.29628 2.29628C0.825997 3.76657 0 5.7607 0 7.84V20.16C0 22.2393 0.825997 24.2334 2.29628 25.7037C3.76657 27.174 5.7607 28 7.84 28H20.16C22.2393 28 24.2334 27.174 25.7037 25.7037C27.174 24.2334 28 22.2393 28 20.16V7.84C28 5.7607 27.174 3.76657 25.7037 2.29628C24.2334 0.825997 22.2393 0 20.16 0ZM14 20.72C12.6709 20.72 11.3717 20.3259 10.2666 19.5875C9.16147 18.8491 8.30015 17.7996 7.79153 16.5716C7.28291 15.3437 7.14983 13.9925 7.40912 12.689C7.66842 11.3854 8.30843 10.1881 9.24824 9.24824C10.1881 8.30843 11.3854 7.66842 12.689 7.40912C13.9925 7.14983 15.3437 7.28291 16.5716 7.79153C17.7996 8.30015 18.8491 9.16147 19.5875 10.2666C20.3259 11.3717 20.72 12.6709 20.72 14C20.72 15.7823 20.012 17.4915 18.7518 18.7518C17.4915 20.012 15.7823 20.72 14 20.72ZM21.28 8.4C20.9477 8.4 20.6229 8.30147 20.3466 8.11687C20.0704 7.93227 19.855 7.66989 19.7279 7.36291C19.6007 7.05593 19.5675 6.71814 19.6323 6.39225C19.6971 6.06636 19.8571 5.76701 20.0921 5.53206C20.327 5.29711 20.6264 5.1371 20.9522 5.07228C21.2781 5.00746 21.6159 5.04073 21.9229 5.16788C22.2299 5.29504 22.4923 5.51037 22.6769 5.78664C22.8615 6.06292 22.96 6.38773 22.96 6.72C22.96 7.16556 22.783 7.59288 22.4679 7.90794C22.1529 8.223 21.7256 8.4 21.28 8.4Z"
                        fill="white" />
                </svg>
            </a>
            <a href="https://web.facebook.com/la.roma.atyrau" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                    <path
                        d="M18.4653 4.34482C10.6669 4.34482 4.34485 10.667 4.34485 18.4653C4.34485 26.2633 10.6669 32.5862 18.4653 32.5862C26.2637 32.5862 32.5862 26.2636 32.5862 18.4653C32.586 10.667 26.2637 4.34482 18.4653 4.34482ZM23.2877 13.3773C23.2877 13.5121 23.1785 13.6215 23.0435 13.6215H19.606V15.469H23.0433C23.1783 15.469 23.2874 15.5784 23.2874 15.7132V19.1501C23.2874 19.2851 23.1783 19.3943 23.0433 19.3943H19.8502V26.9367C19.8502 27.0717 19.741 27.1809 19.606 27.1809H16.3575C16.2225 27.1809 16.1133 27.0717 16.1133 26.9367V19.3945H13.8873C13.7523 19.3945 13.6432 19.2854 13.6432 19.1504V15.7134C13.6432 15.5786 13.7523 15.4692 13.8873 15.4692H16.1133V14.0756C16.1133 14.0556 16.1158 14.0363 16.1201 14.0177C16.1221 12.0325 16.5467 9.76139 19.7991 9.75114C19.8062 9.75065 19.8138 9.75016 19.8211 9.75016H23.0433C23.1783 9.75016 23.2874 9.85954 23.2874 9.99431L23.2877 13.3773Z"
                        fill="white" />
                </svg>
            </a>
            <a href="https://www.tiktok.com/@kafepizzalaroma" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path
                        d="M4.66667 0C2.10782 0 0 2.10782 0 4.66667V23.3333C0 25.8922 2.10782 28 4.66667 28H23.3333C25.8922 28 28 25.8922 28 23.3333V4.66667C28 2.10782 25.8922 0 23.3333 0H4.66667ZM14 6.22222H17.1111C17.1111 7.78556 19.3993 9.33333 20.2222 9.33333V12.4444C19.2811 12.4444 18.1502 12.0309 17.1111 11.3325V17.1111C17.1111 19.684 15.0173 21.7778 12.4444 21.7778C9.87156 21.7778 7.77778 19.684 7.77778 17.1111C7.77778 14.5382 9.87156 12.4444 12.4444 12.4444V15.5556C11.5858 15.5556 10.8889 16.254 10.8889 17.1111C10.8889 17.9682 11.5858 18.6667 12.4444 18.6667C13.3031 18.6667 14 17.9682 14 17.1111V6.22222Z"
                        fill="white" />
                </svg>
            </a>
        </div>

        <div class="rsi">
            <a href="https://pizzalaroma.kz/personal/cart/">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <rect x="-3.05176e-05" width="40" height="40" rx="20" fill="#681320" />
                    <rect x="0.999969" y="1" width="38" height="38" rx="19" stroke="white" stroke-opacity="0.42"
                        stroke-width="2" />
                    <path
                        d="M30.406 17.4557L26.596 17.4557L23.1044 10.8754C22.8771 10.4448 22.3315 10.2739 21.8909 10.4999C21.4492 10.7238 21.2782 11.2564 21.5077 11.6881L24.568 17.4528H15.8448L18.9052 11.6881C19.1335 11.2582 18.9648 10.7255 18.5223 10.5016C18.0798 10.2765 17.536 10.4465 17.3073 10.8771L13.8157 17.4575L10.006 17.4557C9.67469 17.4557 9.40604 17.7189 9.40604 18.0105V19.1862C9.40604 19.5108 9.67469 19.741 10.006 19.741H10.8727L12.5883 27.306C12.8324 28.4486 13.8048 29.2129 14.9298 29.2129H25.4785C26.5698 29.2129 27.5774 28.4475 27.8215 27.3714L29.5372 19.8064H30.406C30.7375 19.8064 31.006 19.5432 31.006 19.2516V18.0759C31.006 17.7202 30.736 17.4557 30.406 17.4557ZM16.606 26.2736C16.606 26.5981 16.3373 26.8284 16.006 26.8284C15.6748 26.8284 15.406 26.5651 15.406 26.2736V21.5707C15.406 21.2461 15.6748 21.0159 16.006 21.0159C16.3373 21.0159 16.606 21.2792 16.606 21.5707V26.2736ZM20.806 26.2736C20.806 26.5981 20.5373 26.8284 20.206 26.8284C19.8748 26.8284 19.606 26.5651 19.606 26.2736V21.5707C19.606 21.2461 19.8748 21.0159 20.206 21.0159C20.5373 21.0159 20.806 21.2792 20.806 21.5707V26.2736ZM25.006 26.2736C25.006 26.5981 24.7373 26.8284 24.406 26.8284C24.0748 26.8284 23.806 26.5651 23.806 26.2736V21.5707C23.806 21.2461 24.0748 21.0159 24.406 21.0159C24.7373 21.0159 25.006 21.2792 25.006 21.5707V26.2736Z"
                        fill="white" />
                </svg>
            </a>
            <div class="closin">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <rect x="10.2426" y="34.1421" width="33.799" height="3" rx="1.5"
                        transform="rotate(-45 10.2426 34.1421)" fill="white" />
                    <rect x="34.142" y="37.5563" width="33.799" height="3" rx="1.5"
                        transform="rotate(-135 34.142 37.5563)" fill="white" />
                </svg>
            </div>
        </div>
    </div>

    <div class="mobile-menu-middle">
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

    <div class="mobile-menu-bottom">
        <div class="mb1">
            <img src="https://pizzalaroma.kz/local/templates/new/img/hphone.svg" alt="">
            <span>Контакты:</span>
            <p><a href="tel:+7 (701) 684-79-07">+7 (701) 684-79-07</a></p>
            <p><a href="tel:+7 (702) 319-20-05">+7 (702) 319-20-05</a></p>
        </div>

        <div class="mb1">
            <img src="https://pizzalaroma.kz/local/templates/new/img/grafik.svg" alt="">
            <span>График работы:</span>
            <p>с 10:00 до 23:00</p>
        </div>

        <div class="mb2">
            <a href="#" onclick="installPWA(); return false;"><img src="/local/templates/new/img/market.svg" alt=""></a>

            <a href="https://apps.apple.com/ru/app/pizza-la-roma/id6446418383" target="_blank"><img src="/local/templates/new/img/app.svg" alt=""></a>
        </div>
    </div>
</div>

<?php 
global $USER;
if (!$USER->IsAuthorized()):
?>
<div class="bgs">
    <div class="iea">
        <div class="closi"></div>
        <h2>Войдите, чтобы получать бонусы за заказ</h2>
        <div class="iea-btn">
            <a class="iea-btn1" onclick="hidd()" href="https://pizzalaroma.kz/personal/private/"><img
                    src="/local/templates/new/img/profile.svg" alt=""> Войти</a>
            <a class="iea-btn2" onclick="hidd()"
                href="https://pizzalaroma.kz/personal/registration/">Зарегистрироваться</a>
        </div>

        <div><span class="hidd" onclick="hidd()">Продолжить как гость</span></div>

    </div>
</div>

<script>
setTimeout(() => {
    $(".bgs").addClass('act')
}, 2000);

function hidd() {
    $(".bgs").removeClass('act')
    var end = +new Date
    end = end + (3600 * 24 * 1000)
    window.localStorage.setItem('remove_me', end)
}

$(".closi").click(function() {
    $(".bgs").removeClass('act')
    var end = +new Date
    end = end + (3600 * 24 * 1000)
    window.localStorage.setItem('remove_me', end)
})

let get = window.localStorage.getItem('remove_me')
let no = +new Date
if (get > no) {
    jQuery(".bgs").remove();
}
</script>

<?php endif; ?>

<script>
$(document).ready(function() {

    $('ul.tabs li').click(function() {

        var tab_id = $(this).attr('href'),
            $container = $(this).parent().parent();
        //Цепляемся за контейнер-папу текущих табов (div.container)
        // и дальше действуем в нём
        $container.find('ul.tabs li').removeClass('current');
        $container.find('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');

    })

})
</script>


<?
global $USER;
$none = false;
if ($USER->IsAdmin()):
  $none = true;

$data = file_get_contents('api/shutdown1.php', true);
if($data == 0) {
  $text = 'Отключить сайт';
} 
if($data == 1) {
  $res = CIBlockElement::GetByID(905);
  if($ar_res = $res->GetNext())
  $text = 'Включить сайт';
  if($none != true) {
    echo '
    <div class="bgs2 act">
      <div class="iea">
        <h2 style="margin-bottom: 0;">'.$ar_res['DETAIL_TEXT'].'</h2>
      </div>
    </div>
    ';
  }

} 

$APPLICATION->AddPanelButton(
	Array(
		"ID" => "shutdown", //определяет уникальность кнопки
		"TEXT" => $text,
		"TYPE" => "BIG", //BIG - большая кнопка, иначе маленькая
		"MAIN_SORT" => 100, //индекс сортировки для групп кнопок
		"SORT" => 10, //сортировка внутри группы
		"HREF" => 'javascript:MyJSFunction1()', //или javascript:MyJSFunction())
		"ICON" => "icon-class", //название CSS-класса с иконкой кнопки
		"SRC" => "/local/templates/new/img/shutdown.png",
		"ALT" => "", //старый вариант
		// "HINT" => array( //тултип кнопки
		// 	"TITLE" => "Заголовок тултипа",
		// 	"TEXT" => "Текст тултипа" //HTML допускается
		// ),
		// "HINT_MENU" => array( //тултип кнопки контекстного меню
		// 	"TITLE" => "Заголовок тултипа",
		// 	"TEXT" => "Текст тултипа" //HTML допускается
		// ),
		"MENU" => Array(
			Array( //массив пунктов контекстного меню
				"TEXT" => $text,
				"TITLE" => "для неавторизованных",
				"SORT" => 10, //индекс сортировки пункта
				"ICON" => "", //иконка пункта
				"ACTION" => "Javascript-код",
				"SEPARATOR" => true, //определяет пункт-разделитель
				"DEFAULT" => true, //пункт по умолчанию?
				"MENU" => Array() //массив подменю
				)
			)
		),
	$bReplace = false //заменить существующую кнопку?
);	?>

<script>
function MyJSFunction1() {
    $.ajax({
        url: '/local/templates/new/api/shutdown1.php',
        dataType: 'text',

        success: function(i) {

            jQuery.post(
                "/local/templates/new/api/change1.php", {
                    param: i,
                },
                function(data) {
                    window.location.reload();
                }
            );

        }
    });
}
</script>
<?php
endif;



?>


<style>
.banner-slider__item {
    display: none;
}

.banner-slider__item:nth-child(1) {
    display: block;
}
</style>


<script>
var num = 1;
$('#rating_1 .serv_rate1:lt(' + num + ')').addClass('current');
</script>

<script>
var num2 = 1;
$('#rating_2 .serv_rate2:lt(' + num2 + ')').addClass('current');
</script>




</body>

</html>