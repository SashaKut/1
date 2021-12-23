<!DOCTYPE html>
<html>
<html lang="ua">
<head>
<title>Apple:Магазин</title>
</head>
<body> 

<script src="slider.js"></script>	

<style>
<style type="text/css">

html {
height: 100%; /* Высота страницы */     
}
body {
background-color:black; /* Путь к фоновому */
background-image: url(background.jpg); /* Путь к фоновому рисунку */
background-size: 100%;
background-repeat: no-repeat; /* Отменяем повторение фона */
}
body::-webkit-scrollbar {
  width: 0.4em;
}
body::-webkit-scrollbar-thumb {
  background-color: #E2D2FD;
  outline: 1px solid slategrey;
}
    p{}
    
    /*Заголовний шрифт*/
    h1{ 
     	color: white;
     	font-family:Helvetica;	
     	font-weight: 560; 
     	font-size:46px;
     	margin-top:110px;
     	text-align: center;
    }

    h2{ 
     	color: #87CEFA					;
     	font-family:Helvetica;	
     	font-weight: 560; 
     	font-size:46px;
     	margin-top:340px;
     	text-shadow: #7B68EE 10px 0px 10px;
    }

    h3 {
        color: white;
        font-family:Helvetica;	
        font-weight: 560; 
        font-size:24px;
        margin-top:4px;
        text-align: center;
    }

    h4 {
    	color: #9A9A9A;
    	font-family:Helvetica;	
    	font-weight: 580; 
    	font-size: 18px;
    	margin-top: 12px;
    	text-align: center;
    }

    h5{ 
     	font-family:Helvetica;	
     	font-weight: 560; 
     	font-size:46px;
     	margin-top:40px;
     	margin-bottom: -120px;
     	text-align: center;
    }

    h6{ 
     	color: ;
     	font-family:Helvetica;	
     	font-weight: 560; 
     	font-size:26px;
     	margin-top:-40px;
     	margin-bottom: 40px;
     	text-align: center;
    }

.space{margin-top: 60px }
.space2{margin-top: 158px }
.space3{margin-top: 34px }
.space4{margin-top: 176px }
.space5{margin-left:74%;margin-right: 4%;}
.space6{margin-left:6%;}
.space7{margin-left:20%;margin-right:42%;}
.space8{margin-left:36%; margin-top: -6% }
.space9{margin-left:20%; margin-right:20%;margin-top: 2% }
.space10{margin-right:54%;margin-top:6% }
.space11{margin-left:8%;margin-right:50%;margin-top:-40% }
.space12{margin-left:34%;margin-right:;margin-top: 0% }
.space13{margin-left:6%;margin-right:68%;margin-top: -26% }
.space14{margin-bottom:-20% }
.space15{margin-left:6%;margin-right:6% }\



*{
    padding:0px;
    margin:0px;
}

#container {
     background-color: #black;
     text-align: center;
     width: 100%;
     height: 100%;
}

#footer {
    background: #00BFFF;
	width: 100%;
	height: 40px;
}

/* Меню-навігація */
.navback {
	background-color: black;
	opacity: 0.7;
	left: 0%;
	height: 46px;
    overflow: hidden;
    position: fixed; /* Set the navbar to fixed position */
    top: 0; /* Position the navbar at the top of the page */
    width: 100%; /* Full width */   
}
.navbar {
	background-color: ;
	left: 26%;
    overflow: hidden;
    position: fixed; /* Set the navbar to fixed position */
    top: 0; /* Position the navbar at the top of the page */
    width: 100%; /* Full width */   
}

/* Посилання в панелі меню  */
.navbar a {

	color: #f2f2f2;
  	font-family: Arial	; 
  	font-size:16px;
    font-weight: 400;    /* товщина шрифту*/
    float: left;
    display: inline;  /*block */
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;  /*підкреслювання і тп*/
}

/* Зміна тексту і фону на наведення мишки */
.navbar a:hover {
    background: #B0C4DE;
    color: White;
    text-decoration: none/*underline   */;
}

/*SECONDPAGE*/
.boxApple {

  background-image: url(.jpg);
  margin-top: 100px;
  height: 160vh;
  max-width: 100%;  ]
  width: 100%;
 }

/*THIRDPAGE*/
.boxblackApple {
  margin-left: 10%;
  background-color:  #979595   /*#F8A1FF	#C5C5C5*/;
  width: 80%;
  height: 224vh;
  max-width: 80%;  
}

.boxredApple {
  background-color:  #EF7575     /*#F8A1FF	#C5C5C5*/;
  margin-top: -70px;
  width: 30%;
  height: 114vh;
  max-width: 100%;  
}

