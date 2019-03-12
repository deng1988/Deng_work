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
<title>BOX-STYLE</title>
<style>

body{
	padding:0 !important;
	margin:0 !important;
	}


.coming-soon-wrapper {
	max-width: 600px;
	margin: 60px auto;
	box-sizing: border-box;
	padding: 0 10px;
}
.coming-soon-box {
	box-sizing: border-box;
	/*border: 1px solid #ccc;*/
	padding: 80px 0px;
	background-color: #fafafa;
	text-align: center;
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
	position:relative;
}


.coming-soon-box:before, .coming-soon-box:after {
	position: absolute;
	content: "";
	top: 10px;
	bottom: 15px;
	left: 10px;
	width: 50%;
	box-shadow: 0 15px 10px rgba(0, 0, 0, 0.5);
	-webkit-transform: rotate(-3deg);
	-moz-transform: rotate(-3deg);
	-o-transform: rotate(-3deg);
	-ms-transform: rotate(-3deg);
	transform: rotate(-3deg);
	z-index: -1;
}
.coming-soon-box:after {
	right: 10px;
	left: auto;
	-webkit-transform: rotate(3deg);
	-moz-transform: rotate(3deg);
	-o-transform: rotate(3deg);
	-ms-transform: rotate(3deg);
	transform: rotate(3deg);
}
.coming-soon-p01 {
	font-size: 40px;
	font-weight: 500;
}
.coming-soon-p02 {
	font-size: 15px;
}

</style>
</head>

<body class="contents_area" id="header">

<div class="coming-soon-wrapper">
  <div class="coming-soon-box">
    <p class="coming-soon-p01 en1">COMING SOON</p>
    <p class="coming-soon-p02">準備中</p>
  </div>
</div>


</body>
</html>
