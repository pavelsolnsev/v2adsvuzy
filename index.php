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

<body class="<?= $version ? 'version-' . $version : '' ?> ">
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
		<section class="main ">
    <div class="container">
        <div class="main__box">
            <div class="main__content">
                <div class="main__content-course">Курс</div>
                <h1 class="main__content-title">СПА-специалист</h1>
                <div class="main__content-subtitle">Банное<br> мастерство<br> и&nbsp;фитотерапия</div>
            </div>
            <img data-src="img/main/spa.svg" alt="" class="lazy">
        </div>
        <ul class="main__list">
            <li>Получите профессию<br> Косметик в&nbsp;ведущем вузе страны</li>
            <li>280 академических<br> часов занятий</li>
            <li>14&nbsp;дней практики<br> в&nbsp;СПА-салонах, банях<br> и на площадке университета</li>
        </ul>
    </div>
</section>
		<section class="form-reg">
    <div class="container">
        
<form action="<?=$action?>&form=form_1" class="form ">
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
</section>





		<section class="info" id="info">
    <div class="container">
        <h2 class="info__title title">Для тех, кто</h2>
        <div class="info__box slider-dots">
            <div class="info__item">
                <p>Желает освоить профессию &laquo;Косметик&raquo; с&nbsp;нуля или улучшить свои профессиональны навыки и&nbsp;расширить свой спектр услуг, получать больший доход. Хочет делать массаж родным и&nbsp;близким, правильно париться и&nbsp;парить свою семью или друзей.</p>
            </div>
            <div class="info__item">
                <p>Имеет навыки в&nbsp;сфере СПА-услуг или массажа, умеет правильно париться и&nbsp;желает получить свидетельство о&nbsp;профессии и&nbsp;возможность работать официально в&nbsp;бане или СПА-салоне.</p>
            </div>
            <div class="info__item">
                <p>Планирует открыть или построить баню, открыть свой СПА-салон и&nbsp;вести свой бизнес.</p>
            </div>
        </div>
    </div>
</section>
		<section class="advantages" id="advantages">
    <div class="container">
        <h2 class="advantages__title title"><span>Преимущества</span> курса</h2>
        <div class="advantages__box">
            <div class="advantages__item">
                <p>14&nbsp;дней очной практики в&nbsp;СПА-салонах и банях Москвы, а&nbsp;также на&nbsp;площадке университета &laquo;Синергия&raquo;</p>
            </div>
            <div class="advantages__item">
                <p>Теория дистанционно в&nbsp;удобное для вас время</p>
            </div>
            <div class="advantages__item">
                <p>Все необходимые материалы предоставляются нами</p>
            </div>
            <div class="advantages__item">
                <p>Рассрочка, кредит без переплаты</p>
            </div>
            <div class="advantages__item">
                <p>Свидетельство о&nbsp;присвоении профессии &laquo;СПА-косметик&raquo; от&nbsp;ведущего ВУЗа России</p>
            </div>
            <div class="advantages__item">
                <p>Соответствие программы профстандарту</p>
            </div>
            <div class="advantages__item">
                <p>Возможность получить новую профессию или открыть массажную практику</p>
            </div>
        </div>
    </div>
</section>
		<section class="program" id="program">
    <div class="container">
        <h2 class="program__title"><span>Программа профессионального обучения</span> с&nbsp;14-ти дневной очной практикой в&nbsp;СПА-салонах и&nbsp;банях Москвы, а&nbsp;также на&nbsp;площадке университета &laquo;Синергия&raquo;</h2>
        <div class="program__box">
            <div class="program__box-title">Состоит из разделов:</div>
            <div class="program__box-wrap">
                <div class="program__box-item">Анатомия и физиология</div>
                <div class="program__box-item">Косметическая химия</div>
                <div class="program__box-item">Психология общения с клиентом</div>
                <div class="program__box-item">Эстетические и очищающие процедуры для тела</div>
                <div class="program__box-item">СПА-массаж и СПА-процедуры</div>
                <div class="program__box-item">Классический массаж лица и тела</div>
                <div class="program__box-item">Антистрессовый массаж</div>
                <div class="program__box-item">Банное мастерство</div>
                <div class="program__box-item">Фитотерапия</div>
                <div class="program__box-item">Секреты построения успешной карьеры</div>
            </div>
        </div>
        <ul class="program__list">
            <li><span>280</span><div>академических<br> часов занятий</div></li>
            <li><span>14</span><div>дней практики в&nbsp;СПА-салонах, банях<br> и&nbsp;на&nbsp;площадке Университета Синергия</div></li>
        </ul>
    </div>
