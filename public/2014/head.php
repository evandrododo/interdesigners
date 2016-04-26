<? $_SERVER[HTTP_HOST]=='localhost' ? $remover = '/interdesigners' : $remover = '' ; ?>
<base href="http://<?=$_SERVER['HTTP_HOST']?><?=$remover?>/" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<? if (strpos($_SERVER['PHP_SELF'], 'simposio')!==false) { ?>
<meta name="description" content="O conhecimento científico e as demais parcelas da vivência acadêmica não mais como imiscíveis, mas complementares." />
<meta property="og:image" content="http://www.rmisto.com.br/img/simp_fb_share.jpg" />
<? } else { ?>
<meta name="description" content="Misture o 8º R Design SP com o 16º Interdesigners e o 1º Simpósio Interdesigners. Adicione um tomate e pronto: R Misto - Bauru 2014" />
<meta property="og:image" content="http://www.rmisto.com.br/img/fb_share.jpg" />
<? } ?>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Exo:800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="screen" href="css/estilo.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" ></script>
<script type="text/javascript" src="js/scripts.js" ></script>
