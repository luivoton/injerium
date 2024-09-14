<!DOCTYPE html><html lang="ru" prefix="og: http://ogp.me/ns#">
	



<head>
<title>Инжинириум МГТУ им. Н.Э. Баумана - Курсы для детей и школьников</title>
	<meta name="Description" content="Курсы для детей и школьников в центре инновационного творчества и технопарке Инжинириум МГТУ им. Н.Э. Баумана: робототехника, 3d-моделирование, курс молодого инженера, программирование, ракетостроение, биомедицинские технологии, аэро, промышленный дизайн, схемотехника, инженерная графика">
	<meta property="og:title" content="Курсы для детей и школьников в центре инновационного творчества и технопарке Инжинириум МГТУ им. Н.Э. Баумана: робототехника, 3d-моделирование, курс молодого инженера, программирование, ракетостроение, биомедицинские технологии, аэро, промышленный дизайн, схемотехника, инженерная графика">
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="../files/css/9OXFPlzU70iG.css">
<link rel="stylesheet" type="text/css" href="../files/css/css_v%3D47.css">
<link rel="manifest" href="/manifest.json">

<div class="cookiepopup " id = "cookiepopup">
		<div class="container"id = "cookiepopup"> 
		<div class="row">
		<div class="cookiepopup__text col-12 text-center text-sm-left col-sm">Продолжая пользоваться сайтом, Вы соглашаетесь с условиями "<a href="https://files/policy/">Политики конфиденциальности</a>" и с тем, что данный сайт использует файлы cookie, которые улучшают работу сайта.</div>
		<div class="cookiepopup__button col-12 text-center col-sm-auto"><input type="hidden" name="cookie_accepted" value="1"><input type="submit" class="cookiepopup__button_btn" onclick="this.form.submit();" value="Принимаю!"></div>
		</div>
		</div>
		</div>
		<script>
const btn = document.querySelector(".cookiepopup__button_btn");
const content = document.querySelector(".cookiepopup");

btn.addEventListener("click", btnClick);

function btnClick() {
  console.log(content.classList);

  if (content.classList.contains("hidden")) {
    btn.textContent = "Скрыть элемент";
  } else {
    btn.textContent = "Показать элемент";
  }

  content.classList.toggle("hidden");
}


 </script>

<div class="citypopup_m text-center">
	<div class="citypopup_text">Ваш город</div>
	<form method="post">
		<div>
			<img alt="Город" class="citypopup_marker" src="../files/img/UNyZz2yN4U6d.png">
			<select class="cityselect_popup" name="geocity" onchange="this.form.submit();">
			<option value="mskm" selected>Москва</option>
			<option value="odi" >Одинцово</option>

			</select>
		</div>
	<div class="citypopup_text">выберите ближайший</div>
		<div>
			<input class="cityselect_yes" type="submit" value="Верно!">
		</div>
	</form>
