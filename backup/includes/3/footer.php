
<?
	$content=mysql_query("select * from resume_groups where gparent=0 and gvisible='y' order by gsort");
	$count=mysql_numrows($content);
	for($i=0;$i<$count;$i++) {
		//
		$gid = mysql_result($content,$i,"gid");
		$gname = mysql_result($content,$i,"gname");
		$gdesc = mysql_result($content,$i,"gdesc");
		$sscount=mysql_result(mysql_query("select sum(iwarr) from resume_items where gid like '%|$gid|%' and ivisible='y'"), 0, "sum(iwarr)");
?>
	<a class="product-name" href=/resume_bank/category/<?=$gid?>/><?=$gname?> <span class=quantity><sup><?=$sscount?></sup></span></a>
<?
	}
?>


						</div>

						<div class="clear"></div>

				</div>

				<div class="bottom"></div>

			</div>
		</div>
	</div>
	
<?
	include($DOCUMENT_ROOT."/includes/pagebottom.php");
?>