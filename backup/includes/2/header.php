<?
	include($DOCUMENT_ROOT."/includes/pagetop.php");
	
	$wcontent=mysql_query("select * from banners_items where gid=2 and ivisible='y' order by rand() limit 0, 1");
	$back = "/hilites/data/images/".mysql_result($wcontent,$wi,"ifile");
?>
<body id="inner" class="body">

	<div id="wrap" style="background: url('<?=$back?>') no-repeat scroll left 225px transparent;">
	
		<div id="header">
			<div class="data">
<?
	include($DOCUMENT_ROOT."/includes/headercontent.php");
	include($DOCUMENT_ROOT."/includes/topmenu.php");
?>
			</div>
		</div>


		<div id="slider">
			<div class="data">
				<div class="illustration"><img src="/img/interhr.png" alt="" /></div>
				Кадровое агентство полного цикла по подбору персонала —<br>Ваш надёжный бизнес-партнёр на пути к успеху!
			</div>
		</div>

		<div id="content">
			<div class="data">

					<div class="top"></div>
					<div class="center">

						

						<div class="entire">