</div>
<script>
	$('.cityselect_yes').click(function() {
		 $(this).addClass('active_button');
	);
</script>


<div class="wrap">
	<div class="sm-header">
		<div class="sm-header__burger"></div>
		<a href="https://files"><div class="sm-header__logo"></div></a>
	<a href="#"><div class="sm-header__buttons" data-toggle="modal" data-target="#mainCTA"></div></a>		
	</div>
	<div class="d-header">
		<div class="container d-head">
			<div class="row align-items-top">
			<div class="col-sm-12 col-md pb-sm-4 pb-md-0 px-sm-0"><div class="d-header__title">Центр молодежного инновационного творчества и технопарк</div><div class="d-header__title_license">Лицензия на осуществление образовательной деятельности № 040350 от 25.09.2019</div></div>
			<div class="col-sm-6 col-md col-lg-3 col-xl-2 d-header__region-selector p-0">
			<form method="post">
				<select class="cityselect" name="geocity" >
					<option><? if ($_POST['geocity'] !="") { echo $_POST['geocity'];}  else { echo "Москва"; } ?></option>				
					</select>
			</form>
				<? if ($_POST['geocity'] == "" ) { $i= "
				<div class='citypopup text-center'>
					<div class='citypopup_text'>Ваш город</div><form method='post'>
						<div>
							<img alt='Город' class='citypopup_marker' src='../files/img/UNyZz2yN4U6d.png'>
								<select class='cityselect_popup' name='geocity'>
								<option value='Москва' name = 'city'>Москва</option>
								<option value='Одинцово' >Одинцово</option>
						</div>
							<div class='citypopup_text'>выберите ближайший</div>
								<div>
									<input class='cityselect_yes' type='submit' value='Верно!'>
								</div>
							</form>
					</div>";
					echo $i;}
?>
				<script>
				$('.cityselect_yes').click(function() {
					  $(this).addClass('active_button');
				});
				</script>				
				</div>
				<div class="col-sm-6 col-sm-4 col-md-3 d-header__cta text-sm-center text-md-right"><button type="button" data-toggle="modal" data-target="#mainCTA">Записаться</button></div>			</div>
		</div>		
		<div class="container d-menu">
			<div class="row align-items-start">
			<div class="col-sm-auto"><a href="https://files"><img alt="Инжинириум" src="../files/img/p7FpIepzV0Sc.png"></a></div>
			<div class="container col-sm">
			 <div class="row align-items-center">
				<a href="/about/" class="col-sm col-md-4 col-lg d-none d-md-block d-menu__item">О нас</a>
				<a href="/courses/" class="col-sm col-md-4 col-lg d-menu__item">Курсы</a>
		
		<a href="/master-classes/" class="col-sm col-md-4 col-lg d-menu__item" style="white-space: nowrap;">Мастер-классы</a><a href="/technopark/" class="col-sm col-md-4 col-lg d-menu__item" style="white-space: nowrap;">Технопарки</a><a href="camp.php" class="col-sm col-md-4 col-lg d-menu__item" style="white-space: nowrap;">Лагеря</a>				<a href="/contacts/" class="col-sm col-md-4 col-lg d-none d-md-block d-menu__item">Контакты</a>
				<a class="d-menu__phone col-sm-auto d-none d-xl-block" href="tel:+74951209975">+7 (495) 120-99-75</a>
			 </div>
			</div>
			</div>
		</div>
	</div>
	 <div class="main__body">
		<div class="sm-body__menu">
			<div class="sm-body__menu_cityselector">
			 <div class="container">
				<div class="row align-items-center">
					<div class="col text-left">Город</div>
					<div class="col text-right">
					<form method="post">
						<select class="sm-body__menu_cityselector_select" name="geocity" onchange="this.form.submit();">
						<option value="mskm" selected="">Москва</option>						</select>
					</form>
					</div>
				</div>
			 </div>
			</div>
			<ul>
			<li><a href="#menuAbout" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuAbout">О нас</a></li>
				<li class="collapse sm-body__submenu_item" id="menuAbout"><a href="https://files/about/">Общая информация</a></li>
				<li class="collapse sm-body__submenu_item" id="menuAbout"><a href="https://files/price/">Цены и скидки</a></li>
				<li class="collapse sm-body__submenu_item" id="menuAbout"><a href="https://files/faq/">Ответы на вопросы</a></li>
				<li class="collapse sm-body__submenu_item" id="menuAbout"><a href="https://files/about/#partners">Партнёры</a></li>
				<li class="collapse sm-body__submenu_item" id="menuAbout"><a href="https://files/about/#teachers">Преподаватели</a></li>
				<li class="collapse sm-body__submenu_item" id="menuAbout"><a href="https://files/feedback/">Отзывы</a></li>
				<li class="collapse sm-body__submenu_item" id="menuAbout"><a href="https://files/thanks/">Благодарности</a></li>
				<li class="collapse sm-body__submenu_item" id="menuAbout"><a href="https://files/franchise/">Франшиза</a></li>
				<li class="collapse sm-body__submenu_item" id="menuAbout"><a href="https://files/press/">СМИ о нас</a></li>
			<li><a href="#menuCourses" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuCourses">Курсы</a></li>
				<li class="collapse sm-body__submenu_item" id="menuCourses"><a href="https://files/courses/">Все курсы</a></li>
				<li class="collapse sm-body__submenu_item" id="menuCourses"><a href="https://files/course.php?cat=10">Дошкольники</a></li>
				<li class="collapse sm-body__submenu_item" id="menuCourses"><a href="https://files/course.php?cat=1">1-4 класс</a></li>
				<li class="collapse sm-body__submenu_item" id="menuCourses"><a href="https://files/course.php?cat=2">5-8 класс</a></li>
				<li class="collapse sm-body__submenu_item" id="menuCourses"><a href="https://files/course.php?cat=3">9-11 класс</a></li>
				<li class="collapse sm-body__submenu_item" id="menuCourses"><a href="https://files/course.php?online=1">Онлайн</a></li>
				<li class="collapse sm-body__submenu_item" id="menuCourses"><a href="https://files/schedule/">�&nbsp;асписание</a></li>			
					<li><a href="https://files/master-classes/">Мастер-классы</a></li>
			<li><a href="#menuTechPark" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuTechPark">Технопарки</a></li>
				<li class="collapse sm-body__submenu_item" id="menuTechPark"><a href="https://files/technopark/">О Технопарках</a></li>
				<li class="collapse sm-body__submenu_item" id="menuTechPark"><a href="https://files/cmit/">ЦМИТ</a></li>
				<li class="collapse sm-body__submenu_item" id="menuTechPark"><a href="https://files/students/">�&nbsp;абота со студентами</a></li>
			<li><a href="https://files/branches/">Филиалы</a></li>
			<li><a href="https://files/camps/">Лагеря</a></li>
					<li><a href="https://files/news/">Новости</a></li>
			<li><a href="https://files/contacts/">Контакты</a></li>
			</ul>
		</div>
		<div class="sm-body__content__overlay"></div>
		
		
<div class="ipopup_wrap" id="ipopup_wrap59">
						<div class="ipopup" id="ipopup59">
							<div id="ipopup_inner_wrap59">
							 <form method="post" id="ipopup_inner_form59">
								<div class="ipopup-inner">
									<div class="ipopup_header">Оставьте Ваши контакты и мы обязательно с Вами свяжемся</div>
									<input type="hidden" name="form" value="Форма со слайдера - Запись на новый учебный год уже открыта!">
									<input class="ipopup_input" type="text" name="name" placeholder="Ваше имя">
									<input class="ipopup_input" type="text" name="phone" placeholder="Телефон *" required="">
									<input class="ipopup_input" type="text" name="email" placeholder="E-mail">
									<textarea class="ipopup_textarea" type="text" name="textmessage" placeholder="Комментарий"></textarea>
								</div>
								<div class="ipopup-inner ipopup_footer text-center">
								   <input type="button" id="ipopup_inner_submit59" class="modal-inner_submit" value="Перезвонить">
								   Нажимая на кнопку "Перезвонить", вы принимаете <a href="https://files/userconsent/">"Согласие на обработку персональных данных"</a> и подтверждаете, что ознакомлены с <a href="https://files/policy/">"Политикой конфиденциальности"</a>.
								</div>
								</form>
							</div>
							<div class="ipopup_inner_response_wrap" id="ipopup_inner_response_wrap59" style="display:none;">
							  <div class="ipopup-inner">
								<img alt="Идет загрузка" class="loader" src="../files/img/fV9fb4awi2T8.png">
							  </div>   
							</div>
						</div>     
					  </div>
<div id="carouselSlide" class="carousel slide main__corousel_global" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#carouselSlide" data-slide-to="0" class="active"></li><li data-target="#carouselSlide" data-slide-to="1"></li><li data-target="#carouselSlide" data-slide-to="2"></li><li data-target="#carouselSlide" data-slide-to="3"></li>  </ol>
	<div class="carousel-inner">
<div class="carousel-item active align-items-center justify-content-center align-self-center main__corousel__item"><div class="carousel-caption d-block align-items-center justify-content-center align-self-center">
		<div class="container align-self-center main__corousel__item_container">
		<div class="row align-self-start align-self-md-center justify-content-center align-items-center" style="margin: auto 0;">
			<div class="col-12 col-sm-12 col-md main__corousel__cta_pic align-self-center text-center"><img alt="Запись на новый учебный год уже открыта!" src="../files/files/sliders/%D0%97%D0%B0%D0%BF%D0%B8%D1%81%D1%8C_%D0%BD%D0%B0_%D0%BD%D0%BE%D0%B2%D1%8B%D0%B9_%D1%83%D1%87%D0%B5%D0%B1%D0%BD%D1%8B%D0%B9_%D0%B3%D0%BE%D0%B4_%D1%83%D0%B6%D0%B5_%D0%BE%D1%82%D0%BA%D1%80%D1%8B%D1%82%D0%B01.png"></div>	
			<div class="col-12 col-sm-12 col-md align-self-center text-center text-md-left pl-md-5 pl-lg-0">
					<div class="main__corousel__heading">Запись на новый учебный год уже открыта!</div>	
					<div class="main__corousel__body">17 новых потрясающих курсов!</div><div class="d-flex justify-content-center justify-content-md-start"><a href="" class="main__corousel__details_link" id="ipopup_submit59">Перезвонить</a></div>
						
				 </div>
		</div>
		</div>
      </div>
    </div><div class="carousel-item align-items-center justify-content-center main__corousel__item"><div class="carousel-caption d-block align-items-center justify-content-center align-self-center">
		<div class="container align-self-center main__corousel__item_container">
		<div class="row align-self-start align-self-md-center justify-content-center align-items-center" style="margin: auto 0;">
			<div class="col-12 col-sm-12 col-md main__corousel__cta_pic align-self-center text-center"><img alt="Погрузитесь в мир будущего" src="../files/files/sliders/qE7KcOkovNBQ.png"></div>	
			<div class="col-12 col-sm-12 col-md align-self-center text-center text-md-left pl-md-5 pl-lg-0">
					<div class="main__corousel__heading">Погрузитесь в мир будущего</div>	
					<div class="main__corousel__body">с курсом "Основы искусственного интеллекта"!</div><div class="d-flex justify-content-center justify-content-md-start"><a class="main__corousel__details_link" href="https://files/courses/osn_ai">Подробнее</a></div>	
				 </div>
		</div>
		</div>
      </div>
    </div><div class="carousel-item align-items-center justify-content-center main__corousel__item"><div class="carousel-caption d-block align-items-center justify-content-center align-self-center">
		<div class="container align-self-center main__corousel__item_container">
		<div class="row align-self-start align-self-md-center justify-content-center align-items-center" style="margin: auto 0;">
			<div class="col-12 col-sm-12 col-md main__corousel__cta_pic align-self-center text-center"><img alt="<br />Оплата обучения Материнским капиталом" src="../files/files/sliders/%D0%9B%D0%B0%D0%B3%D0%B5%D1%80%D1%8C_%D0%9C%D0%A1%D0%9A.png"></div>	
			<div class="col-12 col-sm-12 col-md align-self-center text-center text-md-left pl-md-5 pl-lg-0">
					<div class="main__corousel__heading"><br>Оплата обучения Материнским капиталом</div>	
					<div class="main__corousel__body">В МГТУ ИМ. Н.Э. БАУМАНА</div><div class="d-flex justify-content-center justify-content-md-start"><a class="main__corousel__details_link" href="https://files/docs/mothercapital.doc">Подробнее</a></div>	
				 </div>
		</div>
		</div>
      </div>
    </div><div class="carousel-item align-items-center justify-content-center main__corousel__item"><div class="carousel-caption d-block align-items-center justify-content-center align-self-center">
		<div class="container align-self-center main__corousel__item_container">
		<div class="row align-self-start align-self-md-center justify-content-center align-items-center" style="margin: auto 0;">
			<div class="col-12 col-sm-12 col-md main__corousel__cta_pic align-self-center text-center"><img alt="Супер-калькулятор для расчета скидки" src="../files/files/sliders/jKrrQvIJitZp.PNG"></div>	
			<div class="col-12 col-sm-12 col-md align-self-center text-center text-md-left pl-md-5 pl-lg-0">
					<div class="main__corousel__heading">Супер-калькулятор для расчета скидки</div>	
					<div class="main__corousel__body">Теперь Вы можете рассчитать скидку самостоятельно</div><div class="d-flex justify-content-center justify-content-md-start"><a class="main__corousel__details_link" href="https://files/price/index.php#calc">Подробнее</a></div>	
				 </div>
		</div>
		</div>
      </div>
    </div> </div>
  <a class="carousel-control-prev" href="#carouselSlide" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Назад</span>
  </a>
  <a class="carousel-control-next" href="#carouselSlide" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Вперёд</span>
  </a>
</div>





<div class=" col-12 my-5 text-center"><h2>Ступени обучения</h2></div>
<div class="container mx-auto my-5 d-none d-xl-block">
	<div class="row main__steps2">
		<div class="main__steps2_item main__steps2_s1"><div class="main__steps2_item_class">детский сад</div><div class="main__steps2_item_name main__steps2_step1">Увлекательные курсы</div><div class="main__steps2_item_desc">для самых маленьких </div></div>
		<div class="main__steps2_item main__steps2_s2"><div class="main__steps2_item_class">1-4 класс</div><div class="main__steps2_item_name main__steps2_step2">Подготовительные курсы</div><div class="main__steps2_item_desc">для младших классов</div></div>
		<div class="main__steps2_item main__steps2_s3"><div class="main__steps2_item_class">5-8 класс</div><div class="main__steps2_item_name main__steps2_step3">Инженерные курсы</div><div class="main__steps2_item_desc">курсы для средней школы разной сложности</div></div>
		<div class="main__steps2_item main__steps2_s4"><div class="main__steps2_item_class">9-11 класс</div><div class="main__steps2_item_name main__steps2_step4">Технопарк</div><div class="main__steps2_item_desc">Подготовка к поступлению в ВУЗ, проектная деятельность</div></div>
		<div class="main__steps2_item main__steps2_s5 d-flex"><div><img src="../files/img/kf7BirA9GrSG.png"></div><div class="px-3"><div class="main__steps2_item_name main__steps2_step5">МГТУ им. Н.Э. Баумана</div><div class="main__steps2_item_desc">Поступление в ведущий технический ВУЗ страны</div></div></div>
	</div>
</div>

<div class="container my-5 d-xl-none p-0">
 <div class="d-flex main__steps2_m_wrap">
	<div class="col-auto main__steps2_m_pic"><img src="../files/img/BSIJb58R7POj.svg"></div>
	<div class="col">
		<div class="main__steps2_item_m">
			<div class="d-flex align-items-center"><img class="pr-2" src="../files/img/Ok8CpRfH5Izn.png"><div class="main__steps2_m main__steps2_step5">МГТУ им. Н.Э. Баумана</div></div>
			<div class="main__steps2_desc_m">Поступление в ведущий технический вуз страны</div>
		</div>
		<div class="main__steps2_item_m">
			<div class="main__steps2_class_m">9-11класс</div>
			<div class="main__steps2_m main__steps2_step4">Технопарк</div>
			<div class="main__steps2_desc_m">Подготовка к поступлению в ВУЗ, проектная деятельность</div>
		</div>
		<div class="main__steps2_item_m">
			<div class="main__steps2_class_m">5-8 класс</div>
			<div class="main__steps2_m main__steps2_step3">Инженерные курсы</div>
			<div class="main__steps2_desc_m">курсы для средней школы разной сложности</div>
		</div>
		<div class="main__steps2_item_m">
			<div class="main__steps2_class_m">1-4 класс</div>
			<div class="main__steps2_m main__steps2_step2">Подготовительные курсы</div>
			<div class="main__steps2_desc_m">для младших классов</div>
		</div>
		<div class="main__steps2_item_m">
			<div class="main__steps2_class_m">детский сад</div>
			<div class="main__steps2_m main__steps2_step1">Увлекательные курсы</div>
			<div class="main__steps2_desc_m">для самых маленьких</div>
		</div>
	</div>
 </div>
</div>


<br><br>
<div class=" col-12 my-5 text-center"><h2>Почему выбирают именно нас</h2></div>
<div class="container">
 <div class="row">
	<div class="col-12 col-md-6 col-xl why_item"><div class="why_item_pic"><img src="../files/img/BZmUoWRzBbmK.svg"></div><div class="why_item_text"><b>7 лет</b> в «Инжинириум МГТУ им. Н.Э. Баумана» обучились более <br><b>70 000 детей</b></div></div>
	<div class="col-12 col-md-6 col-xl why_item"><div class="why_item_pic"><img src="../files/img/qJh3C3AJKIgp.svg"></div><div class="why_item_text"><b>Авторские</b> методики обучения</div></div>
	<div class="col-12 col-md-6 col-xl why_item"><div class="why_item_pic"><img src="../files/img/NbRqUJBzTP1Y.svg"></div><div class="why_item_text"><b>33 филиала</b> по всей �&nbsp;оссии</div></div>
	<div class="col-12 col-md-6 col-xl why_item"><div class="why_item_pic"><img src="../files/img/3BUr8zeNYVpC.svg"></div><div class="why_item_text">�&nbsp;азличные форматы обучения <b>для всех возрастов</b></div></div>
	<div class="col-12 col-md-6 col-xl why_item"><div class="why_item_pic"><img src="../files/img/ouSDakVvwm3q.svg"></div><div class="why_item_text">Участие в российских и международных соревнованиях профессионального мастерства</div></div>
 </div>
</div>

<script>
$(document).ready(function() {
  $( ".courses__item_inner_wrap" ).hover(
  function() {
    $(this).addClass('shadow').css('cursor', 'pointer'); 
  }, function() {
    $(this).removeClass('shadow');
  }
);
  

});
</script>
<div class="main__courses_global">
<div class="container">
<div class="my-5 text-center"><h2>Курсы "Инжинириум МГТУ им. Н.Э. Баумана"</h2></div>
	<div class="row">
	<div class="col-xl-8">
	<div class="row">
	
				<a class="courses__item col-12 col-md-6 col-lg-6" href="https://files/courses/young-engineer-course-1-4">
				<div class="courses__item_inner_wrap rounded">
				<div style="height:180px;background: url(../files/files/course/%D0%9A%D0%A3%D0%A0%D0%A1%20%D0%9C%D0%9E%D0%9B%D0%9E%D0%94%D0%9E%D0%93%D0%9E%20%D0%98%D0%9D%D0%96%D0%95%D0%9D%D0%95%D0%A0%D0%90%20%281%29.png) no-repeat;background-size: 123px auto;background-position:center bottom 10px;"></div><div class="courses__item_title flex-grow-1">Курс Молодого Инженера (1-4 класс)</div>
					<div class="container courses__item_bottom">
					<div class="row align-items-center p-1">
						<div class="col-7 text-left">1 - 4 классы</div>
						<div class="col-5 text-right" style="font-weight:bold;font-size:13px;">2100 р/занятие</div>
					</div>
					</div>
				</div>
				</a>
			
				<a class="courses__item col-12 col-md-6 col-lg-6" href="https://files/courses/SPIKEPrime">
				<div class="courses__item_inner_wrap rounded">
				<div style="height:180px;background: url(../files/files/course/%D0%A0%D0%9E%D0%91%D0%9E%D0%A2%D0%9E%D0%A2%D0%95%D0%A5%D0%9D%D0%98%D0%9A%D0%90.png) no-repeat;background-size: 123px auto;background-position:center bottom 10px;"></div><div class="courses__item_title flex-grow-1">SPIKE Prime (1-4 класс)</div>
					<div class="container courses__item_bottom">
					<div class="row align-items-center p-1">
						<div class="col-7 text-left">1 - 4 классы</div>
						<div class="col-5 text-right" style="font-weight:bold;font-size:13px;">2100 р/занятие</div>
					</div>
					</div>
				</div>
				</a>
			
				<a class="courses__item col-12 col-md-6 col-lg-6" href="https://files/courses/osn_ai">
				<div class="courses__item_inner_wrap rounded">
				<div style="height:180px;background: url(../files/files/course/%D0%BE%D1%81%D0%BD%D0%BE%D0%B2%D1%8B%20%D0%B8%D1%81%D0%BA%D1%83%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%B8%D0%BD%D1%82%D0%B5%D0%BB%D0%B5%D0%BA%D1%82%D0%B0_.png) no-repeat;background-size: 123px auto;background-position:center bottom 10px;"></div><div class="courses_new_badge"></div> <div class="courses__item_title flex-grow-1">Основы искусственного интеллекта (7-8 класс)</div>
					<div class="container courses__item_bottom">
					<div class="row align-items-center p-1">
						<div class="col-7 text-left">5 - 8 классы</div>
						<div class="col-5 text-right" style="font-weight:bold;font-size:13px;">2500 р/занятие</div>
					</div>
					</div>
				</div>
				</a>
			
				<a class="courses__item col-12 col-md-6 col-lg-6" href="https://files/courses/python-programming-5-8">
				<div class="courses__item_inner_wrap rounded">
				<div style="height:180px;background: url(../files/files/course/%D0%9F%D0%A0%D0%9E%D0%93%D0%A0%D0%90%D0%9C%D0%9C%D0%98%D0%A0%D0%9E%D0%92%D0%90%D0%9D%D0%98%D0%95%20%D0%BD%D0%B0%20PYTHON.svg) no-repeat;background-size: 123px auto;background-position:center bottom 10px;"></div><div class="courses__item_title flex-grow-1">Программирование на Python (5-8 класс)</div>
					<div class="container courses__item_bottom">
					<div class="row align-items-center p-1">
						<div class="col-7 text-left">5 - 8 классы</div>
						<div class="col-5 text-right" style="font-weight:bold;font-size:13px;">2100 р/занятие</div>
					</div>
					</div>
				</div>
				</a>
				</div>
	</div>
	<div class="col-12 col-xl">
		<div class="d-none d-xl-block course__mainblock__cta main__courses_more_cta">
			<div id="cta_course_wrap">
			<div class="course__mainblock__cta__title">Записаться на курсы</div>
			<form class="course__mainblock__cta__form" method="post" id="cta_course_form">
			<input class="course__mainblock__cta__form_text" type="text" name="name" placeholder="Ваше имя">
			<input class="course__mainblock__cta__form_text" type="text" name="phone" placeholder="Номер телефона *" required="">
			<input type="hidden" name="form" value="Записаться на курсы">
			<input class="course__mainblock__cta__form_submit" type="button" id="cta_course_submit" onclick="yaCounter44599405.reachGoal('get_lead'); return true;" value="Записаться">
			</form>
			<div class="course__mainblock__cta__consent">Нажимая на кнопку "Записаться", вы принимаете <a href="https://files/userconsent/">"Согласие на обработку персональных данных"</a> и подтверждаете, что ознакомлены с <a href="https://files/policy/">"Политикой конфиденциальности"</a>.</div>
			</div>
			<div id="cta_course_response_wrap"><h2>Спасибо!</h2><br>Мы свяжемся с Вами в ближайшее время!</div>
		</div>
		
		<a class="main__courses_more_linkblock" href="https://files/courses">ещё 36 курсов<br>Инжинириум<br>МГТУ<br>им. Н.Э.Баумана</a>
		<!-- <div class='d-xl-none text-center main__courses_more_button'><button>Записаться</button></div> -->
	</div>
	</div>		
</div>		
</div>		


<div class="main__targetblock">
<div class="container">
<div class="row">
	<div class="col-12 col-lg-6">
		<div class="main__targetblock_target">НАША ЦЕЛЬ —<br>создание нового поколения<br>молодых инженеров</div>
		<div class="d-none d-lg-block main__targetblock_target_list pt-4">
		<ul>
		<li>Поиск талантов и простор для творчества</li>
		<li>Профориентация в лучшем техническом ВУЗе �&nbsp;оссии</li>
		<li>Современное оборудование и увлеченные преподаватели</li>
		</ul>
		</div>
	</div>
	<div class="col-12 col-lg-6 py-3 py-lg-0"><img alt="Наша цель" class="img-fluid" src="../files/img/57XIBRsGi4zN.png"></div>
	<div class="col-12 d-lg-none main__targetblock_target_list">
		<ul>
		<li>Поиск талантов и простор для творчества</li>
		<li>Профориентация в лучшем техническом ВУЗе �&nbsp;оссии</li>
		<li>Современное оборудование и увлеченные преподаватели</li>
		</ul>
	</div>

	<div class="col-12 py-3">
		<div class="row text-center align-items-center">

		</div>
	</div>
</div>
</div>
</div>

<!--
<div class='container main__news_block'>
<div class='row'>
<div class='col-12 my-3 text-center'><h2>Новости</h2></div>
<div class='col-12 col-md-6 col-xl-12 my-4 my-md-0 my-xl-4 align-self-center text-center'><a class='main__news_morelink' href='/news/'>Перейти ко всем новостям</a></div>
</div>
</div>
-->


<div class="container">
<div class="row">
<div class="embed-responsive embed-responsive-16by9">
  <iframe title="Инжинириум МГТУ им. Н.Э.Баумана" class="embed-responsive-item" src="https://www.youtube.com/embed/WC2hRZlrcbs?rel=0"></iframe>
</div>
</div>
</div>



<div class="my-5 text-center"><h2>Учебные центры Инжинириум МГТУ им. Н.Э.Баумана</h2></div>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=b2adbb0d-6de7-42c1-b174-104482acbabd" type="text/javascript"></script>
<script src="../files/js/dZ1N2aWd2AzK.js" type="text/javascript"></script>
<script type="text/javascript">
		var groups = [
				{
					name: 'Инжинириум МГТУ им. Н.Э.Баумана',
					style: 'islands#violetIcon',
					items: [
					{center: [55.770360, 37.687129], title: 'Технопарк Госпитальный', name: '105005, Москва, Госпитальный пер. 4/6 с.1', pin: 'pin_internal.png', zoom: 9},{center: [55.688527, 37.255659], title: 'Инжинириум в Одинцово', name: 'г. Одинцово, ул. Северная, д. 57', pin: 'pin_internal.png', zoom: 9},{center: [55.904175, 37.406693], title: 'Инжинириум Химки', name: 'г. Химки, проспект Мельникова, д.16', pin: 'pin_external.png', zoom: 9},{center: [55.909958, 37.711473], title: 'Инжинириум Мытищи', name: 'г. Мытищи, ул. Юбилейная, д. 24', pin: 'pin_external.png', zoom: 9},{center: [55.814457, 37.369404], title: 'Инжинириум Красногорск', name: 'г. Красногорск, Красногорский бульвар дом 10, помещение 1', pin: 'pin_external.png', zoom: 9},{center: [56.389309, 38.712107], title: 'Инжинириум Александров', name: 'г. Александров, ул. Горького, д. 5, пом. 1', pin: 'pin_external.png', zoom: 9},{center: [55.373808, 39.051867], title: 'Инжинириум Егорьевск', name: '<span style="color: #333333;"><span style="font-size: 13px;"><span style="font-family: Arial;">г. Егорьевск</span></span><span style="font-family: Arial;"><span style="font-size: 14px;">,</span></span> <span style="font-size: 13px;"><span style="font-family: Arial;">пр. Ленина, д. 1</span></span></span>  ', pin: 'pin_external.png', zoom: 9},{center: [57.156109, 65.575471], title: 'Инжинириум Тюмень', name: '<span style="color: #333333;"><span style="font-size: 13px;"><span style="font-family: Arial;">г. Тюмень</span></span><span style="font-family: Arial;"><span style="font-size: 14px;">,</span></span> <span style="font-size: 13px;"><span style="font-family: Arial;">ул. Максима Горького, д.3, корп.1</span></span></span>', pin: 'pin_external.png', zoom: 9},{center: [45.434199, 40.573146], title: 'Инжинириум Кропоткин', name: 'г. Кропоткин, ул. Красная, д. 45', pin: 'pin_external.png', zoom: 9},{center: [56.314737, 43.987454], title: 'Инжинириум Нижний Новгород', name: 'г. Нижний Новгород, улица Новая, дом 57', pin: 'pin_external.png', zoom: 9},{center: [45.075960, 39.036623], title: 'Инжинириум Краснодар - Боспорская', name: 'г. Краснодар, ул. Боспорская, 10', pin: 'pin_external.png', zoom: 9},{center: [51.496469, 46.112967], title: 'Инжинириум Энгельс', name: 'г. Энгельс ул. Тихая, д. 55', pin: 'pin_external.png', zoom: 9},{center: [47.215805, 39.623555], title: 'Инжинириум Ростов-на-Дону', name: 'г. Ростов-на-Дону, ул.Стабильная, д.3, с.3', pin: 'pin_external.png', zoom: 9},{center: [55.976443, 37.145373], title: 'Инжинириум Андреевка', name: '141551, МО, Солнечногорский р-н, рп. Андреевка, 29А', pin: 'pin_external.png', zoom: 9},{center: [45.009337, 39.072053], title: 'Инжинириум Краснодар - Игнатова', name: 'г. Краснодар, МКР Гидростроителей, ул. Игнатова, 10/1', pin: 'pin_external.png', zoom: 9},{center: [45.068340, 38.957410], title: 'Инжинириум Краснодар - Памяти Чернобыльцев', name: 'г. Краснодар, ул. Памяти Чернобыльцев, 6', pin: 'pin_external.png', zoom: 9},{center: [55.970091, 37.937885], title: 'Инжинириум Ивантеевка', name: 'г. Ивантеевка, ул. Школьная 1', pin: 'pin_external.png', zoom: 9},{center: [55.540934, 37.082832], title: 'Инжинириум Апрелевка', name: 'г. Апрелевка, ул. Островского, дом 38', pin: 'pin_external.png', zoom: 9},{center: [59.847268, 30.415940], title: 'Инжинириум в Санкт-Петербурге - Фрунзенский', name: 'г. Санкт-Петербург,  ул. Малая Бухарестская, д. 12с1', pin: 'pin_external.png', zoom: 9},{center: [55.920371, 37.818472], title: 'Инжинириум Королёв', name: 'г. Королёв, ул. Циолковского, д.14/16', pin: 'pin_external.png', zoom: 9},{center: [56.991792, 40.975834], title: 'Инжинириум Иваново', name: 'г. Иваново, ул. Багаева, д. 14 , корпус 1, этаж 2', pin: 'pin_external.png', zoom: 9},{center: [58.006893, 56.307669], title: 'Инжинириум Пермь', name: 'г. Пермь, ул. Уинская, д. 18', pin: 'pin_external.png', zoom: 9},{center: [55.543664, 37.532008], title: 'Инжинириум Южное Бутово', name: '<span style="color: #333333;"><span style="font-size: 13px;"><span style="font-family: Arial;">г. Москва</span></span><span style="font-family: Arial;"><span style="font-size: 14px;">,</span></span> <span style="font-size: 13px;"><span style="font-family: Arial;">ул. Горчакова, д. 11</span></span></span>', pin: 'pin_external.png', zoom: 9},{center: [55.563757, 37.498617], title: 'Инжинириум Коммунарка', name: '<span style="color: #333333;"><span style="font-size: 13px;"><span style="font-family: Arial;">г. Москва</span></span><span style="font-family: Arial;"><span style="font-size: 14px;">,</span></span> <span style="font-size: 13px;"><span style="font-family: Arial;">ул. Эдварда Грига, д. 5</span></span></span>', pin: 'pin_external.png', zoom: 9},{center: [55.666553, 37.471093], title: 'Инжинириум Тропарево-Никулино', name: '<span style="color: #333333;"><span style="font-size: 13px;"><span style="font-family: Arial;">г. Москва</span></span><span style="font-family: Arial;"><span style="font-size: 14px;">,</span></span> <span style="font-size: 13px;"><span style="font-family: Arial;">ул. Покрышкина, д8к2</span></span></span>', pin: 'pin_external.png', zoom: 9},{center: [55.655625, 37.229303], title: 'Инжинириум в Одинцово', name: 'ул. Гвардейская, д. 11, помещение 11, ЖК Гусарская баллада', pin: 'pin_external.png', zoom: 9},{center: [60.079895, 30.341713], title: 'Инжинириум в Санкт-Петербурге - Выборгский', name: 'г. Санкт-Петербург, посёлок Парголово, улица Фёдора Абрамова, 18, корп. 1', pin: 'pin_external.png', zoom: 9},{center: [52.076449, 113.479418], title: 'Инжинириум в Чите', name: 'г. Чита, мкр. Царский, д. 8, пом. 1', pin: 'pin_external.png', zoom: 9},{center: [55.716580, 37.751493], title: 'Инжинириум МСК Рязанский', name: 'г. Москва, м. Кузьминки ул. Васильцовский Стан, 11', pin: 'pin_external.png', zoom: 9},{center: [55.794492, 37.982199], title: 'Инжинириум Балашиха', name: 'г. Балашиха, ул. Твардовского, д. 26', pin: 'pin_external.png', zoom: 9},{center: [55.861752, 37.672648], title: 'Инжинириум Бабушкинская', name: 'г. Москва, ул Летчика Бабушкина, д. 11/2, корпус 2, помещение 1/1', pin: 'pin_external.png', zoom: 9},{center: [55.999621, 37.200745], title: 'Инжинириум Зеленоград', name: 'г. Зеленоград, к418', pin: 'pin_external.png', zoom: 9},{center: [55.689588, 37.865274], title: 'Инжинириум Люберцы', name: 'г. Люберцы, ул. Кирова, д. 7', pin: 'pin_external.png', zoom: 9}					]
				}
			];
</script>
<div class="branch_map" id="coursemap" style="width: 100%; height: 800px"></div>



<div class="container">
<div class="row px-4">
	<div class="col-12 col-md-6 main__faq_pic"></div>
	<div class="col-12 col-md-6 main__faq_block">
		<div class="text-center text-md-left main__faq_title">Ответы на ваши вопросы</div>
		<!--
		<ul>
		<li>Какая длительность одного занятия?</li>
		<li>Сколько длится полный курс?</li>
		<li>Есть ли дни открытых дверей?</li>
		<li>ОСТАЛИСЬ ВОПРОСЫ?</li>
		</ul>
		-->
		<div class="text-center text-md-left main__faq_sub">Читайте <a href="https://files/faq/">ответы на частые вопросы</a><br>или позвоните нам:<br>
		<a class="main__faq_sub_phone" href="tel:+74951209975">+7 (495) 120-99-75</a></div>
	</div>
</div>
</div>

</div>
<div class="footer">

<div class="footer__copyrights">
 <div class="container">
	<div class="row">
		<div class="col-12 col-lg-6 py-3">
			<div class="row justify-content-center justify-content-sm-start">
				<div class="footer__copyrights__logo col-12 col-sm-auto text-center text-sm-left"><img alt="Инжинириум МГТУ им. Н.Э.Баумана" src="../files/img/xJ4TysflgVX1.png"></div>
				<div class="footer__copyrights__text col-12 col-sm text-center text-sm-left">Все права защищены</div>
			</div>
		</div>
		
		<div class="footer_link_item col-12 d-block d-sm-none justify-content-center">		
		<div class="footer_link_item_mobilewrap">		
			Телефон: <b><a href="tel:+74951209975">+7 (495) 120-99-75</a></b><br>
			Для СМИ: <b><a href="mailto:press@emtc.ru">press@emtc.ru</a></b><br>
			Хотите работать у нас?<br>
			<b><a href="mailto:a@files">a@files</a></b><br>
			<hr style="color: black;">
			<div class="container" style="padding:0 10px;">
			 <div class="row justify-content-center">
				<div class="col-auto px-2"><a href="https://OR2GWExd8CLI.com/inginirium"><img alt="ВКонтакте" style="height:30px;" src="../files/img/q52yDTJkaDAu.svg"></a></div>
				<div class="col-auto px-2"><a href="https://www.youtube.com/channel/UCBx0xw9L-vvIkiNeCWrP75Q"><img alt="YouTube" src="../files/img/FNSk2o9KfuHa.png"></a></div>
			 </div>
			</div>
		</div>
		</div>
		
	</div>
 </div>
</div>

<div class="footer__links">
 <div class="container">
	<div class="row justify-content-between">		
		<div class="footer_link_item col-12 col-sm-6 col-md-4 col-xl-auto d-none d-sm-block">
			<span class="footer_link_item_header"><a href="https://files/branches/">ФИЛИАЛЫ</a></span><br>

			<!-- <span class='footer_link_item_header'><a href='https://files/exam/'>ЭКЗАМЕН</a></span><br> -->
		</div>
		<div class="footer_link_item col-12 col-sm-6 col-md-4 col-xl-auto d-none d-sm-block">
			<span class="footer_link_item_header"><a href="https://files/docs/">ДОКУМЕНТЫ</a></span><br>

		</div>
		<div class="footer_link_item col-7 col-sm-6 col-md-4 col-xl-auto d-none d-sm-block">
		
			<span class="footer_link_item_header"><a href="https://files/contacts/">КОНТАКТЫ</a></span><br>
			Телефон: <b><a href="tel:+74951209975">+7 (495) 120-99-75</a></b><br>
			Для СМИ: <b><a href="mailto:press@emtc.ru">press@emtc.ru</a></b><br>
			Хотите работать у нас?<br>
			<b><a href="mailto:a@files">alfiles</a></b><br>
			<hr style="color: black;">
			<div class="container" style="padding:0 10px;">
			 <div class="row justify-content-start">
				<div class="col-auto px-2"><a href="https://OR2GWExd8CLI.com/inginirium"><img alt="ВКонтакте" style="height:30px;" src="../files/img/q52yDTJkaDAu.svg"></a></div>
				<div class="col-auto px-2"><a href="https://www.youtube.com/channel/UCBx0xw9L-vvIkiNeCWrP75Q"><img alt="YouTube" src="../files/img/FNSk2o9KfuHa.png"></a></div>
			 </div>
			</div>
		</div>
	</div>
 </div>
</div>



</div>

</div>

<script>
$(".sm-header__burger").click(function () {
          $('.sm-body__menu').toggleClass('sm-body__toggle');
          $('.sm-body__content__overlay').toggleClass('sm-body__content__overlay__toggle');
    });
	
$(".sm-body__content__overlay").click(function () {
          $('.sm-body__menu').toggleClass('sm-body__toggle');
          $('.sm-body__content__overlay').toggleClass('sm-body__content__overlay__toggle');
    });
</script>
</div>




<script>	
$(document).ready(function() {	
    $("#main_popup_cta_submit").click(
		function(){				
		var phone = $('#main_popup_cta_form input[name=phone]').val();                             
		phone = jQuery.trim(phone);                             
		if(phone.length < 1){                
			alert ('Вы не указали телефон');	
			return false;
		} else {				
			mainPopupCTAForm('main_popup_cta_response_wrap', 'main_popup_cta_form', 'https://files/cta_form.php');
			document.getElementById('mainCTALabel').style.display = 'none';
			document.getElementById('main_popup_cta_body').style.display = 'none';
			document.getElementById('main_popup_cta_footer').style.display = 'none';
			document.getElementById('main_popup_cta_response_wrap').style.display = 'block';
			return false; 
		}
		}
	);

});

function mainPopupCTAForm(result_form, ajax_form, url) {
    jQuery.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: jQuery("#"+ajax_form).serialize(), 
        success: function(response) { 
        	result = jQuery.parseJSON(response);
			document.getElementById(result_form).style.display = 'block';
        	document.getElementById(result_form).innerHTML = "<h2>Спасибо!</h2><br>Мы свяжемся с Вами в ближайшее время!";
			
    	},
    	error: function(response) { 
			document.getElementById(result_form).style.display = 'block';
    		document.getElementById(result_form).innerHTML = "<h2>Ошибка</h2><br>Данные не отправлены.<br>Попробуйте обновить страницу и заполнить форму снова.";
    	}
 	});
}
</script>




