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
				�������� ��������� ������� ����� �� ������� ��������� �<br>��� ������� ������-������ �� ���� � ������!
			</div>
		</div>

		<div id="content">
			<div class="data">

					<div class="top"></div>
					<div class="center">

						<div class="service">

<?
	include($DOCUMENT_ROOT."/includes/leftmenu.php");
?>
<?
	if(isstartswith($REQUEST_URI,"/employer/")||isstartswith($REQUEST_URI,"/calc/")||isstartswith($REQUEST_URI,"/request/")) {
?>
<a class="button bb employers-small" href="/request/">������ �� ������</a>
<?
	} 
?>

<?
	if(isstartswith($REQUEST_URI,"/employee/")||isstartswith($REQUEST_URI,"/products/")||isstartswith($REQUEST_URI,"/resume/")) {
?>
<a class="button bb employers-small" href="/resume/">��������� ������</a>
<?
	} 
?>

						</div>

						<div class="info" style="min-height:400px;" id=rightcontent>