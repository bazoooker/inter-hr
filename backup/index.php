<?
include($DOCUMENT_ROOT."/includes/init.php");
include($DOCUMENT_ROOT."/includes/pagetop.php");
?>




<body id="index" class="body">
<!-- <body class="page-wrapper"> -->

	<div id="wrap">
	
		<div id="header">
			<div class="container">

<?
	include($DOCUMENT_ROOT."/includes/headercontent.php");
	include($DOCUMENT_ROOT."/includes/topmenu.php");
?>

			</div>
		</div>


		<div id="slider">
			<div class="container">
				<div class="illustration"><img src="/img/interhr.png" alt="" /></div>
				Кадровое агентство премиум класса по поиску и подбору персонала – <br>Ваш надежный партнер на пути к успеху!
			</div>
		</div>




		<div id="content">
			<div class="container">

				<div class="service">
					<!-- <div class="top"></div> -->
					<div class="center">
						
						<div class="row">
						
							<!-- <div class="wide-column"> -->
							<div class="col-8">
								
								<div class="caption">Работодателям</div>

								<!-- <div class="block"> -->
								<div class="row">
									<div class="col-6">	

										<ul class="list">
											<?
												$__tmcntnt=mysql_query("select * from menu_items where iparent=0 		and mid=4 and ivisible='y' order by iorder 												limit 0,6");
												$__tmc=mysql_numrows($__tmcntnt);
												//
												for ($i=0;$i<$__tmc;$i++) {
													$__inote = mysql_result($__tmcntnt,$i,"inote");
													$__iname = mysql_result($__tmcntnt,$i,"iname");
													$__itext = mysql_result($__tmcntnt,$i,"itext");
													$__ilink = mysql_result($__tmcntnt,$i,"ilink");
													$__iid = mysql_result($__tmcntnt,$i,"iid");
													//
											?>                                      
											        <li><a href="<?=$__ilink?>"><?=$__itext?></a></li>
											<?
												}
											?>
										</ul>
									</div>
								
								<!-- <div class="block"> -->
								<div class="col-6">
									<ul class="list">
										<?
											$__tmcntnt=mysql_query("select * from menu_items where iparent=0 and mid=4 and ivisible='y' order by iorder 										limit 6,6");
											$__tmc=mysql_numrows($__tmcntnt);
											//
											for ($i=0;$i<$__tmc;$i++) {
												$__inote = mysql_result($__tmcntnt,$i,"inote");
												$__iname = mysql_result($__tmcntnt,$i,"iname");
												$__itext = mysql_result($__tmcntnt,$i,"itext");
												$__ilink = mysql_result($__tmcntnt,$i,"ilink");
												$__iid = mysql_result($__tmcntnt,$i,"iid");
												//
										?>                                      
										        <li><a href="<?=$__ilink?>"><?=$__itext?></a></li>
										<?
											}
										?>
									</ul>
								</div>

								</div>

							</div>

							<!-- <div class="column"> -->
							<div class="col-4">
								<div class="caption">Соискателям</div>
								
								<!-- <div class="block"> -->
								<ul class="list">
<?
	$__tmcntnt=mysql_query("select * from menu_items where iparent=0 and mid=5 and ivisible='y' order by iorder limit 0,6");
	$__tmc=mysql_numrows($__tmcntnt);
	//
	for ($i=0;$i<$__tmc;$i++) {
		$__inote = mysql_result($__tmcntnt,$i,"inote");
		$__iname = mysql_result($__tmcntnt,$i,"iname");
		$__itext = mysql_result($__tmcntnt,$i,"itext");
		$__ilink = mysql_result($__tmcntnt,$i,"ilink");
		$__iid = mysql_result($__tmcntnt,$i,"iid");
		//
?>                                      
        <li><a href="<?=$__ilink?>"><?=$__itext?></a></li>
<?
	}
?>
								</ul>
								<!-- </div> -->
							</div>


						</div>

						<a href="/request/" class="button bb employers">Заявка на подбор персонала</a>

						<a href="/resume/" class="button bb candidate">Отправить резюме</a>

						<div class="clear"></div>

					</div>
					<div class="bottom"></div>
				</div>

				
				<div class="about">
					<div class="caption lined"><span>Главное о компании</span></div>
					
<?
	$include_document_id=36;
	include($DOCUMENT_ROOT."/documents/getdocument.php");
?>
					<div class="front-headline">Cреди наших клиентов известные российские бренды и компании:</div>
				</div>


				
				<div class="reviews">

<?
include($DOCUMENT_ROOT."/guestbook/guestbook.home.php");
?>
				</div>
				
				<div class="info-block">
				
					<div class="polls">
						<div class="caption">Опрос</div>
						
<?
include($DOCUMENT_ROOT."/voting/voting.php");
?>
						
					</div>
					
					
					<!-- table class="section weather" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td class="table-head" colspan="3">
								<span class="title">Погода в Москве,</span> 10 июля 2014
							</td>
						</tr>
						<tr>
							<td class="table-row-head">День</td>
							<td><span class="value">+340 C</span></td>
							<td><span class="note">ясно</span></td>
						</tr>
						<tr>
							<td class="table-row-head">Ночь</td>
							<td><span class="value">+170 C</span></td>
							<td><span class="note">дождь</span></td>
						</tr>
					</table -->

<?
	include($DOCUMENT_ROOT."/topbanners.php");
?>



				</div>
				<div class="clear"></div>

				<div class="clients">
<?
	include($DOCUMENT_ROOT."/includes/topbanners.php");
?>
				</div>

				<div class="blog">
					<div class="caption lined"><span>Обзоры & аналитика</span></div>
					
<?
	include($DOCUMENT_ROOT."/includes/topnews.php");
?>					
					<div class="clear"></div>
					
					<a href="/news/articles/" class="button sb">Архив статей</a>
					
				</div>


			</div>
		</div>
	</div>
	
<?
	include($DOCUMENT_ROOT."/includes/pagebottom.php");
?>