</section>
		 
<section class="education" id="education">
    <div class="container">
        <h2 class="education__title title"><span>Как проходит</span> обучение</h2>
        <div class="education__box">
            <ul class="education__box-list">
                <li class="education__box-item">
                    <div class="education__box-item-number">1</div>
                    <div class="education__box-item-content">
                        <h4>Смотрите онлайн уроки</h4>
                        <p>В&nbsp;удобном для вас темпе, задавайте вопросы экспертам на&nbsp;практических занятиях</p>
                    </div>
                </li>
                <li class="education__box-item">
                    <div class="education__box-item-number">2</div>
                    <div class="education__box-item-content">
                        <h4>Сдавайте тесты</h4>
                        <p>9&nbsp;попыток на&nbsp;сдачу оценочных тестов</p>
                    </div>
                </li>
                <li class="education__box-item">
                    <div class="education__box-item-number">3</div>
                    <div class="education__box-item-content">
                        <h4>Практикуйтесь</h4>
                        <p>Отрабатываете новые навыки на&nbsp;практике в&nbsp;вечернее время будней и&nbsp;в&nbsp;выходные</p>
                    </div>
                </li>
                <li class="education__box-item">
                    <div class="education__box-item-number">4</div>
                    <div class="education__box-item-content">
                        <h4>Получайте документы</h4>
                        <p>После сдачи итогового теста</p>
                    </div>
                </li>
            </ul>

            <div class="education__box-img">
                <img data-src="img/education/education.svg" alt="" class="lazy">
            </div>
        </div>
        <div class="education__acco acco">
            <h3 class="acco__title">Практика</h3>
            <ul class="acco__box">
                
                <li class="acco__item">
                    <div class="acco__item-trigger">
                        <div class="acco__item-title"><span>1-ая неделя:</span></div>
                    </div>
                    <ul class="acco__content">
                        
        <li class="acco__content-item">
            <span>ПН – 19:00-22:00 </span>
            <p>&laquo;сухое парение&raquo; на&nbsp;кушетках с&nbsp;вениками</p>
        </li>
        <li class="acco__content-item">
            <span>ВТ – 19:00-22:00 </span>
            <p>&laquo;сухое парение&raquo; на&nbsp;кушетках с&nbsp;вениками</p>
        </li>
        <li class="acco__content-item">
            <span>СР – 19:00-22:00 </span>
            <p>&laquo;сухое парение&raquo; на&nbsp;кушетках с&nbsp;вениками</p>
        </li>
        <li class="acco__content-item">
            <span>ЧТ – 19:00-22:00 </span>
            <p>&laquo;сухое парение&raquo; на&nbsp;кушетках с&nbsp;вениками</p>
        </li>
        <li class="acco__content-item">
            <span>ПТ – 19:00-22:00 </span>
            <p>&laquo;сухое парение&raquo; на&nbsp;кушетках с&nbsp;вениками</p>
        </li>
        <li class="acco__content-item">
            <span>СБ – 11:00-14:15 <br>и 15:30-19:45 </span>
            <p>практика в&nbsp;русской бане (по&nbsp;подгруппам)</p>
        </li>
        <li class="acco__content-item">
            <span>ВС – 11:00-14:15 <br>и 15:30-19:45</span>
            <p>практика в&nbsp;русской бане (по&nbsp;подгруппам)</p>
        </li>
         
                    </ul>
                </li>
                
                <li class="acco__item">
                    <div class="acco__item-trigger">
                        <div class="acco__item-title"><span>2-ая неделя:</span></div>
                    </div>
                    <ul class="acco__content">
                        
        <li class="acco__content-item">
            <span>ПН – 19:00-22:00 </span>
            <p>практика по&nbsp;классическому массажу, площадка &laquo;Синергии&raquo;</p>
        </li>
        <li class="acco__content-item">
            <span>ВТ – 19:00-22:00 </span>
            <p>практика по&nbsp;классическому массажу, площадка &laquo;Синергии&raquo;</p>
        </li>
        <li class="acco__content-item">
            <span>СР – 19:00-22:00 </span>
            <p>практика по&nbsp;классическому массажу, площадка &laquo;Синергии&raquo;</p>
        </li>
        <li class="acco__content-item">
            <span>ЧТ – 19:00-22:00 </span>
            <p>практика в&nbsp;СПА-салоне</p>
        </li>
        <li class="acco__content-item">
            <span>ПТ – 19:00-22:00 </span>
            <p>практика в&nbsp;СПА-салоне</p>
        </li>
        <li class="acco__content-item">
            <span>СБ – 11:00-14:15 <br>и 15:30-19:45 </span>
            <p>Практика в&nbsp;сауне (по подгруппам)</p>
        </li>
        <li class="acco__content-item">
            <span>ВС – 11:00-14:15 <br>и 15:30-19:45  </span>
            <p>Практика в&nbsp;хамаме (по подгруппам)</p>
        </li>
         
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</section>
		
