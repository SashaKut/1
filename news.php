<!DOCTYPE html>
<html>
<html lang="ua">
<head>
<title>Apple:Магазин</title>
</head>
<body> 
<style>
<style type="text/css">

html {
height: 100%; /* Высота страницы */     
}
body {
background-color:#0e132f; /* Путь к фоновому */
background-image: url(.jpg); /* Путь к фоновому рисунку */
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
    	color: #ffffff;
    	font-family:Helvetica;	
    	font-weight: 580; 
    	font-size: 68px;
    	margin-top: -32%;
    	text-align: center;
    	margin-left: 30%;
    	margin-right: 30%;
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

.space{margin-top: 10px; margin-bottom: 00px; }
.space1{margin-top: -50%; margin-left: 43%; }
.space2{margin-top: 16%; margin-right: 44%; }
.space3{margin-top: 8%; margin-right: 38%; margin-left: 14% }
.space4{margin-top:0%;  margin-left: 58%;}
.space5{margin-top:-1%;  margin-left: 86%; margin-bottom: 10%}
.space6{margin-top: -40%;  margin-left: 70%; margin-right: 10%}
.space7{margin-top: 0%;  margin-left: 12%; margin-right: 60%}
.space8{margin-top: -18%;  margin-left: 56%; margin-right: 12%}
.space15{margin-left:6%;margin-right:6% }



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

.boxstring {
  background-image:  ;
  background-color:  #/*#F8A1FF	#C5C5C5*/;
  margin-top: 0px;
  width: 100%;
  height: 228vh;
  max-width: 100%;  
}

.boxGblack {
  background-image:  url(.png);
  background-color: #0F1419
 /*#F8A1FF	#C5C5C5*/;
  margin-top: 100px;
  width: 100%;
  height: 114vh;
  max-width: 100%;  
  color: #ffffff;
  font-family:Helvetica;	
  font-weight: 580; 
  font-size: 74px;

}

.boxG {
  background-image:  url(.png);
  background-color: #000000
 /*#F8A1FF	#C5C5C5*/;
  margin-top: ;
  width: 100%;
  height: 174vh;
  max-width: 100%;  
  color: #586FB4;
  font-family:Helvetica;	
  font-weight: 580; 
  font-size: 54px;
}

.boxS {
  background-image:  url(.png);
  background-color: #000000
 /*#F8A1FF	#C5C5C5*/;
  margin-top: -6% ;
  width: 100%;
  height: 74vh;
  max-width: 100%;  
  color: #808085;
  font-family:Helvetica;	
  font-weight: 580; 
  font-size: 20px;
}

.boxD {
  background-image:  url(.png);
  background-color:  #BEE4C6   /*#F8A1FF	#C5C5C5*/;
  margin-top: -4% ;
  width: 100%;
  height: 144vh;
  max-width: 100%;  
  color: #4C705B;
  font-family:Helvetica;	
  font-weight: 580; 
  font-size: 50px;
}
.boxT {
  background-image:  url(.png);
  background-color:  #ffffff;   /*#F8A1FF	#C5C5C5*/;
  margin-top: -4% ;
  width: 100%;
  height: 124vh;
  max-width: 100%;  
  color: #1d1d1f;
  font-family:Helvetica;	
  font-weight: 480; 
  font-size: 20px;
  text-align: left;
}

.boxel {
  background-image:  url(.png);
  background-color:  #000000;   /*#F8A1FF	#C5C5C5*/;
  margin-top: -4% ;
  width: 100%;
  height: 154vh;
  max-width: 100%;  
  color: #1d1d1f;
  font-family:Helvetica;	
  font-weight: 480; 
  font-size: 20px;
  text-align: left;
}

.boxSE {
  background-image:  url(.png);
  background-color:  #151515;   /*#F8A1FF	#C5C5C5*/;
  margin-top: -4% ;
  width: 100%;
  height: 154vh;
  max-width: 100%;  
  color: #ffffff;
  text-align: center;
  font-family: Helvetica;
  font-weight: 560; 
  font-size: 56px; 
  line-height: 100%;
  font-stretch: normal;
}

.boxID {
  background-image:  url(.png);
  background-color:  #000000;   /*#F8A1FF	#C5C5C5*/;
  margin-top: -4% ;
  width: 100%;
  height: 190vh;
  max-width: 100%;  
  color: #ffffff;
  text-align: center;
  font-family: Helvetica;
  font-weight: 560; 
  font-size: 56px; 
  line-height: 100%;
  font-stretch: normal;
}


.boxintr {
  background-image:  url(.png);
  background-color: #ffffff;   /*#F8A1FF	#C5C5C5*/;
  margin-top: % ;
  width: 100%;
  height: 10vh;
  max-width: 100%;  
  color: #000000;
  text-align: center;
  font-family: Helvetica;
  font-weight: 460; 
  font-size: 56px; 
  line-height: 100%;
  font-stretch: normal;
}

.boxthrd {
  background-image:  url(.png);
  background-color: #35283c;   /*#F8A1FF	#C5C5C5*/;
  margin-top: % ;
  width: 100%;
  height: 107vh;
  max-width: 100%;  
  color: #ffffff;
  text-align: center;
  font-family: Helvetica;
  font-weight: 560; 
  font-size: 56px; 
  line-height: 100%;
  font-stretch: normal;
}

.boxbattery {
  background-image:  url(.png);
  background-color: #ffffff;   /*#F8A1FF	#C5C5C5*/;
  margin-top: % ;
  width: 100%;
  height: 107vh;
  max-width: 100%;  
  color: #6e6e73;
  text-align: center;
  font-family: Helvetica;
  font-weight: 460; 
  font-size: 22px; 
  line-height: 100%;
  font-stretch: normal;
}

.boxgame {
  background-image:  url(.png);
  background-color: #efd9d5;   /*#F8A1FF	#C5C5C5*/;
  margin-top: % ;
  width: 100%;
  height: 114vh;
  max-width: 100%;  
  color: #6e6e73;
  text-align: center;
  font-family: Helvetica;
  font-weight: 460; 
  font-size: 22px; 
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





    .color {
    animation: colorApple 30s infinite;
    color: white;
    font-family:Helvetica;	
    font-weight: 560; 
    font-size:20px;
    margin-top:4px;
    text-align: center;
    }


@keyframes colorApple {
  1% { color: black; }
  30%{ color: #FFFFFF; }
  60% { color: black; }
  75%{ color: #1E90FF; }
  83% { color: black; }
  100%{ color: #FFFAFA; }
}



</style>

<div id="container">
<div class="navback"></div>
<div class="navbar">
  <a href="index.php">Головна</a>
  <a href="istr.html">iPhone</a>
  <a href="caseStore.php">Аксесуари</a> 
  <a href="news.php">Тренди</a>
  <a href="directors.php">Наші Директори</a>
  <a href="cart.php">Кошик</a>
</div>


<div class="boxstring">

<h5><br><font color=#f3a6a7><big>Новинки Apple</big></font><br><font color=#ffffff><big>Ваша нова сильна сторона.</big></font></h5>

<div class="space2">
<img src="12Bvert.png"></div>

<div class="space1">
<img src="12vert.png"></div>
<br><br><br><br>
<h6><font color=#ffffff><big>iPhone 12</big> mini</font></h6><br></div>
<h4>Компактність знову в тренді</h4>

 <a href="iStore.html"> <span style="font-family:Helvetica; font-weight:normal; font-size: 20px; color: #287ec1; text-decoration: none;"><br><br>Перейти в магазин ></span></a> 
</div>

<div class="boxGblack"><br><div class="space3">Чому варто <font color="#f3a6a7">звернути увагу </font> на iPhone 12<font color="#f3a6a7"> mini</font>.</div>
<br>
<div class="space4">
 <a href="https://www.youtube.com/watch?v=r8F0xlGHOAU"> <span style="font-family:Helvetica; font-weight:bold; font-size: 32px; color: #ffffff; text-decoration: none;">Переглянути презентацію</span></a> 

</div>


<div class="space5">
<img src="presentfing.png" width="36%">
</div>
</div>

<div class="boxG"><br><br>
<p align="center">
<img src="minicd.bmp" width="90%"><br><br><br><br>
</p><div class="space6">
Чудовий час автономної роботи.
</div></div>

<div class="boxS"><br><br>
<div class="space7"><img src="lock.bmp" width="30%"><br><br><font color="ffffff" size=10px>Інтегрований захист даних.</font></div>
<div class="space8">
iPhone дає вам змогу повністю контролювати особисті дані. Наприклад, детальна інформація про конфіденційність допомагає зрозуміти, як саме додатки використовують ваші дані. Додатки мають отримати ваш дозвіл, перш ніж відстежувати вашу активність у сторонніх додатках і на сайтах інших компаній. І це тільки початок.
<br><br>
<a href="https://www.apple.com/ua/privacy/"> <span style="font-family:Helvetica; font-weight:bold; font-size: 20px; color: #2997ff; text-decoration: none;"><br>Детальніше про Конфіденційність ></span></a> 



</div>
</div>

<div class="boxT">
<h5><br><big>Немає такого телефону, як iPhone.</big></h5><br><br>
<TABLE WIDTH="100%" border="0" align=center CELLSPACING="120" spacing="2">
<TR><TD align=left width="%">
<img src="simple.png" height="60px"><br><span style="font-weight:bold; font-size: 40px; color: #1d1d1f;">Все працює просто.</span><br><br>
Наше обладнання та програмне забезпечення безперебійно працюють разом. Хочете з’єднати нові AirPods зі своїм iPhone? Це просте налаштування одним дотиком. Хочете поділитися фотографіями, відео чи контактами з друзями поблизу? AirDrop відображає їх імена на екрані, тому ви можете вибрати лише одним дотиком.
</TD><TD align=left><img src="phone.png" height="60px"><br>
<span style="font-weight:bold; font-size: 40px; color: #1d1d1f;">Розрахований на довговічність.</span><br><br>
Надміцні матеріали та водостійкість роблять iPhone неймовірно міцним. А автоматичні оновлення iOS надають нові функції та покращення безпеки, які забезпечують безперебійну роботу вашого iPhone і допомагають йому зберігати свою цінність довше, ніж інші смартфони.
</TD></TR></TABLE>
</div>

<div class="boxD">
<h5><br><font color=#343436>Бездоганний дизайн з плоскими краями.</font></h5>
<div class="space"></div><br><br>
<p align="center"><img src="greennew.png" height=540px></p><br>
<a href="iStore.html"><div class="color"><h6><big><big>Оберіть свій iPhone mini ></big></big></h6></div></a>
</div>

<div class="boxel">
<h5><br><br><br><font color=#ffffff>Досі популярний — iPhone 11.</font></h5>
<div class="space"></div><br><br><br><br><br><br><br>
<p align="center"><img src="iphone11.png" width="60%"></p><br><br><br>
<a href="iStore.html"><h6><font color=#ffffff><big><big>Знижки до 30%</big></big>
<br><br><br><br>Перейти в магазин</font></h6></div></a>

<div class="boxSE"><br>
<TABLE WIDTH="100%" border="0" align=center CELLSPACING="30" spacing="2">
<TR><TD align=center width="40%">
Зустрічайте <span style="font-weight:normal;">Класичний стиль в поєднанні з новими</span> Можливостями.<br><br>
</TD><TD align=center><img src="sewhite.png" width=80%>
</TD></TR></TABLE></div>

<div class="boxID">
<p align="center"><img src="seID.png" width=80%><br>
<img src="touchID.jpg" width=20%></p>Повернення<br>«Додому».<br><br>
<span style=" line-height: 0.2em; font-weight:normal; color:#a1a1a6; font-size:24px;">Технологія Touch ID дає змогу безпечно розблоковувати<br>iPhone і миттєво заходити в улюблені додатки.</span> 
<br><br><a href="iStore.html"><small><small><small><font color="#ffffff">Перейти в магазин</font></small></small></small></a>
</div>

<div class="boxintr">
<TABLE WIDTH="100%" border="0" align=center CELLSPACING="0" spacing="2">
<TR><TD align=center width="%"><span style="font-weight:normal; font-size: 30px; color: #000000;">iPhone 13</span></TD ><TD width=70%></TD>
</TR></TABLE>
</div>

<div class="boxthrd">
<br><br><span style=" line-height: 0.2em; font-weight:normal; color:#efd9d5
; font-size:74px;">З новими барвами</span> </small><br><br>
<p align="center"><img src="13introw.png" width=80%>
</div>

<div class="boxbattery">
<br><br><br><span style=" line-height: 0.2em; font-weight:normal; color:#000000; font-size:44px;">Дисплей Super Retina XDR</span><br>
<TABLE WIDTH="100%" border="0" align=center CELLSPACING="120" spacing="2">
<TR><TD align=left valign=top width="%"><span style="font-weight:bold; font-size: 30px; color: #d0718f;">Яскраво</span><br><br>
Наш дисплей OLED став на 28% яскравішим — до 800 кд/м², тож на ньому все видно навіть у найсонячніший день. А під час перегляду контенту в HDR яскравість сягає 1200 кд/м². Ви зможете розрізнити відтінки білого, чорного й усіх інших кольорів. До того ж дисплей споживає менше енергії, ніж будь-коли.</TD >
<TD align=left valign=top width="%"><span style="font-weight:bold; font-size: 30px; color: #d0718f;">Барвисто</span><br><br>
Розширена колірна гама iPhone 13 відповідає стандартам кіноіндустрії, які допомагають творцям фільмів досягати максимально точної передачі кольорів. Ось чому зображення на екрані здається неймовірно природним.</TD >
<TD align=left valign=top width="%"><span style="font-weight:bold; font-size: 30px; color: #d0718f;">Чітко</span><br><br>
Дисплей Super Retina XDR має надзвичайно високу щільність пікселів, тому фотографії, відео й текст відображаються надзвичайно чітко. А завдяки зменшеній площі камери TrueDepth на дисплеї тепер ще більше місця для зображення.</TD ></TR></TABLE></div>


<div class="boxgame">
<br><br><br><br><br>
<TABLE WIDTH="100%" border="0" align=center CELLSPACING="0" spacing="2">
<TR><TD width=10%></TD>
<TD width=28% align=left valign=top>
<span style=" line-height: 1em; font-weight:bold; color:#000000
; font-size:54px;">iPhone 13 працює без підзарядки до 2,5 години довше!
</span></TD><TD><p align="right"><img src="13game.png" width=100%></TD>
</TR></TABLE>
<br><br><a href="iStore.html">
<span style=" line-height: 0.2em; font-weight:bold; color:#ffffff; font-size:44px;">Перейти в магазин</span></a>
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




