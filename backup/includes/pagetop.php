<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  -->

<!DOCTYPE html>

<html lang="ru" xmlns="http://www.w3.org/1999/xhtml"> 

<head>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name = "format-detection" content = "telephone=no">
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1251"></meta> 

<link rel="shortcut icon" href="/favicon.ico"></link>

<!-- старые стили. Отключены -->
<!-- <link rel="stylesheet" type="text/css" href="/css/layout.css"></link> -->
<!-- <link rel="stylesheet" type="text/css" href="/css/styles.css"></link> -->

<!-- новые стили -->
<link rel="stylesheet" type="text/css" href="/css/main.css"></link>
<link rel="stylesheet" type="text/css" href="/css/custom.css"></link>

<meta name="cmsmagazine" content="996bfde9a65c1de059ad6f946ad2f863" />
<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="/js/jquery-1.6.1.min.js"></script>

<?
	include($DOCUMENT_ROOT."/tdk/tdk.php");
?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<title><?=($__page['TITLE']?$__page['TITLE']:$metas['TITLE'])?></title>
<meta name='yandex-verification' content='5f7a6697d9a46e6a' />
<meta name="Description" content="<?=($__page['DESCRIPTION']?$__page['DESCRIPTION']:$metas['DESCRIPTION'])?>" />
<meta name="Keywords" content="<?=($__page['KEYWORDS']?$__page['KEYWORDS']:$metas['KEYWORDS'])?>" />
<script type="text/javascript" src="/js/slimbox2.js"></script>
<link rel="stylesheet" href="/css/slimbox2.css" type="text/css" media="screen" />
<script type="text/javascript" src="/js/jcarousellite_1.0.1.min.js"></script>
<link type="text/css" rel="stylesheet" href="/js/qtip2/jquery.qtip.css" />
<script type="text/javascript" src="/js/qtip2/jquery.qtip.js"></script>
<script type="text/javascript" src="/js/priceformat.js"></script>
<script type="text/javascript" src="/js/qtip2/jquery.imagesloaded.pkg.min.js"></script>
<script type="text/javascript" src="/js/jquery.maskedinput-1.2.2.js" type="text/javascript"></script>
<script>
		$(document).ready(function(){
			$('[rel="phone"]').mask("+9 999 9999999");
		});
</script>
<script>
	function preptip() {
		$('[title!=""]').qtip({
	        /* show: 'click', */
		 content: {
			        attr: 'title'
		    },
		    position: {
			at: 'top center',
		        my: 'bottom center'
		    }
		});
	}

	$(document).ready(function(){
		setTimeout('preptip()',2000);
	});
</script>

</head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36582901-2', 'auto');
  ga('send', 'pageview');

</script>
