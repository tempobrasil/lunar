<?
global $params;
?>
<!DOCTYPE html>
<!--
Template Name: Nodelle
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
  <title><?= get_config('SITE_TITLE'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" type="image/png" href="<?= get_config('SITE_URL'); ?>img/favicon.png" />

  <!-- Parâmetros da Página -->
  <link rel="icon" href="<?= get_config('SITE_URL'); ?>img/favicon.png">
  <meta name="keywords" content="<?= get_config('SITE_TAGS'); ?>">
  <meta name="description" content="<?= get_config('SITE_DESCRIPTION'); ?>">
  <meta name="author" content="Z.BRA Estúdio (Balneário Camboriú, SC)">

  <!-- Metas do Facebook -->
  <meta property="og:locale" content="pt_BR">
  <meta property="og:url" content="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
  <meta property="og:title" content="<?= get_config('SITE_TITLE'); ?>">
  <meta property="og:description" content="<?= get_config('SITE_DESCRIPTION'); ?>">
  <meta property="og:site_name" content="<?= get_config('SITE_TITLE'); ?>">

  <!--
  <meta property="og:image" content="http://www.livresweb.com/images/shared2.jpg">
  <meta property="og:image:width" content="-1">
  <meta property="og:image:height" content="-1">
  -->


  <link href="<?= get_config('SITE_URL')?>site/bower_components/components-font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="<?= get_config('SITE_URL')?>site/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link href="<?= get_config('SITE_URL')?>site/layout/styles/tihh.css" rel="stylesheet" type="text/css" media="all">

  <link href="<?= get_config('SITE_URL')?>site/bower_components/qtip2/dist/jquery.qtip.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="<?= get_config('SITE_URL')?>site/bower_components/jAlert/dist/jAlert.css" rel="stylesheet" type="text/css" media="all">

  <link href="<?= get_config('SITE_URL')?>site/layout/scripts/chosen/chosen.min.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="<?= GetLink('site'); ?>"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="<?= GetLink('site/empresa'); ?>">Nossa Empresa</a></li>
        <li><a href="<?= GetLink('blog'); ?>">Blog</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +55 (47) 9 9650-6687</li>
        <li><i class="fa fa-envelope-o"></i> <a href="mailto:suporte@zbraestudio.com.br">suporte@zbraestudio.com.br</a> </li>
        <li><a href="<?= GetLink('login');?>" class="btn btn-sm">Entrar</a> </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <a href="<?= GetLink('site'); ?>"><img src="images/logo.png" id="logo"> </a>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="<?= (GetPage() == 'home'?'active':null); ?>"><a href="<?= GetLink('site/home'); ?>">Home</a></li>
        <li class="<?= (GetPage() == 'aplicativo'?'active':null); ?>"><a href="<?= GetLink('site/aplicativo'); ?>">O Aplicativo</a></li>
        <li class="<?= (GetPage() == 'depoimentos'?'active':null); ?>"><a href="<?= GetLink('site/depoimentos'); ?>">Depoimentos</a></li>
        <li class="<?= (GetPage() == 'convenios'?'active':null); ?>"><a href="<?= GetLink('site/convenios'); ?>">Convênios</a></li>
        <li class="<?= (GetPage() == 'preco'?'active':null); ?>"><a href="<?= GetLink('site/preco'); ?>">Preço</a></li>

      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->