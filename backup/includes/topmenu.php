				<ul class="menu">
					<!-- li><a href="#">о компании</a></li>
					<li><a class="dropdown" href="#">работодателям</a></li -->
<?
	$__tmcntnt=mysql_query("select * from menu_items where iparent=0 and mid=1 and ivisible='y' order by iorder");
	$__tmc=mysql_numrows($__tmcntnt);
	//
	for ($i=0;$i<$__tmc;$i++) {
		$__inote = mysql_result($__tmcntnt,$i,"inote");
		$__iname = mysql_result($__tmcntnt,$i,"iname");
		$__itext = mysql_result($__tmcntnt,$i,"itext");
		$__ilink = mysql_result($__tmcntnt,$i,"ilink");
		$__iid = mysql_result($__tmcntnt,$i,"iid");
		//
		if(isthisparentofthat($__iid,$__cmi,$__conn)||($__iid==$__cmi)) {
?>                                      
        <li class=active><a href="<?=$__ilink?>"  class=menu><?=$__itext?></a></li>
<?
		} else {
?>
        <li><a href="<?=$__ilink?>"  class=menu><?=$__itext?></a></li>
<?
		}
	}
?>
					<li class="stick"></li>
				</ul>