<section class="expert" id="expert">
    <div class="container">
        <h2 class="expert__title title"><span>Эксперты</span> курса</h2>
        <div class="expert__wrapper">
            <div class="expert__slider">
                
                <div class="expert__item">
                    <div class="expert__box">
                        <div class="expert__img">
                            <img data-src="img/expert/mitaev.jpg" alt="" class="lazy ">
                        </div>
                        <div class="expert__content">
                            <h3>Митяев Иван</h3>
                            <div>мастер русского пара</div>
                            <ul>
                                
            <li><span>Общий стаж:</span> Более 10&nbsp;лет</li>
            <li><span>Специализация:</span> Занимается обучением правильному парению в&nbsp;русской бане 6&nbsp;лет</li>
            
                            </ul>
                        </div>
                    </div>
                    <ul class="expert__list">
                        
            <li>Пропарил больше 3000 чел</li>
            <li>Обучил больше 100&nbsp;чел.</li>
            <li>Участник крупных фестивалей &laquo;Вотэтно&raquo;, &laquo;Баяна&raquo;, &laquo;Родники&raquo;, &laquo;Осенины&raquo;.</li>
            <li>Ученики работают в&nbsp;5-звездочных отелях в&nbsp;разных городах России.</li>
            <li>Участник банных форумов &laquo;Banya world&raquo; Москва 2019, Крым 2020. Организация банной деятельности в&nbsp;отелях &laquo;Алтай Виладж&raquo;, &laquo;Алтай резорт&raquo;, &quot;Wearealtay&quot;,&quot;Пересвет&laquo;Москва, &laquo;Палласа&raquo; Ялта, &quot;Барнаульские бани&quot;Барнаул</li>
            <li>Финалист чемпионата Сандуны Алтай 2016, 3&nbsp;место чемпионата Сибири 2018</li>
            
                    </ul>
                </div>
                
                <div class="expert__item">
                    <div class="expert__box">
                        <div class="expert__img">
                            <img data-src="img/expert/efremenko.jpg" alt="" class="lazy ">
                        </div>
                        <div class="expert__content">
                            <h3>Ефременко Сергей</h3>
                            <div>массажист</div>
                            <ul>
                                
            <li><span>Общий стаж:</span> Более 20 лет</li>
            <li><span>Специализация:</span> Медицинский, спортивный, релаксирующий, тонизирующий, лимфодренажный массаж, кинезиотейпирование, остеопатия</li>
            
                            </ul>
                        </div>
                    </div>
                    <ul class="expert__list">
                        
            <li>Памятная медаль за&nbsp;значительный вклад в&nbsp;подготовку и&nbsp;проведение XXII Олимпийских зимних игр и&nbsp;XI&nbsp;Паралимпийских зимних игр 2014 года в&nbsp;г. Сочи.</li>
            
                    </ul>
                </div>
                
                <div class="expert__item">
                    <div class="expert__box">
                        <div class="expert__img">
                            <img data-src="img/expert/gylaev.jpg" alt="" class="lazy ">
                        </div>
                        <div class="expert__content">
                            <h3>Гуляев Владимир Юрьевич</h3>
                            <div>массажист, СПА-специалист</div>
                            <ul>
                                
            <li><span>Общий стаж:</span> Более 14 лет</li>
            <li><span>Специализация:</span> Классический, лечебный, лимфодренажный, антицеллюлитный, баночный, спортивный массаж, массаж лица, гирудотерапия, обертывания, скрабирование, индивидуальные комплексные СПА процедуры, стоун-терапия</li>
            
                            </ul>
                        </div>
                    </div>
                    <ul class="expert__list">
                        
            <li>Массажист с&nbsp;медицинским и&nbsp;педагогическим образованием.</li>
            <li>Регулярно проходит обучение на&nbsp;семинарах по&nbsp;лечебной косметической продукции для массажа.</li>
            <li>2-е место на&nbsp;Чемпионате Москвы по&nbsp;СПА-массажу.</li>
            <li>Практикует работу на&nbsp;аппаратах ICOONE (LPG), Нолар (вибровакуум), STARVAC (прессотерапия), СПА-капсула Dermalife SPA-Jet 2G&nbsp;и&nbsp;др.</li>
            
                    </ul>
                </div>
                
                <div class="expert__item">
                    <div class="expert__box">
                        <div class="expert__img">
                            <img data-src="img/expert/ten.jpg" alt="" class="lazy ">
                        </div>
                        <div class="expert__content">
                            <h3>Тен Виктор</h3>
                            <div>массажист, стипендиат правительства Южной Кореи на кафедре реабилитологии и мануальной терапии, СПА-специалист</div>
                            <ul>
                                
            <li><span>Общий стаж:</span> Более 20 лет</li>
            <li><span>Специализация: </span> Антицеллюлитный, аюрведический, восточный, корректирующий, восстановительный, классический, спортивный, лечебный, лимфодренажный массаж.</li>
            
                            </ul>
                        </div>
                    </div>
                    <ul class="expert__list">
                        
            <li>Высшее медицинское образование (Кабардино-Балкария; Москва; Сеул, Южная Корея).</li>
            <li>Международный опыт работы.</li>
            <li>Постоянное повышение квалификации по&nbsp;психологии, построению бизнеса, косметических средствах, СПА-технологиям, лазерной терапии, продажам в&nbsp;салоне и&nbsp;др.</li>
            
                    </ul>
                </div>
                
                <div class="expert__item">
                    <div class="expert__box">
                        <div class="expert__img">
                            <img data-src="img/expert/agafonova.jpg" alt="" class="lazy ">
                        </div>
                        <div class="expert__content">
                            <h3>Агафонова Елена</h3>
                            <div>врач-косметолог, врач первой квалификационной категории</div>
                            <ul>
                                
            <li><span>Общий стаж:</span> Более 10 лет</li>
            <li><span>Специализация:</span> врач-косметолог, дерматовенеролог</li>
            
                            </ul>
                        </div>
                    </div>
                    <ul class="expert__list">
                        
            <li>Большой опыт работы в&nbsp;клиническом центре Управления делами президента.</li>
            <li>Совладелец и научный руководитель клиники Консерн.</li>
            <li>Совладелец салона красоты.</li>
            
                    </ul>
                </div>
                
                <div class="expert__item">
                    <div class="expert__box">
                        <div class="expert__img">
                            <img data-src="img/expert/zaxarova.jpg" alt="" class="lazy ">
                        </div>
                        <div class="expert__content">
                            <h3>Захарова Любовь Сергеевна</h3>
                            <div>медицинская сестра в косметологии, косметолог-эстетист.</div>
                            <ul>
                                
            <li><span>Общий стаж:</span> Более 20 лет</li>
            <li><span>Специализация:</span> Уходовые процедуры для кожи лица, пилинги, омоложение, лечение акне, восковая эпиляция, мезотерапия, биоревитализация, микронидлинг.</li>
            
                            </ul>
                        </div>
                    </div>
                    <ul class="expert__list">
                        
            <li>Фотоомоложение, лечение розацеа, омоложение и&nbsp;оздоровление кожи Geneo+, биоревитализация лица гиалуроновой кислотой, мезотерапия, удаление сосудов на&nbsp;лице, лазерное ремоделирование и&nbsp;лифтинг кожи Clear&amp;Brilliant, лечение акне.</li>
            
                    </ul>
                </div>
                
                <div class="expert__item">
                    <div class="expert__box">
                        <div class="expert__img">
                            <img data-src="img/expert/mirochenko.jpg" alt="" class="lazy ">
                        </div>
                        <div class="expert__content">
                            <h3>Миронченко Александр Сергеевич</h3>
                            <div>врач-лечебник, дерматовенеролог, косметолог по телу, массажист</div>
                            <ul>
                                
            <li><span>Общий стаж:</span> Более 8 лет</li>
            <li><span>Специализация:</span> медицинский, висцеральный, моделирующий, спортивный, релаксирующий, тонизирующий, лимфодренажный, аппаратный массаж, кинезиотейпирование</li>
            
                            </ul>
                        </div>
                    </div>
                    <ul class="expert__list">
                        
            <li>Разработана авторская методика массажа.</li>
            <li>Опыт обучения на&nbsp;курсах, проведения мастер-классов для врачей&nbsp;&mdash; массажистов&nbsp;&mdash; 4&nbsp;года</li>
            
                    </ul>
                </div>
                
                <div class="expert__item">
                    <div class="expert__box">
                        <div class="expert__img">
                            <img data-src="img/expert/korsun.jpg" alt="" class="lazy ">
                        </div>
                        <div class="expert__content">
                            <h3>Корсун Елена Владимировна</h3>
                            <div>кандидат медицинских наук, специалист в области фитооздоровления/траволечения.</div>
                            <ul>
                                
            <li><span>Общий стаж:</span> Более 10 лет</li>
            <li><span>Специализация:</span> Высшее медицинское образование, врач по специальности «Лечебное дело», врач общей врачебной практики (семейная медицина), врач-фитотерапевт.</li>
            
                            </ul>
                        </div>
                    </div>
                    <ul class="expert__list">
                        
            <li>Автор и&nbsp;соавтор многочисленных монографий, статей, научно-популярных изданий в&nbsp;области фитотерапии и&nbsp;травничества.</li>
            <li>Организатор и&nbsp;участник фитотерапевтических съездов, конференций, семинаров.</li>
            <li>Опыт преподавательской работы&nbsp;&mdash; 17&nbsp;лет. Аккредитованный член Национальной ассоциации народной медицины, руководитель учебно-оздоровительного центра при НАНМ.</li>
            
                    </ul>
                </div>
                
            </div>
            <div class="expert__arrows"></div>
        </div>
    </div>
