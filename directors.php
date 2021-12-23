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
background-color:#f0f0f0; /* Путь к фоновому */
background-image: url(.jpg); /* Путь к фоновому рисунку */
background-size: 00%;
 /* Отменяем повторение фона */
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
     	color: #1d1d1f;
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
        
        font-family:Helvetica;	
        font-weight: 560; 
        font-size:34px;
        margin-top:4px;
        text-align: center;
    }

    h4 {
   
    	font-family:Helvetica;	
    	font-weight: 480; 
    	font-size: 22px;
    	margin-top: 12px;
    	text-align: center;
    }

    h5{ 
     	font-family:Helvetica;	
     	font-weight: 560; 
     	font-size: 50px;
     	margin-top:0px;
     	margin-bottom: 0px;
    }

    h6{ 
     	color: ;
     	font-family:Helvetica;	
     	font-weight: 460; 
     	font-size:24px;
     	margin-top: 0px;
     	margin-bottom: 0px;
    }

.space1{margin-top: -12%;margin-left: 10% }
.space2{margin-top: 2%;margin-left: 3% }
.space3{margin-top: 0%;margin-left: 20%;margin-right: 20% }
.space4{margin-top: 4%;margin-left: 6%;}
.space5{margin-top:-18%; margin-left: 14%;margin-right:54% }
.space6{margin-top: -30%; margin-left: 50% }
.space7{margin-top: 4%; margin-left: 10% }
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
.boxDirectors {

  background-image: url(.jpg);
  margin-top: -12%;
  margin-bottom: 14%;
  height: 100%;
  text-align: left;
  max-width: 100%;  ]
  width: 100%;
  font-family: Helvetica;
 }

.boxApple {
  background-image: url(.jpg);
  background-color: #000000;
  margin-top: -130px;
  height: 100%;
  text-align: center;
  max-width: 100%;  ]
  width: 100%;
  color: #E5E5E5;
  font-family: Helvetica;
  margin-bottom: 20%;
}


/*THIRDPAGE*/
.boxfirst {
  background-image: url(.jpg);
  background-color: #FFFFFF;/*#F8A1FF	#C5C5C5*/
  width: 100%;
  height: 148vh;
  max-width: 100%;  
  font-family:Helvetica;  
  text-align: left;
  font-size:40px;
  margin-top: 0%;
  margin-bottom: 0px;
}

.boxsecond {
  background-image: url(.jpg);
  background-color: #FFFFFF;/*#F8A1FF #C5C5C5*/
  width: 100%;
  height: 120vh;
  max-width: 100%;  
  font-family:Helvetica;  
  text-align: left;
  font-size:40px;
  margin-top: 10%;
  margin-bottom: 0px;
}

.boxthird {
  background-image: url(.jpg);
  background-color: #FFFFFF;/*#F8A1FF #C5C5C5*/
  width: 100%;
  height: 148vh;
  max-width: 100%;  
  font-family:Helvetica;  
  text-align: left;
  font-size:40px;
  margin-top: 10%;
  margin-bottom: 0px;
}

.boxfour {
  background-image: url(.jpg);
  background-color: #FFFFFF;/*#F8A1FF #C5C5C5*/
  width: 100%;
  height: 168vh;
  max-width: 100%;  
  font-family:Helvetica;  
  text-align: left;
  font-size:40px;
  margin-top: 10%;
  margin-bottom: 0px;
}

.boxfive {
  background-image: url(.jpg);
  background-color: #FFFFFF;/*#F8A1FF #C5C5C5*/
  width: 100%;
  height: 118vh;
  max-width: 100%;  
  font-family:Helvetica;  
  text-align: left;
  font-size:40px;
  margin-top: 10%;
  margin-bottom: 0px;
}

