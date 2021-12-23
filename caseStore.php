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
background-color:#000000; /* Путь к фоновому */
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


.boxintro {
  background-image:  url(.png);
  background-color: #292929;   /*#F8A1FF	#C5C5C5*/;
  margin-top: % ;
  width: 100%;
  height: 96vh;
  max-width: 100%;  
  color: #ffffff;
  text-align: center;
  font-family: Helvetica;
  font-weight: 560; 
  font-size: 56px; 
  line-height: 100%;
  font-stretch: normal;
}

.boxcase{
  background-image:  url(.png);
  background-color: #EBEBEB;   /*#F8A1FF	#C5C5C5*/;
  margin-top: % ;
  width: 100%;
  height: 180vh;
  max-width: 100%;  
  color: #000000;
  text-align: center;
  font-family: Helvetica;
  font-weight: 460; 
  font-size: 26px; 
  line-height: 100%;
  font-stretch: normal;
}

.foot {
  background-color:  #FFFFFF  /*#F8A1FF #C5C5C5*/;
  background-image: url(.jpg); /*#F8A1FF  #C5C5C5*/;
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


<div class="boxintro">
<br><br><span style=" line-height: 0.2em; font-weight:normal; color:#ececec
; font-size:74px;">Нові AirPods Pro</span> </small><br><br>
<p align="center"><img src="caseintro.png" width=60%>
</div>

<div class="boxcase">
<br><br><br><br<span style=" line-height: 0.2em; font-weight:normal; color:#343436; font-size:74px;">Аксесуари</span> </small><br><br>


<span style=" line-height: 0.2em; font-weight:normal; color:#343436; font-size:24px;">
<TABLE WIDTH="100%" border="00" align=center CELLSPACING="20" spacing="0" bordercolor=""  >

<TR align=center>
<TD bgcolor="white" align=center height="400px"  >
<p align="center"><img src="m-ic1airpods.png" height="260px"><br><br><br><br><br>AirPods Pro

<br><br><br><br><br><br><br><br>Купити

</TD>
<TD bgcolor="white" align=center height="400px"  >
<p align="center"><img src="m-ic2earpods.png" height="260px"><br><br><br><br><br>EarPods
</TD>
<TD bgcolor="white" align=center height="400px"  >
<p align="center"><img src="m-ic3airport.png" height="260px"><br><br><br><br><br>AirPort Extreme Base Station
</TD>
<TD bgcolor="white" align=center height="400px"  >
<p align="center"><img src="m-ic4charger.png" height="260px"><br><br><br><br><br>USB-C Power Adapter
</TD></TR>

<TR align=center>
<TD bgcolor="white" align=center height="400px"  >
<p align="center"><img src="m-ic5tv.png" height="260px"><br><br><br><br><br>
Apple TV 4K
</TD>
<TD bgcolor="white" align=center height="400px"  >
<p align="center"><img src="m-ic6cable.png" height="260px"><br><br><br><br><br>Lightning to USB Cable
<TD bgcolor="white" align=center height="400px"  >
<p align="center"><img src="m-ic7cableto35mm.png" height="260px"><br><br><br><br><br>Adapter to 3.5 mm 
</TD>
<TD bgcolor="white" align=center height="400px"  >
<p align="center"><img src="m-ic8magsafe.png" height="260px"><br><br><br><br><br>MagSafe
</TR></table><br>
</TD>


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