</section>
		<section class="diplom" id="diplom">
    <div class="container">
        <div class="diplom__box">
            <div class="diplom__content">
                <h2 class="diplom__title title">Ваш <span>будущий документ</span></h2>
                <p>Свидетельство о присвоении профессии рабочего, должности служащего «Косметик» выдается на основании государственной лицензии №1900 от 28.01.2016 г. и государственной аккредитации №3110 от 15.05.2019 г.</p>
            </div>
            <div class="diplom__img"><img data-src="img/diplom/diplom.jpg" alt="" class="lazy "></div>
        </div>
    </div>
</section>
		<section class="info" id="info">
    <div class="container">
        <h2 class="info__title title"><span>Результат</span> обучения</h2>
        <div class="info__box info__box">
            <div class="info__item">
                <p>Получите практические навыки в&nbsp;таких областях как СПА, классический массаж, банное мастерство, фитотерапия, физиология, анатомия. Отдельный раздел курса посвящен тому, как продавать свои услуги дорого и&nbsp;как находить клиентов.</p>
            </div>
            <div class="info__item">
                <p>Сможете работать в&nbsp;государственных и&nbsp;коммерческих санаторно-курортных организациях, массажных салонах, салонах красоты, СПА-салонах, банях различного типа.</p>
            </div>
            <div class="info__item">
                <p>Возможные должности&nbsp;&mdash; массажист, косметик, косметик-эстетист, СПА-технолог, СПА-косметик, эстетик, эстетист, рабочий по&nbsp;обслуживанию бани.</p>
            </div>
        </div>
    </div>
