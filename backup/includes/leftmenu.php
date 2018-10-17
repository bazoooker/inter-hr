							<div class="caption"><?=$__pcmiobj['itext']?></div>
<?
				$__stmcntnt=mysql_query("select * from menu_items where iparent=".$__pcmiobj['iid']." and ivisible='y' order by iorder",$__conn);
				$__stmc=mysql_numrows($__stmcntnt);
				//
				if($__stmc>0) {
?>


							<ul class="list">
<?
					for ($j=0;$j<$__stmc;$j++) {
						$__sinote = mysql_result($__stmcntnt,$j,"inote");
						$__siname = mysql_result($__stmcntnt,$j,"iname");
						$__sitext = mysql_result($__stmcntnt,$j,"itext");
						$__silink = mysql_result($__stmcntnt,$j,"ilink");
						$__siid = mysql_result($__stmcntnt,$j,"iid");

						if(isthisparentofthat($__siid,$__cmi,$__conn)||($__siid==$__cmi)) {
?>
									<li class="active"><a href="<?=$__silink?>"><?=$__sitext?></a></li>
<?
						} else {
?>
									<li><a href="<?=$__silink?>"><?=$__sitext?></a></li>
<?
						}
?>			
<?
					}
?>
							</ul>
<?
				}
?>