.boxwhiteApple {
  background-color:  #EEEEEE     /*#F8A1FF	#C5C5C5*/;
  margin-top: -40px;
  width: 30%;
  height: 114vh;
  max-width: 100%;  
}

.boxgreenApple {
  background-color:  #DBFFE3    /*#F8A1FF	#C5C5C5*/;
  margin-top: -40px;
  width: 30%;
  height: 114vh;
  max-width: 100%;  
}

.boxblueApple {
  margin-top: -40px;
  background-color:  #A4C7E8 /*#F8A1FF	#C5C5C5*/;
  width: 30%;
  height: 114vh;
  max-width: 100%;  
}

.boxpurpleApple {
  background-color:  #E2D2FD/*#F8A1FF	#C5C5C5*/;
  margin-top: -40px;
  width: 30%;
  height: 114vh;
  max-width: 100%;  
}

/*FOURHTPAGE*/
.boxwater {
  background-color: #64A9C6;
  width: 100%;
  height: 120vh;
  max-width: 100%;  
  color: #F5F5F5; /*  1D1E1F*/
  text-align: center;
  font-family:Helvetica;	
  font-weight: 460; 
  font-size: 40px; 
  text-indent: 0px;
  line-height: 60%
  margin-top: 100px;

}

.transition-width {
  position: all;	
  margin-top: -872px;
  background: #F5F5F5;
  width: 100%;
  height: 120vh;
  max-width: 100%; 
  margin: right auto;
  cursor: pointer;
  transition: 2s linear;
  color: #19120F;
  text-align: center;
  font-family:Helvetica;	
  font-weight: 560; 
  font-size: 36px; 
  line-height: 140%
}
.transition-width:hover {
  max-width:70%;
}

/*FIFTHPAGE*/
.boxCo2 {
  background-color:  #F0F0F0/*#F8A1FF	#C5C5C5*/;
  margin-top: 0px;
  width: 100%;
  height: 258vh;
  max-width: 100%;  
  color: #19120F;
  text-align: left;
  font-family: Arial, sans-serif	;
  font-weight: 560; 
  font-size: 40px; 
  line-height: 120%;
  font-stretch: normal;
}

/*SIXPAGE*/
.A14 {
  background-color:  #FFFFFF/*#F8A1FF	#C5C5C5*/;
  margin-top: 0px;
  width: 100%;
  height: 138vh;
  max-width: 100%;  
  color: #171717;
  text-align: center;
  font-family: Helvetica;
  font-weight: 560; 
  font-size: 28px; 
  line-height: 100%;
  font-stretch: normal;
}

/*SEVENPAGE*/
.SEred {
  background-color:  #EF7575/*#F8A1FF	#C5C5C5*/;
  background-image: url(.jpg); /*#F8A1FF	#C5C5C5*/;
  background-size: 100%;
  margin-top: 0px;
  width: 100%;
  height: 130vh;
  max-width: 100%;  
  color: #000000;
  text-align: center;
  font-family: Helvetica;
  font-weight: 560; 
  font-size: 56px; 
  line-height: 100%;
  font-stretch: normal;
}

/*EIGHTPAGE*/
.SEmain {
  background-color:  #0000/*#F8A1FF	#C5C5C5*/;
  background-image: url(SE.jpg); /*#F8A1FF	#C5C5C5*/;
  background-size: 100%;
  margin-top: 0px;
  width: 100%;
  height: 130vh;
  max-width: 100%;  
  color: #FFFFFF;
  text-align: center;
  font-family: Helvetica;
  font-weight: 560; 
  font-size: 44px; 
  line-height: 100%;
  font-stretch: normal;
}

/*NINTHPAGE*/
.SE5g {
  background-color:  #000000/*#F8A1FF	#C5C5C5*/;
  background-image: url(.jpg); /*#F8A1FF	#C5C5C5*/;
  background-size: 100%;
  margin-top: 0px;
  width: 100%;
  height: 124vh;
  max-width: 100%;  
  color: #FFFFFF;
  text-align: center;
  font-family: Helvetica;
  font-weight: 560; 
  font-size: 44px; 
  line-height: 100%;
  font-stretch: normal;
}

/*TENTHPAGE*/
.Apps {
  background-color:  #F4F4F4   /*#F8A1FF	#C5C5C5*/;
  background-image: url(.jpg); /*#F8A1FF	#C5C5C5*/;
  background-size: 100%;
  margin-top: 0px;
  width: 100%;
  height: 140vh;
  max-width: 100%;  
  color: #19120F;
  text-align: center;
  font-family: Helvetica;
  font-weight: 560; 
  font-size: 44px; 
  line-height: 100%;
  font-stretch: normal;
}

