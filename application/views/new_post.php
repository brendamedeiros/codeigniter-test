<html>
<head>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<title>UMAH</title>
<style>
* {
	margin: 0;
	padding: 0;
}
p.grey{
	font-size: 9pt;
	color: #000;
	font-family: arial;
	text-align: justify;
	line-height: 20px;
}
p.copyright {
	float: right;
	font-family: arial;
	font-size: 14px;
	color:#666;
	font-weight: bold;
	margin: 9px 0;
}
p.white {
	font-size: 9pt;
	color: #fff;
	font-family: arial;
	line-height: 20px;
}
p.responsabilidade {
	font-size: 0.7em;
	color: #000;
	font-family: arial;
	text-align: justify;
	margin-top: 5px;
	line-height: 16px;
}
h1.responsabilidade {
	font-size: 12px;
	font-family: arial;
	font-weight: bold;
}

p.menu {
	padding: 47px 7px;
	color: #fff;
	font-size: 13px;
	font-family: myriad pro;
}
#header {
	background-color: #e6e6e6;
	height: 72px;
	display: block;
}

#header img {
	float: left;
}
#tarja-azul {
	background-color: #1f76aa;
	height: 62px;
	display: block;
	margin: 9px 0 9px 0;
}
#wrapper {
	width: 808px;
	margin: 0 auto;
}
#container {
	display: inline-block;
	width: 100%;
}

#container-squares {
	width: 415px;
	display: block;
	float: left;
}

#square-gif {
	width: 200px;
	height: 200px;
	display:block;
	float: left;
}
#square-welcome {
	width: 180px;
	height: 180px;
	display:block;
	background-color: #00a0c6;
	float: right;
	padding: 10px;
}
#square-contact {
	width: 179px;
	height: 200px;
	display:block;
	background-color: #e6e6e6;
	float: left;
	padding: 10px;
	margin-top: 15px;
}
#square-text {
	width: 180px;
	height: 200px;
	display:block;
	background-color: #e6e6e6;
	float: right;
	padding: 10px;
	margin-top: 15px;
}
#container-menu { 
	float: right;
	/*width: 320px;*/
	width: 240px;
	/*margin: 110px 0 0 0;*/
	display: block;
}

#menu {
	width: 69px;
	height: 69px;
	display: block;
	float: left;
	margin: 10px 10px 0 0; 
}

.menufirstsquare { 
	background: #0099cc;
}
.menusecondsquare {
	background: #29a29c;
}
.menuthirdsquare {
	background: #10a2ad;
}
.menufourthsquare {
	background: #009999;
}
.menufifthsquare {
	background: #669900;
}
.menusixthsquare {
	background: #339966;
}
.menuseventhsquare {
	background: #7baa42;
}
.menueighthsquare {
	background: #7baa42;
}
#footer {
	width: 100%;
	border-top: 6px solid #e6e6e6;
	border-bottom: 6px solid #e6e6e6;
	height: 50px;
	margin-top: 15px;
	text-align: center;
	display: inline-block;
}
#footer ul {
	margin: 0 auto;
	list-style-type: none;
	margin: 15px 0;
}
#footer li {
	display: inline;
	margin: 0 auto;
	padding: 20px;
	color: #b3b3b3;
	font-size: 9pt;
	font-family: arial;
}
#container-pages {
	width: 960px; 
	margin: 0 auto;
}
#sidebar {
	/*width: 200px;*/
	width: 174px;
	float: left;
	display: block;
	/*background: #e6e6e6;*/
	border-right: 30px solid #000;
	height: 400px;
	padding: 0 5px;
}
#content {
	width: 480px;
	float: left;
	display: block;
	background: #fff;
	padding: 10px;
}
#content p {
	text-align: justify;
	font: 13px arial;
	line-height: 20px
}

#content h1 {
	font: 16px arial;
	font-weight: bold;
	color: #000;
	margin: -10px 0 10px 0;
}

#logo-home {
	width: 240px;
	display: inline-block;
	height: 180px;
	margin: 15px 0;
}


</style>

</head>
<body>
	<div id="header">
	<a href="#" title="UMAH"><img src="http://site1371580413.hospedagemdesites.ws/www/imagens/logo.gif" border="0" /></a>
</div>

<div id="tarja-azul"></div>


<div id="container-pages">

	<div id="sidebar">
		<img src="http://umah.com.br/www/bom%20layout_arquivos/siderurgia3.jpg" />
		<img src="http://umah.com.br/www/imagens/rotate.gif" />
	</div>
	<div id="content">
		
		<form action="<?=base_url()?>posts/new_post" method="post">
			<p>Title: <input name="title" type="text" /></p>
			<p>Description: <br/><textarea name="post"></textarea></p>
			<p><input type="submit" value="Add Post" /></p>
		</form>






	
	</div>

	<div id="container-menu">
		<div id="menu" class="menuFirstSquare">
			<p class="menu">
				inicial
			</p>
		</div>
		<div id="menu" class="menuSecondSquare"> 
			<p class="menu">
				empresa
			</p>
		</div>
		<div id="menu" class="menuThirdSquare"> 
			<p class="menu">
				serviços
			</p>
		</div>
		<div id="menu" class="menuFourthSquare"> 
			<p class="menu" style="padding-top: 31px;">
				trabalhos realizados
			</p>
		</div>
		<div id="menu" class="menuFifthSquare">
			<p class="menu">
				diretoria
			</p>
		</div>
		<div id="menu" class="menuSixthSquare">
			<p class="menu">
				clientes
			</p>
		</div>
		<div id="menu" class="menuSeventhSquare">
			<p class="menu">
				localização
			</p>
		</div>
		<div id="menu" class="menuEighthSquare">
			<p class="menu">
				contato
			</p>
		</div>
</div>
<div id="footer">
		<ul>
			<li>inicial</li>
			<li>empresa</li>
			<li>contato</li>
		</ul>
	</div>

	<p class="copyright"> &copy; 2014 Equipe UMAH- Todos os Direitos Reservados</p>
</div>
</body>
</html>
