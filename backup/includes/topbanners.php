					<a class="arrow left" href="#" id=bannersarrleft></a>
					<a class="arrow right" href="#" id=bannersarrright></a>
					
					<div class="holder" id=banners>
					
						<ul class="list">
<?
	$bannersgroup=1;
	$bannerscount=100;
	include($DOCUMENT_ROOT."/hilites/banners.cfg");
	include($DOCUMENT_ROOT."/hilites/banner_render.php");
?>
						</ul>
						<div class="clear"></div>
						
					</div>
<script>
$(document).ready(function(){
	$("#banners").jCarouselLite({
		scroll:1,
	    visible: 5,
	    start: 0,
  btnNext: "#bannersarrleft",
    btnPrev: "#bannersarrright"
	});
});




</script>
