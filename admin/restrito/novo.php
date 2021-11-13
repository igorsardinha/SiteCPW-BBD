<?php
include("../conectar.php");
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
$nivel_necessario = 5;
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
  // Destrói a sessão por segurança
  // Redireciona o visitante de volta pro login
  header("Location: index.php"); exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Compuway Bebedouro</title>


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="msapplication-TileImage" content="imgs/faviconbig.png"/>
	<link rel="shortcut icon" href="imgs/favicon.png" />

		<link id="wsite-base-style" rel="stylesheet" type="text/css" href="../css/sites.css" />
<link rel="stylesheet" type="text/css" href="../css/ofancybox.css" />
<link rel="stylesheet" type="text/css" href="../css/social-icons.css" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="../css/main_style.css" title="wsite-theme-css" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />

<link href='http://fonts.googleapis.com/css?family=Libre+Franklin:400,300,300italic,200,200italic,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Questrial&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<style type='text/css'>
.wsite-elements.wsite-not-footer:not(.wsite-header-elements) div.paragraph, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) p, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-block .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-description, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .wsite-form-field label, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {font-family:"Libre Franklin" !important;font-style:normal !important;text-transform:  none !important;letter-spacing: 0px !important;}
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
.wsite-elements.wsite-footer div.paragraph, .wsite-elements.wsite-footer p, .wsite-elements.wsite-footer .product-block .product-title, .wsite-elements.wsite-footer .product-description, .wsite-elements.wsite-footer .wsite-form-field label, .wsite-elements.wsite-footer .wsite-form-field label{}
.wsite-elements.wsite-not-footer:not(.wsite-header-elements) h2, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-long .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-large .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {font-family:"Lato" !important;font-weight:300 !important;}
#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
.wsite-elements.wsite-footer h2, .wsite-elements.wsite-footer .product-long .product-title, .wsite-elements.wsite-footer .product-large .product-title, .wsite-elements.wsite-footer .product-small .product-title{}
#wsite-title {font-family:"Questrial" !important;font-style:normal !important;letter-spacing: 2px !important;}
.wsite-menu-default a {font-family:"Muli" !important;letter-spacing: 2px !important;}
.wsite-menu a {}
.wsite-image div, .wsite-caption {}
.galleryCaptionInnerText {}
.fancybox-title {}
.wslide-caption-text {}
.wsite-phone {}
.wsite-headline,.wsite-header-section .wsite-content-title {}
.wsite-headline-paragraph,.wsite-header-section .paragraph {font-family:"Montserrat" !important;font-weight:400 !important;font-style:normal !important;}
.wsite-button-inner {font-family:"Lato" !important;font-weight:400 !important;text-transform:  uppercase !important;letter-spacing: 2px !important;}
.wsite-not-footer blockquote {}
.wsite-footer blockquote {}
.blog-header h2 a {}
#wsite-content h2.wsite-product-title {}
.wsite-product .wsite-product-price a {}
.wsite-button-large .wsite-button-inner {font-size:15px !important;}
@media screen and (min-width: 767px) {.wsite-elements.wsite-not-footer:not(.wsite-header-elements) div.paragraph, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) p, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-block .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-description, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .wsite-form-field label, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {font-size:16px !important;line-height:22px !important;}
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
.wsite-elements.wsite-footer div.paragraph, .wsite-elements.wsite-footer p, .wsite-elements.wsite-footer .product-block .product-title, .wsite-elements.wsite-footer .product-description, .wsite-elements.wsite-footer .wsite-form-field label, .wsite-elements.wsite-footer .wsite-form-field label{}
.wsite-elements.wsite-not-footer:not(.wsite-header-elements) h2, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-long .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-large .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {font-size:35px !important;}
#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
.wsite-elements.wsite-footer h2, .wsite-elements.wsite-footer .product-long .product-title, .wsite-elements.wsite-footer .product-large .product-title, .wsite-elements.wsite-footer .product-small .product-title{}
#wsite-title {font-size:24px !important;}
.wsite-menu-default a {}
.wsite-menu a {}
.wsite-image div, .wsite-caption {}
.galleryCaptionInnerText {}
.fancybox-title {}
.wslide-caption-text {}
.wsite-phone {}
.wsite-headline,.wsite-header-section .wsite-content-title {}
.wsite-headline-paragraph,.wsite-header-section .paragraph {}
.wsite-button-inner {}
.wsite-not-footer blockquote {}
.wsite-footer blockquote {}
.blog-header h2 a {}
#wsite-content h2.wsite-product-title {}
.wsite-product .wsite-product-price a {}
}
#partecima{
	color: white;
}
input[type=text], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 20%;
    background-color: #EF6C00;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #6A1B9A;
}

