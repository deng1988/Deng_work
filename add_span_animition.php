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
	
	
	$('.service-contents-p01 span').each(function() {
            var iin01 = $(this).index();
			
			/*if($(window).width() < 800){
				iin = iin01 * 0.08 + 5;	
				}else{}*/

				iin = iin01 * 0.03;	
			
			$(this).css({"animation-delay" : iin + "s" ,"-ms-animation-delay" : iin + "s" ,"-moz-animation-delay" : iin + "s" ,"-webkit-animation-delay" : iin + "s" ,});
        });
	
});
	
});

</script>
<style>
.service-contents-p01 {
	font-size: 22px;
}
.service-contents-p01 span {
	display: inline-block;
	margin: 0 2px;
	background-color: #FFCDCE;
	-webkit-animation: jumpAnimations 1s ease-out infinite;
	-moz-animation: jumpAnimations 1s ease-out infinite;
	-ms-animation: jumpAnimations 1s ease-out infinite;
	animation: jumpAnimations 1s ease-out infinite;
}
 @-webkit-keyframes jumpAnimations {
0% {
 transform: translate(0, 0%);
}
12.5% {
 transform: translate(0, -10%);
}
 25% {
 transform: translate(0, 0%);
}
100% {
 transform: translate(0, 0%);
}
}
@-moz-keyframes jumpAnimations {
0% {
 transform: translate(0, 0%);
}
12.5% {
 transform: translate(0, -10%);
}
 25% {
 transform: translate(0, 0%);
}
100% {
 transform: translate(0, 0%);
}
}
@-ms-keyframes jumpAnimations {
0% {
 transform: translate(0, 0%);
}
12.5% {
 transform: translate(0, -10%);
}
 25% {
 transform: translate(0, 0%);
}
100% {
 transform: translate(0, 0%);
}
}
@keyframes jumpAnimations {
0% {
 transform: translate(0, 0%);
}
12.5% {
 transform: translate(0, -10%);
}
 25% {
 transform: translate(0, 0%);
}
100% {
 transform: translate(0, 0%);
}
}
</style>
</head>

<body class="contents_area" id="header">
<div>
  <p class="service-contents-p01">ダミーテキストダミーテ,キストダミ.ーテキストダミ.ーテキ,ストダミーテキスト</p>
</div>
</body>
</html>