</section>
		
<section class="course" id="course">
    <div class="container">
        <h2 class="course__title title">Курсы</h2>
        <div class="course__box">
            <ul class="course__list all-tab" id="course-slider">
                
                <li class="all-tab__item active" data-tab="#tab-1">
                    <h4> Косметик <br> (Спа-технолог) </h4>
                    <span>очно-заочно</span>
                </li>
                
                <li class="all-tab__item " data-tab="#tab-2">
                    <h4> Косметик <br> (Спа-технолог) </h4>
                    <span>онлайн</span>
                </li>
                
                <li class="all-tab__item " data-tab="#tab-3">
                    <h4> Банное мастерство. Основы правильного парения </h4>
                    <span>очно-заочно</span>
                </li>
                
                <li class="all-tab__item " data-tab="#tab-4">
                    <h4> Банное мастерство. Основы правильного парения </h4>
                    <span>онлайн</span>
                </li>
                
            </ul>
            <div class="all-content">
                
                <div class="course__content all-content__item active" id="tab-1">
                    <h3 class="course__content-title">СПА-специалист. Банное мастерство и&nbsp;фитотерапия </h3>
                    <ul class="course__content-body">
                         
            <li>
                <div>Тип программы</div>
                <p>программа профессионального обучения</p>
            </li>
            <li>
                <div>Длительность в часах</div>
                <p>280 ак.ч</p>
            </li>
            <li>
                <div>Продолжительность обучения</div>
                <p>2 месяца</p>
            </li>
            <li>
                <div>Форма обучения</div>
                <p>очно-заочная</p>
            </li>
            <li>
                <div>Теория</div>
                <p>онлайн</p>
            </li>
            <li>
                <div>Практика</div>
                <p>14&nbsp;дней очной практики в&nbsp;СПА-салонах и&nbsp;банях Москвы, а&nbsp;также на&nbsp;площадке университета &laquo;Синергия&raquo; (с&nbsp;ПН по&nbsp;ВС&nbsp;2&nbsp;недели)</p>
            </li>
            
                    </ul>
                    <div class="course__content-footer">
                        <p>Выдаваемый документ: свидетельство о&nbsp;присвоении профессии &laquo;СПА-косметик&raquo;</p>
                        <a href="#popup-reg" data-fancybox class="course__content-button button">Оставить заявку</a>
                    </div>
                </div>
                
                <div class="course__content all-content__item " id="tab-2">
                    <h3 class="course__content-title">СПА-специалист. Банное мастерство и&nbsp;фитотерапия </h3>
                    <ul class="course__content-body">
                         
            <li>
                <div>Тип программы</div>
                <p>программа профессионального обучения</p>
            </li>
            <li>
                <div>Длительность в часах</div>
                <p>280 ак.ч</p>
            </li>
            <li>
                <div>Продолжительность обучения</div>
                <p>2 месяца</p>
            </li>
            <li>
                <div>Форма обучения</div>
                <p>онлайн</p>
            </li>
            
                    </ul>
                    <div class="course__content-footer">
                        <p>Выдаваемый документ: свидетельство о&nbsp;присвоении профессии &laquo;СПА-косметик&raquo;</p>
                        <a href="#popup-reg" data-fancybox class="course__content-button button">Оставить заявку</a>
                    </div>
                </div>
                
                <div class="course__content all-content__item " id="tab-3">
                    <h3 class="course__content-title">Банное мастерство. Основы правильного парения </h3>
                    <ul class="course__content-body">
                         
            <li>
                <div>Тип программы</div>
                <p>программа дополнительного образования детей и&nbsp;взрослых</p>
            </li>
            <li>
                <div>Длительность в часах</div>
                <p>72 ак.ч</p>
            </li>
            <li>
                <div>Продолжительность обучения</div>
                <p>1 месяц</p>
            </li>
            <li>
                <div>Форма обучения</div>
                <p>очно-заочная</p>
            </li>
            <li>
                <div>Теория</div>
                <p>онлайн</p>
            </li>
            <li>
                <div>Практика</div>
                <p>2&nbsp;дня очной практики в&nbsp;бане Москвы (выходные дни)</p>
            </li>
            
                    </ul>
                    <div class="course__content-footer">
                        <p>Выдаваемый документ: сертификат о&nbsp;прохождении курса</p>
                        <a href="#popup-reg" data-fancybox class="course__content-button button">Оставить заявку</a>
                    </div>
                </div>
                
                <div class="course__content all-content__item " id="tab-4">
                    <h3 class="course__content-title">Банное мастерство. Основы правильного парения </h3>
                    <ul class="course__content-body">
                         
            <li>
                <div>Тип программы</div>
                <p>программа дополнительного образования детей и&nbsp;взрослых</p>
            </li>
            <li>
                <div>Длительность в часах</div>
                <p>72 ак.ч</p>
            </li>
            <li>
                <div>Продолжительность обучения</div>
                <p>1 месяц</p>
            </li>
            <li>
                <div>Форма обучения</div>
                <p>онлайн</p>
            </li>
            
                    </ul>
                    <div class="course__content-footer">
                        <p>Выдаваемый документ: сертификат о&nbsp;прохождении курса</p>
                        <a href="#popup-reg" data-fancybox class="course__content-button button">Оставить заявку</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
		<section class="faq" id="faq">
    <div class="container">
        <h2 class="faq__title title"><span>Часто задаваемые</span> вопросы</h2>
        <div class="faq__box">
            <div class="faq__tabs">
                <div class="faq__tabs-item active" data-tab="#tab-1">Сколько я смогу потом зарабатывать? </div>
                <div class="faq__tabs-content active" id="tab-1">
                    <h3>Сколько я смогу потом зарабатывать? </h3>
                    <p>Это зависит только от&nbsp;вашего старания, насколько вы&nbsp;сможете освоить знания и&nbsp;готовы будете работать. В&nbsp;Москве, например, парильщики/ СПА-мастера/ массажисты зарабатывают от&nbsp;100 000₽ в&nbsp;месяц.</p>
                </div>
                <div class="faq__tabs-item" data-tab="#tab-2">Смогу ли я потом устроиться на работу? </div>
                <div class="faq__tabs-content" id="tab-2">
                    <h3>Научусь ли я парить своих детей?</h3>
                    <p>Да, конечно, вы&nbsp;сможете устроиться официально в&nbsp;любой СПА-салон, Массажный салон, салон красоты или баню. Например, сейчас могут устроиться на&nbsp;эти должности и&nbsp;не&nbsp;профессионалы, но&nbsp;с&nbsp;обучением вы&nbsp;будете делать свою работу правильно и&nbsp;качественно. Также прошлым летом вышел закон 248-ФЗ, согласно которому все работники салонов красоты, СПА-салонов должны иметь подтверждение своей квалификации&nbsp;&mdash; свидетельство о&nbsp;профессии &laquo;Косметик&raquo;, как раз который вы&nbsp;и&nbsp;сможете получить после завершения обучения на&nbsp;нашем курсе.</p>
                </div>
                <div class="faq__tabs-item" data-tab="#tab-3">Научусь&nbsp;ли я&nbsp;парить своих детей?</div>
                <div class="faq__tabs-content" id="tab-3">
                    <h3>Научусь&nbsp;ли я&nbsp;парить своих детей?</h3>
                    <p>Детскому парению уделяется особое внимание на&nbsp;курсе, т.к. парить детей можно с&nbsp;самого рождения. Процесс вовлечения детей к&nbsp;парению непростой; к&nbsp;детям требуется особенный подход.</p>
                </div>
                <div class="faq__tabs-item" data-tab="#tab-4">Нужно&nbsp;ли практиковать после обучения, что&nbsp;бы не&nbsp;потерять навык?</div>
                <div class="faq__tabs-content" id="tab-4">
                    <h3>Нужно&nbsp;ли практиковать после обучения, что&nbsp;бы не&nbsp;потерять навык?</h3>
                    <p>Да, обязательно требуется практика: и&nbsp;во&nbsp;время обучения и&nbsp;после. Чем больше практики, тем качественнее выполняет свои услуги мастер&nbsp;&mdash; это касается любой профессии. Работа банщиком также не&nbsp;исключение. У&nbsp;русской бани большая история: стоит вам с&nbsp;ней соприкоснуться и&nbsp;сами гены начнут вам подсказывать как париться, поэтому эти знания будут на&nbsp;всю жизнь.</p>
                </div>
                <div class="faq__tabs-item" data-tab="#tab-5">Смогу&nbsp;ли я&nbsp;парить очень крепких и&nbsp;здоровых людей?</div>
                <div class="faq__tabs-content" id="tab-5">
                    <h3>Смогу&nbsp;ли я&nbsp;парить очень крепких и&nbsp;здоровых людей?</h3>
                    <p>Во&nbsp;время обучения вы&nbsp;освоите алгоритм парения, при котором можно парить любых людей!</p>
                </div>
                <div class="faq__tabs-item" data-tab="#tab-6">Куда можно пойти работать после курса?</div>
                <div class="faq__tabs-content" id="tab-6">
                    <h3>Смогу&nbsp;ли я&nbsp;парить очень крепких и&nbsp;здоровых людей?</h3>
                    <p>Если вам интересно СПА-направление или массаж, то&nbsp;вы&nbsp;можете пойти работать в&nbsp;салон красоты, массажный или СПА-салон. Если вы&nbsp;предпочтете банное направление, то&nbsp;вы&nbsp;можете налаживать бизнес в&nbsp;отелях, обучать сотрудников правильному парению, работать банщиком.</p>
                </div>
            </div>
        </div>
    </div>
