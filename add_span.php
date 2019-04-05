<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="ja" class="ie6 ielt8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 7 ]>    <html lang="ja" class="ie7 ielt8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 8 ]>    <html lang="ja" class="ie8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ja">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>すべての文字にspanで組みます</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(function(){
	
	$('.service-contents-p01').children().addBack().contents().each(function() {
    if (this.nodeType == 3) {
        $(this).replaceWith($(this).text().replace(/(\S)/g, '<span>$1</span>'));
    }
	
});
	
});

</script>

<style>
.service-contents-p01{
	font-size:22px;
	}

.service-contents-p01 span{
	display:inline-block;
	margin:0 2px;
	background-color:#FFCDCE;
	background-color:#FFCDCE;
	}	
</style>


</head>

<body class="contents_area" id="header">




<div>

<p class="service-contents-p01">ダミーテキストダミーテ,キストダミ.ーテキストダミ.ーテキ,ストダミーテキスト</p>


</div>




</body>
</html>