<script>	
$(document).ready(function() {	
    $("#cta_course_submit").onclick(
		function (){				
		var name = $('#cta_course_form input[name=name]').val();
		var phone = $('#cta_course_form input[name=phone]').val();
		name = jQuery.trim(name);                              
		phone = jQuery.trim(phone);                             
		if(phone.length < 1){                
			alert ('Вы не указали телефон');	
			return false;
		} else {				
			sendCourseSignForm('cta_course_response_wrap', 'cta_course_form', 'https://files/cta_form.php');
			document.getElementById('cta_course_wrap').style.display = 'none';
			document.getElementById('cta_course_response_wrap').style.display = 'block';
			return false; 
		}
		}
	);

});

function sendCourseSignForm(result_form, ajax_form, url) {
    jQuery.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: jQuery("#"+ajax_form).serialize(), 
        success: function(response) { 
        	result = jQuery.parseJSON(response);
			document.getElementById(result_form).style.display = 'block';
        	document.getElementById(result_form).innerHTML = "<h2>Спасибо!</h2><br>Мы свяжемся с Вами в ближайшее время!";
			
    	},
    	error: function(response) { 
			document.getElementById(result_form).style.display = 'block';
    		document.getElementById(result_form).innerHTML = "<h2>Ошибка</h2><br>Данные не отправлены.<br>Попробуйте обновить страницу и заполнить форму снова.";
    	}
 	});
}
$(function() {
							$('#ipopup_submit59').click(function(){
								console.log('ok');
								$('#ipopup_wrap59').fadeIn();
								$('#ipopup59').append('<a class="ipopup_close" id="ipopup_close59">×</a>');
								$('body').append('<div class="ipopup_fade" id="ipopup_fade59"></div>');
								$('#ipopup_fade59').css({'filter' : 'alpha(opacity=40)'}).fadeIn();
								return false;
							});

							$(document).on('click','#ipopup_fade59, #ipopup_close59',function(e) {
									$('#ipopup_fade59').remove();
									$('#ipopup_close59').remove();
									$('#ipopup_wrap59').fadeOut();
							});

						});

						$(document).ready(function() {	
							$("#ipopup_inner_submit59").click(
								function(){				
								var phone = $('#ipopup_inner_form59 input[name=phone]').val();                             
								phone = jQuery.trim(phone);                             
								if(phone.length < 1){                
									alert ('Вы не указали телефон');	
									return false;
								} else {				
									customPopupCTAForm('ipopup_inner_response_wrap59', 'ipopup_inner_form59', 'https://files/cta_form.php');
									document.getElementById('ipopup_inner_wrap59').style.display = 'none';
									document.getElementById('ipopup_inner_response_wrap59').style.display = 'block';
									return false; 
								}
								}
							);

						});

						function customPopupCTAForm(result_form, ajax_form, url) {
							jQuery.ajax({
								url:     url, 
								type:     "POST", 
								dataType: "html", 
								data: jQuery("#"+ajax_form).serialize(), 
								success: function(response) { 
									result = jQuery.parseJSON(response);
									document.getElementById(result_form).style.display = 'block';
									document.getElementById(result_form).innerHTML = "<h2>Спасибо!</h2><br>Мы свяжемся с Вами в ближайшее время!";
									
								},
								error: function(response) { 
									document.getElementById(result_form).style.display = 'block';
									document.getElementById(result_form).innerHTML = "<h2>Ошибка</h2><br>Данные не отправлены.<br>Попробуйте обновить страницу и заполнить форму снова.";
								}
							});
						}

						$('.cookiepopup__button_btn').click(function() {
							#cookiepopup{
  display: none;
}
		});
						</script>	
					
</script>
</body>
</html>