</section>
		<section class="main ">
    <div class="container">
        <div class="main__box">
            <div class="main__content">
                <div class="main__content-course">Курс</div>
                <h1 class="main__content-title">СПА-специалист</h1>
                <div class="main__content-subtitle">Банное<br> мастерство<br> и&nbsp;фитотерапия</div>
            </div>
            <img data-src="img/main/spa.svg" alt="" class="lazy">
        </div>
        <ul class="main__list">
            <li>Получите профессию<br> Косметик в&nbsp;ведущем вузе страны</li>
            <li>280 академических<br> часов занятий</li>
            <li>14&nbsp;дней практики<br> в&nbsp;СПА-салонах, банях<br> и на площадке университета</li>
        </ul>
    </div>
</section>
		
		<section class="form-reg">
    <div class="container">
        
<form action="<?=$action?>&form=form_1" class="form ">
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
</section>





		<footer class="footer">
    <div class="container">
        <div class="footer__box">
            <div class="footer__logo"><img src="img/footer/logo.svg" alt="" class="lazy"></div>
            <div class="footer__developer"><a class="fancybox-privacy-link footer__link" href="https://synergy.ru/lp/_chunk/privacy.php?date=28-04-2017&amp;lang=ru">Политика конфиденциальности</a></div>
            <div class="footer__digital">Сделано в  <a href="https://sydi.ru/" class="footer__link" target="_blank">Synergy Digital</a></div> 
        </div>
</footer>
		
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