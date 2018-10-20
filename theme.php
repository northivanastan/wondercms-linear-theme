<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
	<meta name="description" content="<?=wCMS::page('description')?>">
	<meta name="keywords" content="<?=wCMS::page('keywords')?>">

	<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="<?=wCMS::asset('css/style.css')?>">-->
	<?=wCMS::css()?>
<link rel=stylesheet href="<?=wCMS::asset('css/style.css')?>">
	
<!--<script>if (document.getElementById('headnav').style.display == 'none'){document.getElementById('headnav').style.display = 'block';}else{document.getElementById('headnav').style.display = 'none';}</script>-->
</head>
<body>
<?=wCMS::alerts()?>
<?=wCMS::settings()?>
<div class=okhead><table style=width:100%><tr><td align=left width=40pt></td><td align=left><a style=color:#fff; class=heada href=<?=wCMS::url()?>><?=wCMS::get('config','siteTitle')?></a></td><td align=right><button class=menubutton onclick="if (document.getElementById('headnav').style.display == 'none'){document.getElementById('headnav').style.display = 'block';}else{document.getElementById('headnav').style.display = 'none';}">≡</button></td></tr></table></div>
<div class=okheadnav id=headnav><?=wCMS::menu()?></div>
<div class=top><?=wCMS::page('content')?></div>
<div class=bottom><?=wCMS::block('subside')?></div>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<?=wCMS::js()?>
</body>