.boxsix {
  background-image: url(.jpg);
  background-color: #FFFFFF;/*#F8A1FF #C5C5C5*/
  width: 100%;
  height: 148vh;
  max-width: 100%;  
  font-family:Helvetica;  
  text-align: left;
  font-size:40px;
  margin-top: 10%;
  margin-bottom: 0px;
}
.foot {
  background-color:  #FFFFFF  /*#F8A1FF	#C5C5C5*/;
  background-image: url(.jpg); /*#F8A1FF	#C5C5C5*/;
  background-size: 100%;
  margin-top: 0%;
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

<div class="boxApple">
 <h1><br><br><font color="#F6F6F6">ЯК ВСЕ РОЗПОЧИНАЛОСЬ</font></h1><br><br>
  <p align="center">
  <img src="officebox.jpg" width="62%"></p>
  <h3>Apple Company</h3><div class="space3"><br>
  <a href="https://ilounge.ua/ua/blog/istoriya-kompanii-apple-kak-eto-bylo"> <span style="font-family:Helvetica;font-weight: 480;font-size: 22px;margin-top: 12px;text-align: center; color: #E5E5E5;">since 1977</span></a> <br><br><br></div></div>

  



<div class="boxDirectors">
<div class="space2"><img src="logo.png" width="60px"></div>
<div class="space1"><h1><p align=left><A NAME="Directors">Керівництво Apple </A></p></h1></div>
<br><br><br><br>
<TABLE WIDTH="100%" border="0" align=center CELLSPACING="20" spacing="2">
<TR><TD align=center>
<img src="tim.jpg" width="240px">
<a href="#tim"><span style="font-weight:normal; font-size: 30px; color: #1d1d1f;"><br><br>Тім Кук<br><small><small><font color="#4b6fa2">Спеціаліст-Директор</font></small></small></span></a></TD>
<TD align=center>
<img src="stiv.jpg" width="240px">
<a href="#kate"><span style="font-weight:normal; font-size: 30px; color: #1d1d1f;"><br><br>Кетрін Адамс<br><small><small><font color="#4b6fa2">Засновник компанії</font></small></small></span></a></TD>
<TD align=center>
<img src="voz.jpg" width="240px">
<a href="#eddy"><span style="font-weight:normal; font-size: 30px; color: #1d1d1f;"><br><br>Едді Кью<br><small><small><font color="#4b6fa2">Спеціаліст-Технік</font></small></small></span></a></TD>
</TR><TR><TD height="40"></TD></TR>
<TR>
<TD align=center>
<img src="Lisa.bmp" width="240px">
<a href="#lisa"><span style="font-weight:normal; font-size: 30px; color: #1d1d1f;"><br><br>Ліза Джексон<br><small><small><font color="#4b6fa2">Віце-президент з політики і прав</font></small></small></span></a></TD>
<TD align=center>
<img src="stella.bmp" width="240px">
<a href="#stella"><span style="font-weight:normal; font-size: 30px; color: #1d1d1f;"><br><br>Стелла Лоу<br><small><small><font color="#4b6fa2">Віце-президент з комунікацій</font></small></small></span></a></TD>
<TD align=center>
<img src="isabel.bmp" width="240px">
<a href="#isabel"><span style="font-weight:normal; font-size: 30px; color: #1d1d1f;"><br><br>Ізабель Махе<br><small><small><font color="#4b6fa2">Віце-президент з менеджменту</font></small></small></span></a></TD></TR>
</TABLE>
</div>

<div class="boxfirst">
<A NAME="kate"><img src="fon.bmp" width="100%" height="400px"></A>
<div class="space6">
<img src="stiv.jpg" height="400px"></div>
<div class="space5"> 
<h5><font color=#19120F>
Кетрін Адамс</font></h5>
<small>Старший віце-президент</small></div>
<h6><div class="space7">
<TABLE WIDTH="80%" CELLSPACING="70" spacing="0" border="0" align=center>
<TD align="left"><font color="#343434"><small><small><br><br>
Кетрін Адамс є генеральним радником Apple і старшим віце-президентом з правової та глобальної безпеки, підпорядкована генеральному директору Тіму Куку. Кейт входить до складу виконавчої команди компанії та контролює всі юридичні питання, включаючи корпоративне управління, інтелектуальну власність, судові спори та дотримання вимог цінних паперів, глобальну безпеку та конфіденційність. Кейт приєдналася до Apple з Honeywell у 2017 році, де вона пропрацювала 14 років, останнім часом як старший віце-президент і генеральний юрисконсульт. У Honeywell Кейт відповідала за глобальну юридичну стратегію організації в більш ніж 100 країнах.</small></small></font>
</TD><TD align="left"><font color="#343434"><small><small>
До приходу в Honeywell Кейт була партнером Sidley Austin LLP в Нью-Йорку. На початку своєї кар'єри вона працювала клерком у судді Верховного суду Сандри Дей О'Коннор; як судовий адвокат Міністерства юстиції Сполучених Штатів, Апеляційної секції, Відділу навколишнього середовища та природних ресурсів; і як юрист Стівена Брейєра, тодішнього головного судді Апеляційного суду США першого округу.Кейт здобула ступінь бакалавра з порівняльного літературознавства в Університеті Брауна і ступінь юридичного факультету Чиказького університету.</small></small></font></TD></TABLE></div></h6></div>

<div class="boxsecond">
<A NAME="tim"><img src="fon.bmp" width="100%" height="400px"></A>
<div class="space6">
<img src="tim.jpg" height="400px"></div>
<div class="space5"> 
<h5><font color=#19120F>
<A NAME="tim">Тім Кук</font></h5>
<small>Головний виконавчий директор</small></div>
<h6><div class="space7">
<TABLE WIDTH="80%" CELLSPACING="70" spacing="0" border="0" align=center>
<TD align="left"><font color="#343434"><small><small>
Тім Кук — генеральний директор компанії Apple і її сервісів в його раді директорів.Починаючи з 2011 року, Тім був операційним директором Apple і був відповідальним в сфері продажів і операцій компанії в усьому світі, включаючи наскрізне управління ланцюгом поставок Apple, діяльність з продажу, а також обслуговування та підтримку в усіх країнах ринку. Він також пов'язаний Apple Macintosh та зіграв ключову роль у встановленні стратегічних відносин, спрямованих на агресивність у відповідь на зростаючу позицію ринку.
</small></small></font>
</TD><TD align="left"><font color="#343434"><small><small>
Першою посадою його роботи в Compaq Тім був головний операційний директор відділу посередників Intelligent Electronics.
Тім отримав ступінь MBA в Університеті Дьюка, де він був, і ступінь бакалавра наук з промислової інженерії в Університеті Оберн.
</small></small></font></TD></TABLE></div></h6></div>

<div class="boxthird">
<A NAME="eddy"><img src="fon.bmp" width="100%" height="400px"></A>
<div class="space6">
<img src="voz.jpg" height="400px"></div>
<div class="space5"> 
<h5><font color=#19120F>
Едді Кью</font></h5>
<small>Старший віце-президент з
обслуговування</small></div>
<h6><div class="space7">
<TABLE WIDTH="80%" CELLSPACING="70" spacing="0" border="0" align=center>
<TD align="left"><font color="#343434"><small><small>
Едді Кью — старший віце-президент Apple із обслуговування, підпорядковується генеральному директору Тіму Куку.
Едді контролює весь спектр послуг Apple, включаючи Apple Music, Apple News, Apple Podcasts, додаток Apple TV і Apple TV+, а також Apple Pay, Apple Card, Maps, Search Ads, послуги Apple iCloud, а також продуктивність і продуктивність Apple. програми для творчості. Команда Eddy має чудовий досвід створення та зміцнення послуг світового класу, які відповідають і перевершують високі очікування клієнтів Apple, а також пропонують творцям і оповідачам можливість донести свої творчі бачення людям по всьому світу.Едді приєднався до Apple у 1989 році і</small></small></font>
</TD><TD align="left"><font color="#343434"><small><small>
 очолює велику організацію дивовижних людей. Едді відіграв важливу роль у створенні інтернет-магазину Apple у 1998 році, iTunes Store у 2003 році та App Store у 2008 році. Він також відіграв ключову роль у розробці відзначеного нагородами пакету програм Apple iLife. У перші роки роботи в Apple він був успішним менеджером з розробки програмного забезпечення та служби підтримки клієнтів.
Едді отримав ступінь бакалавра з комп'ютерних наук та економіки в Університеті Дьюка. Він входить до ради опікунів Центру медіа Палі та Університету Дьюка. </small></small></font></TD></TABLE></div></h6></div>


<div class="boxfour">
<A NAME="lisa"><img src="fon.bmp" width="100%" height="400px"></A>
<div class="space6">
<img src="lisa.bmp" height="400px"></div>
<div class="space5"> 
<h5><font color=#19120F>
Ліза Джексон</font></h5>
<small>Віце-президент з політики і прав</small></div>
<h6><div class="space7">
<TABLE WIDTH="80%" CELLSPACING="70" spacing="0" border="0" align=center>
<TD align="left"><font color="#343434"><small><small>
Ліза Джексон — віце-президент Apple з питань навколишнього середовища, політики та соціальних ініціатив, підпорядкована генеральному директору Тіму Куку.Ліза контролює зусилля Apple, спрямовані на мінімізацію впливу на навколишнє середовище, вирішуючи зміни клімату за допомогою відновлюваних джерел енергії та енергоефективності, використання екологічно чистих матеріалів та винаходу нових способів збереження дорогоцінних ресурсів. Вона також очолює Ініціативу Apple щодо расової справедливості та справедливості вартістю 100 мільйонів доларів, зосереджену на освіті, економічних можливостях та реформі кримінальної юстиції — і відповідає за програми освітньої політики Apple, її роботу з доступності продуктів та її функції у справах уряду в усьому світі.
.</small></small></font>
</TD><TD align="left"><font color="#343434"><small><small><br>З 2009 по 2013 рік Ліза обіймала посаду адміністратора Агентства з охорони навколишнього середовища США. Призначена президентом Бараком Обамою, вона зосередилася на скороченні викидів парникових газів, захисті якості повітря та води, запобіганні впливу токсичного забруднення та розширенні охоплення громад з екологічних проблем.
Вона також була керівником апарату губернатора Нью-Джерсі Джона С. Корзіна та комісаром Департаменту охорони навколишнього середовища Нью-Джерсі.
Ліза має ступінь магістра хімічної інженерії Прінстонського університету та ступінь бакалавра хімічної інженерії в Університеті Тулейна. Вона є членом правління Tulane, SF Film, Conservation International та Американського інституту кіно</small></small></font></TD></TABLE></div></h6></div>

<div class="boxfive">
<A NAME="stella"><img src="fon.bmp" width="100%" height="400px"></A>
<div class="space6">
<img src="stella.bmp" height="400px"></div>
<div class="space5"> 
<h5><font color=#19120F>
Стелла Лоу</font></h5>
<small>Віце-президент з комунікацій</small></div>
<h6><div class="space7">
<TABLE WIDTH="80%" CELLSPACING="70" spacing="0" border="0" align=center>
<TD align="left"><font color="#343434"><small><small>
Стелла Лоу — віце-президент Apple із комунікацій, підпорядкована генеральному директору Тіму Куку. Вона відповідає за глобальну комунікаційну стратегію Apple, очолює команду зв’язків з громадськістю, а також комунікації співробітників.
Стелла має понад 30-річний досвід у сфері маркетингу та комунікацій. До приходу в Apple у 2021 році вона була старшим віце-президентом і директором з комунікацій Cisco. 
.</small></small></font>
</TD><TD align="left"><font color="#343434"><small><small>Вона також обіймала керівні посади в Dell Technologies і EMC.
Родом із Великобританії, Стелла має ступінь бакалавра з бізнес-досліджень у Лондонському університеті Саут-Бенк. Вона входить до ради відділу Bay Area Американської асоціації серця. Цінний працівник компанії Apple</small></small></font></TD></TABLE></div></h6></div>

<div class="boxsecond">
<A NAME="isabel"><img src="fon.bmp" width="100%" height="400px"></A>
<div class="space6">
<img src="isabel.bmp" height="400px"></div>
<div class="space5"> 
<h5><font color=#19120F>
Ізабель Махе</font></h5>
<small>Віце-президент з менеджменту</small></div>
<h6><div class="space7">
<TABLE WIDTH="80%" CELLSPACING="70" spacing="0" border="0" align=center>
<TD align="left"><font color="#343434"><small><small>
Ізабель Махе — віце-президент Apple і менеджер-директор Великого Китаю, підпорядкована генеральному директору Тіму Куку та генеральному директору Джеффу Вільямсу. Ізабель забезпечує лідерство та координацію в китайській команді Apple.Ізабель приєдналася до Apple у 2008 році як віце-президент Wireless Technologies, що курує розробку стільникового зв’язку, Wi-Fi, Bluetooth, NFC, технологій розташування та руху для недовго кожного продукту Apple.</small></small></font>
</TD><TD align="left"><font color="#343434"><small><small>Після проведення Apple Ізабель служила віце-президентом з розробки програмного забезпечення Wireless на Palm і обіймала ключові технічні та управлінські посади в інших бездротових компаніях.Ізабель тримає ступінь бакалавра прикладних наук і магістра інженерії з Університету Саймона Фрейзера в Британській Колумбії та MBA Каліфорнійського університету в Берклі.Вона також грає ключову роль у розробці нових специфічних для Китаю функцій для iPhone та iPad.</small></small></font></TD></TABLE></div></h6></div>


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





