<!DOCTYPE html>
<html lang="ru">
<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace(substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI']) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode(strtolower($_GET['version'])) : '';
$partner = isset($_GET['partner']) ? urldecode(strtolower($_GET['partner'])) : '';
$query_string = http_build_query($_GET);
include_once $ROOT . 'version.php';
?>

<head>
	<base href="<?= $BASE_HREF . ($query_string ? '?' . $query_string : '') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?= $title ?></title>

	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $desc ?>">
	<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
	<meta property="og:image" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">
	<link rel="image_src" href="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>img/common/share.jpg?2018-07-17">

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-<?= $GTM ?>');
	</script>
	<?php if ($Facebook_ID != '') { ?>
		<!-- Facebook Pixel Code -->
		<script>
			! function(f, b, e, v, n, t, s) {
				if (f.fbq) return;
				n = f.fbq = function() {
					n.callMethod ?
						n.callMethod.apply(n, arguments) : n.queue.push(arguments)
				};
				if (!f._fbq) f._fbq = n;
				n.push = n;
				n.loaded = !0;
				n.version = '2.0';
				n.queue = [];
				t = b.createElement(e);
				t.async = !0;
				t.src = v;
				s = b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t, s)
			}(window, document, 'script',
				'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '<?= $Facebook_ID ?>');
			fbq('track', 'PageView');
		</script>
		<!-- End Facebook Pixel Code -->
	<?php } ?>
</head>

<body class="<?= $version ? 'version-' . $version : '' ?> page-thanks">
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2487426621502508&ev=PageView&noscript=1" /></noscript>

	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?= $GTM ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

	
	<div class="wrapper">
		
	
	<header class="header">
	<div class="container">
		<div class="header__content">
			<div id="hamburger-menu" class="header__hamburger">
				<img data-src="img/header/hamburger.svg" alt="" class="lazy">
			</div>

			<div class="header__logo">
				<img data-src="img/header/logo.svg" alt="" class="lazy">
				<img data-src="img/header/logo-2.png" alt="" class="lazy">
			</div>
			<nav class="header__menu">
				<ul class="header__list">
					<li class="header__item">
						<a href="#program" class="header__link scroll">О&nbsp;программе</a>
					</li>
					<li class="header__item">
						<a href="#info" class="header__link scroll">Кому подойдет</a>
					</li>
					<li class="header__item">
						<a href="#education" class="header__link scrol scroll">Как проходит обучение</a>
					</li>
					<li class="header__item">
						<a href="#faq" class="header__link scroll">Вопросы</a>
					</li>
				</ul>
			</nav>
			<a href="#popup-reg" data-fancybox class="header__button button">Оставить заявку</a>
		</div>
	</div>
</header>

<div class="menu-modal" id="menu-modal">
	<div class="menu-modal__box">
		<div class="menu-modal__head">
			<div class="menu-modal__head-close" id="menu-modal__close">
				<img data-src="img/header/close.svg" alt="" class="lazy ">
			</div>
			<div class="header__logo">
				<img data-src="img/header/logo.svg" alt="" class="lazy">
			</div>
		</div>
		<nav class="menu-modal__menu">
			<ul class="menu-modal__list">
				<li class="menu-modal__item">
					<a href="#program" class="menu-modal__link scroll">О программе</a>
				</li>
				<li class="menu-modal__item">
					<a href="#info" class="menu-modal__link scroll">Кому подойдет</a>
				</li>
				<li class="menu-modal__item">
					<a href="#education" class="menu-modal__link scroll">Как проходит обучение</a>
				</li>
				<li class="menu-modal__item">
					<a href="#faq" class="menu-modal__link scroll">Вопросы</a>
				</li>
				<a href="#popup-reg" data-fancybox class="menu-modal__button button">Оставить заявку</a>
			</ul>
		</nav>
	</div>
</div>
	<section class="thanks" id="thanks">
    <div class="container">
        <div class="thanks__box">
            <div class="thanks__content">
                <h1 class="thanks__content-title">Спасибо!</h1>
                <div class="thanks__content-subtitle">Ваша заявка принята</div>
                <div class="thanks__content-text">Скоро специалист приемной комиссии свяжется с&nbsp;вами и&nbsp;ответит на&nbsp;вопросы.</div>
                <a href="<?= $BASE_HREF ?>" class="thanks__content-button button" >На главную</a>
            </div>
            <img data-src="img/main/spa.svg" alt="" class="lazy">
        </div>
    </div>
</section>

	</div>

	<div class="fixed">
		<a href="#popup-reg" data-fancybox class="fixed__button button">Оставить заявку</a>
	</div>

	<div hidden>
		
		<div class="popup popup-reg" id="popup-reg">
    
<form action="<?=$action?>&form=reg" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Оставьте заявку и получите консультацию</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="Имя" class="form__input" required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="Телефон" class="form__input" required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-mail" class="form__input" required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button" type="submit">Оставить заявку</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Нажимая на&nbsp;кнопку, я&nbsp;даю согласие на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также соглашаюсь с <a href="#privacy" class="fancybox form__more-link">Политикой конфиденциальности.</a></div>
            </label>
        </div>
    </div>
</form>

</div>


		
		<a href="http://sydi.ru" style="display: none">Synergy Digital</a>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>
	<script src="https://syn.su/js/lander.js?v=2" defer="defer"></script>
	<script src="js/script.js"></script>
</body>

</html>