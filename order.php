<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $count = $_POST['count']; // Выбранный продукт
    $name = $_POST['name']; // Имя пользователя
    $phone = $_POST['phone']; // Номер телефона пользователя
    $productName = 'Бластер'

    // Замените 'YOUR_BOT_TOKEN' на актуальный токен вашего бота
    $botToken = '6721817401:AAEML8ZM2TU1Qb5euBZ-wgvAgFdvtHNIHG4';
    $chatId = '-4047226917'; // Укажите ID чата, куда вы хотите отправлять сообщения

    // Формируем текст сообщения для отправки
    $message = "Новый заказ!\nПродукт: $productName\nИмя: $name\nТелефон: $phone\nКоличество: $count";

    // Формируем URL для отправки сообщения через API Телеграма
    $apiUrl = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

    // Отправляем запрос к API Телеграма
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    // Проверяем результат и выводим сообщение об успешной отправке или об ошибке
    if ($result) {
        echo "Спасибо! Ваш заказ был отправлен.";
    } else {
        echo "Извините, произошла ошибка при отправке заказа.";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preload" href="polit/_next/static/css/9cd874bc94f1a7db.css" as="style">
    <link rel="stylesheet" href="polit/_next/static/css/9cd874bc94f1a7db.css" data-n-g="">




<script>
    fbq('track', '');
</script>
    <meta charset="utf-8">
    <title>
    <?php if ($_POST['phone']) {
            echo 'Дякуємо за замовлення!';
        } else {
            echo 'Якась проблема...';
        } ?>
    </title>
    <style type="text/css">
        body {
            line-height: 1;
            height: 100%;
            font-family: Arial;
            font-size: 15px;
            color: #313e47;
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
            background-image: url('/back.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            margin: 0;
            padding: 0;
            font-size: 36px;
            line-height: 44px;
            color: #313e47;
            text-align: center;
            font-weight: bold;
        }

        a {
            color: #69B9FF;
        }

        .list_info li span {
            width: 150px;
            display: inline-block;
            font-weight: bold;
            font-style: normal;
        }

        .list_info {
            text-align: left;
            display: inline-block;
            list-style: none;
            margin-top: -10px;
            margin-bottom: -11px;
        }

        .list_info li {
            margin: 11px 0px;
        }

        .fail {
            margin: 10px 0 20px 0px;
            text-align: center;
        }

        .email {
            position: relative;
            text-align: center;
            margin-top: 20px;
        }

        .email input {
            height: 30px;
            width: 200px;
            font-size: 14px;
            padding-right: 10px;
            padding-left: 10px;
            outline: none;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 1px solid #B6B6B6;
            margin-bottom: 10px;
        }

        .block_success {
                max-width: 1200px;
            padding: 170px 30px 70px 30px;
            margin: -50px auto;
        }

        .success {
			font-size: 18px;
			font-weight: 100;
            text-align: center;
			margin-bottom: 25px;
}
        }

        .mail_block label {
            line-height: 30px;
            font-size: 20px;
        }

        .block_success .button {
            display: inline-block;
            outline: none;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font: 28px Arial, Helvetica, sans-serif;
            padding: 10px 0px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            -webkit-border-radius: .5em;
            -moz-border-radius: .5em;
            border-radius: .5em;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            color: #d9eef7;
            border: solid 1px #0076a3;
            background: #0095cd;
            background: -webkit-linear-gradient(#00adee, #0078a5);
            background: -o-linear-gradient(#00adee, #0078a5);
            background: linear-gradient(#00adee, #0078a5);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
            width: 200px !important;
        }

        .block_success .button:hover {
            text-decoration: none;
            color: #d9eef7;
            background: #007ead;
            background: -webkit-linear-gradient(#0095cc, #00678e);
            background: -o-linear-gradient(#0095cc, #00678e);
            background: linear-gradient(#0095cc, #00678e);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0095cc', endColorstr='#00678e');
        }

        .success1 {
            padding-top: 20px;
            text-align: center;
        }
        
         .header {
             background-color: #393d45;
         }
        .nav__link.active, .nav__link:hover {
            color: #ffb627;
        }
        .nav__link {
            color: white;
        }
        .styles_langSwitcher__link__3ZJvG {
            color: white;
        }
        .styles_langSwitcher__link__3ZJvG:hover {
            color: #ffb627;
        }
        .styles_langSwitcher__link__3ZJvG.styles_langSwitcher__link_active__6L_Rp {
            color: #ffb627;
        }
        .logo img{
            max-height: 45px;
        }
        .card:hover {
            box-shadow: 1
            0 7px rgb(63 63 63);
        }
        .card__content {
            padding: 24px 16px 32px;
            margin-bottom: 0px;
            background: #393d45;
        }
        .card__name {
            color: white;
        }
        .card__bottom{
            background: #393d45;
        }

        .btn__blue {
            color: #393d45;
            background-color: #f2ae22;
        }
        .btn__blue:hover {
            background-color: #6b7280;
            color: #FFFFFF;
        }
        .card__name:hover {
            color: #fcb522;
        }
        body{
            background-color:#2b2d32;
        }
        .category__item:hover .category__name:before {
            background-color: #d89d22;
            width: 90%;
            box-shadow: 3 0 10px transparent;
        }
        .category__item:hover .category__overlay {
            background: #393d45;
        }
        .category__item:hover .category__name {
            color: #d89d22;
        }
        .header__buttons a img, .search__img{
            height: 24px;
            filter: invert(1);
        }
        .html-code ol, .html-code p, .html-code ul {
            color: white;
        }
        .html-code h2 {

            color: #ffb722;
        }
        .html-code a {
            color: #fcb522;
        }
        body {
            color: white;
        }
        .footer-menu__link {
            color: white;
        }
        .footer-menu__link:hover {
            color: #fcb522;
        }
        .link-terms:before {

            background-color: #ffb722;
        }
        .footer-contacts__link {
            color: white;
        }
        .footer-contacts__link:hover{
            color:#ffb722;
        }
        .footer-contacts__phone:before {
            filter: invert(1);
        }
        .footer-socials a {
            filter: invert(1);
        }
        .swiper-button-prev:before{
            content: none;
        }
        .swiper-button-next:before{
            content: none;
        }
        .card {
            background-color: #393d45;
        }
        .burger .burger__bar {

            background: #efefef;

        }
        .mobile-menu__link{
            color: white;
            background-color: #2b2e37;
        }
        .mobile-menu__body{
            background-color: #393d45;
        }
        .mobile-menu__icon img{
            filter: invert(1);
        }
        .mobile-menu__item--contact a {
            color: white;

        }
        .mobile-menu__item--contact a:hover {
            color: #feb722;
        }
        .nav__item {

            font-size: 16px;

            transition: all .3s ease;
            cursor: pointer;
        }
        .nav__dropdown-header {
            font-style: inherit;
            display: inline-flex;
            align-items: center;
        }
        .nav__dropdown{
            position: relative;
        }
        .nav__dropdown-header svg {
            margin-left: 4px;
        }
        .nav__dropdown.active .nav__dropdown-list {
            opacity: 1;
            visibility: visible;
        }
        .nav__dropdown-list {
            position: absolute;
            top: calc(100% + 12px);
            z-index: 2;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            background-color: #393d45;
            box-shadow: 0 4px 12px rgb(0 0 0 / 10%);
            opacity: 0;
            visibility: hidden;
            transition: all .3s ease;
            max-height: 350px;
            overflow-y: scroll;
        }
        .nav__dropdown-item a{
            padding: 8px 14px;
            color: white;
            transition: all .3s ease;
        }
        .nav__dropdown-item.active, .nav__dropdown-item:hover {
            background-color: #2c2d31;
        }
        .nav__dropdown-item{
            margin-right:0px!important;
        }
        .nav__dropdown.active .nav__dropdown-header {
            color: #f6b223;
        }

        .nav__dropdown-item a {
            color: inherit;
            display: block;
        }
        .nav__dropdown-header svg {
            margin-left: 6px;
        }
        .nav__dropdown-header svg path{

            fill: white;

        }
        .nav__dropdown.active .nav__dropdown-header svg path{

            fill: #f6b223;

        }
        .scrollbar::-webkit-scrollbar{width:4px}
        .scrollbar::-webkit-scrollbar-track{background-color:transparent}
        .scrollbar::-webkit-scrollbar-thumb{background-color:#f6b223}
.card__image {
    height: 215px;
}

        @media only screen and (max-width: 1200px) {
            .header__logo {
                position: absolute;
                right: 50%;
                transform: translateX(50%);
            }
        }
		 @media only screen and (max-width: 760px) {
		     .card__image {
    height: 175px;
}
    body {
    line-height: 1;
    height: 100%;
    font-family: Arial;
    font-size: 15px;
  
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
    background-position-y: -80px;
    background-image: url(/back4.jpg);
    background-repeat: no-repeat;
    background-size: contain;
}
.block_success {
    max-width: 1013px;
    padding: 150px 15px 70px 15px;
    margin: -50px auto;
}
.header__body{
    padding-left:15px;
}
.m_h2{
        padding:0px;
        line-height: 30px;
        font-size: 20px;
}
.container{
    padding:0px;
}
.s_mob{
  
    margin-bottom: 0px;
}
.offer_title.title.text-center.mb-40{
    
    line-height: 25px;
}
.success {
    font-size: 16px;
    
}
	 }
		
.fail.success{
        line-height: 25px;
	    font-size: 20px;
}

.offer {
    padding: 10px 0 0;
}
.btn{
	min-width:auto;
}
.header {
    background-color: #393d45;
}
    .mb-40 {
    margin-bottom: 20px;
}
    </style>
</head>
<body>
      

<div class="block_success">
    <h2 style="text-transform: uppercase;color: GOLD;    padding-bottom: 84px;" class="m_h2">Вітаємо!<br> Ваше замовлення прийнято!</h2>
    <p   class="success ">
       Найближчим часом з вами зв'яжеться оператор для підтвердження замовлення. Будь ласка, увімкніть Ваш контактний
        телефон.
    </p>
 <!--   <h3 class="success">
        Перевірте правильність введеної інформації.
    </h3>-->
    <div class="success s_mob">
        <ul class="list_info">
            <li><span> </span></li>
        </ul>
        <br/><span id="submit"><a href="javascript:history.back()">Повернутися назад</a></span>
    </div>
    
      
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('.burger').on("click",function(){
          $(".burger").toggleClass( "active");
          $(".mobile-menu").toggleClass( "active");
        });
 $('.nav__item .nav__dropdown').on("click",function(){
          $(".nav__item .nav__dropdown").toggleClass("active");
         
        });
    });
    
    
    </script>
</body>
</html>