.foot {
  background-color:  #FFFFFF  /*#F8A1FF	#C5C5C5*/;
  background-image: url(.jpg); /*#F8A1FF	#C5C5C5*/;
  background-size: 100%;
  margin-top: 0px;
  width: 100%;
  height: 20vh;
  max-width: 100%;  
  color: #A1A1A1;
  text-align: left;
  font-family: Helvetica;
  font-weight: 460; 
  font-size: 10px; 
  line-height: 100%;
  font-stretch: normal;
}

 a {
    text-decoration: none; /* Убирает подчеркивание для ссылок */
   } 




/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: none;
}

/* Hide the images by default */
.mySlides {
  display: none;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>


<div id="container">
<div class="navback"></div>
<div class="navbar">
  <a href="index.php">Головна</a>
  <a href="istr.php">iPhone</a>
  <a href="caseStore.php">Аксесуари</a> 
  <a href="news.php">Тренди</a>
  <a href="directors.php">Наші Директори</a>
  <a href="cart.php">Кошик</a>
</div>

<h1><p align=center><A NAME="APPLE"> Apple Store </a></p></h1>
<h2><p align=center> Think different </p></h2>

<div class="boxApple">
 <h1><br>Швидкість в усій красі</h1>
  <p align="center">
  <img src="12collectionN.png" width="42%"></p>
  <h3>iPhone 12 та iPhone 12 mini</h3>
  <h4>A14 Bionic — найшвидший процесор iPhone.
  <br>Дисплей OLED на всю передню панель.<br> Ceramic Shield у 4 рази краще захищає<br> від пошкоджень у разі падіння. І Нічний режим на всіх камерах. <br> Усе це — в двох ідеальних розмірах iPhone 12.</h4>
<a href="iStore.html"> <span style="font-family:Helvetica; font-weight:normal; font-size: 20px; color: #287ec1; text-decoration: none;"><br>Перейти в магазин ></span></a> 
</div>





<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="slide1.jpg" style="width:100%">
   
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="slide2.jpg" style="width:100%">
  
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="slide3.jpg" style="width:100%">
   
  </div>

<div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="slide4.jpg" style="width:100%">
   
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="slide5.jpg" style="width:100%">
   
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="slide6.jpg" style="width:100%">
   
  </div>
  <!-- Next and previous buttons -->
   <p align="left"> <a class="prev" onclick="plusSlides(-1)">&#10094;</a></p>
   <p align="right"><a class="next" onclick="plusSlides(1)">&#10095;</a></p>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
</div>





<div class="boxwater"><div class="space5"><br><br><br><br><br>H<font size=4px>2</font>Oкей<br><font size=5px><br><hr size="2px" color="#F5F5F5">Поглиблений захист від бризок і води Зйомка на глибині 6 метрів протягом години.<br>
<br>Всі моделі iPhone захищено від бризок, вологи та пилу. Їх протестовано в контрольованих лабораторних умовах.
</font></div>
<div class="transition-width"><p align="center"><img src="water.png" width=300px></p><div class="space6">Фото під водою? Залюбки.

<a href="https://support.apple.com/uk-ua/HT207043"> <span style="font-family:Helvetica; font-weight:normal; font-size: 26px;  color: #0066cc; text-decoration: none;"><br>Детальніше ></span></a> 

</div>
</div>
</div>

<div class="boxCo2"><div class="space7"><br><br><br>Менше — означає Краще.<br>Менша коробка — Чистіше довкілля.</div><p align="center"><div class="space8"><img src="box2.png" width=600px></div></p><font size=5px><span style="font-weight:normal; line-height: 108%"><div class="space7">


	 <details>
   <summary>З iPhone 12 можна користуватися адаптерами живлення, EarPods
із портом Lightning, а також кабелями USB‑A/Lightning, адаптерами живлення, EarPods із портом Lightning, а також кабелями USB‑A/Lightning, які ви, можливо, вже маєте.</summary> У світі продано мільярди таких аксесуарів, і часто покупцям не потрібні нові. Тому ми вирішили виключити їх із комплекту всіх iPhone. Це дасть змогу зменшити викиди вуглецю та видобуток цінних матеріалів. Крім того, коробка буде меншою, що дозволить збільшити кількість нашої продукції у вантажних контейнерах і знизити обсяги транспортування. Також ми допомагаємо нашим партнерам переходити на відновлювальні джерела енергії. Загалом це дає змогу зменшити кількість викидів вуглецю на 2 мільйони метричних тон на рік. Новий iPhone ви зможете заряджати за допомогою свого старого кабелю USB‑A/Lightning. Для швидкого заряджання можна використовувати кабель USB‑C/Lightning із комплекту, який сумісний зі старими адаптерами живлення USB‑C та комп’ютерними портами.</span>
  </details>
<br><br><hr size=2px, color="#19120F"><br><span style="font-weight:bold;
line-height: 108%">
<big>Це як на цілий рік прибрати з доріг 450 000 автомобілів</big>
<br><a href="https://support.apple.com/uk-ua/guide/tv/atvbdf719f25/tvos"> <span style="font-family:Helvetica; font-weight:normal; font-size: 24px; color: #0066cc; text-decoration: none;"><br>Детальніше про Apple і довкілля ></span></a> 
</div></font></div>

<div class="A14"><br><br><br><font size="10px">Безліч рішень - всього за секунду</font>
<div class="space10"><img src="a14-chip.png" width=80px></div>
<div class="space9"><p align="left"><span style="font-size: 23px; ">
A14 Bionic — це найшвидший процесор iPhone.<font color="#8A8A8A"> І він роз­ширює межі можливого. Система Neural Engine виконує трильйони операцій. Відео можна знімати в стандарті Dolby Vision — навіть професійні кінокамери на це не здатні. Висока енергоефектив­ність забезпечує довгу роботу від акумулятора. Цей процесор уже сьогодні готовий до викликів майбутнього.</font></span></p>
<br><hr size=2px; color="#171717"><br><span style="font-weight:bold;
line-height: 118%"><p align="left">
<big>Відтепер, найпродуктивний процесор, в усіх пристроях iPhone 12 та iPhone 12 Pro</big></p>
<a href="https://support.apple.com/uk-ua/HT211808"> <span style="font-family:Helvetica; font-weight:normal; font-size: 24px; color: #0066cc; text-decoration: none;"><br>Детальніше про iOS 14 ></span></a> 

</span></div></div>

<div class="SEred"><br><div class="space12"><img src="sered.png" width=40%></div><div class="space11">Зустрічайте <span style="font-weight:normal;">Класичний стиль в поєднанні з новими</span> Можливостями.<br><br><a href="iStore.html"> <img src="SElogo.png" width=40%></a></div></div>

<div class="SEmain"><br><span style="font-weight:normal;"><br><br><br>Iphone</span> SE<br><br><big><big>Усе як ви любите.</big></big><br><br><br><br><div class="space9"><font size="6px" color="E6E6E6">Улюблений компактний дизайн, потужний процесор A13 Bionic та багато інших незаперечних плюсів. Це саме те, на що ви чекали.</font></div></div>

<div class="SE5g"><br><br><br><big><big>У чому сила iPhone?</big></big><div class="space12"><br><br><img src="secol.png" width=90%></div><div class="space13">5G тепер в iPhone <br><br><span style="font-weight:normal; font-size: 40px"> Відтепер швидше на 30%.</span></div></div>

<div class="Apps"><br><br><big><big>Нехай ваш iPhone робить все можливе.</big></big><br><br><TABLE WIDTH="100%" border="0" align=center CELLSPACING="20" spacing="2">
<TR><TD align=center bgcolor="050507" width="598px" height="520px"><a href="https://www.apple.com/ua/apple-tv-plus/">
<span style="font-weight:normal; font-size: 30px; color: #FFFFFF;"><br>Придбайте iPhone і отримайте безплатно 3 місяці Apple TV+.<br><br></span><br><img src="atv.jpg" width="600px" height="340px"></a></TD>
<TD align=center bgcolor="E6E5D2" width="598px" height="520px"><a href="https://www.apple.com/ua/apple-arcade/?itscg=10000&itsct=arc-0-apl_hp-hw_bundle-apl-ref-211025"><span style="font-weight:normal; font-size: 30px; color:#19120F;">Придбайте iPhone і отримайте безплатно 3 місяці Apple Arcade.<br><br></span><img src="Arcade.png" width="600px" height="340px"></a></TD></TR></TABLE>
</div>


<div class="foot"><br><br>><div class="space15">
<a href="https://www.apple.com/ua/buy/"> <span style="font-family:Helvetica; font-weight:normal; font-size: 11px; color: blue; text-decoration: none;">Магазин офіційного партнера.</span></a>
<br><br><hr><br>
<TABLE WIDTH="100%" border="0" align=center CELLSPACING="" spacing="2">
<TR><TD align=left>LC&Sanya Company., 2021 р. Усі права захищено.</TD>
<TD align=left>
<a href="https://www.apple.com/legal/"> <span style="font-family:Helvetica; font-weight:normal; font-size: 10px; color: #A1A1A1; text-decoration: none;">Юридична інформація</span></a>
</TD><TD align=right>
<a href="https://www.apple.com/legal/privacy/uk/"> <span style="font-family:Helvetica; font-weight:normal; font-size: 10px; color: #A1A1A1;text-decoration: none;">Політика Конфіденційності</span></a>
</TD>
</TR></TABLE></div></div>


</div>




</body>
</html>





