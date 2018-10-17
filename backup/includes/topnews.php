<?
		$content=mysql_query("select * from news_groups where gid='6' order by gorder asc limit 0, 1");
		//
		$gid = mysql_result($content,0,"gid");
		$gname = mysql_result($content,0,"gname");
		$gurl = mysql_result($content,0,"gurl");
		$gtopcount = mysql_result($content,0,"gtopcount");
?>
<?
		//
		$content=mysql_query("select * from news_items where gid=$gid and ivisible='y' and idate<=now() order by idate desc, itime desc, iid desc limit 0, 3");
		$count=mysql_numrows($content);
		for($i=0;$i<$count;$i++){
			$iid=mysql_result($content,$i,"iid");
			$idate=frommysqldate(mysql_result($content,$i,"idate"));
			list($dateday,$datemonth,$dateyear)=explode("/",$idate);
			$datemonths = array("","янв","фев","мар","апр","мая","июн","июл","авг","сен","окт","ноя","дек");
	                //
			
			$iheadline=mysql_result($content,$i,"iheadline");
			$ipreview=mysql_result($content,$i,"ipreview");
			$ipictype=mysql_result($content,$i,"ipictype");
?>

					<div class="post">
						<div class="date">
							<div class="day"><?=$dateday?></div>
							<div class="month"><?=$datemonth?></div>
						</div>
						<a href="/news/<? echo $gurl; ?>/<? echo tourl($idate);?>/<? echo $iid; ?>/" class="headline"><?=$iheadline?></a>
						<div class="clear"></div>
						
						<a href="/news/<? echo $gurl; ?>/<? echo tourl($idate);?>/<? echo $iid; ?>/" class="preview"><?=$ipreview?></a>
					</div>
					
<?
	}
?>