</style>
<style>
.wsite-background {background-image: url("imgs/logo-bebedouro.png") !important;background-repeat: no-repeat !important;background-position: 50.00% 56.12% !important;background-size: 100% !important;background-color: transparent !important;}
body.wsite-background {background-attachment: fixed !important;}.wsite-background.wsite-custom-background{ background-size: cover !important}
</style>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'></script>

<script type="text/javascript" src="js/stl.js"></script>
</script>
		
	</head>
  <body class="header-page  wsite-page-index  full-width-on  wsite-theme-light"><div class="body-wrap">
		<div id="header">
			<div class="nav-trigger hamburger">
				<div class="open-btn">
					<span class="mobile"></span>
					<span class="mobile"></span>
					<span class="mobile"></span>
				</div>
			</div>
			<div id="sitename"><span class="wsite-logo">

	<a href="">
		<img src="imgs/logo-bebedouro.png" />
	</a>

</span></div>
		</div>

		<center>
		  <p style="font-family: 'Verdana';">&nbsp;</p>
		  <p style="font-family: 'Verdana';">Olá, <?php echo $_SESSION['UsuarioNome']; ?></p>
		  <a href="logout.php"><h3>Sair</h3></a>
    </center>
		<br>
		<br>
		<div id="wrapper">
			<div class="bg-wrapper">
				<div id="navigation"><ul class="wsite-menu-default">
		<li id="pg604227493147097462" class="wsite-menu-item-wrap">
			<a
						href="master.php"
				class="wsite-menu-item"
				>
				Vizualizar Matriculas
			</a>
			
		</li>
		<li id="active" class="wsite-menu-item-wrap">
			<a
						href="novo.php"
				class="wsite-menu-item"
				>
				Novo Colaborador
			</a>
			
		</li>
		<li id="pg436148583955225612" class="wsite-menu-item-wrap">
			<a
						href="exclui.php"
				class="wsite-menu-item"
				>
				Excluir Colaborador
			</a>
			
		</li>
</ul>
</div>
</div>
			</div>
		</div>

		<!--Parte do celular-->
		</div>

		<div class="navmobile-wrapper">
			<div id="navmobile" class="nav"><ul class="wsite-menu-default">
		<li id="pg436148583955225612" class="wsite-menu-item-wrap">
			<a
						href="master.html"
				class="nav-menu-item"
				>
				Vizualizar Matriculas
			</a>
			
		</li>
		<li id="active" class="wsite-menu-item-wrap">
			<a
						href="novo.html"
				class="nav-menu-item"
				>
				Novo Colaborador
			</a>
			
		</li>
		<li id="pg436148583955225612" class="wsite-menu-item-wrap">
			<a
						href="profissoes.html"
				class="nav-menu-item"
				>
				Excluir Colaborador
			</a>
			
		</li>
</ul>
</div>
		</div>
		<div id="adiconaruser">
		<center>
			<h1>Cadastrar um colaborador!</h1>
			<br>
			<br>
			<br>
			<form action="acao.php" method="POST">
    <input type="hidden" name="txt_hidden" value="cadastrar" />
	<div>
	Nome do colaborador
    </div>
	<div>
    <input type="text" name="nome" size="30" />
    </div>
	<div>
    Usuario do colaborador
    </div>
	<div>
    <input type="text" name="user" size="30" />
    </div>
	<div>
    Email do colaborador
    </div>
	<div>
    <input type="text" name="email" size="30" />
    </div>
	<div>
    Senha do colaborador
    </div>
	<div>
    <input type="password" name="senha" size="30" />
    </div>
	<div>
    Repita a senha
    </div>
	<div>
    <input type="password" name="confsenha" size="30" />
    </div>
	<div>
	Nivel de acesso
	</div>
	<div>
	<select name='nivel'>
      <option value='1'>Básico</option>
      <option value='5'>Total</option>
	</select>
    </div>
	<div>
	<br>
	<br>
    <input type="submit" name="enviar" value="Cadastrar"/>
    </div>
</form>
	<br>
	<br>
		<br>
	<br>
		<br>
	<br>
		<br>
	<br>	<br>
	<br>
		<br>
	<br>
		</div>
	</center>
	
<script language="javascript" src="js/plugins.js"></script>
<script language="javascript" src="js/custom.js"></script>
<script language="javascript" src="js/mobile.js"></script>


		
	</body>
</html>
